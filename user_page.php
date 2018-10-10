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