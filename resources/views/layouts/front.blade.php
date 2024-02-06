@extends('layouts.app')

@section('main')
    @include('layouts._partials.header')
    @yield('content')
    @include('layouts._partials.footer')
@endsection