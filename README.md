# 2024_php_kadai1
# ①課題タイトル　
簡単オンライン交流会参加アプリ（シニア向け）

＃　②課題内容
交流会の参加したい日程を選んで「申し込み」をポチっとすると
参加用の画面に変わる。
index.php → write.php　→ output.phpと変数を継承するテスト
今回zoomを採用。（Google meetでも可能）

＃　③demo
https://potzapp.sakura.ne.jp/kadai1/index.php

＃　④工夫した点
output.phpで表示させる際にdata.csvファイルから条件（同じ日付）に合った参加者の名前を表示する.
お友達を誘って参加することを想定。
今回は課題ということもあり、メアドやコメントを入力するようにしている。
実際は、シニアは申し込みボタンを押すだけで参加できる。実際、未入力でも画面遷移する状態で完成とした。
自分が、ADAメンバーとのオンライン交流会にも使える状態。
現在zoom URLはダミーですが、MT発行したURLを定義することで利用可能。
