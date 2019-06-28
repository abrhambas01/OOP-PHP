<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
                  // if user isn't logged on..
            // return to landing page
        // else
        // return to dashbaord
             return view('index');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Renegade';
        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
