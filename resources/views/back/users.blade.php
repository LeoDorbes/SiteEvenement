@extends('back/_template')

@section('content')


    <div class="container">
        <div class="row">
            <a href="{{ route('admin_home') }}"> Retour </a>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Login</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->login ? $user->login : '--' }}</td>
                                <td>{{ $user->email ? $user->email : '--' }}</td>

                            </tr>
                        @endforeach
                    @else
                    @endif
                    </tbody>
                </table>
                <div class="table-bottom">
                    {{ $users->appends(\Illuminate\Support\Facades\Input::except('page'))->links() }}
                </div>
            </div>
            {{--            <a href="{{route('admin_add_user')}}">
                        <button type="submit" class="btn btn-primary">

                                <i class="fa fa-btn fa-user"></i> Ajouter un administrateur

                        </button>
                        </a>--}}
        </div>
    </div>
@endsection





