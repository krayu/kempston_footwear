<?php /* Smarty version Smarty-3.1.19, created on 2019-06-07 12:52:07
         compiled from "C:\wamp64_7\www\presta\themes\default-bootstrap\restricted-country.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140245cfa5df71c52d4-54615363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ac89f6584dda38ec28e0f51ace078e5ea37b3f7' => 
    array (
      0 => 'C:\\wamp64_7\\www\\presta\\themes\\default-bootstrap\\restricted-country.tpl',
      1 => 1473170714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140245cfa5df71c52d4-54615363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cfa5df738a585_96790423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfa5df738a585_96790423')) {function content_5cfa5df738a585_96790423($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,follow" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
" />
        <style>
            ::-moz-selection {
                background: #b3d4fc;
                text-shadow: none;
            }

            ::selection {
                background: #b3d4fc;
                text-shadow: none;
            }

            html {
                padding: 30px 10px;
                font-size: 16px;
                line-height: 1.4;
                color: #737373;
                background: #f0f0f0;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }

            html,
            input {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }

            body {
                max-width:600px;
                _width: 600px;
                padding: 30px 20px 50px;
                border: 1px solid #b3b3b3;
                border-radius: 4px;
                margin: 0 auto;
                box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
                background: #fcfcfc;
            }

            h1 {
                margin: 0 10px;
                font-size: 50px;
                text-align: center;
            }

            h1 span {
                color: #bbb;
            }
            h2 {
                color: #D35780;
                margin: 0 10px;
                font-size: 40px;
                text-align: center;
            }

            h2 span {
                color: #bbb;
                font-size: 60px;
            }

            h3 {
                margin: 1.5em 0 0.5em;
            }

            p {
                margin: 1em 0;
            }

            ul {
                padding: 0 0 0 40px;
                margin: 1em 0;
            }

            .container {
                max-width: 380px;
                _width: 380px;
                margin: 0 auto;
            }

            input::-moz-focus-inner {
                padding: 0;
                border: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</h1>
            <h2><span>503</span> Overloaded</h2>
            <p style="text-align:center;"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="logo" /></p>
            <p><?php echo smartyTranslate(array('s'=>'You cannot access this store from your country. We apologize for the inconvenience.'),$_smarty_tpl);?>
</p>
        </div>
    </body>
</html><?php }} ?>
