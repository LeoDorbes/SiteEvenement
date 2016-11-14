@extends('_template')

@section('content')

    <div class="row form subscription-form">
        <div class="col-sm-offset-3 col-sm-6">
            <h2> S'inscrire à l'event </h2>
            <?= Former::open_vertical(route('registration_process'))->method('POST')
            ->rules(array(
                   'postal' => ''

            ))
            ->class('form_horizontal') ?>
            <?= Former::text('first_name')->label(false)->placeholder('Prénom')->required()->class('form-control form-li') ?>
            <?= Former::text('last_name')->label(false)->placeholder('Nom')->required()->class('form-control form-li') ?>
            <?= Former::email('email')->label(false)->placeholder('Email')->required()->class('form-control form-li') ?>
            <?= Former::text('adresse')->label(false)->placeholder('Adresse')->required()->class('form-control form-li') ?>
            <?= Former::text('Ville')->label(false)->placeholder('Ville')->required()->class('form-control form-li') ?>
            <?= Former::text('postal')->label(false)->placeholder('Code Postal')->required()->class('form-control form-li') ?>
            <?= Former::text('job')->label(false)->placeholder('Votre fonction')->class('form-control form-li') ?>
            <?= Former::textarea('comment')->label(false)->placeholder('Commentaire')->required()->class('form-control form-li') ?>

            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> s'inscrire
            </button>
            <?= Former::close() ?>
        </div>
    </div>

@endsection





