<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun_model extends Model
{
    use HasFactory;
    protected $table ="tahun";
    protected $primaryKey ="id";

    public function tampil_tahun(){
        $query = \DB::table('tahun')->get();
        return $query;
    }
}
