@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="overflow:hidden !important">
  <div class="row">
      <div class="col-sm-8">
         <h1 class="text-center"> Categories</h1>
         @if($errors->all())
         <div class="alert alert-danger">
             <a href="#" class="close" data-dismiss="alert">&times;</a>
             @foreach ($errors->all() as $error)
             <span>{{ $error }}</span><br>
             @endforeach
         </div>
         @endif
         @if(Session::has('error'))
         <div class="alert alert-danger">
             <a href="#" class="close" data-dismiss="alert">&nbsp;</a>
             {{ Session::get('error') }}
         </div>
         @endif
         @if(Session::has('success'))
         <div class="alert alert-success">
             <a href="#" class="close" data-dismiss="alert">&nbsp;</a>
             {{ Session::get('success') }}
         </div>
         @endif
         <table class="table m-0">
            <thead>
            <tr>
              <th>Image</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td><img src="{{ asset($category->CategoryImage) }}" width="30px" height="30px" style="border-radius:50px"></td>
                    <td>{{ $category->CategoryName }}</td>
                    <td><a href="#" class="fa fa-edit btn btn-primary btn-sm"></a>&nbsp;<a href="{{ route('categories.delete',[$category->CategoryName]) }}" class="fa fa-trash-alt btn btn-danger btn-sm"></a>&nbsp;</td>
                  </tr>
                @endforeach
                <tr>
                    <td colspan="2" style="color:red;font-size:20px;font-weight:bold">
                        Total
                    </td>
                    <td class="text-center pull-right">
                        <span class="badge badge-warning"> {{ $categories->count() }} Categories</span>
                    </td>
                </tr>
            </tbody>
          </table>
      </div>
      <div class="col-sm-4">
       <form method="POST" action="{{ route('categories.save') }}" enctype="multipart/form-data">
        @csrf
           <fieldset>
               <legend class="text-center">
                   Add Categories
               </legend>
               <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-tags"></i></span>
                </div>
                <input type="text" class="form-control" name="CategoryName" placeholder="Category Name">
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="CategoryImage">
                <label class="custom-file-label" for="customFile">Category Image</label>
              </div>
              <br><br>
              <button class="btn btn-primary btn-flat" type="submit">Add Category</button>
           </fieldset>
       </form>
    </div>
  </div>
</div>
@stop
