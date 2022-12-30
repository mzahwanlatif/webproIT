<?php

namespace Applocation\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $allowedFields = ['username', 'email', 'password', 'tanggal'];

    function cari($katakunci)
    {
        $builder = $this->table("users");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('username', $arr_katakunci[$x]);
            $builder->orLike('email', $arr_katakunci[$x]);
            $builder->orLike('password', $arr_katakunci[$x]);
        }
        return $builder;
    }
}