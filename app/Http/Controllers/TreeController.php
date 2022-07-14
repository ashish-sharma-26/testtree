<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\Lang;


class TreeController extends Controller
{
    //
    public function index()
    {
        $treeView = Entry::with(['subcategories'])->get();


                // echo "<pre>";
                // print_r($treedata);
                // die;

        return view("tree",compact('treeView'));

    }
}
