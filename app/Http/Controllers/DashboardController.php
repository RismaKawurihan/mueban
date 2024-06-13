<?php

namespace App\Http\Controllers;

use App\Models\Points;
use App\Models\Polylines;
use App\Models\Polygon;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->points = new Points();
        $this->polylines = new Polylines();
        $this->polygons = new Polygon();

    }

    public function index()
    {
        $data = [
            "title" => "Dashboard",
            "total_points" => $this->points->count(),
            "total_polylines" => $this->polylines->count(),
            "total_polygons" => $this->polygons->count()
        ];

        return view('dashboard', $data);
    }
}
