<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8"/>
     <title>contact</title>
     <link rel="stylesheet" href="contactc.css" type="text/css"/>
</head>
<body>
     <!--nav bar -->
     <div class="header">
     <div class="logo">
         <a href="pro.html" class="log" >Spotlight</a></div>
     <div class="nav">
	     <ul>
	        <li><a href="pro.html" class="men"> Home </a></li>
            <li><a href="pro.html#serv" class="men"> Services </a></li>
            <li><a href="AboutUs.html" class="men"> About us </a></li>
            <li><a href="contactp.php" class="men"> contact </a></li>
	     </ul>
     </div>
	 </div>
	

     <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" name="form">
        <!--contact-->
        <div class="group" >
            <p id="contt" >CONTACT US</p>
  
               <table>
                     <tr>
                        <th id="tl"><img src="001-phone-receiver.png" alt="phone"/>&#43;&#40;966&#41;000&#45;5751</th>
                     </tr>
                     <tr>
                        <th id="em"><img src="002-close-envelope.png" alt="envelope"/>   Spotlight&#64;mail.com</th>
                     </tr>
               </table>
            <p>
              <label class="name">Name:
                   <input class="n" name="name" type="text" placeholder="Name" required/>
              </label>
            </p>
            <p>
              <label class="name">Email:
                   <input class="n" name="email" type="email" placeholder="Email Address" required/>
              </label>
            </p>
            <p> 
              <snap class="mess">Message:</snap><label >
                  <textarea class="texta" name="comment" placeholder="write Message" required ></textarea>
              </label>
            </p>
            <p>
              <input class="subm" type="submit" name="submit" value="send massege"/>
            </p>
        </div>
    </form>
 
 

 <?php
  //from youtube
   if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $message=$_POST['comment'];
      $to="spotlightteams@gmail.com";
      $subject="contact massege";
      $sendmessage="Name: ".$name."\n\n".$message;
      $from="from:".$email;
   if(mail($to, $subject,$sendmessage, $from)){
      echo "<div class='mes'><img src='correct.png' alt='correct' style='height:30px; width:30px; margin:0px;'><p id='m'>your messege sended successfully </p></div>";
     }else{
          echo "<h1>somthing get woring please try again </h1>";
          }
  }
?>

 </body>
</html>