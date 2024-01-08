<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('db.comics');
        foreach ($data as $value) {
            $comic = new Comic();
            $comic->title = $value['title'];
            $comic->description = $value['description'];
            $comic->thumb = $value['thumb'];
            $comic->price = $value['price'];
            $comic->series = $value['series'];
            $comic->sale_date = $value['sale_date'];
            $comic->type = $value['type'];
            $comic->save();
        }
    }
}
