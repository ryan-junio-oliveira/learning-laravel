<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $roles = ['default', 'admin', 'root'];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        User::factory(10)->create()->each(function ($user) {
            $role = Role::where('name', $user->permission)->first();
            $user->assignRole($role);
        });
    }
}
