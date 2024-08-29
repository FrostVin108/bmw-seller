<?php

namespace App\Http\Controllers;
use App\Models\car;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CarController extends Controller
{
    public function car_list(): View
    {
        $car = car::get(); 
        
        return view('car_list', compact('car'));
    }

    public function create():view
    {
        return view('car_create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'car_name'     => 'required',
            'car_year'     => 'required|min:4|numeric',
        ]);
        
        car::create([
            'car_name'     => $request->car_name,
            'car_year'     => $request->car_year,
        ]);
        
        return redirect()->route('car.list');
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $car = car::findOrFail($id);

        //delete post
        $car->delete();

        //redirect to index
        return redirect()->route('car.list')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function edit(string $id): View
    {
        //get post by ID
        $car = car::findOrFail($id);

        //render view with post
        return view('car_edit', compact('car'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'car_name'     => 'required',
            'car_year'     => 'required',
        ]);
        
        //get post by ID
        $car = car::findOrFail($id);
        // dd($car);
        
        $car->update([
            'car_name'     => $request->car_name,
            'car_year'   => $request->car_year,
        ]);
        //redirect to index
         return redirect()->route('car.list')->with(['success' => 'Data Berhasil Diubah!']);
        }

}
