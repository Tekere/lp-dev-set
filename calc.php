<?php
// 画像ファイルの高さを取得してCSSプロパティを一括出力
// .lp_section$i{height:~~px;} の形で出力
$file_amount= 100;
for($i=1;$i<=$file_amount; $i++){
  $height = (getimagesize('/Users/sumimoto/Desktop/prem_pc_lp/dist/images/pc_sec_bg'.$i.'.png')[1]);
  
  echo '.lp_section'.$i.'{height:'.$height.'px;}';
  echo "\n";
}
