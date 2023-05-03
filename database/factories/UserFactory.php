<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *  @var string
     */
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'id' => fake()->numberBetween($min = 1000, $max = 9000),
            'photo' => fake()->randomElement([
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/158.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/157.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/156.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/155.jpg',
              ]),
            'name' => fake()->name,
            'position' => fake() ->randomElement([
                "Hotel Manager",
                "Reception",
                "Housekeeping",
                "Animation"
              ]),
            'email'=> fake()->email(),
            'start_date' => fake()->dateTimeBetween("2022-01-01", "2023-12-12"),
            'description'=> fake()->word(),
            'phone_number'=> fake()->e164PhoneNumber("+## ## ### ## ##"),
            'status'=> fake()->randomElement(["ACTIVE", "INACTIVE"]),
            'password' => fake() ->password(),
        ];
    }
}
