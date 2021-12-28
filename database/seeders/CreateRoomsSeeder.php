<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class CreateRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::factory(50)->create();
    }
}
