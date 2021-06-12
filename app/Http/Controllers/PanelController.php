<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Panel;
use App\Models\User;

class PanelController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index()
    {
        $paneles = Panel::all();
        return view('Panel.index')->with('paneles',$paneles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $paneles = new Panel();

        if($request->hasFile('featured')){
            
            $file = $request->file('featured');
            $destinationPath = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
            $paneles->featured = $destinationPath . $filename;
 
         }

        $paneles->referencia = $request->get('referencia');
        $paneles->h1 = $request->get('h1');
        $paneles->h2 = $request->get('h2');
        $paneles->descripcion = $request->get('descripcion');

        $paneles->save();

        return redirect('/paneles');
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


    public function edit($id)
    {
        $panel = Panel::find($id);
        return view('panel.edit')->with('panel',$panel);
    }

    
    public function update(Request $request, $id)
    {
        $paneles = Panel::find($id);

        $panel->referencia = $request->get('referencia');
        $panel->h1 = $request->get('h1');
        $panel->h2 = $request->get('h2');
        $panel->descripcion = $request->get('descripcion');

        /**if($request->hasFile('featured')){
            $file = $request->file('featured');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '-' . $extension;
            $file->move('images/featureds', $filename);
            $panel->image = $filename;  
         //   $destinationPath = 'images/featureds/';
         //   $filename = time() . '-' . $file->getClientOriginalName();
         //   $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
         //   $paneles->featured = $destinationPath . $filename;
        
         }
        */

        
        $panel->save();

        return redirect('/paneles')->with('panel,$panel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $panel = Panel::find($id);
        $panel->delete();
        return redirect('/paneles');
    }
}