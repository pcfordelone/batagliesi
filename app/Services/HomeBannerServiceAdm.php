<?php


namespace FRD\Services;


use FRD\Interfaces\HomeBannerRepository;
use FRD\Interfaces\HomeBannerService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class HomeBannerServiceAdm implements HomeBannerService
{
    private $repository;

    public function __construct(HomeBannerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(array $data)
    {
        try {
            (isset($data['status'])) ? null : $data['status'] = 0;

            if (isset($data['url'])) {
                $image = uniqid('banner') . '.' . $data['url']->getClientOriginalExtension();
                Storage::disk('public_banners')->put($image, File::get($data['url']));
                $data['url'] = $image;
            }

            $entity =  $this->repository->create($data);
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
            (isset($data['status'])) ? null : $data['status'] = 0;

            if (isset($data['url'])) {
                if ($entity->default_img != "") {
                    Storage::disk('public_banners')->delete($entity->default_img);
                }
                $image = uniqid('banner') . '.' . $data['url']->getClientOriginalExtension();
                Storage::disk('public_banners')->put($image, File::get($data['url']));
                $data['url'] = $image;
            }

            $entity =  $this->repository->update($data, $id);
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

            if ($entity->default_img != "") {
                Storage::disk('public_banners')->delete($entity->default_img);
            }

            $this->repository->delete($id);

            return true;

        } catch (\Exception $e) {

            Session::flash('warning', "Problemas ao tentar excluir modelo. Se o problema persistir, contacte o administrador do sistema.<br/><br/><strong>Código do Erro: </strong>{$e->getCode()}<br/><br/><strong>Mensagem de Erro: </strong><br/>{$e->getMessage()}");
            return false;
        }
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

}