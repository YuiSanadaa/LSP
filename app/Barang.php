<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Barang extends Eloquent
{
  public function kategori()
    {
        return $this->belongsTo(App\Kategori::class);
    }

    public function unit(){
    	return $this->belongsTo(App\Unit::class);
    }

    public function ppns(){
    	return $this->belongsTo(App\Ppn::class);
    }
}
