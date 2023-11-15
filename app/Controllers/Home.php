<?php

namespace App\Controllers;

use App\Models\UserModel; // Make sure to import your UserModel

class Home extends BaseController
{
    public function index()
    {
        // Assuming you have a UserModel to interact with the 'users' table
        $userModel = new UserModel();

        // Fetch all users from the database
        $data['users'] = $userModel->findAll();

        // Pass the data to the view
        return view('login', $data);
    }
}
