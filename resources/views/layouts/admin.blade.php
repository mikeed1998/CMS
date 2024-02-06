@extends('layouts.app')

@section('main')
    @include('layouts._partials.header')
    @include('layouts._partials.sidebar')
    @yield('content')
    @include('layouts._partials.footer')
@endsection