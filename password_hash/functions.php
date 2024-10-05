<?php
function verifyRecaptcha($recaptcha_response) {
    global $recaptcha_secret_key;
    $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$recaptcha_secret_key.'&response='.$recaptcha_response);
    $response_data = json_decode($verify_response);
    return $response_data->success;
}
?>
