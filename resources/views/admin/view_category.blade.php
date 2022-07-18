
@extends('admin.index')
@section('title')
Admin || Dashboard
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(Session::has('success'))
      <div class="alert alert-success mx-4">
        {{session()->get('success')}}
      </div>
    @endif
    @if(Session::has('error'))
      <div class="alert alert-danger mx-4">
        {{session()->get('error')}}
      </div>
    @endif
    <!-- Main content -->
          <div class="card mx-3">
              <div class="card-header">
                <h3 class="card-title">Show All Category</h3>
                <a href="{{url('add_category' )}}" class="btn btn-primary" style="float: right; "> <i class="fa fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <!-- <th>Id</th> -->
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>image</th>                   
                    <th>Action</th>         
                  </tr>
                  </thead>
                  <tbody> 
                    @foreach($records as $cate)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td><a href="{{url('admin/sub_category/'.$cate->id)}}">{{$cate->name}}</a></td>
                        <td>{{$cate->description}}</td>
                        <td><img src="{{asset('admin/files/'.$cate->image)}}" alt="image not found" height="70px" width="50px"></td>
                        
                        <td><a onclick="return confirm('Are you sure? you want to delete category?')" href="{{url('delete/'.Crypt::encryptstring($cate->id))}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>&nbsp;
                       <a href="{{url('edit/'.Crypt::encryptstring($cate->id))}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a></td>

                    </tr>

                    @endforeach
                  </tbody>              
                </table>
              </div>
              <!-- /.card-body -->
            </div>  
    <!-- /.content -->
  </div>
 
  
  @endsection