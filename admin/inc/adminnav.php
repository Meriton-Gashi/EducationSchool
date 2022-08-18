<div id="layoutSidenav">
<div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link mt-3" href="index.php">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
            </a>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" 
            data-target="#userNav" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Users
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="userNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="add_user.php">Add User</a>
                    <a class="nav-link" href="users.php">View Users</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#catNav" 
                aria-expanded="false" aria-controls="catNav">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    News        
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="catNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="add_category.php">Add News</a>
                    <a class="nav-link" href="categories.php">View News</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postNav" 
                aria-expanded="false" aria-controls="postNav">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Course        
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="postNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="add_course.php">Add Course</a>
                    <a class="nav-link" href="courses.php">View Courses</a>
                    
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#courseNav" 
                aria-expanded="false" aria-controls="courseNav">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts        
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="courseNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="add_post.php">Add Post</a>
                    <a class="nav-link" href="posts.php">View Posts</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#teacherNav" 
                aria-expanded="false" aria-controls="teacherNav">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Tachers        
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="teacherNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                
                <nav class="sb-sidenav-menu-nested nav">
                    
                    <a class="nav-link" href="add_teacher.php">Add Teacher</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                    
                    <a class="nav-link" href="teachers.php">View Teacher</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-toggle="collapse" 
            data-target="#studentNav" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Students
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="studentNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="students.php">View students</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contactNav" 
                aria-expanded="false" aria-controls="contactNav">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Contacts        
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="contactNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    
                    <a class="nav-link" href="contacts.php">View Contacts</a>
                </nav>
            </div>


            
   
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html"
                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts</a>
            <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables</a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>
</div>