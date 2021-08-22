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
                'name' => "وكيل أعلاني",
                'slug' => 'advertising-agency'
            ],
            [
                'name' => "مسوق ألكتروني",
                'slug' => 'digital-marketer'
            ],
        ];

        UserType::insert($types);
    }
}
