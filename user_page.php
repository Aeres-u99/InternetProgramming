<?php
    session_start();

    if(isset($_POST['logout']))
    {
        session_destroy();
        header('location:login_page.php');
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
      
      
      
.user {
            padding:1em 0.6em;
            text-align: center;  
            background: #eceeee;
            border: 3px solid #37a69b;
            border-radius: 60px;
            height: 180px;
            margin: 80px auto;
            width: 350px;
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
    padding:0.5em 2em;
    margin-top: 1em;
    background:#37a69b;
    color: #ffffff;
    font-weight: 400;
    border: 2px solid #000000;
    text-transform: uppercase;
    transition: all 0.2s linear;
    
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
                <li><a href="#">CONTACT US</a></li>
                <li><a href="aboutus_page.php">ABOUT US</a></li>
            </ul>
        </nav>
    </header>
        
        
    <section class="intro">    
    <div class="content-intro">   
    
        <form class="user" action="user_page.php" method="post">
        <h1>WELCOME 
            <?php echo $_SESSION['username']?>
        </h1>
        <input name="logout" type="submit" value="Sign Out">
        </form>
        
      
        
    </div> 
    </section> 
        
        
        
        <section class="follow-share">
            <div >
                <hr>
                <h1>Follow & Share!</h1>
                <p>Contribute to the Books you read with your Opinion, Ideas and Stories. Follow Other Readers and see what gems of Inspiration they have to share.</p>
                <button class="button"><b>Any Suggestions ?</b></button>
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