<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Sufi Outdoor',
                'email' => 'sufi@gmail.com',
                'type' => 1,
                'password' => bcrypt('1234578'),
                
            ],
            [
                'name' => 'Tobanga',
                'email' => 'tobanga@gmail.com',
                'type' => 1,
                'password' => bcrypt('12345678'),
                
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'type' => 2,
                'password' => bcrypt('12345678'),
                
            ],
            [
                'name' => 'Lucky',
                'email' => 'lucky@gmail.com',
                'type' => 0,
                'password' => bcrypt('12345678'),
                
            ],
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);




        //     DB::table('users')->insert(array(
        //         ['name' => 'Tenant User',
        //         'email' => 'sufioutdoor@gmail.com',
        //         'type' => 1,
        //         'password' => bcrypt('12345678')],
        //         ['name' => 'Tenant User',
        //         'email' => 'tobanga@gmail.com',
        //         'type' => 1,
        //         'password' => bcrypt('12345678')],
        //         ['name' => 'Admin User',
        //         'email' => 'admin@gmail.com',
        //         'type' => 2,
        //         'password' => bcrypt('12345678')],
        //         ['name' => 'User',
        //         'email' => 'user@gmail.com',
        //         'type' => 0,
        //         'password' => bcrypt('12345678')],
        //     ));

        // }
    }
}