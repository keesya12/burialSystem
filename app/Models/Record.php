<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $table = 'records';
    public $primaryKey = 'refNum';
    public $timestamps = true;
    protected $fillable = [
        'refNum',
        'date', 
        'payer',
        'city',
        'prov',
        'nameOfdead',
        'nat',
        'age',
        'sex',
        'dateofdeath',
        'causeofdeath',
        'nameofcemetery',
        'infect',
        'embalm',
        'disposition',
        'amt',
        'colOfficer'
    ];
}
