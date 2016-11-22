@extends('back/_template')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('admin_registrations') }}"> retour</a>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @include('_flash')

                        @if(isset($registration))


                            <p><span class="title">Prénom :</span> {{ $registration->first_name ? $registration->first_name : '--'}}</p>
                            <p><span class="title">Nom :</span> {{ $registration->last_name ? $registration->last_name : '--'}}</p>
                            <p><span class="title">Email</span> {{ $registration->email ? $registration->email : '--'}}</p>
                            <p><span class="title">Adresse</span> {{ $registration->address ? $registration->address : '--'}}</p>
                            <p><span class="title">Code postal</span> {{ $registration->postal_code ? $registration->postal_code : '--'}}</p>
                            <p><span class="title"><i class="fa fa-map-marker"></i>Ville</span> {{ $registration->city ? $registration->city : '--'}}</p>
                            <p><span class="title"><i class="fa fa-address-card"></i>Position</span> {{ $registration->position ? $registration->position : '--'}}</p>
                            <p><span class="title"> Date d'inscription </span> {{ $registration->created_at ?  Date::parse($registration->created_at)->format('d/m/Y') : '--'}}</p>


                            <div class="item-comment col-sm-12">
                                <span class="title">Commentaire</span>
                                            <div class="item-comment-text list-group-item">{{ $registration->comment ? $registration->comment : '--'}}
                            </div>

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
