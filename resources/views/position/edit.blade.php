@extends('layouts.master')
@section('content-header')
{{-- <h1> Trial Content-Header</h1> --}}

<h1>
    Position
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Position</li>
  </ol>
@endsection

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Edit Position</h3>
            </div>
        <!-- /.box-header -->
        <form role="form" action="/position/update" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="_method" value="PUT"/>
                        <input type="hidden" name="id" value="{{$data->id}}"/>
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select type="text" class="form-control" name="department_id">
                                <option value="{{$data->department_id}}">
                                    {{$data->department->name}}
                                </option>
                                @foreach ($department as $dept)
                                    @if ($dept->id != $data->department_id)
                                        <option value='{{$dept->id}}'>
                                            {{$dept->name}}
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
