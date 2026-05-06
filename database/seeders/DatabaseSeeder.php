<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = faker::create('id_KSA');
        for ($i=1; $i < 500; $i++) {
            Masyarakat::create([
                'nomor_kk' => $faker->randomnumber(),
                'nomor_ktp' => $faker->randomnumber(),
                'nama' => $faker->name(),
                'alamat' => $faker->address(),
                'jenis_kelamin' => $faker->randomelement(['Laki-laki', 'perempuan'])
            ]);
        }
    }
}
