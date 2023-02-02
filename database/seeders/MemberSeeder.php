<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [];
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) {
            $members[] = [
                'first_name' => $faker->firstName(),
                'last_name'  => $faker->lastName(),
                'email'      => $faker->email(),
                'phone'      => Str::limit(str_replace(['(+62)', ' '], '', $faker->phoneNumber()), 15),
            ];
        }

        Member::insert($members);
    }
}
