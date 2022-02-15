<div class="sidebar sidebar-style-2" id="sidebar">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo $_SESSION['user_name'] ?>
                            <span class="user-level"><?php echo $_SESSION['user_type'] ?></span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <?php
                            if ($_SESSION['user_type'] == 'super admin') {
                                echo "<li>
										<a href=\"list-users.php\">
											<span class=\"sub-item\">List Users</span>
										</a>
									</li>";
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <!-- <span class="caret"></span> -->
                    </a>
                </li>
                
                <li class="mx-4 mt-2">
                    <a href="logout.php" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i
                                    class="fas fa-sign-out-alt"></i> </span>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
