
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
            <h1 class="m-0">Sub Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Sub Category</li>
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
                <h3 class="card-title">Sub Category</h3>
                    @isset($type)
                      @if($type == 'show')
                      <a href="{{url('add_sub_category' )}}" class="btn btn-primary" style="float: right; "> <i class="fa fa-plus"></i></a>
                      @else
                      <a href="{{url('add_sub_category/'.$id )}}" class="btn btn-primary" style="float: right; "> <i class="fa fa-plus"></i></a>
                      @endif
                    @endisset
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Sub Category Name</th>
                    @isset($type)
                      @if($type == 'show')
                        <th>Category Name</th>
                      @endif
                    @endisset
                    <th>Description</th>
                    <th>image</th>                   
                    <th colspan="2">Action</th>                   
                                  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($sub_cate as $subcategory)
                  <tr>
                    <td>{{$loop->index}}</td>
                    <td>{{$subcategory->sub_name}}</td>
                    @isset($type)
                      @if($type == 'show')
                        <td>{{$subcategory->name}}</td>
                      @endif
                    @endisset
                    <td>{{$subcategory->sub_description}}</td>
                    <td><img src="{{asset('admin/files/subcategory/'.$subcategory->sub_image)}}" alt="image not found" height="70px" width="50px"></td>
                    <td><a onclick="return confirm('Are you sure? you want to delete sub category?')" href="{{url('delete_sub/'.Crypt::encryptstring($subcategory->id))}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                    <td>
                    <a href="{{url('edit_sub/'.Crypt::encryptstring($subcategory->id))}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a></td>
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