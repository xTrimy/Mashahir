<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = [
            [
                'name' => "مشهور",
                'slug' => 'celebrity'
            ],
            [
                'name' => "عميل",
                'slug' => 'customer'
            ],
            [
                'name' => "مشهور",
                'slug' => 'advertising-agency'
            ],
            [
                'name' => "مشهور",
                'slug' => 'digital-marketer'
            ],
        ];

        UserType::insert($types);
    }
}
