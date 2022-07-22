<?php

    $URL = "https://formula1-support-default-rtdb.europe-west1.firebasedatabase.app/Chats.json";
 
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
                                    CURLOPT_HTTPHEADER => array('Content-Type: application/json' ),
                                    CURLOPT_POSTFIELDS => $encoded_json_obj ));
        $response = curl_exec($ch); 
        
        return $response;
    }

    if (isset($_POST['name_input'])) {
        $user_name = $_POST['name_input'];
        $user_mail = $_POST['email_input'];
        $user_subject = $_POST['subject_input'];
        $user_msg = $_POST['message_input'];
        $user_ctg = $_POST['category_input'];
        send_msg($user_msg, $user_name, $user_subject, $user_mail, $user_ctg);
        session_start();
        $_SESSION['name_input'] = $_POST['name_input'];      
        $_SESSION['email_input'] = $_POST['email_input'];
        $_SESSION['subject_input'] = $_POST['subject_input'];
        $_SESSION['message_input'] = $_POST['message_input'];
        $_SESSION['category_input'] = $_POST['category_input'];
        echo '<script> window.location.href="chats.php";</script>';
    }
    ?>