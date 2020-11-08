<?php
    $name = $_POST['name'];
    $vis_email = $_POST['email'];
    $number = $_POST['telefon'];
    $firma = $_POST['firma'];
    $nachricht = $_POST['nachricht'];

    $email_from = 'maxihenri03@gmail.com';
    $email_subject = 'Neue Nachricht von ihrer Website';

    $email_body = "Name der Person: $name.\n".
                    "Emailadresse: $vis_email.\n".
                        "Nachricht: $nachricht.\n"

    $to = "maxihenri03@gmail.com";
    
    $headers = "Von $email_from \r\n";
    $headers .= "Antworten an: $vis_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: Index.html");
    
?>