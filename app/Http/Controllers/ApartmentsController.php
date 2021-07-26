<?php

namespace App\Http\Controllers;

use App\Models\Apartments;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function create(){
        return view('formapartments',[
            'current' => null
        ]);
    }
    public function store(Request $request)
    {
        $apartments = new Apartments();
        $apartments->fill($request->all());
        $apartments->save();
        return redirect('admin/list');
    }
    public function list()
    {
        return view('listapartments', ['apartments' => Apartments::all()]);
    }

    public function update(Request $request, $id)
    {
        $apartments = Apartments::find($id);
        return view('formapartments', ['data' => $apartments]);
    }
    public function save(Request $request, $id)
    {
        $apartments = Apartments::find($id);
        $apartments->update($request->all());
        $apartments->save();
        return redirect('admin/list');
    }
    public function delete($id)
    {
        $apartments = Apartments::find($id);
        $apartments->delete();
        return redirect('admin/list');
    }
}
