
@extends('Admin.master')
@section('title','Post List')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Post list
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="{!! url('/create_category') !!}"><button type="submit" class="btn btn-success">Add New Category</button></a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Category Name</th>
                                    <th>Slug Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{$loop->index}}</td>
                                    <td>{{$data->CatName}}</td>
                                    <td>{{$data->slug}}</td>
                                    <td><a href="{!! url('/Crete_post') !!}"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>

                                </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>
@endsection