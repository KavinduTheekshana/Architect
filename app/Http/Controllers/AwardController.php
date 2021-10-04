<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\AwardImage;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Environment\Console;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('add-awards');
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
            'title' => ['string', 'required'],
            'order' => ['integer'],
            'description' => ['string', 'required'],
            'image' => ['required']
        ]);
        $award = new Award();
        $award->title = $request['title'];
        $award->slug = $this->slug($request['title']);
        $award->order = $request['order'];
        $award->description = $request['description'];
        $award->save();

        $award2 = Award::find($award->id);


        $award_image = new AwardImage();


        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {

                $destinationPath = 'uploads/awards/'; // upload path
                $product_image = 'uploads/awards/' . date('YmdHis') . "_" . $this->generateRandomString(10) . "_" . $image->getClientOriginalName() . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $product_image);

                $image = new AwardImage([
                    'url' => $product_image,
                ]);
                $award2->award_images()->save($image);
            }
        }


        return redirect()->back()->with('status', 'New Award Added Sucessfully.');
    }


    public function slug($string)
    {
        $string = strtolower($string);
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        $string = preg_replace("/[\s-]+/", " ", $string);
        $string = preg_replace("/[\s_]/", "-", $string);
        $code = $this->generateRandomString(10);
        $combination = $string . '-' . (string)$code;
        return $combination;
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
        $task = Award::find($id);
        $task->status = false;
        $task->save();
        return redirect()->back()->with('status', 'Award Disabled Sucessfully.');
    }
    public function enable($id)
    {
        $task = Award::find($id);
        $task->status = true;
        $task->save();
        return redirect()->back()->with('status', 'Award Enabled Sucessfully.');
    }
    public function delete($id)
    {
        Award::where('id', $id)->delete();
        return redirect()->back()->with('delete', 'Award Delete Sucessfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Award $award)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
        //
    }
}
