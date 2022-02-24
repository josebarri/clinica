<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\cita;
use App\Models\producto;
use App\Models\AtenderCita;
use App\Models\historial;

class AdminController extends Controller
{
    public function addview()
    
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request){

        $doctor=new doctor;

        $imagen=$request->file;

        $imagenname=time().'.'.$imagen->getClientoriginalExtension();

        $request->file->move('doctorimagen',$imagenname);

        $doctor->imagen=$imagenname;

        $doctor->nombre=$request->nombre;
        $doctor->telefono=$request->telefono;
        $doctor->consultorio=$request->consultorio;
        $doctor->especialidad=$request->especialidad;
        $doctor->save();

        return redirect()->back()->with('message', 'Veterinario agregado con exito');

    }

    public function mostrar_citas(){

        $data=cita::all();
        return view('admin.mostrar_citas', compact('data'));
    }
    public function atender_cita(){

        $data=cita::all();
        return view('admin.atender_cita', compact('data'));
    }
    public function atende(){

        $data=AtenderCita::all();
        return view('admin.atender', compact('data'));
    }

    public function aceptada($id){
        $data=cita::find($id);
        $data->estado='aceptada';
        $data->save();
        return redirect()->back();

    }
    public function rechazada($id){
        $data=cita::find($id);
        $data->estado='rechazada';
        $data->save();
        return redirect()->back();
}
public function atendida($id){
    $data=cita::find($id);
    $data->estado='atendida';
    $data->save();
    return redirect()->back();
}

public function mostrar_doctor(){

    $data=doctor::all();
    return view('admin.mostrar_doctor', compact('data'));
}
public function mostrar_historial(){

    $data=historial::all();
    return view('admin.mostrar_historial', compact('data'));
}

public function eliminar($id){
    $data=doctor::find($id);
    $data->delete();

    return redirect()->back();

}
public function editar($id){
    $data=doctor::find($id);
    return view('admin.editar_doctor', compact('data'));

}
public function editdoctor(Request $request, $id){
    $doctor=doctor::find($id);

    $doctor->nombre=$request->nombre;
    $doctor->telefono=$request->telefono;
    $doctor->especialidad=$request->especialidad;
    $doctor->consultorio=$request->consultorio;

    $imagen=$request->file;

    if($imagen)
    {
    $imagenname=time().'.'.$imagen->getClientOriginalExtension();
    $request->file->move('doctorimagen', $imagenname);
    $doctor->imagen=$imagenname;}

    $doctor->save();

    return redirect()->back()->with('message', 'Veterinario actualisado con exito');

}
public function addproducto()
    
    {
        return view('admin.add_producto');
    }

    public function agregar(Request $request){

        $producto=new producto;

        $imagen=$request->file;

        $imagenname=time().'.'.$imagen->getClientoriginalExtension();

        $request->file->move('doctorimagen',$imagenname);

        $producto->imagen=$imagenname;

        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->stock=$request->stock;
        $producto->save();

        return redirect()->back()->with('message', 'Producto agregado con exito');

    }
    public function mostrar_producto(){

        $data=producto::all();
        return view('admin.mostrar_producto', compact('data'));
    }
    
    public function eliminarpro($id){
        $data=producto::find($id);
        $data->delete();
    
        return redirect()->back();
    
    }
    public function editarpro($id){
        $data=producto::find($id);
        return view('admin.editar_producto', compact('data'));
    
    }
    public function editproducto(Request $request, $id){
        $producto=producto::find($id);
    
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->stock=$request->stock;
    
        $imagen=$request->file;
    
        if($imagen)
        {
        $imagenname=time().'.'.$imagen->getClientOriginalExtension();
        $request->file->move('doctorimagen', $imagenname);
        $producto->imagen=$imagenname;}
        $producto->save();
    
        return redirect()->back()->with('message', 'Producto actualisado con exito');
    
    }
    public function atender()
    
    {
        return view('admin.atender');
    }

    public function agregarate(Request $request){

        $AtenderCita=new AtenderCita;

        $AtenderCita->nombreveterinario=$request->nombreveterinario;
        $AtenderCita->nombrepaciente=$request->nombrepaciente;
        $AtenderCita->servicio=$request->servicio;
        $AtenderCita->save();

}
}