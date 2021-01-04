<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <title>騰落率計算ツール</title>
</head>

<body>
<h1>騰落率計算ツール</h1>

<?php
const MIN_FORM_NUM = 1;
const MAX_FORM_NUM = 30;
const DEFAULT_FORM_NUM = 4;
$form_num = DEFAULT_FORM_NUM;

print <<<CTRL_FORM
<form method="POST" action="index.php">
  項目数：<input class="input_form_num" type="number" name="form_num" value="{$form_num}">
  <input class="btn_change_form_num" type="submit" value="項目数を変更">
</form>

<form method="POST" action="index.php">
  <input type="hidden" name="form_num" value="{$form_num}">
  <input type="submit" value="リセット">
</form>
CTRL_FORM;

$calc_form = <<<CALC_FORM
<form onsubmit="return false" oninput="
  hendou.value = Math.round((Number(b.value) - Number(a.value)) * 100) / 100;
  toraku.value = Math.round((Number(b.value) / Number(a.value) - 1) * 100 * 100) / 100">
  銘柄：<input class="input_brand" type="text">
  以前の株価：<input class="input_price" type="number" name="a">
  現在の株価：<input class="input_price" type="number" name="b">
  変動幅：<output name="hendou"></output>
  騰落率：<output name="toraku"></output> %
  <input type="reset" value="リセット">
</form>
CALC_FORM;

$form_num = isset($_POST['form_num']) ? htmlspecialchars($_POST['form_num']) : $form_num;
$form_num = $form_num < MIN_FORM_NUM ? MIN_FORM_NUM : $form_num;
$form_num = $form_num > MAX_FORM_NUM ? MAX_FORM_NUM : $form_num;
for ($i = 0; $i < $form_num; $i++) {
  print $calc_form;
}
?>

</body>
</html>
