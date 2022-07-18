
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
                        <h1>Edit Sub Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Sub Category</li>
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
                        <h3 class="card-title">Edit Sub Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{url('admin/update_sub_category')}}" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="document.getElementById('submit').disabled=true;">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <!-- <label for="inputPassword3" class="col-sm-2 col-form-label">Sub Category Name</label> -->
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="{{$sub_category->id}}" class="form-control" placeholder="Category Name" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Select Category</label>
                                <div class="col-sm-10">
                                    <select name="category" class="form-control select2" required>
                                        @foreach($category as $cate)
                                            @if($sub_category->category_id == $cate->id)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                            @endif
                                    
                                        @endforeach
                                    
                                        @foreach($category as $value)
                                        @if($sub_category->category_id == $value->id)
                                        @else 
                                        <option value="{{$value->id}}">{{$value->name}}</option>   
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{$sub_category->sub_name}}" class="form-control" placeholder="Category Name" required/>
                                </div>
                            </div>

                           

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                   
                                    <textarea type="text"  name="description" class="form-control">{{$sub_category->sub_description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" value="null" name="image" class="btn btn-primary col start">
                                </div>
                            </div>

                            <!-- <div id="newRow"></div> -->

                        </div>

                        <div class="card-footer">
                            <!-- <button id="addSubRow" type="button" class="btn btn-info">Add More</button> -->
                            <button type="submit" class="btn btn-info float-right">Submit</button>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
   <!-- <script>
    var val = 
   </script> -->
       
  
  @endsection