<?php

use Illuminate\Database\Seeder;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->insert([
            [
                'user_id' => '1',
                'hobby' => '旅行',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'hobby' => 'バスケ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'hobby' => 'カフェ巡り',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'hobby' => 'Final Fantasy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
