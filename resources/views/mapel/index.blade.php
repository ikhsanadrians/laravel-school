@extends('layouts.master')
@section('content')
<section class="container">
    <div class="section-header my-2">
        <h1>Kelas
        </h1>
    </div>
    <div class="section-body">
        <a href="{{ url('/kelas/create')}}" class="btn btn-primary float-end my-2">Create</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead> 
            @foreach ($data as $mapel )
            <tbody>
                <td>{{$mapel->id }}</td>
                <td>{{$mapel->name}}</td>
                <td>
                    <a href="{{ url('/mapel/'.$mapel->id.'/edit')}}" class="btn btn-warning">Edit</a>
                    <form action="{{url('/mapel/'.$mapel->id)}}" method="post">
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