
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>vCard產生器</title>
  <?php
  session_start();
  //if
  //if(!empty($_SESSION['log']))header('location:preview.php');
  ?>
  <style>
  body{
    background-color: #fff1eb;
  }
  .main {
    background: radial-gradient(ellipse,#fff1eb, #ace0f9);
    border-radius: 6rem;
    margin:10% auto;
    text-align: center;
    width: 600px;
  }
  .data {
    
    text-align: left;
    padding: 0 3rem 3rem 3rem;
    border: none;
    margin-bottom: 20px;
  }
</style>
</head>
<body>
  



<div class="main">
  <h1>vCard產生器</h1>
  <form action="api.php" method="post" enctype="multipart/form-data">
    <div class="data">
      <p>人像照 | <input type="file" name="png" size="50"></p>
      <p>你的名字 | <input type="text" name="user" value="泰山小飛俠05號"size="60"></p>
      <p>職位名稱 | <input type="text" name="title" value="前端小飛象/無敵解碼王/衣服神奈川"size="60"></p>
      <p>手機號碼 | <input type="text" name="phone" value="0988-883-393"size="60"></p>
      <p>E-Mail  | <input type="mail" name="mail" value="xuan0833695466@gmail.com" size="60"></p>
      <p>
        <span style="vertical-align:top">自我介紹 | </span>
        <textarea name="skill" cols=65 rows=10>Lorem ipsum dolor sit amet consectetur adipisi
          cing elit. Ipsa eveniet molestias odit, unde quasi officiis cupiditate beatae a sequi cumque maiores commodi i
          taque explicabo optio sint saepe voluptas magnam quod!Quo id accusamus atque obcaecati ipsum, perspiciatis fugit nisi ex pe
          rferendis doloribus animi, ...資料夾照片有一張JPG檔供使用著參考喔!!!!!!!!!!!</textarea>
      </p>
      
      <hr>
      <p style="text-align:center;">版型選擇 |
        <select name="layout">
          <option value="FlipCard" selected>FlipCard</option>
          <option value="Hover1">Hover1</option>
          <option value="Animated">Animated</option>
        </select>
        <input type="submit" value="送出預覽">
      </p>
    </div>
    
  </form>
</div>
</body>
</html>