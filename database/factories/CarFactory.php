<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\car>
 */
class CarFactory extends Factory
{
    protected $model = Car::class;
    public function definition()
    {
        $carBrands = [
            'Audi', 'BMW', 'Ford', 'Mercedes-Benz', 'Toyota', 'Nissan', 'Chevrolet', 'Honda', 'Volkswagen', 'Hyundai',
            'Porsche', 'Jeep', 'Subaru', 'Kia', 'Tesla', 'Ferrari', 'Lamborghini', 'Maserati', 'Aston Martin', 'Land Rover',
            'Volvo', 'Jaguar', 'Mini', 'Mazda', 'Buick', 'Cadillac', 'Dodge', 'Ram', 'Chrysler', 'Lincoln', 'GMC', 'Acura',
            'Infiniti', 'Lexus', 'Renault', 'Peugeot', 'Citroen', 'Fiat', 'Alfa Romeo', 'Bentley', 'Bugatti', 'McLaren',
            'Pagani', 'Koenigsegg', 'Rolls-Royce'
        ];

        $carNames = [
            'Mustang', 'F-150', 'Corolla', 'Civic', 'Accord', 'Camry', 'Jetta', 'Passat', 'Focus', 'Escape', 'Explorer',
            'Cherokee', 'Wrangler', 'Impreza', 'Outback', 'Forester', 'Prius', 'Altima', 'Titan', 'Tacoma', 'Civic Type R',
            'Supra', 'GT-R', '370Z', 'WRX', 'A3', 'A4', 'A6', 'A8', 'S-Class', 'E-Class', 'C-Class', 'CLA-Class', 'GLA-Class',
            'GLS-Class', 'M3', 'M5', 'X5', 'X6', 'X7', 'F-250', 'Challenger', 'Charger', 'RAM 1500', 'Journey', 'Durango',
            'Grand Cherokee', 'Grand Caravan', 'Pacifica', 'Enclave', 'Acadia', 'Traverse', 'Explorer ST', 'Edge', 'Expedition',
            'Bronco', 'Fusion', 'Focus ST', 'Fiesta', 'Fiesta ST', 'Fusion Hybrid', 'Escape Hybrid', 'Mondeo', 'Kuga', 'F-350',
            'Mustang GT', 'E-Transit', 'Ioniq 5', 'Niro', 'Soul', 'Sportage', 'Seltos', 'Stinger', 'Telluride', 'Sonata',
            'Elantra', 'Accent', 'Veloster', 'Optima', 'Tiburon', 'Kona', 'Palisade', 'Tucson', '4Runner', 'Land Cruiser',
            'Avalon', 'Land Rover Defender', 'Ranger', 'Bronco Sport', 'Lincoln Corsair', 'Lincoln Nautilus', 'Lincoln Aviator',
            'Lincoln Navigator', 'Nautilus', 'Navigator L', 'Continental', 'MKS', 'MKZ', 'MKC', 'Corsair', 'Edge ST',
            'Explorer Hybrid', 'Jeep Renegade', 'Jeep Grand Wagoneer', 'Jeep Wagoneer', 'Grand Wagoneer L', 'Jeep Compass',
            'Wrangler 4xe', 'Renegade Trailhawk', 'Gladiator', 'Fiat 500X', 'Fiat 500L', 'Jeep Cherokee Trailhawk', 'Cherokee Limited',
            'Cherokee Latitude', 'Toyota Highlander', 'Toyota RAV4', 'Lexus RX', 'Lexus GX', 'RX Hybrid', 'RX L', 'Toyota Sequoia',
            'Lexus LX', 'Land Cruiser Prado', 'Cadillac Escalade', 'Escalade V', 'XT5', 'XT6', 'CT6', 'Cadillac Lyriq',
            'Suburban', 'Tahoe', 'Traverse', 'Chevrolet Bolt EV', 'Equinox', 'Blazer', 'Malibu', 'Trailblazer', 'Colorado',
            'Silverado 1500', 'Silverado 2500HD', 'Silverado 3500HD', 'Traverse RS', 'Colorado ZR2', 'Camaro ZL1', 'Sonic',
            'Volt', 'Impala', 'Bolt EUV', 'Impala', 'Bolt EUV', 'GMC Yukon', 'Sierra 1500', 'Sierra 2500HD', 'Sierra 3500HD',
            'Canyon', 'Savana', 'Hummer EV', 'GMC Terrain', 'GMC Acadia', 'Kia Telluride', 'Kia Stinger', 'Kia Seltos',
            'Kia Sorento', 'Kia K900', 'Kia Forte', 'Kia Soul EV', 'Kia Niro EV', 'Hyundai Palisade', 'Hyundai Santa Fe',
            'Hyundai Kona EV', 'Hyundai Ioniq Hybrid', 'Hyundai Tucson Hybrid', 'Hyundai Sonata Hybrid', 'Hyundai Elantra Hybrid',
            'Hyundai Kona N', 'Hyundai Veloster N', 'Hyundai Accent', 'Hyundai Tucson', 'Hyundai Santa Fe PHEV', 'Toyota Camry Hybrid',
            'Toyota Prius Prime', 'Toyota Venza', 'Toyota 86', 'Toyota Mirai', 'Toyota Sienna', 'Toyota Tacoma TRD Pro', 'Toyota Tundra',
            'Toyota Corolla Cross', 'Lexus ES', 'Lexus IS', 'Lexus NX', 'Lexus UX', 'Nissan Altima Hybrid', 'Nissan Murano',
            'Nissan Rogue Sport', 'Nissan Maxima', 'Nissan Sentra', 'Nissan Juke', 'Nissan Leaf', 'Nissan Frontier', 'Nissan Titan XD',
            'Nissan Pathfinder', 'Infiniti QX50', 'Infiniti QX60', 'Infiniti QX80', 'Infiniti Q50', 'Infiniti Q60', 'Infiniti Q70',
            'Infiniti QX55', 'BMW X3', 'BMW X4', 'BMW X5 M', 'BMW 3 Series', 'BMW 4 Series', 'BMW 5 Series', 'BMW 7 Series',
            'BMW X2', 'BMW 2 Series', 'BMW 6 Series', 'BMW Z4', 'BMW M4', 'BMW i4', 'BMW iX', 'BMW M2', 'Audi Q5', 'Audi Q7',
            'Audi Q3', 'Audi Q8', 'Audi A1', 'Audi A3', 'Audi A4', 'Audi A5', 'Audi A6', 'Audi A7', 'Audi A8', 'Audi S3',
            'Audi S4', 'Audi S5', 'Audi S7', 'Audi RS3', 'Audi RS4', 'Audi RS5', 'Audi RS7', 'Porsche Taycan', 'Porsche Macan',
            'Porsche Cayenne', 'Porsche 911', 'Porsche Panamera', 'Porsche 718 Boxster', 'Porsche 718 Cayman'
        ];

        return [
            'user_id'=> $this->faker->numberBetween(1,150),
            'license_plate' =>$this->faker->bothify('??-###-??'),
            'brand' => $this->faker->randomElement($carBrands),
            'model' => $this->faker->randomElement($carNames),
            'price' => $this->faker->numberBetween(2000.00,9000.00),
            'mileage' => $this->faker->numberBetween(40000,100000),
            'seats' => $this->faker->randomElement([2,3,5,7]),
            'doors' => $this->faker->randomElement([3,5]),
            'production_year' => $this->faker->numberBetween(1900, 2024),
            'color' => $this->faker->safeColorName(),
            'views' => $this->faker->numberBetween(0,1000),
        ];
    }
}
