@extends('layouts.main_layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Contacts Project</h3>
            <hr>


<div class="container mt-4">

  <div class="card">
    <div class="card-header text-center font-weight-bold">
       <h3>Show Contact</h3>
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
       
          <text disabled type="text" id="name" name="name" class="form-control">{{$contact->name}}</text>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Contact Number</label>
            
          <text disabled type="number" id="contact" name="contact"class="form-control">{{$contact->contact}}</text>
        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
        
           <text disabled type="email" id="email" name="email" class="form-control">{{$contact->email}}</text>

        </div>
        <br>
        
     
               <a href="../edit_contact/{{$contact->id}}" class="btn btn-warning btn far fa-edit" title="Editar Cargo">Edit</a>
              <a href="../delete_contact/{{$contact->id}}" class="btn btn-danger btn far fa-edit" title="Editar Cargo">Delete</a>
             <a href="javascript:history.back()" class="btn btn-primary"> Back</a>
      </form>
    </div>
  </div>
</div>  
</div>






@endsection