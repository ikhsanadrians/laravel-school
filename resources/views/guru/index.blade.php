@extends('layouts.master')
@section('content')
<section class="container">
    <div class="section-header my-2">
        <h1>Guru
        </h1>
    </div>
    <div class="section-body">
        <a href="{{ url('/guru/create')}}" class="btn btn-primary float-end my-2">Create</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Address</th>
                    <th>Date Of Birth</th>
                    <th>Action</th>
                </tr>
            </thead> 
            @foreach ($data as $guru )
            <tbody>
                <td>{{$guru->id }}</td>
                <td>{{$guru->name}}</td>
                <td>{{$guru->address}}</td>
                <td>{{$guru->dob}}</td>
                <td>
                    <a href="{{ url('/guru/'.$guru->id.'/edit')}}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('/guru/'.$guru->id.'')}}">Details</a>
                    <form action="{{url('/guru/'.$guru->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tbody>

            @endforeach
          
        </table>
    </div>
</section>

@endsection