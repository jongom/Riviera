<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:48
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\css\modules\blocksearch\blocksearch.css" */ ?>
<?php /*%%SmartyHeaderCode:6657543c49b01df526-21957778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cc01edccd53704922bf293c82bfa90db7284af0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\css\\modules\\blocksearch\\blocksearch.css',
      1 => 1413236950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6657543c49b01df526-21957778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b01f3520_84730309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b01f3520_84730309')) {function content_543c49b01f3520_84730309($_smarty_tpl) {?>#search_block_top {
  padding-top: 50px; }
  #search_block_top #searchbox {
    float: left;
    width: 100%; }
  #search_block_top .btn.button-search {
    background: #333333;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    border: none;
    color: white;
    width: 50px;
    text-align: center;
    padding: 10px 0 11px 0; }
    #search_block_top .btn.button-search span {
      display: none; }
    #search_block_top .btn.button-search:before {
      content: "\f002";
      display: block;
      font-family: "FontAwesome";
      font-size: 17px;
      width: 100%;
      text-align: center; }
    #search_block_top .btn.button-search:hover {
      color: #6f6f6f; }
  #search_block_top #search_query_top {
    display: inline;
    padding: 0 13px;
    height: 45px;
    line-height: 45px;
    background: #fbfbfb;
    margin-right: 1px; }

.ac_results {
  background: white;
  border: 1px solid #d6d4d4;
  width: 271px;
  margin-top: -1px; }
  .ac_results li {
    padding: 0 10px;
    font-weight: normal;
    color: #686666;
    font-size: 13px;
    line-height: 22px; }
    .ac_results li.ac_odd {
      background: white; }
    .ac_results li:hover, .ac_results li.ac_over {
      background: #fbfbfb; }

form#searchbox {
  position: relative; }
  form#searchbox label {
    color: #333333; }
  form#searchbox input#search_query_block {
    margin-right: 10px;
    max-width: 222px;
    margin-bottom: 10px;
    display: inline-block;
    float: left; }
  form#searchbox .button.button-small {
    float: left; }
    form#searchbox .button.button-small i {
      margin-right: 0; }
<?php }} ?>
