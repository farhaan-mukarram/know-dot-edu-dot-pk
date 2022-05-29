<!DOCTYPE html>

<?php
session_start();

/* if admin is logged in, redirect to admin home page */
if (isset($_SESSION['accountType'])) {
  if ($_SESSION['accountType'] == 'Admin'){
    header("Location: admin.html");
  }
}
?>



<html lang="english">
  <head>
    <title>exported project</title>
    <meta property="twitter:card" content="summary_large_image" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style>
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}
    </style>
    <style>
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./frame10304132.css" rel="stylesheet" />

      
            <div class="frame10304132-banner334577">
             
              
              
            </div>
            <div class="frame10304132-navbar334705">
              <img
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMTM2NCcgaGVpZ2h0PScxMzcnIHZpZXdCb3g9JzAgMCAxMzY0IDEzNycgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPGcgZmlsdGVyPSd1cmwoI2ZpbHRlcjBfZF8zM180NzA2KSc+CjxyZWN0IHg9JzEnIHk9Jy0xLjc2MDI1JyB3aWR0aD0nMTM2NCcgaGVpZ2h0PScxMDYuMTk1JyBmaWxsPSd3aGl0ZScvPgo8L2c+CjxkZWZzPgo8ZmlsdGVyIGlkPSdmaWx0ZXIwX2RfMzNfNDcwNicgeD0nLTI1LjU0ODcnIHk9Jy0yMi45OTkzJyB3aWR0aD0nMTQxNy4xJyBoZWlnaHQ9JzE1OS4yOTInIGZpbHRlclVuaXRzPSd1c2VyU3BhY2VPblVzZScgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSdzUkdCJz4KPGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0nMCcgcmVzdWx0PSdCYWNrZ3JvdW5kSW1hZ2VGaXgnLz4KPGZlQ29sb3JNYXRyaXggaW49J1NvdXJjZUFscGhhJyB0eXBlPSdtYXRyaXgnIHZhbHVlcz0nMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMTI3IDAnIHJlc3VsdD0naGFyZEFscGhhJy8+CjxmZU9mZnNldCBkeT0nNS4zMDk3NScvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPScxMy4yNzQ0Jy8+CjxmZUNvbXBvc2l0ZSBpbjI9J2hhcmRBbHBoYScgb3BlcmF0b3I9J291dCcvPgo8ZmVDb2xvck1hdHJpeCB0eXBlPSdtYXRyaXgnIHZhbHVlcz0nMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMC4xIDAnLz4KPGZlQmxlbmQgbW9kZT0nbm9ybWFsJyBpbjI9J0JhY2tncm91bmRJbWFnZUZpeCcgcmVzdWx0PSdlZmZlY3QxX2Ryb3BTaGFkb3dfMzNfNDcwNicvPgo8ZmVCbGVuZCBtb2RlPSdub3JtYWwnIGluPSdTb3VyY2VHcmFwaGljJyBpbjI9J2VmZmVjdDFfZHJvcFNoYWRvd18zM180NzA2JyByZXN1bHQ9J3NoYXBlJy8+CjwvZmlsdGVyPgo8L2RlZnM+Cjwvc3ZnPgo="
                alt="Rectangle1334706"
                class="frame10304132-image05"
              />

              
              <div class="frame10304132-frame1334707">
                <form action = "../signup.php"> 
                <button type="submit" class="frame10304132-text05"  style="background-color: transparent;">Register</button>
              </form>
              </div>
              <div class="frame10304132-frame2334709">
                <form action = "../login.php"> 
                <button class="frame10304132-text06" style="background-color: transparent;">Log in</button>
              </form>
              </div>

              <div class="frame10304132-frame3334711">
                <span class="frame10304132-text07"><a href="../landing/index.php">Home</a></span>
                <span class="frame10304132-text08"><a href="../about us/index.html">About Us</a></span>
                <span class="frame10304132-text09"><a href="../pricing/index.html">Pricing</a></span>
                <span class="frame10304132-text10"><a href="../viewcourses.php">Courses</a></span>
              </div>

              <!-- Nav bar :: PHP -->
  <div class="top row col-12">
  
    <!-- change navbar based on whether you are logged in or not -->

    <!-- LOGGED IN -->
    <?php if (isset($_SESSION['userName'])) : ?>
      <a href = "../internals/logout.inc.php"> <li> Logout </li> </a>
      
    <!-- LOGGED OUT --> 
    <?php else : ?> 
      <a href = "../about us/index.html"> <li> About </li> </a>
      <a href = "../pricing/index.html"> <li> Pricing </li> </a>
    <?php endif; ?>

  </ul>
  
  </div>


<div class = "main"> 

  <?php if (isset($_SESSION['userName'])) : ?>
  <!-- USER VIEW -->

    <?php if ($_SESSION['accountType'] == 'Student') : ?>
    <!-- STUDENT VIEW --> 

    <div class = "row">
    <div class = "col-12 col-s-12">
    <h1 style = "margin: 10px">Welcome, <?php echo $_SESSION['userName']; ?>! </h1>
    </div>
    </div>
    <div class = "row">
    <div class = "col-6 col-s-12">
    <a href = "bookindex.html"><button class = "button-big left" style = "width: 90%"> ISBN Book Search </button></a>
    </div>
    <div class = "col-6 col-s-12">
    <button class = "button-big left" style = "width: 90%" onclick = "randomcourse()"> Random Course </button>
    </div>
    
    
    </div>
    <hr>
    <h1 style = "margin: 10px"> Enrolled Courses </h1>
    <!-- Enrolled Course Listed Here Dynamically -->
    <div class = "course"> </div>
    </div>
    
    
  
    <?php elseif($_SESSION['accountType'] == 'Teacher') : ?> 
      <!-- TEACHER VIEW -->
      <div class = "row">
      <div class = "col-12 col-s-12">
      <h1 style = "margin: 10px">Welcome, <?php echo $_SESSION['userName']; ?>! How will you teach today? </h1>
      </div>
      </div>
      <div class = "row">
      <div class = "col-6 col-s-12">
      <a href = "teacherform.php"><button class = "button-big left" style = "width: 90%"> Start Course </button></a>
      </div>
      <div class = "col-6 col-s-12">
      <button class = "button-big left" onclick = "randomcourse()" style = "width: 90%"> Random Course </button>
      </div>
      <hr>

    
    
    </div>
  
    <?php endif; ?> 
  <?php else : ?>


    
    
  </div>

  
  <?php endif; ?>

                         
          
              <img
                src="data:image/png;base64,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"
                alt="logotransparent1334837"
                class="frame10304132-image06"
              />
            </div>
            
           
            
      </div>
  </body>
</html>
