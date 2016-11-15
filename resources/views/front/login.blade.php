@extends('front._template')

@section('content')

    <div class="row form subscription-form">

        <div class="col-md-4 col-md-offset-4">

            <h2>Connexion à l'admin :</h2>

            <?= Former::open(route('login_process'))->class('form_horizontal')->method('POST') ?>
            <?= Former::text('login')->label(false)->placeholder('Login')->required()->class('form-control form-li') ?>
            <?= Former::password('password')->label(false)->placeholder('Mot de Passe')->required()->class('form-control form-li') ?>
            <button type="submit" class="btn btn-primary" id="bouton-login">
                <i class="fa fa-btn fa-user"></i> Connexion
            </button>
            <?= Former::close() ?>

        </div>
    </div>
@endsection





