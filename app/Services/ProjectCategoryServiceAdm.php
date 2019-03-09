<?php


namespace FRD\Services;


use FRD\Interfaces\ProjectCategoryRepository;
use FRD\Interfaces\ProjectCategoryService;
use Illuminate\Support\Facades\Session;

class ProjectCategoryServiceAdm implements ProjectCategoryService
{
    private $repository;

    public function __construct(ProjectCategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(array $data)
    {
        try {
            $data['slug'] = $this->sanitizeString($data['name']);
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
            $data['slug'] = $this->sanitizeString($data['name']);
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

    public function sanitizeString($string)
    {
        $what = array('ä', 'ã', 'à', 'á', 'â', 'ê', 'ë', 'è', 'é', 'ï', 'ì', 'í', 'ö', 'õ', 'ò', 'ó', 'ô', 'ü', 'ù', 'ú', 'û', 'À', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ', 'ç', 'Ç', ' ', '-', '(', ')', ',', ';', ':', '|', '!', '"', '#', '$', '%', '&', '/', '=', '?', '~', '^', '>', '<', 'ª', 'º');
        $by = array('a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'A', 'A', 'E', 'I', 'O', 'U', 'n', 'n', 'c', 'C', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_');

        return (strtolower(str_replace($what, $by, $string)));
    }

}