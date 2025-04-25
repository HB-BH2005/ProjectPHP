<?php
<<<<<<< HEAD

=======
<?php
>>>>>>> 8a71cd4 (Added courses functionality and updated styles)
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function create()
    {
        return view('admin.add_user');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.users.create')
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User added successfully.');
    }
}
<<<<<<< HEAD
=======

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query('query'); // Handle search queries
        if ($query) {
            $users = User::where('name', 'LIKE', "%$query%")
                ->orWhere('email', 'LIKE', "%$query%")
                ->get();
        } else {
            $users = User::all(); // Fetch all users if no query is provided
        }

        return view('admin.users', compact('users'));
    }
}
?>
>>>>>>> 8a71cd4 (Added courses functionality and updated styles)
=======
?>
>>>>>>> 1518b61 (courses fixed)
