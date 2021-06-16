<?php

use Illuminate\Database\Seeder;

class PimpinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pimpinan = new \App\User;
        $pimpinan->name = "Pimpinan";
        $pimpinan->email = "pimpinan@mail.com";
        $pimpinan->role_id = 3;
        $pimpinan->password = \Hash::make("pimpinan");

        $pimpinan->save();

        $this->command->info("Pimpinan berhasil ditambahkan");
    }
}
