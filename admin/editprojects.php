<?php
session_start();

if (!isset($_SESSION['user_id'])) {
   
    header("Location: index.php"); 
    exit;
}

    include './head.php';
    include './sidebar.php';
    include './header.php';
     ?>





<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Project</h5>

                            <!-- <div class="alert alert-success"></div> -->
                

                       
                            <!-- <div class="alert alert-danger">
                                <ul>
                                  
                                        <li></li>
                                    
                                </ul>
                            </div> -->
                    

                        <form action="" method="POST" enctype="multipart/form-data">
                     
                            <div class="mb-3">
                                <label for="project_title" class="form-label">Project Title</label>
                                <input type="text" class="form-control" id="project_title" name="project_title" required>
                            </div>
                            <div class="mb-3">
                                <label for="project_description" class="form-label">Project Description</label>
                                <input type="text" class="form-control" id="project_description" name="project_description"
                                    required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="anchorTag" class="form-label">Anchor Tag On Project</label>
                                <input type="text" class="form-control" id="anchorTag" name="anchorTag" required>
                            </div>
                         
                            <div class="mb-3">
                                <label for="projectIcon" class="form-label">Project Icon</label><br>
                                <small>(Please Choose .png Format)</small>
                                <input type="file" class="form-control" id="projectIcon" name="projectIcon"
                                    accept="image/*">
                            </div>
                          

                            <button type="submit" class="btn btn-danger">Update Project</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
    include './footer.php';
    ?>