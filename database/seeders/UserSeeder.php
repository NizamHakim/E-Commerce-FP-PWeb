<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'role_id' => '1',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'email' => 'admin@gmail.com',
                'phone' => '123',
            ],
            [
                'role_id' => '2',
                'username' => 'customer',
                'password' => Hash::make('customer'),
                'email' => 'customer@gmail.com',
                'phone' => '321',
            ],
        ];

        foreach ($data as $value) {
            User::create($value);
        }
    }
}
