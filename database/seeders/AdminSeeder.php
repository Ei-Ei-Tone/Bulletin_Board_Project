<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('AdminAdmin1'),
            'is_admin' => '0',
            'phone'=> '09987654322',
            'dob' => '1.6.2000',
            'profile' => 'admin.jpg',
            'address' => 'Botahtaung',
            'created_user_id'=>'1',
            'updated_user_id'=>'1',
        ]);
    }
}
