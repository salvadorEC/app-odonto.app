<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Reset cached roles and permissions
      app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

      // create permissions
      Permission::create(['name' => 'crear_citas']);
      Permission::create(['name' => 'editar_citas']);
      Permission::create(['name' => 'cancelar_citas']);
      Permission::create(['name' => 'ver_doctores']);

      // create roles and assign created permissions

      //recepcion
      $role = Role::create(['name'=> 'recepcion']);
      $role->givePermissionTo('crear_citas');
      $role->givePermissionTo('editar_citas');
      $role->givePermissionTo('cancelar_citas');
      $role->givePermissionTo('ver_doctores');
      //doctor
      $role = Role::create(['name'=> 'doctor']);
      $role->givePermissionTo('crear_citas');
      $role->givePermissionTo('editar_citas');
      $role->givePermissionTo('cancelar_citas');
      //paciente
      $role = Role::create(['name'=> 'paciente']);

    }
}
