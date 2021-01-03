<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <input type="number" name="form_num" value="{$form_num}" style="width: 50px;">
  <input type="submit" value="項目数を変更する">
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
  銘柄：<input type="text" style="width: 100px;">
  以前の株価：<input type="number" name="a" style="width: 100px;">
  現在の株価：<input type="number" name="b" style="width: 100px;">
  変動幅：<output name="hendou"></output>
  騰落率：<output name="toraku"></output>%
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
