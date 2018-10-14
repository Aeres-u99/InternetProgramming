<?php
	session_start();
	$con=mysqli_connect ("localhost", "root", "") or die ("unable to connect");
    mysqli_select_db ($con,'samplelogindb');

    if(isset($_POST['logout']))
    {
        session_destroy();
        header('location:login_page.php');
    }


    else
    {
        if(isset($_POST['submit']))
			{
				$username=$_POST['username'];
                $url=$_POST['url'];
              
                
                $query = "select * from userinfodb WHERE username='$username'";
                    
				$query_run = mysqli_query($con,$query);

                   
				if(mysqli_num_rows($query_run)>0)
				    {
				        $query = "INSERT INTO user values('','$username','$url')";
                            
                        $query_run = mysqli_query($con,$query);
                            
				        if($query_run)
				        {
				            echo '<script type="text/javascript">alert("URL Submitted...Thank You")</script>';
				        }
				        else
				        {
				            echo '<script type="text/javascript">alert("Error While Submitting ")</script>';
				        }
				    }
            }
        else
        {
          
        }
    }

    
    

?>



<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Welcome To BookLovers.Com</title>  
  </head>
    
  <style>
    
      *B{
    box-sizing:border-box;
}

hr {
    border: 2px solid #581845;
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
    color:#581845;
    font-weight: 900;
    margin: 0;
    margin-top: 1em;
}


.navigation ul{
    list-style: none;
    margin: 0 auto;
    padding: 0;
    
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
    background:linear-gradient(0DEG, rgba(0,0,0,0.6), rgba(0,0,0,0.9)), url(./imgs/bookshelf_3.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 8em 0;
    color: #ffffff;
    
}


.content-intro{
            padding-top: 6em;
            padding-bottom: 0;
            width: 60%;
            margin: 0 auto;
            
        }        
        
.content-intro h1{
            font-size: 1.7em;
            
        }
        
.content-wrap {
    width: 60%;
    margin: 0 auto;
}
      

      
.user {
            padding:1em 0.6em;
            text-align: center;  
            background: #eceeee;
            border: 3px solid #581845;
            border-radius: 60px;
            height: 180px;
            margin: 80px auto;
            width: 350px;
            color: #000000;
        }
              
      
.user1 {
            padding:1em 0.6em;
            text-align: center;  
            background: #eceeee;
            border: 3px solid #581845;
            border-radius: 60px;
            height: 300px;
            margin: 80px auto;
            width: 350px;
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
   background-color: #581845;
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
    background:#581845;
    color: #ffffff;
    font-weight: 400;
    border: 2px solid #581845;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.2s linear;
    
}


.button:hover{
    background: #ffffff;
    border: 2px solid #581845;
    color: #000000;
}
   
      
.section{
    padding: 2em 0;
    
    
}      
    
      
.section-intro{
            padding-top: 6em;
            padding-bottom: 0;
            width: 60%;
            margin: 0 auto;
            
        }       
      
 input[type="text"] {

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
input[type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}     
      
  #justforfont{
        font-style: italic;
    }
          
      
      
.follow-share {
    margin-top: 4em;
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
            <h1>You Have Logged In Succesfully !! </h1>
         <hr>
        <form class="user" action="user_page.php" method="post">
        <h1>WELCOME 
            <?php echo $_SESSION['username']?>
        </h1>
        <input name="logout" type="submit" value="Sign Out">
        </form>
        </div> 
        
    </section> 
        
    <SECTION>
        <div class="content-intro">
                <h1>We present you this virtual library to choose the book as per your needs. Go ahead and click on "EXPLORE NOW" Button. You will be redirected the page where you can get  all your books, Every Book is given a Description followed by it's Author's Name.</h1>
                <div class="buttonpadding">
                <a href="./explore_page.php" class="button">EXPLORE NOW</a>
                </div>
            </div>     
        
    </SECTION>    
        
        
        <section class="section">    
            <div class="section-intro">   
                <hr>
                <h1>You Can Upload your Book's URL Below</h1>
                <hr>
                <form class="user1" action="user_page.php" method="post">
                    <input type="text" name="username" placeholder="Enter Username Here" id="justforfont" required>
                    
                    <input type="text" name="url" placeholder="Enter URL Here" id="justforfont" required>
                    
                    <input name="submit" type="submit" value="SUBMIT">
                </form>
   
                <h1>LEADERBOARD :</h1>  
                <marquee><h2>Books Uploaded Till Now :</h2>  </marquee>

                <?php 
				$con=mysqli_connect ("localhost", "root", "") or die ("unable to connect");
                mysqli_select_db ($con,'samplelogindb');
				
                $sql = "SELECT user.url, user.username, userinfodb.email, userinfodb.username, userinfodb.firstname FROM user JOIN userinfodb ON user.username=userinfodb.username";
				$result = $con->query($sql);

					if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {
				echo "Username :". $row["username"]. "  ||  " . "Link:" . $row["url"]. " ||  ". "Firstname: " .$row["firstname"]. "<br>";
				}
				} else {
				echo "0 results";
				}
                
              
				?>
               
                
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