<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('pages.members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $member = new Member();
        $member->code = $request->code;
        $member->name = $request->name;
        $member->gender = $request->gender;
        $member->address = $request->address;
        $member->birthday = $request->birthday;
        $member->phone = $request->phone;
        $member->email = $request->email;
        $member->password = $request->password;
        $member->image = $request->image;
        $member->save();
        return redirect()->route('members.index')->with('success', 'Member created successfully');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('members.edit', compact('member'));
    }

    public function show($id)
    {
        $member = Member::find($id);
        return view('members.show', compact('member'));
    }

    public function delete($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully');
    }
}
