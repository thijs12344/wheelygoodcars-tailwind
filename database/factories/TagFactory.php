<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Tag::class;
    public function definition(): array
    {

        $Tags = [
            'Occasion', 'Nieuw','Tweedehands','Bouwjaar ','Kilometerstand ','Benzine','Diesel','Elektrisch','Hybride','Automaat',
            'Handgeschakeld','SUV','Hatchback','Sedan','Cabrio','Stationwagen','Sportwagen','Sportwagen','APK ','Eerste eigenaa', 'Onderhoudsboekje aanwezig',
        ];
        return [
            'tags' => $this->faker->randomElement($Tags),
        ];
    }
}
