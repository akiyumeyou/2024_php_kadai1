<?php
// クエリパラメータからデータを受け取る
$name = $_GET['name'] ?? '不明';
$dateOption = $_GET['date'] ?? '不明';
$zoom_url = $_GET['zoom_url'] ?? '';

// CSVファイルを読み込んで、同じ日時に登録した他の参加者を探す
$filename = 'data/data.csv';
$sameDateParticipants = [];

if (file_exists($filename)) {
    $file = fopen($filename, "r");
    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
        // インデックス2に日時オプションが保存されていると仮定
        if ($data[2] === $dateOption && $data[0] !== $name) {
            $sameDateParticipants[] = $data[0]; // 名前を追加
        }
    }
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="css/style.css">
<head>
<meta charset="UTF-8">
<title>ミーティングのお知らせ</title>
</head>
<body>
<h1>オンライン交流会予定</h1>
<div class="message-box">
            <p>to <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さんへ</p>
            <p>日時: <?php echo htmlspecialchars($dateOption, ENT_QUOTES, 'UTF-8'); ?></p>
            <p>当日下の参加ボタンを押してください⬇️</p>
            <button onclick="window.location.href='<?php echo htmlspecialchars($zoom_url, ENT_QUOTES, 'UTF-8'); ?>'">👉参加</button>
        </div>
        <?php if (!empty($sameDateParticipants)): ?>
            <div class="participant-list">
                <p>同じ日時に参加する他の方々：</p>
                <ul>
                    <?php foreach ($sameDateParticipants as $participant): ?>
                        <li><?php echo htmlspecialchars($participant, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <p>from 株式会社ポチっとつながるpotz</p>
    </div>
    <?php include("inc/foot.html"); ?>
</body>
</html>