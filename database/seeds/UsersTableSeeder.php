<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(
            ['email'    => 'caioalmeidanaweb@gmail.com',
             'username' => 'admin',
             'name'     => 'Administrador',
             'password' => bcrypt('secret'),
             'api_token'=> Str::random(60),
             ]
        );

        App\User::create(
            ['email'    => 'tech@almeidatech.com.br',
             'username' => 'tech',
             'name'     => 'Tecnico',
             'password' => bcrypt('secret'),
             'api_token'=> Str::random(60),
             ]
        );

        App\User::create(
            ['email'    => 'sac@almeidatech.com.br',
             'username' => 'sac',
             'name'     => 'SAC',
             'password' => bcrypt('secret'),
             'api_token'=> Str::random(60),
             ]
        );
    }
}
