<?php

use Illuminate\Database\Seeder;

class CarrierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrier')->insert([
            [
                'user_id' => '1',
                'carrier' => '2019年3月　城西国際大学 観光学部卒業',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'carrier' => '2019年4月〜2022年2月　某航空会社にてグランドスタッフとして勤務',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'carrier' => '2022年3月〜　某IT会社にてプログラマーとして勤務',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
