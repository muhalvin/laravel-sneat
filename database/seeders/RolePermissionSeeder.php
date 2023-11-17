<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            try {
                Role::create(['name' => 'Administrator']);
                Role::create(['name' => 'Member']);
            } catch (\Throwable $th) {
                DB::rollBack();
            }
        });
    }
}
