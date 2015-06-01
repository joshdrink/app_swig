<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 01:16:43
         compiled from "C:\Users\Josh\Projects\Personal\app_swig\wp-content\themes\brew\templates\page-article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4701556baf027bc485-51611887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a272494a4095eb15dd4ab8140563fd9c0d2fddbd' => 
    array (
      0 => 'C:\\Users\\Josh\\Projects\\Personal\\app_swig\\wp-content\\themes\\brew\\templates\\page-article.tpl',
      1 => 1433121401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4701556baf027bc485-51611887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556baf027e80a7_53562918',
  'variables' => 
  array (
    'display_date' => 0,
    'content' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556baf027e80a7_53562918')) {function content_556baf027e80a7_53562918($_smarty_tpl) {?><!-- page-landing.tpl -->

<!-- Progress ====================================================== -->
<div class='progress'>
    <div class='value'></div>
</div>

<!-- Article =============================================================== -->
<section class='page'>

    <article>
		<h1><?php echo the_title();?>
</h1>
        <h6>Published on <?php echo $_smarty_tpl->tpl_vars['display_date']->value;?>
</h6>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</article>

    <section class='social'>
        <hr>
        <dl>
            <dt></dt>
            <dd><a href="https://twitter.com/intent/tweet?text=<?php echo the_title();?>
&amp;via=joshdrink&amp;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"  data-counturl='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
' target='_blank'><i class='fa fa-twitter'></i>#TweetItUp</a></dd>
            <dd><a href='https://www.linkedin.com/shareArticle?mini=true&amp;title=<?php echo the_title();?>
&amp;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
' target='_blank'><i class='fa fa-linkedin'></i>Spread the Word</a></dd>
        </dl>
        <h3>Think Out Loud.</h3>
    </section>

</section>
<?php }} ?>
