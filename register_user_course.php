<?php
    include "inc/header.php";

?>


    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="images/blog_1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Register Course</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, fugiat deicata avise id cum, liber regione eu sit.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->


                <div class="card shadow-lg border-0 rounded-lg ">
				<div class="card-header">
					<h3 class="text-center font-weight-light ">Register User</h3>
				</div>
				
                <?php
                    use Admin\Libs\Student;

                if(isset($_POST['register_course']) && isset($_FILES['image']))
                {
                    $student = new Student();

                    $student->setFirstname($_POST['firstname']);
                    $student->setLastname($_POST['lastname']);
                    $student->setPhone($_POST['phone']);
                    $student->setEmail($_POST['email']);
                    $student->setDepartment($_POST['department']);
                    $student->setPhotoImage($_FILES['image']);
                    $student->setPassword($_POST['password']);
                    $student->create();
                    
                }
                ?>

				<div class="card-body">
					<form method="post" id="register" action="" enctype="multipart/form-data">
						<div class="form-group">
							<label class="small mb-1" for="firstname">Firstname :</label>
							<input class="form-control py-2" name="firstname" id="firstname" 
							value="" type="firstname" placeholder="Enter Firstname" />
						</div>
                        <div class="form-group">
							<label class="small mb-1" for="lastname">lastname :</label>
							<input class="form-control py-2" name="lastname" id="lastname" 
							value="" type="lastname" placeholder="Enter Lastname" />
						</div>
						<div class="form-group">
							<label class="small mb-1" for="phone">Phone :</label>
							<input class="form-control py-2" name="phone" id="phone" 
							value="" type="phone" placeholder="Enter phone" />
						</div>
                        <div class="form-group">
							<label class="small mb-1" for="email">Email :</label>
							<input class="form-control py-2" name="email" id="email" 
							value="" type="email" placeholder="Enter Email" />
						</div>
                        <div class="form-group">
							<label class="small mb-1" for="department">Department :</label>
							<input class="form-control py-2" name="department" id="department" 
							value="" type="department" placeholder="Enter department" />
						</div>
                        
                        
                          
						<div class="form-group">
							<label class="small mb-1" for="image">Image :</label>
							<input class="form-control py-2" name="image" id="image" 
							value="" type="file" placeholder="Image" />
						</div>
                        <div class="form-group">
							<label class="small mb-1" for="password">Password :</label>
							<input class="form-control py-2" name="password" id="password" 
							value="" type="password" placeholder="Password" />
						</div>

						
                        <button class="btn btn-primary" type="submit" name="register_course" value="register_course"> Register </button>
						
					</form>
				</div>
			</div>
        </div>
    </div>
</div>

<?php
    include "inc/footer.php";
?>