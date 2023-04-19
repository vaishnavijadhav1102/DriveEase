
<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login_signup.css" />
    <link rel="stylesheet" href="commoncss.css"/>
    
    </head>
    
<body>
    <div class="cont">
        <div class="form sign-in">
            <form action="login_con.php" method="post">
                <h2>Welcome</h2>
                <?php if(isset($_GET['error'])) { ?>
                        <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>
                    <span>Email</span>
                    <br>
                    <input type="email" name="uname" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password"  />
                </label>
                <p class="forgot-pass">Forgot password?</p>
                <label>
                    <button type="submit"  value="Sign In" class="login-bg">Sign In</button>
                    
                </label>
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <form action="signup_con.php" method="post">
                    <h2>Create your Account</h2>
                    <?php if(isset($_GET['error'])) { ?>
                            <p class="error"> <?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    
                    <label>
                        <span>Email</span>
                        <input type="email" name="suname"/>
                    </label>
                    <label>
                        <span>Phone</span>
                        <input type="phone" name="sphone"/>
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="spassword1"/>
                    </label>
                    <label>
                        <span>Confirm Password</span>
                        <input type="password" name="spassword2"/>
                    </label>
                    <br>
                    <button type="submit"  value="Sign Up" class="login-bg">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    <script>
            document.querySelector('.img__btn').addEventListener('click', function() {
                document.querySelector('.cont').classList.toggle('s--signup');
            });
        </script>

</body>
</html>