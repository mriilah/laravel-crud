<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Employee;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\cast;

use PhpParser\Node\Expr\Cast as ExprCast;

class CastController extends Controller
{   
    public function create (){
        return view("emp.create");
        
    }
    public function store (Request $request)
    {
        // dd($request->all());
        $validation = $request->validate([
            "nama" =>  'required',
            "umur"=> 'required',
            "bio"=> 'required'
        ]);

        $query = DB::table("cast")->insert([
            "nama" =>  $request["nama"],
            "umur"=> $request["umur"],
            "bio"=> $request["bio"]
        ]);
        return redirect("/cast")->with("success","Data Berhasil di Simpan");
    }
    public function edit (int $id){
        $cast = DB::table('cast')->where('id',$id)->first();
        // dd ($cast);
        return view("emp/edit", compact("cast"));
    }
    public function update(Request $request, int $id)
    {
        $update = DB::table('cast')->where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);
    
        return redirect('cast')->with('status','berhasil update');
    }
    public function destroy ($id){
        $delete = DB::table('cast')->where('id', $id)->delete();
        return redirect('cast')->with('status','berhasil Dihapus');
    }
    /**
     * Summary of show
     * @para $cast_id
   
     */         
    // public function show ($cast){
    //     $cast = DB::table('cast')->where('id',$cast)->first();
    //     // return $cast_id;
    //     // dd($cast);
    //     // $cast->makeHidden('created_at');
    //     // return $cast;
    //     return view("emp/show", compact("cast"));
    // }
     
}
