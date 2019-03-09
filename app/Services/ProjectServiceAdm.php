<?php


namespace FRD\Services;


use FRD\Entities\ProjectTag;
use FRD\Interfaces\ProjectImageRepository;
use FRD\Interfaces\ProjectRepository;
use FRD\Interfaces\ProjectService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProjectServiceAdm implements ProjectService
{
    private $repository;
    private $project_image_repository;
    private $tag_model;

    public function __construct(ProjectRepository $repository, ProjectImageRepository $projectImageRepository, ProjectTag $projectTag)
    {
        $this->repository = $repository;
        $this->project_image_repository = $projectImageRepository;
        $this->tag_model = $projectTag;
    }

    public function store(array $data)
    {
        try {
            $data['slug'] = $this->sanitizeString($data['name']);
            (isset($data['status'])) ? null : $data['status'] = 0;
            (isset($data['featured'])) ? null : $data['featured'] = 0;

            if(isset($data['default_img'])) {
                $image = uniqid('default_img') . '.' . $data['default_img']->getClientOriginalExtension();
                Storage::disk('public_projects')->put($image, File::get($data['default_img']));
                $data['default_img'] = $image;
            }

            $entity =  $this->repository->create($data);

            $tags = $this->prepareTags($data['tags']);
            $entity->project_tags()->sync($tags);

            if (isset($data['images']) and $data['images'][0] != '') {
                foreach ($data['images'] as $image) {
                    $img = uniqid('project-') . '.' . $image->getClientOriginalExtension();
                    Storage::disk('public_projects')->put($img, File::get($image));

                    $img_data = [
                        'title'         => $entity->name,
                        'alt'           => $entity->name,
                        'url'           => $img,
                        'project_id'    => $entity->id
                    ];

                    $this->project_image_repository->create($img_data);
                }
            }

            Session::flash("success", "Item adicionado com sucesso.");

            return $entity;

        } catch (\Exception $e) {

            Session::flash("danger", "Problemas ao adicionar item. Tente novamente e se o problema persistir, contacte o adminstrador do sistema.<br/><br/>Código de Erro: {$e->getCode()}<br/>{$e->getMessage()}");
            return false;
        }
    }

    public function update(array $data, $id)
    {
        try {
            $entity =  $this->repository->find($id);
            $data['slug'] = $this->sanitizeString($data['name']);
            (isset($data['status'])) ? null : $data['status'] = 0;
            (isset($data['featured'])) ? null : $data['featured'] = 0;

            if (isset($data['default_img'])) {
                if ($entity->default_img != "") {
                    Storage::disk('public_projects')->delete($entity->default_img);
                }
                $image = uniqid('default_img') . '.' . $data['default_img']->getClientOriginalExtension();
                Storage::disk('public_projects')->put($image, File::get($data['default_img']));
                $data['default_img'] = $image;
            }

            $entity =  $this->repository->update($data, $id);
            $tags = $this->prepareTags($data['tags']);
            $entity->project_tags()->sync($tags);

            if (isset($data['images']) and $data['images'][0] != '') {
                foreach ($data['images'] as $image) {
                    $img = uniqid('project-') . '.' . $image->getClientOriginalExtension();
                    Storage::disk('public_projects')->put($img, File::get($image));

                    $img_data = [
                        'title'         => $entity->name,
                        'alt'           => $entity->name,
                        'url'           => $img,
                        'project_id'    => $entity->id
                    ];

                    $this->project_image_repository->create($img_data);
                }
            }

            Session::flash("success", "Item <strong>{$entity->name}</strong> foi atualizado com sucesso.");

            return $entity;

        } catch (\Exception $e) {

            Session::flash('warning', "Problemas ao gravar o item selecionado. Se o problema persistir, contacte o administrador do sistema.<br/><br/><strong>Código do Erro: </strong>{$e->getCode()}<br/><br/><strong>Mensagem de Erro: </strong><br/>{$e->getMessage()}");
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $entity = $this->repository->find($id);

            foreach ($entity->project_images as $image) {
                try {
                    Storage::disk('public_projects')->delete($image->url);
                    $this->project_image_repository->delete($image->id);

                } catch (\Exception $e) {
                    Session::flash('warning', "Problemas ao tentar excluir foto. Se o problema persistir, contacte o administrador do sistema.<br/><br/><strong>Código do Erro: </strong>{$e->getCode()}<br/><br/><strong>Mensagem de Erro: </strong><br/>{$e->getMessage()}");
                    return false;
                }
            }

            if ($entity->default_img != "") {
                Storage::disk('public_projects')->delete($entity->default_img);
            }

            $this->repository->delete($id);

            return true;

        } catch (\Exception $e) {

            Session::flash('warning', "Problemas ao tentar excluir modelo. Se o problema persistir, contacte o administrador do sistema.<br/><br/><strong>Código do Erro: </strong>{$e->getCode()}<br/><br/><strong>Mensagem de Erro: </strong><br/>{$e->getMessage()}");
            return false;
        }
    }

    public function add_images(array $data, $id)
    {
        $entity = $this->repository->find($id);

        if (isset($data['images']) and $data['images'][0] != '') {
            foreach ($data['images'] as $image) {
                $img = uniqid('project-') . '.' . $image->getClientOriginalExtension();
                Storage::disk('public_projects')->put($img, File::get($image));

                $img_data = [
                    'title'         => $entity->name,
                    'alt'           => $entity->name,
                    'url'           => $img,
                    'blog_post_id'      => $entity->id
                ];

                $this->project_image_repository->create($img_data);
            }
        }

        return $entity;
    }

    public function rm_images(array $data, $id)
    {
        foreach ($data['images'] as $image_id) {
            $img = $this->project_image_repository->find($image_id);
            try {
                Storage::disk('public_projects')->delete($img->url);
                $this->project_image_repository->delete($img->id);

            } catch (\Exception $e) {
                Session::flash('warning', "Problemas ao tentar excluir foto. Se o problema persistir, contacte o administrador do sistema.<br/><br/><strong>Código do Erro: </strong>{$e->getCode()}<br/><br/><strong>Mensagem de Erro: </strong><br/>{$e->getMessage()}");
                return false;
            }
        }

        return true;
    }

    public function changeStatus($id, $element)
    {
        $data = $this->repository->find($id);

        if ($element == 'status')
            ($data->status == 0) ? $data->status = 1 : $data->status = 0;

        if ($element == 'featured')
            ($data->featured == 0) ? $data->featured = 1 : $data->featured = 0;

        $data->save();

        return true;
    }

    public function sanitizeString($string)
    {
        $what = array('ä', 'ã', 'à', 'á', 'â', 'ê', 'ë', 'è', 'é', 'ï', 'ì', 'í', 'ö', 'õ', 'ò', 'ó', 'ô', 'ü', 'ù', 'ú', 'û', 'À', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ', 'ç', 'Ç', ' ', '-', '(', ')', ',', ';', ':', '|', '!', '"', '#', '$', '%', '&', '/', '=', '?', '~', '^', '>', '<', 'ª', 'º');
        $by = array('a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'A', 'A', 'E', 'I', 'O', 'U', 'n', 'n', 'c', 'C', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_');

        return (strtolower(str_replace($what, $by, $string)));
    }

    public function prepareTags($tags_input)
    {
        $tags = array_filter(array_map('trim', explode(',', $tags_input)));
        $project_tags = [];

        foreach ($tags as $t) {
            $tag = $this->tag_model->firstOrCreate(['name' => $t]);
            $project_tags[] = $tag->id;
        }

        return $project_tags;
    }
}