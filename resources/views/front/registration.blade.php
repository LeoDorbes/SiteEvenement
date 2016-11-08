@extends('_template')

@section('content')

    <h2> S'inscrire à l'event </h2>
    <?= Former::open()->class('form_horizontal')->method('GET') ?>
    <?= Former::text('first_name')->label(false)->placeholder('Prénom')->required() ?>
    <?= Former::text('last_name')->label(false)->placeholder('Nom')->required() ?>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-btn fa-user"></i> s'inscrire
    </button>
    <?= Former::close() ?>

@endsection





