<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
</head>


<style>
    *B {
        box-sizing: border-box;
    }

    hr {
        border: 2px solid #FC89AC;
        width: 800px;
    }


    body {
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

    .name {

        font-size: 4em;
        color: #FC89AC;
        font-weight: 900;
        margin: 0;
        margin-top: 1em;
    }


    .navigation li {
        display: inline-block;
        margin: 1em;
    }

    .navigation a {
        font-weight: bold;
        text-transform: uppercase;
        text-decoration: none;
        padding: 0.5em;
        color: #000000;
    }


    .intro {
        background: linear-gradient(180DEG, rgba(0, 0, 0, 0), rgba(100, 1000, 100, 0.3));
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        padding: 8em 0;
        color: #000000;


    }



    .content-intro {
        padding-top: 6em;
        padding-bottom: 0;

    }

    .content-intro h1 {
        font-size: 1.7em;

    }


    .content-wrap {
        width: 90%;
        margin: 0 auto;
    }




    .para {
        text-align: center;
        font-family: 'Margarine', cursive;
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
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(20, 0, 0, 0)), url(./imgs/bookshelf.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        color: aliceblue;
        overflow: hidden;
    }

    #ajax_form {
        align-content: center;
        width: 410px;
        
        font-size: 12px
    }

    #ajax_form td {
        
        font-size: 12px
    }

    #ajax_form_header {
        
        font-size: 1.3em;
        font-weight: bold;
        text-align: center
    }

    #returned_value {
        /*FOR RETURNED VALUE UGH...*/
        
        text-align: center;
        font-size: 12px;
        color: #000000
    }

    /* okay this should work*/

    #go {
        border: 1px solid #CCCCCC;
        background: #FFF
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
    background:#FC89AC;
    color: #ffffff;
    font-weight: 400;
    border: 2px solid #FC89AC;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.2s linear;
    
}


.button:hover{
    background: #ffffff;
    border: 2px solid #FC89AC;
    color: #000000;
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




        </div>

        <script type="text/javascript" src="cform.js"></script>

        <div id="ajax_form" class="para">
            <form align="center" margin="auto">
                <div id="ajax_form_header"><h1>Contact Us Form</h1></div>
                <br />

                <table width="350" border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr>
                        <td><label><h2>Name:</h2></label></td>
                        <td><input type="text" id="name" style="width:100%" /></td>
                    </tr>
                    <tr>
                        <td><label><h2>Email:</h2></label></td>
                        <td><input type="text" id="email" style="width:100%" /></td>
                    </tr>
                    <tr>
                        <td><label><h2>Subject:</h2></label></td>
                        <td><input type="text" id="subject" style="width:100%" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label><h2>Enter Your Message:</h2></label><br /><br>
                            <textarea type="text" name="body" style="width:100%;height:100px" id="body"></textarea>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><input type="button" class="button" value="Submit" id="submit" onClick="return check_values();"></td>
                    </tr>
                </table>

            </form>
            <br />

            <div id="confirmation" style="display:none" align="center"></div>
        </div>




    </section>



    <footer class="footer">
        <div class="content-wrap">
            <p>This Website Is Created As part Of An Internet Programming Project. No Copyright Infringement Intended.<br> For Educational Purposes Only.</p>
            <h5>No Copyright</h5>
        </div>
    </footer>


</body>

</html>