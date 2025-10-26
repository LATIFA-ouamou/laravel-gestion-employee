<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $emp = Employee::all();
        return view('Home', ['emp' => $emp]);

    }

    
       public function store(Request $request)
    {
        $infos = $request->validate([
            'name' => ['required'],
            'prenom' => ['required'],
            'email' => ['required'],
            'poste' => ['required'],
           
        ]);

        employee::create($infos);
        return redirect()->route('Home');
        
    }

    

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        return view('Detail', ['employee' => $employee]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
         return view('update', ['emp' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
       public function update( Request $request,employee $employee)
    {
           $infos = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
           'email' => ['required'],
             'poste' => ['required'],
        ]);

         $employee->update($infos);
         return redirect()->route('Home');
     }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        return   redirect()->route('Home')->with('success', 'Employé supprimé avec succès !');
    }
}
