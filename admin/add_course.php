<?php

use Admin\Libs\Course;

include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Course</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Course</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                if (isset($_POST['add_course']) && isset($_FILES['photo'])) {
                    $course = new Course();
                    $course->setTitle($_POST['title']);
                    $course->setContent($_POST['content']);
                    $course->setAuthor($_POST['author']);
                    $course->setPhoto($_FILES['photo']);
                    if($course->create()){
                        $session->message("Course added succesfully");
                        header("Location: courses.php");
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Add Course</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" id="add_course" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="title"> Title :</label>
                                    <input class="form-control py-4" name="title" id="title" type="text" placeholder="Enter Title" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="content">Content :</label>
                                    <input class="form-control py-4" name="content" id="content" type="text" placeholder="Enter Content" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="author">Author :</label>
                                    <input class="form-control py-4" name="author" id="author" type="text" placeholder="Enter Author" />
                                </div>
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="photo">Profile Photo:</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="photo" name="photo" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="photo">Choose Profile Photo</label>
                                    </div>
                                </div>

                                <input class="btn btn-primary" id="login" value="Create User" type="submit" name="add_course" />
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