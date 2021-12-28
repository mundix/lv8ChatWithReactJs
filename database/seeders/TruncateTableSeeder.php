<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class TruncateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // my table definitions go here
        Room::truncate();
        Product::truncate();
        User::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
