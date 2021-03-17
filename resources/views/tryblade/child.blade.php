@extends('tryblade.layout')

@section('title', 'Page Title')

@section('sidebar')

    @parent
    <p>This is appended to the master sidebar.</p>

    @endsection

    @section('content')
        <p>This is my body content</p>

        @component('tryblade.alert')
        @slot('title')
            Forbiden
        @endslot
            <strong>Whoopsss!</strong>
        @endcomponent
    @endsection
