<?php

namespace App\Http\Controllers;

use App\Models\MainEntry;
use Illuminate\Http\Request;

class MainEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allEntries = MainEntry::all();

        return $allEntries;
    }
}
