@if(\Auth::check())
    @include('errors._back_500')
@else
    @include('errors._front_500')
@endif