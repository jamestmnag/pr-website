<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Post;
use Illuminate\Support\Str;

class postFactory extends Factory
{ 

    /**
     * Define the model's default state.
     * 
     *
     * @return array
     */
    protected $model = \app\Models\Post::class;
    public function definition()
    {
        return 
             [
                'title' => $this->faker->title,
                'body' => $this->faker->paragraph,
                'created_at' => now(),
              
            
            //
        ];
    }
}
