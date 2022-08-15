<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'super admin']);
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'manager']);
        $role = Role::create(['name' => 'team lead']);
        $role = Role::create(['name' => 'team member']);

        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@ems.com',
            'position_title' => 'Super Admin',
            'start_date' => now(),
            'email_verified_at' => now(),
            'password' => 'Admin123',
            'created_at' => now(),
            'updated_at' => now(),
            'created_by_id' => 1
        ]);
        $user->syncRoles('super admin');
    }
}
