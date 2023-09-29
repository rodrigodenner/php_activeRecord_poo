<?php

namespace app\database\models;

use app\database\activerecord\ActiveRecord;

class User extends ActiveRecord
{
    protected $table = 'user';

    public function getAttributes()
    {
        // Implemente aqui a lógica para retornar os atributos do usuário
        return $this->attributes;
    }
   
}