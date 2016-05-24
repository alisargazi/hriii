@extends('layouts.master')
@section('navbar')
@section('sidebar')
@section('content')

<form action="{{asset('customer/add')}}" method="post" enctype="multipart/form-data">
    <input type="file" name="cPic"/><br>
    <button type="submit">upload</button>
</form>
@endsection