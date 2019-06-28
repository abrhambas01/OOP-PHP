<?php
namespace App\Controllers;
use App\Core\App;
use App\Core\Emailer; 
class UsersController
{
  use Emailer ; 
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
        // using php 7.0
     $full_name = $_POST['full_name'] ?? "NO NAME";
     $email = $_POST['email'] ?? "NO EMAIL";
     $password = $_POST['password'] ?? "NO PASSWORD";

          // if email is filled
     if (isset($email) && isset($full_name)){
      echo "Email is : ".$email ;

    // verify if email is already registered
      $status =   $this->checkIfEmailIsTaken(); 
      if ( $status === true ){
            // return back 
      }
      else { 
            // send an email to that email 
        $status =  $this->sendEmail($email);
            // insert the records date(format)a
        switch ($status) {
          case 1:
          App::get('database')->insert('users', [
            'full_name' => $full_name, 
            'email'     => $email,
            'password'  => $password
          ]);
          break;

          default:
        // code...
          break;
        }
        return redirect('users');
      }
    }
    else {
     echo "You're not allowed to do it" ; 
     return redirect('/')->with('flash');
   }


    // echo $data ; 

 }

 function login()
 {

 }

 public function store()
 {

  App::get('database')->insert('users', [
    'full_name' => $_POST['full_name']
  ]);

  return redirect('users');
}


}
