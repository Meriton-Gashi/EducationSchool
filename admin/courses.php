<?php 
    use Admin\Libs\Course;
    include "inc/header.php";
    include "inc/adminnav.php"; 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of course</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Photo</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Photo</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $course = new Course();
                                foreach ($course->find_all() as $c) {
                                    echo "<tr>";
                                    echo "<td>". $c->getTitle() . "</td>";
                                    echo "<td>". $c->getContent() . "</td>";
                                    echo "<td>". $c->getAuthor() . "</td>";
                                    echo "<td><img src='images/" . $c->getPhoto() ."' alt=''>  </td>";
                                    echo "<td><a href='edit_course.php?courseid=". $c->getId() ."'>Edit</td>";
                                    echo "<td><a href='delete_course.php?courseid=". $c->getId() ."'>Delete</a></td>";
                                    echo "</tr>";

                                }
                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "inc/footer.php" ?>