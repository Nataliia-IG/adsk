<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $fillable = ['id','title', 'code'];

    public function cities(){
        $this->hasMany(City::class);
    }

}
