<!DOCTYPE htm1>
<html lang="en-us">
  <head>
    <title>signup</title>
  </head>
  <link rel="stylesheet"  href="Gelato.css">
  <body>
    <form>
      <header id="hr">
        <div>
          <p2 id="img"><img src="PngItem_727098.png"></p2>
         </div>
         <h1 id="top"> <em>Crème-glacée</em> </h1>
      </header>
      <br>
       <div id="navbar">
          <ul class="nacontent">
            <li><a href="Home.php">Home</a></li>
           <li><a href="About.html">About</a></li>
           <li><a href="prices.html">prices</a></li>
           <li><a href="contact.html">ContactUs</a></li>   
          </ul>
        </div>
      </br> 
     <main class="mainn">
     
       <form name="sign up" action = "signuppost.php" method = "post">
         <div class="log">
           <div>
              user name<input type="text"  name="username" size="30" placeholder="enter email" required="required"> 
            </div>
            <div>
             E-mail <input type="email"  name="Email" size="30" placeholder="enter E-mail" required="required"> 
           </div>
           <div>
             password <input type="password"  name="password" size="30" placeholder="enter password" required="required"> 
           </div>
           <div>
             confirm password <input type="password"  name="confirmpassword" size="30" placeholder="enter password" required="required" same='password '>        
           </div>
           <div>
             <button type="submit" >signup </a></button>

           </div>
         </div>
        </form>
      </main>
      <footer>
        <hh id="tx">
          Copyright © 2022-2023 .
          Crème-glacée
         </hh>
     </footer>
    </form>
  </body>
</html>