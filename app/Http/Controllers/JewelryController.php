<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JewelryController extends Controller
{
    /**
     * Display the hero showcase and featured dossier.
     */
    public function showcase()
    {
        return view('showcase');
    }

    /**
     * Display a specific piece's dossier.
     */
    public function piece($slug)
    {
        // Mock data for the demonstration
        return view('showcase', ['slug' => $slug]);
    }

    /**
     * Display high jewelry archive.
     */
    public function collections()
    {
        return view('collections');
    }

    /**
     * Display gemological matrix & standards guide.
     */
    public function gemology()
    {
        return view('gemology');
    }

    /**
     * Display Maison heritage & craftsmanship story.
     */
    public function atelier()
    {
        return view('atelier');
    }

    /**
     * Display About Us page.
     */
    public function about()
    {
        return view('about');
    }
}
