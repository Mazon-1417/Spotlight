<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="rm.css" type="text/css"/>
<title>Booking</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
<!--from stackoverflow-->
<script>
$(function () {
               $('#date').datepicker({
                 minDate: 0,
                   onSelect: function (date) {
                       $("#DateForm").submit();
                   }
               });
           });

</script>
</head>

<div class="header">
  <a href="pro.html" class="log" >Spotlight</a>
  <div class="nav">
  <ul>
   <li><a href="pro.html" class="men"> Home </a></li>
     <li><a href="pro.html#serv" class="men"> Services </a></li>
     <li><a href="AboutUs.html" class="men"> About us </a></li>
     <li><a href="contact.html" class="men"> contact </a></li>
  </ul>
  </div>
</div>

<body>
    <div class="n">

         <p class="now">BOOKING</p>
         <p class="nowDis">INDIVIDUAL ROOM </p>
         </div>
         <!--start here-->
        <div class="box">
         <table class="table">
          <tr>
          <td id="td">
          <div id="rs_int">
          <p>Please select the booking date first :</p>
          </div>
           </td>
           <td>
          <form  method="post" id="DateForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
            <input type="text" id="date" name="date" value= "<?php if (isset($_POST['date'])){ echo $_POST['date'];}else{echo  date('m/d/Y'); } ?>"/>
            </form>
            </td>
            </tr>
          </table>


            <!--some php does not need edit go to line 157-->

            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            error_reporting(E_ERROR | E_WARNING | E_PARSE);

            if (isset($_POST['date'])){
            $ldate=$_POST['date'];
            $Cdate=date('Y-m-d', strtotime($ldate));
            }else{
              $ldate = date('m/d/Y');
              $Cdate=date('Y-m-d', strtotime($ldate));
            }
            $conn = new mysqli("localhost","suser","12345","book");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM reservation WHERE resv_date ='$Cdate'  AND room_type='indivdual'";
            $result = $conn->query($sql);
            $room=array(0,101,102,103,104,105,106,107);
            $roomlength = count($room);
            $time=array(0,8,9,10,11);
            $timelength = count($time);
            $room2=array();
            $time2=array();

            if ($result->num_rows > 0) {
              $i = 0;
                while($row = $result->fetch_assoc()) {
                  for($x = 1; $x < $roomlength; $x++) {
                    for($z = 1; $z < $timelength; $z++) {
                  if( ($row["room_n"]== $room[$x]) && ($row["time_s"]==$time[$z])){
                    $i++;
                    $room2[$i]=$room[$x];
                    $time2[$i]=$time[$z];


                  }
            }
            }
            }
            }
            $thess=array();
            $sss=array();
            for($x=1;$x<30;$x++){
              $thess[$x]=0;
              $sss[$x]=0;
            }
            for($x=1;$x<=29;$x++){
            if(!empty($room2) && !empty($time2) && $room2[$x]==101 && $time2[$x]==8){
              $thess[1]=$room2[$x];
              $sss[1]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==101 && $time2[$x]==9){
              $thess[2]=$room2[$x];
              $sss[2]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==101 && $time2[$x]==10){
              $thess[3]=$room2[$x];
              $sss[3]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==101 && $time2[$x]==11){
              $thess[4]=$room2[$x];
              $sss[4]=$time2[$x];
            }

            if(!empty($room2) && !empty($time2) && $room2[$x]==102 && $time2[$x]==8){
              $thess[5]=$room2[$x];
              $sss[5]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==102 && $time2[$x]==9){
              $thess[6]=$room2[$x];
              $sss[6]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==102 && $time2[$x]==10){
              $thess[7]=$room2[$x];
              $sss[7]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==102 && $time2[$x]==11){
              $thess[8]=$room2[$x];
              $sss[8]=$time2[$x];
            }

            if(!empty($room2) && !empty($time2) && $room2[$x]==103 && $time2[$x]==8){
              $thess[9]=$room2[$x];
              $sss[9]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==103 && $time2[$x]==9){
              $thess[10]=$room2[$x];
              $sss[10]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==103 && $time2[$x]==10){
              $thess[11]=$room2[$x];
              $sss[11]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==103 && $time2[$x]==11){
              $thess[12]=$room2[$x];
              $sss[12]=$time2[$x];
            }

            if(!empty($room2) && !empty($time2) && $room2[$x]==104 && $time2[$x]==8){
              $thess[13]=$room2[$x];
              $sss[13]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==104 && $time2[$x]==9){
              $thess[14]=$room2[$x];
              $sss[14]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==104 && $time2[$x]==10){
              $thess[15]=$room2[$x];
              $sss[15]=$time2[$x];
            }
            if(!empty($room2) && !empty($time2) && $room2[$x]==104 && $time2[$x]==11){
              $thess[16]=$room2[$x];
              $sss[16]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==105 && $time2[$x]==8){
              $thess[17]=$room2[$x];
              $sss[17]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==105 && $time2[$x]==9){
              $thess[18]=$room2[$x];
              $sss[18]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==105 && $time2[$x]==10){
              $thess[19]=$room2[$x];
              $sss[19]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==105 && $time2[$x]==11){
              $thess[20]=$room2[$x];
              $sss[20]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==106 && $time2[$x]==8){
              $thess[21]=$room2[$x];
              $sss[21]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==106 && $time2[$x]==9){
              $thess[22]=$room2[$x];
              $sss[22]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==106 && $time2[$x]==10){
              $thess[23]=$room2[$x];
              $sss[23]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==106 && $time2[$x]==11){
              $thess[24]=$room2[$x];
              $sss[24]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==107 && $time2[$x]==8){
              $thess[25]=$room2[$x];
              $sss[25]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==107 && $time2[$x]==9){
              $thess[26]=$room2[$x];
              $sss[26]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==107 && $time2[$x]==10){
              $thess[27]=$room2[$x];
              $sss[27]=$time2[$x];
            }if(!empty($room2) && !empty($time2) && $room2[$x]==107 && $time2[$x]==11){
              $thess[28]=$room2[$x];
              $sss[28]=$time2[$x];
            }

            }


            ?>
            <!-- to edit table there is four class -empty-not resev and class -resev- to resev times  class -tm- to time in the table
             and class -dd- to room number    -->
             <table class="Tb">
             <tr>
                 <td id="tdb" style="font-size:10pt"><snap style="color:lightgray;font-size:12pt">&#9679;</snap>Available<br><snap style="color:#339999;;font-size:12pt">&#9679;</snap>Unavailable</td>
                <td>
                  <table class="tableR" >
                  <tr>
                    <table >
                      <tr>
                        <td>&nbsp;</td>
                        <td class="tm">8:00-9:00 &nbsp; </td>
                        <td class="tm" >9:00-10:00&nbsp;</td>
                        <td class="tm" >10:00-11:00&nbsp;</td>
                        <td class="tm" >11:00-12:00&nbsp;</td>
                      </tr>
                    <!--room 101-->
                    <tr>
                      <td class="dd">Room_101 &nbsp;</td>
                    <?php for($x = 1; $x<30;$x++):?>
                    <?php switch ($x):
                      case 1:?>
                    <?php if(!empty($thess) && !empty($sss) && $thess[$x]==101 && $sss[$x]==8):?>
                       <td class="resev">&nbsp;</td>
                    <?php else: ?>
                     <td class ="empty" >111</td>
                    <?php endif;?>
                       <?php break;?>
                       <?php case 2: ?>
                      <?php if(!empty($thess) && !empty($sss) && $thess[$x]==101 && $sss[$x]==9):?>
                      <td class="resev">&nbsp;</td>
                    <?php else :?>
                      <td class="empty">112</td>
                    <?php endif;?>
                     <?php break;?>
                     <?php case 3: ?>
                    <?php  if(!empty($thess) && !empty($sss) && $thess[$x]==101 && $sss[$x]==10):?>
                     <td class="resev">&nbsp;</td>
                    <?php else: ?>
                      <td class="empty">113</td>
                    <?php endif; ?>
                      <?php break;?>
                       <?php case 4: ?>
                      <?php if(!empty($thess) && !empty($sss) && $thess[$x]==101 && $sss[$x]==11):?>
                    <td class="resev">&nbsp;</td>
                    <?php else :?>
                      <td class="empty">114</td>
                    </tr>
                    <?php endif; ?>
                        <?php break;?>

                    <!--room 102-->
                         <?php case 5: ?>
                         <tr>
                      <td class="dd">Room_102 &nbsp;</td>
                      <?php if(!empty($thess) && !empty($sss) && $thess[$x]==102 && $sss[$x]==8):?>
                         <td class="resev">&nbsp;</td>
                      <?php else: ?>
                       <td class ="empty" >115</td>
                      <?php endif;?>
                         <?php break;?>
                         <?php case 6: ?>
                        <?php if(!empty($thess) && !empty($sss) && $thess[$x]==102 && $sss[$x]==9):?>
                        <td class="resev">&nbsp;</td>
                      <?php else :?>
                        <td class="empty">116</td>
                      <?php endif;?>
                       <?php break;?>
                       <?php case 7: ?>
                      <?php  if(!empty($thess) && !empty($sss) && $thess[$x]==102 && $sss[$x]==10):?>
                       <td class="resev">&nbsp;</td>
                      <?php else: ?>
                        <td class="empty">117</td>
                      <?php endif; ?>
                        <?php break;?>
                         <?php case 8: ?>
                        <?php if(!empty($thess) && !empty($sss) && $thess[$x]==102 && $sss[$x]==11):?>
                      <td class="resev">&nbsp;</td>
                      <?php else :?>
                        <td class="empty">118</td>
                      <?php endif; ?>
                          <?php break;?>
                        </tr>

                    <!--room 103-->
                        <?php case 9: ?>
                        <tr>
                       <td class="dd" >Room_103 &nbsp;</td>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==103 && $sss[$x]==8):?>
                        <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class ="empty" >119</td>
                       <?php endif;?>
                        <?php break;?>
                        <?php case 10: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==103 && $sss[$x]==9):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">120</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 11: ?>
                       <?php  if(!empty($thess) && !empty($sss) && $thess[$x]==103 && $sss[$x]==10):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class="empty">121</td>
                       <?php endif; ?>
                       <?php break;?>
                        <?php case 12: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==103 && $sss[$x]==11):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">122</td>
                       <?php endif; ?>
                         <?php break;?>
                       </tr>


                    <!--room 104-->
                       <?php case 13: ?>
                       <tr>
                       <td class="dd" >Room_104 &nbsp;</td>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==104 && $sss[$x]==8):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class ="empty" >123</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 14: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==104 && $sss[$x]==9):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">124</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 15: ?>
                       <?php  if(!empty($thess) && !empty($sss) && $thess[$x]==104 && $sss[$x]==10):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class="empty">125</td>
                       <?php endif; ?>
                       <?php break;?>
                       <?php case 16: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==104 && $sss[$x]==11):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">126</td>
                       <?php endif; ?>
                        <?php break;?>
                       </tr>

                       <!--Room 105-->
                       <?php case 17: ?>
                       <tr>
                       <td class="dd" >Room_105 &nbsp;</td>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==105 && $sss[$x]==8):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class ="empty" >127</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 18: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==105 && $sss[$x]==9):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">128</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 19: ?>
                       <?php  if(!empty($thess) && !empty($sss) && $thess[$x]==105 && $sss[$x]==10):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class="empty">129</td>
                       <?php endif; ?>
                       <?php break;?>
                       <?php case 20: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==105 && $sss[$x]==11):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">130</td>
                       <?php endif; ?>
                        <?php break;?>
                       </tr>

                    <!--Room 106-->
                       <?php case 21: ?>
                       <tr>
                       <td class="dd" >Room_106 &nbsp;</td>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==106 && $sss[$x]==8):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class ="empty" >131</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 22: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==106 && $sss[$x]==9):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">132</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 23: ?>
                       <?php  if(!empty($thess) && !empty($sss) && $thess[$x]==106 && $sss[$x]==10):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class="empty">133</td>
                       <?php endif; ?>
                       <?php break;?>
                       <?php case 24: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==106 && $sss[$x]==11):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">134</td>
                       <?php endif; ?>
                        <?php break;?>
                       </tr>

                    <!-- Room 107-->
                       <?php case 25: ?>
                       <tr>
                       <td class="dd" >Room_107 &nbsp;</td>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==107 && $sss[$x]==8):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class ="empty" >135</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 26: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==107 && $sss[$x]==9):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">136</td>
                       <?php endif;?>
                       <?php break;?>
                       <?php case 27: ?>
                       <?php  if(!empty($thess) && !empty($sss) && $thess[$x]==107 && $sss[$x]==10):?>
                       <td class="resev">&nbsp;</td>
                       <?php else: ?>
                       <td class="empty">137</td>
                       <?php endif; ?>
                       <?php break;?>
                       <?php case 28: ?>
                       <?php if(!empty($thess) && !empty($sss) && $thess[$x]==107 && $sss[$x]==11):?>
                       <td class="resev">&nbsp;</td>
                       <?php else :?>
                       <td class="empty">138</td>
                       <?php endif; ?>
                        <?php break;?>
                       </tr>

                    <?php endswitch;?>
                    <?php endfor; ?>

                    </table>
                    <?php
                    if(isset($_POST['sum'])){
                    if($_POST['room_time_id']==111){
                      $romm=101;
                      $timm=8;
                    }elseif($_POST['room_time_id']==112){
                      $romm=101;
                      $timm=9;
                    }elseif($_POST['room_time_id']==113){
                      $romm=101;
                      $timm=10;
                    }elseif($_POST['room_time_id']==114){
                      $romm=101;
                      $timm=11;
                    }elseif($_POST['room_time_id']==115){
                      $romm=102;
                      $timm=8;
                    }elseif($_POST['room_time_id']==116){
                      $romm=102;
                      $timm=9;
                    }elseif($_POST['room_time_id']==117){
                      $romm=102;
                      $timm=10;
                    }elseif($_POST['room_time_id']==118){
                      $romm=102;
                      $timm=11;
                    }elseif($_POST['room_time_id']==119){
                      $romm=103;
                      $timm=8;
                    }elseif($_POST['room_time_id']==120){
                      $romm=103;
                      $timm=9;
                    }elseif($_POST['room_time_id']==121){
                      $romm=103;
                      $timm=10;
                    }elseif($_POST['room_time_id']==122){
                      $romm=103;
                      $timm=11;
                    }elseif($_POST['room_time_id']==123){
                        $romm=104;
                        $timm=8;
                      }elseif($_POST['room_time_id']==124){
                          $romm=104;
                          $timm=9;
                        }elseif($_POST['room_time_id']==125){
                            $romm=104;
                            $timm=10;
                          }elseif($_POST['room_time_id']==126){
                              $romm=104;
                              $timm=11;
                        }elseif($_POST['room_time_id']==127){
                            $romm=105;
                            $timm=8;
                          }elseif($_POST['room_time_id']==128){
                              $romm=105;
                              $timm=9;
                      }elseif($_POST['room_time_id']==129){
                              $romm=105;
                              $timm=10;
                        }elseif($_POST['room_time_id']==130){
                          $romm=105;
                          $timm=11;
                        }elseif($_POST['room_time_id']==131){
                         $romm=106;
                          $timm=8;
                        }elseif($_POST['room_time_id']==132){
                          $romm=106;
                          $timm=9;
                        }elseif($_POST['room_time_id']==133){
                          $romm=106;
                          $timm=10;
                      }elseif($_POST['room_time_id']==134){
                          $romm=106;
                          $timm=11;
                       }elseif($_POST['room_time_id']==135){
                           $romm=107;
                           $timm=8;
                         }elseif($_POST['room_time_id']==136){
                             $romm=107;
                             $timm=9;
                           }elseif($_POST['room_time_id']==137){
                               $romm=107;
                               $timm=10;
                           }elseif($_POST['room_time_id']==138){
                               $romm=107;
                               $timm=11;
                             }else{
                          echo"<p id=\"id_not_correct\">the inserted id is not correct </p>";
                        }
                      }
                        ?>


                    <!--Full Name-->
                   <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
                      <p>
                      <label class="en">Enter reseve id:
                      <input type="text" name="room_time_id" id="en" placeholder="ex.117" required pattern="[1][0-9]{2}"/>
                      </label>
                     </p>
                </td>
              </tr>
             </table>
             <p style="font-family:'Quicksand', sans-serif;font-weight:500;font-size:10pt;text-align:center;color:#a8001f;">Note:all rooms are equipped with white board,projector and for who need<br>  his sheets ready when he arrives..please contant us on our e-mail</p>
            <p>
            <label class="nam">Full Name
            <input name="yname" type="text" placeholder="Frist Name" required class="dis"/>
              <input name="lname" type="text" maxlength="20" placeholder="Last Name" required class="dis"/>
              </label>
            </p>
            <!--Email-->
            <p>
            <label class="nam" style="left:277px;">Email
              <input name="temail" type="email" placeholder="Email Address" required class="dis"/>
            </label>
            </p>
            <p>
            <label class="nam" style="left:205px;">Phone Number
              <input name="telus" type="tel" placeholder="you number" required class="dis"  pattern="[0][5][0-9]{8}"/>
            </label>
            </p>
            <p>
              <input name="cdate" type="hidden" value="<?php echo $Cdate; ?>">
            <input type="submit" value=" Booking now " class="setbutton	" name="sum"/>
            </p>
            </form>


            <!-- go to line 419 -->
            <?php
            $nn=$_POST['yname'];
            $ln=$_POST['lname'];
            $to=$_POST['temail'];
            $tl=$_POST['telus'];
            $dd=$_POST['cdate'];
            $Etim=$timm+1;
            $room_type="indivdual";
            $room_floor="first";

            $from = 'spotlightteams@gmail.com';
            $subject=' Booking informations';


            $sql = "SELECT * FROM reservation WHERE resv_date ='$dd'  AND room_type='indivdual'";
            $result = $conn->query($sql);
            $RoomRsev=0;
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  if( ($row["room_n"]== $romm) && ($row["time_s"]==$timm)){
                  $RoomRsev++;}
                }}
            //from w3school
            if($RoomRsev==0){
            //from w3school
            $msql = $conn->prepare("INSERT INTO reservation ( room_n,room_type,room_floor,resv_date,time_s,time_e,first_name,lastname,email,phone_number) VALUES (?, ?, ?,?,?,?,?,?,?,?)");
            $msql->bind_param("ssssssssss",$romm,$room_type,$room_floor,$dd, $timm,$Etim,$nn,$ln,$to,$tl);
            $msql->execute();
            $last_id = $conn->insert_id; //from w3school
            $c=mysqli_affected_rows($conn);
            if($c>=1){
            echo "<div   >";
            echo "<p id=\"m\"> &#39; Thanks.. " .$nn. " "."  for your reservation with Spotlight & we will send you an email about booking details &#39; </p>";
            echo"</div>";

            $headers = "From: " . $from . "\r\n";
            $headers .="Reply-To: ".$from."\r\n" ;
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = "<html><body>";
            $message .=  "<div></div>";
            $message .= "<div  style=\"font-family:'Quicksand', sans-serif;font-size:40pt;text-align:center;\" > Spotlight</div>";
            $message .= "<div style=\"font-family: 'Raleway', sans-serif;\"><br>Dear"." ".$nn ." ".$ln.","."<br>Thank you...&#9825;  for your reservation in Spotlight we hope you have a good time.<br><br><p style=\"border:1px black dashed;padding:10px;width:300px;\"><strong> Booking informations </strong><br> id is <strong>".$last_id."</strong><br> Room number <strong>".$romm."</strong><br> In the <strong>".$room_floor. "</strong> floor<br>Start at <strong>".$timm.":00</strong>". " and end at <strong> ".$Etim.":00</strong> in <strong>".$dd."</strong></p></div>";
            $message .=  "</body></html>";
            mail($to, $subject,$message,$headers);
               }
            $msql->close();

            }else{
              echo "<p id=\"N_resev\" style=\" position:relative;top:-70px;font-weight:500;font-family:'Quicksand', sans-serif;font-size:11pt;color:#990017;text-align:center;\">
              Sorry ! the Room is reseved...Please try in different (id)</p>";
            }
            $conn->close();
             ?>
      </div>
   </body>

</html>
