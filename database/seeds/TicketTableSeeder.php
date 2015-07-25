<?php

use TeachMe\Entities\Ticket;
use Faker\Generator;

class TicketTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'title' => $faker->sentence(),
            'status' => $faker->randomElement(['open', 'open', 'closed']),
            'user_id' => $this->getRandom('User')->id,
                //$this->createFrom('UserTableSeeder')->id
        ];
    }
}
