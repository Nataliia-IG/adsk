<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\City;

use VK\VK;

class cities_api_vk extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $VK = new VK(env('VK_APP_ID'), env('VK_KEY_SECRET'));
        $vkCities = $VK->api('database.getCities', ['need_all' => 1, 'count' => 1000, 'lang' => 'ru']);
        while(count($vkCities) == 1000){
            foreach($vkCities['response'] as $country){
                City::create([
                    'id'    => $country['id'],
                    'title' => $country['title']
                ]);
            }

            $vkCities = $VK->api('database.getCities', ['need_all' => 1, 'count' => 1000, 'lang' => 'ru']);
        }


        foreach($vkCities['response'] as $country){
            City::create([
                'id'    => $country['id'],
                'title' => $country['title']
            ]);
        }
    }

}