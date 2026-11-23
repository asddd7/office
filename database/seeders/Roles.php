<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin',
            'user',
        ];

        DB::table('roles')->upsert([
            ['id' => 1, 'name' => $roles[0]],
            ['id' => 2, 'name' => $roles[1]],
        ], ['id'], ['name']);
    }
}
