@extends('layouts.master')
@section('content')

<section class="container">
   <div class="section-header">
    <h1>Create Mapel</h1>
   </div>
    <div class="section-body">
        <form action="{{ url('/mapel')}}" method="POST">
            @csrf
            <label for="name">Name</label>
                <input type="text"  class="form-control" name="name" id="name">
            
            
            </div>
              
               <button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
            </form>
    </div>

</section>





@endsection