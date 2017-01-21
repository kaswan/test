<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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
    <div class="col-sm-12 "> 
      <div class="form-title-row"></div>
      
      <form class="cmxform form-basic" id="commentForm" method="POST" action="confirm.php">            

            <div class="form-row">
                <label>
                    <div class="col-sm-4 "><span><spam class="req">必須</spam> お名前／漢字（全角）</span></div>

                    <div class="col-sm-4 ">
                       <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">姓　</div>
                        <input type="text" name="last_name" placeholder="例）全労済" onfocus="this.placeholder = ''" onblur="this.placeholder = '例）全労済'" required value="<?php echo($_POST['last_name'])?>"   />
                       </div>
                       <label style="margin-left:58px;" for="last_name" class="error"></label>
                    </div>
                    
                    <div class="col-sm-4 ">
                       <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">名　</div>
                        <input type="text" name="first_name" placeholder="例）太郎" onfocus="this.placeholder = ''" onblur="this.placeholder = '例）太郎'" required value="<?php echo($_POST['first_name'])?>"   />
                        
                        </div>
                        <label style="margin-left:58px;" for="first_name" class="error"></label>
                    </div>
                    
                </label>
            </div>

            <div class="form-row">
                <label>
                    <div class="col-sm-4 "><span><spam class="req">必須</spam> お名前／フリガナ（全角カナ）</span></div>
                    
                    <div class="col-sm-4 ">
                       <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">セイ</div>
                        <input type="text" name="last_name_kana" placeholder="例）ゼンロウサイ" onfocus="this.placeholder = ''" onblur="this.placeholder = '例）ゼンロウサイ'" required value="<?php echo($_POST['last_name_kana'])?>"  />
                       </div>
                       <label style="margin-left:58px;" for="last_name_kana" class="error"></label> 
                    </div>
                    
                    <div class="col-sm-4 ">
                       <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">メイ</div>
                        <input type="text" name="first_name_kana" placeholder="例）タロウ" onfocus="this.placeholder = ''" onblur="this.placeholder = '例）タロウ'" required value="<?php echo($_POST['first_name_kana'])?>"   />
                       </div>
                       <label style="margin-left:58px;" for="first_name_kana" class="error"></label>
                    </div>
                </label>
            </div>
            
            <div class="form-row">
                <div class="custom-div">
                    <div class="col-sm-4 "><span><spam class="req">必須</spam> 生年月日</span></div>
                    <div class="col-sm-8 ">
                    <select name="year" class="dob">
                        <option>お選びください</option>
                        <?php for($i=date("Y")-15; $i > 1950; $i--) { ?>
                          <option value="<?php echo $i ?>" <?php if($i == $_POST['year']) echo "selected" ?> ><?php echo $i ?></option>
                        <?php } ?>
                    </select>年
                    <select name="month" class="dob">
                        <option>--</option>
                        <?php for($i=1; $i <= 12; $i++) { ?>
                          <option value="<?php echo $i ?>" <?php if($i == $_POST['month']) echo "selected" ?> ><?php echo $i ?></option>
                        <?php } ?>
                    </select>月
                    <select name="day" class="dob">
                        <option>--</option>
                        <?php for($i=1; $i <= 31; $i++) { ?>
                          <option value="<?php echo $i ?>" <?php if($i == $_POST['day']) echo "selected" ?> ><?php echo $i ?></option>
                        <?php } ?>
                    </select>日
                      <span style="display:none;">
                        <label for="year" class="error" ></label>
                        <label for="day" class="error" style="display:none;"></label>
                        <label for="month" class="error" style="display:none;"></label>
                      </span>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <div class="custom-div">
                    <div class="col-sm-4 "><span><spam class="req">必須</spam> 性別</span></div>
                   
                    <div class="col-sm-8 "><label class="rdo"><input type="radio" name="gender" value="男性" <?php if($_POST['gender'] == '男性') echo 'checked'?>> 男性</label>
                    <label class="rdo"><input type="radio" name="gender" value="女性" <?php if($_POST['gender'] == '女性') echo 'checked'?>> 女性</label>
                     <label for="gender" class="error"></label>
                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <label>
                    <div class="col-sm-4 "><span><spam class="req">必須</spam> ご住所／漢字（全角）</span></div>
                    <div class="col-sm-8 ">
                    〒<input type="text" name="zip" class="zip" placeholder="例）101-0025" onfocus="this.placeholder = ''" onblur="this.placeholder = '例）101-0025'" required value="<?php echo($_POST['zip'])?>" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','prefecture','address_city');"></div>
                    <div class="col-sm-4 "></div>
                    <div class="col-sm-8 ">
                    <?php $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','山梨県','長野県','新潟県','富山県','石川県','福井県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県')?>
                      <select name="prefecture" id="area" class="pref">
                        <option value="">お選び下さい</option>
                        <?php foreach($prefectures as $pref) { ?>
                          <option value="<?php echo $pref ?>" <?php if($pref == $_POST['prefecture']) echo "selected" ?>><?php echo $pref ?></option>
                        <?php } ?>
                      </select>
                      
                    </div>  
                    <div class="col-sm-4 "></div>
                    <div class="col-sm-8 ">
                      <p class="adr_label">市区町村名</p>
                      <input type="text" name="address_city" placeholder="例）渋谷区代々木" onfocus="this.placeholder = ''" onblur="this.placeholder = '例）渋谷区代々木'" required value="<?php echo($_POST['address_city'])?>" class="address">
                      <label for="address_city" class="error"></label>
                    </div>
                    <div class="col-sm-4 "></div>
                    <div class="col-sm-8 ">
                       <p class="adr_label">番地・ビル・マンション名</p>
                       <input type="text" name="address_building" placeholder="例）９－８－７労済ビル１０１号室" onfocus="this.placeholder = ''" onblur="this.placeholder = '例）９－８－７労済ビル１０１号室'" required value="<?php echo($_POST['address_building'])?>" class="address">
                       <label for="address_building" class="error"></label>
                    </div>
                </label>
            </div>

            <div class="form-row">
                <div class="custom-div">
                    <div class="col-sm-4 "> <span><spam class="req">必須</spam> 電話番号（半角数字）</span></div>
                    <div class="col-sm-8 ">
                      <input type="text" name="phone" placeholder="03-1111-1111" onfocus="this.placeholder = ''" onblur="this.placeholder = '03-1111-1111'" required value="<?php echo($_POST['phone'])?>" class="tel">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <label>
                    <div class="col-sm-4 "> <span><spam class="req">必須</spam> メールアドレス（半角英数字）</span></div>
                    <div class="col-sm-8 "><input type="email" name="email" placeholder="zenrosai-tarou@zenrosai.ne.jp" onfocus="this.placeholder = ''" onblur="this.placeholder = 'zenrosai-tarou@zenrosai.ne.jp'" required value="<?php echo($_POST['email'])?>" class=""></div>
                </label>
                </label>
            </div>

            <div class="form-row">                
                <center><input type="submit" id="confirm" name="submit" value="確認する" class="btn btn-success btn-lg"></center>
            </div>

        </form>
    </div>
    
  </div>
</div>

</body>
</html>
