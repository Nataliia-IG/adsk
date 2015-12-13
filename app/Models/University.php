<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model {

    protected $fillable = ['title', 'city_id'];

    public function city(){
        $this->belongsTo(City::class);
    }

}
