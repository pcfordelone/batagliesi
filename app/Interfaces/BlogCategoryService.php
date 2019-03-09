<?php


namespace FRD\Interfaces;


interface BlogCategoryService
{
    public function store(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function changeStatus($id, $element);

    public function sanitizeString($string);
}