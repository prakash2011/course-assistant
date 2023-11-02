<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmodalLabel">Sign up for Course Assistant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <style>
input[type=password], select {
  width: 80%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text], select {
  width: 80%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
div{
  box-sizing: border-box;
  
}



</style>
      <form action="index.php" method="post" style="border:1px solid #ccc">
  <div class="container">
  
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="Email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="Password" required><br>

    

    <label for="psw-repeat"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm  Password" name="ConfirmPassword" required><br>
    <label for="phoneno"><b>Phone Number</b></label><br>
    <input type="password" placeholder="Enter Phone Number" name="PhoneNumber" required><br>
    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"> By creating this account you agree to our Term&conditions </label>
                    </div><br>
    
            
    <div class="clearfix">
    <button type="submit" class="btn btn-success">Submit</button>
      
      
      </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                </div>
    </div>
  </div>
</form>
     
    </div>
  </div>
</div>