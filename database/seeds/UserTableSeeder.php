<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert(
            [
                'name'     => 'Administrador',
                'email'    => 'admin@email.com.br',
                'password' => bcrypt('admin'),
                'created_at' => Carbon::now('America/Sao_Paulo'),
            ]
        );
    }
}
