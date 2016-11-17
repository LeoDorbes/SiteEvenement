@extends('back/_template')

@section('content')

    <div class="container">
        <div class="row">
            <a href="{{ route('admin_home') }}"> Retour </a>

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                    <th>Fonction</th>
                    <th>Commentaire</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($registrations) > 0)
                    @foreach($registrations as $registration)
                        <tr>
                            <td>{{ $registration->first_name ? $registration->first_name : '--' }}</td>
                            <td>{{ $registration->last_name ? $registration->last_name : '--' }}</td>
                            <td>{{ $registration->email ? $registration->email : '--' }}</td>
                            <td>{{ $registration->address ? $registration->address : '--' }}</td>
                            <td>{{ $registration->city ? $registration->city : '--' }}</td>
                            <td>{{ $registration->postal_code ? $registration->postal_code : '--' }}</td>
                            <td>{{ $registration->position ? $registration->position : '--' }}</td>
                            <td>{{ $registration->comment ? $registration->comment : '--' }}</td>
                            <td>
                                <a href="{{ route('admin_edit_registration',$registration->id) }}" class="btn btn-default btn-xs"
                                   title="Modifier l'enregistrement"><i
                                            class="fa fa-pencil-square-o"></i></a>
                                <a href="{{ route('admin_delete_registration_process',$registration->id) }}"
                                   class="btn btn-danger btn-xs"
                                   onclick="return confirm('Etes-vous sûr de vouloir supprimer cet enregistrement?');"
                                   title="Supprimer cet enregristrement"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p> Aucune inscription pour le moment</p>
                @endif
                </tbody>
            </table>

        </div>
    </div>
@endsection





