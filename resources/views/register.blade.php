@extends('layouts.master')

@section('title', 'Clear Note')

@section('script')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
@endsection

@section('main')
    <form method="post" action="/register/profile">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $user['id'] }}">
        <input type="password" name="password">
        <input type="text" name="name">
        <input type="submit">
    </form>
@endsection