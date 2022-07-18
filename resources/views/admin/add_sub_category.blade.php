
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
                        <h1>Add Sub Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Sub Category</li>
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
                        <h3 class="card-title">Add Sub Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{url('admin/sub_category')}}" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="document.getElementById('submit').disabled=true;">
                        @csrf
                        <div class="card-body">
                        @isset($type)
                        @if($type == 'show')
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Select Category</label>
                                <div class="col-sm-10">
                                    <select name="category" id="select" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach($records as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        @endisset
                        @isset($type)
                        @if($type == 'withid')
                            <input type="hidden" value="{{$id}}" name="category">
                        @endif
                        @endisset
                            
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name[]"  class="form-control" placeholder="Category Name" required/>
                                </div>
                            </div>

                           

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                   
                                    <textarea type="text"  name="description[]" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" value="null" name="image[]" class="btn btn-primary col start" required>
                                </div>
                            </div>

                            <div id="newRow"></div>

                        </div>

                        <div class="card-footer">
                            <button id="addSubRow" type="button" class="btn btn-info">Add More</button>
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
   <script>
    var val = <?php echo json_encode($records) ?>;
    var type = <?php echo json_encode($type) ?>;
    

    
   </script>
       
  
  @endsection