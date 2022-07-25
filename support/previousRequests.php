<!DOCTYPE html>
<html>
<head>
<title>PREVIOUS REQUESTS</title>
<link rel="stylesheet" href="../css/previousReq.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
@import url(https://fonts.googleapis.com/css?family=Orbitron:700);
@font-face {
    font-family: "Formula1-Display-Bold";
    src: url("../fonts/Formula1-Bold.woff") format("woff");
    }

    @font-face {
    font-family: "Formula1-Display-Regular";
    src: url("../fonts/Formula1-Regular.woff") format("woff");
    }
</style>
</head>
<body>
<div id="goback"> 
    <svg onclick="window.location.href = 'supportPage.php'" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80%" x="0px" y="0px" viewBox="0 0 221.2 39.4" style="enable-background:new 0 0 221.2 39.4;" xml:space="preserve"> <style type="text/css"> .st0{fill:#FFFFFF;} .st1{font-family:'Formula1-Display-Bold';} .st2{font-size:29px;} .st3{font-size:37px;} #Layer_1{cursor: pointer;} </style> <text transform="matrix(1 0 0 1 19.0044 28.4741)" class="st0 st1 st2">GO BACK</text> <text transform="matrix(1 0 0 1 -2.098083e-04 32.3751)" class="st0 st1 st3">&lt;</text> </svg>
</div> 
<p class = "dbInfo" style = "font-size:25px;font-weight:200;top:15px;left:268px;position:absolute;word-break:normal;">&nbsp;Please enter your name and e-mail to see your requests and chat with our technical crew!</p>

<div id="container">
  <form action="previousRequests.php" method="POST">

    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="My name is" name="name_input" id="name_input" required>
    </div>

    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="My e-mail is" name="email_input" id="email_input" required>
    </div>

    <div class="submit">
      <input type="submit" value="Bring my help requests!" id="form_button" />
    </div>
    
  </form><!-- // End form -->
</div><!-- // End #container -->

<div align="center" class="table-container">

<table>

<thead> 
<tr> <th style="width:20%"> Message Owner </th> <th> Category </th> <th> Subject </th> <th style="width:15%">Date/Time</th> <th style="width:5%">Chat</th> </tr> 
</thead>
<tbody>

<?php
$URL = "https://formula1-support-default-rtdb.europe-west1.firebasedatabase.app/Chats.json";

function get_messages() { 
    global $URL;
    $ch = curl_init();
    curl_setopt_array($ch, [CURLOPT_URL => $URL,
                            CURLOPT_POST => FALSE, // It will be a get request 
                            CURLOPT_RETURNTRANSFER => true, ]);
    $response = curl_exec($ch); 
    curl_close($ch);
    return json_decode($response, true); 
}
if (isset($_POST['name_input'])) 
{
    $msg_res_json = get_messages();
    if ($msg_res_json != null){
    $keys = array_keys($msg_res_json);
    $already_exists = array();
    for ($i = 0; $i < count($keys); $i++){
        $chat_msg = $msg_res_json[$keys[$i]];
        $name = $chat_msg['name'];
        $msg = $chat_msg['msg'];
        $time = $chat_msg['time'];
        $mail = $chat_msg['mail'];
        $subject = $chat_msg['subject'];
        $category = $chat_msg['ctg'];
        $category_and_subject = [$category, $subject];
        if ($name == $_POST['name_input'] and $mail == $_POST['email_input'] and !in_array($category_and_subject, $already_exists)) {
            echo "<tr>" . '<td style="width:20.5%">' . $name . "</td>" . "<td>" . $category . "</td>" . "<td>" . $subject . "</td>" . '<td style="width:15.5%">' . $time . "</td>" . '<td style="width:5.5%">' . '<form style=" padding:0px;margin-top:0px;margin-left:15px;" action="chats.php" method="POST"> <button name="email_input" value="'.$mail.'">↵</button> <input type=hidden name="subject_input" value="'.$subject.'"> <input type=hidden name="category_input" value="'.$category.'"> <input type=hidden name="name_input" value="'.$name.'"> <input type=hidden name="sender_input" value="'.$name.'"></form>' . "</td>" ."</tr>";
            array_push($already_exists, $category_and_subject);
        }
    }
  }
}
?>

</tbody>
</table>
</div>


</body>
</html>
