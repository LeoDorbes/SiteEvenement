@extends('_template')

@section('content')

    <div class="row" id="subscription-form">

        <div class="col-md-4 col-md-offset-4">

            <h2>Connexion à l'admin :</h2>

            <?= Former::open(route('login_process'))->class('form_horizontal')->method('POST') ?>
            <?= Former::text('login')->label(false)->placeholder('Login')->required() ?>
            <?= Former::password('password')->label(false)->placeholder('Mot de Passe')->required() ?>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> Connexion
            </button>
            <?= Former::close() ?>

        </div>
    </div>
@endsection





