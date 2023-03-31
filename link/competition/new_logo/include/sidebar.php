<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="index.php" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/user.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $_SESSION['this_user_username']; ?></span>
                  <span class="text-secondary text-small"><?php echo $_SESSION['email']; ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <?php 
            if ($_SESSION['userType'] != 'admin1') {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="participant_logo.php">
                <span class="menu-title">Participants</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <?php }?>
            <?php 
            if ($_SESSION['userType'] == 'admin1') {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="register.php">
                <span class="menu-title">Admin Registration</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <?php }?>
            <?php 
            if ($_SESSION['userType'] == 'admin1') {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="adminDetails.php">
                <span class="menu-title">Admin Details</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
            <?php }?>
            
            <li class="nav-item">
              <a class="nav-link" href="changePassword.php">
                <span class="menu-title">Change Password</span>
                <i class="mdi mdi-key  menu-icon"></i>
              </a>
            </li>
            
          </ul>
        </nav>