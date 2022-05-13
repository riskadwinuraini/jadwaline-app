<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = $this->makeRoles();
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);

        $manager = User::create([
            'name' => 'manager',
            'email' => 'manager@gmail.com' ,
            'password'=> Hash::make('manager123')
        ]);

        $supir = User::create([
            'name' => 'supir',
            'email' => 'supir@gmail.com' ,
            'password'=> Hash::make('supir123')
        ]);

        $admin->assignRole($role->admin);
        $manager->assignRole($role->manager);
        $supir->assignRole($role->supir);
    }

    private function makeRoles(): object
    {
        return (object) [
            'admin'=> Role::create( attributes:['name' => 'admin']),
            'manager'=> Role::create( attributes:['name' => 'manager']),
            'supir'=> Role::create( attributes:['name' => 'supir']),
        ];
    }
}
