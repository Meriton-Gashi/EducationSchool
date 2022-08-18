<?php

use Admin\Libs\Teacher;

include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Teacher</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Teachers</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                if (isset($_POST['add_teacher']) && isset($_FILES['image'])) {
                    $teacher = new Teacher();
                    $teacher->setFirstname($_POST['firstname']);
                    $teacher->setLastname($_POST['lastname']);
                    $teacher->setDepartment($_POST['department']);
                    $teacher->setPhotoImage($_FILES['image']);
                    if($teacher->create()){
                        $session->message("Teacher added succesfully");
                        header("Location: teachers.php");
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Add Teacher</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" id="add_teacher" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">First Name :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" placeholder="Enter first name" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Last Name :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" placeholder="Enter last name" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="department">Email Department :</label>
                                    <input class="form-control py-4" name="department" id="department" type="text" placeholder="Enter department" />
                                </div>
                                
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="image">Profile Photo:</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="image">Choose Profile Photo</label>
                                    </div>
                                </div>

                                <input class="btn btn-primary" id="login" value="Create Teacher" type="submit" name="add_teacher" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>
    <script>
        $().ready(function() {
            $("#add_user").validate({
                rules: {
                    firstname: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    lastname: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    }

                },
                messages: {
                    firstname: {
                        required: "Please provide firstname",
                        minlength: "Emri i juaj duhet te kete se paku tre karaktere",
                        lettersonly: "Emri nuk duhet te kete numra "
                    },
                    lastname: {
                        required: "Please provide lastname",
                        minlength: "Mbiemri i juaj duhet te kete se paku tre karaktere",
                        lettersonly: "Mbiemri nuk duhet te kete numra "
                    }
                }

            });
            jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");
        });
    </script>