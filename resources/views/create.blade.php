@extends('layouts.main_layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Contacts Project</h3>
            <hr>


<div class="container mt-4">
 <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12" >
                        @if($errors->any())
                      <div class="alert alert-danger">
                
    {!! implode('', $errors->all('<div>:message</div>')) !!}
 </div>
 @endif
                  </div>
            </div>
  <div class="card">
    <div class="card-header text-center font-weight-bold">
       <h3>Create Contact</h3>
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('new_contact_store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Contact Number</label>
             <input type="number" id="contact" name="contact" class="form-control" required="">
        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
             <input type="email" id="email" name="email" class="form-control" required="">
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary">Submit</button>
             <a href="javascript:history.back()" class="btn btn-primary"> Back</a>
      </form>
    </div>
  </div>
</div>  
</div>






@endsection