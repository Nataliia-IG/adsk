<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	protected $fillable = ['id', 'country_id', 'title', 'region_id'];

    public function country(){
        $this->belongsTo(Country::class);
    }

    public function university(){
        $this->hasMany(University::class);
    }

}
