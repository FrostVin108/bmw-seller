<?php

namespace App\Http\Controllers;
use App\Models\buyer;
use App\Models\car;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BuyerController extends Controller
{
    public function index()
    {
        $buyer = buyer::with("car")->get(); 
        
        // dd($buyer);
        foreach ($buyer as $buy) {
            $buy->car = car::where('id', $buy->car_id)->first();
        }

        return view('buyer_list', compact('buyer'));
    }

    public function create()
    {
        return view('buyer_create');  
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'buyer_name'     => 'required',
            'plat_number'     => 'required',
            'car_id'     => 'required',
        ]);
        
        buyer::create([
            'buyer_name'     => $request->buyer_name,
            'plat_number'     => $request->plat_number,
            'car_id'     => $request->car_id,
        ]);
        
        return redirect()->route('buyer.list');
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $buyer = buyer::findOrFail($id);

        //delete post
        $buyer->delete();

        //redirect to index
        return redirect()->route('buyer.list')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function edit(string $id): View
    {
        //get post by ID
        $buyer = buyer::findOrFail($id);

        $car= car::where('id', $buyer->car_id )->firstOrFail();

        $car = car::get(); 
        // dd($car);
        //render view with post
        return view('buyer_edit', compact('buyer', 'car'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'buyer_name'     => 'required',
            'plat_number'     => 'required',
            'car_id'   => 'required',
        ]);

        //get post by ID
        $buyer = buyer::findOrFail($id);

        $buyer->update([
            'buyer_name'     => $request->buyer_name,
            'plat_number,'   => $request->plat_number,
            'car_id'   => $request->car_id,
        ]);
        
        // dd($buyer);
         //redirect to index
         return redirect()->route('buyer.list')->with(['success' => 'Data Berhasil Diubah!']);
        }

}
