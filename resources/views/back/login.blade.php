@extends('_header')

@section('content')

    <div class="col-md-4 col-md-offset-4">

        <?= Former::open()->class('form_horizontal')->method('GET') ?>
        <?= Former::text('name')->label(false)->placeholder('Pseudo')->required() ?>
        <?= Former::close() ?>

    </div>
@endsection





