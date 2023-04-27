<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptController extends Controller
{
    public function index()
    {
        return DB::table('recept as r')->join('kategoria as k', 'r.kat_id', 'k.id')->select('r.*', 'k.nev as k.nev')->get();
    }
    public function show($id)
    {
        return DB::table('recept as r')->join('kategoria as k', 'r.kat_id', 'k.id')->where('r.id', $id)->select('r.*', 'k.nev as k.nev')->get();
    }
    public function destroy($id)
    {
        Recept::find($id)->delete();
    }
    public function store(Request $request)
    {
        $recept = new Recept();
        $recept->kat_id = $request->kat_id;
        $recept->nev = $request->nev;
        $recept->leiras = $request->leiras;
        $recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recept->save();
    }
    public function update(Request $request, $id)
    {
        $recept = Recept::find($id);
        $recept->kat_id = $request->kat_id;
        $recept->nev = $request->nev;
        $recept->leiras = $request->leiras;
        $recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recept->save();
    }
    public function filterByCategory($category)
    {
        return Recept::all()->where('kat_id', $category);
    }
}
