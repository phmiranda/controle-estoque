<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('produtos')->insert(
            [
                'nome'          => 'Geladeira',
                'descricao'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis placerat diam, et efficitur sapien aliquam at. Cras eu tortor sed enim volutpat scelerisque vel eu risus. Phasellus eget tempus nunc. Aliquam ac urna at dolor scelerisque tempus tincidunt et enim. Sed viverra non arcu ut imperdiet. Nam augue eros, rutrum id ante non, tincidunt porttitor diam. Aliquam non sapien nunc. Donec ut feugiat erat. In a turpis vitae odio euismod porta ut vel quam. Sed vel ipsum sapien. In vehicula sapien quis fringilla aliquam. Quisque sed neque ac nulla posuere ultrices. Pellentesque habitant morbi tristique senectus et netus et.',
                'quantidade'    => 5,
                'valor'         => 5900.00
            ]
        );

        DB::table('produtos')->insert(
            [
                'nome'          => 'CoockTop Elétrico',
                'descricao'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis placerat diam, et efficitur sapien aliquam at. Cras eu tortor sed enim volutpat scelerisque vel eu risus. Phasellus eget tempus nunc. Aliquam ac urna at dolor scelerisque tempus tincidunt et enim. Sed viverra non arcu ut imperdiet. Nam augue eros, rutrum id ante non, tincidunt porttitor diam. Aliquam non sapien nunc. Donec ut feugiat erat. In a turpis vitae odio euismod porta ut vel quam. Sed vel ipsum sapien. In vehicula sapien quis fringilla aliquam. Quisque sed neque ac nulla posuere ultrices. Pellentesque habitant morbi tristique senectus et netus et.',
                'quantidade'    => 1000,
                'valor'         => 950.00
            ]
        );

        DB::table('produtos')->insert(
            [
                'nome'          => 'Microondas',
                'descricao'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis placerat diam, et efficitur sapien aliquam at. Cras eu tortor sed enim volutpat scelerisque vel eu risus. Phasellus eget tempus nunc. Aliquam ac urna at dolor scelerisque tempus tincidunt et enim. Sed viverra non arcu ut imperdiet. Nam augue eros, rutrum id ante non, tincidunt porttitor diam. Aliquam non sapien nunc. Donec ut feugiat erat. In a turpis vitae odio euismod porta ut vel quam. Sed vel ipsum sapien. In vehicula sapien quis fringilla aliquam. Quisque sed neque ac nulla posuere ultrices. Pellentesque habitant morbi tristique senectus et netus et.',
                'quantidade'    => 1500,
                'valor'         => 1520.99
            ]
        );
    }
}
