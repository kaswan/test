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

<header class="header">
  <div class="header_container">
  <h3><img src="images/cont00_ttl.png" alt="Lancersとこくみん共済は、フリーランス・個人事業主の方の味方です。"></h3>
  </div>
</header>
  
<div class="container-fluid text-center">    
  <div class="row content">    
      <div class="col-sm-2 "> </div>
      <div class="form-title-row"></div>
      <div class="col-sm-8 text-left"> 
      <form class="cmxform form-basic" id="commentForm" method="post" action="thanks.php">
        <table class="table table-bordered text-left">
          <tbody>
            <tr>
              <th class="col-md-4"><span class="req">必須</span>お名前／漢字</th>
              <td>
                 <?php echo $_POST['last_name'] . " " . $_POST['first_name'] ?>
              </td>
            </tr>
            <tr>
              <th><span class="req">必須</span>お名前／フリガナ</th>
              <td>
                 <?php echo $_POST['last_name_kana'] . " " . $_POST['first_name_kana'] ?>
              </td>
            </tr>
            <tr>
              <th><span class="req">必須</span>生年月日</th>
              <td>
                 <?php echo $_POST['year'] . "年" . $_POST['month'] . "月" . $_POST['day'] . '日' ?>
              </td>
            </tr>

            <tr>
              <th><span class="req">必須</span>性別</th>
              <td>
                 <?php echo $_POST['gender'] ?>
              </td>
            </tr>

            <tr>
              <th><span class="req">必須</span>ご住所</th>
              <td>
              〒<?php echo $_POST['zip'] ?><br>
              <?php echo $_POST['prefecture'] . $_POST['address_city'] . $_POST['address_building'] ?>
              </td>
            </tr>


            <tr>
              <th><span class="req">必須</span>お電話番号</th>
              <td>
              <?php echo $_POST['phone'] ?>
              </td>
            </tr>
            <tr>
              <th><span class="req">必須</span>メールアドレス</th>
              <td>
              <?php echo $_POST['email'] ?>
              </td>
            </tr>
          </tbody>
        </table>
        
       
        <input type='hidden' name='last_name' value='<?php echo $_POST['last_name'] ?>'/>
        <input type='hidden' name='first_name' value='<?php echo $_POST['first_name'] ?>'/>
        <input type='hidden' name='last_name_kana' value='<?php echo $_POST['last_name_kana'] ?>'/>
        <input type='hidden' name='first_name_kana' value='<?php echo $_POST['first_name_kana'] ?>'/>
        <input type='hidden' name='year' value='<?php echo $_POST['year'] ?>'/>
        <input type='hidden' name='month' value='<?php echo $_POST['month'] ?>'/>
        <input type='hidden' name='day' value='<?php echo $_POST['day'] ?>'/>
        <input type='hidden' name='gender' value='<?php echo $_POST['gender'] ?>'/>        
        <input type='hidden' name='zip' value='<?php echo $_POST['zip'] ?>'/>
        <input type='hidden' name='prefecture' value='<?php echo $_POST['prefecture'] ?>'/>
        <input type='hidden' name='address_city' value='<?php echo $_POST['address_city'] ?>'/>
        <input type='hidden' name='address_building' value='<?php echo $_POST['address_building'] ?>'/>
        <input type='hidden' name='phone' value='<?php echo $_POST['phone'] ?>'/>
        <input type='hidden' name='email' value='<?php echo $_POST['email'] ?>'/>


        <div class="form-row">
          <center>
            <input class="submit btn btn-lg btn-warning" type="submit" id="back" value="入力画面に戻る " data-action="entry.php#form" >
            <input class="submit btn btn-lg btn-success" type="submit" id="send" value="送信する" data-action="thanks.php" >
          </center>
        </div>
      </form>

      
    </div>
    
    <div class="col-sm-2 "> </div>
  </div>
</div>

<footer class="container-fluid text-center"></footer>
<script>

  $('.submit').click(function() {
    $(this).parents('form').attr('action', $(this).data('action'));
    $(this).parents('form').submit();
  });

  $(function() {
    /* move to page top */
    var pageTop = $('.pagetop');
    pageTop.hide();
    $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
    pageTop.fadeIn();
    } else {
    pageTop.fadeOut();
    }
    });
  });

</script>
</body>
</html>
