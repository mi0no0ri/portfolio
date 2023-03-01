<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => '1',
                'photo' => 'blog_top.png',
                'title' => '旅ブログ',
                'description' => '旅行した記録を写真として残しておくブログです。
                行ったことのある地域ごとに投稿をまとめて見れるようにしてます。
                写真はトップページ、ログイン後のマイページと投稿ページです。
                トップページはエリアにカーソルを合わせると色が変わります。
                マイページはいった都道府県は色が変わるようになってます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'photo' => 'sns_top.png',
                'title' => 'SNS',
                'description' => '簡単なSNSサイトです。主な機能は投稿、フォロー、フォローを外す、ブロック、ユーザー検索、いいね、投稿編集などがあります。
                写真はログインページ、トップページ、マイページです。
                投稿編集は鉛筆マークをおすとモーダルが出てきます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'photo' => 'ec_top.png',
                'title' => 'ECサイト',
                'description' => 'アパレル向けECサイトです。
                ページの中はおすすめ商品、ランキング、コーディネート例、シーン別コーデ、新商品を表示しています。
                メンズ、レディース、キッズ別に見ることもできます。
                商品詳細画面では色とサイズ別にカートに入れたり、お気に入り登録が出来、クチコミの投稿も可能です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
