<?php

namespace Database\Factories;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     * @var string
     * 
     */
    protected $model = Contact::class;
    public function definition(): array
    {
        return [
            'id' => fake()->number({ min: 1, max: 999999 }),
            'photo' => fake()->randomElement([
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/158.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/157.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/156.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/155.jpg',
            ]),
            'date' => fake()->dateTimeBetween($startDate ="2022-01-01", $endDate ="2023-12-12"),
            'full_name' => fake()->name(),
            'email' => fake()->email(),
            'phone_number' => fake()->e164PhoneNumber("+## ## ### ## ##"),
            'subject' => fake()->words(15),
        ];
    }
}