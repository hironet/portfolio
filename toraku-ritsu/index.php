<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    div.table {
      display: table;
    }

    form.tr, div.tr {
      display: table-row;
    }

    span.td {
      border: 0.5px solid black;
      display: table-cell;
      padding: 0.2em 1.0em;
    }

    input.ctrl_button {
      border-radius: 4px;
      border-style: none;
      color: white;
      margin: 10px 10px;
      padding: 0.8em 0.2em;
      position: relative;
      width: 80px;
    }

    input.ctrl_button:hover {
      opacity: 0.7;
    }

    input.ctrl_button:active {
      top: 4px;
    }

    input.change_button {
      background-color: #1e90ff;
    }

    input.add_button {
      background-color: #32cd32;
    }

    input.del_button {
      background-color: #ff8c00;
    }

    input.reset_button {
      background-color: #ff69b4;
    }

    input.form_num {
      width: 50px;
    }

    input.brand {
      width: 100px;
    }

    input.price {
      width: 100px;
    }

    output.toraku::after {
      content: " %";
    }
  </style>
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
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <form method="GET" action="index.php">
          <label>項目数：<input class="form_num" type="number" name="form_num" value="<?php print $form_num ?>"></label>
          <input class="ctrl_button change_button" type="submit" value="変更">
        </form>
      </div>
      <div class="col-4 col-lg-2">
        <form method="GET" action="index.php">
          <input type="hidden" name="form_num" value="<?php print $form_num_plus_one ?>">
          <input class="ctrl_button add_button" type="submit" value="1行追加">
        </form>
      </div>
      <div class="col-4 col-lg-2">
        <form method="GET" action="index.php">
          <input type="hidden" name="form_num" value="<?php print $form_num_minus_one ?>">
          <input class="ctrl_button del_button" type="submit" value="1行削除">
        </form>
      </div>
      <div class="col-4 col-lg-2">
        <form method="GET" action="index.php">
          <input type="hidden" name="form_num" value="<?php print $default_form_num ?>">
          <input class="ctrl_button reset_button" type="submit" value="リセット">
        </form>
      </div>
    </div>
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
  <form class="tr" onsubmit="return false;" oninput="
    hendou.value = calc_hendou(Number(a.value), Number(b.value));
    toraku.value = calc_toraku(Number(a.value), Number(b.value));
  ">
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
  <script>
    function calc_hendou(a, b) {
      return Math.round((b - a) * 100) / 100;
    }

    function calc_toraku(a, b) {
      return Math.round((b / a - 1) * 100 * 100) / 100;
    }
  </script>
</body>
</html>
