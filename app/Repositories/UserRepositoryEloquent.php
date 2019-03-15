<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 08/03/2019
 * Time: 23:55
 */

namespace FRD\Repositories;


use FRD\Entities\User;
use FRD\Interfaces\UserRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    public function model()
    {
        return User::class;
    }

}