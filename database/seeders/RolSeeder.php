<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name'=> 'Admin']);
       $role2 = Role::create(['name'=>'Asistente']);
       $role3 = Role::create(['name'=>'doctor']);

       Permission::create(['name'=>'admin.home','description'=>'Ver el Inicio'])->syncRoles([$role1,$role2,$role3]);

       Permission::create(['name'=>'admin.users.index','description'=>'Ver listado de usuarios'])->assignRole($role1);
       Permission::create(['name'=>'admin.users.edit','description'=>'Asirnar un rol a un usuario'])->assignRole($role1);

       Permission::create(['name'=>'admin.categories.index','description'=>'Ver listado de especialidades'])->assignRole($role1);
       Permission::create(['name'=>'admin.categories.create','description'=>'Crear una nueva especialidad'])->assignRole($role1);
       Permission::create(['name'=>'admin.categories.edit','description'=>'Modificar una especialidad'])->assignRole($role1);
       Permission::create(['name'=>'admin.categories.destroy','description'=>'Eliminar una especialidad'])->assignRole($role1);

       Permission::create(['name'=>'admin.statuses.index','description'=>'Ver listado de status'])->assignRole($role1);
       Permission::create(['name'=>'admin.statuses.create','description'=>'Crear un nuevo status'])->assignRole($role1);
       Permission::create(['name'=>'admin.statuses.edit','description'=>'Modificar un status'])->assignRole($role1);
       Permission::create(['name'=>'admin.statuses.destroy','description'=>'Eliminar un status'])->assignRole($role1);

       Permission::create(['name'=>'admin.doctors.index','description'=>'Ver el listado de doctores'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.doctors.create','description'=>'Crear un nuevo doctor'])->assignRole($role1);
       Permission::create(['name'=>'admin.doctors.edit','description'=>'Modificar un doctor'])->assignRole($role1);
       Permission::create(['name'=>'admin.doctors.destroy','description'=>'Eliminar un doctor'])->assignRole($role1);

       Permission::create(['name'=>'admin.patients.index','description'=>'Ver el listado de pacientes'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.patients.create','description'=>'Crear un nuevo paciente'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.patients.edit','description'=>'Modificar un paciente'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.patients.destroy','description'=>'Eliminar un paciente'])->assignRole($role1);

       Permission::create(['name'=>'admin.appointments.index','description'=>'Ver el listado de citas'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.appointments.create','description'=>'Crear una nueva cita'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.appointments.edit','description'=>'Modificar una cita'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.appointments.destroy','description'=>'Eliminar una cita'])->syncRoles([$role1,$role2,$role3]);

       Permission::create(['name'=>'admin.roles.index','description'=>'Ver el listado de roles'])->assignRole($role1);
       Permission::create(['name'=>'admin.roles.create','description'=>'Crear un nueva rol'])->assignRole($role1);
       Permission::create(['name'=>'admin.roles.edit','description'=>'Modificar un rol'])->assignRole($role1);
       Permission::create(['name'=>'admin.roles.destroy','description'=>'Eliminar un rol'])->assignRole($role1);
    }
}
