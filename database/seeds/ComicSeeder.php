<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comic = new Comic();
        $comics = config('comics');

        foreach($comics as $comic){

            $comics->


            $comics->save()
        }
    }
}
