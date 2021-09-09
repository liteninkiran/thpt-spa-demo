<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        // Find admin role
        $admin = Role::where('name', '=', 'Admin')->firstOrFail();

        // Create admin user(s)
        User::factory(1)->create(['role_id' => $admin->id]);

        // Find content creator role
        $creator = Role::where('name', '=', 'Content Creator')->firstOrFail();

        // Create content creator(s)
        User::factory(5)->create(['role_id' => $creator->id]);
    }
}
