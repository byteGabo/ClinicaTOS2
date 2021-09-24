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

       Permission::create(['name'=>'admin.home'])->syncRoles([$role1,$role2,$role3]);

       Permission::create(['name'=>'admin.users.index'])->assignRole($role1);
       Permission::create(['name'=>'admin.users.create'])->assignRole($role1);
       Permission::create(['name'=>'admin.users.edit'])->assignRole($role1);

       Permission::create(['name'=>'admin.categories.index'])->assignRole($role1);
       Permission::create(['name'=>'admin.categories.create'])->assignRole($role1);
       Permission::create(['name'=>'admin.categories.edit'])->assignRole($role1);
       Permission::create(['name'=>'admin.categories.destroy'])->assignRole($role1);

       Permission::create(['name'=>'admin.statuses.index'])->assignRole($role1);
       Permission::create(['name'=>'admin.statuses.create'])->assignRole($role1);
       Permission::create(['name'=>'admin.statuses.edit'])->assignRole($role1);
       Permission::create(['name'=>'admin.statuses.destroy'])->assignRole($role1);

       Permission::create(['name'=>'admin.doctors.index'])->assignRole($role1);
       Permission::create(['name'=>'admin.doctors.create'])->assignRole($role1);
       Permission::create(['name'=>'admin.doctors.edit'])->assignRole($role1);
       Permission::create(['name'=>'admin.doctors.destroy'])->assignRole($role1);

       Permission::create(['name'=>'admin.patients.index'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.patients.create'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.patients.edit'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.patients.destroy'])->syncRoles([$role1,$role2,$role3]);

       Permission::create(['name'=>'admin.appointments.index'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.appointments.create'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.appointments.edit'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'admin.appointments.destroy'])->syncRoles([$role1,$role2,$role3]);
    }
}
