@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="container mt-3">

        <p>Admin</p>

        This is profile

        <div class="mt-3">
            {{ $id }}
            {{ $dob }}
        </div>

    </div>



@endsection
