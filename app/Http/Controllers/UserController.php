<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = User::query()->with('roles');

            if ($request->query->has('search')) {
                $query = $query->where('name', 'like', '%' . $request->query->get('search') . '%')->orWhere('email', 'like', '%' . $request->query->get('search') . '%');
            }

            $users = $query->paginate(5);

            return view('users.index', compact('users'));
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
