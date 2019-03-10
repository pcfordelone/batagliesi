<?php

namespace FRD\Entities;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'u_position',
        'u_default_img',
        'u_cellphone',
        'u_phone',
        'u_birthday',
        'u_address',
        'u_number',
        'u_complement',
        'u_district',
        'u_cep',
        'u_city',
        'u_uf',
        'u_country',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
