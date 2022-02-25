<?php

namespace Database\Seeders;

use App\Models\User;
use Brick\Math\BigInteger;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        User::create([
            'last_name' => 'Hamid',
            'first_name'=>'Sougouma Ali',
            'phone_number'=>33774606472,
            'code_postale'=>'45100 Orleans France',
            'rue'=>'17 ALLEE PIERRE BEREGOVOY',
            'country'=>'France',
            'dateOfBirth'=>Carbon::create('2002','10','03'),
            'email' => 'eldijaihamid@gmail.com',
            'password' => Hash::make('password'),
            'profile'=>'https://source.unsplash.com/random',
        ]);
    }
}
