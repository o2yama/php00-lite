<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">
</head>

<body>

  <?php
  $today = date('Y年m月d日');
  echo '今日の日付は？<br>';
  echo "<p>${today}</p>";
  ?>

  <br>

  <?php
  $week = ['日', '月', '火', '水', '木', '金', '土'];
  $date = $week[date('w')];

  echo '今日は何曜日？<br>';
  echo "<p>${date}曜日</p>";
  ?>
</body>

</html>