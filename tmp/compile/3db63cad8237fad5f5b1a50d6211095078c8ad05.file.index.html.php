<?php /* Smarty version Smarty-3.0.7, created on 2011-03-07 16:38:54
         compiled from "/Users/zhangwenjin/Sites/vote/template/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2826702364d74999e9d9823-12411603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3db63cad8237fad5f5b1a50d6211095078c8ad05' => 
    array (
      0 => '/Users/zhangwenjin/Sites/vote/template/admin/index.html',
      1 => 1299487133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2826702364d74999e9d9823-12411603',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> 主界面 </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="template/admin/js/jquery.js"></script>
  <style type="text/css">
  body { padding: 0px; margin: 0px; font: 12px Tahoma; background: #FBFDFF url(template/admin/images/body_bg.gif) repeat-y; }
  h1 { font-size: 16px; line-height: 24px; margin-bottom: 10px; }
  table { width: 100%; }
  td { vertical-align: top; }
  ul { margin: 0px; padding: 0px; list-style: none;  }

  #topper { height: 68px;; background: url(template/admin/images/header_bg.gif) repeat-x; border-bottom: 4px solid #1F62B0; }
  #logo { width: 153px; }
  #top-menu { line-height: 36px; text-align: right; padding-right: 1em; }
  #top-menu a { margin-right:10px; }
  #top-menu #reload { background:url(template/admin/images/icon_reload.gif) no-repeat 0 center; padding-left:13px; }
  #top-menu #logout { background:url(template/admin/images/icon_logout.gif) no-repeat 0 center; padding-left:13px; }
  #top-menu #clearcache { background:url(template/admin/images/icon_clear.gif) no-repeat 0 center; padding-left:13px; }

  #top-tabbar { position: relative; overflow:hidden; }
  #top-tab { height: 32px; overflow:hidden; position:relative;text-align:center;}
  #top-tab ul { position: relative; overflow:hidden;}
  #top-tab li { color: #999; font-weight: bold; font-size: 12px; float: left; margin-right: 2px; width: 124px; height: 32px; line-height: 32px; background: url(template/admin/images/toptab_space.gif) no-repeat left; cursor: pointer; }
  #top-tab li.actived { background: url(template/admin/images/toptab_active_bg.jpg) no-repeat; color: #FFF; }
  #top-tab img { vertical-align: middle; margin: 11px 15px 2px 2px; float: right; }

  #dropdown-botton { width: 25px }
  #drop-menu { position: absolute; right: 0px; top: 53px; background: #FFF; padding: 2px; margin: 0px 5px; list-style: none; border: 1px solid #A6C1DB; display:none; }
  #drop-menu li { padding: 3px 40px 3px 20px; cursor: pointer; }
  #drop-menu li.hover { background: #185096; color: #FFF; }

  #slide-menu { width: 154px; vertical-align: top; }
  #slide-menu a:visited, #slide-menu a:link { text-decoration: none; color: #006699; }
  #slide-menu a:hover, #slide-menu a:active { text-decoration: none; color: #FF6600; }
  #menu-topper { width: 153px; text-align: center; font-weight: bold; color: #7B3E00; cursor: pointer; height: 36px; line-height: 36px; background: url(template/admin/images/nav_back_bg.jpg); margin-bottom: 22px; }
  #menu-topper td { border-bottom: 1px solid #A7C1DB;  }
  #menu-topper td.actived { color: #1A5499; background: url(template/admin/images/nav_active_bg.jpg); border-bottom: 1px solid #FFF; }
  #menu-shortcut { width: 153px; display: none; }
  #menu-shortcut li { margin: 0px; padding: 0px 0px 0px 15px; background: url(template/admin/images/nav_list_arrow.gif) no-repeat 120px center; border-bottom: 1px dotted #DBE9F6; line-height: 24px; height: 24px; }
  #nav-normal { border-right: 1px solid #A7C1DB; }
  .nav-item { line-height: 18px; }

  .menu-group { width: 153px; margin: 0px; padding: 0px; background: url(template/admin/images/nav_list_arrow.gif) no-repeat 120px center; border-bottom: 1px dotted #DBE9F6;}
  .menu-group dt { padding-left: 15px; line-height: 24px; height: 24px; cursor: pointer; }
  .menu-group dd { display: none; }
  .menu-group-actived { margin: 0px; border: none; background: #FEFBFF; background: url(template/admin/images/nav_list_bg.gif) repeat-y 5px; }
  .menu-group-actived dt { padding-left: 15px; font-weight: bold; background: url(template/admin/images/nav_list_top.gif) no-repeat 5px top; padding-top: 12px; }
  .menu-group-actived dd { margin: 0px; background: url(template/admin/images/nav_list_bottom.gif) no-repeat 5px bottom; padding: 5px 2px 10px 25px; display: block; }
  </style>
  <script type="text/javascript">
	$(document).ready(function(){
		$('#menu-normal').click(function(e){
			var div = $(this);
			var dls = div.find('dl');
			var elem = e.target
			if (elem.tagName == 'DT'){
				var dt = $(elem.parentNode);
				if (!dt.hasClass("menu-group-actived")){
					dls.removeClass("menu-group-actived");
					dls.addClass("menu-group");
					dt.removeClass("menu-group");
					dt.addClass("menu-group-actived");
				}
			}
		})
	})
  </script>
 </head>

 <body>
  <table cellspacing="0" cellpadding="0" id="topper">
    <tr>
      <td rowspan="2" id="logo"><img src="template/admin/images/ecm_logo.gif" /></td>
      <td id="top-menu" colspan="2">
        <a href="#" target="_blank">首页</a>
        <a href="#">关于我们</a>
        <a href="#" id="logout">退出登录</a>
      </td>
    </tr>
    <tr>
      <td>
        <div id="top-tabbar">
          <ul id="top-tab">
			<li>首页</li>
		  </ul>
        </div>
      </td>
      <td id="dropdown-botton"><img id="img-dropmenu" src="template/admin/images/tab_dropdown.gif" /></td>
    </tr>
  </table>
  <ul id="drop-menu"></ul>
  <table cellspacing="0" cellpadding="0" id="container">
    <tr>
      <td id="slide-menu">
        <table cellpadding="0" cellspacing="0" id="menu-topper">
          <tr>
            <td class="actived" id="nav-normal">菜单</td>
            <td id="nav-shortcut">快捷方式</td>
          </tr>
        </table>
        <div id="menu-normal">
        <dl class="menu-group-actived">
          <dt>商品管理</dt>
          <dd class="nav-item">
            <div><a href="form.html" target="main">添加商品</a></div>
			<div><a href="list.html" target="main">商品列表</a></div>
          </dd>
        </dl>
		<dl class="menu-group">
          <dt>分类管理</dt>
          <dd class="nav-item">
            <div><a href="javascript:;">分类列表</a></div>
			<div><a href="javascript:;">添加分类</a></div>
          </dd>
        </dl>
        </div>
        <div id="menu-shortcut">
          <ul>
            <li><a href="javascript:;">快捷方式</a></li>
          </ul>
        </div>
      </td>
      <td>
	  <iframe  name="main" width="100%" height="2000" frameborder="0" src="form.html"></iframe>
	  <!--hack for ie8--><div id="wrapper"></div></td>
    </tr>
  </table>
 </body>
</html>
