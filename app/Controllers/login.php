<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        // Load the database model
        $userModel = new UserModel();

        // Get all user data from the model
        $data['users'] = $userModel->findAll();

        // Load the view and pass the data to it
        return view('login_view', $data);
    }

    public function saveUser()
    {
        // Get the input data from the form

        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');


        // Validate the data if needed

        // Load the database model
        $userModel = new UserModel();

        // Insert data into the database
        $userModel->insert([

            'name' => $name,
            'password' => $password,
        ]);

        // Redirect to the login page or show a success message
        return redirect()->to('/login');
    }
}
