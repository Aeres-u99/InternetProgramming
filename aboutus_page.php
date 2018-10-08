<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>About Us</title>  
  </head>
    
    
    <style>
*B{
    box-sizing:border-box;
}

hr {
    border: 2px solid #FF2400;
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
    color:#FF2400;
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
    background:linear-gradient(180DEG, rgba(0,0,0,0), rgba(500,0,100,0.3));
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
    padding: 5em 0;
    background: linear-gradient(180deg, rgba(0,0,0,0.4), rgb(24,0,0)), url(./imgs/bookshelf_2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: aliceblue;
    overflow: hidden;
}

.work h1{
    color:#FF2400;
    font-size: 40px;
}
   
.button {
    padding:0.5em 2em;
    margin-top: 1em;
    background:#FF2400;
    color: #ffffff;
    font-weight: 400;
    border: 2px solid #000000;
    text-transform: uppercase;
    transition: all 0.2s linear;
    
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
                <h1>About Us </h1>
                <hr>
            </div>
        </section>
      
         <section class="work">
            <div class="content-wrap">
                <h1>Here we Present You BookLovers.Com</h1>
                <hr>
            
            
            
            <div class="para">
                <p>As the name suggests, Book-Lovers.com is a destination for book lovers: This website offers an assortment of information about books and authors, as well as a comprehensive archive of wonderful and unusual books online. </p>
            </div>
           
            <div class="para">
                <p>Life is busy. Even so, it’s important to carve out time to relax and time for yourself. That’s where “Book Lovers” comes in. Let us do the work of choosing a good read that will be delivered right to your door each month. Before you know it you’ll be back in the reading habit! By reading just 10 to 20 minutes a day, you can easily finish a book in a month. You deserve a reading break!</p>
            </div>
            
            <div class="para">
                <p>We started “Book Lovers” to inspire peoples to incorporate reading into their daily lives and believe reading is an important habit that holds many benefits.Our hope is to build an online community that encourages reading and book discussions. </p>
            </div>
                
            <div class="para">
                <p>Benefits:<br><hr>Stress Reduction..<br>Vocabulary Expansion..<br>Stronger AnalyticalThinking Skills..<br>Improves Focus and Cocentration..<br>Knowlegde..<br>Memory Improvement..<hr></p>
            </div>
                
            <div class="para">
                <p>We bring the best research-based strategies to teachers, parents, administrators, librarians, childcare providers, and anyone else involved in helping a young child become a strong, confident reader. Our goal is to bring the reading research to life — to spread the word about reading instruction and to present "what works" in a way that parents and educators can understand and use.</p>
            </div>
             
             <h1> Invite You To Come Join Us !</h1>
            </div>
      </section>
      
      
        <section class="follow-share">
            <div >
                <hr>
                <h1>Follow & Share!</h1>
                <p>Contribute to the Books you read with your Opinion, Ideas and Stories. Follow Other Readers and see what gems of Inspiration they have to share.</p>
                <button href="contactus_page.php" class="button"><b>Any Suggestions ?</b></button>
            </div>           
        </section>
        
        <footer class="footer">
            <div class="content-wrap">
                <p>This Website Is Created As part Of An Internet Programming  Project. No Copyright Infringement Intended.<br> For Educational Purposes Only.</p>
                <h5>No Copyright</h5>
            </div>
        </footer>
               
      
    </body>
</
</html>