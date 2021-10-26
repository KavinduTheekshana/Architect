<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Project;
use App\Models\Publication;
use App\Models\PublicationImage;
use Illuminate\Http\Request;

class PublicationController extends Controller
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


    public function publication($slug)
    {
    $awards = Award::where('status',1)->orderBy('order', 'ASC')->get();
    $publications = Publication::where('status',1)->orderBy('order', 'ASC')->get();
    $projects = Project::where('status',1)->orderBy('order', 'ASC')->get();
    $single_publication = Publication::where('slug', $slug)->first();
    return view('publication', ['awards' => $awards,'publications' => $publications, 'projects' => $projects,'single_publication'=>$single_publication]);
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
        $publication = new Publication();
        $publication->title = $request['title'];
        $publication->slug = $this->slug($request['title']);
        $publication->place = $request['place'];
        $publication->order = $request['order'];
        $publication->description = $request['description'];
        $publication->save();

        $publication2 = Publication::find($publication->id);





        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {

                $destinationPath = 'uploads/publications/'; // upload path
                $product_image = 'uploads/publications/' . date('YmdHis') . "_" . $this->generateRandomString(10) . "_" . $image->getClientOriginalName() . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $product_image);

                $image = new PublicationImage([
                    'url' => $product_image,
                ]);
                $publication2->publications_images()->save($image);
            }
        }


        return redirect()->back()->with('status', 'New Publication Added Sucessfully.');
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'id' => ['required'],
            'title' => ['string', 'required'],
            'slug' => ['string', 'required'],
            'order' => ['integer'],
            'description' => ['string', 'required']
        ]);
        $publication = new Publication();
        $publication->title = $request['title'];
        $publication->slug = $request['slug'];
        $publication->order = $request['order'];
        $publication->description = $request['description'];
        $data = array(
            'title' => $publication->title,
            'slug' => $publication->slug,
            'order' => $publication->order,
            'description' => $publication->description,
        );
        Publication::where('id', $request['id'])->update($data);

        $slug = $request['slug'];
        return redirect()->route('publications/view-publications',$slug)->with('update', 'Publication Update Sucessfully.');
    }


    public function disable($slug)
    {
        $task = Publication::where('slug',$slug)->first();
        $task->status = false;
        $task->save();
        return redirect()->back()->with('status', 'Publication Disabled Sucessfully.');
    }
    public function enable($slug)
    {
        $task = Publication::where('slug',$slug)->first();
        $task->status = true;
        $task->save();
        return redirect()->back()->with('status', 'Publication Enabled Sucessfully.');
    }
    public function delete($slug)
    {
        Publication::where('slug', $slug)->delete();
        return redirect()->route('publications-list')->with('delete', 'Publication Delete Sucessfully.');
    }

    public function view($slug)
    {
        $publication = Publication::where('slug', $slug)->first();
        return view('view-publications',['publication'=>$publication]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(publication $publication)
    {
        //
    }
}
