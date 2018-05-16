@extends('Admin.master')
@section('title','Crete post')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Update Create
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
                    <div class="box box-info col-md-6">
                        <form role="form" method="post" action="{{ action('PostController@store') }}">
                            @csrf
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
                                    <label for="exampleInputEmail1">Post Title</label>
                                    <input  type="text" value="{{$data->title}}" class="form-control" id="title" placeholder="Enter Title" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Post Sub-title</label>
                                    <input type="text" value="{{$data->subtitle}}" name="subtitle" class="form-control" id="exampleInputPassword1" placeholder="Category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Post slug</label>
                                    <input type="text" value="{{$data->slug}}" class="form-control" id="exampleInputPassword1" placeholder="slug" name="slug">
                                </div>
                            </div>

                            <div class="box-body col-md-10">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea  value="{{$data->body}}" id="editor1" name="body" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                               </textarea>
                            </div>

                            <div class="box-body col-md-10">


                                <div class="form-group">
                                    <label for="image">Input Image</label>
                                    <input value="{{$data->image}}"  type="file" name="image" id="image">

                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /.box -->

            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection