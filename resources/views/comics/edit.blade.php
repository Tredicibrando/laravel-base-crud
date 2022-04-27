@extends('layouts.app')

@section('content')
    
    <h1>Modifica il fumetto</h1>

    <div>
        <form action="{{route('comics.update',$comic)}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Titolo</label>
                <input type="text" name="title" id="name" placeholder="Inserisci il titolo del fumetto..." value="{{$comic->title}}">
            </div>

            <div>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" placeholder="Inserisci il prezzo..." value="{{$comic->price}}">
            </div>

            <div>
                <label for="type">Scegli il tipo di fumetto</label>
                <select name="type" id="type">
                    <option value="comic book"{{$comic->type == 'comic book' ? 'selected': ''}}>Comic Book</option>
                    <option value="graphic novel"{{$comic->type == 'graphic novel' ? 'selected': ''}} >Graphic Novel</option>
                </select>
            </div>

            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">{{$comic->description}}</textarea>
            </div>

            <div>
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb" placeholder="place image here">
            </div>
            <button type="submit">
                Modifica
            </button>




        </form>
    </div>

@endsection