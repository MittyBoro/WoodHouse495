<?php

namespace App\Http\Controllers\Panel;

use Inertia\Inertia;

use App\Models\Panel\User;
use App\Http\Requests\Panel\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::filter($request->all())
            ->orderByStr($request->get('sort'))
            ->customPaginate($request->get('perPage', 20));

        return Inertia::render('Users/Index', [
            'list' => $users,
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Form');
    }
    public function store(UserRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('panel.users.index');
    }

    public function edit(User $user)
    {
        return Inertia::render('Users/Form', [
            'item' => $user,
        ]);
    }
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return back();
    }

    public function verify(User $user)
    {
        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        return back();
    }

    public function destroy(User $user)
    {
        if ($user->id == 1) {
            return back()->withErrors([
                'Невозможно удалить этого пользователя',
            ]);
        }
        if ($user->id == Auth::user()->id) {
            return back()->withErrors(['Невозможно удалить себя']);
        }

        $user->delete();

        return back();
    }
}
