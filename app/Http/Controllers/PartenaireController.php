<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Partenaire;
class PartenaireController extends Controller
{

    /*public function index()
    {
        if(request()->partenaires){
           
            $partenaires=Partenaire::with('SousCategories')->whereHas('SousCategories',function
            ($query){
                  $query->where('titre',request()->partenaires);
                
             })->paginate(6);
              //dd("oh");
            

            }else{
                //$partenaires=Partenaire::with("SousCategories")->paginate(6);

            }

       return view('partenaire.index')->with('partenaires', $partenaires);
    }

    */

    public function __construct()
    {
        $this->middleware('auth:partenaire');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('partenaire');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
