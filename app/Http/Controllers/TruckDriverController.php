<?php

namespace App\Http\Controllers;

use App\Models\Truck_driver;

use Illuminate\Http\Request;

class TruckDriverController extends Controller
{
    public function index(){

        $truck_drivers = Truck_driver::orderBy('id', 'desc')->get();
        return view('truck_drivers.listar', compact('truck_drivers'));

    }

    //Create
    public function create(){
        return view('truck_drivers.create');

    }

    public function store(Request $request){
        $truck_driver = new Truck_driver();
        $truck_driver->nombre=$request->nombre;
        $truck_driver->poblacion=$request->poblacion;
        $truck_driver->telefono=$request->telefono;
        $truck_driver->direccion=$request->direccion;
        $truck_driver->salario=$request->salario;
        $truck_driver->save();

        return $truck_driver;
    }

    public function show(Truck_driver $truck_driver){
        return view('truck_drivers.show',compact('truck_driver'));
    }

    public function destroy (Truck_driver $truck_driver){
        $truck_driver->delete();
        return redirect()->route('truck_driver.index');
      }


      public function edit(Truck_driver $truck_driver){

        return view('truck_drivers.edit',compact('truck_driver'));

      }


      public function update(Request $request, Truck_driver $truck_driver){

            $truck_driver->nombre=$request->nombre;
            $truck_driver->poblacion=$request->poblacion;
            $truck_driver->telefono=$request->telefono;
            $truck_driver->direccion=$request->direccion;
            $truck_driver->salario=$request->salario;

            $truck_driver->save();

        return redirect()->route('truck_driver.index');

      }
}
