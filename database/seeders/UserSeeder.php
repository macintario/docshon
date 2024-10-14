<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            ['name' => 'igutierrez', 'email' => 'igutierrez@ipn.mx', 'password' => Hash::make('password') ],
            ['name' => 'vlazaro', 'email' => 'vlazaroc@ipn.mx', 'password' => Hash::make('password') ],
            ['name' => 'base', 'email' => 'macintario@gmail.com', 'password' => Hash::make('password') ],
            ['name' => 'puro', 'email' => 'gozalo.bueno@gmail.com', 'password' => Hash::make('password') ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
        //'password' => static::$password ??= Hash::make('password')
    }
}
