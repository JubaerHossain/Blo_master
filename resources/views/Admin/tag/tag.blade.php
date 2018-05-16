@extends('Admin.master')
@section('title','Create Tag')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Tag
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Editors</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <br />
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif

                <div class="col-md-12">
                    <form method="post" action="{{action('TagController@store')}}">
                        @csrf
                        <div class="box box-info col-md-6">
                            <div class="box-header">
                                <h3 class="box-title">

                                </h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                            title="Remove">
                                        <i class="fa fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>

                            <div class="box-body col-md-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="tag">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">slug</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="slug" name="slug">
                                </div>
                            </div>


                            <div class="box-body col-md-10">



                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
                <!-- /.box -->

            </div>

            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection