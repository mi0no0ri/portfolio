<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'minori',
                'email' => 'minori.nishizawa.0314@gmail.com',
                'password' => Hash::make('password'),
                'introduce' => 'ご覧いただきありがとうございます。1997年3月生まれ、神奈川県在住のminoriと申します。未経験からプログラマーに転職し、現在はJavaを使用する現場で日々奮闘中です。某航空会社で学んだ一流の接客を生かして、丁寧なコミュニケーションを大切にしております。',
                'image' => 'myimage.jpg',
                'background' => 'background.JPG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
