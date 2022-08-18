<?php
    use Admin\Libs\Contact;
    include "inc/header.php";
    include "inc/adminnav.php" 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Contacts</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                    $contact = new Contact();
                    if (isset($_GET['contactid'])) {
                        $contact = $contact->find_id(($_GET['contactid']));
                    }
                    if (isset($_POST['delete_contact'])) {
                        if($contact->delete()){
                            $session->message("Contact deleted succesfully");
                            header("Location: contacts.php");
                        }
                    }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Delete Contact</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">First Name :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" 
                                    placeholder="Enter first name" value="<?php if(!empty($contact->getFirstname())){ echo $contact->getFirstname();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Last Name :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" 
                                    placeholder="Enter last name" value="<?php if(!empty($contact->getLastname())){ echo $contact->getLastname();} ?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email Address :</label>
                                    <input class="form-control py-4" name="email" id="email" type="text" 
                                    placeholder="Enter email address" value="<?php if(!empty($contact->getEmail())){ echo $contact->getEmail();} ?>"  />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="message">Message :</label>
                                    <input class="form-control py-4" name="message" id="message" type="message" 
                                    placeholder="Enter email password" value="<?php if(!empty($contact->getMessage())){ echo $contact->getMessage();} ?>" />
                                </div>
                                
                                <input class="btn btn-primary" id="login" value="Delete Contact" type="submit" name="delete_contact" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>