@if( \Illuminate\Support\Facades\Auth::check() )
    @include('errors._back_404')
@else
    @include('errors._front_404')
@endif