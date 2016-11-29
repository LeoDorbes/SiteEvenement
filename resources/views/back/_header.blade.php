<header id="header-back">
    <div class="container-fluid">
        <div class="row txtcenter">
            <h3 class="col-xs-12">Bienvenue dans le backend</h3>
            <a href="{{ route('admin_registrations') }}" class="btn  btn-default col-xs-12 col-sm-6 col-md-2 col-md-offset-3"><i class="fa fa-list"></i>Inscriptions en attente</a>
            <a href="{{ route('admin_validated_registrations') }}" class="btn  btn-default col-xs-12 col-sm-6 col-md-2"><i class="fa fa-list"></i>Inscriptions validées</a>
            <a href="{{ route('admin_refused_registrations') }}" class="btn  btn-default col-xs-12 col-sm-6 col-md-2"><i class="fa fa-list"></i>Inscriptions refusées</a>
            <a href="{{ route('logout_process') }}"  class="btn  btn-default col-xs-12 col-sm-6 col-md-2 col-md-offset-1"><i class="fa fa-sign-out"></i> Deconnexion !</a>


        </div>

    </div>
</header>