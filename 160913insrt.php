<?php

$dbname = 'pdo_test'; // データベース名
$host = 'localhost';  // ホスト名
$user = 'root'; // ユーザ名
$password = 'root'; //パスワード

// データベース接続オブジェクトを生成
$dbh = new PDO("mysql:dbname={$dbname};host={$host};charset=utf8;", $user, $password);
 
// SQL文の作成
$sql = 'INSERT INTO table_test (name) VALUES (:name)';
 
// SQL文のオブジェクトを取得
$stmt = $dbh->prepare($sql);
 
// 値をパラメータにバインド
$stmt->bindValue(':name', 'テスト');
 
// SQL実行
$stmt->execute();
 
// データベース接続オブジェクトを破棄
$dbh = null;