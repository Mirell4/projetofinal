<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->id = 1;
        $user->name = 'User1';
        $user->email = 'user1@email';
        $user->password = Hash::make('123456');
        $user->save();
        $this->call([
            AlunoSeeder::class,
            ContatoSeeder::class,
        ]);
    }
}
