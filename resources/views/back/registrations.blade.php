@extends('back/_template')

@section('content')


    <div class="container">
        <div class="row">
            <a href="{{ route('admin_home') }}"> Retour </a>
            <div class="table-responsive">
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
                    {{--<th>Commentaire</th>--}}
                    <th>Actions</th>
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
                           {{-- <td>{{ $registration->comment ? $registration->comment : '--' }}</td>--}}
                            <td>
                                @if($registration->validate == 0)
                                <a href="{{ route('admin_validate_registration_process',$registration->id) }}" class="btn btn-default btn-sm"
                                   title="Valider l'inscription"><i
                                            class="fa fa-check"></i></a>
                                <a href="{{ route('admin_refuse_registration_process',$registration->id) }}"
                                   class="btn btn-default btn-sm"
                                   title="Refuser cette inscription"><i class="fa fa-close"></i></a>
                                @else
                                    <a href="{{ route('admin_edit_registration',$registration->id) }}"
                                       class="btn btn-default btn-sm"
                                       title="Editer cette inscription"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin_delete_registration_process',$registration->id) }}" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Etes-vous sûr de vouloir supprimer cette inscription?');"
                                       title="Supprimer cette inscription"><i class="fa fa-close"></i></a>
                                @endif
                                    <a href="{{ route('admin_registration',$registration->id) }}" class="btn btn-default btn-sm"
                                       title="Consulter l'inscription"><i
                                                class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                @endif
                </tbody>
            </table>
                <div class="table-bottom">
                    {{ $registrations->appends(\Illuminate\Support\Facades\Input::except('page'))->links() }}
                </div>
                </div>
            <a href="{{route('admin_add_registration')}}">
            <button type="submit" class="btn btn-primary">

                    <i class="fa fa-btn fa-user"></i> Ajouter une inscription

            </button>
            </a>
        </div>
    </div>
@endsection





