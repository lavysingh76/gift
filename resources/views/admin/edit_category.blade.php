
@extends('admin.index')
@section('title')
Admin || Dashboard
@endsection
@section('content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Category</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div id="danger" class="alert alert-danger">
                                {{ session()->get('error')}}
                            </div>
                        @elseif(session()->has('success'))
                            <div id="success" class="alert alert-success">
                                {{ session()->get('success')}}
                            </div>
                        @endif
                        <h3 class="card-title">Edit Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{url('admin/edit_category')}}" class="form-horizontal" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="card-body">
                           
                            <div class="form-group row">
                                <!-- <label for="inputPassword3" class="col-sm-2 col-form-label">Category Name</label> -->
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="{{$category->id}}" class="form-control" placeholder="Category Name" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Category Name" required/>
                                </div>
                            </div>

                           

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                   
                                    <textarea type="text"  name="description"  class="form-control">{{$category->description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file"    name="image" class="btn btn-primary col start" >
                                    <!-- <img src="{{asset('admin/files/'.$category->image)}}" alt="image not found" height="50px"> -->
                                </div>
                            </div>

                            <!-- <div id="newRow"></div> -->

                        </div>

                        <div class="card-footer">
                            <!-- <button id="addRow" type="button" class="btn btn-info">Add More</button> -->
                            <button type="submit" class="btn btn-info float-right">Update</button>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
   
       
  
  @endsection