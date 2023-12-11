<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class GroupController extends Controller
{
    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:groups',
        ]);

        $group = Group::create([
            'name' => $request->input('name'),
        ]);

        $group->users()->attach(Auth::user());

        return redirect()->route('groups/join')->with('success', 'Group created successfully!');
    }

    public function joinForm()
    {
        $groups = DB::select('SELECT * FROM groups');
        return view('groups.show', compact('groups'));
    }

    public function join(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|unique:groups',
        ]);

        $group = DB::select('SELECT id FROM groups where name=$request'); // Assumes a user belongs to one group for simplicity

        Wishlist::create([
            'user_id' => $user->id,
            'group_id' => $group,
        ]);

        return redirect()->route($group)->with('success', 'Item added to wishlist successfully!');
    }
}
