<?php
	include 'inc/header.php';
?>
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Course Grid 3<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <?php
            echo "<div class='row'>";

			$course= new \Admin\Libs\Course();
            foreach($course->find_all() as $c){
                echo "<div class='col-lg-4 col-md-6 col-12 mt-4'>";
                    echo "<div class='course-item'>";
						echo "<div class='image-blog'>";
							echo "<img src='admin/images/". $c->getPhoto() . "' alt='post image' />";
						echo "</div>";
						echo "<div class='course-br'>";
							echo "<div class='course-title'>";
								echo "<h2 class='text-dark'>{$c->getTitle()}</h2>";
							echo "</div>";
							echo "<div class='course-desc'>";
								$content=substr($c->getContent(),0);
								echo "<p>{$content}</p>";
							echo "</div>";
							echo "<div class='course-rating'>";
								echo "4.5";
								
								echo "<i class='fa fa-star'></i>";	
								echo "<i class='fa fa-star'></i>";	
								echo "<i class='fa fa-star'></i>";
								echo "<i class='fa fa-star'></i>";
								echo "<i class='fa fa-star-half'></i>";								
							echo "</div>";
							
						echo "</div>";
						
						echo "<div class='course-meta-bot'>";
							echo "<ul>";
								echo "<li><i class='fa fa-calendar' aria-hidden='true'></i> 6 Month</li>";
								echo "<li><i class='fa fa-book' aria-hidden='true'></i> 7 Books</li>";
								echo "<li><i class='fa fa-users' aria-hidden='true'></i> <a href='register_user_course.php'>Register</a></li>";
							echo "</ul>";
						echo "</div>";
					echo "</div>";
                echo "</div>";
			}
			echo "</div>";
			?>
        </div><!-- end container -->
    </div><!-- end section -->

<?php
    include 'inc/footer.php';
?>