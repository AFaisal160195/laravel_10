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
                <h3 class="box-title">Input Employee</h3>
            </div>
            <!-- /.box-header -->
            <form role="form" action="/employee/store" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="_method" value="POST"/>
                    </div>
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                        <label>Address</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Address">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                            <select class="form-control" name="position_id">
                                @foreach ($position as $posit)
                                    <option value="{{$posit->id}}">
                                        {{$posit->name}}
                                    </option>
                                @endforeach
                            </select>
                    </div>
                    <div>
                        <label>Picture</label>
                        <input type="text" class="form-control" name="picture" placeholder="Picture">
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
  @endsection


