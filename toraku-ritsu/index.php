<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/common.css" type="text/css">
  <title>騰落率計算ツール</title>
</head>

<body>
<h1>騰落率計算ツール</h1>

<?php
const MIN_FORM_NUM = 1;
const MAX_FORM_NUM = 30;
const DEFAULT_FORM_NUM = 4;

$default_form_num = DEFAULT_FORM_NUM;
$form_num = isset($_GET['form_num']) ? htmlspecialchars($_GET['form_num']) : $default_form_num;
$form_num = $form_num > MIN_FORM_NUM ? $form_num : MIN_FORM_NUM;
$form_num = $form_num < MAX_FORM_NUM ? $form_num : MAX_FORM_NUM;
$form_num_plus_one = $form_num + 1;
$form_num_minus_one = $form_num - 1;
?>

<div class="control">
  <form method="GET" action="index.php">
    <label>項目数：<input class="form_num" type="number" name="form_num" value="<?php print $form_num ?>"></label>
    <input class="ctrl_button change_button" type="submit" value="変更">
  </form>
  <form method="GET" action="index.php">
    <input type="hidden" name="form_num" value="<?php print $form_num_plus_one ?>">
    <input class="ctrl_button add_button" type="submit" value="1行追加">
  </form>
  <form method="GET" action="index.php">
    <input type="hidden" name="form_num" value="<?php print $form_num_minus_one ?>">
    <input class="ctrl_button del_button" type="submit" value="1行削除">
  </form>
  <form method="GET" action="index.php">
    <input type="hidden" name="form_num" value="<?php print $default_form_num ?>">
    <input class="ctrl_button reset_button" type="submit" value="リセット">
  </form>
</div>

<div class="table">
  <div class="tr" style="text-align: center;">
    <span class="td">No</span>
    <span class="td">銘柄</span>
    <span class="td">変動前の株価</span>
    <span class="td">変動後の株価</span>
    <span class="td">変動幅</span>
    <span class="td">騰落率</span>
    <span class="td"></span>
  </div>
<?php
function calc_form($no) {
  print <<<CALC_FORM
<form class="tr" onsubmit="return false" oninput="
  hendou.value = Math.round((Number(b.value) - Number(a.value)) * 100) / 100;
  toraku.value = Math.round((Number(b.value) / Number(a.value) - 1) * 100 * 100) / 100">
  <span class="td" style="text-align: right;">{$no}</span>
  <span class="td"><input class="brand" type="text"></span>
  <span class="td"><input class="price" type="number" name="a"></span>
  <span class="td"><input class="price" type="number" name="b"></span>
  <span class="td" style="text-align: right;"><output name="hendou"></output></span>
  <span class="td" style="text-align: right;"><output class="toraku" name="toraku"></output></span>
  <span class="td"><input type="reset" value="リセット"></span>
</form>
CALC_FORM;
}

for ($i = 1; $i <= $form_num; $i++) {
  calc_form($i);
}
?>
</div>

</body>
</html>
