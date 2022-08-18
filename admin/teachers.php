
<?php

use Admin\Libs\Teacher;
include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Users Data</div>
                <div class="card-body">
                <h5 class="bg-info pl-3">
					<?php
						if(!empty($session->message)){
							echo $session->message;
						}
					?>
				</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Department</th>
                                    <th>Photo</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Department</th>
                                    <th>Photo</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $teacher = new Teacher();
                                foreach ($teacher->find_all() as $t) {
                                    echo "<tr>";
                                    echo "<td>". $t->getFirstname() . "</td>";
                                    echo "<td>". $t->getLastname() . "</td>";
                                    echo "<td>". $t->getDepartment() . "</td>";
                                    echo "<td><img style='width:100px;height:100px' src='uploads/{$t->getPhoto()}'></td>";
                                    echo "<td><a href='edit_teacher.php?teacherid=". $t->getId() ."'>Edit</td>";
                                    echo "<td><a href='delete_teacher.php?teacherid=". $t->getId() ."'>Delete</a></td>";
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