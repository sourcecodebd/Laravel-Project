@extends('layout.main')


@section('nav_bar')
<a href="{{route('home.Ccreate')}}">Create User</a> |
<a href="{{route('home.Cuserlist')}}">View User List</a> |
<a href="{{route('logout.index')}}">Logout</a>
@endsection
