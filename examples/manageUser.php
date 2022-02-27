



<? php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "smart_gate";


?>


<!DOCTYPE html>

<html lang="en">

<?php $pagename = "Mange User"; include "Header.php";?> 

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Mange Users</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                         First Name
                        </th>
                        <th>
                          Second Name
                        </th>
                        <th class="text-center">
                          Phone
                          </th>
                           <th class="text-center">
                          Email
                          </th>
                           <th class="text-center">
                          State
                          </th>
                           <th class="text-center">

                          </th>
                           <th class="text-center">

                          </th>
                      </tr>
                  <!-- viewing records from database -->      
           <?php 
global $conn;
       $sql = "SELECT * FROM employees";
       $stmt = $$conn->query($sql);
        while ($DataRows=$stmt->fetch()){
            $Id = $DataRows["ID"];
            $FirstName = $DataRows["First_name"];
            $LastName = $DataRows["Second_name"];
            $Phone = $DataRows["Phone_Number"];
            $Password = $DataRows["Password"];
            $State = $DataRows["State"];
         

            ?>
                        <!-- Update employee records function 
               $sql= "UPDATE employees SET ID='$Id', First_name='$FirstName', Second_name='$LastName', Phone_Number='$Phone', Password='$Password', State='$State' WHERE ID='$SearchQueryParameter'";
                        $Execute= $conn->query($sql);
                        
                        if ($Execute){
                        echo '<script>window.open("manageUser.php?id=Record Updated Successfully","_self")</script>';
                        }
-->
                       <!-- Delete employee records function   
     $sql= "DELETE FROM employees WHERE ID='$SearchQueryParameter'";
            $Execute= $conn->query($sql);             
             if ($Execute){
               echo '<script>window.open("manageUser.php?id=Record Deleted Successfully","_self")</script>';
                        }    
                        
-->   
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $Id ?></td>
                        <td><?php echo $FirstName ?></td>
                        <td><?php echo $LastName ?></td>
                        <td class="text-center"><?php echo $Phone ?></td>
                        <td class="text-center"></td>
                          <td class="text-center">
                          <select class="form-control">
                          <option>Admin</option>
                          <option>Security Guard</option></select></td>
                          <td class="text-center"><i class="tim-icons icon-pencil"></i></td>
                          <td class="text-center">
                           <i class="tim-icons icon-simple-remove"></i></td> </tr>


                    </tbody>
                      <?php } ?> <!-- the closing of while loop above (here to print all records) -->
                  </table>
                </div>

                       <div class="form-group">
                          <div class="card-footer">
                              <a href="./addEmployee.html">
                <button  class="btn btn-fill btn-primary">Add Emplyee</button>
                              </a>
              </div>
                       </div>


              </div>
            </div>
          </div>
        </div>
      </div>
         <?php include "footer.php"; ?> 
</html>
