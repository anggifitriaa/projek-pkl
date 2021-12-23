<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
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

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'izin admin',
        ]);

        $pengguna = Role::create([
            'name' => 'pengguna',
            'display_name' => 'izin pengguna',
        ]);

        $kasir = Role::create([
            'name' => 'kasir',
            'display_name' => 'izin kasir',

        ]);

        $user = new User();
        $user->name = 'anggi fitria';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
        $user->attachRole($admin);

        $userPengguna = new User();
        $userPengguna->name = 'dinda';
        $userPengguna->email = 'dinda@gmail.com';
        $userPengguna->password = Hash::make('12345678');
        $userPengguna->save();
        $userPengguna->attachRole($pengguna);

        $userKasir = new User();
        $userKasir->name = 'jajang';
        $userKasir->email = 'jajang@gmail.com';
        $userKasir->password = Hash::make('12345678');
        $userKasir->save();
        $userKasir->attachRole($kasir);

        $userKasir2 = new User();
        $userKasir2->name = 'siti';
        $userKasir2->email = 'siti@gmail.com';
        $userKasir2->password = Hash::make('12345678');
        $userKasir2->save();
        $userKasir2->attachRole($kasir);

    }
}
