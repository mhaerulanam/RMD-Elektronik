<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id' => "00-00-01",
                'nama' => "Dr. Sendi",
                'alamat' => "Bondowoso",
            ],
            [
                'id' => "00-00-02",
                'nama' => "Dr. Sendi",
                'alamat' => "Bondowoso",
            ],
            [
                'id' => "00-00-03",
                'nama' => "Dr. Sendi",
                'alamat' => "Bondowoso",
            ],
            [
                'id' => "00-00-04",
                'nama' => "Dr. Sendi",
                'alamat' => "Bondowoso",
            ],
            [
                'id' => "00-00-05",
                'nama' => "Dr. Sendi",
                'alamat' => "Bondowoso",
            ],
        ];

        \DB::table('dokters')->insert($posts);
    }
}
