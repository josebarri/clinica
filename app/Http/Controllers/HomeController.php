<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\doctor; 
use App\Models\cita; 
use App\Models\producto; 



class HomeController extends Controller
{
    public function redirect()
    {

if (Auth::id()) 
{
    if (Auth::user()->usertype=='0') 
    {
        $doctor = doctor::all(); 
        $producto = producto::all();
       return view('user.home',compact('doctor'), compact('producto'));
    }
    else
     {
        return view('admin.home'); 
    }
}
else 
{
    return redirect()->back();
}
    }

    public function index()
     {
         if(Auth::id())
         {
             return redirect('home');
         }
         else
         {  

         $producto = producto::all();
         $doctor = doctor::all(); 
        return view('user.home', compact('doctor'), compact('producto'));
         }
    }
    public function cita(Request $request)
    {
        $data = new cita;

        $data->nombre=$request->nombre;
        $data->correo=$request->correo;
        $data->date=$request->date;
        $data->telefono=$request->telefono;
        $data->mensaje=$request->mensaje;
        $data->doctor=$request->doctor;
        $data->estado='pendiente';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message','Solicitud de cita con éxito. Nos pondremos en contacto con usted en breve');
    }
    public function micita()
    {
        if(Auth::id())
    {
        $userid=Auth::user()->id;

        $appoint=cita::where('user_id', $userid)->get();
    
        return view('user.mi_cita', compact('appoint'));
    }
    else {
        return redirect()->back();
    }
}
       public function cancelar_cita($id){
           $data=cita::find($id);
           $data->delete();

           return redirect()->back();

       }
}
