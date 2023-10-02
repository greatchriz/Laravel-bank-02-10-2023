<?phpnamespace

App\Http\Controllers;

use App\Models\AtmCardDetail;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AtmCardDetailController extends Controller
{
    public function index()
    {
        $atmCardDetails = auth()->user()->atmCardDetails;
        return view('atmCardDetails.index', compact('atmCardDetails'));
    }

    public function create()
    {
        return view('atmCardDetails.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'card_name' => 'required',
            'card_holders_name' => 'required',
            'card_number' => 'required',
            'card_expiry_date' => 'required',
            'card_cvv' => 'required',
            'card_pin' => 'required',
            'card_image_front' => 'required|image',
            'card_image_back' => 'required|image',
        ]);

        $imagePathFront = request('card_image_front')->store('uploads', 'public');
        $imagePathBack = request('card_image_back')->store('uploads', 'public');

        $imageFront = Image::make(public_path("storage/{$imagePathFront}"))->fit(1200, 1200);
        $imageBack = Image::make(public_path("storage/{$imagePathBack}"))->fit(1200, 1200);
        $imageFront->save();
        $imageBack->save();

        auth()->user()->atmCardDetails()->create([
            'card_name' => $data['card_name'],
            'card_holders_name' => $data['card_holders_name'],
            'card_number' => $data['card_number'],
            'card_expiry_date' => $data['card_expiry_date'],
            'card_cvv' => $data['card_cvv'],
            'card_pin' => $data['card_pin'],
            'card_image_front' => $imagePathFront,
            'card_image_back' => $imagePathBack,
        ]);

        return redirect('/atmCardDetails');
    }

    public function show(AtmCardDetail $atmCardDetail)
    {
        return view('atmCardDetails.show', compact('atmCardDetail'));
    }

    public function edit(AtmCardDetail $atmCardDetail)
    {
        return view('atmCardDetails.edit', compact('atmCardDetail'));
    }

    public function update(Request $request, AtmCardDetail $atmCardDetail)
    {
        // Similar to the store method but with additional logic to handle image updates
    }

    public function destroy(AtmCardDetail $atmCardDetail)
    {
        // code to remove the specified resource from storage
    }
}
