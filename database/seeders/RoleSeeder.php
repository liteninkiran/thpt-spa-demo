<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->addRole('Admin');
        $this->addRole('Content Creator');
    }

    private function addRole($name) {
        $role = Role::where('name', '=', $name);

        if ($role->count() === 0) {
            Role::create(['name' => $name]);
        }
    }
}
