<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $sample_users = [
            [
            'id' => 1,
            'name' => 'John Smith',
            'comments' => 'Director',
            'password' => '720DF6C2482218518FA20FDC52D4DED7ECC043AB',
        ],
        [
            'id' => 2,
            'name' => 'Jane Doe',
            'comments' => 'Secretary',
            'password' => '720DF6C2482218518FA20FDC52D4DED7ECC043AB',
        ]
    ];

        User::insert($sample_users);
    }
}
