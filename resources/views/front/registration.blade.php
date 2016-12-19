@extends('front/_template')

@section('content')

    <?php
    $registrationRequest = new \App\Http\Requests\Registration();
    $registrationRequestRules = $registrationRequest->rules();
    ?>



    <div class="container-fluid">
        <div class="row form subscription-form">
            <div class="col-sm-offset-3 col-sm-6">
                <h2> S'inscrire au concours </h2>
                <?= Former::open_vertical(route('registration_process'))->method('POST')
                        ->rules($registrationRequestRules)
                        ->class('form_horizontal') ?>

                <div class="form-group">
                     Civilité :
                     <label for="gender" class="">
                         <input id="gender" type="radio" name="gender" value="1">M
                     </label>
                     <label for="gender2" class="">
                         <input id="gender2" type="radio" name="gender" value="2">Mme
                     </label>
                     <label for="gender3" class="">
                         <input id="gender3" type="radio" name="gender" value="3">Mlle
                     </label>
                     <label for="gender4" class="">
                         <input id="gender4" type="radio" name="gender" value="4">Autre
                     </label>
                 </div>

                <?= Former::text('first_name')->label(false)->placeholder('Prénom')->required()->class('form-control form-li') ?>
                <?= Former::text('last_name')->label(false)->placeholder('Nom')->required()->class('form-control form-li') ?>
                <?= Former::email('email')->label(false)->placeholder('Email')->required()->class('form-control form-li') ?>
                <?= Former::text('address')->label(false)->placeholder('Adresse')->required()->class('form-control form-li') ?>
                <?= Former::text('city')->label(false)->placeholder('Ville')->required()->class('form-control form-li') ?>
                <?= Former::text('postal_code')->label(false)->placeholder('Code Postal')->required()->class('form-control form-li') ?>
                <?= Former::select('role')->label("Rôle :")->options(App\Role::getFormList())->class('form-control form-li')->required() ?>

                {{--<div class="form-group">--}}
                    {{--<div class="checkbox">--}}

                        <label for="participate" class="">Pourra participer à l'événement à Paris</label>
                            <input class="" id="participate" type="checkbox" name="participate"
                                   value="1">

                    {{--</div>--}}
                {{--</div>--}}

                <?= Former::textarea('comment')->label(false)->placeholder('Commentaire')->required()->class('form-control form-li') ?>


                <button type="submit" class="btn btn-primary" id="subscribe-button">
                    <i class="fa fa-btn fa-user fa-2x"></i> s'inscrire
                </button>
                <?= Former::close() ?>
            </div>
        </div>
    </div>

@endsection





