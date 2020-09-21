@extends('layouts.master')
@section('content-header')
{{-- <h1> Trial Content-Header</h1> --}}
<h1>
    Employee
    <small>Control panel</small>
</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Employee</li>
  </ol>
@endsection
@section('content')
<div class="col-md-12">
    <a href="/employee/create">
        <button type="button" class="btn btn-block btn-primary btn-flat">Tambah Employee
        </button>
    </a>
</div>
<div class="col-md-8">
    <div class="box">
    <div class="box-header">
    <h3 class="box-title">Table Employee</h3>
</div>
                  <!-- /.box-header -->
<div class="box-body no-padding">
    <table class="table table-condensed">
        <tr>
            <th style="width: 10px">#</th>
            <th>Employee Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Picture</th>
            <th>Position</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td style="width: 10px">{{$loop->iteration}}</td>
            <td>
                <a href="/employee/show/{{$d->id}}">{{$d->name}}</a>
            </td>
            <td>{{$d->alamat}}</td>
            <td>{{$d->phone}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->picture}}</td>
            <td>{{$d->position->name}}</td>
            <td>
                <a href="/employee/edit/{{$d->id}}" class="btn btn-success">EDIT</a>
            </td>
            <td>
                <a href="/employee/destroy/{{$d->id}}" class="btn btn-danger">DELETE</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
  @endsection
