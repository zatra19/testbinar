<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'name' => 'bot',
            'email' => 'bot@example.com',
            'password' => bcrypt('bot'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
