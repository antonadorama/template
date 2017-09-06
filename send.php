<?php 

    $to = "antony@adorama.com"; 
    $from = "4antonspam@mail.ru"; 
    $first_name = "Anton";
    $last_name = "Yakuta";
    $subject = "Email Test";
    $subject2 = "";
   
    $content = file_get_contents("http://php-project-antonadorama658454.codeanyapp.com/"); 

    $content = str_replace("'", "\\'", $content);


    $message = $content;
     
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
    $headers .= 'From: <antony@adorama.com>' . "\r\n";

    mail($to,$subject,$message,$headers);
?>    
    



  

    


<html>
<body>
  <div style="margin:20% auto; background-color:#efefef; color:orrange">
    <p style="display: block;margin-left: auto;margin-right: auto;font-size: 2em;text-align: center;line-height: 40px;width: 500px;line-height: 2em;color: coral;">
      <?php echo "Mail Sent. Thank you " . $first_name . ", <br />Have a nice day!. <br /> Page will be closed in 5 seconds"; ?>
    </p>
  </div>
  <script type="text/javascript">setTimeout("window.close();", 3000);</script>
</body>
</html>