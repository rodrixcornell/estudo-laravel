<?php

use App\User;
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
        User::firstOrCreate(
            [
                'email' => 'admin@email.com'
            ],
            [
                'name' => 'Administrador',
                'password' => \Hash::make('password'),
            ],
        );

        User::firstOrCreate(
            [
                'email' => 'funcionario@email.com'
            ],
            [
                'name' => 'Funcionário',
                'password' => \Hash::make('password'),
            ],
        );

        // $usersQuantity = 99;

		// $user = [
		// 	// 'login' => 'rodrigo.cabral',
		// 	// 'hashed_password' => Hash::make('password'), // password
		// 	// 'salt' => Str::random(64),

		// 	'name' => 'Rodrigo Cabral',
		// 	'email' => 'rodrigo.cabral_ti@live.com',
		// 	'password' => \Hash::make('password'), // password
		// 	'email_verified_at' => \Carbon::now()->toDateTimeString(),
		// 	'remember_token' => \Str::random(10),
		// 	// 'api_token' => Hash::make('rodrigo.cabral_ti@live.com' . 'password'),
		// 	'is_admin' => 1,
		// 	'is_active' => 1,
		// ];

		// $user = \User::create($user);
		// $user->save();

		// factory(User::class, $usersQuantity)->create()->each(function ($users) {
		// 	// print_r($users);
		// 	// $users->person()->save(factory(Person::class)->make());
		// 	$users->save();
        // });
    }
}
