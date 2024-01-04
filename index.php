<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="HL.png" type="image/x-icon">
 
    <title>LODI HOOPS</title>
</head>
<style>
  .out{
    padding-right: 120px;
  }
  .lh {
    position: relative;
  left: 60px;
  
  }
</style>
<body>
      <section id="nav">
        <!-- NAVIGaTION -->
        <nav class="navbar bg-body-tertiary fixed-top ">
              <div class="container-fluid">
            
                  <img src="LH.png" alt="" width='170px' class='lh'>
                  <img src="sneak1.png" alt="" width='60px' class=''>
                  <img src="sneak3.png" alt="" width='80px' class=''>
                  <img src="sneak2.png" alt="" width='60px' class=''>
                  <img src="sneak4.png" alt="" width='80px' class=''>
                  <img src="sneak5.png" alt="" width='80px' class=''>

                  
                
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                  <div class="offcanvas-header"> <img src="LH.png" alt="" width='50%'>
                  
                   <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  
                  <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#sports">Sports</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#video">Tutorial</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                      </li>
                    </ul>
                    <div><a href="logout.php"><input type="submit" value="LOG OUT" name="logout" class="btn-grad3 text-dark "></a>
                    </div>
          
            
                         
                  </div>
                </div>
              </div>
            </nav>
 
      </section>
  <!-- HOME -->
  <section id="home" class="p-5">
    <div class="p-5">
      <div class="container text-center p-5">
       
          <h1 style="font-size: xxx-large; padding-bottom: 140px;">Sportswear that <br> will
             unleash your <br>inner beast
          </h1>
          <div class="text-center">
          <a href="#sports"><input type="submit" value="SPORTS WEAR" name="logout" class="btn-grad3 text-dark "></a>
          </div>

        
       
      </div>

        
  
  </section>

  <section id="sports">
    <div class="text-center pt-5">
      <h1>SPORTS</h1>
    </div>
     <div class="cards text-center p-5 ">
        <a href="mpl.html"><img src="esport.png" alt="" width="250px" class="img2 p-5"></a>
        <a href="index.html"><img src="nike.png" alt="" width="250px" class="img2 p-5" ></a>
       <a href="vball.html"><img src="vball.png" alt="" width="300px" class="img2 p-3" ></a>
       
      </div>
      <div class="cards text-center ">
        <a href="hoodie.html"><img src="longsleeve.png" alt="" width="250px" class="img2 p-5"></a>
        <a href="cycling.html"><img src="cycling.png" alt="" width="250px" class="img2 p-5" ></a>
       <a href="football.html"><img src="soccer.png" alt="" width="250px" class="img2 p-3" ></a>
       
      </div>
      <div class="text-center">
        <a href="new.html"><img src="new.png" alt="" width="250px" class="img2 p-5" ></a>
        <a href="shoes.html"><img src="shoes.png" alt="" width="250px" class="img2 p-5" ></a>

      </div>

  </section>

  <!-- Tutorial Customization -->

  <section id="video">
    <div class="here text-center pt-5 ">
      <h1><b>HERE  HOW WE CUSTOMIZE OUR JERSEY DESIGN</b></h1>
    </div>
        <div class="text-center p-5">
          
          <img src="bg-sport9.gif" alt="" width="100%" height="100%">
        

        <div class="text-center">
          <h4>Quote:</h4><h2>DON'T HATE <br> THE JERSEY <br>HATE THE GAME</h2>
          <a href="https://www.youtube.com/watch?v=cbNc5TGrRxE"><img src="yt.png" alt="" width="100px"> Click: Full Tutorial</a>
        </div>
      </div>
  </section>
  
  <!-- ABOUT US -->
  <section id="about" class="bg-light">
    <div class="text-center p-5">
      <h1>About us</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6 p-5">
          <p class="text-dark" style="font-size: x-large">IS A CLOTHING SPORTS DESIGNER COMPANY 
          THAT <br>WAS ORIGINALLYFOUNDED & ENTABLISHED IN<br> PAMPANGA, PHIILIPPINES IN 2023.WE ARE CREATING A JERSEY LAYOUT DESIGN THAT CAN 
          HELP TO CHOOSE YOUR SPORTSWEAR AND ITS FREE TO DOWNLOAD<br></p>
          <img src="allsport.png" alt="" width="60%" class="pt-5">
          <!-- <img src="nayk.png" alt="" width="10%" height="40%"> -->
        </div>
        <div class=" col-6">
          <img src="login-side.png" alt="" width="100%" height="100%">

        </div>

      </div>
      
     
     
    </div>
  </section>
  <!-- <p>IS A CLOTHING SPORTS DESIGNER COMPANY 
          THAT WAS <br>ORIGINALLYFOUNDED & ENTABLISHED IN PAMPANGA, <br>PHIILIPPINES IN 2023.WE ARE CREATING A JERSEY <br>LAYOUT DESIGN THAT CAN 
          HELP TO CHOOSE <br>YOUR SPORTSWEAR AND ITS FREE TO DOWNLOAD</p> -->

 
        <!--Footer  -->
    <section id="footer" class="bg-dark">
      <footer class="container">
       <div class="text-center text-light "><h6>©2023 Lodihoops .All right reserved</h6></div> 
       <div class="row">
        <div class="col-6">
          <img src="LH.png" alt="" width="40%">
         

        </div>
        <div>

        </div>
        

       </div>
       <div class="col-6">
        <h6 class="text-light ">CLOTHING MANUFACTURER BASED IN <br>PHILIPPINES THAT OFFERS FULL SUBLIMATION <br> SPORTSWEAR AND COMPANY UNIFORMS.</h6>

        </div>
        

      </footer>
    </section>
      
  
  
   
       
  
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>