<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Accessory;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class Accessories extends Controller
{
    public function index(Request $request)
    {


        $types = Type::all();
        $query = Accessory::query();
        if (isset($request->title) && ($request->title != null)) {
            $query->where('name', 'like',  '%' . $request->title . '%');
        }
        return $data = Accessory::where('name', 'like', '%' . $request->input('title') . '%')->get();

        if (isset($request->type) && ($request->type != null)) {
            $query->whereHas('type', function ($q) use ($request) {
                $q->whereIn('id', $request->type);
            });
        }
        if (isset($request->min) && ($request->min != null)) {
            $query->where('price', '>=', $request->min);
        }
        if (isset($request->max) && ($request->max != null)) {
            $query->where('price', '<=', $request->max);
        }
        $accessories = $query->get();
        return view('admins.accessory.index', compact('accessories', 'types'));
    }
    public function updateAccessories(Accessory $accessory, Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required|',
            'use' => 'string|required|',
            'price' => 'required|',
            'image' => 'string|required|',
            'type_id' => 'int|required|'
        ]);
        $accessory->update($data);

        return redirect(route('Accessories'));
    }
    public function editAccessories(Accessory $accessory)
    {
        return view('admins.accessory.editAccessories', ['accessory' => $accessory]);
    }
    public function deleteAccessories(Accessory $accessory)
    {
        $accessory->delete();
        return redirect(route('Accessories'));
    }
    public function userAccessory(Request $request)
    {
        $types = Type::all();

        $query = Accessory::query();
        if (isset($request->title) && ($request->title != null)) {
            $query->where('name', 'like', '%' . $request->title . '%');
        }
        if (isset($request->type) && ($request->type != null)) {
            $query->where('type_id', '=', $request->type);
        }
        if (isset($request->min) && ($request->min != null)) {
            $query->where('price', '>=', $request->min);
        }
        if (isset($request->max) && ($request->max != null)) {
            $query->where('price', '<=', $request->max);
        }
        $accessories = $query->get();
        return view('clients.shop', compact('accessories', 'types'));
    }

    // public function Search(Request $request){

    // }

    public function singleAccessory($id)
    {
        $accessory = Accessory::Join('types', 'accessories.type_id', '=', 'types.id')
            ->select('accessories.*', 'types.name as name_type')
            ->where('accessories.id', '=', $id)
            ->get();
        $accessory = $accessory[0];
        $accessories = Accessory::all();
        return view('clients.detail_product', compact('accessory', 'accessories'));
    }
}