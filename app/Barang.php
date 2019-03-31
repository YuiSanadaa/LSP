<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Barang extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'barangs';

  public function kategori()

    {
        return $this->belongsTo(Kategori::class);
    }

    public function unit(){
    	return $this->belongsTo(Unit::class);
    }

    public function ppn(){
    	return $this->belongsTo(Ppn::class);
    }
}
