<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class FormController extends Controller
{
    public function signup() {


        $servername = "127.0.0.1";
        $username = "root";
        $password = "password321";
        $dbname = "Dance_db";

   		 // Create connection
    	$conn = mysqli_connect($servername, $username, $password, $dbname);

    	// Check connection
    	if (!$conn) {
       		die("Connection failed: " . mysqli_connect_error();
    	} 

    	$data = $_POST;
    	$name = $data['name'];
    	$age = $data['age'];
    	$phone = $data['phone'];
    	$email = $data['email'];
    	$pass = $pass['password'];

        print_r($data);

        

    	$sql = "INSERT INTO signup (studentName, studentAge, studentPhone, studentEmail, studentPassword)
    	VALUES ('$name', '$age', '$phone', '$email', '$pass')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   

       //$conn->close();

    	//return view('signup')->with($data);
    }

}

