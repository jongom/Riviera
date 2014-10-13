<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:47
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\css\modules\blockcart\blockcart.css" */ ?>
<?php /*%%SmartyHeaderCode:31440543c49afeee774-35395967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0491577c3b4c04e49d319b5ca95824cced732793' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\css\\modules\\blockcart\\blockcart.css',
      1 => 1413236950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31440543c49afeee774-35395967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b004a931_30491878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b004a931_30491878')) {function content_543c49b004a931_30491878($_smarty_tpl) {?>/*******************************************************************
					Cart Block Styles
********************************************************************/
#header .shopping_cart {
  position: relative;
  float: right;
  padding-top: 50px; }
  #header .shopping_cart > a:first-child:after {
    content: "\f0d7";
    font-family: "FontAwesome";
    display: inline-block;
    float: right;
    font-size: 18px;
    color: #686666;
    padding: 6px 0 0 0; }
  #header .shopping_cart > a:first-child:hover:after {
    content: "\f0d8";
    padding: 4px 0px 2px 0px; }

.shopping_cart {
  width: 270px; }
  @media (max-width: 480px) {
    .shopping_cart {
      padding-top: 20px; } }
  @media (max-width: 1200px) {
    .shopping_cart {
      margin: 0 auto;
      float: none;
      width: 100%; } }
  .shopping_cart > a:first-child {
    padding: 7px 10px 14px 16px;
    background: #333333;
    display: block;
    font-weight: bold;
    color: #777777;
    text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
    overflow: hidden; }
    @media (min-width: 768px) and (max-width: 991px) {
      .shopping_cart > a:first-child span.ajax_cart_product_txt, .shopping_cart > a:first-child span.ajax_cart_product_txt_s {
        display: none !important; } }
    .shopping_cart > a:first-child b {
      color: white;
      font: 600 18px/22px "Open Sans", sans-serif;
      padding-right: 5px; }
    .shopping_cart > a:first-child:before {
      content: "\f07a";
      font-family: "FontAwesome";
      display: inline-block;
      font-size: 23px;
      line-height: 23px;
      color: white;
      padding-right: 15px; }
  .shopping_cart .ajax_cart_total {
    display: none !important; }
  .shopping_cart .block_cart_expand:after, .shopping_cart .block_cart_collapse:after {
    content: "\f0d7";
    font-family: "FontAwesome";
    display: inline-block;
    float: right;
    font-size: 18px;
    color: #686666;
    padding: 6px 0 0 0; }
  .shopping_cart .block_cart_collapse:after {
    content: "\f0d8";
    padding: 4px 0px 2px 0px; }

.cart_block .cart_block_list .remove_link {
  position: absolute;
  right: 10px;
  top: 19px; }
.cart_block .cart_block_list .remove_link a,
.cart_block .cart_block_list .ajax_cart_block_remove_link {
  color: #777777;
  display: block;
  width: 100%;
  height: 100%; }
  .cart_block .cart_block_list .remove_link a:before,
  .cart_block .cart_block_list .ajax_cart_block_remove_link:before {
    display: inline-block;
    content: "\f057";
    font-family: "FontAwesome";
    font-size: 18px;
    line-height: 18px; }
  .cart_block .cart_block_list .remove_link a:hover,
  .cart_block .cart_block_list .ajax_cart_block_remove_link:hover {
    color: #515151; }
.cart_block .cart-images {
  float: left;
  margin-right: 20px; }
.cart_block .cart-info {
  overflow: hidden;
  position: relative;
  padding-right: 20px; }
  .cart_block .cart-info .product-name {
    padding-bottom: 5px;
    margin-top: -4px; }
    .cart_block .cart-info .product-name a {
      font-size: 13px;
      line-height: 18px;
      display: inline-block; }
  .cart_block .cart-info .quantity-formated {
    display: inline-block;
    color: #9c9b9b;
    text-transform: uppercase;
    font-size: 10px;
    padding-right: 5px; }
    .cart_block .cart-info .quantity-formated .quantity {
      font-size: 15px; }
.cart_block dt {
  font-weight: normal;
  overflow: hidden;
  padding: 20px 10px 16px 20px;
  position: relative; }
.cart_block dd {
  position: relative; }
  .cart_block dd .cart_block_customizations {
    border-top: 1px dashed #333333; }
    .cart_block dd .cart_block_customizations li {
      padding: 10px 20px; }
      .cart_block dd .cart_block_customizations li .deleteCustomizableProduct {
        position: absolute;
        right: 10px; }
.cart_block .cart_block_no_products {
  margin: 0;
  padding: 10px 20px; }
.cart_block .cart-prices {
  border-top: 1px solid #d6d4d4;
  font-weight: bold;
  padding: 10px 20px 22px 20px; }
  .cart_block .cart-prices .cart-prices-line {
    overflow: hidden;
    border-bottom: 1px solid #515151;
    padding: 7px 0; }
    .cart_block .cart-prices .cart-prices-line.last-line {
      border: none; }
.cart_block .cart-buttons {
  overflow: hidden;
  padding: 20px 20px 10px 20px;
  margin: 0;
  background: #f6f6f6; }
  .cart_block .cart-buttons a {
    width: 100%;
    float: left;
    text-align: center;
    margin-bottom: 10px;
    margin-right: 10px; }
    .cart_block .cart-buttons a#button_order_cart {
      margin-right: 0;
      border: none; }
      .cart_block .cart-buttons a#button_order_cart span {
        padding: 7px 0;
        font-size: 1.1em;
        border: solid 1px #63c473;
        background: #43b155; }
      .cart_block .cart-buttons a#button_order_cart:hover span {
        border: solid 1px #358c43;
        background: #2e7a3a;
        color: white; }

/*******************************************************************
					Cart Block(Header) Styles
********************************************************************/
#header .cart_block {
  position: absolute;
  top: 95px;
  right: 0;
  z-index: 100;
  display: none;
  height: auto;
  background: #484848;
  color: white;
  width: 270px; }
  @media (max-width: 480px) {
    #header .cart_block {
      width: 100%; } }
  @media (max-width: 1200px) {
    #header .cart_block {
      width: 100%; } }
  #header .cart_block a {
    color: white; }
    #header .cart_block a:hover {
      color: #9c9b9b; }
  #header .cart_block .cart_block_list .remove_link a,
  #header .cart_block .cart_block_list .ajax_cart_block_remove_link {
    color: white;
    outline: none;
    text-decoration: none; }
    #header .cart_block .cart_block_list .remove_link a:hover,
    #header .cart_block .cart_block_list .ajax_cart_block_remove_link:hover {
      color: #9c9b9b; }
  #header .cart_block .price {
    color: white; }
  #header .cart_block dt {
    background: url(../../../img/cart-shadow.png) repeat-x; }
    #header .cart_block dt.first_item {
      background: none; }
  #header .cart_block .product-atributes {
    padding-bottom: 10px;
    font-size: 11px; }
    #header .cart_block .product-atributes a {
      color: #9c9b9b; }
      #header .cart_block .product-atributes a:hover {
        color: white; }
  #header .cart_block .cart-prices {
    border: none;
    background: url(../../../img/cart-shadow.png) repeat-x #3d3d3d; }
  #header .cart_block .cart-buttons {
    background: url(../../../img/cart-shadow.png) repeat-x #333333; }
#header .block_content {
  margin-bottom: 0; }

.cart_block #cart_block_summary,
.cart_block .title_block span,
#header .cart_block h4,
#header .cart_block .title_block,
#header .cart_block h4 {
  display: none; }

.cart_block .cart_block_shipping_cost,
.cart_block .cart_block_tax_cost,
.cart_block .cart_block_total,
.cart_block .cart_block_wrapping_cost {
  float: right; }

.cart_block table.vouchers {
  clear: both;
  width: 80%;
  margin: 0 auto;
  margin-bottom: 10px; }
  .cart_block table.vouchers tr td {
    padding: 2px; }
    .cart_block table.vouchers tr td.quantity {
      margin-right: 5px;
      min-width: 18px; }
    .cart_block table.vouchers tr td.delete {
      padding-left: 0;
      padding-right: 0;
      text-align: right;
      width: 15px; }

/*****************************************************************************
					Layer Cart Css
*****************************************************************************/
.layer_cart_overlay {
  background-color: #000;
  display: none;
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 98;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=20);
  opacity: 0.2; }

* html .layer_cart_overlay {
  position: absolute;
  left: 0;
  margin-left: -160px;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=20);
  opacity: 0.2; }

#layer_cart {
  background-color: white;
  position: absolute;
  display: none;
  z-index: 99;
  width: 84%;
  margin-right: 8%;
  margin-left: 8%;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px; }
  #layer_cart .layer_cart_product {
    padding: 30px 30px 30px 30px;
    overflow: hidden;
    position: static; }
    #layer_cart .layer_cart_product h2 {
      font: 400 23px/29px Arial, Helvetica, sans-serif;
      color: #46a74e;
      margin-bottom: 22px;
      padding-right: 100px; }
      @media (max-width: 767px) {
        #layer_cart .layer_cart_product h2 {
          font-size: 18px;
          padding-right: 0;
          line-height: normal; } }
      #layer_cart .layer_cart_product h2 i {
        font-size: 30px;
        line-height: 30px;
        float: left;
        padding-right: 8px; }
        @media (max-width: 767px) {
          #layer_cart .layer_cart_product h2 i {
            font-size: 22px;
            line-height: 22px; } }
    #layer_cart .layer_cart_product .product-image-container {
      max-width: 178px;
      border: 1px solid #d6d4d4;
      padding: 5px;
      float: left;
      margin-right: 30px; }
      @media (max-width: 480px) {
        #layer_cart .layer_cart_product .product-image-container {
          float: none;
          margin-right: 0;
          margin-bottom: 10px; } }
    #layer_cart .layer_cart_product .layer_cart_product_info {
      padding: 38px 0 0 0; }
      #layer_cart .layer_cart_product .layer_cart_product_info #layer_cart_product_title {
        display: block;
        padding-bottom: 8px; }
      #layer_cart .layer_cart_product .layer_cart_product_info > div {
        padding-bottom: 7px; }
        #layer_cart .layer_cart_product .layer_cart_product_info > div strong {
          padding-right: 3px; }
  #layer_cart .layer_cart_cart {
    background: #fafafa;
    border-left: 1px solid #d6d4d4;
    padding: 21px 30px 170px 30px;
    -webkit-border-radius: 0px 4px 4px 0px;
    -moz-border-radius: 0px 4px 4px 0px;
    -ms-border-radius: 0px 4px 4px 0px;
    -o-border-radius: 0px 4px 4px 0px;
    border-radius: 0px 4px 4px 0px;
    position: relative; }
    @media (min-width: 1200px) {
      #layer_cart .layer_cart_cart {
        min-height: 318px; } }
    @media (min-width: 992px) and (max-width: 1199px) {
      #layer_cart .layer_cart_cart {
        min-height: 360px; } }
    @media (max-width: 991px) {
      #layer_cart .layer_cart_cart {
        border-left: none;
        border-top: 1px solid #d6d4d4; } }
    #layer_cart .layer_cart_cart h2 {
      font: 400 23px/29px Arial, Helvetica, sans-serif;
      color: #333333;
      border-bottom: 1px solid #d6d4d4;
      padding-bottom: 13px;
      margin-bottom: 17px; }
      @media (max-width: 767px) {
        #layer_cart .layer_cart_cart h2 {
          font-size: 18px; } }
    #layer_cart .layer_cart_cart .layer_cart_row {
      padding: 0 0 7px 0; }
    #layer_cart .layer_cart_cart .button-container {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 0px 30px 20px 30px; }
      #layer_cart .layer_cart_cart .button-container .btn {
        margin-bottom: 10px; }
      #layer_cart .layer_cart_cart .button-container span.exclusive-medium {
        margin-right: 5px; }
        #layer_cart .layer_cart_cart .button-container span.exclusive-medium i {
          padding-right: 5px;
          color: #777777; }
  #layer_cart .cross {
    position: absolute;
    right: 7px;
    top: 8px;
    width: 25px;
    height: 25px;
    cursor: pointer;
    color: #333333;
    z-index: 2; }
    #layer_cart .cross:before {
      content: "\f057";
      display: block;
      font-family: "FontAwesome";
      font-size: 25px;
      line-height: 25px; }
    #layer_cart .cross:hover {
      color: #515151; }
  #layer_cart .continue {
    cursor: pointer; }
  #layer_cart p {
    padding: 0px; }

/************************************************************************
						Layer Cart Caroucel
*************************************************************************/
#layer_cart .crossseling .crossseling-content {
  border-top: 1px solid #d6d4d4;
  padding: 26px 30px 40px 30px;
  position: relative; }
#layer_cart .crossseling h2 {
  font: 400 23px/26px Arial, Helvetica, sans-serif;
  color: #333333;
  margin-bottom: 25px; }
#layer_cart .crossseling #blockcart_list {
  max-width: 773px;
  width: 84%;
  margin: 0 auto;
  overflow: hidden; }
  #layer_cart .crossseling #blockcart_list ul {
    display: block; }
    #layer_cart .crossseling #blockcart_list ul li {
      float: left;
      width: 178px;
      margin: 0 0px 0 0; }
      #layer_cart .crossseling #blockcart_list ul li .product-image-container {
        border: 1px solid #d6d4d4;
        text-align: center;
        padding: 5px;
        margin-bottom: 15px; }
        #layer_cart .crossseling #blockcart_list ul li .product-image-container img {
          width: 100%; }
      #layer_cart .crossseling #blockcart_list ul li .product-name {
        padding-bottom: 5px; }
        #layer_cart .crossseling #blockcart_list ul li .product-name a {
          font-size: 15px;
          line-height: 20px; }
  #layer_cart .crossseling #blockcart_list a.bx-prev,
  #layer_cart .crossseling #blockcart_list a.bx-next {
    display: block;
    font-family: "FontAwesome";
    font-size: 20px;
    line-height: 20px;
    width: 20px;
    height: 20px;
    color: #333333;
    text-indent: -5000px;
    position: absolute;
    top: 45%;
    margin-top: -20px; }
    #layer_cart .crossseling #blockcart_list a.bx-prev:after,
    #layer_cart .crossseling #blockcart_list a.bx-next:after {
      display: block;
      text-indent: 0; }
    #layer_cart .crossseling #blockcart_list a.bx-prev:hover,
    #layer_cart .crossseling #blockcart_list a.bx-next:hover {
      color: #c0c0c0; }
    #layer_cart .crossseling #blockcart_list a.bx-prev.disabled,
    #layer_cart .crossseling #blockcart_list a.bx-next.disabled {
      display: none; }
  #layer_cart .crossseling #blockcart_list a.bx-prev {
    left: 5%; }
    #layer_cart .crossseling #blockcart_list a.bx-prev:after {
      content: "\f137"; }
  #layer_cart .crossseling #blockcart_list a.bx-next {
    right: 5%; }
    #layer_cart .crossseling #blockcart_list a.bx-next:after {
      content: "\f138"; }
  #layer_cart .crossseling #blockcart_list .bx-controls {
    overflow: hidden; }
<?php }} ?>
