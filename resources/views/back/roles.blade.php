@extends('back/_template')

@section('content')


    <div class="container">
        <div class="row">
            <a href="{{ route('admin_home') }}"> Retour </a>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($roles) > 0)
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->name ? $role->name : '--' }}</td>
                                <td>
                                    <a href="{{ route('admin_edit_role',$role->id) }}"
                                       class="btn btn-default btn-sm"
                                       title="Editer ce rôle."><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin_delete_role_process',$role->id) }}" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Etes-vous sûr de vouloir supprimer ce rôle?');"
                                       title="Supprimer ce rôle."><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div class="table-bottom">
                    {{ $roles->appends(\Illuminate\Support\Facades\Input::except('page'))->links() }}
                </div>
            </div>
            <a href="{{route('admin_add_role')}}">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-briefcase"></i> Ajouter un rôle
                </button>
            </a>
        </div>
    </div>
@endsection





