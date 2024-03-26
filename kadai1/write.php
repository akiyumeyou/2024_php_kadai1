<?php
//開発中エラー確認
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST["date_option"])) {
    // セレクトボックスで選択された値を受け取る
    $date_option = $_POST["date_option"];
  
    // 受け取った値を画面に出力
    // echo $date_option;
  }
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $dateOption = $_POST['date_option'];
    $memo = $_POST['memo'];
    $date = $_POST['date'];
// echo $date;
        $c = ",";


// $str = date("Y-m-d H:i:s");
$str = $name.$c.$mail.$c.$date_option.$c.$memo.$c.$dete;
// echo $str;

//File書き込み
$file = fopen("data/data.csv","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);


// header("Location: output.html");
// exit;
// $name = $_POST['name']; // フォームから受け取った名前
// $date_option = ['date_option']; // 実際のコードでは選択された実際の日時を使用
$zoom_url = urlencode('https://zoom.us/j/XXXXXXXXXX'); // 実際のZoom URLを使用

// ユーザーを output.php にリダイレクト
header("Location: output.php?name={$name}&date={$dateOption}&zoom_url={$zoom_url}");
exit();




?>

