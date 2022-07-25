<!DOCTYPE html>
<html>
<head>
<title>ADMIN PAGE</title>
<link rel="stylesheet" href="../css/adminPage.css">
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

<p class = "dbInfo" style = "font-size:50px;font-weight:700;top:-40px;left:35%;position:absolute;word-break:normal;">&nbsp;ADMIN PAGE</p>

<p class = "dbInfo" style = "font-size:25px;font-weight:200;top:55px;left:215px;position:absolute;word-break:normal;">&nbsp;Welcome to the admin page! Here you can see all support requests and chat with users to help them!</p>

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
        if (!in_array($category_and_subject, $already_exists)) {
            echo "<tr>" . '<td style="width:20.5%">' . $name . "</td>" . "<td>" . $category . "</td>" . "<td>" . $subject . "</td>" . '<td style="width:15.5%">' . $time . "</td>" . '<td style="width:5.5%">' . '<form style=" padding:0px;margin-top:0px;margin-left:15px;" action="adminChats.php" method="POST"> <button name="email_input" value="'.$mail.'">↵</button> <input type=hidden name="subject_input" value="'.$subject.'"> <input type=hidden name="category_input" value="'.$category.'"> <input type=hidden name="name_input" value="'.$name.'"> <input type=hidden name="sender" value="admin"></form>' . "</td>" ."</tr>";
            array_push($already_exists, $category_and_subject);
        }
    }
    }
?>

</tbody>
</table>
</div>

</body>
</html>
