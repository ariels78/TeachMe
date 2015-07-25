<?php

use TeachMe\Entities\User;
use Faker\Generator;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'password' => bcrypt('secret'),
        ];
    }

    private function createAdmin()
    {
        $this->create([
            'name' => 'Carlos Ariel',
            'email' => 'ariels78@hotmail.com',
            'password' => bcrypt('admin'),
        ]);
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }
}
