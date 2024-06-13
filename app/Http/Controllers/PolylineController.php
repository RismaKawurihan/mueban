<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polylines;

class PolylineController extends Controller
{
    public function __construct()
    {
        $this->polyline = new Polylines();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $polylines = $this->polyline->polylines();

        foreach ($polylines as $p) {
            $feature[] = [
                'type' => 'Feature',
                'geometry' => json_decode($p->geom),
                'properties' => [
                    'id' => $p ->id,
                    'name' => $p->name,
                    'description' => $p->description,
                    'image'=>$p->image,
                    'created_at' => $p->created_at,
                    'updated-at' => $p->updated_at
                ]
            ];
        }


        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $feature,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required',
            'geom' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif|max:10000' //10MB
        ],
        [
            'name.required' => 'Name is required',
            'geom.required' => 'Location is required',
            'image.mimes' => 'Image must be a file of type:jpg, jpeg, png, gif',
            'image.max' => 'Image must not exceed 10MB'
        ]);



        // crate folder image
        if (!is_dir('storage/images')) {
            mkdir('storage/images', 0777);
        }

        //upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'_polyline.'.$image->getClientOriginalExtension();
            $image->move('storage/images', $filename);
        } else {
            $filename = null;
        }
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'geom'=> $request->geom,
            'image' => $filename
        ];

         // create polylines
        if(!$this->polyline->create($data)) {
            return redirect()->back()->with('error', 'Failed to create polyline');
        }

        //redirect to map
        return redirect()->back()->with('success', 'Polyline created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $polylines = $this->polyline->polyline($id);

        foreach ($polylines as $p) {
            $feature[] = [
                'type' => 'Feature',
                'geometry' => json_decode($p->geom),
                'properties' => [
                    'id' => $p ->id,
                    'name' => $p->name,
                    'description' => $p->description,
                    'image'=>$p->image,
                    'created_at' => $p->created_at,
                    'updated-at' => $p->updated_at
                ]
            ];
        }


        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $feature,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $polyline = $this->polyline->find($id);

        $data = [
            'title' => 'Edit Polyline',
            'polyline' => $polyline,
            'id' => $id,
        ];

        return view('edit-polyline', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate request
        $request->validate([
            'name' => 'required',
            'geom' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif|max:10000' //10MB
        ],
        [
            'name.required' => 'Name is required',
            'geom.required' => 'Location is required',
            'image.mimes' => 'Image must be a file of type:jpg, jpeg, png, gif',
            'image.max' => 'Image must not exceed 10MB'
        ]);


        // crate folder image
        if (!is_dir('storage/images')) {
            mkdir('storage/images', 0777);
        }

        //upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'_polyline.'.$image->getClientOriginalExtension();
            $image->move('storage/images', $filename);

        //delete image
        $image_old = $request->image_old;
        if ($image_old != null) {
            unlink('storage/images/'. $image_old);
        }


        } else {
            $filename = $request->image_old;
        }
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'geom'=> $request->geom,
            'image' => $filename
        ];

         // create polyline
        if(!$this->polyline->find($id)->update($data)) {
            return redirect()->back()->with('error', 'Failed to update polyline');
        }

        //redirect to map
        return redirect()->back()->with('success', 'Polyline updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       // get image
       $image = $this->polyline->find($id)->image;


       //detele polyline
       if (!$this->polyline->destroy($id)) {
           return redirect()->back()->with('error', 'Failed to delete polyline');
       }

        //detele polyline
        if ($image != null) {
            unLink('storage/images/'. $image);
        }

       //redirect to map
       return redirect()->back()->with('success', 'polyline delete success');

    }

    public function table() {
        $polyline = $this->polyline->polylines();

        $data = [
            'title' => 'Table Polyline',
            'polylines' => $polyline
        ];

        return view('table-polyline', $data);
    }
}
