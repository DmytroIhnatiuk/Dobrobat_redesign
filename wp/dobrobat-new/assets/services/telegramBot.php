<?php

$token = "5275518058:AAGxIjsv-3wuch0CT4d9AFAoQjd4HvWgu3o";

$chat_id = "-1001530863499";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input = json_decode(file_get_contents("php://input"), true);
  if (!empty($input['name']) && !empty($input['phone']))  {
    if (isset($input['name'])) {
      if (!empty($input['name'])) {
        $name = $input['name'];
        $nameFieldset = "Имя: ";
      }
    }
    if (isset($input['title'])) {
      if (!empty($input['title'])) {
        $title = strip_tags($input['title']);
        $titleFieldset = "Форма: ";
      }
    }
    if (isset($input['email'])) {
      if (!empty($input['email'])) {
        $email = strip_tags($input['email']);
        $emailFieldset = "Email: ";
      }
    }

    if (isset($input['phone'])) {
      if (!empty($input['phone'])) {
        $phone = strip_tags($input['phone']);
        $phoneFieldset = "Телефон: ";
      }
    }
    if (isset($input['region'])) {
      if (!empty($input['region'])) {
        $region = strip_tags($input['region']);
        $regionFieldset = "Область: ";
      }
    }
    if (isset($input['city'])) {
      if (!empty($input['city'])) {
        $city = strip_tags($input['city']);
        $cityFieldset = "Місто: ";
      }
    }
    if (isset($input['src'])) {
      if (!empty($input['src'])) {
      //   function base64_to_jpeg($base64_string, $output_file) {
      //     // open the output file for writing
      //     $ifp = fopen( $output_file, 'wb' ); 
      
      //     // split the string on commas
      //     // $data[ 0 ] == "data:image/png;base64"
      //     // $data[ 1 ] == <actual base64 string>
      //     $data = explode( ',', $base64_string );
      
      //     // we could add validation here with ensuring count( $data ) > 1
      //     fwrite( $ifp, base64_decode( $data[ 1 ] ) );
      
      //     // clean up the file resource
      //     fclose( $ifp ); 
      
      //     return $output_file; 
      // }
        $src = $input['src'];
        $srcFieldset = "photo: ";
      }
    }
    if (isset($input['info'])) {
      if (!empty($input['info'])) {
        $info = strip_tags($input['info']);
        $infoFieldset = "Коментар: ";
      }
    }
 
 
    $arr = array(
      $titleFieldset => $title,
      $nameFieldset => $name,
      $phoneFieldset => $phone,
      $emailFieldset => $email,
      $regionFieldset => $region,
      $cityFieldset => $city,
      $srcFieldset => $src,
      $infoFieldset => $info
    );
    foreach ($arr as $key => $value) {
      $txt .= "<b>" . $key . "</b> " . $value . "%0A";
    };
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
  }
}