<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = "AUTORS";
    protected $primaryKey = "ID_AUT";
    public $incrementing = false;
    public $timestamps = false;

}
