@extends('layouts.main_layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Contacts</h3>
            <hr>
            <div class="my-2">
                
                
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                        @if(Session::has('success'))
                  <div class="alert alert-success">
                        {{ Session::get('success')}}
                  </div>
                        @elseif( Session::has('warning'))
                        <div class="alert alert-danger">
                                    {{ Session::get('warning')}}
                              </div>
                  @endif 
                  </div>
            </div>

            </div>

            <hr>
            @if($contact->count()===0)
            <p>Dont have a contact's</p>
            @else
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>edit</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach($contact as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->contact}}</td>
                        <td>{{$contact->email}}</td>
                        <td>
                            <div >
                                 <a href="show_contact/{{$contact->id}}" class="btn btn-success btn-sm far fa-edit" title="Editar Cargo">Show</a>
                                <a href="edit_contact/{{$contact->id}}" class="btn btn-warning btn-sm far fa-edit" title="Editar Cargo">Edit</a>
                                <a href="delete_contact/{{$contact->id}}" class="btn btn-danger btn-sm far fa-edit" title="Editar Cargo">Delete</a>
                                
           
                              
                            </div>
        </div>
        </td>
        </tr>
        @endforeach
        </tbody>

        </table>

        <div>
            <p>Number of Contacts: {{$contact->count()}}</p>
        </div>
        @endif
    </div>
</div>
<a href="{{route('new_contact')}}" class="btn btn-primary"> Create Contact</a>
</div>


@endsection