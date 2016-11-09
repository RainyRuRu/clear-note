@extends('layouts.master')

@section('title', 'Clear Note')

@section('script')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
@endsection

@section('main')
<input id="email" type="text" name="email">
    <button onclick="test()">go</button>

    <script>
        function test()
        {
            $.ajax({
                url: '/register',
                type: 'POST',
                data: {
                    email: $('#email').val()
                },
                error: function(xhr) {
                    alert('Ajax request 發生錯誤');
                },
                success: function(response) {
                    alert(response);

                }
            });
        }

    </script>
@endsection