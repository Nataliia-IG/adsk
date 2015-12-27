<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

use VK\VK;

class countries_api_vk extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $VK = new VK(env('VK_APP_ID'), env('VK_KEY_SECRET'));
        $vkCountries = $VK->api('database.getCountries', ['need_all' => 1, 'count' => 1000, 'lang' => 'ru']);

        foreach($vkCountries['response'] as $country){
            Country::create([
                'id'    => $country['cid'],
                'title' => $country['title']
            ]);
        }
    }

}