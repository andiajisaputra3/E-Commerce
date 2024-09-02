<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
            ], $default_user_value));

            $seller = User::create(array_merge([
                'email' => 'seller@gmail.com',
                'name' => 'seller',
            ], $default_user_value));

            $costumer = User::create(array_merge([
                'email' => 'costumer@gmail.com',
                'name' => 'costumer',
            ], $default_user_value));

            $role_admin = Role::create(['name' => 'admin']);
            $role_seller = Role::create(['name' => 'seller']);
            $role_costumer = Role::create(['name' => 'costumer']);

            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);

            $admin->assignRole('admin');
            $seller->assignRole('seller');
            $costumer->assignRole('costumer');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}