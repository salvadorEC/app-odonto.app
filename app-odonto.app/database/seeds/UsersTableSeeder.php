<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuario con el rol doctor
        $doctor = User::create([
          'name' => 'doctor1',
          'email' => 'doctor1@citas.com',
          'password' => bcrypt('doctor1-123')
        ]);

        $doctor->assignRole('doctor');

        //usuario con el rol recepcion
        $recepcion = User::create([
          'name' => 'recepcion1',
          'email' => 'recepcion1@citas.com',
          'password' => bcrypt('recepcion1-123')
        ]);

        $recepcion->assignRole('recepcion');

        //usuario con el rol paciente
        $paciente = User::create([
          'name' => 'paciente1',
          'email' => 'paciente1@citas.com',
          'password' => bcrypt('paciente1-123')
        ]);

        $paciente->assignRole('paciente');

    }
}
