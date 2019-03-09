<?php


namespace FRD\Interfaces;


interface AwardService
{
    public function store(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function add_images(array $data, $id);

    public function rm_images(array $data, $id);

    public function changeStatus($id, $element);

    public function sanitizeString($string);
}