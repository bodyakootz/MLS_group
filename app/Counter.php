<?php namespace App;

use App\BaseModel;
use DB;
use Illuminate\Support\Facades\Input;

class Counter extends BaseModel {
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getCounter() {
        return DB::table('counters')->first();
    }
}