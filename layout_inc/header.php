<div class="header">
    <div class="grid w600">
        <div class="row headerrow">
            <div class="c12 nav">
                <ul>
                    <?php if(isUserLoggedIn()) { ?>
                        <a href="reading_list.php"><li>Reading List</li></a>
                        <a href="account.php"><li>Account</li></a>
                        <a href="logout.php"><li>Log Out</li></a>
                    <?php } else { ?>
                        <a href="register.php"><li class="signup">Sign Up</li></a>
                        <a href="login.php"><li>Login</li></a>
                    <?php } ?>
                </ul>
                <div class="cf"></div>
            </div>
            <div class="cf"></div>
        </div>
    </div>
</div>