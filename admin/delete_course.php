<?php

use Admin\Libs\Course;

include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Courses</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Course</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                $course = new Course();
                if (isset($_GET['courseid'])) {
                    $course = $course->find_id(($_GET['courseid']));
                }
                if (isset($_POST['delete_course'])) {
                    if($course->delete()){
                        $session->message("Course deleted succesfully");
                        header("Location: courses.php");
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Delete Courses</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="small mb-1" for="title">Title :</label>
                                    <input class="form-control py-4" name="title" id="title" type="text" 
                                    placeholder="Enter Title" value="<?php if(!empty($course->getTitle())){ echo $course->getTitle();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="content">Content :</label>
                                    <input class="form-control py-4" name="content" id="content" type="text" 
                                    placeholder="Enter Content" value="<?php if(!empty($course->getContent())){ echo $course->getContent();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="author">Author :</label>
                                    <input class="form-control py-4" name="author" id="author" type="text" 
                                    placeholder="Enter Author" value="<?php if(!empty($course->getAuthor())){ echo $course->getAuthor();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="photo">Profile Photo :</label>
                                    <img class="photoimg" src="uploads/<?php if(!empty($course->getPhoto()))
                                    { echo $course->getPhoto();} ?>" />
                                </div>
                                <input class="btn btn-primary" id="login" value="Delete Course" type="submit" name="delete_course" />
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>