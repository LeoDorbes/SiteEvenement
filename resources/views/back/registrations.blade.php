@extends('back/_template')

@section('content')

    <div class="container-fluid">
        @if(count($registrations) > 0)
            @foreach($registrations as $registration)
                {{ $registration->first_name ? $registration->first_name : '--' }} </br>
            @endforeach
            <p> PAS VIDE</p>
        @else
            <p> Pas de contenu </p>
        @endif
    </div>
@endsection





