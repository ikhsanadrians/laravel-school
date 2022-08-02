@extends('layouts.master')
@section('content')

<section class="container">
   <div class="section-header">
    <h1>Create Guru</h1>
   </div>
    <div class="section-body">
        <form action="{{ url('/guru')}}" method="POST" >
            @csrf
            <label for="name">Name</label>
                <input type="text"  class="form-control" name="name" id="name">
                <label for="adress">Address</label>
                <textarea type="text" name="address" id="address" class="form-control"></textarea>
               <label for="dob">Date Of Birth</label>
               <input type="date" class="form-control" id="dob" name="dob">
               <label for="gender">Gender</label>
               <div class="gender"> 
              
                <input type="radio" name="gender" id="L">
                <label for="L">Laki-Laki</label>
                <input type="radio" name="gender" id="P">
                <label for="P">Perempuan</label>
            </div>

            {{-- <div class="mapel">
                <label for="pilihmapel"></label>
                <p>Pilih Mata Pelajaran</p>
                @foreach ($mapels as $mapel )
                <div>
                    <input type="checkbox" name="mapel[]" id="{{mapel}}" >
                    <label for="">{{$mapel->name}}</label>
                </div>
                @endforeach
            </div> --}}
            <div class="mt-5" id="mengajar-form">
             <div class="row">
                <div class="col-6">
                    <label for="kelas">Kelas</label>
                    <select class="form-control" name="kelas[]" id="kelas">
                        @foreach ($kelas as $per_kelas)
                        <option value="{{$per_kelas->id}}">{{ $per_kelas->name}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="mapel">Mapel</label>
                    <select class="form-control" name="mapel[]" id="mapel">
                        @foreach ($mapels as $per_mapel)
                        <option value="{{$per_mapel->id}}">{{ $per_mapel->name}}</option>    
                        @endforeach
                    </select>
                    
                </div>
             </div>
            </div>
            <div class="button mb-3">
                <button type="button" class="btn btn-secondary btn sm float-end mt-3 mx-3" id="tambah-kelas">Tambah Kelas</button>
                <button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
            </div>
            
            </form>
        
    </div>

</section>





@endsection
@push('scripts')
 <script>
    let form = document.querySelector('form')
    let button = document.getElementById('tambah-kelas')
    let mengajarform = document.getElementById('mengajar-form')
    
button.addEventListener('click', ()=>{
let clone = mengajarform.cloneNode(true)
mengajarform.after(clone);


});


    </script>    

@endpush