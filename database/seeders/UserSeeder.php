<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Valeria Rojas',
            'email'=>'valeriarojasj@gmail.com',
            'password'=>bcrypt('12345678'),
            'status'=>'activo'
        ])->assignRole('Admin');
        User::create([
            'name'=>'Lautaro Valle López',
            'email'=>'lautarovallelopez@gmail.com',
            'password'=>bcrypt('12345678'),
            'status'=>'activo'
        ])->assignRole('Admin');
        User::create([
            'name'=>'Magnolia Osorio',
            'email'=>'valeria82@hotmail.com',
            'password'=>bcrypt('12345678'),
            'status'=>'activo'
        ])->assignRole('User');

        User::factory(9)->create()->each(function ($user) {
            $user->assignRole('User');
        });
    }
}

        
