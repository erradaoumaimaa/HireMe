<?php

namespace Database\Factories;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServiceFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Service::class;
    /**
     * Define the model's default state.
     *
     *
     *
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $titre = $this->faker->realText($maxNbChars = 20, $indexSize =2);
        return [
            'titre' => $titre,
            'slug' => Str::slug($this->faker->sentence),
            'body' => $this->faker->text,
            'image' => $this->faker->imageUrl(640, 480),
            'prix' => $this->faker->randomFloat(2, 1, 100), // Example: Generating a random float between 1 and 100 for 'prix'
            'user_phone' => $this->faker->phoneNumber,
            'user_email' => $this->faker->email,
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'cat_id' => 1, // Example: Assuming a default category ID of 1
            'created_at' => now(), // Example: Setting the created_at timestamp to the current time
            'updated_at' => now(), // Example: Setting the updated_at timestamp to the current time
        ];
    }
}
