<!DOCTYPE html>
<html lang="en">

<?php $pagename = "Change Mode"; include "Header.php";?> 

      <!-- End Navbar -->
      <div class="content">
      <div class="row">
      <div class="card card-tasks">
             <div class="card-header">
                <h4 class="card-title">Change Mode</h4>
              </div>
              <div class="card-body ">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                        <label>Health state</label>
                         <td class="text-center">
                          <select class="form-control">
                          <option>Immunized</option>
                          <option>Not Immunized</option></select></td>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Entry time</label>
                        <input type="datetime-local" class="form-control">
                      </div>
                      </div>
                  </div>
                 <button type="button" class="btn btn-fill btn-primary">Cancel</button>
                <button  type="submit" class="btn btn-fill btn-primary" >Save Mode</button>
            <br>
                    <br>
                
                <button  type="button" class="btn btn-fill btn-primary" onclick="openForm()" > Add one more car</button>
                </form>
              </div>
                <!--                                          -->
                 <div class="form-popup" id="myForm">
              <form action="/action_page.php"  class="card-body" >
                <h5 class="title">Visitor information</h5>
                
                   <label>Health state</label>
                          <select class="form-control">
                          <option>Immunized</option>
                          <option>Not Immunized</option></select>


                <label for="time"><b>Entry time</b></label>
                <input type="datetime-local" name="time" class="form-control" required>
<br>
                 <button type="button" class="btn btn-fill btn-primary" onclick="closeForm()">Cancel</button>
                  <button type="submit" class="btn btn-fill btn-primary">Save</button>
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
                <!--                                                  -->
            </div>
          </div>
              </div>
        <style>
        .form-popup {
  display: none;
  position: fixed;
  right: 15px;
  border: 0.5px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

        
        
    </style>
          
          <?php include "footer.php"; ?> 


</html>