<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'name' => 'Anderson Barbosa dos Santos',
            'username' => 'dev.anderson',
            'email' => 'dev.anderson.santos@gmail.com',
            'password' => Hash::make('88812345'),
            'phone' => '21976662004',
            'is_admin' => '1',
            'status' => '1',
        ]);

        DB::table('users')->insert([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'name' => 'Maria Isabel Valle',
            'username' => 'maria.isabel',
            'email' => 'maria.isabel@email.com',
            'password' => Hash::make('55512345'),
            'phone' => '21986229578',
            'is_admin' => '1',
            'status' => '1',
        ]);
    }
}
