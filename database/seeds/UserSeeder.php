<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'admin@admin.com.br'
        ], [
            'name' => 'admin',
            'email' => 'admin@admin.com.br',
            'password' => bcrypt('123456'),
            'is_admin' => '1',
        ]);
        User::updateOrCreate([
            'email' => 'user@user.com.br'
        ], [
            'name' => 'user',
            'email' => 'user@user.com.br',
            'password' => bcrypt('123456'),
            'is_admin' => '0',
        ]);
    }
}
