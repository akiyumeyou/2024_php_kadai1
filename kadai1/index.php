<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">

<title>zoomミーティング申し込み</title>
</head>
<body>

<h1>オンライン交流会申し込み</h1>
<form action="./write.php" method="post">
<div class="form-group">
        <label for="name">お名前:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="mail">EMAIL:</label>
        <input type="text" name="mail" id="mail" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="date_option">希望日：</label>
        <select name="date_option" id="date_option" class="form-control">
            <option value="4月2日20時から">4月2日火曜日：20時から</option>
            <option value="4月4日20時から">4月4日木曜日：20時から</option>
            <option value="4月5日20時から">4月5日金曜日：20時から</option>
            <option value="4月7日20時から">4月7日日曜日：20時から</option>
        </select>
    </div>
    <div class="form-group">
        <label for="memo">コメント:</label>
        <textarea name="memo" id="memo" class="form-control"></textarea>
    </div>
    
    <!-- システム日付を隠しフィールドとして追加 -->
    <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
    <div class="form-group">
        <button type="submit" class="btn">👉申し込み</button>
    </div>
</form>

<?php $date = date('Y年m月d日 H:i:s'); ?>
<?php echo "$date"; ?>

</body>

</html>

<?php include("inc/foot.html"); ?>