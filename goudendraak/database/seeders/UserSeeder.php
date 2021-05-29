<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create(['name' => "admin",
            'email' => 'admin@goudendraak.nl',
            'password' => Hash::make('password'),
        ]);
        $employee = User::create(['name' => "admin",
            'email' => 'employee@goudendraak.nl',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('admin');
        $employee ->assignRole('employee');
    }
}
