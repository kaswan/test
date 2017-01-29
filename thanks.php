<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/validate.js"></script>
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/form-basic.css">   
</head>
<body>

<?php        
$topic_detail = $_POST['topic_detail'];
$name = $_POST['last_name'] . "" .  $_POST['first_name'] ;
$name_kana = $_POST['last_name_kana'] . "" .  $_POST['first_name_kana'] ;        
$date_of_birth = $_POST['year'] . "年" . $_POST['month'] . "月" . $_POST['day'] . '日';
$gender = $_POST['gender'];        
$address = "〒".$_POST['zip'] . " " . $_POST['address_city'] . " " . $_POST['address_building'];
$phone = $_POST['phone'];
$email = $_POST['email'];

mb_language('ja');
mb_internal_encoding('UTF-8');
$headers = "From: zenrousai_book@lancers.co.jp";
$subject = "申込みがありました";
$body=<<< EOT

■お名前: $name

■お名前(フリガナ): $name_kana

■生年月日: $date_of_birth

■性別: $gender

■ご住所: $address

■お電話番号: $phone

■メールアドレス: $email

EOT;

mb_send_mail('ogiu.keita@lancers.co.jp,zenrousai_book@lancers.co.jp,kan.funchoru@lancers.co.jp', $subject, $body, $headers);

?>

<header class="header">
  <div class="header_container">
  <h3><img src="images/cont00_ttl.png" alt="Lancersとこくみん共済は、フリーランス・個人事業主の方の味方です。"></h3>
  </div>
</header>
  
<div class="container-fluid text-center" style="height: 800px; max-height:100%">    
  <div class="row content">    
    <div class="col-sm-12 "> 
      <div class="form-title-row"></div>
      
      <h2>お申し込みいただき、誠にありがとうございます。</h2>  
     
      
    </div>
    
  </div>
</div>

</body>
</html>
