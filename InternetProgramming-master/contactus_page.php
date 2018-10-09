<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Contact Us</title>  
  </head>
    
    
    <style>
*B{
    box-sizing:border-box;
}

hr {
    border: 2px solid #FC89AC;
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
    color:#FC89AC;
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
    background:linear-gradient(180DEG, rgba(0,0,0,0), rgba(100,1000,100,0.3));
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
        

         

.para {
    font-size: 26px;
    width: 90%;
    float: right;
    text-align: center;
    margin-top: 2em;
    overflow: auto;
    margin-right: 5%;
        
    
}


.work {
    padding: 8em 0;
    background: linear-gradient(180deg, rgba(0,0,0,0.4), rgb(24,0,0)), url(./imgs/bookshelf.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: aliceblue;
    overflow: hidden;
}
        
        
.button {
    padding:0.5em 2em;
    margin-top: 1em;
    background:#FC89AC;
    color: #ffffff;
    font-weight: 400;
    border: 2px solid #000000;
    text-transform: uppercase;
    transition: all 0.2s linear;
    
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
                <h1>Reach Us Out Here</h1>
                <hr>
            </div>
        </section>


      
         <section class="work">
            <div class="content-wrap">
               <h1>Contact Us On</h1>
                <hr>
            
            
            <div class="para">
                <p>isolated.warrior9988@gmail.com<br>varunyadav155@gmail.com<br>kunaltemkar27@gmail.com </p>
            </div>
           
            <div class="para">
                <p>Mr.Abhishek Upadhyay<br>Mr.Varun Yadav<br>Mr.Kunal Temkar</p>
            </div>
            
            <div class="para">
                <p>ADDRESS:<br>SECTOR-3, AIROLI, NAVI-MUMBAI-400708</p>
            </div>
               <hr> 
         
           
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