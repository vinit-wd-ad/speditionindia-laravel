<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AssociatedMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function associatedMembers()
    {
        $associatedMembers = AssociatedMember::where('status', 1)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('associated-members', compact('associatedMembers'));
    }
}
