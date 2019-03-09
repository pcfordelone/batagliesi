<?php


namespace FRD\Interfaces;


interface UserService
{
    public function store(array $data);

    public function update(array $data, $id);

    public function delete($id);
}