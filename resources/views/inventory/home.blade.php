@extends('layouts.master')
@section('content-header')
{{-- <h1> Trial Content-Header</h1> --}}
<h1>
    Inventory
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Inventory</li>
  </ol>
  @endsection
  @section('content')
@if (Auth::user()->role==1)
    <div class="col-md-12">
        <a href="/inventory/create">
            <button type="button" class="btn btn-block btn-primary btn-flat">Tambah Inventory
            </button>
        </a>
    </div>
@endif
    <div class="col-md-8">
        <div class="box">
        <div class="box-header">
        <h3 class="box-title">Table Inventory</h3>
    </div>
    <div class="box-body no-padding">
        <table class="table table-condensed">
            <tr>
                <th style="width: 10px">#</th>
                <th>Nama</th>
                <th>Detail</th>
                <th>Archive</th>
            </tr>
                @foreach ($data as $d)
            <tr>
                <td style="width: 10px">{{$loop->iteration}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->detail}}</td>
                <td>{{$d->archive->name}}</td>
                <td>
                        <a href="/inventory/edit/{{$d->id}}" class="btn btn-success">EDIT</a>

                    @if (Auth::user()->role==1)
                        <a href="/inventory/destroy/{{$d->id}}" class="btn btn-danger">DELETE</a>
                    @endif
                </td>
            </tr>
                @endforeach
        </table>
    </div>
  @endsection
