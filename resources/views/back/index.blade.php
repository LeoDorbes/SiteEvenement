@extends('back/_template')

@section('content')


    <div class="container">
        <div class="row">
            <h3>Bienvenue dans le backend</h3>
            <a href="{{ route('logout_process') }}"> Deconnexion !</a>
            <a href="{{ route('admin_registrations') }}" class="btn  btn-default"><i class="fa fa-creative-commons fa-3x"></i><br/>Inscriptions</a>


        </div>

    </div>


@endsection





