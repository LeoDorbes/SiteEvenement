@extends('back/_template')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('admin_registrations') }}"> retour</a>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(isset($registration))
                        <div class="panel-heading">Editer une inscription</div>

                    @else
                        <div class="panel-heading">Ajouter une inscription</div>

                    @endif
                    <div class="panel-body">

                        @include('_flash')
                        {!! Former::open_vertical_for_files($url)->method('POST')->class('form-horizontal') !!}

                        @if(isset($registration))

                            {!! Former::populateField('first_name', $registration->first_name) !!}
                            {!! Former::populateField('last_name', $registration->last_name) !!}
                            {!! Former::populateField('email', $registration->email) !!}
                            {!! Former::populateField('address', $registration->address) !!}
                            {!! Former::populateField('city', $registration->city) !!}
                            {!! Former::populateField('postal_code', $registration->postal_code) !!}
                            {!! Former::populateField('position', $registration->position) !!}
                            {!! Former::populateField('comment', $registration->comment) !!}
                            {!! Former::populateField('gender', $registration->gender) !!}
                            {!! Former::populateField('role_id', $registration->role_id) !!}


                        @else

                        @endif
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    Civilité :
                                    <label for="gender" class="">M
                                        <input id="gender" type="radio" name="gender" value=1>
                                    </label>
                                    <label for="gender2" class="">Mme
                                        <input id="gender2" type="radio" name="gender" value=2>
                                    </label>
                                    <label for="gender3" class="">Mlle
                                        <input id="gender3" type="radio" name="gender" value=3>
                                    </label>
                                    <label for="gender4" class="">Autre
                                        <input id="gender4" type="radio" name="gender" value=4>
                                    </label>
                                </div>

                                {!! Former::text('first_name')->label('Prénom') !!}
                                {!! Former::text('last_name')->label('Nom') !!}
                                {!! Former::text('email')->label('E-mail') !!}
                                {!! Former::text('address')->label('Adresse') !!}
                                {!! Former::text('city')->label('Ville') !!}
                                {!! Former::text('postal_code')->label('Code postal') !!}
                                {!! Former::select('role_id')->options(App\Role::getFormList())->class('form-control form-li')->required() !!}

                                <div class="form-group">

                                        <label for="participate" class="">Pourras participer à l'evenement à Paris</label>
                                            <input class="form-control form-li" id="participate" type="checkbox" name="participate"
                                                   value="1">


                                </div>

                                {!! Former::textarea('comment')->label('Commentaire') !!}

                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    @if(isset($registration))
                                        <i class="fa fa-btn fa-user"></i> Modifier l'inscription
                                    @else
                                        <i class="fa fa-btn fa-user"></i> Ajouter l'inscription
                                    @endif
                                </button>
                            </div>
                        </div>
                        {!! Former::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
