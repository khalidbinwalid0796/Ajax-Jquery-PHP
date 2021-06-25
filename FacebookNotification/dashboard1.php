<?php
include('database.inc.php');
session_start();

$res_message=mysqli_query($con,"select * from product where quantity<10");
$unread_count=mysqli_num_rows($res_message);

?>
<!doctype html> 
<html>
   <head>
      <title>Facebook type Notifications system using PHP and Ajax</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <style>
         ul {
         display:block;
         background:#45619D;
         list-style:none;
         margin:0;
         padding:12px 10px;
         height:45px;
         }
         ul li {
         float:left;
         font:13px helvetica;
         margin:3px 0;
         }
         ul li a {
         color:#FFF;
         text-decoration:none;
         padding:6px 15px;
         cursor:pointer;
         }
         ul li a:hover {
         background:#425B90;
         text-decoration:none;
         cursor:pointer;
         }
         .text-info {
         color: #000 !important;
         }
         #post .container #post-row #post-column #post-box {
         margin-top: 120px;
         max-width: 600px;
         height: 360px;
         border: 1px solid #9C9C9C;
         background-color: #fff;
         }
         #post .container #post-row #post-column #post-box #post-form {
         padding: 20px;
         }
         #post .container #post-row #post-column #post-box #post-form #register-link {
         margin-top: -85px;
         }    
         .container h2{
         margin-bottom:25px;
         }
         #notification_box{
         margin-bottom:10px;
         }
         #notifications_container {
         position:relative;
         }
         #notifications_button {
         width:22px;
         height:22px;
         line-height:22px;
         border-radius:50%;
         -moz-border-radius:50%; 
         -webkit-border-radius:50%;
         margin:-3px 10px 0 10px;
         cursor:pointer;
         }
         #notifications_counter {
         display:block;
         position:absolute;
         background:#E1141E;
         color:#FFF;
         font-size:12px;
         font-weight:normal;
         padding:1px 3px;
         margin:-8px 0 0 25px;
         border-radius:2px;
         -moz-border-radius:2px; 
         -webkit-border-radius:2px;
         z-index:1;
         }
         #notifications {
         display:none;
         width:430px;
         position:absolute;
         top:30px;
         left:0;
         background:#FFF;
         border:solid 1px rgba(100, 100, 100, .20);
         -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
         z-index: 0;
         }
         #notifications:before {         
         content: '';
         display:block;
         width:0;
         height:0;
         color:transparent;
         border:10px solid #CCC;
         border-color:transparent transparent #FFF;
         margin-top:-20px;
         margin-left:10px;
         }
         h3 {
         display:block;
         color:#333; 
         background:#FFF;
         font-weight:bold;
         font-size:13px;    
         padding:8px;
         margin:0;
         border-bottom:solid 1px rgba(100, 100, 100, .30);
         }
         #notifications_button .notifications_bell{
         background-image: url("https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/yMI3kaj_lht.png");
         background-repeat: no-repeat;
         background-size: auto;
         background-position: 0 -712px;
         height: 24px;
         width: 24px;
         }
         #show_notification p{
         margin-left:10px;
       margin-top:10px;
         }
      </style>
   </head>
   <body style="margin:0;padding:0;">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <div id="notification_box">
         <ul>
            <li id="notifications_container">
               <div id="notifications_counter"><?php echo $unread_count?></div>
               <div id="notifications_button">
                  <div class="notifications_bell white"></div>
               </div>
               <div id="notifications">
                  <h3>Notifications</h3>
                  <div style="height:300px;" id="show_notification">
               <?php if($unread_count>0){
                  while($row_message=mysqli_fetch_assoc($res_message)){?>
                     <p>Name <strong><?php echo $row_message['name']?></strong> </p>
                     <p>Quantity <strong><?php echo $row_message['quantity']?></strong> </p>
                     <p>Price <strong><?php echo $row_message['price']?></strong> </p>
                <?php } } ?>
                  </div>
               </div>
            </li>
         <li id="notifications_container"><a href="logout.php">Logout</a></li>
         </ul>
      </div>

   </body>
   <script>
      $(document).ready(function () {
          $('#notifications_button').click(function () {
              jQuery.ajax({
              //url:'update_message_status.php',
            success:function(){
               $('#notifications').fadeToggle('fast', 'linear');
               $('#notifications_counter').fadeOut('slow');
            }
           })
              return false;
          });
          $(document).click(function () {
              $('#notifications').hide(); 
          });
      });
   </script>
</html>