<?php

use App\Company;
use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();

        $faker = Faker\Factory::create();

        $CompanyCount = Company::count();

        for ($i = 0; $i < 50; $i++) {
            Contact::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'function' => $faker->jobTitle,
                'phone_number' => $faker->phoneNumber,
                'email_address' => $faker->email,
                'city' => $faker->city,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'company_id' => $faker->unique()->numberBetween(1, $CompanyCount),
            ]);
        }
    }
}
