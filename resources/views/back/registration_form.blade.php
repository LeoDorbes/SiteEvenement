@extends('back/_template')

@section('content')
    <div class="container">
        <div class="row">
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

                        @else

                        @endif
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                {!! Former::text('first_name')->label('Prénom') !!}
                                {!! Former::text('last_name')->label('Nom') !!}
                                {!! Former::text('email')->label('E-mail') !!}
                                {!! Former::text('address')->label('Adresse') !!}
                                {!! Former::text('city')->label('Ville') !!}
                                {!! Former::text('postal_code')->label('Code postal') !!}
                                {!! Former::text('position')->label('Fonction') !!}
                                {!! Former::textarea('comment')->label('Commentaire') !!}

                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    @if(isset($item))
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
