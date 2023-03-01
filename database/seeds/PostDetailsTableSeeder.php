<?php

use Illuminate\Database\Seeder;

class PostDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postdetails')->insert([
            [
                'post_id' => '1',
                'image' => 'blog_toppage.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'image' => 'blog_mypage.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'image' => 'blog_post.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'image' => 'sns_toppage.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'image' => 'sns_login.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'image' => 'sns_follow.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'image' => 'ec_home.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'image' => 'ec_cart.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'image' => 'ec_product.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
