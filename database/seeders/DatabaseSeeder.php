<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Jose Macias',
            'email' => 'jost_o12@live.com',
            'password' => Hash::make('test12345'),
        ]);

        DB::table('generos')->insert([
            'nombre_genero' => 'Rock',
            'descripcion_genero' => 'Test',
        ]);
        DB::table('generos')->insert([
            'nombre_genero' => 'Pop',
            'descripcion_genero' => 'Test',
        ]);
        DB::table('generos')->insert([
            'nombre_genero' => 'Electronica',
            'descripcion_genero' => 'Test',
        ]);
        DB::table('generos')->insert([
            'nombre_genero' => 'Folk',
            'descripcion_genero' => 'Test',
        ]);

        DB::table('artistas')->insert([
            'nombre_artista' => 'Les Rallizes Dénudés',
            'fecha' => '1967-01-01',
            'imagen_artista' => 'uploads/x1OuczjETHFOK0wPEIprlVppywzsIySbXgnVhnx1.jpg',
            'descripcion_artista' => 'Les Rallizes Dénudés fue una banda japonesa underground de rock psicodélico formada en 1967 en la Universidad Doshisha de Kioto.',

        ]);
        DB::table('artistas')->insert([
            'nombre_artista' => 'Big Thief',
            'fecha' => '2015-01-01',
            'imagen_artista' => 'uploads/F2bXQa2YurMZ5vLT0w8GAfzRMLWyXwPx4GxjlnjD.jpg',
            'descripcion_artista' => 'Big Thief es una banda estadounidense de indie rock con raíces folk con sede en Brooklyn, Nueva York. Sus miembros son Adrianne Lenker (guitarra, voz), Buck Meek (guitarra, coros), Max Oleartchik (bajo) y James Krivchenia (batería).',
        ]);
        DB::table('artistas')->insert([
            'nombre_artista' => 'black midi',
            'fecha' => '2017-01-01',
            'imagen_artista' => 'uploads/20z8N9zJ9JFg4c5zcXHlhrlnquQhKNedYVOvpFFe.jpg',
            'descripcion_artista' => 'Black Midi es una banda de rock inglesa de Londres, formada en 2017.',
        ]);

        DB::table('lanzamientos')->insert([
            'nombre_lanzamiento' => 'The OZ Tapes',
            'fecha_lanzamiento' => '2022-04-04',
            'caratula' => 'uploads/uUh87hHE5xK7Nwl3xgk0dreuIwygN61RNHe6pzIB.jpg',
            'descripcion_lanzamiento' => 'With The OZ Tapes, we are finally able to hear the missing pieces. Stored on reels of Scotch analog recording tape, these recordings had laid dormant in storage for almost half a century.',
            'tipo' => 'Album',
            'id_genero' => '1',
        ]);
        DB::table('lanzamientos')->insert([
            'nombre_lanzamiento' => 'Dragon New Warm Mountain I Believe in You',
            'fecha_lanzamiento' => '2022-02-11',
            'caratula' => 'uploads/CTZBMhIdJnAQZqr24Z5yI4lkzAJoFl4BLCrNWH55.webp',
            'descripcion_lanzamiento' => 'Dragon New Warm Mountain I Believe in You es el quinto álbum de estudio de la banda estadounidense Big Thief, lanzado como álbum doble a través de 4AD el 11 de febrero de 2022.',
            'tipo' => 'Album',
            'id_genero' => '1',
        ]);
        DB::table('lanzamientos')->insert([
            'nombre_lanzamiento' => 'Hellfire',
            'fecha_lanzamiento' => '2022-07-15',
            'caratula' => 'uploads/JF87GIkFsG8kTKWCpDLu1TRziWJlVkGhnTQk1Xvq.png',
            'descripcion_lanzamiento' => 'Hellfire is the third studio album by English rock band Black Midi, released on 15 July 2022 on Rough Trade Records.[1] The band recorded the majority of the album over a thirteen-day period with producer Marta Salogni, who had previously worked with the band in recording the song "John L" from their second studio album.',
            'tipo' => 'Album',
            'id_genero' => '1',
        ]);
        DB::table('lanzamientos')->insert([
            'nombre_lanzamiento' => 'Welcome to Hell',
            'fecha_lanzamiento' => '2022-05-09',
            'caratula' => 'uploads/xJjXUBLJeQggRH9ZrTdrr74UGbCROf9aYBWoteBD.png',
            'descripcion_lanzamiento' => 'Welcome to Hell is the lead single from the album Hellfire. The song tells the story of Private Tristan Bongo, a man who is at war and who is ...',
            'tipo' => 'Sencillo',
            'id_genero' => '1',
        ]);

        DB::table('realizas')->insert([
            'id_artista' => '1',
            'id_lanzamiento' => '1',
        ]);
        DB::table('realizas')->insert([
            'id_artista' => '2',
            'id_lanzamiento' => '2',
        ]);
        DB::table('realizas')->insert([
            'id_artista' => '3',
            'id_lanzamiento' => '3',
        ]);
        DB::table('realizas')->insert([
            'id_artista' => '3',
            'id_lanzamiento' => '4',
        ]);

        DB::table('canciones')->insert([
            'id_lanzamiento' => '1',
            'num_pista' => '1',
            'titulo' => 'OZ Days',
            'duracion' => '92',
            'reproducciones' => '1000',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '1',
            'num_pista' => '2',
            'titulo' => 'A Shadow on Our Joy',
            'duracion' => '423',
            'reproducciones' => '500',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '2',
            'num_pista' => '1',
            'titulo' => 'Change',
            'duracion' => '295',
            'reproducciones' => '20000',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '2',
            'num_pista' => '2',
            'titulo' => 'Spud Infinity',
            'duracion' => '335',
            'reproducciones' => '45000',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '3',
            'num_pista' => '1',
            'titulo' => 'Hellfire',
            'duracion' => '85',
            'reproducciones' => '2500',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '3',
            'num_pista' => '2',
            'titulo' => 'Sugar/Tzu',
            'duracion' => '231',
            'reproducciones' => '12350',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '3',
            'num_pista' => '3',
            'titulo' => 'Eat Men Eat',
            'duracion' => '189',
            'reproducciones' => '5000',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '3',
            'num_pista' => '4',
            'titulo' => 'Welcome to Hell',
            'duracion' => '248',
            'reproducciones' => '45000',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '3',
            'num_pista' => '5',
            'titulo' => 'Still',
            'duracion' => '347',
            'reproducciones' => '12332',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '3',
            'num_pista' => '6',
            'titulo' => 'Half Time',
            'duracion' => '27',
            'reproducciones' => '1000',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '3',
            'num_pista' => '7',
            'titulo' => 'The Race Is About To Begin',
            'duracion' => '436',
            'reproducciones' => '29389',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '3',
            'num_pista' => '8',
            'titulo' => 'Dangerous Liaisons',
            'duracion' => '255',
            'reproducciones' => '15731',
        ]);
        DB::table('canciones')->insert([
            'id_lanzamiento' => '4',
            'num_pista' => '1',
            'titulo' => 'Welcome to Hell',
            'duracion' => '248',
            'reproducciones' => '35943',
        ]);

        $this->call(MakeLanzamientosSeeder::class);
    }
}
