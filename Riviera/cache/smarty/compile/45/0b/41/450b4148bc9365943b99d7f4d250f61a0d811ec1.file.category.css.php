<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:47
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\css\category.css" */ ?>
<?php /*%%SmartyHeaderCode:32716543c49af147628-89551434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '450b4148bc9365943b99d7f4d250f61a0d811ec1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\css\\category.css',
      1 => 1413236949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32716543c49af147628-89551434',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49af165a08_23841290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49af165a08_23841290')) {function content_543c49af165a08_23841290($_smarty_tpl) {?>/* ************************************************************************************************
								Categories Page Styles
************************************************************************************************ */
.content_scene_cat {
  border-top: 5px solid #333333;
  color: #d7d7d7;
  line-height: 19px;
  margin: 0 0 26px 0; }
  .content_scene_cat .content_scene_cat_bg {
    padding: 18px 10px 10px 42px;
    background-color: #464646 !important; }
    @media (max-width: 1199px) {
      .content_scene_cat .content_scene_cat_bg {
        padding: 10px 10px 10px 15px; } }
  .content_scene_cat span.category-name {
    font: 600 42px/51px "Open Sans", sans-serif;
    color: white;
    margin-bottom: 12px; }
    @media (max-width: 1199px) {
      .content_scene_cat span.category-name {
        font-size: 25px;
        line-height: 30px; } }
  .content_scene_cat p {
    margin-bottom: 0; }
  .content_scene_cat a {
    color: white; }
    .content_scene_cat a:hover {
      text-decoration: underline; }
  .content_scene_cat .content_scene {
    color: #777777; }
    .content_scene_cat .content_scene .cat_desc {
      padding-top: 20px; }
      .content_scene_cat .content_scene .cat_desc a {
        color: #777777; }
        .content_scene_cat .content_scene .cat_desc a:hover {
          color: #515151; }

/* ************************************************************************************************
									Sub Categories Styles
************************************************************************************************ */
#subcategories {
  border-top: 1px solid #d6d4d4;
  padding: 15px 0 0px 0; }
  #subcategories p.subcategory-heading {
    font-weight: bold;
    color: #333333;
    margin: 0 0 15px 0; }
  #subcategories ul {
    margin: 0 0 0 -20px; }
    #subcategories ul li {
      float: left;
      width: 145px;
      margin: 0 0 13px 33px;
      text-align: center;
      height: 202px; }
      #subcategories ul li .subcategory-image {
        padding: 0 0 8px 0; }
        #subcategories ul li .subcategory-image a {
          display: block;
          padding: 9px;
          border: 1px solid #d6d4d4; }
          #subcategories ul li .subcategory-image a img {
            max-width: 100%;
            vertical-align: top; }
      #subcategories ul li .subcategory-name {
        font: 600 18px/22px "Open Sans", sans-serif;
        color: #555454;
        text-transform: uppercase; }
        #subcategories ul li .subcategory-name:hover {
          color: #515151; }
      #subcategories ul li .cat_desc {
        display: none; }
      #subcategories ul li:hover .subcategory-image a {
        border: 5px solid #333333;
        padding: 5px; }
<?php }} ?>
