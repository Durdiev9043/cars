<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=['year','yurgani','model','company','number','type_fuel','pass_number','price','status','img1','img2','img3','img4'];

    public array $bron=[0=>'bosh',1=>'band'];
}
