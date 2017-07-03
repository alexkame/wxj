<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';
    protected $primaryKey = 'id';

    public function attr()
    {
        return $this->hasOne('App\Model\Attributes');
    }

    public function sale()
    {
        return $this->hasOne('App\Model\Sale');
    }
}
