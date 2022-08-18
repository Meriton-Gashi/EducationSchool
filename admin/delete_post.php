<?php

use Admin\Libs\Post;

include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Posts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Posts</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                $post = new Post();
                if (isset($_GET['postid'])) {
                    $post = $post->find_id(($_GET['postid']));
                }
                if (isset($_POST['delete_post'])) {
                    if($post->delete()){
                        $session->message("Post deleted succesfully");
                        header("Location: posts.php");
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Delete Posts</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="small mb-1" for="title">Title :</label>
                                    <input class="form-control py-4" name="title" id="title" type="text" 
                                    placeholder="Enter Title" value="<?php if(!empty($post->getTitle())){ echo $post->getTitle();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="content">Content :</label>
                                    <input class="form-control py-4" name="content" id="content" type="text" 
                                    placeholder="Enter Content" value="<?php if(!empty($post->getContent())){ echo $post->getContent();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="author">Author :</label>
                                    <input class="form-control py-4" name="author" id="author" type="text" 
                                    placeholder="Enter Author" value="<?php if(!empty($post->getAuthor())){ echo $post->getAuthor();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="photo">Profile Photo :</label>
                                    <img class="photoimg" src="uploads/<?php if(!empty($post->getPhoto()))
                                    { echo $post->getPhoto();} ?>" />
                                </div>
                                <input class="btn btn-primary" id="login" value="Delete Post" type="submit" name="delete_post" />
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>