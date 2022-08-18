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
                $course = new Course();
                if (isset($_GET['courseid'])) {
                    $course = $course->find_id(($_GET['courseid']));
                }
                if (isset($_POST['update_course'])) {
                    $course->setTitle($_POST['title']);
                    $course->setContent($_POST['content']);
                    $course->setAuthor($_POST['author']);
                    if(!empty($_FILES['image']['name'])){
                        $course->setPhoto($_FILES['image']);
                    }
                    if($course->update()){
                        $session->message("Course modified succesfully");
                        header("Location: courses.php"); 
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Modified Course</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="title">First Name :</label>
                                    <input class="form-control py-4" name="title" id="title" type="text" 
                                    placeholder="Enter title" value="<?php if(!empty($course->getTitle())){ echo $course->getTitle();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="content">Content :</label>
                                    <input class="form-control py-4" name="content" id="content" type="text" 
                                    placeholder="Enter content" value="<?php if(!empty($course->getContent())){ echo $course->getContent();} ?>" />
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
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="image">Profile Photo:</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="image">Choose Profile Photo</label>
                                    </div>
                                </div>
                                
                                <input class="btn btn-primary" id="login" value="Update Course" type="submit" name="update_course" />
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>