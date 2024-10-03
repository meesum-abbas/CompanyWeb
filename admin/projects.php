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
                <h5 class="card-title d-flex justify-content-between align-items-center">
                            <span>Project List</span>
                            <a href="./addprojects.php" class="badge bg-danger">Add Project</a>
                        </h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap align-middle mb-0">
                            <thead>
                                <tr class="border-2 border-bottom border-primary border-0">
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col" class="text-center">Icon</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                
                                <tr>
                                    <td class="ps-0 fw-medium">
                                        <span class="table-link1 text-truncate d-block"></span>
                                    </td>
                                    <td>
                                        <a href="mailto:" class="link-primary text-dark fw-medium d-block"></a>
                                    </td>
                                    
                                    <td class="text-center fw-medium">
                                        
                                            <img src="" alt="Project Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                                       
                                    </td>
                                    <td class="text-center">
                                        <a href="./editprojects.php" class="badge bg-primary">Edit</a>
                                        <a href="" class="badge bg-danger">Delete</a>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php
    include './footer.php';
    ?>