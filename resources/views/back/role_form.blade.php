@extends('back/_template')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('admin_roles') }}">retour</a>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(isset($role))
                        <div class="panel-heading">Editer un rôle</div>

                    @else
                        <div class="panel-heading">Ajouter un rôle</div>

                    @endif
                    <div class="panel-body">

                        @include('_flash')
                        {!! Former::open_horizontal($url)->method('POST') !!}

                        @if(isset($role))

                            {!! Former::populateField('name', $role->name) !!}
                        @endif

                        {!! Former::text('name')->label('Nom') !!}


                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    @if(isset($role))
                                        <i class="fa fa-btn fa-user"></i> Modifier le rôle
                                    @else
                                        <i class="fa fa-btn fa-user"></i> Ajouter le rôle
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
