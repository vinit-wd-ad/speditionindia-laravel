<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AssociatedMember;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('sort_order', 'asc')->get();
        return view('our-team', compact('teams'));
    }

    public function associatedMembers()
    {
        $associatedMembers = AssociatedMember::where('status', 1)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('associated-members', compact('associatedMembers'));
    }
}
