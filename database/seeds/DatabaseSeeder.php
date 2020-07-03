<?php

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
        // $this->call(UsersTableSeeder::class);
          User::create([
            'username'=>'barakat',
            'email'=>'barakatalrashdan@ymail.com',
            'password'=>bcrypt('password'),
            'password_text'=> 'password_text',
            ]);

            factory(Event::class,20);
    }
}
