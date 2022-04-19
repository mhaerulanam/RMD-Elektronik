<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RekamMediksTableSeeder extends Seeder
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
                'name' => "Dona",
                'dpjp' => "00-00-01",
                'hasil_pemerikasaan' => "Hemoglobin",
                'diagnosa' => "diagnosa_hemoglobin",
                'tindakan' => "Periksa",
                'pengobatan' => "obat",
                'tindakan' => "lorem ipsum",
                'keterangan' => "Consequat do ex non nulla quis eiusmod ut cupidatat amet est duis. Adipisicing aliqua laboris minim veniam ex nostrud enim labore exercitation duis. Eu mollit esse voluptate minim nulla exercitation Lorem officia Lorem ullamco sint eiusmod. Consequat occaecat laboris elit eiusmod labore anim reprehenderit tempor ea magna deserunt aute.",

            ],
            [
                'name' => "Jona",
                'dpjp' => "00-00-04",
                'hasil_pemerikasaan' => "Hemoglobin",
                'diagnosa' => "diagnosa_hemoglobin",
                'tindakan' => "Periksa",
                'pengobatan' => "obat",
                'tindakan' => "lorem ipsum",
                'keterangan' => "Consequat do ex non nulla quis eiusmod ut cupidatat amet est duis. Adipisicing aliqua laboris minim veniam ex nostrud enim labore exercitation duis. Eu mollit esse voluptate minim nulla exercitation Lorem officia Lorem ullamco sint eiusmod. Consequat occaecat laboris elit eiusmod labore anim reprehenderit tempor ea magna deserunt aute.",

            ],
            [
                'name' => "Tiara",
                'dpjp' => "00-00-01",
                'hasil_pemerikasaan' => "Hemoglobin",
                'diagnosa' => "diagnosa_hemoglobin",
                'tindakan' => "Periksa",
                'pengobatan' => "obat",
                'tindakan' => "lorem ipsum",
                'keterangan' => "Consequat do ex non nulla quis eiusmod ut cupidatat amet est duis. Adipisicing aliqua laboris minim veniam ex nostrud enim labore exercitation duis. Eu mollit esse voluptate minim nulla exercitation Lorem officia Lorem ullamco sint eiusmod. Consequat occaecat laboris elit eiusmod labore anim reprehenderit tempor ea magna deserunt aute.",

            ],
            [
                'name' => "Salsa",
                'dpjp' => "00-00-02",
                'hasil_pemerikasaan' => "Hemoglobin",
                'diagnosa' => "diagnosa_hemoglobin",
                'tindakan' => "Periksa",
                'pengobatan' => "obat",
                'tindakan' => "lorem ipsum",
                'keterangan' => "Consequat do ex non nulla quis eiusmod ut cupidatat amet est duis. Adipisicing aliqua laboris minim veniam ex nostrud enim labore exercitation duis. Eu mollit esse voluptate minim nulla exercitation Lorem officia Lorem ullamco sint eiusmod. Consequat occaecat laboris elit eiusmod labore anim reprehenderit tempor ea magna deserunt aute.",

            ],
            [
                'name' => "Suparyo jono",
                'dpjp' => "00-00-03",
                'hasil_pemerikasaan' => "Hemoglobin",
                'diagnosa' => "diagnosa_hemoglobin",
                'tindakan' => "Periksa",
                'pengobatan' => "obat",
                'tindakan' => "lorem ipsum",
                'keterangan' => "Consequat do ex non nulla quis eiusmod ut cupidatat amet est duis. Adipisicing aliqua laboris minim veniam ex nostrud enim labore exercitation duis. Eu mollit esse voluptate minim nulla exercitation Lorem officia Lorem ullamco sint eiusmod. Consequat occaecat laboris elit eiusmod labore anim reprehenderit tempor ea magna deserunt aute.",

            ],
            [
                'name' => "Ronaldo",
                'dpjp' => "00-00-02",
                'hasil_pemerikasaan' => "Hemoglobin",
                'diagnosa' => "diagnosa_hemoglobin",
                'tindakan' => "Periksa",
                'pengobatan' => "obat",
                'tindakan' => "lorem ipsum",
                'keterangan' => "Consequat do ex non nulla quis eiusmod ut cupidatat amet est duis. Adipisicing aliqua laboris minim veniam ex nostrud enim labore exercitation duis. Eu mollit esse voluptate minim nulla exercitation Lorem officia Lorem ullamco sint eiusmod. Consequat occaecat laboris elit eiusmod labore anim reprehenderit tempor ea magna deserunt aute.",

            ],
            [
                'name' => "Pedro hardik",
                'dpjp' => "00-00-04",
                'hasil_pemerikasaan' => "Hemoglobin",
                'diagnosa' => "diagnosa_hemoglobin",
                'tindakan' => "Periksa",
                'pengobatan' => "obat",
                'tindakan' => "lorem ipsum",
                'keterangan' => "Consequat do ex non nulla quis eiusmod ut cupidatat amet est duis. Adipisicing aliqua laboris minim veniam ex nostrud enim labore exercitation duis. Eu mollit esse voluptate minim nulla exercitation Lorem officia Lorem ullamco sint eiusmod. Consequat occaecat laboris elit eiusmod labore anim reprehenderit tempor ea magna deserunt aute.",

            ],
        ];

        \DB::table('rekam_mediks')->insert($posts);
    }
}
