<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\{User, RoleHierarchy, Admin};

class UsersSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $numberOfUsers = 10;
        $numberOfNotes = 100;
        $usersIds = array();
        $statusIds = array();
        $faker = Faker::create();
        /* Create roles */
        $adminRole = Role::create(['name' => 'admin','guard_name'=>'admin']); 
        RoleHierarchy::create([
            'role_id' => $adminRole->id,
            'hierarchy' => 1,
        ]);
        $userRole = Role::create(['name' => 'user','guard_name'=>'web']);
        RoleHierarchy::create([
            'role_id' => $userRole->id,
            'hierarchy' => 2,
        ]);
        $guestRole = Role::create(['name' => 'guest','guard_name'=>'web']); 
        RoleHierarchy::create([
            'role_id' => $guestRole->id,
            'hierarchy' => 3,
        ]);

        /*  insert users   */
        $user = Admin::create([ 
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'menuroles' => 'admin'
        ]);
        $user->assignRole('admin');
    }
}