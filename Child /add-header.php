<?php
/* ヘッダーに CSS や Javascript 等を追加したい場合は、以下の ?> 以降にに書いてください
 *
 * 記事や固定ページ単位でヘッダーを追加したい場合は、
 * 記事投稿(編集)画面で、カスタムフィールドに addhead という名前を追加し、
 * 値の部分に CSS や Javascript を書くことで、ヘッダーを追加することもできます。
 *
 * To add CSS or Javascript in the header, please write them after the below ?>.
 *
 * If you want to。add elements in header for certain posts or pages,
 * create a customfield with the name of "addhead" and write your own CSS or Javascript.
 * These elements will be added in the header.
*/
?>
<style>
mark { 
  background-color: #FADADD;
  color: black;
}
</style>
<style>
.mobile {
display: none;
}
.desktop {
display: block;
}
@media screen and (max-width: 768px) {
.mobile {
display: block;
}
.desktop {
display: none;
}
}
</style>
