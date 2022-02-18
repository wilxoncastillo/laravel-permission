<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Administrator']);

        $permissions = [
            'notes.index',
            'notes.store',
            'notes.create',
            'notes.show',
            'notes.update',
            'notes.destroy',
            'notes.edit' 
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }

         //$role->givePermissionTo($permissions);
         $role->syncPermissions($permissions);

         // Creación del usuario
        $user = User::create([
            'name' => 'Desarrollo',
            'email' => 'desarrollo@gmail.com',
            'password' => bcrypt('password')
        ])->assignRole($role);

        $role2 = Role::create(['name' => 'Writer']);
        $role2->givePermissionTo('notes.index');

        $user2 = User::create([
            'name' => 'Writer',
            'email' => 'writer@gmail.com',
            'password' => bcrypt('password')
        ])->assignRole($role2);

        // Creación del usuario
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}

