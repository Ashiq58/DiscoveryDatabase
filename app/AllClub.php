<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllClub extends Model
{
    protected $fillable =['name','number','email','address','company','passport_no','passport_exp','birth','type','lastTravel_country','lastTravel_date','issu_name','note'];
}
