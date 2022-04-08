<!--
    PHPのエラー対処方法について

    そもそもエラーとは？
    プログラムの書き方を間違えてPHPが理解できないこと

    エラーメッセージとは？
    プログラムの書き方を間違えてた場合にエラーとして指摘してくれる
    バグがあるとかいう

    PHPのエラーの種類
    E_PARSE      -> コンパイルエラー : 機械語(1と0)に翻訳できない
    E_ERROR      -> 実行時停止エラー : 翻訳したけどめちゃくちゃ fatal error
    E_WARNING    -> 実行時警告エラー : 意味わかるけどその命令の仕方x
    E_NOTICE     -> 実行時注意エラー : 意味わかるけどもっとこうしてほしい
    E_DEPRICATED -> 実行時注意エラー : その命令口調が古い

    エラーメッセージを出す方法
    1.php.iniファイルに設定を書く -> phpファイル全体に影響
    mamp -> start -> webstart -> tools ->  phpinfo -> 「command+f」でphp.iniの場所を検索 -> ファイルを開く -> error_reporting = E_ALLのコメントを外す -> display_errors = Onのコメントを外す
    2.エラーを出したいphpファイルに設定を書く -> 記述したphpファイルに設定を書く
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    とそれぞれ入力

    エラーメッセージが出た場合の対処法①
    エラー文をコピペしてネットで検索

    変数の中身を確認する方法
    var_dump(変数名);
    print_r(変数名);
    例：
    $file = $FILES["image"];
    var_dump($file);

    よくあるエラーメッセージの原因と対処法
    その１　Notice: Undefined variable: (変数名) -> 原因：変数名が定義されていない
    その２　Parse error: syntax error, unexpected end of file, expecting ',' or ';' -> 原因：あるべき文字を書き忘れている
    その３　Fatal error: []operator not upported for strings -> 原因：文字型の変数を配列として使おうとしている
    その４　Fatal error: Call to undifined function (関数名) -> 原因：定義されていない関数を使おうとしている
    その５　Warning: Missing argument 2 for (関数名) -> 原因：２番目の引数が指定されていない
    その６　Notice: Constant (定数名) already defined -> 原因：同じ名前の定数を定義しようとしている
    その７　Fatal error: Cannot redeclare (関数名) -> 原因：同じ名前の関数が複数存在する
    その８　include(ファイル名): failed to open stream: No such file or directory -> 原因：ファイルやディレクトリが存在しない
    その９　Deprecated: Function 関数名 is deprecated -> 原因：非推奨の関数を使っている
    その１０　Warning: Cannot modify header information - headers already sent -> 原因：header関数を呼ぶ前に文字などを出力してしまっている
    その１１　Warning: Invalid argument supplied for foreach() -> 原因：foreach関数に文字列などを使っている

    ログとは
    プログラムがどこまで実行されたかなどを記録したもの
    .logの形式でログファイルを出力する

    ログをだす方法
    1.php.iniファイルに設定を書く -> phpファイル全体にあるファイルのログが出力される
    2.エラーを出したいphpファイルに設定を書く -> 記述したphpファイル内のログのみ出力される
    ログの取り方
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors","on");
    ini_set("log_errors","on");
    ini_set("errors_log","php.log");
    ?>

    エラーのでないバグもある？。。。
-->
