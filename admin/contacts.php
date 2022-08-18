
<?php 
    use Admin\Libs\Contact;
    include "inc/header.php";
    include "inc/adminnav.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Contacts</h1>
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
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $contact = new Contact();
                                foreach ($contact->find_all() as $c) {
                                    echo "<tr>";
                                    echo "<td>". $c->getFirstname() . "</td>";
                                    echo "<td>". $c->getLastname() . "</td>";
                                    echo "<td>". $c->getEmail() . "</td>";
                                    echo "<td>". $c->getPhone() . "</td>";
                                    echo "<td>". $c->getMessage() . "</td>";                                
                                    echo "<td><a href='delete_contact.php?contactid=". $c->getId() ."'>Delete</a></td>";
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