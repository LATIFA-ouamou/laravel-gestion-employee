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

    
        //  $post = post::all();
        //  return view('home', ['post' =>$post  ]);
    

    /**
     *  $posts = Post::all();
       

     * Show the form for creating a new resource.
     */
   

    /**'name' ,
            'prenom' ,
            'email'  ,
            'poste' 
     * Store a newly created resource in storage.
     */
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

    //  public function store(Request $request)
    // {
    //      { $validated = $request->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //         'status' => 'required',
    //     'author' => 'required',
    //     ]);
    //     Post::create($validated);
    //     return redirect()->route('home')->with('success', 'Employé ajouté avec succès.');
    // }
    // }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    //    public function update( Request $request,employee $employee)
    // {
    //       $infos = $request->validate([
    //         'prenom' => ['required'],
    //         'email' => ['required'],
    //         'poste' => ['required'],
    //     ]);

    //     $emp->update($infos);
    //     return redirect()->route('Home');
    // }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
    }
}
