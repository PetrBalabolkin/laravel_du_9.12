<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProgramController extends Controller
{
    public function index()
    {
        // ->latest()->simplePaginate(5)
        $programs = Program::latest()->simplePaginate(5);
        return ( [
            'programs' => $programs
        ]);
    }
}
