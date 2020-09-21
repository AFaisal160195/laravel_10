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

<div class="row">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Edit Employee</h3>
            </div>
        <!-- /.box-header -->
        <form role="form" action="/employee/update" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="_method" value="PUT"/>
                        <input type="hidden" name="id" value="{{$data->id}}"/>
                        </div>
                        <div class="form-group">
                            <label>Employee</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}" placeholder="Adsreess">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label>Picture</label>
                            <input type="text" class="form-control" name="picture" value="{{$data->picture}}" placeholder="Picture">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <select type="text" class="form-control" name="position_id">
                                <option value="{{$data->position_id}}">
                                    {{$data->position->name}}
                                </option>
                                @foreach ($position as $posit)
                                    @if ($posit->id != $data->position_id)
                                        <option value='{{$posit->id}}'>
                                            {{$posit->name}}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
        </div>
    </div>

</div>
      <!-- /.row -->
  @endsection
