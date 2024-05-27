<!DOCTYPE html>
 <html lang="ja">
 
 <body>

     <p>
         <?php
         $data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

         //  配列$user_namesのインデックスと値を1つずつ順番に出力する
         foreach ($data as $key => $value) {
             echo "{$key}：{$value}<br>";
         }
         ?>
     </p>
 </body>
 
 </html>