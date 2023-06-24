<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'carlos',
            'email' => 'carlos@admin.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
