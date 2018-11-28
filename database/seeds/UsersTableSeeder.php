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
        \App\User::create([
            'name' => 'admin',
            'password' => bcrypt('asDwsdWssf12')
        ]);

        \App\MainImage::create([
            'img_name' => 'woman.jpg'
        ]);

        \App\About::create([
            'title' => 'PERSONAL INFO',
            'text' => 'I\'m a Freelance Web Designer & Developer based in Moscow, Russia. I have serious passion for UI effects, animations and creating intuitive, with over a decade of experience.'
        ]);

        \App\MainText::create([
            'first_line' => "HI THERE ! I'M",
            'second_line' => "LINDA SMITH",
            'third_line_1' => "WEB DESIGNER",
            'third_line_2' => "BLOGGER",
            'third_line_3' => "WEB DEVELOPER"
        ]);

    }
}
