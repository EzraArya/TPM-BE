<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $CategoryID = DB::table('categories')->pluck('id');
        return [
            'Judul' => $this->faker->name(),
            'Author' => $this->faker->name(),
            'PublishDate' => now(),
            'Stock' => $this->faker->numberBetween(10, 200), // password
            // 'image' => 
            'category_id'=>$this->faker->randomElement($CategoryID)
        ];

    }
}
