@extends('back/_template')

@section('content')


        <div class="container">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Gestion Materiel</div>

                    <div class="panel-body">
                        @include('_flash')
                        <div class="row">
                            <div class="col-xs-4">
                                <a href="{{ route('admin_registrations') }}" class="btn btn-default btn-md btn-block"><i class="fa fa-list-ul fa-3x"></i><br/>Inscriptions</a>
                                <br/>
                            </div>
                            <div class="col-xs-4">
                                <a href="{{ route('admin_users') }}" class="btn btn-default btn-md btn-block"><i class="fa fa-users fa-3x"></i><br/>Administrateurs</a>
                                <br/>
                            </div>
                            <div class="col-xs-4">
                                <a href="{{ route('admin_roles') }}" class="btn btn-default btn-md btn-block"><i class="fa fa-briefcase fa-3x"></i><br/>Rôles</a>
                                <br/>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
            {{--<div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Composants et données</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <a href="" class="btn btn-default btn-md btn-block"><i class="fa fa-user fa-3x"></i><br/>Ajouter un utilisateur</a>
                                <br/>

                            </div>

                            <div class="col-xs-3">
                                <a href="" class="btn btn-default btn-md btn-block"><i class="fa fa-users fa-3x"></i><br/>Gerer les utilisateurs</a>
                                <br/>
                            </div>


                        </div>

                    </div>
                </div>
            </div>--}}
        </div>
    </div>


@endsection





