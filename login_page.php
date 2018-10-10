<?php
	session_start();
	$con=mysqli_connect ("localhost", "root", "") or die ("unable to connect");
    mysqli_select_db ($con,'samplelogindb');

    if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
                
				$query = "select * from userinfodb WHERE username='$username' AND password='$password'";
                
				//echo $query;
				$query_run = mysqli_query($con,$query);
                 
				//echo mysql_num_rows($query_run);
				if(mysqli_num_rows($query_run)>0)
				{
                    //valid
					$_SESSION['username']= $username;
					header('location:user_page.php');
				}
				else
				{
                    //invalid
				    echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
				}
                
            }
		?>


<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Login</title>  
  </head>
    
    
    <style>
*B{
    box-sizing:border-box;
}

hr {
    border: 2px solid #37a69b;
    width: 800px;
}
        
     
body{
    text-align: center;
    font-family: 'Margarine', cursive;
}

header {
    position: absolute;
    left: 0;
    right: 0;
    clear: both;
    overflow: auto;
}
        
.name{
    
    font-size: 4em;
    color:#37a69b;
    font-weight: 900;
    margin: 0;
    margin-top: 1em;
}


.navigation li{
    display: inline-block;
    margin: 1em;
}

.navigation a{
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    padding: 0.5em;
    color: #000000;
}
        
   
.intro{
    background:linear-gradient(180DEG, rgba(0,0,0,0), rgba(0,100,200,0.3));
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 8em 0;
    color: #000000;
    
        }
        


.content-intro{
            padding-top: 6em;
            padding-bottom: 0;
            
        }        
        
.content-intro h1{
            font-size: 1.7em;
            
        }
        
        
.content-wrap {
    width: 90%;
    margin: 0 auto;
}

        
.login {
            padding:1em 0.6em;
            text-align: center;  
            background: #eceeee;
            border: 3px solid #37a69b;
            border-radius: 60px;
            height: 480px;
            margin: 80px auto;
            width: 350px;
        }
        
        
        
.login h1 {
    font-size: 3.5em;
    padding-bottom:  20px;
    margin-bottom: 0px;
    border-bottom: 1px solid #000000;
    color: #37a69b;
    text-align: center;
         }

        
.login-back{
    margin-top: 1em;
    background:linear-gradient(0DEG, rgba(0,0,0,0), rgba(0,0,0,0)), url(./imgs/bookshelf_1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #ffffff;
    padding: 1em 0;
        }
        
                
        
        
input[type="password"], input[type="text"] {

  border: 1px solid #a3a3a3;
  border-radius: 30px;
  box-shadow: 0 2px #696969;
  box-sizing: content-box;
  color: #696969;
  height: 50px;
  margin: 35px 0 0 0;
  padding-left: 2em;
  transition: box-shadow 0.3s;
  width: 250px;

}
input[type="password"]:focus, input[type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}

               

.forgot {
  color: #7f7f7f;
  float: right;
  font-size: 15px;
  margin-right: 25px;
  transition: color .4s;
}
        
        
.forgot:hover { 
    color: #000000;
}
    
input[type="submit"] {   
  width:250px;
  height:40px;
  display:block;
  font-size:16px;
  font-weight:bold;
  color:#ffffff; 
  text-transform:uppercase;
  text-align:center;
  padding-top:10px;
  margin: 50px 0 0 50px;
  position:relative;
  cursor:pointer;
   background-color: #37a69b;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
}


input[type="submit"]:active {
  top:20px;
  margin: 28px;
  padding: 26px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
}
   
.button {
    padding:0.2em 2em;
    background:#37a69b;
    color: #ffffff;
    font-weight: 400;
    border: 2px solid #37a69b;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.2s linear;
    
}


.button:hover{
    background: #ffffff;
    border: 2px solid #37a69b;
    color: #000000;
}
        
.follow-share {
    padding: 3em 0;
    overflow: auto;
}
        
        
.footer {
    background: #000000;
    padding: 2em 0;
    color: #ffffff;
    overflow: auto;
}

#justforfont{
    font-style: italic
}
       
    </style>

  <body>     
        <header>
        <h1 class="name">BookLovers.Com</h1>
        <nav class="navigation">
            <ul>
                <li><a href="./home_page.php">HOME</a></li>
                <li><a href="./login_page.php">LOGIN</a></li>
                <li><a href="./register_page.php">REGISTER</a></li>
                <li><a href="./contactus_page.php">CONTACT US</a></li>
                <li><a href="./aboutus_page.php">ABOUT US</a></li>
            </ul>
        </nav>
        </header>
        
        <section class="intro">
            <div class="content-intro">
                <hr>
                <h1>Enter Your Credentials Below To Login </h1>
                <hr>
            </div>
        </section>
        
        <section>
            <div class="login-back">
            <div class="login">
                <h1>Login</h1>
                <form method="POST" action="login_page.php">
                <input type="text" name="username" placeholder="Username" id="justforfont" required>  
                
                <input type="password" name="password" placeholder="Password" id="justforfont" required>  
                
                <a class="forgot" href="./contactus_page.php"><u><b>Forgot Password?</b></u></a>
                
                <input name="login" type="submit" value="Sign In">
                </form>
            </div>
            </div>
        </section>
        
         <section class="follow-share">
            <div >
                <hr>
                <h1>Follow & Share!</h1>
                <p>Contribute to the Books you read with your Opinion, Ideas and Stories. Follow Other Readers and see what gems of Inspiration they have to share.</p>
                <a href="contactus_page.php" class="button">Any Suggestions ?</a>
            </div>           
        </section>
        
        <footer class="footer">
            <div class="content-wrap">
                <p>This Website Is Created As part Of An Internet Programming  Project. No Copyright Infringement Intended.<br> For Educational Purposes Only.</p>
                <h5>No Copyright</h5>
            </div>
        </footer>
               
    </body>
    
 </html>   