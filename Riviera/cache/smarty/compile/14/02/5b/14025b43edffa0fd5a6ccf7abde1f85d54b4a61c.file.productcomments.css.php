<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:48
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\css\modules\productcomments\productcomments.css" */ ?>
<?php /*%%SmartyHeaderCode:13370543c49b053bd84-85037984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14025b43edffa0fd5a6ccf7abde1f85d54b4a61c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\css\\modules\\productcomments\\productcomments.css',
      1 => 1413236951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13370543c49b053bd84-85037984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b058b5a3_41091474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b058b5a3_41091474')) {function content_543c49b058b5a3_41091474($_smarty_tpl) {?>#product_comments_block_extra {
  padding: 8px 10px 10px;
  font-weight: bold;
  line-height: 18px;
  border: 1px solid #d6d4d4;
  background: #fbfbfb;
  margin: 39px 0 22px; }
  #product_comments_block_extra .comments_note {
    margin-bottom: 5px; }
  #product_comments_block_extra .comments_note span,
  #product_comments_block_extra .star_content {
    float: left;
    color: #333333; }
  #product_comments_block_extra .star_content {
    margin-top: 1px; }
  #product_comments_block_extra div.star:after {
    content: "\f006";
    font-family: "FontAwesome";
    display: inline-block;
    color: #777676; }
  #product_comments_block_extra div.star_on:after {
    content: "\f005";
    font-family: "FontAwesome";
    display: inline-block;
    color: #ef8743; }
  #product_comments_block_extra .comments_advices {
    clear: both; }

.comments_advices {
  padding-top: 2px; }
  .comments_advices li {
    display: inline-block;
    line-height: 30px; }
    @media (min-width: 768px) and (max-width: 991px) {
      .comments_advices li {
        display: block;
        line-height: 20px; } }
  .comments_advices a {
    text-decoration: none;
    color: #777777;
    position: relative;
    margin-right: 8px;
    line-height: 30px;
    padding: 0;
    display: inline-block; }
    @media (min-width: 768px) and (max-width: 1199px) {
      .comments_advices a {
        float: none;
        line-height: 20px; } }
    .comments_advices a:before {
      background: #929292;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
      -ms-border-radius: 50px;
      -o-border-radius: 50px;
      border-radius: 50px;
      color: white;
      display: inline-block;
      font-family: "FontAwesome";
      font-size: 15px;
      font-weight: normal;
      height: 30px;
      line-height: 30px;
      margin-right: 6px;
      text-align: center;
      width: 30px;
      /*max 1199px*/ }
      @media (max-width: 1199px) {
        .comments_advices a:before {
          display: none; } }
    .comments_advices a.reviews:before {
      content: "\f0e5"; }
    .comments_advices a.open-comment-form:before {
      content: "\f040"; }
    .comments_advices a:hover {
      color: #333333; }
    .comments_advices a.reviews {
      border-right: 1px solid #d6d4d4;
      padding-right: 30px;
      margin-right: 9px; }
      @media (min-width: 768px) and (max-width: 991px) {
        .comments_advices a.reviews {
          margin-right: 0;
          padding: 0;
          border: none; } }

/* pop-in add grade/advice ********************************************************************* */
#fancybox-wrap {
  width: 585px; }

#fancybox-content {
  width: 585px;
  border-width: 0; }

#new_comment_form {
  overflow: hidden;
  color: #333333;
  text-align: left; }
  #new_comment_form h2 {
    margin-bottom: 10px; }
  #new_comment_form .title {
    padding: 10px;
    font-size: 13px;
    color: white;
    text-transform: uppercase;
    background: #333333; }
  #new_comment_form ul.grade_content {
    list-style-type: none;
    margin: 0 0 20px 0; }
    #new_comment_form ul.grade_content li {
      width: 50%; }
    #new_comment_form ul.grade_content span {
      display: inline-block;
      padding: 0 10px;
      width: 150px;
      font-weight: bold; }
    #new_comment_form ul.grade_content .cancel {
      margin-right: 5px; }
  #new_comment_form .product {
    padding: 15px; }
    #new_comment_form .product img {
      border: 1px solid #d6d4d4; }
    #new_comment_form .product .product_desc {
      line-height: 18px;
      color: #666666; }
      #new_comment_form .product .product_desc .product_name {
        padding: 10px 0 5px;
        font-size: 13px;
        color: #000; }
  #new_comment_form .new_comment_form_content {
    padding: 15px 25px 15px 15px;
    background: #f8f8f8; }
    @media (max-width: 767px) {
      #new_comment_form .new_comment_form_content {
        padding-left: 25px; } }
    #new_comment_form .new_comment_form_content .intro_form {
      padding-bottom: 10px;
      font-weight: bold;
      font-size: 12px; }
  #new_comment_form label {
    display: block;
    margin: 12px 0 4px 0;
    font-weight: bold;
    font-size: 12px; }
  #new_comment_form input,
  #new_comment_form textarea {
    padding: 0 5px;
    height: 28px;
    width: 100%;
    border: 1px solid #ccc;
    background: white; }
  #new_comment_form textarea {
    height: 80px; }
  #new_comment_form .submit {
    margin-top: 20px;
    padding: 0;
    font-size: 13px;
    text-align: right; }
  #new_comment_form #criterions_list {
    border-bottom: 1px solid #CCC;
    padding-bottom: 15px;
    list-style-type: none; }
    #new_comment_form #criterions_list li {
      margin-bottom: 10px; }
    #new_comment_form #criterions_list label {
      display: inline;
      float: left;
      margin: 0 10px 0 0; }
    #new_comment_form #criterions_list .star_content {
      float: left; }
  #new_comment_form #new_comment_form_footer {
    margin-top: 20px;
    font-size: 12px; }

/* TAB COMMENTS ******************************************************************************** */
#product_comments_block_tab {
  margin: 0 0 20px 0; }
  #product_comments_block_tab div.comment {
    margin: 0 0 14px;
    padding-top: 14px;
    border-top: 1px solid #d6d4d4; }
    #product_comments_block_tab div.comment:first-child {
      padding: 0;
      border: none; }
    #product_comments_block_tab div.comment .comment_author {
      padding: 0 20px;
      line-height: 18px span;
        line-height-font-weight: bold;
        line-height-float: left; }
      #product_comments_block_tab div.comment .comment_author .star_content {
        display: inline-block;
        vertical-align: middle;
        margin: 0 0 0 5px; }
    #product_comments_block_tab div.comment .comment_details {
      overflow: hidden;
      border-left: 1px solid #d6d4d4; }
      @media (max-width: 991px) {
        #product_comments_block_tab div.comment .comment_details {
          border-left: none; }
          #product_comments_block_tab div.comment .comment_details ul {
            list-style-type: none;
            margin: 0; }
            #product_comments_block_tab div.comment .comment_details ul li {
              padding: 2px 0 2px; }
              #product_comments_block_tab div.comment .comment_details ul li:before {
                font-family: "FontAwesome";
                content: "\f0da";
                color: #333333;
                margin-right: 8px; } }
  #product_comments_block_tab div.star:after {
    content: "\f006";
    font-family: "FontAwesome";
    display: inline-block;
    color: #777676; }
  #product_comments_block_tab div.star_on:after {
    content: "\f005";
    font-family: "FontAwesome";
    display: inline-block;
    color: #ef8743; }
  #product_comments_block_tab .comment_author_infos {
    clear: both;
    padding-top: 9px; }
    #product_comments_block_tab .comment_author_infos strong {
      display: block;
      color: #333333; }
    #product_comments_block_tab .comment_author_infos em {
      color: #adadad; }
  #product_comments_block_tab a {
    text-decoration: none;
    font-weight: bold; }
  #product_comments_block_tab span.report_btn {
    cursor: pointer; }
  #product_comments_block_tab span.report_btn:hover {
    text-decoration: underline; }

.fl {
  float: left; }

.fr {
  float: right; }
<?php }} ?>
