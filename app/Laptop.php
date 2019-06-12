<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'laptop';
    protected $fillable = ['id','merek','tipe','jenis_prosesor','ram','hardisk','harga'];
}
