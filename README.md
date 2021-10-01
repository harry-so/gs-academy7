# gs-academy7


①課題内容（課題名・どんな作品か）
　-必要あれば操作方法等こちらに記載

簡易型ツイッター + 検索機能
 
②工夫した点・こだわった点

せっかくデータベースに登録をするので、SQLをつかって検索をできるようにした。

③質問・疑問（あれば）

PDOでSQLの該当するものが見つからなかった際に、エラーメッセージを出したかったが、
//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM tweet WHERE username LIKE concat('%', :key, '%') OR content LIKE concat('%', :key, '%')");
$status = $stmt->execute(['key' => $key]);

//３．データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:" . $error[2]);


なにも該当がない場合に、どの変数がどんな値になるのかわかりませんでした。
$stmt = false を試してみて動かなかったので、ご教示いただきたいです。

④その他（感想、シェアしたいことなんでも）
別講義のPython講習を受けており、課題提出が遅くなってしまいました。
が、PythonやったことでPHPの理解も進んだ気がします。
