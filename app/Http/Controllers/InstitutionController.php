<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\InstitutionModel;

class InstitutionController extends Controller
{
    public function index()
    {
        return InstitutionModel::all();
    }

    public function create(Request $request)
    {
        $data = new InstitutionModel;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();

        return "Data berhasil ditambah!";
    }

    public function update(Request $request, $id)
    {
        $data = InstitutionModel::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->update();

        return "Data berhasil diubah!";
    }

    public function delete($id)
    {
        $data = InstitutionModel::find($id);
        $data->delete();

        return "Data berhasil dihapus!";
    }
}
