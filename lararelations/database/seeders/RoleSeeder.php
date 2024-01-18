<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' => 'admin',
        ]);

        Role::create([
            'id' => 2,
            'name' => 'admin2'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'admin3',
        ]);

        Role::create([
            'id' => 4,
            'name' => 'admin4'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'added_by' => 'sam',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
            'added_by' => 'rafa',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 2,
            'added_by' => 'hugo',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 2,
            'added_by' => 'esther',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 3,
            'added_by' => 'gene',
        ]);
    }
}
