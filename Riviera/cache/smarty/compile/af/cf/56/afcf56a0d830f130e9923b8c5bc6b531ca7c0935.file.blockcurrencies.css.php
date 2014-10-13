<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:48
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\css\modules\blockcurrencies\blockcurrencies.css" */ ?>
<?php /*%%SmartyHeaderCode:15599543c49b00c4cf6-70864582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afcf56a0d830f130e9923b8c5bc6b531ca7c0935' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\css\\modules\\blockcurrencies\\blockcurrencies.css',
      1 => 1413236950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15599543c49b00c4cf6-70864582',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b00db574_40984497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b00db574_40984497')) {function content_543c49b00db574_40984497($_smarty_tpl) {?>#currencies-block-top {
  float: right;
  border-left: 1px solid #515151;
  position: relative; }
  @media (max-width: 479px) {
    #currencies-block-top {
      width: 25%; } }
  #currencies-block-top span.firstWord {
    display: none; }
  #currencies-block-top div.current {
    font-weight: bold;
    padding: 8px 10px 10px 10px;
    color: white;
    text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    line-height: 18px; }
    @media (max-width: 479px) {
      #currencies-block-top div.current {
        text-align: center;
        padding: 9px 5px 10px;
        font-size: 11px; } }
    #currencies-block-top div.current strong {
      color: #777777; }
    #currencies-block-top div.current:hover, #currencies-block-top div.current.active {
      background: #2b2b2b; }
    #currencies-block-top div.current:after {
      content: "\f0d7";
      font-family: "FontAwesome";
      font-size: 18px;
      line-height: 18px;
      color: #686666;
      vertical-align: -2px;
      padding-left: 12px; }
      @media (max-width: 479px) {
        #currencies-block-top div.current:after {
          padding-left: 2px;
          font-size: 13px;
          line-height: 13px;
          vertical-align: 0; } }
    @media (max-width: 479px) {
      #currencies-block-top div.current .cur-label {
        display: none; } }
  #currencies-block-top ul {
    display: none;
    position: absolute;
    top: 37px;
    left: 0;
    width: 157px;
    background: #333333;
    z-index: 2; }
    #currencies-block-top ul li {
      color: white;
      line-height: 35px;
      font-size: 13px; }
      #currencies-block-top ul li a,
      #currencies-block-top ul li > span {
        padding: 0 10px 0 12px;
        display: block;
        color: white; }
      #currencies-block-top ul li.selected, #currencies-block-top ul li:hover a {
        background: #484848; }
<?php }} ?>
