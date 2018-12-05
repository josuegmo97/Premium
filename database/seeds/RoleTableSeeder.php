<?php

use Illuminate\Database\Seeder;
use premium\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Creador',
            'description' => 'El creador del sistema',
        ]);

        Role::create([
            'name' => 'Master',
            'description' => 'Es un usuario que posee todos los privilegios del sistema',
        ]);

        Role::create([
            'name' => 'Administracion',
            'description' => 'Posee privilegios sobre la seccion cuentas por pagar.',
        ]);

        Role::create([
            'name' => 'Servicio General',
            'description' => 'No tiene privilegios para agregar cuentas por pagar.',
        ]);
    }
}
