@extends('layouts.base')

@section("content")

<div>
    
    <ul>
        @foreach ($fumetti as $fumetto)

        <li>
            TITOLO: {{$fumetto["titolo"]}}
            <ul>
                <li>AUTORE: {{$fumetto["autore"]}}</li>
                <li>ANNO: {{$fumetto["anno"]}}</li>
                <li>RECENSIONE: {{$fumetto["recensione"]}}</li>
                <li>VOTO: {{$fumetto["voto"]}}</li>
            </ul>
        </li>
        <br>
            
        @endforeach
    </ul>
    
</div>

@endsection