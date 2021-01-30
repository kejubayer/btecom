<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => "BT Ecom",
            'email' => "btecom@gmail.com",
            'address' =>"Dhaka, Bangladesh",
            'phone' => "01710000000",
        ]);
    }
}
