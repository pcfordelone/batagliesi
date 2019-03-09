<?php


namespace FRD\Services;


use FRD\Interfaces\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserServiceAdm
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(array $data)
    {
        try {
            $data['password'] = bcrypt($data['password']);
            $data['password'] = bcrypt($data['password_confirmation']);

            $user = $this->repository->create($data);
            Session::flash('success', "Usuário <strong>{$data['name']}</strong> criado com sucesso");

            return $user;

        } catch (\Exception $e) {

            Session::flash("danger", "Problemas ao adicionar item. Tente novamente e se o problema persistir, contacte o adminstrador do sistema.<br/><br/>Código de Erro: {$e->getCode()}<br/>{$e->getMessage()}");
            return false;
        }
    }

    public function update(array $data, $id)
    {
        try {
            $user = $this->repository->update($data, $id);
            (isset($data['password']) and $data['password' != '']) ? $data['password'] = bcrypt($data['password']) : null;

            Session::flash('success', "Usuário <strong>{$user->name}</strong> foi atualizado com sucesso.");
            return $user;

        } catch (\Exception $e) {
            Session::flash('danger', $e->getMessage());

            return false;
        }
    }

    public function update_password(array $data, $id)
    {
        $user = $this->repository->find($id);

        if (Hash::check($data['old_password'], $user->password)) {
            if($data['password'] === $data['password_confirmation']) {
                $user->password = bcrypt($data['password']);
                $user->save();

                Session::flash('success', 'Senha atualizada com sucesso.');
                return true;
            }

            Session::flash('danger', 'Confirmação de nova senha retornou erro.');
            return false;
        }

        Session::flash('danger', 'Senha atual não confere, favor digitar novamente');
        return false;;
    }

    public function delete($id)
    {
        try {
            $data = $this->repository->find($id);
            $this->repository->delete($id);

            Session::flash('success', "O usuário <strong>{$data['name']}</strong> foi excluído com sucesso.");

        } catch (\Exception $e) {

            Session::flash('danger', "Problemas ao excluir o usuário. <br/><br/><strong>Código do erro: </strong>{$e->getCode()}<br/><strong>Mensagem de erro: </strong><br/>{$e->getMessage()}");
            return false;
        }
    }
}