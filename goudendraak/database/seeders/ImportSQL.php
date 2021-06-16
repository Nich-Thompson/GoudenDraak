<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportSQL extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path('sql/gouden_draak_menu.sql');
        $sqlFile = DB::unprepared(file_get_contents($path));
        $db_bin = "D:\wamp64\bin\mysql\mysql5.7.21\bin";
        // PDO Credentials
        $db = [
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE')
        ];

        exec("$db_bin}\mysql --user={$db['username']} --password={$db['password']} --host={$db['host']} --database {$db['database']} < $sqlFile");

        \Log::info('Import SQL Success from sql file '.$path.'');
    }
}
