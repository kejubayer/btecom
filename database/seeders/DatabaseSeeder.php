<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([Userseeder::class]);
        $this->call([SettingSeeder::class]);
        User::factory(10)->create();
        Product::factory(20)->create();


    }
}
