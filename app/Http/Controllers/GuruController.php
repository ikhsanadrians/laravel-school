<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\mengajar;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guru::all();
        return view('guru.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $mapels = Mapel::all();
        $kelas = Kelas::all();
   
        return view('guru.create',compact('mapels','kelas'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
            $name = $request->name;
            $dob = $request->dob;
            $address = $request->address;
            $kelas = $request->kelas;
            $gender = $request->gender;
            $mapel = $request->mapel;

            $insertedguru = Guru::create([
                'name'  => $name,
                'dob' => $dob,
                'address' => $address,
             ]);

        
            $insertedMengajarData = [];

            for($i = 0; $i<count($mapel); $i++){
                array_push($insertedMengajarData,[
                    'kelas_id' => $kelas[$i],
                    'guru_id' => $insertedguru->id,
                    'mapel_id' => $mapel[$i],
                ]);
            } 

            $insertedMengajar = mengajar::insert($insertedMengajarData);

    
            
             return redirect('/guru');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Guru::find($id);

       return view('guru.edit',compact('data'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $guru = Guru::find($id);
      $guru->update($request->all());
      return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::find($id)->delete();

        return redirect()->back();
        //
    }


    public function show($id){
        $guru = Guru::findOrFail($id);
        return view('guru.detail',compact('guru'));
    }
}
