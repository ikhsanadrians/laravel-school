@extends('layouts.master')
@section('content')

<section class="container">
   <div class="section-header">
    <h1>Edit Guru</h1>
   </div>
    <div class="section-body">
        <form action="{{ url('/guru/'.$data->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name</label>
                <input type="text" value="{{$data->name}}" class="form-control" name="name" id="name">
                <label for="adress">Address</label>
                <textarea type="text" name="address" id="address" class="form-control"> {{$data->address}}</textarea>
               <label for="dob">Date Of Birth</label>
               <input type="date" value="{{$data->dob}}" class="form-control" id="dob" name="dob">
               <label for="gender">Gender</label>
               <div class="gender"> 
              
                <input type="radio" name="gender" id="L"
                value="L" 
                {{$data->gender == 'L' ? 'checked' : ''}}
                >
                <label for="L">Laki-Laki</label>
                <input type="radio" name="gender" id="P"  value="L" 
                {{$data->gender == 'P' ? 'checked' : ''}}>
                <label for="P">Perempuan</label>
            </div>
              
               <button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
            </form>
    </div>

</section>





@endsection