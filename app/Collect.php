<?php namespace App;

use App\BaseModel;
use DB;
use Illuminate\Support\Facades\Input;

class Collect extends BaseModel {
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $timestamps = false;

}