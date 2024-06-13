<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polygon;


class PolygonController extends Controller
{
    public function __construct()
    {
        $this->polygon = new Polygon();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $polygons = $this->polygon->polygons();

        foreach ($polygons as $p) {
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
        $filename = time().'_point.'.$image->getClientOriginalExtension();
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

         // create polygons
        if(!$this->polygon->create($data)) {
            return redirect()->back()->with('error', 'Failed to create polygon');
        }

        //redirect to map
        return redirect()->back()->with('success', 'Polygon created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $polygons = $this->polygon->polygon($id);

        foreach ($polygons as $p) {
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
        $polygon = $this->polygon->find($id);

        $data = [
            'title' => 'Edit Polyline',
            'polygon' => $polygon,
            'id' => $id,
        ];

        return view('edit-polygon', $data);
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
            $filename = time().'_polygon.'.$image->getClientOriginalExtension();
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

         // create polygon
        if(!$this->polygon->find($id)->update($data)) {
            return redirect()->back()->with('error', 'Failed to update polygon');
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
       $image = $this->polygon->find($id)->image;

       //detele point
       if (!$this->polygon->destroy($id)) {
           return redirect()->back()->with('error', 'Failed to delete Polygon');
       }

        //detele point
        if ($image != null) {
            unLink('storage/images/'. $image);
        }

       //redirect to map
       return redirect()->back()->with('success', 'Polygon delete success');

    }

    public function table() {
        $polygons = $this->polygon->polygons();

        $data = [
            'title' => 'Table Polygon',
            'polygons' => $polygons
        ];

        return view('table-polygon', $data);
    }
}
