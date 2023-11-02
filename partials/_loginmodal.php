

<!-- Modal -->

<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login
    modalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
<form action="partials/_dbconnect.php" method="post">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email </label><br>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp"
                            placeholder="Enter email" name="Email">
                        <small id="Email" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label><br>
                        <input type="password" class="form-control" id="Password" placeholder="Password" name="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label><br><br>

                    </div>
                    <button type="submit" class="btn btn-success">Submit</button><br> 
                    <label class="form-check-label my-2" for="exampleCheck1"> Forget password?</label><br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                </div>
            </form>
          
        </div>
    </div>
</div>