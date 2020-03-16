<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run() {
        $permissions = [
            'users',
            'posts',
            'profile'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => "create $permission"]);
            Permission::create(['name' => "edit $permission"]);
            Permission::create(['name' => "show $permission"]);
            Permission::create(['name' => "destroy $permission"]);
        }

        //Admin
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAdmin->syncPermissions(Permission::all());

        //blogger
        $blogger = collect([
            'name' => 'blogger',
            'permissions' => [
                'create posts',
                'edit posts',
                'show posts',
                'destroy posts',
                'create profile',
                'edit profile',
                'show profile',
                'destroy profile',
            ]
        ]);

        $roleBlogger = Role::create(['name' => $blogger['name']]);
        $roleBlogger->syncPermissions($blogger['permissions']);

        //User
        $user = collect([
            'name' => 'user',
            'permissions' => [
                'create profile',
                'edit profile',
                'show profile',
                'destroy profile',
            ]
        ]);

        $roleUser = Role::create(['name' => $user['name']]);
        $roleUser->givePermissionTo($user['permissions']);
    }
}
