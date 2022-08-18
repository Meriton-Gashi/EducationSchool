<?php

use Admin\Libs\Teacher;

    include "inc/header.php";
    include "inc/adminnav.php" 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Teacher</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Teacher</li>
            </ol>
            <div class="row justify-content-center">
            <?php
                $teacher = new Teacher();
                if (isset($_GET['teacherid'])) {
                    $teacher = $teacher->find_id(($_GET['teacherid']));
                }
                if (isset($_POST['update_teacher']) && isset($_FILES['image'])) {
                    $teacher->setFirstname($_POST['firstname']);
                    $teacher->setLastname($_POST['lastname']);
                    $teacher->setDepartment($_POST['department']);
                    if(!empty($_FILES['image']['name'])){
                        $teacher->setPhotoImage($_FILES['image']);
                    }
                    if($teacher->update()){
                        $session->message("Teacher modified succesfully");
                        header("Location: teachers.php"); 
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Edit Teacher</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">First Name :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" 
                                    placeholder="Enter first name" value="<?php if(!empty($teacher->getFirstname())){ echo $teacher->getFirstname();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Last Name :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" 
                                    placeholder="Enter last name" value="<?php if(!empty($teacher->getLastname())){ echo $teacher->getLastname();} ?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label class="small mb-1" for="department">Email department :</label>
                                    <input class="form-control py-4" name="department" id="department" type="text" 
                                    placeholder="Enter email department" value="<?php if(!empty($teacher->getDepartment())){ echo $teacher->getDepartment();} ?>"  />
                                </div>
                                
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Profile Photo :</label>
                                    <?php echo "<img class='photoimg' src='uploads/{$teacher->getPhoto()}'>"?>
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
                                <input class="btn btn-primary" id="login" value="Update Teacher" type="submit" name="update_teacher" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>