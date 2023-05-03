<?php

namespace Database\Factories;
use App\Models\Rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rooms>
 */
class RoomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *  @var string
     */
    protected $model = Rooms::class;
    $roomRate => fake()->number({ max: 100000 });
    $isOffer => fake()->randomElement(["Yes", "No"]);
    $discountPercent= 0;
    if ($isOffer === "Yes") {
      $discountPercent => fake()->number({min: 0, max: 80});
    } else {
      $discountPercent = 0;
    }
  
    $roomOffer= null;
    if ($isOffer === "Yes") {
      $roomOffer = $roomRate - ($discountPercent * $roomRate) / 100;
    } else {
      $roomOffer = null;
    }
    public function definition(): array
    {
        return [
            'id' => fake()->.number({ min: 1, max: 999999 }),
            'image'=> fake()->randomElement( [
                "https://loremflickr.com/g/320/240/paris",
                "https://loremflickr.com/g/320/240/madrid"
              ]),
            'imageTwo'=> fake()->randomElement( [
                "https://loremflickr.com/g/320/240/paris",
                "https://loremflickr.com/g/320/240/madrid"
              ]),
            'imageThree'=> fake()->randomElement( [
                "https://loremflickr.com/g/320/240/paris",
                "https://loremflickr.com/g/320/240/madrid"
              ]),
            'imageFour'=> fake()->randomElement([    
                "https://loremflickr.com/g/320/240/paris",
                "https://loremflickr.com/g/320/240/madrid"
            ]),
            'imageFive'=> fake()->randomElement([,
                "https://loremflickr.com/g/320/240/paris",
                "https://loremflickr.com/g/320/240/madrid"
        ]),    
            'room_type'=> fake()->randomElement([
              "Single Bed",
              "Double Bed",
              "Double Superior",
              "Suite",
            ]),
            'room_number' => fake()->number({ min: 10, max: 1000 }),
            'name' => fake()->randomElement(["Deluxe A-21234", "Deluxe A-25234", "Suite A-21234"]),
            'discountPercentage'=> $discountPercent,
            'discount'=> $isOffer,
            'amenities'=> fake()->text($maxNbChars = 50),
            'price'=> $roomRate,
            'offer_price'=> $roomOffer,
            'status'=> fake()->randomElement(["Available", "Booked"]),
        ];
    }
}
