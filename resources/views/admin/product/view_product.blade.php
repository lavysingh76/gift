
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
                <a href="{{url('product' )}}" class="btn btn-primary" style="float: right; "> <i class="fa fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Details</th>
                    <th>Priority</th>
                    <th>Category Name</th>
                    <th>Sub Category Name</th>
                    <th>image</th>                   
                    <th>Action</th>         
                  </tr>
                  </thead>
                  <tbody> 
                    @foreach($product as $products)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$products->product_name}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->discount}}</td>
                        <td>{{$products->detail}}</td>
                        <td>{{$products->priority}}</td>
                        <td>{{$products->name}}</td>
                        <td>{{$products->sub_name}}</td>
                        <td><img src="{{asset('admin/files/product/'.$products->product_image)}}" alt="image not found" height="70px" width="50px"></td>
                        <td>
                            <a href="{{url('product_delete/'.Crypt::encryptstring($products->id))}}" class="text-danger"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                            <a href="{{url('product_edit/'.Crypt::encryptstring($products->id))}}" class="text-info"><i class="fa fa-edit"></i></a>
                        </td>
                      

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