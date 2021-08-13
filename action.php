<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['userName'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $religion = $_POST['religion'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        if (empty($username)) {
            $userNameErr = "User name cannot be empty!";
            $flag = true;
        }
        if (empty($password)) {
            $passwordErr = "password cannot be empty!";
            $flag = true;
        }
        if (empty($fname)) {
            $fnameErr = "first name cannot be empty!";
            $flag = true;
        }
        if (empty($lname)) {
            $lnameErr = "last name cannot be empty!";
            $flag = true;
        }
        if (empty($gender)) {
            $genderErr = "gender cannot be empty!";
            $flag = true;
        }
        if (empty($dob)) {
            $dobErr = "date of birth cannot be empty!";
            $flag = true;
        }
        if (empty($religion)) {
            $religionErr = "religion cannot be empty!";
            $flag = true;
        }
        if (empty($phone)) {
            $phoneErr = "phone cannot be empty!";
            $flag = true;
        }
        if (empty($email)) {
            $emailErr = "email cannot be empty!";
            $flag = true;
        }

        if (!$flag) {
            if (strlen($username) > 10) {
                $userNameErr = "Username cannot be more than 10 characters!";
                $flag = true;
            }
            if (strlen($password) > 8) {
                $passwordErr = "password cannot be more than 8 characters!";
                $flag = true;
            }
            if (!$flag) {
                $username = test_input($userName);
                $password = test_input($password);
                $fname = test_input($fname);
                $lname = test_input($lname);
                $gender = test_input($gender);
                $dob = test_input($dob);
                $religion = test_input($religion);
                $phone = test_input($phone);
                $email = test_input($email);


                // $data = array("username" => $userName, "password" => $password, "position" => $position);
                // $data_encode = json_encode($data);
                $result1 = register($userName,  $position, $fname, $lname, $gender, $dob, $religion, $phone, $email); //write($data_encode);
                if ($result1) {
                    $successMessage = "Signup Successfully.";
                } else {
                    $errorMessage = "Error while signing up!";
                }
            }
        }
    }
?>