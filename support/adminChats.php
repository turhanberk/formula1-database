<?php
    session_unset(); 
    session_start();
    $URL = "https://formula1-support-default-rtdb.europe-west1.firebasedatabase.app/Chats.json";

    if(isset($_POST['message_input'])){
        $_SESSION['name_input'] = $_POST['name_input'];      
        $_SESSION['email_input'] = $_POST['email_input'];
        $_SESSION['subject_input'] = $_POST['subject_input'];
        $_SESSION['message_input'] = $_POST['message_input'];
        $_SESSION['category_input'] = $_POST['category_input'];
    }

    header("refresh: 20");

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
    
    function send_msg($msg, $name, $subject, $mail, $ctg) { 
        date_default_timezone_set('Europe/Istanbul');
        global $URL;
        $ch = curl_init();
        $msg_json = new stdClass();
        $msg_json->msg = $msg;
        $msg_json->subject = $subject;
        $msg_json->name = $name;
        $msg_json->mail = $mail;
        $msg_json->ctg = $ctg;
        $msg_json->time = date("Y-m-d H:i:s");
        $encoded_json_obj = json_encode($msg_json); 
        curl_setopt_array($ch, array(CURLOPT_URL => $URL,
                                    CURLOPT_POST => TRUE,
                                    CURLOPT_RETURNTRANSFER => TRUE,
                                    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
                                    CURLOPT_POSTFIELDS => $encoded_json_obj ));
        $response = curl_exec($ch); 
        
        return $response;
    }

    if (isset($_POST['message_input'])){
        $user_name = $_POST['name_input'];
        $user_mail = $_POST['email_input'];
        $user_subject = $_POST['subject_input'];
        $user_msg = $_POST['message_input'];
        $user_ctg = $_POST['category_input'];
        send_msg($user_msg, $user_name, $user_subject, $user_mail, $user_ctg);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>CHAT</title>
  <link rel="stylesheet" href="../css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
@import url(https://fonts.googleapis.com/css?family=Orbitron:700);
</style>
<div class="menu">
<div class="back" onclick="window.location.href = 'adminPage.php'"><i class="fa fa-chevron-left"></i> <img src="https://imgresizer.eurosport.com/unsafe/1200x1200/smart/filters:format(jpeg)/origin-imgresizer.eurosport.com/2016/09/08/1928257-40560625-2560-1440.jpg" draggable="false"/></div>
<div class="name">User</div>
<div class="last">No, Mikey that was so not right!</div>
</div>
<ol class="chat">
<?php
    $msg_res_json = get_messages();
    $keys = array_keys($msg_res_json);
    for ($i = 0; $i < count($keys); $i++){
        $chat_msg = $msg_res_json[$keys[$i]];
        $name = $chat_msg['name'];
        $msg = $chat_msg['msg'];
        $time = $chat_msg['time'];
        $mail = $chat_msg['mail'];
        $subject = $chat_msg['subject'];
        $category = $chat_msg['ctg'];
        if ($name == 'admin') {
            $from = 'self';
        } else {
            $from = 'other';
        }
if (isset($_POST['email_input'])){
    if ($mail == $_POST['email_input'] and $subject == $_POST['subject_input'] and $category == $_POST['category_input']) {
       echo ' <li class="'.$from.'">
       <div class="avatar">';

       if($name == "admin"){
        echo '<img src="https://static.wixstatic.com/media/4a491b_4a34f254858244f1919cb072bc89aba6~mv2.jpg/v1/fill/w_1723,h_1723,al_c,q_85/4a491b_4a34f254858244f1919cb072bc89aba6~mv2.jpg" draggable="false"/>';
       }
       else{
        echo '<img src="https://imgresizer.eurosport.com/unsafe/1200x1200/smart/filters:format(jpeg)/origin-imgresizer.eurosport.com/2016/09/08/1928257-40560625-2560-1440.jpg" draggable="false"/>';
       }
        echo '</div>
                <div class="msg">
                    <p><b>'.$name.'</b></p>
                    <p>'.$msg.'</p>
                    <time>'.$time.'</time>
                </div>
            </li>';
        }
    }
else
{
    if ($mail == $_SESSION['email_input'] and $subject == $_SESSION['subject_input'] and $category == $_SESSION['category_input']) {
        echo ' <li class="'.$from.'">
        <div class="avatar">';

        if($name == "admin"){
            echo '<img src="https://static.wixstatic.com/media/4a491b_4a34f254858244f1919cb072bc89aba6~mv2.jpg/v1/fill/w_1723,h_1723,al_c,q_85/4a491b_4a34f254858244f1919cb072bc89aba6~mv2.jpg" draggable="false"/>';
           }
           else{
            echo '<img src="https://imgresizer.eurosport.com/unsafe/1200x1200/smart/filters:format(jpeg)/origin-imgresizer.eurosport.com/2016/09/08/1928257-40560625-2560-1440.jpg" draggable="false"/>';
           }             
           echo '</div>
                 <div class="msg">
                     <p><b>'.$name.'</b></p>
                     <p>'.$msg.'</p>
                     <time>'.$time.'</time>
                 </div>
             </li>';
         }
}
}
if (isset($_POST['email_input'])){
    echo '
</ol>

<script>
$("#mydiv").scrollTop(function() { return this.scrollHeight; });
</script>

<form name="form" action = "adminChats.php" method="POST">
    <input name="message_input" id="message_input" class="textarea" type="text" placeholder="Type here!"/>
    <input type="hidden" id="email_input" name="email_input" value="'.$_POST['email_input'].'">
    <input type="hidden" id="name_input" name="name_input" value="admin">
    <input type="hidden" id="subject_input" name="subject_input" value="'.$_POST['subject_input'].'">
    <input type="hidden" id="category_input" name="category_input" value="'.$_POST['category_input'].'">
    <input type="submit" style="display: none" />
</form>
';
}

else{
    echo '
</ol>
<form name="form" action = "adminChats.php" method="POST">
    <input name="message_input" id="message_input" class="textarea" type="text" placeholder="Type here!"/>
    <input type="hidden" id="email_input" name="email_input" value="'.$_SESSION['email_input'].'">
    <input type="hidden" id="name_input" name="name_input" value="admin">
    <input type="hidden" id="subject_input" name="subject_input" value="'.$_SESSION['subject_input'].'">
    <input type="hidden" id="category_input" name="category_input" value="'.$_SESSION['category_input'].'">
    <input type="submit" style="display: none" />
</form>
';
}
?>
<script>
$('html,body').animate({scrollTop: 999999999999999999999999999999});
</script>


