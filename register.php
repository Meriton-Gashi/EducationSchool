<?php
    include 'inc/header.php';


	use Admin\Libs\User;

if(isset($_POST['create_user']) && isset($_FILES['image']))
 {
	$user = new User();

	$user->setFirstname($_POST['firstname']);
	$user->setLastname($_POST['lastname']);
	$user->setPhone($_POST['phone']);
	$user->setEmail($_POST['email']);
	$user->setPassword($_POST['password']);
	$user->setPhotoImage($_FILES['image']);
	$user->create();
	header("Location: login.php");
 }
?>






<main class="container">
	<div class="row justify-content-center mb-2">
    <div class="col-lg-9">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<div class="card-header">
					<h3 class="text-center font-weight-light my-2">Register User</h3>
				</div>
				
				<div class="card-body">
					<form method="post" id="register" action="" enctype="multipart/form-data">
						<div class="form-group">
							<label class="small mb-1" for="firstname">Firstname :</label>
							<input class="form-control py-3" name="firstname" id="firstname" 
							value="" type="firstname" placeholder="Enter Firstname" />
						</div>
                        <div class="form-group">
							<label class="small mb-1" for="lastname">lastname :</label>
							<input class="form-control py-3" name="lastname" id="lastname" 
							value="" type="lastname" placeholder="Enter Lastname" />
						</div>
						
                        <div class="form-group">
							<label class="small mb-1" for="email">Email :</label>
							<input class="form-control py-3" name="email" id="email" 
							value="" type="email" placeholder="Enter Email" />
						</div>
						<div class="form-group">
							<label class="small mb-1" for="password">Password :</label>
							<input class="form-control py-3" name="password" id="password" 
							value="" type="password" placeholder="password  Password" />
						</div>
						<div class="form-group">
							<label class="small mb-1" for="image">image :</label>
							<input class="form-control py-3" name="image" id="image" 
							value="" type="file" placeholder="Image" />
						</div>

						
                        <button class="btn btn-primary" type="submit" name="create_user" value="create_user"> Register </button>
						
					</form>
				</div>
				<div class="card-footer text-center">
					<div class="small">
						<a href="login.php">
							Have an account? Go to login</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>

<?php
    include 'inc/footer.php';
?>