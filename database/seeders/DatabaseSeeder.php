<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'vanh',
            'email' => 'maihuyen2k02@gmail.com',
            'password' => Hash::make('123456'),
            'role_id'=>'1'
        ]);
        $this->call(brand::class);
        $this->call(category::class);
        $this->call(product::class);
        $this->call(payment::class);
    }
}
