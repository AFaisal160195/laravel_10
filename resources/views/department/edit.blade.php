@extends('layouts.master')
@section('content-header')
{{-- <h1> Trial Content-Header</h1> --}}

<h1>
    Karyawan
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Karyawan</li>
  </ol>
@endsection

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Edit Department</h3>
            </div>
        <!-- /.box-header -->
        <form role="form" action="/department/update" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="_method" value="PUT"/>
                        <input type="hidden" name="id" value="{{$data->id}}"/>
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Nama">
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
