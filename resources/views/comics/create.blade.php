@extends('layouts.app')

@section('content')
    
    <h1>Importa il fumetto</h1>

    <div>
        <form action="{{route('comics.store')}}" method="POST">
            <div>
                <label for="name">Titolo</label>
                <input type="text" name="title" id="name" placeholder="Inserisci il titolo del fumetto...">
            </div>

            <div>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" placeholder="Inserisci il prezzo...">
            </div>

            <div>
                <label for="type">Scegli il tipo di fumetto</label>
                <select name="type" id="type">
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>

            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div>
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb" placeholder="place image here">
            </div>




        </form>
    </div>

@endsection