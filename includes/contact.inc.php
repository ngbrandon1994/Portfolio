<?php
    if(isset($_POST['contact-submit']) && $_POST['contact-submit'] == 'SEND'){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $msg = htmlspecialchars($_POST['message']);
        $error = false;
        $contactFormArray = array(
            "name" => array("error" => false, "msg"=> ""),
            "email" => array("error" => false, "msg"=> ""),
            "msg" => array("error" => false, "msg"=> ""),
            "status" => "Success",
            "complete" => false
        );

        //ensure only functions used for validation are hidden from visible named php files
        require $_SERVER['DOCUMENT_ROOT'].'/includes/functions.inc.php';
    
        if(isEmptyInput($name) != false){
            $contactFormArray['name']['error'] = true;
            $contactFormArray['name']['msg'] = "Enter your name!";
            $error = true;
        } else if(isValidName($name) != true){
            $contactFormArray['name']['error'] = true;
            $contactFormArray['name']['msg'] = "Invalid Name!";
            $error = true;
        } else if(incorrectStrLength($name, 50, 3) != false){
            $contactFormArray['name']['error'] = true;
            $contactFormArray['name']['msg'] = "Please enter your Full Name!";
            $error = true;
        }
    
        if(isEmptyInput($email) != false){
            $contactFormArray['email']['error'] = true;
            $contactFormArray['email']['msg'] = "Please enter your email address for me to contact you!";
            $error = true;
        } else if(isValidateEmail($email) != true){
            $contactFormArray['email']['error'] = true;
            $contactFormArray['email']['msg'] = "Invalid Email Address!";
            $error = true;
        } 
    
        if(isEmptyInput($msg) != false){
            $contactFormArray['msg']['error'] = true;
            $contactFormArray['msg']['msg'] = "Message cannot be empty!";
            $error = true;
        }else if(incorrectStrLength($msg, 2000) != false){
            $contactFormArray['msg']['error'] = true;
            $contactFormArray['msg']['msg'] = "Message must be between 5 and 2000 characters!";
            $error = true;
        }   
    
        if($error != true){
            $to = mailTo();
            $subject = 'Contact Form Submission From ngbrandon.com';
            $message = '<p> Website: ngbrandon.com <br><br><br>Name:</br>'.$name.'<br><b>Email:</b>'.$email.'<br><b>Message:</b>'.$msg.'<br><br> </p>';
            
            $headers = "From: ngbrandon.com <".mailSender().">\r\n";
            $headers .= "Reply-To: ".mailSender()."\r\n";
            $headers .= "Content-type: text/html\r\n";
            
            $success = mail($to, $subject, $message, $headers, "-f ".mailSender());
            
            if($success == true){
                echo "Email was sent!";
            } else {
                echo "Email failed server error, please try again later!";
            }
            echo "<script  type='text/javascript'>";
            echo "$('.name .line, .email .line, .textarea .line').removeClass('is-invalid');";
            echo "$('.formResults').removeClass('success, warning');";
            echo "$('.invalidNameFeedback, .invalidEmailFeedback, .invalidMsgFeedback').html('');";
            if($success == true){
                echo "$('.formResults').addClass('success');";
            } else {
                echo "$('.formResults').addClass('warning');";
            }
            echo "</script>";
        } else if($error == true) {
            echo "<script  type='text/javascript'>";
            echo "$('.name .line, .email .line, .textarea .line').removeClass('is-invalid');";
            echo "$('.invalidNameFeedback, .invalidEmailFeedback, .invalidMsgFeedback').html('');";
            if($contactFormArray['name']['error'] == true){
                echo "$('.name .line').addClass('is-invalid');";
                echo "$('.invalidNameFeedback').html('".$contactFormArray['name']['msg']."');";
            }
            if($contactFormArray['email']['error'] == true){
                echo "$('.email .line').addClass('is-invalid');";
                echo "$('.invalidEmailFeedback').html('".$contactFormArray['email']['msg']."');";
            }
            if($contactFormArray['msg']['error'] == true){
                echo "$('.textarea .line').addClass('is-invalid');";
                echo "$('.invalidMsgFeedback').html('".$contactFormArray['msg']['msg']."');";
            }
            echo "$('.formResults').html('')";
            echo "</script>";
        }
    } else {
        http_response_code(401);
        include($_SERVER['DOCUMENT_ROOT'].'/error/403.php');
        exit();
    }
  
?>