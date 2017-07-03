<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sale';
    protected $primaryKey = 'id';

    public function goods()
    {
        return $this->belongsTo('App\Model\Goods', 'goods_id');
    }
}
