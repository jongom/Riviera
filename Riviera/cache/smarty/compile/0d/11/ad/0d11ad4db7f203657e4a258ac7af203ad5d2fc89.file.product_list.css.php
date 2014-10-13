<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:48
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\css\product_list.css" */ ?>
<?php /*%%SmartyHeaderCode:4242543c49b07df898-73593474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d11ad4db7f203657e4a258ac7af203ad5d2fc89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\css\\product_list.css',
      1 => 1413236950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4242543c49b07df898-73593474',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b0887752_40343641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b0887752_40343641')) {function content_543c49b0887752_40343641($_smarty_tpl) {?>/*******************************************************
Product list Styles
********************************************************/
ul.product_list .product-name {
  display: inline-block;
  width: 100%;
  overflow: hidden; }
ul.product_list .availability span {
  display: inline-block;
  color: white;
  font-weight: bold;
  padding: 3px 8px 4px 8px;
  margin-bottom: 20px; }
  ul.product_list .availability span.available-now {
    background: #55c65e;
    border: 1px solid #36943e; }
  ul.product_list .availability span.out-of-stock {
    background: #fe9126;
    border: 1px solid #e4752b; }
  ul.product_list .availability span.available-dif {
    background: #fe9126;
    border: 1px solid #e4752b; }
ul.product_list .color-list-container {
  margin-bottom: 12px; }
  ul.product_list .color-list-container ul li {
    display: inline-block;
    border: 1px solid #d6d4d4;
    width: 26px;
    height: 26px; }
    ul.product_list .color-list-container ul li a {
      display: block;
      width: 22px;
      height: 22px;
      margin: 1px; }
      ul.product_list .color-list-container ul li a img {
        display: block;
        width: 22px;
        height: 22px; }
ul.product_list .product-image-container {
  text-align: center; }
  ul.product_list .product-image-container img {
    margin: 0 auto; }
  ul.product_list .product-image-container .quick-view-wrapper-mobile {
    display: none; }
    ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile {
      display: none; }
      @media (max-width: 1199px) {
        ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile {
          display: block;
          position: relative;
          background-color: rgba(208, 208, 211, 0.57);
          height: 130px;
          width: 85px;
          top: 80px;
          right: -162px;
          -moz-transform: rotate(45deg);
          -o-transform: rotate(45deg);
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          transform: rotate(45deg);
          zoom: 1;
          pointer-events: all; }
          ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile i {
            position: relative;
            top: 48px;
            left: -20px;
            font-size: x-large;
            color: black; }
          ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile i:before {
            -moz-transform: rotate(315deg);
            -o-transform: rotate(315deg);
            -webkit-transform: rotate(315deg);
            -ms-transform: rotate(315deg);
            transform: rotate(315deg); } }
    @media (max-width: 1199px) {
      ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile:hover {
        background-color: rgba(167, 167, 167, 0.57); } }
    @media (max-width: 1199px) {
      ul.product_list .product-image-container .quick-view-wrapper-mobile {
        display: block;
        background-color: transparent;
        height: 155px;
        width: 215px;
        position: absolute;
        overflow: hidden;
        pointer-events: none;
        bottom: 0px;
        right: 0px; } }
  ul.product_list .product-image-container .quick-view {
    font: 700 13px/16px Arial, Helvetica, sans-serif;
    color: #777676;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -21px 0 0 -53px;
    padding: 13px 0 0;
    background: rgba(255, 255, 255, 0.82);
    width: 107px;
    height: 43px;
    text-align: center;
    -webkit-box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
    -moz-box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
    box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px; }
    @media (max-width: 1199px) {
      ul.product_list .product-image-container .quick-view {
        display: none; } }
    @media (min-width: 1200px) {
      ul.product_list .product-image-container .quick-view {
        display: none; } }
    @media (max-width: 767px) {
      ul.product_list .product-image-container .quick-view {
        display: none; } }
ul.product_list .comments_note {
  text-align: left;
  overflow: hidden; }
  ul.product_list .comments_note .star_content {
    float: left; }
  ul.product_list .comments_note .nb-comments {
    overflow: hidden;
    font-style: italic; }
ul.product_list .functional-buttons div a, ul.product_list .functional-buttons div label {
  font-weight: bold;
  color: #777676;
  cursor: pointer; }
  ul.product_list .functional-buttons div a:hover, ul.product_list .functional-buttons div label:hover {
    color: #000; }
ul.product_list .functional-buttons div.wishlist {
  border-right: 1px solid #d6d4d4; }
  ul.product_list .functional-buttons div.wishlist a:before {
    display: inline-block;
    font-family: "FontAwesome";
    content: "\f08a";
    margin-right: 3px;
    padding: 0 3px; }
  ul.product_list .functional-buttons div.wishlist a.checked:before {
    content: "\f004"; }
  @media (min-width: 992px) and (max-width: 1199px) {
    ul.product_list .functional-buttons div.wishlist {
      border-right: 0; }
      ul.product_list .functional-buttons div.wishlist a:before {
        display: none; } }
  @media (min-width: 480px) and (max-width: 767px) {
    ul.product_list .functional-buttons div.wishlist {
      border-right: 0; }
      ul.product_list .functional-buttons div.wishlist a:before {
        display: none; } }
ul.product_list .functional-buttons div.compare a:before {
  content: "\f067";
  display: inline-block;
  font-family: "FontAwesome";
  margin-right: 3px; }
  @media (min-width: 992px) and (max-width: 1199px) {
    ul.product_list .functional-buttons div.compare a:before {
      display: none; } }
  @media (min-width: 480px) and (max-width: 767px) {
    ul.product_list .functional-buttons div.compare a:before {
      display: none; } }
ul.product_list .functional-buttons div.compare a.checked:before {
  content: "\f068"; }

/*******************************************************
Product list(Grid) Styles 
********************************************************/
ul.product_list.grid > li {
  padding-bottom: 20px;
  text-align: center; }
  @media (min-width: 480px) and (max-width: 767px) {
    ul.product_list.grid > li {
      width: 50%;
      float: left; } }
  ul.product_list.grid > li .product-container {
    background: white;
    padding: 0;
    position: relative; }
    ul.product_list.grid > li .product-container .product-image-container {
      border: 1px solid #d6d4d4;
      padding: 9px;
      margin-bottom: 13px;
      position: relative; }
      @media (max-width: 767px) {
        ul.product_list.grid > li .product-container .product-image-container {
          max-width: 290px;
          margin-left: auto;
          margin-right: auto; } }
      ul.product_list.grid > li .product-container .product-image-container .content_price {
        position: absolute;
        left: 0;
        bottom: -1px;
        width: 100%;
        background: url(../img/price-container-bg.png);
        padding: 9px 0;
        display: none; }
        ul.product_list.grid > li .product-container .product-image-container .content_price span {
          color: white; }
          ul.product_list.grid > li .product-container .product-image-container .content_price span.old-price {
            color: #b1b0b0; }
    ul.product_list.grid > li .product-container h5 {
      padding: 0 15px 7px 15px;
      min-height: 53px; }
    @media (min-width: 1200px) {
      ul.product_list.grid > li .product-container .comments_note {
        display: none; } }
    ul.product_list.grid > li .product-container .comments_note .star_content {
      margin: 0 3px 12px 59px; }
    ul.product_list.grid > li .product-container .product-desc {
      display: none; }
    ul.product_list.grid > li .product-container .content_price {
      padding-bottom: 9px;
      line-height: 21px; }
    ul.product_list.grid > li .product-container .old-price,
    ul.product_list.grid > li .product-container .price,
    ul.product_list.grid > li .product-container .price-percent-reduction {
      display: inline-block; }
    ul.product_list.grid > li .product-container .product-flags {
      display: none; }
    ul.product_list.grid > li .product-container .old-price {
      margin-right: 5px; }
    ul.product_list.grid > li .product-container .button-container {
      margin-bottom: 14px; }
      @media (min-width: 1200px) {
        ul.product_list.grid > li .product-container .button-container {
          display: none; } }
      ul.product_list.grid > li .product-container .button-container .ajax_add_to_cart_button,
      ul.product_list.grid > li .product-container .button-container span.button,
      ul.product_list.grid > li .product-container .button-container .lnk_view {
        margin: 0 6px 10px 6px; }
    ul.product_list.grid > li .product-container .functional-buttons {
      background: url(../img/functional-bt-shadow.png) repeat-x;
      padding: 11px 0 5px; }
      @media (min-width: 1200px) {
        ul.product_list.grid > li .product-container .functional-buttons {
          display: none; } }
      ul.product_list.grid > li .product-container .functional-buttons div {
        width: 50%;
        float: left;
        padding: 3px 0 4px 0; }
  @media (min-width: 1200px) {
    ul.product_list.grid > li.hovered .product-container {
      -webkit-box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
      -moz-box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
      box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
      position: relative;
      z-index: 10; }
      ul.product_list.grid > li.hovered .product-container .content_price {
        display: none; }
      ul.product_list.grid > li.hovered .product-container .product-image-container .content_price {
        display: block; }
      ul.product_list.grid > li.hovered .product-container .product-image-container .quick-view {
        display: block; }
      ul.product_list.grid > li.hovered .product-container .functional-buttons,
      ul.product_list.grid > li.hovered .product-container .button-container,
      ul.product_list.grid > li.hovered .product-container .comments_note {
        display: block; } }
  @media (min-width: 992px) {
    ul.product_list.grid > li.first-in-line {
      clear: left; } }
  @media (min-width: 480px) and (max-width: 991px) {
    ul.product_list.grid > li.first-item-of-tablet-line {
      clear: left; } }
ul.product_list.grid li.hovered h5 {
  min-height: 30px; }

@media (min-width: 1200px) {
  #blockpack ul > li.last-line {
    border: none;
    padding-bottom: 0;
    margin-bottom: 0; } }
@media (min-width: 480px) and (max-width: 767px) {
  #blockpack ul > li.first-item-of-tablet-line {
    clear: none; }
  #blockpack ul > li.first-item-of-mobile-line {
    clear: left; } }

/*******************************************************
Product list(List) Styles 
********************************************************/
@media (max-width: 479px) {
  ul.product_list.list > li .left-block {
    width: 100%; } }
ul.product_list.list > li .product-container {
  border-top: 1px solid #d6d4d4;
  padding: 30px 0 30px; }
ul.product_list.list > li .product-image-container {
  position: relative;
  border: 1px solid #d6d4d4;
  padding: 9px; }
  @media (max-width: 479px) {
    ul.product_list.list > li .product-image-container {
      max-width: 290px;
      margin: 0 auto; } }
  ul.product_list.list > li .product-image-container .content_price {
    display: none !important; }
ul.product_list.list > li .product-flags {
  color: #333333;
  margin: -5px 0 10px 0; }
  ul.product_list.list > li .product-flags .discount {
    color: #f13340; }
ul.product_list.list > li h5 {
  padding-bottom: 8px; }
ul.product_list.list > li .product-desc {
  margin-bottom: 15px; }
@media (max-width: 479px) {
  ul.product_list.list > li .center-block {
    width: 100%; } }
ul.product_list.list > li .center-block .comments_note {
  margin-bottom: 12px; }
@media (min-width: 992px) {
  ul.product_list.list > li .right-block .right-block-content {
    margin: 0;
    border-left: 1px solid #d6d4d4;
    padding-left: 15px;
    padding-bottom: 16px; } }
@media (max-width: 991px) {
  ul.product_list.list > li .right-block .right-block-content {
    padding-top: 20px; } }
@media (max-width: 479px) {
  ul.product_list.list > li .right-block .right-block-content {
    padding-top: 5px; } }
ul.product_list.list > li .right-block .right-block-content .content_price {
  padding-bottom: 10px; }
  @media (max-width: 991px) {
    ul.product_list.list > li .right-block .right-block-content .content_price {
      padding-top: 13px;
      padding-bottom: 0; } }
  @media (max-width: 479px) {
    ul.product_list.list > li .right-block .right-block-content .content_price {
      padding-top: 0;
      width: 100%; } }
  ul.product_list.list > li .right-block .right-block-content .content_price span {
    display: inline-block;
    margin-top: -4px;
    margin-bottom: 14px; }
    ul.product_list.list > li .right-block .right-block-content .content_price span.old-price {
      margin-right: 8px; }
ul.product_list.list > li .right-block .right-block-content .button-container {
  overflow: hidden;
  padding-bottom: 20px; }
  @media (max-width: 479px) {
    ul.product_list.list > li .right-block .right-block-content .button-container {
      width: 100%; } }
  ul.product_list.list > li .right-block .right-block-content .button-container .btn {
    margin-bottom: 10px; }
    @media (min-width: 992px) {
      ul.product_list.list > li .right-block .right-block-content .button-container .btn {
        float: left;
        clear: both; } }
@media (min-width: 992px) {
  ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    overflow: hidden; } }
@media (max-width: 991px) {
  ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    clear: both; }
    ul.product_list.list > li .right-block .right-block-content .functional-buttons > div {
      float: left;
      padding-top: 0 !important;
      padding-right: 20px; } }
@media (max-width: 479px) {
  ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    float: none;
    display: inline-block; }
    ul.product_list.list > li .right-block .right-block-content .functional-buttons a i, ul.product_list.list > li .right-block .right-block-content .functional-buttons a:before, ul.product_list.list > li .right-block .right-block-content .functional-buttons label i, ul.product_list.list > li .right-block .right-block-content .functional-buttons label:before {
      display: none !important; } }
ul.product_list.list > li .right-block .right-block-content .functional-buttons a {
  cursor: pointer; }
ul.product_list.list > li .right-block .right-block-content .functional-buttons .wishlist {
  border: none; }
ul.product_list.list > li .right-block .right-block-content .functional-buttons .compare {
  padding-top: 10px; }
  ul.product_list.list > li .right-block .right-block-content .functional-buttons .compare a:before {
    margin-right: 10px; }
@media (min-width: 1200px) {
  ul.product_list.list > li:hover .product-image-container .quick-view {
    display: block; } }
@media (max-width: 479px) {
  ul.product_list.list > li {
    text-align: center; } }

/*******************************************************
Product list(Index page) Styles 
********************************************************/
#index ul.product_list.tab-pane > li {
  padding-bottom: 10px;
  margin-bottom: 10px; }
  @media (min-width: 1200px) {
    #index ul.product_list.tab-pane > li {
      padding-bottom: 85px;
      margin-bottom: 0; } }
  #index ul.product_list.tab-pane > li .availability {
    display: none; }
  @media (min-width: 1200px) {
    #index ul.product_list.tab-pane > li.last-line {
      border: none;
      padding-bottom: 0;
      margin-bottom: 0; } }
  @media (min-width: 480px) and (max-width: 767px) {
    #index ul.product_list.tab-pane > li.first-item-of-tablet-line {
      clear: none; }
    #index ul.product_list.tab-pane > li.first-item-of-mobile-line {
      clear: left; } }

/***** IE code *****/
.ie8 .quick-view {
  background: #fff;
  border: 1px solid #d6d4d4; }
<?php }} ?>
