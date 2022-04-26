@extends('layouts.app')

@section('content')
    
    <main>
        <table>
            <thead>
                <th>Title</th>
                <th>Description</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>Type</th>
            </thead>
            <tbody>

                @foreach ($comics as $el)
                    <tr>
                        <td>
                            <a href="{{route('comics.show',$el)}}"> {{$el->title}}</a>
                        </td>
                        <td>
                            {{$el->description}}
                        </td>
                        <td>
                            <img src="{{$el->thumb}}" alt="">
                        </td>
                        <td>
                            {{$el->price}}
                        </td>
                        <td>
                            {{$el->series}}
                        </td>
                        <td>
                            {{$el->sale_date}}
                        </td>
                        <td>
                            {{$el->type}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>

@endsection