<?php namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Constructor method
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['edit', 'update']]);
    }

    /**
     * Show User Registration Form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Register User
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function user(Request $request)
    {
        User::create([
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'password'  => bcrypt($request->get('password'))
        ]);

        return redirect('login')
            ->with('flash_notification.message', 'User registered successfully')
            ->with('flash_notification.level', 'success');
    }

    /**
     * Show User Profile
     *
     * @param User $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('users.profile', compact('user'));
    }

    /**
     * Update User Profile
     *
     * @param User $user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'confirmed'
        ]);

        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
        if($request->get('password') !== ''){
            $user->password = $request->get('password');
        }
        $user->save();

        return redirect('/todo')
            ->with('flash_notification.message', 'Profile updated successfully')
            ->with('flash_notification.level', 'success');
    }
    public function profile()
    {
        // Get the current user from the Laravel session
        $user = auth()->user();

        // Get the user information from the database
        $user = User::find($user->id);

        // Loop through the user information and place it in the appropriate fields on the profile page
        return view('profile', compact('user'));
    }

}