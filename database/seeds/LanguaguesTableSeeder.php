<?php

use Illuminate\Database\Seeder;

class LanguaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languagues')->insert([
            [
                'post_id' => '1',
                'languague' => 'HTML',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'languague' => 'CSS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'languague' => 'JavaScript',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'languague' => 'jQuery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'languague' => 'PHP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'languague' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'languague' => 'HTML',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'languague' => 'CSS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'languague' => 'JavaScript',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'languague' => 'jQuery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'languague' => 'PHP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'languague' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'languague' => 'HTML',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'languague' => 'CSS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'languague' => 'JavaScript',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'languague' => 'jQuery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'languague' => 'PHP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'languague' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
