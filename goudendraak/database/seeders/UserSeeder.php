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
        $admin = User::create(['name' => "Albert",
            'email' => 'admin@goudendraak.nl',
            'password' => Hash::make('password'),
        ]);
        $employee = User::create(['name' => "Berend",
            'email' => 'employee@goudendraak.nl',
            'password' => Hash::make('password'),
        ]);
        $employee2 = User::create(['name' => "Clara",
            'email' => 'employee2@goudendraak.nl',
            'password' => Hash::make('password'),
        ]);
        $employee3 = User::create(['name' => "Dirk",
            'email' => 'employee3@goudendraak.nl',
            'password' => Hash::make('password'),
        ]);
        $employee4 = User::create(['name' => "Erika",
            'email' => 'employee4@goudendraak.nl',
            'password' => Hash::make('password'),
        ]);
        $employee5 = User::create(['name' => "Arend",
            'email' => 'employee5@goudendraak.nl',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('admin');
        $employee->assignRole('kassamedewerker');
        $employee2->assignRole('serveerster');
        $employee3->assignRole('kassamedewerker');
        $employee4->assignRole('serveerster');
        $employee5->assignRole('kassamedewerker');
        $employee5->assignRole('serveerster');
    }
}
