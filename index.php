<?php


//初期設定読み込み
//CSVの入力順ID設定
$csv_no = array(
  "id"    =>  0,
  "graduation"=>  1,
  "temp_pw" =>  2,
);

//日本語が読み込まれない場合に記述
setlocale(LC_ALL,'ja_JP.UTF-8');

echo '<table>';
//csvファイルをオープン
$fp = fopen( 'data.csv','r');


//fgetcsv関数がfalseを返却するまで実行
while($data = fgetcsv($fp)){
      echo '<tr>';
        echo '<td>'.$data[$csv_no["id"]].'</td>'."\n";
        echo '<td>'.$data[$csv_no["graduation"]].'</td>'."\n";
        echo '<td>'.$data[$csv_no["temp_pw"]].'</td>'."\n";
      echo '</tr>';
}

fclose( $fp );
echo '<table>';
?>