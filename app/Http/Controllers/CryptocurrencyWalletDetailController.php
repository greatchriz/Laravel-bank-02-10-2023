<?php



namespace App\Http\Controllers;

use App\Models\CryptocurrencyWalletDetail;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CryptocurrencyWalletDetailController extends Controller
{
    public function index()
    {
        $cryptocurrencyWalletDetails = auth()->user()->cryptocurrencyWalletDetails;
        return view('cryptocurrencyWalletDetails.index', compact('cryptocurrencyWalletDetails'));
    }

    public function create()
    {
        return view('cryptocurrencyWalletDetails.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'coin_image' => 'required|image',
            'coin_name' => 'required',
            'coin_wallet_address' => 'required',
        ]);

        $imagePath = request('coin_image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->cryptocurrencyWalletDetails()->create([
            'coin_image' => $imagePath,
            'coin_name' => $data['coin_name'],
            'coin_wallet_address' => $data['coin_wallet_address'],
        ]);

        return redirect('/cryptocurrencyWalletDetails');
    }

    public function show(CryptocurrencyWalletDetail $cryptocurrencyWalletDetail)
    {
        return view('cryptocurrencyWalletDetails.show', compact('cryptocurrencyWalletDetail'));
    }

    public function edit(CryptocurrencyWalletDetail $cryptocurrencyWalletDetail)
    {
        return view('cryptocurrencyWalletDetails.edit', compact('cryptocurrencyWalletDetail'));
    }

    public function update(Request $request, CryptocurrencyWalletDetail $cryptocurrencyWalletDetail)
    {
        // Similar to the store method but with additional logic to handle image updates
    }

    public function destroy(CryptocurrencyWalletDetail $cryptocurrencyWalletDetail)
    {
        // code to remove the specified resource from storage
    }
}
