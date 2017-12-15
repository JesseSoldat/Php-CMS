<?php 
  if(true) {
    if(isset($_POST['username']) && isset($_POST['password'])) {

    } else {

    }
  }

  ?>

  <div class="col-md-4"> 
    <div class="well"> 
      <h4>Blog Search</h4> 
      <form action="search.php" method="post"> 
        <div class="input-group">
          <input name="search" type="text"
            class="form-control"
          > 
          <span class="input-group-btn"> 
            <button name="submit" 
              class="btn btn-default"
              type="submit"
            >
              <span class="glyphicon glyphicon-search"> 
              </span>
            </button>
          </span> 
        </div>
      </form>
    </div>
  

 
    <div class="well">
      <?php if(isset($_SESSION['user_role'])) { ?> 
          <h4>Logged in as <?php echo $_SESSION['username']; ?> 
          </h4>

          <a href="includes/logout.php" 
            class="btn btn-primary"> Logout 
          </a>
      <?php } else { ?> 
        
          <h4>Login</h4>
          <form method="post"> 
            <div class="form-group">
              <input name="username" type="text"
                class="form-control" placeholder="Enter Username"
              > 
            </div> 

            <div class="input-group"> 
              <input name="password" 
                type="password"
                class="form-control"
                placeholder="Enter Password"
              > 
              <span class="input-group-btn"> 
                <button class="btn btn-primary"
                  name="login" type="submit"
                > 
                  Submit 
                </button>
              </span> 
            </div> 
            
            <div class="form-group">
              <a href="forgot.php?forgot=<?php echo true; ?>">
                Forgot Password
              </a>
            </div>

          </form>

      <?php } ?> 
    </div> 

  </div>