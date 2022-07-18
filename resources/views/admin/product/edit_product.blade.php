
@extends('admin.index')
@section('title')
Admin || Dashboard
@endsection
@section('content')

<div class="content-wrapper" onload="demo()">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
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
                        <h3 class="card-title">Edit Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{url('edit_product')}}" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="document.getElementById('submit').disabled=true;">
                        @csrf
                        <div class="card-body">
                           <input type="hidden" name="id" id="addmore" value="{{$id}}">
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{$product->product_name}}" class="form-control" placeholder="Product Name" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Product Details</label>
                                <div class="col-sm-10">
                                   
                                <textarea name="details" id="" placeholder="Product Details" class="form-control" required>{{$product->detail}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Product Price</label>
                                <div class="col-sm-4">
                                   
                                <input type="number" name="price" value="{{$product->price}}" class="form-control" placeholder="Price" required/>
                                </div>
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Discount</label>
                                <div class="col-sm-4">
                                   
                                <input type="text" name="discount" value="{{$product->discount}} "class="form-control" placeholder="Discount" required/>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-4">
                                   
                                <input type="text" name="status" value="{{$product->status}}  "  class="form-control"  required/>
                               
                                </div>
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Priority</label>
                                <div class="col-sm-4">
                                   
                                <select name="priority" id="" class="form-control">
                                    <option value="{{$product->priority}}">{{$product->priority}}</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row my-4">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-4">
                                
                                <select name="category" id="category" class="form-control"  >
                                @foreach($category as $cate)
                                    @if($product->category_id == $cate->id)
                                    
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endif
                                @endforeach
                                @foreach($category as $categories)
                                    @if($product->category_id == $categories->id)
                                    @else
                                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                                    @endif
                                @endforeach
                                </select>
                                </div>
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Sub Category</label>
                                <div class="col-sm-4">
                                   
                                <select name="sub_category" id="sub_category" class="form-control">
                                   <option value="{{$product->sub_category_id}}">{{$product->sub_name}}</option>
                                   
                                </select>
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" value="null" name="image" class="btn btn-primary col start" required>
                                </div>
                            </div> -->


                        </div>

                        <div class="card-footer">
                        <!-- <button type="submit" class="btn btn-info float-left" onclick="setValue()">Submit & Add more</button> -->
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
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script>
   
    $(document).ready(function(){
        
        $('#category').on('change',function(){
            // 
            var category_id = document.getElementById('category').value;
            // alert(category_id);
            $.ajax({
                type : 'post',
                url : '../category_id', 
                data : {
                    '_token' : '{{csrf_token()}}',
                    'category_id' : category_id
                },
                success : function(response){
                    console.log(response)
                    var html = '';
                    var i = 0;
                    if(response.status === 'success'){
                        html += '<option value="">Select Sub Category </option>';
                        for(i=0; i< response.sub_category.length; i++){
                            
                            // console.log(response.sub_category.length);
                            html += '<option value="'+response.sub_category[i].id+'">'+response.sub_category[i].sub_name+'</option> ';
                           
                        }
                        $("#sub_category").html(html);
                       
                    }else{
                        console.log('hii');
                    }

                }
        });
        });
       

    });

</script>

  @endsection