@extends('layouts/admin/master-admin')

@section('content')
    <h1>Selamat datang</h1>
    <ul>
        @foreach ($admin as $admin)
            <li>
                {{$admin->password}}
            </li>
        @endforeach
    </ul>
@endsection