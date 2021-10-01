<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <?php
    $email = $_POST["email"];
    $password = $_POST["password"];

    // ログインが成功した場合、emailとpasswordが一致するusernameを取得する
    

    ?>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="tweet.php">
        <div class="jumbotron">
            <fieldset>
                <legend>掲示板</legend>
                <label><?php $name ?>
                    <label>Tweetしよう <br>
                        <input type="text" name = "name" placeholder="Username" class="tweet_name"><br>
                        <textarea name="content" rows="4" cols="40" placeholder="tweet"></textarea></label><br>

                    <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    
    <!-- 検索画面 -->
    <form method="get" action="search.php">
        <div class="jumbotron">
            <fieldset>
                <legend>検索ワード入力</legend>
                <label><input type="search" name="key" placeholder="キーワードを入力"></label><br>
                
                <input type="submit" value="検索する">
            </fieldset>
        </div>
    </form>
    
    <!-- Main[End] -->
    
    


    <?php

    // ini_set("display_errors", 1);
    // error_reporting(E_ALL);

    require_once("funcs.php");

    // function h($str) {
    //   return htmlspecialchars($str, ENT_QUOTES);
    // }


    //1.  DB接続します
    try {
        //Password:MAMP='root',XAMPP=''
        $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', 'root');
    } catch (PDOException $e) {
        exit('DBConnectError' . $e->getMessage());
    }

    //２．データ取得SQL作成
    $stmt = $pdo->prepare("SELECT * FROM tweet ORDER BY id DESC");
    $status = $stmt->execute();

    //３．データ表示
    $view = "";
    if ($status == false) {
        //execute（SQL実行時にエラーがある場合）
        $error = $stmt->errorInfo();
        exit("ErrorQuery:" . $error[2]);
    } else {
        //Selectデータの数だけ自動でループしてくれる
        //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $view .= "<div class='tweet'>";
            $view .= "<div class='namedate'><p class='username'>" . h($result['username']) . "</p>";
            $view .= "<p class='date'>" . h($result['date']) . "</p></div>";
            $view .= "<p class='content'>" . h($result['content']) . "</p>";
            
            $view .= "</div>";
        };
    };
    print($view)

    ?>

<style>
    .tweet {
        background-color: lightblue;
        width: 66vw;
        border-radius: 10px;
        margin : 10px;
        padding: 5px 5px 5px 5px;
    }
    .namedate {
        display:flex;
    }
    .username{
        font-size:15px;
        color : black;
        padding:0 20px 0 0;
    }
    .content{
        font-size:18px;
        font-size:bold;
        color : black;
        padding: 5px 0 5px 20px;
    }
    .date{
        font-size:12px;
        color : black;
        padding: 0 0 0 10px;
    }
</style>
</body>

</html>