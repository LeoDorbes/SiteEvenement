@extends('back/_template')

<?php
$gender = [
        1 => "M",
        2 => "Mme",
        3 => "Mlle",
        4 => "Autre",
];
?>

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('admin_registrations') }}"> retour </a>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @include('_flash')

                        @if(isset($registration))

                            <p><span>Genre :</span> <span>{{ $gender[$registration->gender] ? $gender[$registration->gender] : '--'}}
                                </span></p>
                            <p><span>Prénom :</span>
                                <span>{{ $registration->first_name ? $registration->first_name : '--'}}</span></p>
                            <p><span>Nom :</span>
                                <span>{{ $registration->last_name ? $registration->last_name : '--'}}</span></p>
                            <p><span>Email</span> <span>{{ $registration->email ? $registration->email : '--'}}</span>
                            </p>
                            <p><span>Adresse</span>
                                <span>{{ $registration->address ? $registration->address : '--'}}</span></p>
                            <p><span>Code postal</span>
                                <span>{{ $registration->postal_code ? $registration->postal_code : '--'}}</span></p>
                            <p><span><i class="fa fa-map-marker"></i>Ville</span>
                                <span>{{ $registration->city ? $registration->city : '--'}}</span></p>
                            <p><span><i class="fa fa-address-card"></i>Position</span>
                                <span>{{ $registration->role ? $registration->role->name : '--'}}</span></p>

                            <p><span> Date d'inscription </span>
                                <span>{{ $registration->created_at ?  Date::parse($registration->created_at)->format('d/m/Y') : '--'}}</span>
                            </p>


                            <div class="item-comment col-sm-12">
                                <div class="item-comment-text list-group-item">

                                    <span>Commentaire</span>
                                    : {{ $registration->comment ? $registration->comment : '--'}}
                                </div>
                            </div>

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
