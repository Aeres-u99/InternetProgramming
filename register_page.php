<?php
	session_start();
	$con=mysqli_connect ("localhost", "root", "") or die ("unable to connect");
    mysqli_select_db ($con,'samplelogindb');
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Register</title>  
  </head>
<style>
    *B{
        box-sizing:border-box;
    }

    hr {
        border: 2px solid #daa520;
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
        color:#daa520;
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
        color: #ffffff;
}
        
   
    .intro{
        background:linear-gradient(0DEG, rgba(0,0,0,0.3), rgba(0,0,0,1));
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        padding: 8em 0;
        color: #ffffff;
        margin-bottom: em;
        }

    

    .content-intro{
            padding-top: 6em;
            padding-bottom: 0;
            
        }        
        
    .content-intro h1{
            font-size: 1.7em;
            
        }

    .content-intro h1{
    
        margin-top: 1.5em;
        font-size: 1.5em;
        font-weight: 900;
        text-transform: uppercase;
}

    .content-intro span{
        font-size: 0.5em;
        font-weight: 400;
        display: block;
        margin-top: 10px;
}
    
    .content-wrap {
        width: 90%;
        margin: 0 auto;
}

   

   .registration {
            padding:1em 0.6em;
            text-align: center;  
            background: #eceeee;
            border: 3px solid #daa520;
            border-radius: 60px;
            height: 820px;
            margin: 80px auto;
            width: 580px;
            text-align: j;
        }
        
        
        
    .registration h1 {
        font-size: 3.5em;
        padding-bottom:  20px;
        margin-bottom: 0px;
        border-bottom: 1px solid #000000;
        color: #daa520;
        
         }
   
    .registration-back {
        margin-top: 1em;
        background:linear-gradient(90DEG, rgba(0,0,0,0), rgba(0,0,0,0.9)), url(./imgs/bookshelf_4.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center; 
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
        width: 350px;

}
    input[type="password"]:focus, input[type="text"]:focus {
        box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
        outline: 0;
}

               

    
    input[type="submit"] {  
        align-content: center;
        width:400px;
        height:40px;
        font-size:20px;
        font-weight:bold;
        color:#000000; 
        text-transform:uppercase;
        text-align:center;
        padding-top:10px;
        margin: 60px 0 0 5px;
        cursor:pointer;
        background-color: #daa520;
        box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
}


    input[type="submit"]:active {
        top:20px;
        margin: 28px 0;
        padding: 26px;
        box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
}
    
    
    #justforfont{
        font-style: italic;
    }
    
    
    
    
    .button {
        padding:0.2em 2em;
        background:#daa520;
        color: #ffffff;
        font-weight: 400;
        border: 2px solid #daa520;
        text-decoration: none;
        text-transform: uppercase;
        transition: all 0.2s linear;
    
}


    .button:hover{
        background: #ffffff;
        border: 2px solid #daa520;
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
                <h1>Fill in the following form yo Register Now  <span>Its Totally Free And Fast !!</span></h1>
                <hr>
            </div>
        </section>
     
        <section>
           <div class="registration-back"> 
            <div class="registration">
                <form action="register_page.php" method="POST">
                <h1>Registration</h1>
                <label><b>FIRST NAME :</b></label>
                <input type="text" placeholder="Enter First name" name="firstname" required id="justforfont" >  
                
                <br>
                <label><b>LAST NAME : </b></label>
                <input type="text" placeholder="Enter Last name" name="lastname" required id="justforfont">  
                
                <br>
                <label><b>EMAIL ID : </b></label>
                <input type="text" placeholder="Enter Email" name="email" required id="justforfont">
                
                
                <br>
                <label><b>USERNAME : </b></label>
                <input type="text" placeholder="Enter Username" name="username" required id="justforfont">
                
                <br>
                <label><b>PASSWORD : </b></label>
                <input type="password" placeholder="Enter Password" name="password" required id="justforfont">
                
                <br>
                <label><b>REPEAT PASSWORD : </b></label>
                <input type="password" placeholder="Enter Password again" name="cpassword" required id="justforfont">
                
                <br>
                <input name="register" type="submit" value="SUBMIT">  
                
                </form>
                
        <?php
			if(isset($_POST['register']))
			{
				$firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $email=$_POST['email'];
                $username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from userinfodb WHERE username='$username'";
					//echo $query;
                    
				    $query_run = mysqli_query($con,$query);
                    
				    //echo mysql_num_rows($query_run);
                   
				    if(mysqli_num_rows($query_run)>0)
				    {
				        echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
				    }
				    else
				    {
				        $query = "INSERT INTO userinfodb (firstname,lastname,email,username,password)values('$firstname','$lastname','$email','$username','$password')";
                            
                        $query_run = mysqli_query($con,$query);
                            
				        if($query_run)
				        {
				            echo '<script type="text/javascript">alert("User Registered.. Go to Login Page to Login")</script>';
				        }
				        else
				        {
				            echo '<script type="text/javascript">alert("Error ")</script>';
				        }
                    }
                }
                else
                {
                    echo '<script type="text/javascript">alert("password and confirm password do not match")</script>';
                }
            }
			
		?>
       

                
                
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
                <h5>No Copyright </h5>
            </div>
        </footer>
               
</body>     