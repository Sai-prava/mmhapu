use Illuminate\Http\Request;
use App\Models\Visitor;

public function index(Request $request)
{
    $ip = $request->ip();
    $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);
    $visitor->increment('visits');
    $visitor->save();

    $visitors = Visitor::count();

    return view('welcome', compact('visitors'));
}
