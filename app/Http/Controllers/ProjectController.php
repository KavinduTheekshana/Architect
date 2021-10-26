<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Publication;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery($slug)
    {
        $awards = Award::where('status',1)->orderBy('order', 'ASC')->get();
        $publications = Publication::where('status',1)->orderBy('order', 'ASC')->get();
        $projects = Project::where('status',1)->orderBy('order', 'ASC')->get();
        $single_project = Project::where('slug', $slug)->first();
        return view('gallery', ['awards' => $awards, 'projects' => $projects, 'single_project' => $single_project,'publications' => $publications]);
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
        $project = new Project();
        $project->title = $request['title'];
        $project->slug = $this->slug($request['title']);
        $project->order = $request['order'];
        $project->description = $request['description'];
        $project->save();

        $project2 = Project::find($project->id);


        $project_image = new ProjectImage();


        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {

                $destinationPath = 'uploads/projects/'; // upload path
                $product_image = 'uploads/projects/' . date('YmdHis') . "_" . $this->generateRandomString(10) . "_" . $image->getClientOriginalName() . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $product_image);

                $image = new ProjectImage([
                    'url' => $product_image,
                ]);
                $project2->project_images()->save($image);
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

    public function disable($slug)
    {
        $task = Project::where('slug', $slug)->first();
        $task->status = false;
        $task->save();
        return redirect()->back()->with('status', 'Project Disabled Sucessfully.');
    }
    public function enable($slug)
    {
        $task = Project::where('slug', $slug)->first();
        $task->status = true;
        $task->save();
        return redirect()->back()->with('status', 'Project Enabled Sucessfully.');
    }
    public function delete($slug)
    {
        Project::where('slug', $slug)->delete();
        return redirect()->route('projects-list')->with('delete', 'Project Delete Sucessfully.');
        // return view('awards-list')->with('delete', 'Award Delete Sucessfully.');
    }

    public function view($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return view('view-projects', ['project' => $project]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
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
        $project = new Project();
        $project->title = $request['title'];
        $project->slug = $request['slug'];
        $project->order = $request['order'];
        $project->description = $request['description'];
        $data = array(
            'title' => $project->title,
            'slug' => $project->slug,
            'order' => $project->order,
            'description' => $project->description,
        );
        Project::where('id', $request['id'])->update($data);

        $slug = $request['slug'];
        return redirect()->route('projects/view-projects', $slug)->with('update', 'Project Update Sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
