@extends('layouts.app')

@section('content')
    
    <h1>Importa il fumetto</h1>

    <div>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            
            <div>
                <label for="name">Titolo</label>
                <input type="text" value="{{old('title')}}" name="title" id="name" placeholder="Inserisci il titolo del fumetto...">
            </div>

            <div>
                <label for="price">Prezzo</label>
                <input type="text" value="{{old('price')}}" name="price" id="price" placeholder="Inserisci il prezzo..." required>
            </div>

            <div>
                <label for="type">Scegli il tipo di fumetto</label>
                <select name="type" id="type">
                    <option value="comic-book">comic-book</option>
                    <option value="graphic-novel">graphic-novel</option>
                </select>
            </div>

            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" value="{{old('description')}}" id="description" cols="30" rows="10"></textarea>
            </div>

            <div>
                <label for="thumb">Immagine</label>
                <input value="{{old('thumb')}}" type="text" name="thumb" id="thumb" placeholder="place image here">
            </div>

            <div>
                <label for="sale_date">Sale</label>
                <input value="{{old('sale_date')}}" type="text" name="sale_date" id="sale_date" placeholder="metti la data di vendita">
            </div>

            <div>
                <label for="series">Series</label>
                <input value="{{old('series')}}" type="text" name="series" id="series" placeholder="specifica la serie">
            </div>

            <button type="submit">
                Submit
            </button>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif


        </form>
    </div>

@endsection