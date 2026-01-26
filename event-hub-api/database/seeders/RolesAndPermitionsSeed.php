<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermitionsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::firstOrCreate(["name" => "admin"]);
        $worker = Role::firstOrCreate(["name" => "worker"]);

        $permissions = [
            "create users account ",
            "create service to a worker",
            "list users ",
            "view his own profile",
            "view  workers profile",
            "delete  worker",
            "update worker data "
        ];
        foreach ($permissions as $perm) {
            $permition = Permission::firstOrCreate(["name" => $perm]);
            $admin->givePermissionTo($permition);
        }

        $permission1 = [
            "create account ",
            "create service ",
            "view his own profile",
            "delete  worker",
            "update own data "
        ];

        foreach ($permission1 as $perm) {
            $permition = Permission::firstOrCreate(["name" => $perm]);
            $worker->givePermissionTo($permition);
        }
    }
}
