<?php

use Admin\Libs\Student;

    include "inc/header.php";
    include "inc/adminnav.php" 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Students</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Student</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                $student = new Student();
                if (isset($_GET['studentid'])) {
                    $student = $student->find_id(($_GET['studentid']));
                }
                if (isset($_POST['delete_student'])) {
                    if($student->delete()){
                        $session->message("Student deleted succesfully");
                        header("Location: students.php");
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Delete Student</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">First Name :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" 
                                    placeholder="Enter first name" value="<?php if(!empty($student->getFirstname())){ echo $student->getFirstname();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Last Name :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" 
                                    placeholder="Enter last name" value="<?php if(!empty($student->getLastname())){ echo $student->getLastname();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="phone">Phone Number :</label>
                                    <input class="form-control py-4" name="phone" id="phone" type="text" 
                                    placeholder="Enter phone number" value="<?php if(!empty($student->getPhone())){ echo $student->getPhone();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email Address :</label>
                                    <input class="form-control py-4" name="email" id="email" type="text" 
                                    placeholder="Enter email address" value="<?php if(!empty($student->getEmail())){ echo $student->getEmail();} ?>"  />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="department">Email Department :</label>
                                    <input class="form-control py-4" name="department" id="department" type="text" 
                                    placeholder="Enter department" value="<?php if(!empty($student->getDepartment())){ echo $student->getDepartment();} ?>"  />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Password :</label>
                                    <input class="form-control py-4" name="password" id="password" type="password" 
                                    placeholder="Enter email password" value="<?php if(!empty($student->getPassword())){ echo $student->getPassword();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Profile Photo :</label>
                                    <img class="photoimg" src="uploads/<?php if(!empty($student->getPhoto()))
                                    { echo $student->getPhoto();} ?>" />
                                </div>
                                <input class="btn btn-primary" id="login" value="Delete Student" type="submit" name="delete_student" />
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>