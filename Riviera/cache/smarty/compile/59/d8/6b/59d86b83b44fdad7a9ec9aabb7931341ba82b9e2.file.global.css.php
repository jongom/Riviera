<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:31
         compiled from "C:\xampp\htdocs\Reveria\themes\default-bootstrap\css\global.css" */ ?>
<?php /*%%SmartyHeaderCode:210145434474fd11244-65391583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d86b83b44fdad7a9ec9aabb7931341ba82b9e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\themes\\default-bootstrap\\css\\global.css',
      1 => 1412712204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210145434474fd11244-65391583',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344750879fe5_20602967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344750879fe5_20602967')) {function content_54344750879fe5_20602967($_smarty_tpl) {?>@charset "UTF-8";
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline; }

html {
  line-height: 1; }

ol, ul {
  list-style: none; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle; }

q, blockquote {
  quotes: none; }
  q:before, q:after, blockquote:before, blockquote:after {
    content: "";
    content: none; }

a img {
  border: none; }

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section, summary {
  display: block; }

/*!
 * Bootstrap v3.0.0
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world by @mdo and @fat.
 */
/*! normalize.css v2.1.0 | MIT License | git.io/normalize */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block; }

audio,
canvas,
video {
  display: inline-block; }

audio:not([controls]) {
  display: none;
  height: 0; }

[hidden] {
  display: none; }

html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%; }

body {
  margin: 0; }

a:focus {
  outline: thin dotted; }

a:active,
a:hover {
  outline: 0; }

h1 {
  font-size: 2em;
  margin: 0.67em 0; }

abbr[title] {
  border-bottom: 1px dotted; }

b,
strong {
  font-weight: bold; }

dfn {
  font-style: italic; }

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0; }

mark {
  background: #ff0;
  color: #000; }

code,
kbd,
pre,
samp {
  font-family: monospace, serif;
  font-size: 1em; }

pre {
  white-space: pre-wrap; }

q {
  quotes: "\201C" "\201D" "\2018" "\2019"; }

small {
  font-size: 80%; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sup {
  top: -0.5em; }

sub {
  bottom: -0.25em; }

img {
  border: 0; }

svg:not(:root) {
  overflow: hidden; }

figure {
  margin: 0; }

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

legend {
  border: 0;
  padding: 0; }

button,
input,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  margin: 0; }

button,
input {
  line-height: normal; }

button,
select {
  text-transform: none; }

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer; }

button[disabled],
html input[disabled] {
  cursor: default; }

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0; }

input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0; }

textarea {
  overflow: auto;
  vertical-align: top; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

html {
  font-size: 62.5%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  line-height: 1.42857;
  color: #777777;
  background-color: white; }

input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input,
select[multiple],
textarea {
  background-image: none; }

a {
  color: #777777;
  text-decoration: none; }
  a:hover, a:focus {
    color: #515151;
    text-decoration: underline; }
  a:focus {
    outline: thin dotted #333;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }

img {
  vertical-align: middle; }

.img-responsive {
  display: block;
  max-width: 100%;
  height: auto; }

.img-rounded {
  border-radius: 6px; }

.img-thumbnail, .thumbnail {
  padding: 4px;
  line-height: 1.42857;
  background-color: white;
  border: 1px solid #dddddd;
  border-radius: 0px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto; }

.img-circle {
  border-radius: 50%; }

hr {
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #eeeeee; }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0 0 0 0);
  border: 0; }

p {
  margin: 0 0 9px; }

.lead {
  margin-bottom: 18px;
  font-size: 14.95px;
  font-weight: 200;
  line-height: 1.4; }
  @media (min-width: 768px) {
    .lead {
      font-size: 19.5px; } }

small {
  font-size: 85%; }

cite {
  font-style: normal; }

.text-muted {
  color: #999999; }

.text-primary {
  color: #428bca; }

.text-warning {
  color: white; }

.text-danger {
  color: white; }

.text-success {
  color: white; }

.text-info {
  color: white; }

.text-left {
  text-align: left; }

.text-right, #cart_summary tbody td.cart_unit, #cart_summary tbody td.cart_total {
  text-align: right; }

.text-center, #cart_summary tbody td.cart_product, #cart_summary tbody td.cart_avail {
  text-align: center; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 500;
  line-height: 1.1; }
  h1 small, h2 small, h3 small, h4 small, h5 small, h6 small,
  .h1 small, .h2 small, .h3 small, .h4 small, .h5 small, .h6 small {
    font-weight: normal;
    line-height: 1;
    color: #999999; }

h1,
h2,
h3 {
  margin-top: 18px;
  margin-bottom: 9px; }

h4,
h5,
h6 {
  margin-top: 9px;
  margin-bottom: 9px; }

h1, .h1 {
  font-size: 33px; }

h2, .h2 {
  font-size: 27px; }

h3, .h3 {
  font-size: 23px; }

h4, .h4 {
  font-size: 17px; }

h5, .h5 {
  font-size: 13px; }

h6, .h6 {
  font-size: 12px; }

h1 small, .h1 small {
  font-size: 23px; }

h2 small, .h2 small {
  font-size: 17px; }

h3 small, .h3 small,
h4 small, .h4 small {
  font-size: 13px; }

.page-header {
  padding-bottom: 8px;
  margin: 36px 0 18px;
  border-bottom: 1px solid #eeeeee; }

ul,
ol {
  margin-top: 0;
  margin-bottom: 9px; }
  ul ul,
  ul ol,
  ol ul,
  ol ol {
    margin-bottom: 0; }

.list-unstyled, .list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px; }

dl {
  margin-bottom: 18px; }

dt,
dd {
  line-height: 1.42857; }

dt {
  font-weight: bold; }

dd {
  margin-left: 0; }

@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap; }
  .dl-horizontal dd {
    margin-left: 180px; }
    .dl-horizontal dd:before, .dl-horizontal dd:after {
      content: " ";
      /* 1 */
      display: table;
      /* 2 */ }
    .dl-horizontal dd:after {
      clear: both; } }
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #999999; }

abbr.initialism {
  font-size: 90%;
  text-transform: uppercase; }

blockquote {
  padding: 9px 18px;
  margin: 0 0 18px;
  border-left: 5px solid #eeeeee; }
  blockquote p {
    font-size: 16.25px;
    font-weight: 300;
    line-height: 1.25; }
  blockquote p:last-child {
    margin-bottom: 0; }
  blockquote small {
    display: block;
    line-height: 1.42857;
    color: #999999; }
    blockquote small:before {
      content: '\2014 \00A0'; }
  blockquote.pull-right {
    padding-right: 15px;
    padding-left: 0;
    border-right: 5px solid #eeeeee;
    border-left: 0; }
    blockquote.pull-right p,
    blockquote.pull-right small {
      text-align: right; }
    blockquote.pull-right small:before {
      content: ''; }
    blockquote.pull-right small:after {
      content: '\00A0 \2014'; }

q:before,
q:after,
blockquote:before,
blockquote:after {
  content: ""; }

address {
  display: block;
  margin-bottom: 18px;
  font-style: normal;
  line-height: 1.42857; }

code,
pre {
  font-family: Monaco, Menlo, Consolas, "Courier New", monospace; }

code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  white-space: nowrap;
  border-radius: 0px; }

pre {
  display: block;
  padding: 8.5px;
  margin: 0 0 9px;
  font-size: 12px;
  line-height: 1.42857;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: whitesmoke;
  border: 1px solid #cccccc;
  border-radius: 0px; }
  pre.prettyprint {
    margin-bottom: 18px; }
  pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border: 0; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px; }
  .container:before, .container:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */ }
  .container:after {
    clear: both; }

.row {
  margin-left: -15px;
  margin-right: -15px; }
  .row:before, .row:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */ }
  .row:after {
    clear: both; }

.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
header .row #header_logo,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px; }

.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11 {
  float: left; }

.col-xs-1 {
  width: 8.33333%; }

.col-xs-2 {
  width: 16.66667%; }

.col-xs-3 {
  width: 25%; }

.col-xs-4 {
  width: 33.33333%; }

.col-xs-5 {
  width: 41.66667%; }

.col-xs-6 {
  width: 50%; }

.col-xs-7 {
  width: 58.33333%; }

.col-xs-8 {
  width: 66.66667%; }

.col-xs-9 {
  width: 75%; }

.col-xs-10 {
  width: 83.33333%; }

.col-xs-11 {
  width: 91.66667%; }

.col-xs-12 {
  width: 100%; }

@media (min-width: 768px) {
  .container {
    max-width: 750px; }

  .col-sm-1,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  header .row #header_logo,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-sm-10,
  .col-sm-11 {
    float: left; }

  .col-sm-1 {
    width: 8.33333%; }

  .col-sm-2 {
    width: 16.66667%; }

  .col-sm-3 {
    width: 25%; }

  .col-sm-4, header .row #header_logo {
    width: 33.33333%; }

  .col-sm-5 {
    width: 41.66667%; }

  .col-sm-6 {
    width: 50%; }

  .col-sm-7 {
    width: 58.33333%; }

  .col-sm-8 {
    width: 66.66667%; }

  .col-sm-9 {
    width: 75%; }

  .col-sm-10 {
    width: 83.33333%; }

  .col-sm-11 {
    width: 91.66667%; }

  .col-sm-12 {
    width: 100%; }

  .col-sm-push-1 {
    left: 8.33333%; }

  .col-sm-push-2 {
    left: 16.66667%; }

  .col-sm-push-3 {
    left: 25%; }

  .col-sm-push-4 {
    left: 33.33333%; }

  .col-sm-push-5 {
    left: 41.66667%; }

  .col-sm-push-6 {
    left: 50%; }

  .col-sm-push-7 {
    left: 58.33333%; }

  .col-sm-push-8 {
    left: 66.66667%; }

  .col-sm-push-9 {
    left: 75%; }

  .col-sm-push-10 {
    left: 83.33333%; }

  .col-sm-push-11 {
    left: 91.66667%; }

  .col-sm-pull-1 {
    right: 8.33333%; }

  .col-sm-pull-2 {
    right: 16.66667%; }

  .col-sm-pull-3 {
    right: 25%; }

  .col-sm-pull-4 {
    right: 33.33333%; }

  .col-sm-pull-5 {
    right: 41.66667%; }

  .col-sm-pull-6 {
    right: 50%; }

  .col-sm-pull-7 {
    right: 58.33333%; }

  .col-sm-pull-8 {
    right: 66.66667%; }

  .col-sm-pull-9 {
    right: 75%; }

  .col-sm-pull-10 {
    right: 83.33333%; }

  .col-sm-pull-11 {
    right: 91.66667%; }

  .col-sm-offset-1 {
    margin-left: 8.33333%; }

  .col-sm-offset-2 {
    margin-left: 16.66667%; }

  .col-sm-offset-3 {
    margin-left: 25%; }

  .col-sm-offset-4 {
    margin-left: 33.33333%; }

  .col-sm-offset-5 {
    margin-left: 41.66667%; }

  .col-sm-offset-6 {
    margin-left: 50%; }

  .col-sm-offset-7 {
    margin-left: 58.33333%; }

  .col-sm-offset-8 {
    margin-left: 66.66667%; }

  .col-sm-offset-9 {
    margin-left: 75%; }

  .col-sm-offset-10 {
    margin-left: 83.33333%; }

  .col-sm-offset-11 {
    margin-left: 91.66667%; } }
@media (min-width: 992px) {
  .container {
    max-width: 970px; }

  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-10,
  .col-md-11 {
    float: left; }

  .col-md-1 {
    width: 8.33333%; }

  .col-md-2 {
    width: 16.66667%; }

  .col-md-3 {
    width: 25%; }

  .col-md-4 {
    width: 33.33333%; }

  .col-md-5 {
    width: 41.66667%; }

  .col-md-6 {
    width: 50%; }

  .col-md-7 {
    width: 58.33333%; }

  .col-md-8 {
    width: 66.66667%; }

  .col-md-9 {
    width: 75%; }

  .col-md-10 {
    width: 83.33333%; }

  .col-md-11 {
    width: 91.66667%; }

  .col-md-12 {
    width: 100%; }

  .col-md-push-0 {
    left: auto; }

  .col-md-push-1 {
    left: 8.33333%; }

  .col-md-push-2 {
    left: 16.66667%; }

  .col-md-push-3 {
    left: 25%; }

  .col-md-push-4 {
    left: 33.33333%; }

  .col-md-push-5 {
    left: 41.66667%; }

  .col-md-push-6 {
    left: 50%; }

  .col-md-push-7 {
    left: 58.33333%; }

  .col-md-push-8 {
    left: 66.66667%; }

  .col-md-push-9 {
    left: 75%; }

  .col-md-push-10 {
    left: 83.33333%; }

  .col-md-push-11 {
    left: 91.66667%; }

  .col-md-pull-0 {
    right: auto; }

  .col-md-pull-1 {
    right: 8.33333%; }

  .col-md-pull-2 {
    right: 16.66667%; }

  .col-md-pull-3 {
    right: 25%; }

  .col-md-pull-4 {
    right: 33.33333%; }

  .col-md-pull-5 {
    right: 41.66667%; }

  .col-md-pull-6 {
    right: 50%; }

  .col-md-pull-7 {
    right: 58.33333%; }

  .col-md-pull-8 {
    right: 66.66667%; }

  .col-md-pull-9 {
    right: 75%; }

  .col-md-pull-10 {
    right: 83.33333%; }

  .col-md-pull-11 {
    right: 91.66667%; }

  .col-md-offset-0 {
    margin-left: 0; }

  .col-md-offset-1 {
    margin-left: 8.33333%; }

  .col-md-offset-2 {
    margin-left: 16.66667%; }

  .col-md-offset-3 {
    margin-left: 25%; }

  .col-md-offset-4 {
    margin-left: 33.33333%; }

  .col-md-offset-5 {
    margin-left: 41.66667%; }

  .col-md-offset-6 {
    margin-left: 50%; }

  .col-md-offset-7 {
    margin-left: 58.33333%; }

  .col-md-offset-8 {
    margin-left: 66.66667%; }

  .col-md-offset-9 {
    margin-left: 75%; }

  .col-md-offset-10 {
    margin-left: 83.33333%; }

  .col-md-offset-11 {
    margin-left: 91.66667%; } }
@media (min-width: 1200px) {
  .container {
    max-width: 1170px; }

  .col-lg-1,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9,
  .col-lg-10,
  .col-lg-11 {
    float: left; }

  .col-lg-1 {
    width: 8.33333%; }

  .col-lg-2 {
    width: 16.66667%; }

  .col-lg-3 {
    width: 25%; }

  .col-lg-4 {
    width: 33.33333%; }

  .col-lg-5 {
    width: 41.66667%; }

  .col-lg-6 {
    width: 50%; }

  .col-lg-7 {
    width: 58.33333%; }

  .col-lg-8 {
    width: 66.66667%; }

  .col-lg-9 {
    width: 75%; }

  .col-lg-10 {
    width: 83.33333%; }

  .col-lg-11 {
    width: 91.66667%; }

  .col-lg-12 {
    width: 100%; }

  .col-lg-push-0 {
    left: auto; }

  .col-lg-push-1 {
    left: 8.33333%; }

  .col-lg-push-2 {
    left: 16.66667%; }

  .col-lg-push-3 {
    left: 25%; }

  .col-lg-push-4 {
    left: 33.33333%; }

  .col-lg-push-5 {
    left: 41.66667%; }

  .col-lg-push-6 {
    left: 50%; }

  .col-lg-push-7 {
    left: 58.33333%; }

  .col-lg-push-8 {
    left: 66.66667%; }

  .col-lg-push-9 {
    left: 75%; }

  .col-lg-push-10 {
    left: 83.33333%; }

  .col-lg-push-11 {
    left: 91.66667%; }

  .col-lg-pull-0 {
    right: auto; }

  .col-lg-pull-1 {
    right: 8.33333%; }

  .col-lg-pull-2 {
    right: 16.66667%; }

  .col-lg-pull-3 {
    right: 25%; }

  .col-lg-pull-4 {
    right: 33.33333%; }

  .col-lg-pull-5 {
    right: 41.66667%; }

  .col-lg-pull-6 {
    right: 50%; }

  .col-lg-pull-7 {
    right: 58.33333%; }

  .col-lg-pull-8 {
    right: 66.66667%; }

  .col-lg-pull-9 {
    right: 75%; }

  .col-lg-pull-10 {
    right: 83.33333%; }

  .col-lg-pull-11 {
    right: 91.66667%; }

  .col-lg-offset-0 {
    margin-left: 0; }

  .col-lg-offset-1 {
    margin-left: 8.33333%; }

  .col-lg-offset-2 {
    margin-left: 16.66667%; }

  .col-lg-offset-3 {
    margin-left: 25%; }

  .col-lg-offset-4 {
    margin-left: 33.33333%; }

  .col-lg-offset-5 {
    margin-left: 41.66667%; }

  .col-lg-offset-6 {
    margin-left: 50%; }

  .col-lg-offset-7 {
    margin-left: 58.33333%; }

  .col-lg-offset-8 {
    margin-left: 66.66667%; }

  .col-lg-offset-9 {
    margin-left: 75%; }

  .col-lg-offset-10 {
    margin-left: 83.33333%; }

  .col-lg-offset-11 {
    margin-left: 91.66667%; } }
table {
  max-width: 100%;
  background-color: transparent; }

th {
  text-align: left; }

.table {
  width: 100%;
  margin-bottom: 18px; }
  .table thead > tr > th,
  .table thead > tr > td,
  .table tbody > tr > th,
  .table tbody > tr > td,
  .table tfoot > tr > th,
  .table tfoot > tr > td {
    padding: 9px 8px 11px 18px;
    line-height: 1.42857;
    vertical-align: top;
    border-top: 1px solid #d6d4d4; }
  .table thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid #d6d4d4; }
  .table caption + thead tr:first-child th, .table caption + thead tr:first-child td,
  .table colgroup + thead tr:first-child th,
  .table colgroup + thead tr:first-child td,
  .table thead:first-child tr:first-child th,
  .table thead:first-child tr:first-child td {
    border-top: 0; }
  .table tbody + tbody {
    border-top: 2px solid #d6d4d4; }
  .table .table {
    background-color: white; }

.table-condensed thead > tr > th,
.table-condensed thead > tr > td,
.table-condensed tbody > tr > th,
.table-condensed tbody > tr > td,
.table-condensed tfoot > tr > th,
.table-condensed tfoot > tr > td {
  padding: 5px; }

.table-bordered {
  border: 1px solid #d6d4d4; }
  .table-bordered > thead > tr > th,
  .table-bordered > thead > tr > td,
  .table-bordered > tbody > tr > th,
  .table-bordered > tbody > tr > td,
  .table-bordered > tfoot > tr > th,
  .table-bordered > tfoot > tr > td {
    border: 1px solid #d6d4d4; }
  .table-bordered > thead > tr > th,
  .table-bordered > thead > tr > td {
    border-bottom-width: 2px; }

.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9; }

.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: whitesmoke; }

table col[class*="col-"] {
  float: none;
  display: table-column; }

table td[class*="col-"],
table th[class*="col-"] {
  float: none;
  display: table-cell; }

.table > thead > tr > td.active,
.table > thead > tr > th.active, .table > thead > tr.active > td, .table > thead > tr.active > th,
.table > tbody > tr > td.active,
.table > tbody > tr > th.active,
.table > tbody > tr.active > td,
.table > tbody > tr.active > th,
.table > tfoot > tr > td.active,
.table > tfoot > tr > th.active,
.table > tfoot > tr.active > td,
.table > tfoot > tr.active > th {
  background-color: whitesmoke; }

.table > thead > tr > td.success,
.table > thead > tr > th.success, .table > thead > tr.success > td, .table > thead > tr.success > th,
.table > tbody > tr > td.success,
.table > tbody > tr > th.success,
.table > tbody > tr.success > td,
.table > tbody > tr.success > th,
.table > tfoot > tr > td.success,
.table > tfoot > tr > th.success,
.table > tfoot > tr.success > td,
.table > tfoot > tr.success > th {
  background-color: #55c65e;
  border-color: #48b151; }

.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover, .table-hover > tbody > tr.success:hover > td {
  background-color: #42c04c;
  border-color: #419f49; }

.table > thead > tr > td.danger,
.table > thead > tr > th.danger, .table > thead > tr.danger > td, .table > thead > tr.danger > th,
.table > tbody > tr > td.danger,
.table > tbody > tr > th.danger,
.table > tbody > tr.danger > td,
.table > tbody > tr.danger > th,
.table > tfoot > tr > td.danger,
.table > tfoot > tr > th.danger,
.table > tfoot > tr.danger > td,
.table > tfoot > tr.danger > th {
  background-color: #f3515c;
  border-color: #d4323d; }

.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover, .table-hover > tbody > tr.danger:hover > td {
  background-color: #f13946;
  border-color: #c32933; }

.table > thead > tr > td.warning,
.table > thead > tr > th.warning, .table > thead > tr.warning > td, .table > thead > tr.warning > th,
.table > tbody > tr > td.warning,
.table > tbody > tr > th.warning,
.table > tbody > tr.warning > td,
.table > tbody > tr.warning > th,
.table > tfoot > tr > td.warning,
.table > tfoot > tr > th.warning,
.table > tfoot > tr.warning > td,
.table > tfoot > tr.warning > th {
  background-color: #fe9126;
  border-color: #e4752b; }

.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover, .table-hover > tbody > tr.warning:hover > td {
  background-color: #fe840d;
  border-color: #da681c; }

@media (max-width: 768px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    overflow-x: scroll;
    border: 1px solid #d6d4d4; }
    .table-responsive > .table {
      margin-bottom: 0;
      background-color: #fff; }
      .table-responsive > .table > thead > tr > th,
      .table-responsive > .table > thead > tr > td,
      .table-responsive > .table > tbody > tr > th,
      .table-responsive > .table > tbody > tr > td,
      .table-responsive > .table > tfoot > tr > th,
      .table-responsive > .table > tfoot > tr > td {
        white-space: nowrap; }
    .table-responsive > .table-bordered {
      border: 0; }
      .table-responsive > .table-bordered > thead > tr > th:first-child,
      .table-responsive > .table-bordered > thead > tr > td:first-child,
      .table-responsive > .table-bordered > tbody > tr > th:first-child,
      .table-responsive > .table-bordered > tbody > tr > td:first-child,
      .table-responsive > .table-bordered > tfoot > tr > th:first-child,
      .table-responsive > .table-bordered > tfoot > tr > td:first-child {
        border-left: 0; }
      .table-responsive > .table-bordered > thead > tr > th:last-child,
      .table-responsive > .table-bordered > thead > tr > td:last-child,
      .table-responsive > .table-bordered > tbody > tr > th:last-child,
      .table-responsive > .table-bordered > tbody > tr > td:last-child,
      .table-responsive > .table-bordered > tfoot > tr > th:last-child,
      .table-responsive > .table-bordered > tfoot > tr > td:last-child {
        border-right: 0; }
      .table-responsive > .table-bordered > thead > tr:last-child > th,
      .table-responsive > .table-bordered > thead > tr:last-child > td,
      .table-responsive > .table-bordered > tbody > tr:last-child > th,
      .table-responsive > .table-bordered > tbody > tr:last-child > td,
      .table-responsive > .table-bordered > tfoot > tr:last-child > th,
      .table-responsive > .table-bordered > tfoot > tr:last-child > td {
        border-bottom: 0; } }
fieldset {
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 18px;
  font-size: 19.5px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5; }

label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: bold; }

input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  /* IE8-9 */
  line-height: normal; }

input[type="file"] {
  display: block; }

select[multiple],
select[size] {
  height: auto; }

select optgroup {
  font-size: inherit;
  font-style: inherit;
  font-family: inherit; }

input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px; }

input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
  height: auto; }

.form-control:-moz-placeholder {
  color: #999999; }
.form-control::-moz-placeholder {
  color: #999999; }
.form-control:-ms-input-placeholder {
  color: #999999; }
.form-control::-webkit-input-placeholder {
  color: #999999; }

.form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857;
  color: #9c9b9b;
  vertical-align: middle;
  background-color: white;
  border: 1px solid #d6d4d4;
  border-radius: 0px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }
  .form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6); }
  .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    cursor: not-allowed;
    background-color: #eeeeee; }

textarea.form-control {
  height: auto; }

.form-group {
  margin-bottom: 15px; }

.radio,
.checkbox {
  display: block;
  min-height: 18px;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 20px;
  vertical-align: middle; }
  .radio label,
  .checkbox label {
    display: inline;
    margin-bottom: 0;
    font-weight: normal;
    cursor: pointer; }

.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  float: left;
  margin-left: -20px; }

.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px; }

.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer; }

.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px; }

input[type="radio"][disabled], fieldset[disabled] input[type="radio"],
input[type="checkbox"][disabled], fieldset[disabled]
input[type="checkbox"],
.radio[disabled], fieldset[disabled]
.radio,
.radio-inline[disabled], fieldset[disabled]
.radio-inline,
.checkbox[disabled], fieldset[disabled]
.checkbox,
.checkbox-inline[disabled], fieldset[disabled]
.checkbox-inline {
  cursor: not-allowed; }

.input-sm, .input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px; }

select.input-sm, .input-group-sm > select.form-control,
.input-group-sm > select.input-group-addon,
.input-group-sm > .input-group-btn > select.btn {
  height: 30px;
  line-height: 30px; }

textarea.input-sm, .input-group-sm > textarea.form-control,
.input-group-sm > textarea.input-group-addon,
.input-group-sm > .input-group-btn > textarea.btn {
  height: auto; }

.input-lg, .input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 44px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.33;
  border-radius: 6px; }

select.input-lg, .input-group-lg > select.form-control,
.input-group-lg > select.input-group-addon,
.input-group-lg > .input-group-btn > select.btn {
  height: 44px;
  line-height: 44px; }

textarea.input-lg, .input-group-lg > textarea.form-control,
.input-group-lg > textarea.input-group-addon,
.input-group-lg > .input-group-btn > textarea.btn {
  height: auto; }

.has-warning .help-block,
.has-warning .control-label {
  color: white; }
.has-warning .form-control {
  border-color: white;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-warning .form-control:focus {
    border-color: #e6e6e6;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px white;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px white; }
.has-warning .input-group-addon {
  color: white;
  border-color: white;
  background-color: #fe9126; }

.has-error .help-block,
.has-error .control-label {
  color: white; }
.has-error .form-control {
  border-color: white;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-error .form-control:focus {
    border-color: #e6e6e6;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px white;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px white; }
.has-error .input-group-addon {
  color: white;
  border-color: white;
  background-color: #f3515c; }

.has-success .help-block,
.has-success .control-label {
  color: white; }
.has-success .form-control {
  border-color: white;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-success .form-control:focus {
    border-color: #e6e6e6;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px white;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px white; }
.has-success .input-group-addon {
  color: white;
  border-color: white;
  background-color: #55c65e; }

.form-control-static {
  margin-bottom: 0;
  padding-top: 7px; }

.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #b7b7b7; }

@media (min-width: 768px) {
  .form-inline .form-group, .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle; }
  .form-inline .form-control, .navbar-form .form-control {
    display: inline-block; }
  .form-inline .radio, .navbar-form .radio,
  .form-inline .checkbox,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-left: 0; }
  .form-inline .radio input[type="radio"], .navbar-form .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"],
  .navbar-form .checkbox input[type="checkbox"] {
    float: none;
    margin-left: 0; } }

.form-horizontal .control-label,
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px; }
.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px; }
  .form-horizontal .form-group:before, .form-horizontal .form-group:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */ }
  .form-horizontal .form-group:after {
    clear: both; }
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right; } }

.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 13px;
  font-weight: normal;
  line-height: 1.42857;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 0px;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none; }
  .btn:focus {
    outline: thin dotted #333;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }
  .btn:hover, .btn:focus {
    color: #333333;
    text-decoration: none; }
  .btn:active, .btn.active {
    outline: 0;
    background-image: none;
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125); }
  .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
    cursor: not-allowed;
    pointer-events: none;
    opacity: 0.65;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
    box-shadow: none; }

.btn-default {
  color: #333333;
  background-color: white;
  border-color: #cccccc; }
  .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active {
    color: #333333;
    background-color: #ebebeb;
    border-color: #adadad; }
  .open .btn-default.dropdown-toggle {
    color: #333333;
    background-color: #ebebeb;
    border-color: #adadad; }
  .btn-default:active, .btn-default.active {
    background-image: none; }
  .open .btn-default.dropdown-toggle {
    background-image: none; }
  .btn-default.disabled, .btn-default.disabled:hover, .btn-default.disabled:focus, .btn-default.disabled:active, .btn-default.disabled.active, .btn-default[disabled], .btn-default[disabled]:hover, .btn-default[disabled]:focus, .btn-default[disabled]:active, .btn-default[disabled].active, fieldset[disabled] .btn-default, fieldset[disabled] .btn-default:hover, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:active, fieldset[disabled] .btn-default.active {
    background-color: white;
    border-color: #cccccc; }

.btn-primary {
  color: white;
  background-color: #428bca;
  border-color: #357ebd; }
  .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active {
    color: white;
    background-color: #3276b1;
    border-color: #285e8e; }
  .open .btn-primary.dropdown-toggle {
    color: white;
    background-color: #3276b1;
    border-color: #285e8e; }
  .btn-primary:active, .btn-primary.active {
    background-image: none; }
  .open .btn-primary.dropdown-toggle {
    background-image: none; }
  .btn-primary.disabled, .btn-primary.disabled:hover, .btn-primary.disabled:focus, .btn-primary.disabled:active, .btn-primary.disabled.active, .btn-primary[disabled], .btn-primary[disabled]:hover, .btn-primary[disabled]:focus, .btn-primary[disabled]:active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary, fieldset[disabled] .btn-primary:hover, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary:active, fieldset[disabled] .btn-primary.active {
    background-color: #428bca;
    border-color: #357ebd; }

.btn-warning {
  color: white;
  background-color: #f0ad4e;
  border-color: #eea236; }
  .btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active {
    color: white;
    background-color: #ed9c28;
    border-color: #d58512; }
  .open .btn-warning.dropdown-toggle {
    color: white;
    background-color: #ed9c28;
    border-color: #d58512; }
  .btn-warning:active, .btn-warning.active {
    background-image: none; }
  .open .btn-warning.dropdown-toggle {
    background-image: none; }
  .btn-warning.disabled, .btn-warning.disabled:hover, .btn-warning.disabled:focus, .btn-warning.disabled:active, .btn-warning.disabled.active, .btn-warning[disabled], .btn-warning[disabled]:hover, .btn-warning[disabled]:focus, .btn-warning[disabled]:active, .btn-warning[disabled].active, fieldset[disabled] .btn-warning, fieldset[disabled] .btn-warning:hover, fieldset[disabled] .btn-warning:focus, fieldset[disabled] .btn-warning:active, fieldset[disabled] .btn-warning.active {
    background-color: #f0ad4e;
    border-color: #eea236; }

.btn-danger {
  color: white;
  background-color: #d9534f;
  border-color: #d43f3a; }
  .btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active {
    color: white;
    background-color: #d2322d;
    border-color: #ac2925; }
  .open .btn-danger.dropdown-toggle {
    color: white;
    background-color: #d2322d;
    border-color: #ac2925; }
  .btn-danger:active, .btn-danger.active {
    background-image: none; }
  .open .btn-danger.dropdown-toggle {
    background-image: none; }
  .btn-danger.disabled, .btn-danger.disabled:hover, .btn-danger.disabled:focus, .btn-danger.disabled:active, .btn-danger.disabled.active, .btn-danger[disabled], .btn-danger[disabled]:hover, .btn-danger[disabled]:focus, .btn-danger[disabled]:active, .btn-danger[disabled].active, fieldset[disabled] .btn-danger, fieldset[disabled] .btn-danger:hover, fieldset[disabled] .btn-danger:focus, fieldset[disabled] .btn-danger:active, fieldset[disabled] .btn-danger.active {
    background-color: #d9534f;
    border-color: #d43f3a; }

.btn-success {
  color: white;
  background-color: #46a74e;
  border-color: #3e9546; }
  .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active {
    color: white;
    background-color: #3a8a41;
    border-color: #2c6a31; }
  .open .btn-success.dropdown-toggle {
    color: white;
    background-color: #3a8a41;
    border-color: #2c6a31; }
  .btn-success:active, .btn-success.active {
    background-image: none; }
  .open .btn-success.dropdown-toggle {
    background-image: none; }
  .btn-success.disabled, .btn-success.disabled:hover, .btn-success.disabled:focus, .btn-success.disabled:active, .btn-success.disabled.active, .btn-success[disabled], .btn-success[disabled]:hover, .btn-success[disabled]:focus, .btn-success[disabled]:active, .btn-success[disabled].active, fieldset[disabled] .btn-success, fieldset[disabled] .btn-success:hover, fieldset[disabled] .btn-success:focus, fieldset[disabled] .btn-success:active, fieldset[disabled] .btn-success.active {
    background-color: #46a74e;
    border-color: #3e9546; }

.btn-info {
  color: white;
  background-color: #5192f3;
  border-color: #3983f1; }
  .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active {
    color: white;
    background-color: #2b7af0;
    border-color: #0f62de; }
  .open .btn-info.dropdown-toggle {
    color: white;
    background-color: #2b7af0;
    border-color: #0f62de; }
  .btn-info:active, .btn-info.active {
    background-image: none; }
  .open .btn-info.dropdown-toggle {
    background-image: none; }
  .btn-info.disabled, .btn-info.disabled:hover, .btn-info.disabled:focus, .btn-info.disabled:active, .btn-info.disabled.active, .btn-info[disabled], .btn-info[disabled]:hover, .btn-info[disabled]:focus, .btn-info[disabled]:active, .btn-info[disabled].active, fieldset[disabled] .btn-info, fieldset[disabled] .btn-info:hover, fieldset[disabled] .btn-info:focus, fieldset[disabled] .btn-info:active, fieldset[disabled] .btn-info.active {
    background-color: #5192f3;
    border-color: #3983f1; }

.btn-link {
  color: #777777;
  font-weight: normal;
  cursor: pointer;
  border-radius: 0; }
  .btn-link, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none; }
  .btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
    border-color: transparent; }
  .btn-link:hover, .btn-link:focus {
    color: #515151;
    text-decoration: underline;
    background-color: transparent; }
  .btn-link[disabled]:hover, .btn-link[disabled]:focus, fieldset[disabled] .btn-link:hover, fieldset[disabled] .btn-link:focus {
    color: #999999;
    text-decoration: none; }

.btn-lg, .btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.33;
  border-radius: 6px; }

.btn-sm, .btn-group-sm > .btn,
.btn-xs,
.btn-group-xs > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px; }

.btn-xs, .btn-group-xs > .btn {
  padding: 1px 5px; }

.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0; }

.btn-block + .btn-block {
  margin-top: 5px; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  .fade.in {
    opacity: 1; }

.collapse {
  display: none; }
  .collapse.in {
    display: block; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  transition: height 0.35s ease; }

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px solid black;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  border-bottom: 0 dotted;
  content: ""; }

.dropdown {
  position: relative; }

.dropdown-toggle:focus {
  outline: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 13px;
  background-color: white;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box; }
  .dropdown-menu.pull-right {
    right: 0;
    left: auto; }
  .dropdown-menu .divider {
    height: 1px;
    margin: 8px 0;
    overflow: hidden;
    background-color: #e5e5e5; }
  .dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857;
    color: #333333;
    white-space: nowrap; }

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
  text-decoration: none;
  color: white;
  background-color: #428bca; }

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
  color: white;
  text-decoration: none;
  outline: 0;
  background-color: #428bca; }

.dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus {
  color: #999999; }

.dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed; }

.open > .dropdown-menu {
  display: block; }
.open > a {
  outline: 0; }

.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857;
  color: #999999; }

.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990; }

.pull-right > .dropdown-menu {
  right: 0;
  left: auto; }

.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0 dotted;
  border-bottom: 4px solid black;
  content: ""; }
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px; }

@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto; } }
.btn-default .caret {
  border-top-color: #333333; }
.btn-primary .caret, .btn-success .caret, .btn-warning .caret, .btn-danger .caret, .btn-info .caret {
  border-top-color: #fff; }

.dropup .btn-default .caret {
  border-bottom-color: #333333; }
.dropup .btn-primary .caret,
.dropup .btn-success .caret,
.dropup .btn-warning .caret,
.dropup .btn-danger .caret,
.dropup .btn-info .caret {
  border-bottom-color: #fff; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle; }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    float: left; }
    .btn-group > .btn:hover, .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:hover,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
      z-index: 2; }
    .btn-group > .btn:focus,
    .btn-group-vertical > .btn:focus {
      outline: none; }

.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px; }

.btn-toolbar:before, .btn-toolbar:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */ }
.btn-toolbar:after {
  clear: both; }
.btn-toolbar .btn-group {
  float: left; }
.btn-toolbar > .btn + .btn,
.btn-toolbar > .btn + .btn-group,
.btn-toolbar > .btn-group + .btn,
.btn-toolbar > .btn-group + .btn-group {
  margin-left: 5px; }

.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0; }

.btn-group > .btn:first-child {
  margin-left: 0; }
  .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0; }

.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.btn-group > .btn-group {
  float: left; }

.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0; }

.btn-group > .btn-group:first-child > .btn:last-child,
.btn-group > .btn-group:first-child > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.btn-group > .btn-group:last-child > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0; }

.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px; }

.btn-group > .btn-lg + .dropdown-toggle, .btn-group-lg.btn-group > .btn + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px; }

.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125); }

.btn .caret {
  margin-left: 0; }

.btn-lg .caret, .btn-group-lg > .btn .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0; }

.dropup .btn-lg .caret, .dropup .btn-group-lg > .btn .caret {
  border-width: 0 5px 5px; }

.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%; }
.btn-group-vertical > .btn-group:before, .btn-group-vertical > .btn-group:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */ }
.btn-group-vertical > .btn-group:after {
  clear: both; }
.btn-group-vertical > .btn-group > .btn {
  float: none; }
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0; }

.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0; }
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius: 0px;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0; }

.btn-group-vertical > .btn-group:first-child > .btn:last-child,
.btn-group-vertical > .btn-group:first-child > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.btn-group-vertical > .btn-group:last-child > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate; }
  .btn-group-justified .btn {
    float: none;
    display: table-cell;
    width: 1%; }

[data-toggle="buttons"] > .btn > input[type="radio"],
[data-toggle="buttons"] > .btn > input[type="checkbox"] {
  display: none; }

.input-group {
  position: relative;
  display: table;
  border-collapse: separate; }
  .input-group.col {
    float: none;
    padding-left: 0;
    padding-right: 0; }
  .input-group .form-control {
    width: 100%;
    margin-bottom: 0; }

.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell; }
  .input-group-addon:not(:first-child):not(:last-child),
  .input-group-btn:not(:first-child):not(:last-child),
  .input-group .form-control:not(:first-child):not(:last-child) {
    border-radius: 0; }

.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle; }

.input-group-addon {
  padding: 6px 12px;
  font-size: 13px;
  font-weight: normal;
  line-height: 1;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #d6d4d4;
  border-radius: 0px; }
  .input-group-addon.input-sm,
  .input-group-sm > .input-group-addon,
  .input-group-sm > .input-group-btn > .input-group-addon.btn {
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 3px; }
  .input-group-addon.input-lg,
  .input-group-lg > .input-group-addon,
  .input-group-lg > .input-group-btn > .input-group-addon.btn {
    padding: 10px 16px;
    font-size: 17px;
    border-radius: 6px; }
  .input-group-addon input[type="radio"],
  .input-group-addon input[type="checkbox"] {
    margin-top: 0; }

.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.input-group-addon:first-child {
  border-right: 0; }

.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.input-group-addon:last-child {
  border-left: 0; }

.input-group-btn {
  position: relative;
  white-space: nowrap; }

.input-group-btn > .btn {
  position: relative; }
  .input-group-btn > .btn + .btn {
    margin-left: -4px; }
  .input-group-btn > .btn:hover, .input-group-btn > .btn:active {
    z-index: 2; }

.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none; }
  .nav:before, .nav:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */ }
  .nav:after {
    clear: both; }
  .nav > li {
    position: relative;
    display: block; }
    .nav > li > a {
      position: relative;
      display: block;
      padding: 10px 15px; }
      .nav > li > a:hover, .nav > li > a:focus {
        text-decoration: none;
        background-color: #eeeeee; }
    .nav > li.disabled > a {
      color: #999999; }
      .nav > li.disabled > a:hover, .nav > li.disabled > a:focus {
        color: #999999;
        text-decoration: none;
        background-color: transparent;
        cursor: not-allowed; }
  .nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    background-color: #eeeeee;
    border-color: #777777; }
  .nav .nav-divider {
    height: 1px;
    margin: 8px 0;
    overflow: hidden;
    background-color: #e5e5e5; }
  .nav > li > a > img {
    max-width: none; }

.nav-tabs {
  border-bottom: 1px solid #dddddd; }
  .nav-tabs > li {
    float: left;
    margin-bottom: -1px; }
    .nav-tabs > li > a {
      margin-right: 2px;
      line-height: 1.42857;
      border: 1px solid transparent;
      border-radius: 0px 0px 0 0; }
      .nav-tabs > li > a:hover {
        border-color: #eeeeee #eeeeee #dddddd; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
      color: #555555;
      background-color: white;
      border: 1px solid #dddddd;
      border-bottom-color: transparent;
      cursor: default; }

.nav-pills > li {
  float: left; }
  .nav-pills > li > a {
    border-radius: 5px; }
  .nav-pills > li + li {
    margin-left: 2px; }
  .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    color: white;
    background-color: #428bca; }

.nav-stacked > li {
  float: none; }
  .nav-stacked > li + li {
    margin-top: 2px;
    margin-left: 0; }

.nav-justified, .nav-tabs.nav-justified {
  width: 100%; }
  .nav-justified > li, .nav-tabs.nav-justified > li {
    float: none; }
    .nav-justified > li > a, .nav-tabs.nav-justified > li > a {
      text-align: center; }
  @media (min-width: 768px) {
    .nav-justified > li, .nav-tabs.nav-justified > li {
      display: table-cell;
      width: 1%; } }

.nav-tabs-justified, .nav-tabs.nav-justified {
  border-bottom: 0; }
  .nav-tabs-justified > li > a, .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #dddddd;
    margin-right: 0; }
  .nav-tabs-justified > .active > a, .nav-tabs.nav-justified > .active > a {
    border-bottom-color: white; }

.tabbable:before, .tabbable:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */ }
.tabbable:after {
  clear: both; }

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none; }

.tab-content > .active,
.pill-content > .active {
  display: block; }

.nav .caret {
  border-top-color: #777777;
  border-bottom-color: #777777; }

.nav a:hover .caret {
  border-top-color: #515151;
  border-bottom-color: #515151; }

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.navbar {
  position: relative;
  z-index: 1000;
  min-height: 50px;
  margin-bottom: 18px;
  border: 1px solid transparent; }
  .navbar:before, .navbar:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */ }
  .navbar:after {
    clear: both; }
  @media (min-width: 768px) {
    .navbar {
      border-radius: 0px; } }

.navbar-header:before, .navbar-header:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */ }
.navbar-header:after {
  clear: both; }
@media (min-width: 768px) {
  .navbar-header {
    float: left; } }

.navbar-collapse {
  max-height: 340px;
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch; }
  .navbar-collapse:before, .navbar-collapse:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */ }
  .navbar-collapse:after {
    clear: both; }
  .navbar-collapse.in {
    overflow-y: auto; }
  @media (min-width: 768px) {
    .navbar-collapse {
      width: auto;
      border-top: 0;
      box-shadow: none; }
      .navbar-collapse.collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important; }
      .navbar-collapse.in {
        overflow-y: visible; }
      .navbar-collapse .navbar-nav.navbar-left:first-child {
        margin-left: -15px; }
      .navbar-collapse .navbar-nav.navbar-right:last-child {
        margin-right: -15px; }
      .navbar-collapse .navbar-text:last-child {
        margin-right: 0; } }

.container > .navbar-header,
.container > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px; }
  @media (min-width: 768px) {
    .container > .navbar-header,
    .container > .navbar-collapse {
      margin-right: 0;
      margin-left: 0; } }

.navbar-static-top {
  border-width: 0 0 1px; }
  @media (min-width: 768px) {
    .navbar-static-top {
      border-radius: 0; } }

.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  border-width: 0 0 1px; }
  @media (min-width: 768px) {
    .navbar-fixed-top,
    .navbar-fixed-bottom {
      border-radius: 0; } }

.navbar-fixed-top {
  z-index: 1030;
  top: 0; }

.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0; }

.navbar-brand {
  float: left;
  padding: 16px 15px;
  font-size: 17px;
  line-height: 18px; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }
  @media (min-width: 768px) {
    .navbar > .container .navbar-brand {
      margin-left: -15px; } }

.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0px; }
  .navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px; }
  .navbar-toggle .icon-bar + .icon-bar {
    margin-top: 4px; }
  @media (min-width: 768px) {
    .navbar-toggle {
      display: none; } }

.navbar-nav {
  margin: 8px -15px; }
  .navbar-nav > li > a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 18px; }
  @media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      box-shadow: none; }
      .navbar-nav .open .dropdown-menu > li > a,
      .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 25px; }
      .navbar-nav .open .dropdown-menu > li > a {
        line-height: 18px; }
        .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-nav .open .dropdown-menu > li > a:focus {
          background-image: none; } }
  @media (min-width: 768px) {
    .navbar-nav {
      float: left;
      margin: 0; }
      .navbar-nav > li {
        float: left; }
        .navbar-nav > li > a {
          padding-top: 16px;
          padding-bottom: 16px; } }

@media (min-width: 768px) {
  .navbar-left {
    float: left !important; }

  .navbar-right {
    float: right !important; } }
.navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 9px;
  margin-bottom: 9px; }
  @media (max-width: 767px) {
    .navbar-form .form-group {
      margin-bottom: 5px; } }
  @media (min-width: 768px) {
    .navbar-form {
      width: auto;
      border: 0;
      margin-left: 0;
      margin-right: 0;
      padding-top: 0;
      padding-bottom: 0;
      -webkit-box-shadow: none;
      box-shadow: none; } }

.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.navbar-nav.pull-right > li > .dropdown-menu,
.navbar-nav > li > .dropdown-menu.pull-right {
  left: auto;
  right: 0; }

.navbar-btn {
  margin-top: 9px;
  margin-bottom: 9px; }

.navbar-text {
  float: left;
  margin-top: 16px;
  margin-bottom: 16px; }
  @media (min-width: 768px) {
    .navbar-text {
      margin-left: 15px;
      margin-right: 15px; } }

.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7; }
  .navbar-default .navbar-brand {
    color: #777777; }
    .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
      color: #5e5e5e;
      background-color: transparent; }
  .navbar-default .navbar-text {
    color: #777777; }
  .navbar-default .navbar-nav > li > a {
    color: #777777; }
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
      color: #333333;
      background-color: transparent; }
  .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #555555;
    background-color: #e7e7e7; }
  .navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:hover, .navbar-default .navbar-nav > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent; }
  .navbar-default .navbar-toggle {
    border-color: #dddddd; }
    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
      background-color: #dddddd; }
    .navbar-default .navbar-toggle .icon-bar {
      background-color: #cccccc; }
  .navbar-default .navbar-collapse,
  .navbar-default .navbar-form {
    border-color: #e6e6e6; }
  .navbar-default .navbar-nav > .dropdown > a:hover .caret,
  .navbar-default .navbar-nav > .dropdown > a:focus .caret {
    border-top-color: #333333;
    border-bottom-color: #333333; }
  .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    background-color: #e7e7e7;
    color: #555555; }
    .navbar-default .navbar-nav > .open > a .caret, .navbar-default .navbar-nav > .open > a:hover .caret, .navbar-default .navbar-nav > .open > a:focus .caret {
      border-top-color: #555555;
      border-bottom-color: #555555; }
  .navbar-default .navbar-nav > .dropdown > a .caret {
    border-top-color: #777777;
    border-bottom-color: #777777; }
  @media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
      color: #777777; }
      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #333333;
        background-color: transparent; }
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: #555555;
      background-color: #e7e7e7; }
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: #cccccc;
      background-color: transparent; } }
  .navbar-default .navbar-link {
    color: #777777; }
    .navbar-default .navbar-link:hover {
      color: #333333; }

.navbar-inverse {
  background-color: #222222;
  border-color: #090909; }
  .navbar-inverse .navbar-brand {
    color: #999999; }
    .navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
      color: white;
      background-color: transparent; }
  .navbar-inverse .navbar-text {
    color: #999999; }
  .navbar-inverse .navbar-nav > li > a {
    color: #999999; }
    .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
      color: white;
      background-color: transparent; }
  .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
    color: white;
    background-color: #090909; }
  .navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:hover, .navbar-inverse .navbar-nav > .disabled > a:focus {
    color: #444444;
    background-color: transparent; }
  .navbar-inverse .navbar-toggle {
    border-color: #333333; }
    .navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
      background-color: #333333; }
    .navbar-inverse .navbar-toggle .icon-bar {
      background-color: white; }
  .navbar-inverse .navbar-collapse,
  .navbar-inverse .navbar-form {
    border-color: #101010; }
  .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus {
    background-color: #090909;
    color: white; }
  .navbar-inverse .navbar-nav > .dropdown > a:hover .caret {
    border-top-color: white;
    border-bottom-color: white; }
  .navbar-inverse .navbar-nav > .dropdown > a .caret {
    border-top-color: #999999;
    border-bottom-color: #999999; }
  .navbar-inverse .navbar-nav > .open > a .caret, .navbar-inverse .navbar-nav > .open > a:hover .caret, .navbar-inverse .navbar-nav > .open > a:focus .caret {
    border-top-color: white;
    border-bottom-color: white; }
  @media (max-width: 767px) {
    .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
      border-color: #090909; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
      color: #999999; }
      .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
        color: white;
        background-color: transparent; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: white;
      background-color: #090909; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: #444444;
      background-color: transparent; } }
  .navbar-inverse .navbar-link {
    color: #999999; }
    .navbar-inverse .navbar-link:hover {
      color: white; }

.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f6f6f6;
  border-radius: 0px; }
  .breadcrumb > li {
    display: inline-block; }
    .breadcrumb > li + li:before {
      content: "/\00a0";
      padding: 0 5px;
      color: #333333; }
  .breadcrumb > .active {
    color: #333333; }

.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 18px 0;
  border-radius: 0px; }
  .pagination > li {
    display: inline; }
    .pagination > li > a,
    .pagination > li > span {
      position: relative;
      float: left;
      padding: 6px 12px;
      line-height: 1.42857;
      text-decoration: none;
      background-color: white;
      border: 1px solid #dddddd;
      margin-left: -1px; }
    .pagination > li:first-child > a,
    .pagination > li:first-child > span {
      margin-left: 0;
      border-bottom-left-radius: 0px;
      border-top-left-radius: 0px; }
    .pagination > li:last-child > a,
    .pagination > li:last-child > span {
      border-bottom-right-radius: 0px;
      border-top-right-radius: 0px; }
  .pagination > li > a:hover, .pagination > li > a:focus,
  .pagination > li > span:hover,
  .pagination > li > span:focus {
    background-color: #f6f6f6; }
  .pagination > .active > a, .pagination > .active > a:hover, .pagination > .active > a:focus,
  .pagination > .active > span,
  .pagination > .active > span:hover,
  .pagination > .active > span:focus {
    z-index: 2;
    color: white;
    background-color: #428bca;
    border-color: #428bca;
    cursor: default; }
  .pagination > .disabled > span,
  .pagination > .disabled > a,
  .pagination > .disabled > a:hover,
  .pagination > .disabled > a:focus {
    color: #999999;
    background-color: white;
    border-color: #dddddd;
    cursor: not-allowed; }

.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 17px; }
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 6px;
  border-top-left-radius: 6px; }
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px; }

.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px; }
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px; }
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px; }

.pager {
  padding-left: 0;
  margin: 18px 0;
  list-style: none;
  text-align: center; }
  .pager:before, .pager:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */ }
  .pager:after {
    clear: both; }
  .pager li {
    display: inline; }
    .pager li > a,
    .pager li > span {
      display: inline-block;
      padding: 5px 14px;
      background-color: white;
      border: 1px solid #dddddd;
      border-radius: 15px; }
    .pager li > a:hover,
    .pager li > a:focus {
      text-decoration: none;
      background-color: #f6f6f6; }
  .pager .next > a,
  .pager .next > span {
    float: right; }
  .pager .previous > a,
  .pager .previous > span {
    float: left; }
  .pager .disabled > a,
  .pager .disabled > a:hover,
  .pager .disabled > a:focus,
  .pager .disabled > span {
    color: #999999;
    background-color: white;
    cursor: not-allowed; }

.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 100%;
  font-weight: bold;
  line-height: 1;
  color: white;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0; }
  .label[href]:hover, .label[href]:focus {
    color: white;
    text-decoration: none;
    cursor: pointer; }
  .label:empty {
    display: none; }

.label-default {
  background-color: #999999; }
  .label-default[href]:hover, .label-default[href]:focus {
    background-color: gray; }

.label-primary {
  background-color: #428bca; }
  .label-primary[href]:hover, .label-primary[href]:focus {
    background-color: #3071a9; }

.label-success {
  background-color: #55c65e;
  border: 1px solid #36943e; }
  .label-success[href]:hover, .label-success[href]:focus {
    background-color: #3aae43; }

.label-info {
  background-color: #5192f3;
  border: 1px solid #4b80c3; }
  .label-info[href]:hover, .label-info[href]:focus {
    background-color: #2174f0; }

.label-warning {
  background-color: #fe9126;
  border: 1px solid #e4752b; }
  .label-warning[href]:hover, .label-warning[href]:focus {
    background-color: #f07701; }

.label-danger {
  background-color: #f3515c;
  border: 1px solid #d4323d; }
  .label-danger[href]:hover, .label-danger[href]:focus {
    background-color: #f0212f; }

.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: white;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #999999;
  border-radius: 10px; }
  .badge:empty {
    display: none; }

a.badge:hover, a.badge:focus {
  color: white;
  text-decoration: none;
  cursor: pointer; }

.btn .badge {
  position: relative;
  top: -1px; }

a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #777777;
  background-color: white; }

.nav-pills > li > a > .badge {
  margin-left: 3px; }

.thumbnail {
  display: block; }
  .thumbnail > img {
    display: block;
    max-width: 100%;
    height: auto; }

a.thumbnail:hover,
a.thumbnail:focus {
  border-color: #777777; }

.thumbnail > img {
  margin-left: auto;
  margin-right: auto; }

.thumbnail .caption {
  padding: 9px;
  color: #777777; }

.alert {
  padding: 15px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 0px; }
  .alert h4 {
    margin-top: 0;
    color: inherit; }
  .alert .alert-link {
    font-weight: bold; }
  .alert > p,
  .alert > ul {
    margin-bottom: 0; }
  .alert > p + p {
    margin-top: 5px; }

.alert-dismissable {
  padding-right: 35px; }
  .alert-dismissable .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit; }

.alert-success {
  background-color: #55c65e;
  border-color: #48b151;
  color: white; }
  .alert-success hr {
    border-top-color: #419f49; }
  .alert-success .alert-link {
    color: #e6e6e6; }

.alert-info {
  background-color: #5192f3;
  border-color: #4b80c3;
  color: white; }
  .alert-info hr {
    border-top-color: #3d73b7; }
  .alert-info .alert-link {
    color: #e6e6e6; }

.alert-warning {
  background-color: #fe9126;
  border-color: #e4752b;
  color: white; }
  .alert-warning hr {
    border-top-color: #da681c; }
  .alert-warning .alert-link {
    color: #e6e6e6; }

.alert-danger {
  background-color: #f3515c;
  border-color: #d4323d;
  color: white; }
  .alert-danger hr {
    border-top-color: #c32933; }
  .alert-danger .alert-link {
    color: #e6e6e6; }

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0; }

  to {
    background-position: 0 0; } }

@-moz-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0; }

  to {
    background-position: 0 0; } }

@-o-keyframes progress-bar-stripes {
  from {
    background-position: 0 0; }

  to {
    background-position: 40px 0; } }

@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0; }

  to {
    background-position: 0 0; } }

.progress {
  overflow: hidden;
  height: 18px;
  margin-bottom: 18px;
  background-color: whitesmoke;
  border-radius: 0px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); }

.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  color: white;
  text-align: center;
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease; }

.progress-striped .progress-bar {
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px; }

.progress.active .progress-bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -moz-animation: progress-bar-stripes 2s linear infinite;
  -ms-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite; }

.progress-bar-success {
  background-color: #46a74e; }
  .progress-striped .progress-bar-success {
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-info {
  background-color: #5192f3; }
  .progress-striped .progress-bar-info {
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-warning {
  background-color: #f0ad4e; }
  .progress-striped .progress-bar-warning {
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-danger {
  background-color: #d9534f; }
  .progress-striped .progress-bar-danger {
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.media,
.media-body {
  overflow: hidden;
  zoom: 1; }

.media,
.media .media {
  margin-top: 15px; }

.media:first-child {
  margin-top: 0; }

.media-object {
  display: block; }

.media-heading {
  margin: 0 0 5px; }

.media > .pull-left {
  margin-right: 10px; }
.media > .pull-right {
  margin-left: 10px; }

.media-list {
  padding-left: 0;
  list-style: none; }

.list-group {
  margin-bottom: 20px;
  padding-left: 0; }

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: white;
  border: 1px solid #dddddd; }
  .list-group-item:first-child {
    border-top-right-radius: 0px;
    border-top-left-radius: 0px; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px; }
  .list-group-item > .badge {
    float: right; }
  .list-group-item > .badge + .badge {
    margin-right: 5px; }
  .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
    z-index: 2;
    color: white;
    background-color: #428bca;
    border-color: #428bca; }
    .list-group-item.active .list-group-item-heading, .list-group-item.active:hover .list-group-item-heading, .list-group-item.active:focus .list-group-item-heading {
      color: inherit; }
    .list-group-item.active .list-group-item-text, .list-group-item.active:hover .list-group-item-text, .list-group-item.active:focus .list-group-item-text {
      color: #e1edf7; }

a.list-group-item {
  color: #555555; }
  a.list-group-item .list-group-item-heading {
    color: #333333; }
  a.list-group-item:hover, a.list-group-item:focus {
    text-decoration: none;
    background-color: whitesmoke; }

.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px; }

.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3; }

.panel {
  margin-bottom: 18px;
  background-color: white;
  border: 1px solid transparent;
  border-radius: 0px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); }

.panel-body {
  padding: 15px; }
  .panel-body:before, .panel-body:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */ }
  .panel-body:after {
    clear: both; }

.panel > .list-group {
  margin-bottom: 0; }
  .panel > .list-group .list-group-item {
    border-width: 1px 0; }
    .panel > .list-group .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0; }
    .panel > .list-group .list-group-item:last-child {
      border-bottom: 0; }

.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0; }

.panel > .table {
  margin-bottom: 0; }
.panel > .panel-body + .table {
  border-top: 1px solid #d6d4d4; }

.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: -1px;
  border-top-left-radius: -1px; }

.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 15px; }
  .panel-title > a {
    color: inherit; }

.panel-footer {
  padding: 10px 15px;
  background-color: whitesmoke;
  border-top: 1px solid #dddddd;
  border-bottom-right-radius: -1px;
  border-bottom-left-radius: -1px; }

.panel-group .panel {
  margin-bottom: 0;
  border-radius: 0px;
  overflow: hidden; }
  .panel-group .panel + .panel {
    margin-top: 5px; }
.panel-group .panel-heading {
  border-bottom: 0; }
  .panel-group .panel-heading + .panel-collapse .panel-body {
    border-top: 1px solid #dddddd; }
.panel-group .panel-footer {
  border-top: 0; }
  .panel-group .panel-footer + .panel-collapse .panel-body {
    border-bottom: 1px solid #dddddd; }

.panel-default {
  border-color: #dddddd; }
  .panel-default > .panel-heading {
    color: #333333;
    background-color: whitesmoke;
    border-color: #dddddd; }
    .panel-default > .panel-heading + .panel-collapse .panel-body {
      border-top-color: #dddddd; }
  .panel-default > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #dddddd; }

.panel-primary {
  border-color: #428bca; }
  .panel-primary > .panel-heading {
    color: white;
    background-color: #428bca;
    border-color: #428bca; }
    .panel-primary > .panel-heading + .panel-collapse .panel-body {
      border-top-color: #428bca; }
  .panel-primary > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #428bca; }

.panel-success {
  border-color: #48b151; }
  .panel-success > .panel-heading {
    color: white;
    background-color: #55c65e;
    border-color: #48b151; }
    .panel-success > .panel-heading + .panel-collapse .panel-body {
      border-top-color: #48b151; }
  .panel-success > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #48b151; }

.panel-warning {
  border-color: #e4752b; }
  .panel-warning > .panel-heading {
    color: white;
    background-color: #fe9126;
    border-color: #e4752b; }
    .panel-warning > .panel-heading + .panel-collapse .panel-body {
      border-top-color: #e4752b; }
  .panel-warning > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #e4752b; }

.panel-danger {
  border-color: #d4323d; }
  .panel-danger > .panel-heading {
    color: white;
    background-color: #f3515c;
    border-color: #d4323d; }
    .panel-danger > .panel-heading + .panel-collapse .panel-body {
      border-top-color: #d4323d; }
  .panel-danger > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #d4323d; }

.panel-info {
  border-color: #4b80c3; }
  .panel-info > .panel-heading {
    color: white;
    background-color: #5192f3;
    border-color: #4b80c3; }
    .panel-info > .panel-heading + .panel-collapse .panel-body {
      border-top-color: #4b80c3; }
  .panel-info > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #4b80c3; }

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: whitesmoke;
  border: 1px solid #e3e3e3;
  border-radius: 0px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05); }
  .well blockquote {
    border-color: #ddd;
    border-color: rgba(0, 0, 0, 0.15); }

.well-lg {
  padding: 24px;
  border-radius: 6px; }

.well-sm {
  padding: 9px;
  border-radius: 3px; }

.close {
  float: right;
  font-size: 19.5px;
  font-weight: bold;
  line-height: 1;
  color: black;
  text-shadow: 0 1px 0 white;
  opacity: 0.2;
  filter: alpha(opacity=20); }
  .close:hover, .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
    opacity: 0.5;
    filter: alpha(opacity=50); }

button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none; }

.clearfix:before, .clearfix:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */ }
.clearfix:after {
  clear: both; }

.pull-right {
  float: right !important; }

.pull-left {
  float: left !important; }

.hide {
  display: none !important; }

.show {
  display: block !important; }

.invisible {
  visibility: hidden; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.affix {
  position: fixed; }

@-ms-viewport {
  width: device-width; }

@media screen and (max-width: 400px) {
  @-ms-viewport {
    width: 320px; } }
.hidden {
  display: none !important;
  visibility: hidden !important; }

.visible-xs {
  display: none !important; }

tr.visible-xs {
  display: none !important; }

th.visible-xs,
td.visible-xs {
  display: none !important; }

@media (max-width: 767px) {
  .visible-xs {
    display: block !important; }

  tr.visible-xs {
    display: table-row !important; }

  th.visible-xs,
  td.visible-xs {
    display: table-cell !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .visible-xs.visible-sm {
    display: block !important; }

  tr.visible-xs.visible-sm {
    display: table-row !important; }

  th.visible-xs.visible-sm,
  td.visible-xs.visible-sm {
    display: table-cell !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-xs.visible-md {
    display: block !important; }

  tr.visible-xs.visible-md {
    display: table-row !important; }

  th.visible-xs.visible-md,
  td.visible-xs.visible-md {
    display: table-cell !important; } }
@media (min-width: 1200px) {
  .visible-xs.visible-lg {
    display: block !important; }

  tr.visible-xs.visible-lg {
    display: table-row !important; }

  th.visible-xs.visible-lg,
  td.visible-xs.visible-lg {
    display: table-cell !important; } }
.visible-sm {
  display: none !important; }

tr.visible-sm {
  display: none !important; }

th.visible-sm,
td.visible-sm {
  display: none !important; }

@media (max-width: 767px) {
  .visible-sm.visible-xs {
    display: block !important; }

  tr.visible-sm.visible-xs {
    display: table-row !important; }

  th.visible-sm.visible-xs,
  td.visible-sm.visible-xs {
    display: table-cell !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important; }

  tr.visible-sm {
    display: table-row !important; }

  th.visible-sm,
  td.visible-sm {
    display: table-cell !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-sm.visible-md {
    display: block !important; }

  tr.visible-sm.visible-md {
    display: table-row !important; }

  th.visible-sm.visible-md,
  td.visible-sm.visible-md {
    display: table-cell !important; } }
@media (min-width: 1200px) {
  .visible-sm.visible-lg {
    display: block !important; }

  tr.visible-sm.visible-lg {
    display: table-row !important; }

  th.visible-sm.visible-lg,
  td.visible-sm.visible-lg {
    display: table-cell !important; } }
.visible-md {
  display: none !important; }

tr.visible-md {
  display: none !important; }

th.visible-md,
td.visible-md {
  display: none !important; }

@media (max-width: 767px) {
  .visible-md.visible-xs {
    display: block !important; }

  tr.visible-md.visible-xs {
    display: table-row !important; }

  th.visible-md.visible-xs,
  td.visible-md.visible-xs {
    display: table-cell !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .visible-md.visible-sm {
    display: block !important; }

  tr.visible-md.visible-sm {
    display: table-row !important; }

  th.visible-md.visible-sm,
  td.visible-md.visible-sm {
    display: table-cell !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important; }

  tr.visible-md {
    display: table-row !important; }

  th.visible-md,
  td.visible-md {
    display: table-cell !important; } }
@media (min-width: 1200px) {
  .visible-md.visible-lg {
    display: block !important; }

  tr.visible-md.visible-lg {
    display: table-row !important; }

  th.visible-md.visible-lg,
  td.visible-md.visible-lg {
    display: table-cell !important; } }
.visible-lg {
  display: none !important; }

tr.visible-lg {
  display: none !important; }

th.visible-lg,
td.visible-lg {
  display: none !important; }

@media (max-width: 767px) {
  .visible-lg.visible-xs {
    display: block !important; }

  tr.visible-lg.visible-xs {
    display: table-row !important; }

  th.visible-lg.visible-xs,
  td.visible-lg.visible-xs {
    display: table-cell !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .visible-lg.visible-sm {
    display: block !important; }

  tr.visible-lg.visible-sm {
    display: table-row !important; }

  th.visible-lg.visible-sm,
  td.visible-lg.visible-sm {
    display: table-cell !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-lg.visible-md {
    display: block !important; }

  tr.visible-lg.visible-md {
    display: table-row !important; }

  th.visible-lg.visible-md,
  td.visible-lg.visible-md {
    display: table-cell !important; } }
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important; }

  tr.visible-lg {
    display: table-row !important; }

  th.visible-lg,
  td.visible-lg {
    display: table-cell !important; } }
.hidden-xs {
  display: block !important; }

tr.hidden-xs {
  display: table-row !important; }

th.hidden-xs,
td.hidden-xs {
  display: table-cell !important; }

@media (max-width: 767px) {
  .hidden-xs {
    display: none !important; }

  tr.hidden-xs {
    display: none !important; }

  th.hidden-xs,
  td.hidden-xs {
    display: none !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-xs.hidden-sm {
    display: none !important; }

  tr.hidden-xs.hidden-sm {
    display: none !important; }

  th.hidden-xs.hidden-sm,
  td.hidden-xs.hidden-sm {
    display: none !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-xs.hidden-md {
    display: none !important; }

  tr.hidden-xs.hidden-md {
    display: none !important; }

  th.hidden-xs.hidden-md,
  td.hidden-xs.hidden-md {
    display: none !important; } }
@media (min-width: 1200px) {
  .hidden-xs.hidden-lg {
    display: none !important; }

  tr.hidden-xs.hidden-lg {
    display: none !important; }

  th.hidden-xs.hidden-lg,
  td.hidden-xs.hidden-lg {
    display: none !important; } }
.hidden-sm {
  display: block !important; }

tr.hidden-sm {
  display: table-row !important; }

th.hidden-sm,
td.hidden-sm {
  display: table-cell !important; }

@media (max-width: 767px) {
  .hidden-sm.hidden-xs {
    display: none !important; }

  tr.hidden-sm.hidden-xs {
    display: none !important; }

  th.hidden-sm.hidden-xs,
  td.hidden-sm.hidden-xs {
    display: none !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important; }

  tr.hidden-sm {
    display: none !important; }

  th.hidden-sm,
  td.hidden-sm {
    display: none !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-sm.hidden-md {
    display: none !important; }

  tr.hidden-sm.hidden-md {
    display: none !important; }

  th.hidden-sm.hidden-md,
  td.hidden-sm.hidden-md {
    display: none !important; } }
@media (min-width: 1200px) {
  .hidden-sm.hidden-lg {
    display: none !important; }

  tr.hidden-sm.hidden-lg {
    display: none !important; }

  th.hidden-sm.hidden-lg,
  td.hidden-sm.hidden-lg {
    display: none !important; } }
.hidden-md {
  display: block !important; }

tr.hidden-md {
  display: table-row !important; }

th.hidden-md,
td.hidden-md {
  display: table-cell !important; }

@media (max-width: 767px) {
  .hidden-md.hidden-xs {
    display: none !important; }

  tr.hidden-md.hidden-xs {
    display: none !important; }

  th.hidden-md.hidden-xs,
  td.hidden-md.hidden-xs {
    display: none !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-md.hidden-sm {
    display: none !important; }

  tr.hidden-md.hidden-sm {
    display: none !important; }

  th.hidden-md.hidden-sm,
  td.hidden-md.hidden-sm {
    display: none !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important; }

  tr.hidden-md {
    display: none !important; }

  th.hidden-md,
  td.hidden-md {
    display: none !important; } }
@media (min-width: 1200px) {
  .hidden-md.hidden-lg {
    display: none !important; }

  tr.hidden-md.hidden-lg {
    display: none !important; }

  th.hidden-md.hidden-lg,
  td.hidden-md.hidden-lg {
    display: none !important; } }
.hidden-lg {
  display: block !important; }

tr.hidden-lg {
  display: table-row !important; }

th.hidden-lg,
td.hidden-lg {
  display: table-cell !important; }

@media (max-width: 767px) {
  .hidden-lg.hidden-xs {
    display: none !important; }

  tr.hidden-lg.hidden-xs {
    display: none !important; }

  th.hidden-lg.hidden-xs,
  td.hidden-lg.hidden-xs {
    display: none !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-lg.hidden-sm {
    display: none !important; }

  tr.hidden-lg.hidden-sm {
    display: none !important; }

  th.hidden-lg.hidden-sm,
  td.hidden-lg.hidden-sm {
    display: none !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-lg.hidden-md {
    display: none !important; }

  tr.hidden-lg.hidden-md {
    display: none !important; }

  th.hidden-lg.hidden-md,
  td.hidden-lg.hidden-md {
    display: none !important; } }
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important; }

  tr.hidden-lg {
    display: none !important; }

  th.hidden-lg,
  td.hidden-lg {
    display: none !important; } }
.visible-print {
  display: none !important; }

tr.visible-print {
  display: none !important; }

th.visible-print,
td.visible-print {
  display: none !important; }

@media print {
  .visible-print {
    display: block !important; }

  tr.visible-print {
    display: table-row !important; }

  th.visible-print,
  td.visible-print {
    display: table-cell !important; }

  .hidden-print {
    display: none !important; }

  tr.hidden-print {
    display: none !important; }

  th.hidden-print,
  td.hidden-print {
    display: none !important; } }
/*!
 *  Font Awesome 3.2.1
 *  the iconic font designed for Bootstrap
 *  ------------------------------------------------------------------------------
 *  The full suite of pictographic icons, examples, and documentation can be
 *  found at http://fontawesome.io.  Stay up to date on Twitter at
 *  http://twitter.com/fontawesome.
 *
 *  License
 *  ------------------------------------------------------------------------------
 *  - The Font Awesome font is licensed under SIL OFL 1.1 -
 *    http://scripts.sil.org/OFL
 *  - Font Awesome CSS, LESS, and SASS files are licensed under MIT License -
 *    http://opensource.org/licenses/mit-license.html
 *  - Font Awesome documentation licensed under CC BY 3.0 -
 *    http://creativecommons.org/licenses/by/3.0/
 *  - Attribution is no longer required in Font Awesome 3.0, but much appreciated:
 *    "Font Awesome by Dave Gandy - http://fontawesome.io"
 *
 *  Author - Dave Gandy
 *  ------------------------------------------------------------------------------
 *  Email: dave@fontawesome.io
 *  Twitter: http://twitter.com/davegandy
 *  Work: Lead Product Designer @ Kyruus - http://kyruus.com
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url("../font/fontawesome-webfont.eot?v=3.2.1");
  src: url("../font/fontawesome-webfont.eot?#iefix&v=3.2.1") format("embedded-opentype"), url("../font/fontawesome-webfont.woff?v=3.2.1") format("woff"), url("../font/fontawesome-webfont.ttf?v=3.2.1") format("truetype"), url("../font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1") format("svg");
  font-weight: normal;
  font-style: normal; }

/* FONT AWESOME CORE
 * -------------------------- */
[class^="icon-"],
[class*=" icon-"] {
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  text-decoration: inherit;
  -webkit-font-smoothing: antialiased;
  *margin-right: .3em; }

[class^="icon-"]:before,
[class*=" icon-"]:before {
  text-decoration: inherit;
  display: inline-block;
  speak: none; }

/* makes the font 33% larger relative to the icon container */
.icon-large:before {
  vertical-align: -10%;
  font-size: 1.33333em; }

/* makes sure icons active on rollover in links */
a [class^="icon-"],
a [class*=" icon-"] {
  display: inline; }

/* increased font size for icon-large */
[class^="icon-"].icon-fixed-width,
[class*=" icon-"].icon-fixed-width {
  display: inline-block;
  width: 1.14286em;
  text-align: right;
  padding-right: 0.28571em; }
  [class^="icon-"].icon-fixed-width.icon-large,
  [class*=" icon-"].icon-fixed-width.icon-large {
    width: 1.42857em; }

.icons-ul {
  margin-left: 2.14286em;
  list-style-type: none; }
  .icons-ul > li {
    position: relative; }
  .icons-ul .icon-li {
    position: absolute;
    left: -2.14286em;
    width: 2.14286em;
    text-align: center;
    line-height: inherit; }

[class^="icon-"].hide,
[class*=" icon-"].hide {
  display: none; }

.icon-muted {
  color: #eeeeee; }

.icon-light {
  color: white; }

.icon-dark {
  color: #333333; }

.icon-border {
  border: solid 1px #eeeeee;
  padding: .2em .25em .15em;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px; }

.icon-2x {
  font-size: 2em; }
  .icon-2x.icon-border {
    border-width: 2px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px; }

.icon-3x {
  font-size: 3em; }
  .icon-3x.icon-border {
    border-width: 3px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px; }

.icon-4x {
  font-size: 4em; }
  .icon-4x.icon-border {
    border-width: 4px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px; }

.icon-5x {
  font-size: 5em; }
  .icon-5x.icon-border {
    border-width: 5px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px; }

.pull-right {
  float: right; }

.pull-left {
  float: left; }

[class^="icon-"].pull-left,
[class*=" icon-"].pull-left {
  margin-right: .3em; }
[class^="icon-"].pull-right,
[class*=" icon-"].pull-right {
  margin-left: .3em; }

/* BOOTSTRAP SPECIFIC CLASSES
 * -------------------------- */
/* Bootstrap 2.0 sprites.less reset */
[class^="icon-"],
[class*=" icon-"] {
  display: inline;
  width: auto;
  height: auto;
  line-height: normal;
  vertical-align: baseline;
  background-image: none;
  background-position: 0% 0%;
  background-repeat: repeat;
  margin-top: 0; }

/* more sprites.less reset */
.icon-white,
.nav-pills > .active > a > [class^="icon-"],
.nav-pills > .active > a > [class*=" icon-"],
.nav-list > .active > a > [class^="icon-"],
.nav-list > .active > a > [class*=" icon-"],
.navbar-inverse .nav > .active > a > [class^="icon-"],
.navbar-inverse .nav > .active > a > [class*=" icon-"],
.dropdown-menu > li > a:hover > [class^="icon-"],
.dropdown-menu > li > a:hover > [class*=" icon-"],
.dropdown-menu > .active > a > [class^="icon-"],
.dropdown-menu > .active > a > [class*=" icon-"],
.dropdown-submenu:hover > a > [class^="icon-"],
.dropdown-submenu:hover > a > [class*=" icon-"] {
  background-image: none; }

/* keeps Bootstrap styles with and without icons the same */
.btn [class^="icon-"].icon-large,
.btn [class*=" icon-"].icon-large, .nav [class^="icon-"].icon-large,
.nav [class*=" icon-"].icon-large {
  line-height: .9em; }
.btn [class^="icon-"].icon-spin,
.btn [class*=" icon-"].icon-spin, .nav [class^="icon-"].icon-spin,
.nav [class*=" icon-"].icon-spin {
  display: inline-block; }

.nav-tabs [class^="icon-"], .nav-tabs [class^="icon-"].icon-large,
.nav-tabs [class*=" icon-"],
.nav-tabs [class*=" icon-"].icon-large, .nav-pills [class^="icon-"], .nav-pills [class^="icon-"].icon-large,
.nav-pills [class*=" icon-"],
.nav-pills [class*=" icon-"].icon-large {
  line-height: .9em; }

.btn [class^="icon-"].pull-left.icon-2x, .btn [class^="icon-"].pull-right.icon-2x,
.btn [class*=" icon-"].pull-left.icon-2x,
.btn [class*=" icon-"].pull-right.icon-2x {
  margin-top: .18em; }
.btn [class^="icon-"].icon-spin.icon-large,
.btn [class*=" icon-"].icon-spin.icon-large {
  line-height: .8em; }

.btn.btn-small [class^="icon-"].pull-left.icon-2x, .btn.btn-small [class^="icon-"].pull-right.icon-2x,
.btn.btn-small [class*=" icon-"].pull-left.icon-2x,
.btn.btn-small [class*=" icon-"].pull-right.icon-2x {
  margin-top: .25em; }

.btn.btn-large [class^="icon-"],
.btn.btn-large [class*=" icon-"] {
  margin-top: 0; }
  .btn.btn-large [class^="icon-"].pull-left.icon-2x, .btn.btn-large [class^="icon-"].pull-right.icon-2x,
  .btn.btn-large [class*=" icon-"].pull-left.icon-2x,
  .btn.btn-large [class*=" icon-"].pull-right.icon-2x {
    margin-top: .05em; }
  .btn.btn-large [class^="icon-"].pull-left.icon-2x,
  .btn.btn-large [class*=" icon-"].pull-left.icon-2x {
    margin-right: .2em; }
  .btn.btn-large [class^="icon-"].pull-right.icon-2x,
  .btn.btn-large [class*=" icon-"].pull-right.icon-2x {
    margin-left: .2em; }

/* Fixes alignment in nav lists */
.nav-list [class^="icon-"],
.nav-list [class*=" icon-"] {
  line-height: inherit; }

/* EXTRAS
 * -------------------------- */
/* Stacked and layered icon */
.icon-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: -35%; }
  .icon-stack [class^="icon-"],
  .icon-stack [class*=" icon-"] {
    display: block;
    text-align: center;
    position: absolute;
    width: 100%;
    height: 100%;
    font-size: 1em;
    line-height: inherit;
    *line-height: 2em; }
  .icon-stack .icon-stack-base {
    font-size: 2em;
    *line-height: 1em; }

/* Animated rotating icon */
.icon-spin {
  display: inline-block;
  -moz-animation: spin 2s infinite linear;
  -o-animation: spin 2s infinite linear;
  -webkit-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear; }

/* Prevent stack and spinners from being taken inline when inside a link */
a .icon-stack,
a .icon-spin {
  display: inline-block;
  text-decoration: none; }

@-moz-keyframes spin {
  0% {
    -moz-transform: rotate(0deg); }

  100% {
    -moz-transform: rotate(359deg); } }

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg); }

  100% {
    -webkit-transform: rotate(359deg); } }

@-o-keyframes spin {
  0% {
    -o-transform: rotate(0deg); }

  100% {
    -o-transform: rotate(359deg); } }

@-ms-keyframes spin {
  0% {
    -ms-transform: rotate(0deg); }

  100% {
    -ms-transform: rotate(359deg); } }

@keyframes spin {
  0% {
    transform: rotate(0deg); }

  100% {
    transform: rotate(359deg); } }

/* Icon rotations and mirroring */
.icon-rotate-90:before {
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1); }

.icon-rotate-180:before {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2); }

.icon-rotate-270:before {
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); }

.icon-flip-horizontal:before {
  -webkit-transform: scale(-1, 1);
  -moz-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  -o-transform: scale(-1, 1);
  transform: scale(-1, 1); }

.icon-flip-vertical:before {
  -webkit-transform: scale(1, -1);
  -moz-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  -o-transform: scale(1, -1);
  transform: scale(1, -1); }

/* ensure rotation occurs inside anchor tags */
a .icon-rotate-90:before, a .icon-rotate-180:before, a .icon-rotate-270:before, a .icon-flip-horizontal:before, a .icon-flip-vertical:before {
  display: inline-block; }

/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
 * readers do not read off random characters that represent icons */
.icon-glass:before {
  content: "\f000"; }

.icon-music:before {
  content: "\f001"; }

.icon-search:before {
  content: "\f002"; }

.icon-envelope-alt:before {
  content: "\f003"; }

.icon-heart:before {
  content: "\f004"; }

.icon-star:before {
  content: "\f005"; }

.icon-star-empty:before {
  content: "\f006"; }

.icon-user:before {
  content: "\f007"; }

.icon-film:before {
  content: "\f008"; }

.icon-th-large:before {
  content: "\f009"; }

.icon-th:before {
  content: "\f00a"; }

.icon-th-list:before {
  content: "\f00b"; }

.icon-ok:before {
  content: "\f00c"; }

.icon-remove:before {
  content: "\f00d"; }

.icon-zoom-in:before {
  content: "\f00e"; }

.icon-zoom-out:before {
  content: "\f010"; }

.icon-power-off:before,
.icon-off:before {
  content: "\f011"; }

.icon-signal:before {
  content: "\f012"; }

.icon-gear:before,
.icon-cog:before {
  content: "\f013"; }

.icon-trash:before {
  content: "\f014"; }

.icon-home:before {
  content: "\f015"; }

.icon-file-alt:before {
  content: "\f016"; }

.icon-time:before {
  content: "\f017"; }

.icon-road:before {
  content: "\f018"; }

.icon-download-alt:before {
  content: "\f019"; }

.icon-download:before {
  content: "\f01a"; }

.icon-upload:before {
  content: "\f01b"; }

.icon-inbox:before {
  content: "\f01c"; }

.icon-play-circle:before {
  content: "\f01d"; }

.icon-rotate-right:before,
.icon-repeat:before {
  content: "\f01e"; }

.icon-refresh:before {
  content: "\f021"; }

.icon-list-alt:before {
  content: "\f022"; }

.icon-lock:before {
  content: "\f023"; }

.icon-flag:before {
  content: "\f024"; }

.icon-headphones:before {
  content: "\f025"; }

.icon-volume-off:before {
  content: "\f026"; }

.icon-volume-down:before {
  content: "\f027"; }

.icon-volume-up:before {
  content: "\f028"; }

.icon-qrcode:before {
  content: "\f029"; }

.icon-barcode:before {
  content: "\f02a"; }

.icon-tag:before {
  content: "\f02b"; }

.icon-tags:before {
  content: "\f02c"; }

.icon-book:before {
  content: "\f02d"; }

.icon-bookmark:before {
  content: "\f02e"; }

.icon-print:before {
  content: "\f02f"; }

.icon-camera:before {
  content: "\f030"; }

.icon-font:before {
  content: "\f031"; }

.icon-bold:before {
  content: "\f032"; }

.icon-italic:before {
  content: "\f033"; }

.icon-text-height:before {
  content: "\f034"; }

.icon-text-width:before {
  content: "\f035"; }

.icon-align-left:before {
  content: "\f036"; }

.icon-align-center:before {
  content: "\f037"; }

.icon-align-right:before {
  content: "\f038"; }

.icon-align-justify:before {
  content: "\f039"; }

.icon-list:before {
  content: "\f03a"; }

.icon-indent-left:before {
  content: "\f03b"; }

.icon-indent-right:before {
  content: "\f03c"; }

.icon-facetime-video:before {
  content: "\f03d"; }

.icon-picture:before {
  content: "\f03e"; }

.icon-pencil:before {
  content: "\f040"; }

.icon-map-marker:before {
  content: "\f041"; }

.icon-adjust:before {
  content: "\f042"; }

.icon-tint:before {
  content: "\f043"; }

.icon-edit:before {
  content: "\f044"; }

.icon-share:before {
  content: "\f045"; }

.icon-check:before {
  content: "\f046"; }

.icon-move:before {
  content: "\f047"; }

.icon-step-backward:before {
  content: "\f048"; }

.icon-fast-backward:before {
  content: "\f049"; }

.icon-backward:before {
  content: "\f04a"; }

.icon-play:before {
  content: "\f04b"; }

.icon-pause:before {
  content: "\f04c"; }

.icon-stop:before {
  content: "\f04d"; }

.icon-forward:before {
  content: "\f04e"; }

.icon-fast-forward:before {
  content: "\f050"; }

.icon-step-forward:before {
  content: "\f051"; }

.icon-eject:before {
  content: "\f052"; }

.icon-chevron-left:before {
  content: "\f053"; }

.icon-chevron-right:before {
  content: "\f054"; }

.icon-plus-sign:before {
  content: "\f055"; }

.icon-minus-sign:before {
  content: "\f056"; }

.icon-remove-sign:before {
  content: "\f057"; }

.icon-ok-sign:before {
  content: "\f058"; }

.icon-question-sign:before {
  content: "\f059"; }

.icon-info-sign:before {
  content: "\f05a"; }

.icon-screenshot:before {
  content: "\f05b"; }

.icon-remove-circle:before {
  content: "\f05c"; }

.icon-ok-circle:before {
  content: "\f05d"; }

.icon-ban-circle:before {
  content: "\f05e"; }

.icon-arrow-left:before {
  content: "\f060"; }

.icon-arrow-right:before {
  content: "\f061"; }

.icon-arrow-up:before {
  content: "\f062"; }

.icon-arrow-down:before {
  content: "\f063"; }

.icon-mail-forward:before,
.icon-share-alt:before {
  content: "\f064"; }

.icon-resize-full:before {
  content: "\f065"; }

.icon-resize-small:before {
  content: "\f066"; }

.icon-plus:before {
  content: "\f067"; }

.icon-minus:before {
  content: "\f068"; }

.icon-asterisk:before {
  content: "\f069"; }

.icon-exclamation-sign:before {
  content: "\f06a"; }

.icon-gift:before {
  content: "\f06b"; }

.icon-leaf:before {
  content: "\f06c"; }

.icon-fire:before {
  content: "\f06d"; }

.icon-eye-open:before {
  content: "\f06e"; }

.icon-eye-close:before {
  content: "\f070"; }

.icon-warning-sign:before {
  content: "\f071"; }

.icon-plane:before {
  content: "\f072"; }

.icon-calendar:before {
  content: "\f073"; }

.icon-random:before {
  content: "\f074"; }

.icon-comment:before {
  content: "\f075"; }

.icon-magnet:before {
  content: "\f076"; }

.icon-chevron-up:before {
  content: "\f077"; }

.icon-chevron-down:before {
  content: "\f078"; }

.icon-retweet:before {
  content: "\f079"; }

.icon-shopping-cart:before {
  content: "\f07a"; }

.icon-folder-close:before {
  content: "\f07b"; }

.icon-folder-open:before {
  content: "\f07c"; }

.icon-resize-vertical:before {
  content: "\f07d"; }

.icon-resize-horizontal:before {
  content: "\f07e"; }

.icon-bar-chart:before {
  content: "\f080"; }

.icon-twitter-sign:before {
  content: "\f081"; }

.icon-facebook-sign:before {
  content: "\f082"; }

.icon-camera-retro:before {
  content: "\f083"; }

.icon-key:before {
  content: "\f084"; }

.icon-gears:before,
.icon-cogs:before {
  content: "\f085"; }

.icon-comments:before {
  content: "\f086"; }

.icon-thumbs-up-alt:before {
  content: "\f087"; }

.icon-thumbs-down-alt:before {
  content: "\f088"; }

.icon-star-half:before {
  content: "\f089"; }

.icon-heart-empty:before {
  content: "\f08a"; }

.icon-signout:before {
  content: "\f08b"; }

.icon-linkedin-sign:before {
  content: "\f08c"; }

.icon-pushpin:before {
  content: "\f08d"; }

.icon-external-link:before {
  content: "\f08e"; }

.icon-signin:before {
  content: "\f090"; }

.icon-trophy:before {
  content: "\f091"; }

.icon-github-sign:before {
  content: "\f092"; }

.icon-upload-alt:before {
  content: "\f093"; }

.icon-lemon:before {
  content: "\f094"; }

.icon-phone:before {
  content: "\f095"; }

.icon-unchecked:before,
.icon-check-empty:before {
  content: "\f096"; }

.icon-bookmark-empty:before {
  content: "\f097"; }

.icon-phone-sign:before {
  content: "\f098"; }

.icon-twitter:before {
  content: "\f099"; }

.icon-facebook:before {
  content: "\f09a"; }

.icon-github:before {
  content: "\f09b"; }

.icon-unlock:before {
  content: "\f09c"; }

.icon-credit-card:before {
  content: "\f09d"; }

.icon-rss:before {
  content: "\f09e"; }

.icon-hdd:before {
  content: "\f0a0"; }

.icon-bullhorn:before {
  content: "\f0a1"; }

.icon-bell:before {
  content: "\f0a2"; }

.icon-certificate:before {
  content: "\f0a3"; }

.icon-hand-right:before {
  content: "\f0a4"; }

.icon-hand-left:before {
  content: "\f0a5"; }

.icon-hand-up:before {
  content: "\f0a6"; }

.icon-hand-down:before {
  content: "\f0a7"; }

.icon-circle-arrow-left:before {
  content: "\f0a8"; }

.icon-circle-arrow-right:before {
  content: "\f0a9"; }

.icon-circle-arrow-up:before {
  content: "\f0aa"; }

.icon-circle-arrow-down:before {
  content: "\f0ab"; }

.icon-globe:before {
  content: "\f0ac"; }

.icon-wrench:before {
  content: "\f0ad"; }

.icon-tasks:before {
  content: "\f0ae"; }

.icon-filter:before {
  content: "\f0b0"; }

.icon-briefcase:before {
  content: "\f0b1"; }

.icon-fullscreen:before {
  content: "\f0b2"; }

.icon-group:before {
  content: "\f0c0"; }

.icon-link:before {
  content: "\f0c1"; }

.icon-cloud:before {
  content: "\f0c2"; }

.icon-beaker:before {
  content: "\f0c3"; }

.icon-cut:before {
  content: "\f0c4"; }

.icon-copy:before {
  content: "\f0c5"; }

.icon-paperclip:before,
.icon-paper-clip:before {
  content: "\f0c6"; }

.icon-save:before {
  content: "\f0c7"; }

.icon-sign-blank:before {
  content: "\f0c8"; }

.icon-reorder:before {
  content: "\f0c9"; }

.icon-list-ul:before {
  content: "\f0ca"; }

.icon-list-ol:before {
  content: "\f0cb"; }

.icon-strikethrough:before {
  content: "\f0cc"; }

.icon-underline:before {
  content: "\f0cd"; }

.icon-table:before {
  content: "\f0ce"; }

.icon-magic:before {
  content: "\f0d0"; }

.icon-truck:before {
  content: "\f0d1"; }

.icon-pinterest:before {
  content: "\f0d2"; }

.icon-pinterest-sign:before {
  content: "\f0d3"; }

.icon-google-plus-sign:before {
  content: "\f0d4"; }

.icon-google-plus:before {
  content: "\f0d5"; }

.icon-money:before {
  content: "\f0d6"; }

.icon-caret-down:before {
  content: "\f0d7"; }

.icon-caret-up:before {
  content: "\f0d8"; }

.icon-caret-left:before {
  content: "\f0d9"; }

.icon-caret-right:before {
  content: "\f0da"; }

.icon-columns:before {
  content: "\f0db"; }

.icon-sort:before {
  content: "\f0dc"; }

.icon-sort-down:before {
  content: "\f0dd"; }

.icon-sort-up:before {
  content: "\f0de"; }

.icon-envelope:before {
  content: "\f0e0"; }

.icon-linkedin:before {
  content: "\f0e1"; }

.icon-rotate-left:before,
.icon-undo:before {
  content: "\f0e2"; }

.icon-legal:before {
  content: "\f0e3"; }

.icon-dashboard:before {
  content: "\f0e4"; }

.icon-comment-alt:before {
  content: "\f0e5"; }

.icon-comments-alt:before {
  content: "\f0e6"; }

.icon-bolt:before {
  content: "\f0e7"; }

.icon-sitemap:before {
  content: "\f0e8"; }

.icon-umbrella:before {
  content: "\f0e9"; }

.icon-paste:before {
  content: "\f0ea"; }

.icon-lightbulb:before {
  content: "\f0eb"; }

.icon-exchange:before {
  content: "\f0ec"; }

.icon-cloud-download:before {
  content: "\f0ed"; }

.icon-cloud-upload:before {
  content: "\f0ee"; }

.icon-user-md:before {
  content: "\f0f0"; }

.icon-stethoscope:before {
  content: "\f0f1"; }

.icon-suitcase:before {
  content: "\f0f2"; }

.icon-bell-alt:before {
  content: "\f0f3"; }

.icon-coffee:before {
  content: "\f0f4"; }

.icon-food:before {
  content: "\f0f5"; }

.icon-file-text-alt:before {
  content: "\f0f6"; }

.icon-building:before {
  content: "\f0f7"; }

.icon-hospital:before {
  content: "\f0f8"; }

.icon-ambulance:before {
  content: "\f0f9"; }

.icon-medkit:before {
  content: "\f0fa"; }

.icon-fighter-jet:before {
  content: "\f0fb"; }

.icon-beer:before {
  content: "\f0fc"; }

.icon-h-sign:before {
  content: "\f0fd"; }

.icon-plus-sign-alt:before {
  content: "\f0fe"; }

.icon-double-angle-left:before {
  content: "\f100"; }

.icon-double-angle-right:before {
  content: "\f101"; }

.icon-double-angle-up:before {
  content: "\f102"; }

.icon-double-angle-down:before {
  content: "\f103"; }

.icon-angle-left:before {
  content: "\f104"; }

.icon-angle-right:before {
  content: "\f105"; }

.icon-angle-up:before {
  content: "\f106"; }

.icon-angle-down:before {
  content: "\f107"; }

.icon-desktop:before {
  content: "\f108"; }

.icon-laptop:before {
  content: "\f109"; }

.icon-tablet:before {
  content: "\f10a"; }

.icon-mobile-phone:before {
  content: "\f10b"; }

.icon-circle-blank:before {
  content: "\f10c"; }

.icon-quote-left:before {
  content: "\f10d"; }

.icon-quote-right:before {
  content: "\f10e"; }

.icon-spinner:before {
  content: "\f110"; }

.icon-circle:before {
  content: "\f111"; }

.icon-mail-reply:before,
.icon-reply:before {
  content: "\f112"; }

.icon-github-alt:before {
  content: "\f113"; }

.icon-folder-close-alt:before {
  content: "\f114"; }

.icon-folder-open-alt:before {
  content: "\f115"; }

.icon-expand-alt:before {
  content: "\f116"; }

.icon-collapse-alt:before {
  content: "\f117"; }

.icon-smile:before {
  content: "\f118"; }

.icon-frown:before {
  content: "\f119"; }

.icon-meh:before {
  content: "\f11a"; }

.icon-gamepad:before {
  content: "\f11b"; }

.icon-keyboard:before {
  content: "\f11c"; }

.icon-flag-alt:before {
  content: "\f11d"; }

.icon-flag-checkered:before {
  content: "\f11e"; }

.icon-terminal:before {
  content: "\f120"; }

.icon-code:before {
  content: "\f121"; }

.icon-reply-all:before {
  content: "\f122"; }

.icon-mail-reply-all:before {
  content: "\f122"; }

.icon-star-half-full:before,
.icon-star-half-empty:before {
  content: "\f123"; }

.icon-location-arrow:before {
  content: "\f124"; }

.icon-crop:before {
  content: "\f125"; }

.icon-code-fork:before {
  content: "\f126"; }

.icon-unlink:before {
  content: "\f127"; }

.icon-question:before {
  content: "\f128"; }

.icon-info:before {
  content: "\f129"; }

.icon-exclamation:before {
  content: "\f12a"; }

.icon-superscript:before {
  content: "\f12b"; }

.icon-subscript:before {
  content: "\f12c"; }

.icon-eraser:before {
  content: "\f12d"; }

.icon-puzzle-piece:before {
  content: "\f12e"; }

.icon-microphone:before {
  content: "\f130"; }

.icon-microphone-off:before {
  content: "\f131"; }

.icon-shield:before {
  content: "\f132"; }

.icon-calendar-empty:before {
  content: "\f133"; }

.icon-fire-extinguisher:before {
  content: "\f134"; }

.icon-rocket:before {
  content: "\f135"; }

.icon-maxcdn:before {
  content: "\f136"; }

.icon-chevron-sign-left:before {
  content: "\f137"; }

.icon-chevron-sign-right:before {
  content: "\f138"; }

.icon-chevron-sign-up:before {
  content: "\f139"; }

.icon-chevron-sign-down:before {
  content: "\f13a"; }

.icon-html5:before {
  content: "\f13b"; }

.icon-css3:before {
  content: "\f13c"; }

.icon-anchor:before {
  content: "\f13d"; }

.icon-unlock-alt:before {
  content: "\f13e"; }

.icon-bullseye:before {
  content: "\f140"; }

.icon-ellipsis-horizontal:before {
  content: "\f141"; }

.icon-ellipsis-vertical:before {
  content: "\f142"; }

.icon-rss-sign:before {
  content: "\f143"; }

.icon-play-sign:before {
  content: "\f144"; }

.icon-ticket:before {
  content: "\f145"; }

.icon-minus-sign-alt:before {
  content: "\f146"; }

.icon-check-minus:before {
  content: "\f147"; }

.icon-level-up:before {
  content: "\f148"; }

.icon-level-down:before {
  content: "\f149"; }

.icon-check-sign:before {
  content: "\f14a"; }

.icon-edit-sign:before {
  content: "\f14b"; }

.icon-external-link-sign:before {
  content: "\f14c"; }

.icon-share-sign:before {
  content: "\f14d"; }

.icon-compass:before {
  content: "\f14e"; }

.icon-collapse:before {
  content: "\f150"; }

.icon-collapse-top:before {
  content: "\f151"; }

.icon-expand:before {
  content: "\f152"; }

.icon-euro:before,
.icon-eur:before {
  content: "\f153"; }

.icon-gbp:before {
  content: "\f154"; }

.icon-dollar:before,
.icon-usd:before {
  content: "\f155"; }

.icon-rupee:before,
.icon-inr:before {
  content: "\f156"; }

.icon-yen:before,
.icon-jpy:before {
  content: "\f157"; }

.icon-renminbi:before,
.icon-cny:before {
  content: "\f158"; }

.icon-won:before,
.icon-krw:before {
  content: "\f159"; }

.icon-bitcoin:before,
.icon-btc:before {
  content: "\f15a"; }

.icon-file:before {
  content: "\f15b"; }

.icon-file-text:before {
  content: "\f15c"; }

.icon-sort-by-alphabet:before {
  content: "\f15d"; }

.icon-sort-by-alphabet-alt:before {
  content: "\f15e"; }

.icon-sort-by-attributes:before {
  content: "\f160"; }

.icon-sort-by-attributes-alt:before {
  content: "\f161"; }

.icon-sort-by-order:before {
  content: "\f162"; }

.icon-sort-by-order-alt:before {
  content: "\f163"; }

.icon-thumbs-up:before {
  content: "\f164"; }

.icon-thumbs-down:before {
  content: "\f165"; }

.icon-youtube-sign:before {
  content: "\f166"; }

.icon-youtube:before {
  content: "\f167"; }

.icon-xing:before {
  content: "\f168"; }

.icon-xing-sign:before {
  content: "\f169"; }

.icon-youtube-play:before {
  content: "\f16a"; }

.icon-dropbox:before {
  content: "\f16b"; }

.icon-stackexchange:before {
  content: "\f16c"; }

.icon-instagram:before {
  content: "\f16d"; }

.icon-flickr:before {
  content: "\f16e"; }

.icon-adn:before {
  content: "\f170"; }

.icon-bitbucket:before {
  content: "\f171"; }

.icon-bitbucket-sign:before {
  content: "\f172"; }

.icon-tumblr:before {
  content: "\f173"; }

.icon-tumblr-sign:before {
  content: "\f174"; }

.icon-long-arrow-down:before {
  content: "\f175"; }

.icon-long-arrow-up:before {
  content: "\f176"; }

.icon-long-arrow-left:before {
  content: "\f177"; }

.icon-long-arrow-right:before {
  content: "\f178"; }

.icon-apple:before {
  content: "\f179"; }

.icon-windows:before {
  content: "\f17a"; }

.icon-android:before {
  content: "\f17b"; }

.icon-linux:before {
  content: "\f17c"; }

.icon-dribbble:before {
  content: "\f17d"; }

.icon-skype:before {
  content: "\f17e"; }

.icon-foursquare:before {
  content: "\f180"; }

.icon-trello:before {
  content: "\f181"; }

.icon-female:before {
  content: "\f182"; }

.icon-male:before {
  content: "\f183"; }

.icon-gittip:before {
  content: "\f184"; }

.icon-sun:before {
  content: "\f185"; }

.icon-moon:before {
  content: "\f186"; }

.icon-archive:before {
  content: "\f187"; }

.icon-bug:before {
  content: "\f188"; }

.icon-vk:before {
  content: "\f189"; }

.icon-weibo:before {
  content: "\f18a"; }

.icon-renren:before {
  content: "\f18b"; }

a:hover {
  text-decoration: none; }

@media only screen and (min-width: 1200px) {
  .container {
    padding-left: 0;
    padding-right: 0; } }
body {
  min-width: 320px;
  height: 100%;
  line-height: 18px;
  font-size: 13px;
  color: #777777; }
  body.content_only {
    background: none; }

textarea {
  resize: none; }

#header {
  z-index: 5003; }

.columns-container {
  background: white; }

#columns {
  position: relative;
  padding-bottom: 50px;
  padding-top: 15px; }

#index .tab-content {
  margin-top: 35px;
  margin-bottom: 34px; }

header {
  z-index: 1;
  position: relative;
  background: white;
  padding-bottom: 15px; }
  header .banner {
    background: black;
    max-height: 100%; }
    header .banner .row {
      margin: 0px; }
  header .nav {
    background: #333333; }
    header .nav .row {
      margin: 0px; }
    header .nav nav {
      width: 100%; }
  header .row {
    position: relative; }
    header .row > .container {
      position: relative; }
    header .row #header_logo {
      padding-top: 15px; }
      @media (max-width: 992px) {
        header .row #header_logo {
          padding-top: 40px; } }
      @media (max-width: 767px) {
        header .row #header_logo {
          padding-top: 15px; }
          header .row #header_logo img {
            margin: 0 auto; } }
  @media (min-width: 767px) {
    header .col-sm-4 + .col-sm-4 + .col-sm-4, header .row #header_logo + .col-sm-4 + .col-sm-4, header .row .col-sm-4 + #header_logo + .col-sm-4, header .row #header_logo + #header_logo + .col-sm-4, header .row .col-sm-4 + .col-sm-4 + #header_logo, header .row #header_logo + .col-sm-4 + #header_logo, header .row .col-sm-4 + #header_logo + #header_logo, header .row #header_logo + #header_logo + #header_logo {
      float: right; } }

.ie8 #header #header_logo {
  width: 350px; }

#center_column .page_product_box h3 {
  color: #555454;
  text-transform: uppercase;
  font-family: "Open Sans", sans-serif;
  font-weight: 600;
  font-size: 18px;
  line-height: 20px;
  padding: 14px 20px 17px;
  margin: 0 0 20px;
  position: relative;
  border: 1px solid #d6d4d4;
  border-bottom: none;
  background: #fbfbfb; }

p.info-title {
  font-weight: bold;
  color: #333333;
  margin-bottom: 25px; }

p.info-account {
  margin: -4px 0 24px 0; }

.dark {
  color: #333333; }

.main-page-indent {
  margin-bottom: 30px; }

.alert {
  font-weight: bold; }
  .alert ul, .alert ol {
    padding-left: 15px;
    margin-left: 27px; }
    .alert ul li, .alert ol li {
      list-style-type: decimal;
      font-weight: normal; }
  .alert.alert-success {
    text-shadow: 1px 1px rgba(0, 0, 0, 0.1); }
    .alert.alert-success:before {
      font-family: "FontAwesome";
      content: "\f058";
      font-size: 20px;
      vertical-align: -2px;
      padding-right: 7px; }
  .alert.alert-danger {
    text-shadow: 1px 1px rgba(0, 0, 0, 0.1); }
    .alert.alert-danger:before {
      font-family: "FontAwesome";
      content: "\f057";
      font-size: 20px;
      vertical-align: -2px;
      padding-right: 7px;
      float: left; }

.label {
  white-space: normal;
  display: inline-block;
  padding: 6px 10px; }

label {
  color: #333333; }
  label.required:before {
    content: "*";
    color: red;
    font-size: 14px;
    position: relative;
    line-height: 12px; }

.unvisible {
  display: none; }

.checkbox {
  line-height: 16px; }
  .checkbox label {
    color: #777777; }

.close {
  opacity: 1; }
  .close:hover {
    opacity: 1; }

input.button_mini,
input.button_small,
input.button,
input.button_large,
input.button_mini_disabled,
input.button_small_disabled,
input.button_disabled,
input.button_large_disabled,
input.exclusive_mini,
input.exclusive_small,
input.exclusive,
input.exclusive_large,
input.exclusive_mini_disabled,
input.exclusive_small_disabled,
input.exclusive_disabled,
input.exclusive_large_disabled,
a.button_mini,
a.button_small,
a.button,
a.button_large,
a.exclusive_mini,
a.exclusive_small,
a.exclusive,
a.exclusive_large,
span.button_mini,
span.button_small,
span.button,
span.button_large,
span.exclusive_mini,
span.exclusive_small,
span.exclusive,
span.exclusive_large,
span.exclusive_large_disabled {
  position: relative;
  display: inline-block;
  padding: 5px 7px;
  border: 1px solid #cc9900;
  font-weight: bold;
  color: black;
  background: url(../img/bg_bt.gif) repeat-x 0 0 #f4b61b;
  cursor: pointer;
  white-space: normal;
  text-align: left; }

*:first-child + html input.button_mini,
*:first-child + html input.button_small,
*:first-child + html input.button,
*:first-child + html input.button_large,
*:first-child + html input.button_mini_disabled,
*:first-child + html input.button_small_disabled,
*:first-child + html input.button_disabled,
*:first-child + html input.button_large_disabled,
*:first-child + html input.exclusive_mini,
*:first-child + html input.exclusive_small,
*:first-child + html input.exclusive,
*:first-child + html input.exclusive_large,
*:first-child + html input.exclusive_mini_disabled,
*:first-child + html input.exclusive_small_disabled,
*:first-child + html input.exclusive_disabled,
*:first-child + html input.exclusive_large_disabled {
  border: none; }

input.button_mini:hover,
input.button_small:hover,
input.button:hover,
input.button_large:hover,
input.exclusive_mini:hover,
input.exclusive_small:hover,
input.exclusive:hover,
input.exclusive_large:hover,
a.button_mini:hover,
a.button_small:hover,
a.button:hover,
a.button_large:hover,
a.exclusive_mini:hover,
a.exclusive_small:hover,
a.exclusive:hover,
a.exclusive_large:hover {
  text-decoration: none;
  background-position: left -50px; }

input.button_mini:active,
input.button_small:active,
input.button:active,
input.button_large:active,
input.exclusive_mini:active,
input.exclusive_small:active,
input.exclusive:active,
input.exclusive_large:active,
a.button_mini:active,
a.button_small:active,
a.button:active,
a.button_large:active,
a.exclusive_mini:active,
a.exclusive_small:active,
a.exclusive:active,
a.exclusive_large:active {
  background-position: left -100px; }

input.button_disabled,
input.exclusive_disabled,
span.exclusive {
  border: 1px solid #cccccc;
  color: #999999;
  background: url(../img/bg_bt_2.gif) repeat-x 0 0 #cccccc;
  cursor: default; }

.btn.disabled,
.btn[disabled]:hover {
  opacity: 0.3; }

.button.button-small {
  font: bold 13px/17px Arial, Helvetica, sans-serif;
  color: white;
  background: #6f6f6f;
  border: 1px solid;
  border-color: #666666 #5f5f5f #292929 #5f5f5f;
  padding: 0;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.24);
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0; }
  .button.button-small span {
    display: block;
    padding: 3px 8px 3px 8px;
    border: 1px solid;
    border-color: #8b8a8a; }
    .button.button-small span i {
      vertical-align: 0px;
      margin-right: 5px; }
      .button.button-small span i.right {
        margin-right: 0;
        margin-left: 5px; }
    .button.button-small span:hover {
      background: #575757;
      border-color: #303030 #303030 #666666 #444444; }

.button.button-medium {
  font-size: 17px;
  line-height: 21px;
  color: white;
  padding: 0;
  font-weight: bold;
  background: #43b754;
  background: -moz-linear-gradient(top, #43b754 0%, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #43b754), color-stop(2%, #41b757), color-stop(4%, #41b854), color-stop(6%, #43b756), color-stop(38%, #41b354), color-stop(40%, #44b355), color-stop(66%, #45af55), color-stop(74%, #41ae53), color-stop(91%, #42ac52), color-stop(94%, #41ae55), color-stop(96%, #43ab54), color-stop(100%, #42ac52));
  background: -webkit-linear-gradient(top, #43b754 0%, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -o-linear-gradient(top, #43b754 0%, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -ms-linear-gradient(top, #43b754 0%, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: linear-gradient(to bottom, #43b754 0%, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#43b754', endColorstr='#42ac52',GradientType=0 );
  border: 1px solid;
  border-color: #399a49 #247f32 #1a6d27 #399a49;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0; }
  .button.button-medium span {
    display: block;
    padding: 10px 10px 10px 14px;
    border: 1px solid;
    border-color: #74d578; }
    @media (max-width: 480px) {
      .button.button-medium span {
        font-size: 15px;
        padding-right: 7px;
        padding-left: 7px; } }
    .button.button-medium span i.left {
      font-size: 24px;
      vertical-align: -2px;
      margin: -4px 10px 0 0;
      display: inline-block; }
      @media (max-width: 480px) {
        .button.button-medium span i.left {
          margin-right: 5px; } }
    .button.button-medium span i.right {
      margin-right: 0;
      margin-left: 9px; }
      @media (max-width: 480px) {
        .button.button-medium span i.right {
          margin-left: 5px; } }
  .button.button-medium:hover {
    background: #3aa04c;
    background: -moz-linear-gradient(top, #3aa04c 0%, #3aa04a 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3aa04c), color-stop(100%, #3aa04a));
    background: -webkit-linear-gradient(top, #3aa04c 0%, #3aa04a 100%);
    background: -o-linear-gradient(top, #3aa04c 0%, #3aa04a 100%);
    background: -ms-linear-gradient(top, #3aa04c 0%, #3aa04a 100%);
    background: linear-gradient(to bottom, #3aa04c 0%, #3aa04a 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3aa04c', endColorstr='#3aa04a',GradientType=0 );
    border-color: #196f28 #399a49 #399a49 #258033; }

.button.button-medium.exclusive {
  border-color: #db8600 #d98305 #c86d26 #d98305;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #fdaa02), color-stop(100%, #fe9702));
  background-image: -webkit-linear-gradient(top, #fdaa02, #fe9702);
  background-image: -moz-linear-gradient(top, #fdaa02, #fe9702);
  background-image: -o-linear-gradient(top, #fdaa02, #fe9702);
  background-image: linear-gradient(top, #fdaa02, #fe9702); }
  .button.button-medium.exclusive span {
    border-color: #fec133 #febc33 #feb233 #febc33; }
  .button.button-medium.exclusive:hover {
    background: #f89609;
    border-color: #a6550c #ba6708 #db8600 #ba6708; }
    .button.button-medium.exclusive:hover span {
      border-color: #fec133; }

.link-button {
  font-weight: bold; }
  .link-button i {
    margin-right: 5px; }
    .link-button i.large {
      font-size: 26px;
      line-height: 26px;
      vertical-align: -3px;
      color: silver; }

.btn.button-plus,
.btn.button-minus {
  font-size: 14px;
  line-height: 14px;
  color: silver;
  text-shadow: 1px -1px rgba(0, 0, 0, 0.05);
  padding: 0;
  border: 1px solid;
  border-color: #dedcdc #c1bfbf #b5b4b4 #dad8d8;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0; }
  .btn.button-plus span,
  .btn.button-minus span {
    display: block;
    border: 1px solid white;
    vertical-align: middle;
    width: 25px;
    height: 25px;
    text-align: center;
    vertical-align: middle;
    padding: 4px 0 0 0;
    background: #1e5799;
    background: white;
    background: -moz-linear-gradient(top, white 0%, #fbfbfb 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #fbfbfb));
    background: -webkit-linear-gradient(top, white 0%, #fbfbfb 100%);
    background: -o-linear-gradient(top, white 0%, #fbfbfb 100%);
    background: -ms-linear-gradient(top, white 0%, #fbfbfb 100%);
    background: linear-gradient(to bottom, #ffffff 0%, #fbfbfb 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#fbfbfb',GradientType=0); }
  .btn.button-plus:hover,
  .btn.button-minus:hover {
    color: #333333; }
    .btn.button-plus:hover span,
    .btn.button-minus:hover span {
      filter: none;
      background: #f6f6f6; }

.button.exclusive-medium {
  font-size: 17px;
  padding: 0;
  line-height: 21px;
  color: #333333;
  font-weight: bold;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
  text-shadow: 1px 1px white; }
  .button.exclusive-medium span {
    border: 1px solid;
    border-color: white;
    display: block;
    padding: 9px 10px 11px 10px;
    background: #f7f7f7;
    background: -moz-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f7f7f7), color-stop(100%, #ededed));
    background: -webkit-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
    background: -o-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
    background: -ms-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
    background: linear-gradient(to bottom, #f7f7f7 0%, #ededed 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#ededed',GradientType=0); }
    @media (max-width: 480px) {
      .button.exclusive-medium span {
        font-size: 15px;
        padding-right: 7px;
        padding-left: 7px; } }
    .button.exclusive-medium span:hover {
      border-color: #9e9e9e #c2c2c2 #c8c8c8 #c2c2c2; }
      .button.exclusive-medium span:hover span {
        background: #e7e7e7;
        background: -moz-linear-gradient(top, #e7e7e7 0%, #e7e7e7 0%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #e7e7e7), color-stop(0%, #e7e7e7));
        background: -webkit-linear-gradient(top, #e7e7e7 0%, #e7e7e7 0%);
        background: -o-linear-gradient(top, #e7e7e7 0%, #e7e7e7 0%);
        background: -ms-linear-gradient(top, #e7e7e7 0%, #e7e7e7 0%);
        background: linear-gradient(to bottom, #e7e7e7 0%, #e7e7e7 0%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e7e7e7', endColorstr='#e7e7e7',GradientType=0); }

.button.ajax_add_to_cart_button {
  font: 700 17px/21px Arial, Helvetica, sans-serif;
  color: white;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
  padding: 0;
  border: 1px solid;
  border-color: #0079b6 #006fa8 #012740 #006fa8; }
  .button.ajax_add_to_cart_button span {
    border: 1px solid;
    border-color: #06b2e6;
    padding: 10px 14px;
    display: block;
    background: #009ad0;
    background: -moz-linear-gradient(top, #009ad0 0%, #007ab7 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #009ad0), color-stop(100%, #007ab7));
    background: -webkit-linear-gradient(top, #009ad0 0%, #007ab7 100%);
    background: -o-linear-gradient(top, #009ad0 0%, #007ab7 100%);
    background: -ms-linear-gradient(top, #009ad0 0%, #007ab7 100%);
    background: linear-gradient(to bottom, #009ad0 0%, #007ab7 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#009ad0', endColorstr='#007ab7',GradientType=0); }
  .button.ajax_add_to_cart_button:hover {
    border-color: #01314e #004b74 #0079b6 #004b74; }
    .button.ajax_add_to_cart_button:hover span {
      filter: none;
      background: #0084bf; }

.button.lnk_view {
  font: 700 17px/21px Arial, Helvetica, sans-serif;
  color: #333333;
  text-shadow: 1px 1px white;
  padding: 0;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7; }
  .button.lnk_view span {
    border: 1px solid;
    border-color: white;
    padding: 10px 14px;
    display: block;
    background: #f7f7f7;
    background: -moz-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f7f7f7), color-stop(100%, #ededed));
    background: -webkit-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
    background: -o-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
    background: -ms-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
    background: linear-gradient(to bottom, #f7f7f7 0%, #ededed 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#ededed',GradientType=0); }
  .button.lnk_view:hover {
    border-color: #9e9e9e #9e9e9e #c8c8c8 #9e9e9e; }
    .button.lnk_view:hover span {
      filter: none;
      background: #e7e7e7; }
  .button.lnk_view i.left {
    padding-right: 8px;
    color: #777777; }

.form-control {
  padding: 3px 5px;
  height: 27px;
  -webkit-box-shadow: none;
  box-shadow: none; }
  .form-control.grey {
    background: #fbfbfb; }

table.std,
table.table_block {
  margin-bottom: 20px;
  width: 100%;
  border: 1px solid #999999;
  border-bottom: none;
  background: white;
  border-collapse: inherit; }

table.std th,
table.table_block th {
  padding: 14px 12px;
  font-size: 12px;
  color: white;
  font-weight: bold;
  text-transform: uppercase;
  text-shadow: 0 1px 0 black;
  background: #999999; }

table.std tr.alternate_item,
table.table_block tr.alternate_item {
  background-color: #f3f3f3; }

table.std td,
table.table_block td {
  padding: 12px;
  border-right: 1px solid #e9e9e9;
  border-bottom: 1px solid #e9e9e9;
  font-size: 12px;
  vertical-align: top; }

.table {
  margin-bottom: 30px; }
  .table > thead > tr > th {
    background: #fbfbfb;
    border-bottom-width: 1px;
    color: #333333;
    vertical-align: middle; }
  .table td a.color-myaccount {
    color: #777777;
    text-decoration: underline; }
    .table td a.color-myaccount:hover {
      text-decoration: none; }
  .table tfoot tr {
    background: #fbfbfb; }

.product-name {
  font-size: 17px;
  line-height: 23px;
  color: #3a3939;
  margin-bottom: 0; }
  .product-name a {
    font-size: 17px;
    line-height: 23px;
    color: #3a3939; }
    .product-name a:hover {
      color: #515151; }
    @media (max-width: 768px) {
      .product-name a {
        font-size: 14px; } }

.price {
  font-size: 13px;
  color: #777777;
  white-space: nowrap; }

.price.product-price {
  font: 600 21px/26px "Open Sans", sans-serif;
  color: #333333; }

.old-price {
  color: #6f6f6f;
  text-decoration: line-through; }

.old-price.product-price {
  font-size: 17px; }

.special-price {
  color: #f13340; }

.price-percent-reduction {
  background: #f13340;
  border: 1px solid #d02a2c;
  font: 600 21px/24px "Open Sans", sans-serif;
  color: white;
  padding: 0 5px 0 3px;
  display: inline-block; }
  .price-percent-reduction.small {
    font: 700 14px/17px Arial, Helvetica, sans-serif;
    padding: 1px 6px; }

.new-box,
.sale-box {
  position: absolute;
  top: -4px;
  overflow: hidden;
  height: 85px;
  width: 85px;
  text-align: center;
  z-index: 0; }

.new-box {
  left: -4px; }

.sale-box {
  right: -5px; }

.new-label {
  font: 700 14px/12px Arial, Helvetica, sans-serif;
  color: white;
  background: #6ad4ff;
  text-transform: uppercase;
  padding: 9px 0 7px;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.24);
  width: 130px;
  text-align: center;
  display: block;
  position: absolute;
  left: -33px;
  top: 16px;
  z-index: 1;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg); }
  .new-label:before {
    position: absolute;
    bottom: -3px;
    right: 5px;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 4px 4px 0px 4px;
    border-color: #21a3d8 transparent transparent transparent;
    content: ".";
    text-indent: -5000px;
    -webkit-transform: rotate(225deg);
    -ms-transform: rotate(225deg);
    transform: rotate(225deg); }
  .new-label:after {
    position: absolute;
    bottom: -3px;
    left: 3px;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 4px 4px 0px 4px;
    border-color: #21a3d8 transparent transparent transparent;
    content: ".";
    text-indent: -5000px;
    -webkit-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    transform: rotate(135deg); }

.sale-label {
  font: 700 14px/12px Arial, Helvetica, sans-serif;
  color: white;
  background: #f13340;
  text-transform: uppercase;
  padding: 9px 0 7px;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.24);
  width: 130px;
  text-align: center;
  display: block;
  position: absolute;
  right: -33px;
  top: 16px;
  z-index: 1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg); }
  .sale-label:before {
    position: absolute;
    bottom: -3px;
    right: 4px;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 4px 4px 0px 4px;
    border-color: #ad2b34 transparent transparent transparent;
    content: ".";
    text-indent: -5000px;
    -webkit-transform: rotate(225deg);
    -ms-transform: rotate(225deg);
    transform: rotate(225deg); }
  .sale-label:after {
    position: absolute;
    bottom: -3px;
    left: 5px;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 4px 4px 0px 4px;
    border-color: #ad2b34 transparent transparent transparent;
    content: ".";
    text-indent: -5000px;
    -webkit-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    transform: rotate(135deg); }

.ie8 .new-label {
  left: 0px;
  top: 0px;
  width: auto;
  padding: 5px 15px; }
  .ie8 .new-label:after {
    display: none; }
  .ie8 .new-label:before {
    display: none; }
.ie8 .sale-label {
  right: 0px;
  top: 0px;
  width: auto;
  padding: 5px 15px; }
  .ie8 .sale-label:after {
    display: none; }
  .ie8 .sale-label:before {
    display: none; }
.ie8 .new-box {
  top: -1px;
  left: -1px; }
.ie8 .sale-box {
  right: -1px;
  top: -1px; }

.box {
  background: #fbfbfb;
  border: 1px solid #d6d4d4;
  padding: 14px 18px 13px;
  margin: 0 0 30px 0;
  line-height: 23px; }
  .box p {
    margin-bottom: 0; }
  .box.box-small {
    padding: 9px 10px 9px 20px; }
    .box.box-small .dark {
      padding-top: 10px;
      padding-right: 20px;
      margin-bottom: 0;
      width: auto; }

.page-product-box {
  padding-bottom: 10px; }

.product-box {
  width: 178px;
  float: left;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }
  .product-box .product-image {
    border: 1px solid #d6d4d4;
    background: white;
    padding: 5px;
    display: block;
    margin-bottom: 11px; }
    .product-box .product-image img {
      max-width: 100%;
      width: 100%;
      height: auto; }

#home-page-tabs {
  border: none;
  background: white; }
  @media (min-width: 768px) {
    #home-page-tabs {
      padding: 10px 0;
      margin: 0 0 0 -18px; } }
  #home-page-tabs > li {
    margin-bottom: 0; }
    @media (min-width: 991px) {
      #home-page-tabs > li {
        border-left: 1px solid #d6d4d4;
        margin: 0 0px 0 9px;
        padding: 0 0px 0 9px; } }
    @media (max-width: 479px) {
      #home-page-tabs > li {
        width: 100%; } }
    #home-page-tabs > li a {
      font: 600 21px/24px "Open Sans", sans-serif;
      color: #555454;
      text-transform: uppercase;
      border: none;
      outline: none;
      margin: 0;
      padding: 10px; }
      @media (min-width: 768px) {
        #home-page-tabs > li a {
          padding: 1px 10px; } }
      @media (min-width: 768px) and (max-width: 991px) {
        #home-page-tabs > li a {
          padding: 10px 10px; } }
    #home-page-tabs > li:first-child {
      border: none; }
  #home-page-tabs > li.active a,
  #home-page-tabs > li a:hover {
    background: #333333;
    color: white;
    padding: 10px; }
    @media (min-width: 768px) {
      #home-page-tabs > li.active a,
      #home-page-tabs > li a:hover {
        margin: -9px 0; } }
    @media (min-width: 768px) and (max-width: 991px) {
      #home-page-tabs > li.active a,
      #home-page-tabs > li a:hover {
        margin: 0px 0; } }

.block {
  margin-bottom: 30px; }
  @media (max-width: 767px) {
    .block {
      margin-bottom: 0px; } }
  @media (max-width: 767px) {
    .block .block_content {
      margin-bottom: 20px; } }

.block .title_block,
.block h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  background: #f6f6f6;
  border-top: 5px solid #333333;
  text-transform: uppercase;
  padding: 14px 5px 17px 20px;
  margin-bottom: 20px; }
  @media (min-width: 768px) and (max-width: 991px) {
    .block .title_block,
    .block h4 {
      font-size: 14px; } }
  @media (max-width: 767px) {
    .block .title_block,
    .block h4 {
      position: relative; }
      .block .title_block:after,
      .block h4:after {
        display: block;
        font-family: "FontAwesome";
        content: "";
        position: absolute;
        right: 0;
        top: 15px;
        height: 36px;
        width: 36px;
        font-size: 26px;
        font-weight: normal; }
      .block .title_block.active:after,
      .block h4.active:after {
        content: ""; } }
  .block .title_block a,
  .block h4 a {
    color: #555454; }
    .block .title_block a:hover,
    .block h4 a:hover {
      color: #333333; }
.block .list-block {
  margin-top: -8px; }
  @media (max-width: 767px) {
    .block .list-block {
      margin-top: 0; } }
  .block .list-block li {
    padding: 5px 0 6px 20px;
    border-top: 1px solid #d6d4d4; }
    .block .list-block li a i {
      display: none; }
    .block .list-block li a:before {
      content: "\f105";
      display: inline;
      font-family: "FontAwesome";
      color: #333333;
      padding-right: 8px; }
    .block .list-block li a:hover {
      color: #333333;
      font-weight: bold; }
    .block .list-block li:first-child {
      border-top: none; }
  .block .list-block .form-group {
    padding-top: 20px;
    border-top: 1px solid #d6d4d4;
    margin-bottom: 0; }
    .block .list-block .form-group select {
      max-width: 270px; }
      @media (max-width: 767px) {
        .block .list-block .form-group select {
          width: 270px; } }
  .block .list-block .btn {
    margin-top: 12px; }
.block .products-block li {
  padding: 0 0 20px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #d6d4d4; }
  .block .products-block li .products-block-image {
    float: left;
    border: 1px solid #d6d4d4;
    margin-right: 19px; }
    @media (min-width: 768px) and (max-width: 991px) {
      .block .products-block li .products-block-image {
        float: none;
        display: inline-block;
        margin: 0 auto 10px;
        text-align: center; } }
  .block .products-block li .product-content {
    overflow: hidden; }
    .block .products-block li .product-content h5 {
      margin: -3px 0 0 0; }
.block .products-block .product-name {
  font-size: 15px;
  line-height: 18px; }
.block .products-block .product-description {
  margin-bottom: 14px; }
.block .products-block .price-percent-reduction {
  font: 700 14px/17px Arial, Helvetica, sans-serif;
  padding: 1px 6px; }

.page-heading {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  text-transform: uppercase;
  padding: 0px 0px 17px 0px;
  margin-bottom: 30px;
  border-bottom: 1px solid #d6d4d4;
  overflow: hidden; }
  .page-heading span.heading-counter {
    font: bold 13px/22px Arial, Helvetica, sans-serif;
    float: right;
    color: #333333;
    text-transform: none;
    margin-bottom: 10px; }
    @media (max-width: 480px) {
      .page-heading span.heading-counter {
        float: none;
        display: block;
        padding-top: 5px; } }
  .page-heading span.lighter {
    color: #9c9c9c; }
  .page-heading.bottom-indent {
    margin-bottom: 16px; }
  .page-heading.product-listing {
    border-bottom: none;
    margin-bottom: 0; }

.page-subheading {
  font-family: "Open Sans", sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  color: #555454;
  font-size: 18px;
  padding: 0 0 15px;
  line-height: normal;
  margin-bottom: 12px;
  border-bottom: 1px solid #d6d4d4; }

h3.page-product-heading {
  color: #555454;
  text-transform: uppercase;
  font-family: "Open Sans", sans-serif;
  font-weight: 600;
  font-size: 18px;
  line-height: 20px;
  padding: 14px 20px 17px;
  margin: 0 0 20px;
  position: relative;
  border: 1px solid #d6d4d4;
  border-bottom: none;
  background: #fbfbfb; }

ul.footer_links {
  padding: 20px 0 0px 0;
  border-top: 1px solid #d6d4d4;
  height: 65px; }
  ul.footer_links li {
    float: left; }
    ul.footer_links li + li {
      margin-left: 10px; }

.content_sortPagiBar .sortPagiBar {
  border-bottom: 1px solid #d6d4d4;
  clear: both; }
  .content_sortPagiBar .sortPagiBar #productsSortForm {
    float: left;
    margin-right: 20px;
    margin-bottom: 10px; }
    .content_sortPagiBar .sortPagiBar #productsSortForm select {
      max-width: 192px;
      float: left; }
      @media (max-width: 991px) {
        .content_sortPagiBar .sortPagiBar #productsSortForm select {
          max-width: 160px; } }
    .content_sortPagiBar .sortPagiBar #productsSortForm .selector {
      float: left; }
  .content_sortPagiBar .sortPagiBar .nbrItemPage {
    float: left; }
    .content_sortPagiBar .sortPagiBar .nbrItemPage select {
      max-width: 59px;
      float: left; }
    .content_sortPagiBar .sortPagiBar .nbrItemPage .clearfix > span {
      padding: 3px 0 0 12px;
      display: inline-block;
      float: left; }
    .content_sortPagiBar .sortPagiBar .nbrItemPage #uniform-nb_item {
      float: left; }
  .content_sortPagiBar .sortPagiBar label,
  .content_sortPagiBar .sortPagiBar select {
    float: left; }
  .content_sortPagiBar .sortPagiBar label {
    padding: 3px 6px 0 0; }
  .content_sortPagiBar .sortPagiBar.instant_search #productsSortForm {
    display: none; }
.content_sortPagiBar .display,
.content_sortPagiBar .display_m {
  float: right;
  margin-top: -4px; }
  .content_sortPagiBar .display li,
  .content_sortPagiBar .display_m li {
    float: left;
    padding-left: 12px;
    text-align: center; }
    .content_sortPagiBar .display li a,
    .content_sortPagiBar .display_m li a {
      color: gray;
      font-size: 11px;
      line-height: 14px;
      cursor: pointer; }
      .content_sortPagiBar .display li a i,
      .content_sortPagiBar .display_m li a i {
        display: block;
        font-size: 24px;
        height: 24px;
        line-height: 24px;
        margin-bottom: -3px;
        color: #e1e0e0; }
      .content_sortPagiBar .display li a:hover i,
      .content_sortPagiBar .display_m li a:hover i {
        color: gray; }
    .content_sortPagiBar .display li.selected a,
    .content_sortPagiBar .display_m li.selected a {
      cursor: default; }
    .content_sortPagiBar .display li.selected i,
    .content_sortPagiBar .display_m li.selected i {
      color: #333333; }
    .content_sortPagiBar .display li.display-title,
    .content_sortPagiBar .display_m li.display-title {
      font-weight: bold;
      color: #333333;
      padding: 7px 6px 0 0; }

.top-pagination-content,
.bottom-pagination-content {
  text-align: center;
  padding: 12px 0 12px 0;
  position: relative; }
  .top-pagination-content div.pagination,
  .bottom-pagination-content div.pagination {
    margin: 0;
    float: right;
    width: 530px;
    text-align: center; }
    @media (min-width: 992px) and (max-width: 1199px) {
      .top-pagination-content div.pagination,
      .bottom-pagination-content div.pagination {
        width: 380px; } }
    @media (max-width: 991px) {
      .top-pagination-content div.pagination,
      .bottom-pagination-content div.pagination {
        float: left;
        width: auto; } }
    .top-pagination-content div.pagination .showall,
    .bottom-pagination-content div.pagination .showall {
      float: right;
      margin: 8px 53px 8px 14px; }
      @media (min-width: 992px) and (max-width: 1199px) {
        .top-pagination-content div.pagination .showall,
        .bottom-pagination-content div.pagination .showall {
          margin-right: 11px; } }
      @media (max-width: 991px) {
        .top-pagination-content div.pagination .showall,
        .bottom-pagination-content div.pagination .showall {
          margin-right: 0; } }
      .top-pagination-content div.pagination .showall .btn span,
      .bottom-pagination-content div.pagination .showall .btn span {
        font-size: 13px;
        padding: 3px 5px 4px 5px;
        line-height: normal; }
  .top-pagination-content ul.pagination,
  .bottom-pagination-content ul.pagination {
    margin: 8px 0px 8px 0; }
    @media (max-width: 991px) {
      .top-pagination-content ul.pagination,
      .bottom-pagination-content ul.pagination {
        float: left; } }
    .top-pagination-content ul.pagination li,
    .bottom-pagination-content ul.pagination li {
      display: inline-block;
      float: left; }
      .top-pagination-content ul.pagination li > a,
      .top-pagination-content ul.pagination li > span,
      .bottom-pagination-content ul.pagination li > a,
      .bottom-pagination-content ul.pagination li > span {
        margin: 0 1px 0 0px;
        padding: 0;
        font-weight: bold;
        border: 1px solid;
        border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
        display: block; }
        .top-pagination-content ul.pagination li > a span,
        .top-pagination-content ul.pagination li > span span,
        .bottom-pagination-content ul.pagination li > a span,
        .bottom-pagination-content ul.pagination li > span span {
          border: 1px solid white;
          padding: 2px 8px;
          display: block;
          background: url(../img/pagination-li.gif) 0 0 repeat-x #fbfbfb; }
      .top-pagination-content ul.pagination li > a:hover span,
      .bottom-pagination-content ul.pagination li > a:hover span {
        background: #f6f6f6; }
      .top-pagination-content ul.pagination li.pagination_previous, .top-pagination-content ul.pagination li.pagination_next,
      .bottom-pagination-content ul.pagination li.pagination_previous,
      .bottom-pagination-content ul.pagination li.pagination_next {
        color: #777676;
        font-weight: bold; }
        .top-pagination-content ul.pagination li.pagination_previous > a,
        .top-pagination-content ul.pagination li.pagination_previous > span, .top-pagination-content ul.pagination li.pagination_next > a,
        .top-pagination-content ul.pagination li.pagination_next > span,
        .bottom-pagination-content ul.pagination li.pagination_previous > a,
        .bottom-pagination-content ul.pagination li.pagination_previous > span,
        .bottom-pagination-content ul.pagination li.pagination_next > a,
        .bottom-pagination-content ul.pagination li.pagination_next > span {
          border: none;
          background: none;
          display: block;
          padding: 4px 0; }
          @media (max-width: 767px) {
            .top-pagination-content ul.pagination li.pagination_previous > a b,
            .top-pagination-content ul.pagination li.pagination_previous > span b, .top-pagination-content ul.pagination li.pagination_next > a b,
            .top-pagination-content ul.pagination li.pagination_next > span b,
            .bottom-pagination-content ul.pagination li.pagination_previous > a b,
            .bottom-pagination-content ul.pagination li.pagination_previous > span b,
            .bottom-pagination-content ul.pagination li.pagination_next > a b,
            .bottom-pagination-content ul.pagination li.pagination_next > span b {
              display: none; } }
          .top-pagination-content ul.pagination li.pagination_previous > a span,
          .top-pagination-content ul.pagination li.pagination_previous > span span, .top-pagination-content ul.pagination li.pagination_next > a span,
          .top-pagination-content ul.pagination li.pagination_next > span span,
          .bottom-pagination-content ul.pagination li.pagination_previous > a span,
          .bottom-pagination-content ul.pagination li.pagination_previous > span span,
          .bottom-pagination-content ul.pagination li.pagination_next > a span,
          .bottom-pagination-content ul.pagination li.pagination_next > span span {
            border: none;
            padding: 0;
            background: none; }
            .top-pagination-content ul.pagination li.pagination_previous > a span b,
            .top-pagination-content ul.pagination li.pagination_previous > span span b, .top-pagination-content ul.pagination li.pagination_next > a span b,
            .top-pagination-content ul.pagination li.pagination_next > span span b,
            .bottom-pagination-content ul.pagination li.pagination_previous > a span b,
            .bottom-pagination-content ul.pagination li.pagination_previous > span span b,
            .bottom-pagination-content ul.pagination li.pagination_next > a span b,
            .bottom-pagination-content ul.pagination li.pagination_next > span span b {
              font-weight: bold; }
      .top-pagination-content ul.pagination li.pagination_previous,
      .bottom-pagination-content ul.pagination li.pagination_previous {
        margin-right: 10px; }
      .top-pagination-content ul.pagination li.pagination_next,
      .bottom-pagination-content ul.pagination li.pagination_next {
        margin-left: 10px; }
      .top-pagination-content ul.pagination li.active > span,
      .bottom-pagination-content ul.pagination li.active > span {
        color: #333333;
        border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0; }
        .top-pagination-content ul.pagination li.active > span span,
        .bottom-pagination-content ul.pagination li.active > span span {
          background: #f6f6f6; }
  .top-pagination-content .compare-form,
  .bottom-pagination-content .compare-form {
    float: right; }
    @media (max-width: 479px) {
      .top-pagination-content .compare-form,
      .bottom-pagination-content .compare-form {
        float: left;
        width: 100%;
        text-align: left;
        padding-bottom: 10px;
        clear: both; } }
  .top-pagination-content .product-count,
  .bottom-pagination-content .product-count {
    padding: 11px 0 0 0;
    float: left; }
    @media (max-width: 991px) {
      .top-pagination-content .product-count,
      .bottom-pagination-content .product-count {
        clear: left; } }

.bottom-pagination-content {
  border-top: 1px solid #d6d4d4; }

ul.step {
  margin-bottom: 30px;
  overflow: hidden; }
  @media (min-width: 768px) {
    ul.step {
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px; } }
  ul.step li {
    float: left;
    width: 20%;
    text-align: left;
    border: 1px solid;
    border-top-color: #cacaca;
    border-bottom-color: #9a9a9a;
    border-right-color: #b7b7b7;
    border-left-width: 0px; }
    @media (max-width: 767px) {
      ul.step li {
        width: 100%;
        border-left-width: 1px; } }
    ul.step li a,
    ul.step li span, ul.step li.step_current span, ul.step li.step_current_end span {
      display: block;
      padding: 13px 10px 14px 13px;
      color: #333333;
      font-size: 17px;
      line-height: 21px;
      font-weight: bold;
      text-shadow: 1px 1px white;
      position: relative; }
      @media (max-width: 992px) {
        ul.step li a,
        ul.step li span, ul.step li.step_current span, ul.step li.step_current_end span {
          font-size: 15px; } }
      @media (min-width: 992px) {
        ul.step li a:after,
        ul.step li span:after, ul.step li.step_current span:after, ul.step li.step_current_end span:after {
          content: ".";
          position: absolute;
          top: 0;
          right: -31px;
          z-index: 0;
          text-indent: -5000px;
          display: block;
          width: 31px;
          height: 52px;
          margin-top: -2px; } }
      ul.step li a:focus,
      ul.step li span:focus, ul.step li.step_current span:focus, ul.step li.step_current_end span:focus {
        text-decoration: none;
        outline: none; }
    ul.step li.first {
      border-left-width: 1px;
      border-left-color: #b7b7b7; }
      @media (min-width: 768px) {
        ul.step li.first {
          -moz-border-radius-topleft: 4px;
          -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
          -moz-border-radius-bottomleft: 4px;
          -webkit-border-bottom-left-radius: 4px;
          border-bottom-left-radius: 4px; } }
      ul.step li.first span,
      ul.step li.first a {
        z-index: 5;
        padding-left: 13px !important; }
        @media (min-width: 768px) {
          ul.step li.first span,
          ul.step li.first a {
            -moz-border-radius-topleft: 4px;
            -webkit-border-top-left-radius: 4px;
            border-top-left-radius: 4px;
            -moz-border-radius-bottomleft: 4px;
            -webkit-border-bottom-left-radius: 4px;
            border-bottom-left-radius: 4px; } }
    ul.step li.second span, ul.step li.second a {
      z-index: 4; }
    ul.step li.third span, ul.step li.third a {
      z-index: 3; }
    ul.step li.four span, ul.step li.four a {
      z-index: 2; }
    ul.step li.last span {
      z-index: 1; }
    @media (min-width: 768px) {
      ul.step li.last {
        -moz-border-radius-topright: 4px;
        -webkit-border-top-right-radius: 4px;
        border-top-right-radius: 4px;
        -moz-border-radius-bottomright: 4px;
        -webkit-border-bottom-right-radius: 4px;
        border-bottom-right-radius: 4px; }
        ul.step li.last span {
          -moz-border-radius-topright: 4px;
          -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
          -moz-border-radius-bottomright: 4px;
          -webkit-border-bottom-right-radius: 4px;
          border-bottom-right-radius: 4px; } }
    ul.step li.step_current {
      font-weight: bold;
      background: #42b856;
      background: -moz-linear-gradient(top, #42b856 0%, #43ab54 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #42b856), color-stop(100%, #43ab54));
      background: -webkit-linear-gradient(top, #42b856 0%, #43ab54 100%);
      background: -o-linear-gradient(top, #42b856 0%, #43ab54 100%);
      background: -ms-linear-gradient(top, #42b856 0%, #43ab54 100%);
      background: linear-gradient(to bottom, #42b856 0%, #43ab54 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#42b856', endColorstr='#43ab54',GradientType=0);
      border-color: #399b49 #51ae5c #208931 #369946; }
      ul.step li.step_current span {
        color: white;
        text-shadow: 1px 1px #208931;
        border: 1px solid;
        border-color: #73ca77 #74c776 #74c175 #74c776;
        position: relative; }
        @media (min-width: 992px) {
          ul.step li.step_current span {
            padding-left: 38px; }
            ul.step li.step_current span:after {
              background: url(../img/order-step-a.png) right 0 no-repeat; } }
    ul.step li.step_current_end {
      font-weight: bold; }
    ul.step li.step_todo {
      background: #f7f7f7;
      background: -moz-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f7f7f7), color-stop(100%, #ededed));
      background: -webkit-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
      background: -o-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
      background: -ms-linear-gradient(top, #f7f7f7 0%, #ededed 100%);
      background: linear-gradient(to bottom, #f7f7f7 0%, #ededed 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#ededed',GradientType=0); }
      ul.step li.step_todo span {
        display: block;
        border: 1px solid;
        border-color: white;
        color: #333333;
        position: relative; }
        @media (min-width: 992px) {
          ul.step li.step_todo span {
            padding-left: 38px; }
            ul.step li.step_todo span:after {
              background: url(../img/order-step-current.png) right 0 no-repeat; } }
    ul.step li.step_done {
      border-color: #666666 #5f5f5f #292929 #5f5f5f;
      background: #727171;
      background: -moz-linear-gradient(top, #727171 0%, #666666 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #727171), color-stop(100%, #666666));
      background: -webkit-linear-gradient(top, #727171 0%, #666666 100%);
      background: -o-linear-gradient(top, #727171 0%, #666666 100%);
      background: -ms-linear-gradient(top, #727171 0%, #666666 100%);
      background: linear-gradient(to bottom, #727171 0%, #666666 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#727171', endColorstr='#666666',GradientType=0); }
      ul.step li.step_done a {
        color: white;
        text-shadow: 1px 1px rgba(0, 0, 0, 0.3);
        border: 1px solid;
        border-color: #8b8a8a; }
        @media (min-width: 992px) {
          ul.step li.step_done a {
            padding-left: 38px; }
            ul.step li.step_done a:after {
              background: url(../img/order-step-done.png) right 0 no-repeat; } }
    @media (min-width: 992px) {
      ul.step li.step_done.step_done_last a:after {
        background: url(../img/order-step-done-last.png) right 0 no-repeat; } }
    @media (min-width: 992px) {
      ul.step li#step_end span:after {
        display: none; } }
    ul.step li em {
      font-style: normal; }
      @media (min-width: 768px) and (max-width: 991px) {
        ul.step li em {
          display: none; } }

.rating {
  clear: both;
  display: block;
  margin: 2em;
  cursor: pointer; }

.rating:after {
  content: ".";
  display: block;
  height: 0;
  width: 0;
  clear: both;
  visibility: hidden; }

.cancel, .star {
  overflow: hidden;
  float: left;
  margin: 0 1px 0 0;
  width: 16px;
  height: 16px;
  cursor: pointer; }

.cancel, .cancel a {
  background: url(../../../modules/productcomments/img/delete.gif) no-repeat 0 -16px !important; }

.cancel a, .star a {
  display: block;
  width: 100%;
  height: 100%;
  background-position: 0 0; }

div.star_on a {
  background-position: 0 -16px; }

div.star_hover a,
div.star a:hover {
  background-position: 0 -32px; }

.pack_content {
  margin: 10px 0 10px 0; }

.confirmation {
  margin: 0 0 10px;
  padding: 10px;
  border: 1px solid #e6db55;
  font-size: 13px;
  background: none repeat scroll 0 0 lightyellow; }

#page .rte {
  background: transparent none repeat scroll 0 0; }

.listcomment {
  list-style-type: none;
  margin: 0 0 20px 0 !important; }

.listcomment li {
  padding: 10px 0;
  border-bottom: 1px dotted #d6d4d4;
  color: #666666; }

.listcomment .titlecomment {
  display: block;
  font-weight: bold;
  font-size: 12px;
  color: #333333; }

.listcomment .txtcomment {
  display: block;
  padding: 5px 0;
  color: #333333; }

.header-container {
  background: white; }

.breadcrumb {
  display: inline-block;
  padding: 0 11px;
  border: 1px solid #d6d4d4;
  font-weight: bold;
  font-size: 12px;
  line-height: 24px;
  min-height: 6px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  overflow: hidden;
  margin-bottom: 16px;
  position: relative;
  z-index: 1; }
  .breadcrumb .navigation-pipe {
    width: 18px;
    display: inline-block;
    text-indent: -5000px; }
  .breadcrumb a {
    display: inline-block;
    background: white;
    padding: 0 15px 0 22px;
    margin-left: -26px;
    position: relative;
    z-index: 2;
    color: #333333; }
    .breadcrumb a.home {
      font-size: 17px;
      color: #777777;
      width: 38px;
      text-align: center;
      padding: 0;
      margin: 0 0 0 -10px;
      -moz-border-radius-topleft: 3px;
      -webkit-border-top-left-radius: 3px;
      border-top-left-radius: 3px;
      -moz-border-radius-bottomleft: 3px;
      -webkit-border-bottom-left-radius: 3px;
      border-bottom-left-radius: 3px;
      z-index: 99;
      line-height: 22px;
      display: inline-block;
      height: 25px; }
      .breadcrumb a.home i {
        vertical-align: -1px; }
      .breadcrumb a.home:before {
        border: none; }
    .breadcrumb a:after {
      display: inline-block;
      content: ".";
      position: absolute;
      right: -10px;
      top: 3px;
      width: 18px;
      height: 18px;
      background: white;
      border-right: 1px solid #d6d4d4;
      border-top: 1px solid #d6d4d4;
      border-radius: 2px;
      text-indent: -5000px;
      z-index: -1;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg); }
    .breadcrumb a:before {
      display: inline-block;
      content: ".";
      position: absolute;
      left: -10px;
      top: 3px;
      width: 18px;
      height: 18px;
      background: transparent;
      border-right: 1px solid #d6d4d4;
      border-top: 1px solid #d6d4d4;
      border-radius: 2px;
      text-indent: -5000px;
      z-index: -1;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg); }
    .breadcrumb a:hover {
      color: #777777; }

.ie8 .breadcrumb {
  min-height: 1px; }
  .ie8 .breadcrumb a:after {
    display: none; }
  .ie8 .breadcrumb .navigation-pipe {
    width: 20px; }

.footer-container {
  background-color: #333333; }
  @media (min-width: 768px) {
    .footer-container {
      background: url(../img/footer-bg.png) repeat-x #333333; } }
  .footer-container .container {
    padding-bottom: 100px; }
  .footer-container #footer {
    color: #777777; }
    .footer-container #footer .row {
      position: relative; }
    .footer-container #footer .footer-block {
      margin-top: 45px; }
      @media (max-width: 767px) {
        .footer-container #footer .footer-block {
          margin-top: 20px; } }
    .footer-container #footer a {
      color: #777777; }
      .footer-container #footer a:hover {
        color: white; }
    .footer-container #footer h4 {
      font: 600 18px/22px "Open Sans", sans-serif;
      color: white;
      margin: 0 0 13px 0;
      cursor: pointer; }
      @media (max-width: 767px) {
        .footer-container #footer h4 {
          position: relative;
          margin-bottom: 0;
          padding-bottom: 13px; }
          .footer-container #footer h4:after {
            display: block;
            content: "\f055";
            font-family: "FontAwesome";
            position: absolute;
            right: 0;
            top: 1px; }
          .footer-container #footer h4.active:after {
            content: "\f056"; } }
      .footer-container #footer h4 a {
        color: white; }
    .footer-container #footer ul li {
      padding-bottom: 8px; }
      .footer-container #footer ul li a {
        font-weight: bold;
        text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.4); }
    .footer-container #footer #block_contact_infos {
      border-left: 1px solid #515151; }
      @media (max-width: 767px) {
        .footer-container #footer #block_contact_infos {
          border: none; } }
      .footer-container #footer #block_contact_infos > div {
        padding: 0 0 0 5px; }
        @media (max-width: 767px) {
          .footer-container #footer #block_contact_infos > div {
            padding-left: 0; } }
        .footer-container #footer #block_contact_infos > div ul li {
          padding: 0 0 7px 4px;
          overflow: hidden;
          line-height: 30px; }
          .footer-container #footer #block_contact_infos > div ul li > span,
          .footer-container #footer #block_contact_infos > div ul li > span a {
            color: white;
            font-weight: normal; }
          .footer-container #footer #block_contact_infos > div ul li i {
            font-size: 25px;
            width: 32px;
            text-align: center;
            padding-right: 12px;
            float: left;
            color: #908f8f; }
    .footer-container #footer .blockcategories_footer {
      clear: left; }
    .footer-container #footer #social_block {
      float: left;
      width: 50%;
      padding: 22px 15px 0 15px; }
      @media (max-width: 767px) {
        .footer-container #footer #social_block {
          width: 100%;
          float: left;
          padding-top: 5px; } }
      .footer-container #footer #social_block ul {
        float: right; }
        @media (max-width: 767px) {
          .footer-container #footer #social_block ul {
            float: none; } }
        .footer-container #footer #social_block ul li {
          float: left;
          width: 40px;
          text-align: center; }
          @media (min-width: 768px) and (max-width: 991px) {
            .footer-container #footer #social_block ul li {
              width: 30px; } }
          .footer-container #footer #social_block ul li a {
            display: inline-block;
            color: #908f8f;
            font-size: 28px; }
            @media (min-width: 768px) and (max-width: 991px) {
              .footer-container #footer #social_block ul li a {
                font-size: 20px; } }
            .footer-container #footer #social_block ul li a span {
              display: none; }
            .footer-container #footer #social_block ul li a:before {
              display: inline-block;
              font-family: "FontAwesome";
              vertical-align: -5px;
              font-weight: normal;
              -webkit-font-smoothing: antialiased;
              -moz-osx-font-smoothing: grayscale; }
            .footer-container #footer #social_block ul li a:hover {
              color: white; }
          .footer-container #footer #social_block ul li.facebook a:before {
            content: "\f09a"; }
          .footer-container #footer #social_block ul li.twitter a:before {
            content: "\f099"; }
          .footer-container #footer #social_block ul li.rss a:before {
            content: "\f09e"; }
          .footer-container #footer #social_block ul li.youtube a:before {
            content: "\f167"; }
          .footer-container #footer #social_block ul li.google-plus a:before {
            content: "\f0d5"; }
          .footer-container #footer #social_block ul li.pinterest a:before {
            content: "\f0d2"; }
      .footer-container #footer #social_block h4 {
        float: right;
        margin-bottom: 0;
        font-size: 21px;
        line-height: 25px;
        text-transform: none;
        padding: 0 10px 0 0; }
        @media (max-width: 767px) {
          .footer-container #footer #social_block h4 {
            display: none;
            text-align: center; } }
    .footer-container #footer .bottom-footer {
      position: absolute;
      bottom: -55px;
      left: 0; }
      .footer-container #footer .bottom-footer div {
        padding: 15px 0 0 0;
        border-top: 1px solid #515151;
        width: 100%; }

#reinsurance_block {
  clear: both !important; }

#short_description_content ul,
#short_description_content ol,
#short_description_content dl,
#tinymce ul,
#tinymce ol,
#tinymce dl {
  margin-left: 20px; }

.rte ul {
  list-style-type: disc;
  padding-left: 15px; }

.rte ol {
  list-style-type: decimal;
  padding-left: 15px; }

.block_hidden_only_for_screen {
  display: none; }

.cart_navigation {
  margin: 0 0 20px; }
  .cart_navigation .button-medium {
    float: right;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    font-size: 20px;
    line-height: 24px; }
    .cart_navigation .button-medium span {
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      padding: 11px 15px 10px 15px; }
      @media (max-width: 992px) {
        .cart_navigation .button-medium span {
          font-size: 16px; } }
    .cart_navigation .button-medium i.right {
      font-size: 25px;
      line-height: 25px;
      vertical-align: -4px;
      margin-left: 6px; }
  .cart_navigation .button-exclusive {
    border: none;
    background: none;
    padding: 0;
    font-size: 17px;
    font-weight: bold;
    color: #333333;
    margin: 9px 0 0 0; }
    .cart_navigation .button-exclusive i {
      color: #777777;
      margin-right: 8px; }
    .cart_navigation .button-exclusive:hover, .cart_navigation .button-exclusive:focus, .cart_navigation .button-exclusive:active {
      color: #515151;
      -webkit-box-shadow: none;
      box-shadow: none; }
  @media (max-width: 480px) {
    .cart_navigation > span {
      display: block;
      width: 100%;
      padding-bottom: 15px; } }

.cart_last_product {
  display: none; }

.cart_quantity .cart_quantity_input {
  height: 27px;
  line-height: 27px;
  padding: 0;
  text-align: center;
  width: 57px; }

.cart_gift_quantity .cart_quantity_input {
  height: 27px;
  line-height: 27px;
  padding: 0;
  text-align: center;
  width: 57px; }

.table tbody > tr > td {
  vertical-align: middle; }
  .table tbody > tr > td.cart_quantity {
    padding: 41px 14px 25px;
    width: 88px; }
    .table tbody > tr > td.cart_quantity .cart_quantity_button {
      margin-top: 3px; }
      .table tbody > tr > td.cart_quantity .cart_quantity_button a {
        float: left;
        margin-right: 3px; }
        .table tbody > tr > td.cart_quantity .cart_quantity_button a + a {
          margin-right: 0; }
  .table tbody > tr > td.cart_delete, .table tbody > tr > td.price_discount_del {
    padding: 5px; }
.table tfoot > tr > td {
  vertical-align: middle; }

.cart_delete a.cart_quantity_delete,
a.price_discount_delete {
  font-size: 23px;
  color: #333333; }
  .cart_delete a.cart_quantity_delete:hover,
  a.price_discount_delete:hover {
    color: silver; }

#cart_summary tbody td {
  padding: 7px 8px 9px 18px; }
  #cart_summary tbody td.cart_product {
    padding: 7px;
    width: 137px; }
    #cart_summary tbody td.cart_product img {
      border: 1px solid #d6d4d4; }
  #cart_summary tbody td.cart_unit .price span {
    display: inline-block; }
    #cart_summary tbody td.cart_unit .price span.price-percent-reduction {
      margin: 5px auto;
      display: inline-block; }
    #cart_summary tbody td.cart_unit .price span.old-price {
      text-decoration: line-through; }
  #cart_summary tbody td.cart_description small {
    display: block;
    padding: 5px 0 0 0; }
#cart_summary tfoot td.text-right, #cart_summary tfoot tbody td.cart_unit, #cart_summary tbody tfoot td.cart_unit, #cart_summary tfoot tbody td.cart_total, #cart_summary tbody tfoot td.cart_total {
  font-weight: bold;
  color: #333333; }
#cart_summary tfoot td.price {
  text-align: right; }
#cart_summary tfoot td.total_price_container span {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  text-transform: uppercase; }
#cart_summary tfoot td#total_price_container {
  font: 600 21px/25px "Open Sans", sans-serif;
  color: #333333;
  background: white; }

#cart_summary .stock-management-on tbody td.cart_description {
  width: 480px; }

.cart_discount_price {
  text-align: right; }

.cart_discount_delete {
  text-align: center; }

@media (max-width: 767px) {
  #order-detail-content #cart_summary table, #order-detail-content #cart_summary thead, #order-detail-content #cart_summary tbody, #order-detail-content #cart_summary th, #order-detail-content #cart_summary td, #order-detail-content #cart_summary tr {
    display: block; }
  #order-detail-content #cart_summary thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px; }
  #order-detail-content #cart_summary tr {
    border-bottom: 1px solid #cccccc;
    overflow: hidden; }
  #order-detail-content #cart_summary td {
    border: none;
    position: relative;
    width: 50%;
    float: left;
    white-space: normal; }
    #order-detail-content #cart_summary td.cart_avail {
      clear: both; }
    #order-detail-content #cart_summary td.cart_quantity {
      clear: both;
      padding: 9px 8px 11px 18px; }
    #order-detail-content #cart_summary td.cart_delete {
      width: 100%;
      clear: both;
      text-align: right; }
      #order-detail-content #cart_summary td.cart_delete:before {
        display: inline-block;
        padding-right: 0.5em;
        position: relative;
        top: -3px; }
    #order-detail-content #cart_summary td div {
      display: inline; }
  #order-detail-content #cart_summary td:before {
    content: attr(data-title);
    display: block; }
  #order-detail-content #cart_summary tfoot td {
    float: none;
    width: 100%; }
    #order-detail-content #cart_summary tfoot td:before {
      display: inline; }
  #order-detail-content #cart_summary tfoot tr .text-right, #order-detail-content #cart_summary tfoot tr tbody td.cart_unit, #order-detail-content #cart_summary tbody tfoot tr td.cart_unit, #order-detail-content #cart_summary tfoot tr tbody td.cart_total, #order-detail-content #cart_summary tbody tfoot tr td.cart_total, #order-detail-content #cart_summary tfoot tr .price {
    display: block;
    float: left;
    width: 50%; } }
@media (max-width: 768px) {
  #order-detail-content #cart_summary tbody td .price {
    text-align: center; }
  #order-detail-content #cart_summary tbody td.cart_description {
    width: 300px; } }
.cart_voucher {
  vertical-align: top !important; }
  .cart_voucher h4 {
    font: 600 18px/22px "Open Sans", sans-serif;
    color: #555454;
    text-transform: uppercase;
    padding: 7px 0 10px 0; }
  .cart_voucher .title-offers {
    color: #333333;
    font-weight: bold;
    margin-bottom: 6px; }
  .cart_voucher fieldset {
    margin-bottom: 10px; }
    .cart_voucher fieldset #discount_name {
      float: left;
      width: 219px;
      margin-right: 11px; }
  .cart_voucher #display_cart_vouchers span {
    font-weight: bold;
    cursor: pointer;
    color: #777777; }
    .cart_voucher #display_cart_vouchers span:hover {
      color: #515151; }

.enable-multishipping {
  margin: -13px 0 17px; }
  .enable-multishipping label {
    font-weight: normal; }

#HOOK_SHOPPING_CART #loyalty i {
  font-size: 26px;
  line-height: 26px;
  color: #cfcccc; }

#order_carrier {
  clear: both;
  margin-top: 20px;
  border: 1px solid #999999;
  background: white; }

#order_carrier .title_block {
  padding: 0 15px;
  height: 29px;
  font-weight: bold;
  line-height: 29px;
  color: white;
  font-weight: bold;
  text-transform: uppercase;
  background: url(../img/bg_table_th.png) repeat-x 0 -10px #999999; }

#order_carrier span {
  display: block;
  padding: 15px;
  font-weight: bold; }

.multishipping_close_container {
  text-align: center; }

table#cart_summary .gift-icon {
  color: white;
  background: #0088cc;
  line-height: 20px;
  padding: 2px 5px;
  border-radius: 5px; }

#multishipping_mode_box {
  padding-top: 12px;
  padding-bottom: 19px; }
  #multishipping_mode_box .title {
    font-weight: bold;
    color: #333333;
    margin-bottom: 15px; }
  #multishipping_mode_box .description_off {
    display: none; }
    #multishipping_mode_box .description_off div {
      margin-bottom: 10px; }
  #multishipping_mode_box .description_off a:hover,
  #multishipping_mode_box .description a:hover {
    background: #f3f3f3;
    border: 1px solid #cccccc; }

#multishipping_mode_box.on .description_off {
  display: block; }

.multishipping-cart .cart_address_delivery.form-control {
  width: 198px; }

#order .address_add.submit {
  margin-bottom: 20px; }

#ordermsg {
  margin-bottom: 30px; }

#id_address_invoice.form-control,
#id_address_delivery.form-control {
  width: 269px; }

.addresses .select label,
.addresses .selector,
.addresses .addresses .address_select {
  clear: both;
  float: left; }
.addresses .waitimage {
  display: none;
  float: left;
  width: 24px;
  height: 24px;
  background-image: url("../../../img/loader.gif");
  background-repeat: no-repeat;
  position: relative;
  bottom: -2px;
  left: 10px; }
.addresses .checkbox.addressesAreEquals {
  clear: both;
  float: left;
  margin: 15px 0 25px 0; }

#order .delivery_option > div,
#order-opc .delivery_option > div {
  display: block;
  margin-bottom: 20px;
  font-weight: normal; }
  #order .delivery_option > div > table,
  #order-opc .delivery_option > div > table {
    background: white;
    margin-bottom: 0; }
    #order .delivery_option > div > table.resume,
    #order-opc .delivery_option > div > table.resume {
      height: 53px; }
      #order .delivery_option > div > table.resume.delivery_option_carrier,
      #order-opc .delivery_option > div > table.resume.delivery_option_carrier {
        margin-top: 10px;
        width: 100%;
        border: 1px solid #d6d4d4;
        font-weight: bold; }
        #order .delivery_option > div > table.resume.delivery_option_carrier td,
        #order-opc .delivery_option > div > table.resume.delivery_option_carrier td {
          padding: 8px 11px 7px 11px; }
          #order .delivery_option > div > table.resume.delivery_option_carrier td i,
          #order-opc .delivery_option > div > table.resume.delivery_option_carrier td i {
            font-size: 20px;
            margin-right: 7px;
            vertical-align: -2px; }
      #order .delivery_option > div > table.resume td.delivery_option_radio,
      #order-opc .delivery_option > div > table.resume td.delivery_option_radio {
        width: 54px;
        padding-left: 0;
        padding-right: 0;
        text-align: center; }
      #order .delivery_option > div > table.resume td.delivery_option_logo,
      #order-opc .delivery_option > div > table.resume td.delivery_option_logo {
        width: 97px;
        padding-left: 21px; }
      #order .delivery_option > div > table.resume td.delivery_option_price,
      #order-opc .delivery_option > div > table.resume td.delivery_option_price {
        width: 162px; }

.order_carrier_content {
  line-height: normal;
  padding-bottom: 16px; }
  .order_carrier_content .carrier_title {
    font-weight: bold;
    color: #333333; }
  .order_carrier_content .checkbox input {
    margin-top: 2px; }
  .order_carrier_content .delivery_options_address .carrier_title {
    margin-bottom: 17px; }
  .order_carrier_content + div {
    padding-bottom: 15px; }

#carrierTable {
  border: 1px solid #999999;
  border-bottom: none;
  background: white; }

#carrierTable tbody {
  border-bottom: 1px solid #999999; }

#carrierTable th {
  padding: 0 15px;
  height: 29px;
  font-weight: bold;
  line-height: 29px;
  color: white;
  text-transform: uppercase;
  background: url(../img/bg_table_th.png) repeat-x 0 -10px #999999; }

#carrierTable td {
  padding: 15px;
  font-weight: bold;
  border-right: 1px solid #e9e9e9; }

#carrierTable td.carrier_price {
  border: none; }

p.checkbox.gift {
  margin-bottom: 10px; }

#gift_div {
  display: none;
  margin-top: 5px;
  margin-bottom: 10px; }

a.iframe {
  color: #333333;
  text-decoration: underline; }
  a.iframe:hover {
    text-decoration: none; }

p.payment_module {
  margin-bottom: 10px; }
  p.payment_module a {
    display: block;
    border: 1px solid #d6d4d4;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    font-size: 17px;
    line-height: 23px;
    color: #333333;
    font-weight: bold;
    padding: 33px 40px 34px 99px;
    letter-spacing: -1px;
    position: relative; }
    p.payment_module a.bankwire {
      background: url(../img/bankwire.png) 15px 12px no-repeat #fbfbfb; }
    p.payment_module a.cheque {
      background: url(../img/cheque.png) 15px 15px no-repeat #fbfbfb; }
    p.payment_module a.cash {
      background: url(../img/cash.png) 15px 15px no-repeat #fbfbfb; }
    p.payment_module a.cheque:after, p.payment_module a.bankwire:after, p.payment_module a.cash:after {
      display: block;
      content: "\f054";
      position: absolute;
      right: 15px;
      margin-top: -11px;
      top: 50%;
      font-family: "FontAwesome";
      font-size: 25px;
      height: 22px;
      width: 14px;
      color: #777777; }
    p.payment_module a:hover {
      background-color: #f6f6f6; }
    p.payment_module a span {
      font-weight: bold;
      color: #777777; }

.payment_module.box {
  margin-top: 20px; }

p.cheque-indent {
  margin-bottom: 9px; }

.cheque-box .form-group {
  margin-bottom: 0px; }
  .cheque-box .form-group .form-control {
    width: 269px; }

.order-confirmation.box {
  line-height: 29px; }
  .order-confirmation.box a {
    text-decoration: underline; }
    .order-confirmation.box a:hover {
      text-decoration: none; }

.delivery_option_carrier td {
  width: 200px; }

.delivery_option_carrier td + td {
  width: 280px; }

.delivery_option_carrier td + td + td {
  width: 200px; }

.delivery_option_carrier tr td {
  padding: 5px; }

.delivery_option_carrier.selected {
  display: table; }

.not-displayable {
  display: none; }

#address .box,
#identity .box,
#account-creation_form .box,
#new_account_form .box,
#opc_account_form .box,
#authentication .box {
  padding-bottom: 20px;
  line-height: 20px; }
#address p.required,
#identity p.required,
#account-creation_form p.required,
#new_account_form p.required,
#opc_account_form p.required,
#authentication p.required {
  color: #f13340;
  margin: 9px 0 16px 0; }
#address p.inline-infos,
#identity p.inline-infos,
#account-creation_form p.inline-infos,
#new_account_form p.inline-infos,
#opc_account_form p.inline-infos,
#authentication p.inline-infos {
  color: red; }
#address .form-group,
#identity .form-group,
#account-creation_form .form-group,
#new_account_form .form-group,
#opc_account_form .form-group,
#authentication .form-group {
  margin-bottom: 4px; }
  #address .form-group .form-control,
  #identity .form-group .form-control,
  #account-creation_form .form-group .form-control,
  #new_account_form .form-group .form-control,
  #opc_account_form .form-group .form-control,
  #authentication .form-group .form-control {
    max-width: 271px; }
    #address .form-group .form-control#adress_alias,
    #identity .form-group .form-control#adress_alias,
    #account-creation_form .form-group .form-control#adress_alias,
    #new_account_form .form-group .form-control#adress_alias,
    #opc_account_form .form-group .form-control#adress_alias,
    #authentication .form-group .form-control#adress_alias {
      margin-bottom: 20px; }
  @media (min-width: 1200px) {
    #address .form-group.phone-number,
    #identity .form-group.phone-number,
    #account-creation_form .form-group.phone-number,
    #new_account_form .form-group.phone-number,
    #opc_account_form .form-group.phone-number,
    #authentication .form-group.phone-number {
      float: left;
      width: 270px;
      margin-right: 13px; } }
  @media (min-width: 1200px) {
    #address .form-group.phone-number + p,
    #identity .form-group.phone-number + p,
    #account-creation_form .form-group.phone-number + p,
    #new_account_form .form-group.phone-number + p,
    #opc_account_form .form-group.phone-number + p,
    #authentication .form-group.phone-number + p {
      padding: 23px 0 0 0px;
      margin-bottom: 0; } }
#address .gender-line,
#identity .gender-line,
#account-creation_form .gender-line,
#new_account_form .gender-line,
#opc_account_form .gender-line,
#authentication .gender-line {
  margin-bottom: 4px;
  padding-top: 4px; }
  #address .gender-line > label,
  #identity .gender-line > label,
  #account-creation_form .gender-line > label,
  #new_account_form .gender-line > label,
  #opc_account_form .gender-line > label,
  #authentication .gender-line > label {
    margin-right: 10px;
    margin-bottom: 0; }
  #address .gender-line .radio-inline label,
  #identity .gender-line .radio-inline label,
  #account-creation_form .gender-line .radio-inline label,
  #new_account_form .gender-line .radio-inline label,
  #opc_account_form .gender-line .radio-inline label,
  #authentication .gender-line .radio-inline label {
    font-weight: normal;
    color: #777777; }

#identity #center_column form.std .row,
#authentication #center_column form.std .row,
#order-opc #center_column form.std .row {
  margin-left: -5px;
  margin-right: -5px; }
  #identity #center_column form.std .row .col-xs-4,
  #authentication #center_column form.std .row .col-xs-4,
  #order-opc #center_column form.std .row .col-xs-4 {
    padding-left: 5px;
    padding-right: 5px;
    max-width: 94px; }
    #identity #center_column form.std .row .col-xs-4 .form-control,
    #authentication #center_column form.std .row .col-xs-4 .form-control,
    #order-opc #center_column form.std .row .col-xs-4 .form-control {
      max-width: 84px; }
#identity #center_column .footer_links,
#authentication #center_column .footer_links,
#order-opc #center_column .footer_links {
  border: none;
  padding-top: 0; }

#new_account_form .box {
  line-height: 20px; }
  #new_account_form .box .date-select {
    padding-bottom: 10px; }
  #new_account_form .box .top-indent {
    padding-top: 10px; }
  #new_account_form .box .customerprivacy {
    padding-top: 15px; }

#authentication fieldset.account_creation {
  margin-bottom: 20px; }

#password {
  padding-top: 0;
  border: none; }
  #password .box p {
    margin-bottom: 9px; }
  #password .box .form-group {
    margin-bottom: 20px; }
    #password .box .form-group .form-control {
      width: 263px; }

#instant_search_results a.close {
  font-size: 13px;
  font-weight: 600;
  opacity: 1;
  line-height: inherit;
  text-transform: none;
  font-family: Arial, Helvetica, sans-serif; }
  #instant_search_results a.close:hover {
    color: #515151; }

#manufacturers_list h3,
#suppliers_list h3 {
  font-size: 17px;
  line-height: 23px; }
#manufacturers_list .description,
#suppliers_list .description {
  line-height: 18px; }
#manufacturers_list .product-counter a,
#suppliers_list .product-counter a {
  font-weight: bold;
  color: #333333; }
  #manufacturers_list .product-counter a:hover,
  #suppliers_list .product-counter a:hover {
    color: #515151; }
#manufacturers_list.list li .mansup-container,
#suppliers_list.list li .mansup-container {
  border-top: 1px solid #d6d4d4;
  padding: 31px 0 30px 0; }
  @media (max-width: 767px) {
    #manufacturers_list.list li .mansup-container,
    #suppliers_list.list li .mansup-container {
      text-align: center; } }
#manufacturers_list.list li:first-child .mansup-container,
#suppliers_list.list li:first-child .mansup-container {
  border-top: 0; }
#manufacturers_list.list li .left-side,
#suppliers_list.list li .left-side {
  text-align: center; }
#manufacturers_list.list li h3,
#suppliers_list.list li h3 {
  margin-top: -5px;
  padding-bottom: 8px; }
#manufacturers_list.list li .middle-side,
#suppliers_list.list li .middle-side {
  padding-left: 0; }
  @media (max-width: 767px) {
    #manufacturers_list.list li .middle-side,
    #suppliers_list.list li .middle-side {
      padding-right: 15px;
      padding-left: 15px; } }
#manufacturers_list.list li .right-side-content,
#suppliers_list.list li .right-side-content {
  border-left: 1px solid #d6d4d4;
  padding: 0 0 32px 31px;
  min-height: 108px; }
  @media (max-width: 767px) {
    #manufacturers_list.list li .right-side-content,
    #suppliers_list.list li .right-side-content {
      min-height: 1px;
      padding: 0;
      border: none; } }
  #manufacturers_list.list li .right-side-content .product-counter,
  #suppliers_list.list li .right-side-content .product-counter {
    position: relative;
    top: -6px;
    margin-bottom: 12px; }
    @media (max-width: 767px) {
      #manufacturers_list.list li .right-side-content .product-counter,
      #suppliers_list.list li .right-side-content .product-counter {
        top: 0; } }
#manufacturers_list.grid li,
#suppliers_list.grid li {
  text-align: center; }
  #manufacturers_list.grid li .product-container,
  #suppliers_list.grid li .product-container {
    padding-top: 40px;
    padding-bottom: 20px;
    border-bottom: 1px solid #d6d4d4; }
    #manufacturers_list.grid li .product-container .left-side,
    #suppliers_list.grid li .product-container .left-side {
      padding-bottom: 42px; }
    #manufacturers_list.grid li .product-container h3,
    #suppliers_list.grid li .product-container h3 {
      padding-bottom: 10px; }
    #manufacturers_list.grid li .product-container .product-counter,
    #suppliers_list.grid li .product-container .product-counter {
      margin-bottom: 12px; }
@media (min-width: 1200px) {
  #manufacturers_list.grid li.first-in-line,
  #suppliers_list.grid li.first-in-line {
    clear: left; }
  #manufacturers_list.grid li.last-line .product-container,
  #suppliers_list.grid li.last-line .product-container {
    border-bottom: none; } }
@media (min-width: 768px) and (max-width: 1199px) {
  #manufacturers_list.grid li.first-item-of-tablet-line,
  #suppliers_list.grid li.first-item-of-tablet-line {
    clear: left; }
  #manufacturers_list.grid li.last-tablet-line .product-container,
  #suppliers_list.grid li.last-tablet-line .product-container {
    border-bottom: none; } }
@media (max-width: 767px) {
  #manufacturers_list.grid .product-container,
  #suppliers_list.grid .product-container {
    border-bottom: none; } }

#manufacturer .description_box,
#supplier .description_box {
  padding-top: 20px;
  padding-bottom: 20px;
  border-top: 1px solid #d6d4d4; }
  #manufacturer .description_box .hide_desc,
  #supplier .description_box .hide_desc {
    display: none; }
#manufacturer .bottom-pagination-content,
#manufacturer .top-pagination-content,
#supplier .bottom-pagination-content,
#supplier .top-pagination-content {
  min-height: 69px; }
#manufacturer .top-pagination-content.bottom-line,
#supplier .top-pagination-content.bottom-line {
  border-bottom: 1px solid #d6d4d4; }

table.discount i {
  font-size: 20px;
  line-height: 20px;
  vertical-align: -2px; }
  table.discount i.icon-ok {
    color: #46a74e; }
  table.discount i.icon-remove {
    color: #f13340; }

#guestTracking .form-control {
  max-width: 271px; }
@media (min-width: 1200px) {
  #guestTracking .form-group {
    overflow: hidden; }
    #guestTracking .form-group i {
      padding-left: 10px; }
  #guestTracking .form-control {
    float: left; }
  #guestTracking label {
    float: left;
    clear: both;
    width: 100%; } }

#pagenotfound .pagenotfound {
  max-width: 824px;
  margin: 0 auto;
  text-align: center; }
  #pagenotfound .pagenotfound .img-404 {
    padding: 8px 0 27px 0; }
    #pagenotfound .pagenotfound .img-404 img {
      max-width: 100%; }
  #pagenotfound .pagenotfound h1 {
    font: 600 28px/34px "Open Sans", sans-serif;
    color: #333333;
    text-transform: uppercase;
    margin-bottom: 7px; }
  #pagenotfound .pagenotfound p {
    font: 600 16px/20px "Open Sans", sans-serif;
    color: #555454;
    text-transform: uppercase;
    border-bottom: 1px solid #d6d4d4;
    padding-bottom: 19px;
    margin-bottom: 20px; }
  #pagenotfound .pagenotfound h3 {
    font-weight: bold;
    color: #333333;
    font-size: 13px;
    line-height: normal;
    margin-bottom: 18px; }
  #pagenotfound .pagenotfound label {
    font-weight: normal; }
    @media (max-width: 767px) {
      #pagenotfound .pagenotfound label {
        display: block; } }
  #pagenotfound .pagenotfound .form-control {
    max-width: 293px;
    display: inline-block;
    margin-right: 5px; }
    @media (max-width: 767px) {
      #pagenotfound .pagenotfound .form-control {
        margin: 0 auto 15px auto;
        display: block; } }
  #pagenotfound .pagenotfound .buttons {
    padding: 48px 0 20px 0; }
    #pagenotfound .pagenotfound .buttons .button-medium i.left {
      font-size: 17px; }

#account-creation_form fieldset.reversoform {
  padding: 10px !important; }

#account-creation_form fieldset.reversoform .text label {
  display: block;
  padding: 0 0 10px 0;
  width: 100%;
  text-align: left; }

#account-creation_form fieldset.reversoform .infos-sup {
  padding: 0 !important;
  font-size: 10px;
  font-style: italic;
  text-align: right; }

#account-creation_form fieldset.customerprivacy label,
fieldset.customerprivacy label {
  cursor: pointer; }

.tab-content {
  margin-top: 20px; }

form#sendComment fieldset {
  padding: 10px;
  border: 1px solid #cccccc;
  background: #eeeeee; }

form#sendComment h3 {
  font-size: 14px; }

#new_comment_form p.text {
  margin-bottom: 0;
  padding-bottom: 0; }

#sendComment p.text label,
#sendComment p.textarea label {
  display: block;
  margin: 12px 0 4px;
  font-weight: bold;
  font-size: 12px; }

#sendComment p.text input {
  padding: 0 5px;
  height: 28px;
  width: 498px;
  border: 1px solid #cccccc;
  background: url(../img/bg_input.png) repeat-x 0 0 white; }

#sendComment p.textarea textarea {
  height: 80px;
  width: 508px;
  border: 1px solid #cccccc; }

#sendComment p.submit {
  padding: 0;
  text-align: right; }

#sendComment p.closeform {
  float: right;
  padding: 0;
  height: 12px;
  width: 12px;
  text-indent: -5000px;
  background: url(../img/icon/delete.gif) no-repeat 0 0; }

.star {
  position: relative;
  top: -1px;
  float: left;
  width: 14px;
  overflow: hidden;
  cursor: pointer;
  font-size: 14px;
  font-weight: normal; }

.star {
  display: block; }
  .star a {
    display: block;
    position: absolute;
    text-indent: -5000px; }

div.star:after {
  content: "\f006";
  font-family: "FontAwesome";
  display: inline-block;
  color: #777676; }

div.star.star_on {
  display: block; }
  div.star.star_on:after {
    content: "\f005";
    font-family: "FontAwesome";
    display: inline-block;
    color: #ef8743; }

div.star.star_hover:after {
  content: "\f005";
  font-family: "FontAwesome";
  display: inline-block;
  color: #ef8743; }

.advertising_block {
  width: 191px;
  margin-bottom: 1em;
  text-align: center; }

.blockcategories_footer ul ul {
  display: none !important; }

.form-group.form-error input, .form-group.form-error textarea {
  border: 1px solid #f13340;
  color: #f13340;
  background: url(../img/icon/form-error.png) 98% 5px no-repeat #fff1f2; }
.form-group.form-ok input, .form-group.form-ok textarea {
  border: 1px solid #46a74e;
  color: #35b33f;
  background: url(../img/icon/form-ok.png) 98% 5px no-repeat #ddf9e1; }
.form-group.form-error .form-control, .form-group.form-ok .form-control {
  padding-right: 30px; }

.radio-inline, .checkbox {
  padding-left: 0; }
  .radio-inline .checker, .checkbox .checker {
    float: left; }
    .radio-inline .checker span, .checkbox .checker span {
      top: 0px; }
  .radio-inline div.radio, .checkbox div.radio {
    display: inline-block; }
    .radio-inline div.radio span, .checkbox div.radio span {
      float: left;
      top: 0px; }

.fancybox-skin {
  background: white !important; }

.fancybox-skin .fancybox-close {
  width: 28px;
  height: 28px;
  background: none;
  font-size: 28px;
  line-height: 28px;
  color: #333333;
  text-align: center;
  background: white;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px; }
  .fancybox-skin .fancybox-close:hover {
    color: #515151; }
  .fancybox-skin .fancybox-close:after {
    content: "\f057";
    font-family: "FontAwesome"; }

#facebook_block,
#cmsinfo_block {
  overflow: hidden;
  background: #f2f2f2;
  min-height: 344px;
  padding-right: 29px;
  padding-left: 29px; }
  @media (max-width: 991px) {
    #facebook_block,
    #cmsinfo_block {
      min-height: 348px;
      padding-left: 13px;
      padding-right: 13px; } }
  @media (max-width: 767px) {
    #facebook_block,
    #cmsinfo_block {
      width: 100%;
      min-height: 1px; } }

#facebook_block h4 {
  padding: 35px 0 0 0;
  margin: 0 0 12px 0;
  font: 300 21px/25px "Open Sans", sans-serif;
  color: #6f6d6d; }
  @media (max-width: 991px) {
    #facebook_block h4 {
      font-size: 18px; } }
  @media (max-width: 767px) {
    #facebook_block h4 {
      padding-top: 20px !important; } }
  @media (max-width: 768px) {
    #facebook_block h4 {
      font-size: 16px; } }
#facebook_block .facebook-fanbox {
  background: white;
  border: 1px solid #aaaaaa;
  padding-bottom: 10px; }

#cmsinfo_block {
  border-left: 1px solid #d9d9d9; }
  @media (max-width: 767px) {
    #cmsinfo_block {
      border: none;
      margin-top: 10px; } }
  #cmsinfo_block > div {
    padding: 35px 10px 0 0; }
    @media (max-width: 767px) {
      #cmsinfo_block > div {
        padding-top: 20px; } }
    @media (max-width: 479px) {
      #cmsinfo_block > div {
        width: 100%;
        border-top: 1px solid #d9d9d9; } }
  #cmsinfo_block > div + div {
    border-left: 1px solid #d9d9d9;
    min-height: 344px;
    padding-left: 29px; }
    @media (max-width: 479px) {
      #cmsinfo_block > div + div {
        border-left: none;
        padding-left: 10px;
        min-height: 1px;
        padding-bottom: 15px; } }
  #cmsinfo_block em {
    float: left;
    width: 60px;
    height: 60px;
    margin: 3px 10px 0 0;
    font-size: 30px;
    color: white;
    line-height: 60px;
    text-align: center;
    background: #6f6d6d;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px; }
    @media (max-width: 991px) {
      #cmsinfo_block em {
        width: 30px;
        height: 30px;
        line-height: 30px;
        font-size: 20px; } }
  #cmsinfo_block .type-text {
    overflow: hidden; }
  #cmsinfo_block h3 {
    margin: 0 0 5px 0;
    font: 300 21px/25px "Open Sans", sans-serif;
    color: #6f6d6d; }
    @media (max-width: 1199px) {
      #cmsinfo_block h3 {
        font-size: 18px; } }
  #cmsinfo_block ul li {
    padding-bottom: 22px; }
    @media (max-width: 1199px) {
      #cmsinfo_block ul li {
        padding-bottom: 10px; } }
    @media (max-width: 991px) {
      #cmsinfo_block ul li {
        padding-bottom: 0; } }
  #cmsinfo_block p em {
    background: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    margin: 0;
    font-size: 13px;
    color: #777777;
    float: none;
    height: inherit;
    line-height: inherit;
    text-align: left;
    font-style: italic; }

.ie8 #facebook_block,
.ie8 #cmsinfo_block {
  height: 344px; }

@media (max-width: 1199px) {
  .zoomdiv {
    display: none !important; } }
#product.content_only div.pb-left-column p.resetimg {
  margin-bottom: 0px;
  padding-top: 0px; }
#product.content_only div.pb-left-column #thumbs_list_frame {
  margin-bottom: 0px; }

#product_comparison td.compare_extra_information {
  padding: 10px; }
#product_comparison #social-share-compare {
  margin-bottom: 50px; }

.btn-facebook:hover, .btn-twitter:hover, .btn-google-plus:hover, .btn-pinterest:hover {
  border-color: white; }

.btn-facebook i {
  color: #435f9f; }
.btn-facebook:hover {
  color: white;
  background-color: #435f9f; }
  .btn-facebook:hover i {
    color: white; }

.btn-twitter i {
  color: #00aaf0; }
.btn-twitter:hover {
  color: white;
  background-color: #00aaf0; }
  .btn-twitter:hover i {
    color: white; }

.btn-google-plus i {
  color: #e04b34; }
.btn-google-plus:hover {
  color: white;
  background-color: #e04b34; }
  .btn-google-plus:hover i {
    color: white; }

.btn-pinterest i {
  color: #ce1f21; }
.btn-pinterest:hover {
  color: white;
  background-color: #ce1f21; }
  .btn-pinterest:hover i {
    color: white; }
<?php }} ?>
