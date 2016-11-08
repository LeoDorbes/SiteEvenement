@extends('_template')

@section('content')

    <div class="col-md-4 col-md-offset-4">

        <?= Former::open()->class('form_horizontal')->method('GET') ?>
        <?= Former::text('login')->label(false)->placeholder('Login')->required() ?>
        <?= Former::password('password')->label(false)->placeholder('Mot de Passe')->required() ?>
        <?= Former::close() ?>

    </div>
@endsection





