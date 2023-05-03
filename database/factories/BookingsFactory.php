<?php

namespace Database\Factories;
use App\Models\Bookings;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookings>
 */
class BookingsFactory extends Factory
{
    /**
     * Define the model's default state.
     * @var string
     * 
     */
      protected $model = Bookings::class;
        $orderDate => fake()->dateTimeBetween($startDate = "2022-01-01", $endDate ="2022-12-12");
        $checkIn => fake()->dateTimeBetween($startDate = $orderDate, $endDate ="2023-11-01");
        $checkOut => fake()->dateTimeBetween($startDate = $checkIn, $endDate ="2023-12-31");
    
        $rooms = await dbQuery("SELECT * FROM rooms", "");
        $roomsArray = JSON.parse(JSON.stringify($rooms));
        $randomNumber = Math.floor(Math.random() * 20);
        $randomRoom = roomsArray[randomNumber];

        public function definition(): array
    {
        return [
            'bookingId' => fake()->number({ min: 1, max: 99999 }),
            'full__name' => fake()->name(),
            'image' => fake()->randomElement([
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/158.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/157.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/156.jpg',
                'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/155.jpg',
              ]),
            'order_date'=> $orderDate,
            'check_in' => $checkIn,
            'check_out' =>  $checkOut,
            'special_request' => fake()->randomElement([
              "",
              "Extra blankets",
              "Beach Towels",
              "SEA VIEW",
              "Close to restaurant",
              "Close to pools",
            ]),
            'room_type' =>  $randomRoom.room_type,
            'room_number' => $randomRoom.room_number,
            'status' => fake()->randomElement([
              "Check In",
              "Check Out",
              "In Progress",
            ]),
            'price' => $randomRoom.room_rate
        ];
    }
}
