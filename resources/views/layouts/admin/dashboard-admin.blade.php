@extends('layouts/admin/master-admin')

@section('content')
    <h1>Selamat datang</h1>
    <button class="btn btn-success">Success</button>
    <ul>
        @foreach ($admin as $admin)
            <li>
                {{$admin->password}}
            </li>
        @endforeach
    </ul>
@endsection