@extends('_template')

@section('content')

    <div class="row" id="subscription-form">
        <div class="col-sm-offset-3 col-sm-6">
            <h2> S'inscrire à l'event </h2>
            <?= Former::open()
                    ->rules(array(
                           'postal' => ''

                    ))


                    ->class('form_horizontal')->method('GET') ?>
            <?= Former::text('first_name')->label(false)->placeholder('Prénom')->required() ?>
            <?= Former::text('last_name')->label(false)->placeholder('Nom')->required() ?>
            <?= Former::email('email')->label(false)->placeholder('Email')->required() ?>
            <?= Former::text('adresse')->label(false)->placeholder('Adresse')->required() ?>
            <?= Former::text('Ville')->label(false)->placeholder('Ville')->required() ?>
            <?= Former::text('postal')->label(false)->placeholder('Code Postal')->required() ?>

            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> s'inscrire
            </button>
            <?= Former::close() ?>
        </div>
    </div>

@endsection





