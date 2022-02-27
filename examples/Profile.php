
<!DOCTYPE html>
<html lang="en">
<?php $pagename = "Profile"; include "Header.php";?> 

         <style>
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #e14eca;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  right: 500px;
  bottom: 284px;
  border: 0.3px solid #2D3551;
  background-color: #25273B; 
  opacity: 1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>   
            
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>ID(disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="000001">
                      </div>
                    </div>
                   

                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Company" value="Ali">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Ali">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" value="+96612346789">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" disabled="" value="ABC@gmail.com">
                      </div>
                    </div>
                   
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" disabled="" >
                      </div>
                    </div>
                  </div>
                 <button type="submit" class="btn btn-fill btn-primary">Save</button>
                <button  type="button" class="btn btn-fill btn-primary" onclick="openForm()" >Change Password</button>
                </form>
              </div>
                
                <div class="form-popup" id="myForm">
              <form action="/action_page.php"  class="card-body" >
                <h5 class="title">Change Password</h5>

                <label for="password"><b>New Password</b></label>
                <input type="password" placeholder="Enter new Password" name="password" class="form-control" required>

                <label for="psw"><b>Confirm Password</b></label>
                <input type="password" placeholder="Re-enter new Password" name="psw" class="form-control" required>
<br>
                <button type="submit" class="btn btn-fill btn-primary">Save</button>
                <button type="button" class="btn btn-fill btn-primary" onclick="closeForm()">Cancel</button>
              </form>
            </div>
                
               
              
                <script>
                function openForm() {
                  document.getElementById("myForm").style.display = "inline";
                }

                function closeForm() {
                  document.getElementById("myForm").style.display = "none";
                }
                </script>
               
                
          </div>    
            </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="../assets/img/anime3.png" alt="...">
                      <h5 class="title">Ali Ali</h5>
                    </a>
                    <p class="description">
Admin                    </p>
                  </div>
                
              </div>
             
            </div>
          </div>
        </div>
      </div>
  
    <?php include "footer.php"; ?> 
</html>