@extends('front/_template')

@section('content')

    <?php
    $registrationRequest = new \App\Http\Requests\Registration();
    $registrationRequestRules = $registrationRequest->rules();

    $gender = old('gender');
    ?>



    <div class="container-fluid">
        <div class="row form subscription-form">
            <div class="col-sm-offset-3 col-sm-6">
                <h2> S'inscrire au concours </h2>
                <?= Former::open_vertical(route('registration_process'))->method('POST')
                        //->rules($registrationRequestRules)
                        ->class('form_horizontal') ?>

                <div class="form-group">
                     Civilité :
                     <label for="gender" class="">M
                         <input id="gender-1" type="radio" name="gender" value="1"
                                 <?php if($gender == 1)echo 'checked'; ?>

                                 >
                     </label>
                     <label for="gender2" class="">Mme
                         <input id="gender-2" type="radio" name="gender" value="2" <?php if($gender == 2)echo 'checked'; ?> >
                     </label>
                     <label for="gender3" class="">Mlle
                         <input id="gender-3" type="radio" name="gender" value="3" <?php if($gender == 3)echo 'checked'; ?> >
                     </label>
                     <label for="gender4" class="">Autre
                         <input id="gender-4" type="radio" name="gender" value="4" <?php if($gender == 4)echo 'checked'; ?> >
                     </label>
                 </div>

                <?= Former::text('first_name')->label(false)->placeholder('Prénom')->class('form-control form-li') ?>
                <?= Former::text('last_name')->label(false)->placeholder('Nom')->class('form-control form-li') ?>
                <?= Former::email('email')->label(false)->placeholder('Email')->class('form-control form-li') ?>
                <?= Former::text('address')->label(false)->placeholder('Adresse')->class('form-control form-li') ?>
                <?= Former::text('city')->label(false)->placeholder('Ville')->class('form-control form-li') ?>
                <?= Former::text('postal_code')->label(false)->placeholder('Code Postal')->class('form-control form-li') ?>
                <?= Former::select('role_id')->label("Rôle :")->options(App\Role::getFormList())->class('form-control form-li') ?>

                <div class="form-group">
                    {{--<div class="checkbox">--}}

                        <label for="participate" class="">Pourra participer à l'événement à Paris</label>
                            <input class="form-li registration-button" id="participate" type="checkbox" name="participate"
                                   value="1" <?php if(old('participate') == true)echo 'checked'; ?> >

                    {{--</div>--}}
                </div>

                <?= Former::textarea('comment')->label(false)->placeholder('Commentaire')->class('form-control form-li') ?>


                <button type="submit" class="btn btn-primary" id="subscribe-button">
                    <i class="fa fa-btn fa-user"></i> s'inscrire
                </button>
                <?= Former::close() ?>
            </div>
        </div>
    </div>

@endsection





