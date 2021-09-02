<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_mhs' => strtoupper($this->faker->name()),
            'nim' => $this->faker->unique()->numerify('130201#0###'), // 'Hello 609'
            'notelp_mhs' => $this->faker->tollFreePhoneNumber,
            'jurusan' => $this->faker->randomElement($array = array ('TI','SI')),
            'angkatan' => $this->faker->numberBetween($min = 2015, $max = 2021),
            'status_mhs' => $this->faker->randomElement($array = array ('aktif','nonaktif','cuti', 'lulus')),
            'mhs_spesial' => $this->faker->randomElement($array = array ('tidak', 'mhs_binaan1', 'mhs_binaan2'))
        ];
    }
}
