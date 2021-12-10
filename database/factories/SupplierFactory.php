<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->safeEmail,
            'contact_no_1'=>$this->faker->phoneNumber,
            'contact_no_2'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'notes'=>$this->faker->sentences(3,true),
        ];
    }
}
