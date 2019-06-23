<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }


    public function register()
    {
        $name =   $_POST['name'];    
        $user =   $_POST['user'];      

    }

    public function store()
    {

        App::get('database')->insert('users', [
            'full_name' => $_POST['name']
        ]);

        return redirect('users');
    }


}
