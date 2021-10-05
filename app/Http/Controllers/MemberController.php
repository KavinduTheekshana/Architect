<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => ['string', 'required'],
            'title' => ['string', 'required'],
            'order' => ['string'],
        ]);
        $member = new Member();
        $member->name = $request['name'];
        $member->title = $request['title'];
        $member->order = $request['order'];


        if ($request->hasFile('image')) {
            $image = $request->file('image') ;
            $destinationPath = 'uploads/members/'; // upload path
            $cover_image = 'uploads/members/' . date('YmdHis') . "_" . $this->generateRandomString(10) . "_" . $image->getClientOriginalName() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $cover_image);
            $member->image = "$cover_image";
        }else {
            $member->cover_image = 'uploads/members/default.png';
        } 


        $member->save();
        return redirect()->back()->with('status', 'Member Added Sucessfully.');
    }


    function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    public function disable($id)
    {
        $task = Member::where('id', $id)->first();
        $task->status = false;
        $task->save();
        return redirect()->back()->with('status', 'Member Disabled Sucessfully.');
    }
    public function enable($id)
    {
        $task = Member::where('id', $id)->first();
        $task->status = true;
        $task->save();
        return redirect()->back()->with('status', 'Member Enabled Sucessfully.');
    }
    public function delete($id)
    {
        Member::where('id', $id)->delete();
        return redirect()->route('members')->with('delete', 'Member Delete Sucessfully.');
    }

    public function view($id)
    {
        $member = Member::where('id', $id)->first();
        return view('view-members', ['member' => $member]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
