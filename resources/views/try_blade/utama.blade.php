@extends('try_blade.index');
@section('content')
    @component('try_blade.alert')
        @slot('title')
            Waspada
        @endslot
        <strong>Warning !!</strong>
    @endcomponent
    <h2>Hello</h2>
@endsection
