@extends('layouts.master')
@section('content')
<section class="container">
    <div class="section-header">
    <h1>Detail Guru</h1>
    </div>
    <table class="table table-bordered">
       <tr>
        <td>Nama</td>
        <td>{{$guru->name}}</td>
       </tr>
       <tr>
        <td>Tanggal Lahir</td>
        <td>{{$guru->dob}}</td>   
    </tr>
    <tr>
        <td>Alamat</td>
        <td>{{$guru->alamat}}</td>   
    </tr>
       <tr>
        <td>Mengajar</td>
        <td> 
            <ul>
                @foreach ($guru->mengajar as $mengajar )
                <li>Mengajar Kelas {{$mengajar->kelas->name}} Dalam Mata Pelajaran {{$mengajar->mapel->name}}</li>
                @endforeach
                
            </ul>

        </td>
       </tr>

    </table>
</section>
@endsection