<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く
//タグクラウドの出力変更
function wp_tag_cloud_custom_ex( $output ) {
  //style属性を取り除く
  $output = preg_replace( '/\s*?style="[^"]+?"/i', '',  $output);
  return $output;
}
add_filter( 'wp_tag_cloud', 'wp_tag_cloud_custom_ex');