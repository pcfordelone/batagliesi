<?php

namespace FRD\Interfaces;


interface HomeBannerService
{
    public function store(array $data);

    public function update(array $data, $id);

    public function delete($id);
}