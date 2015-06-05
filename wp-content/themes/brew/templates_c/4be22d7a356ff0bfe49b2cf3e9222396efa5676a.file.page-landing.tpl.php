<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 00:53:39
         compiled from "C:\Users\Josh\Projects\Personal\app_swig\wp-content\themes\brew\templates\page-landing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24841556b28a7243618-33997010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be22d7a356ff0bfe49b2cf3e9222396efa5676a' => 
    array (
      0 => 'C:\\Users\\Josh\\Projects\\Personal\\app_swig\\wp-content\\themes\\brew\\templates\\page-landing.tpl',
      1 => 1433465587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24841556b28a7243618-33997010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556b28a7363144_94705727',
  'variables' => 
  array (
    'stylesheet_directory' => 0,
    'blog_posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b28a7363144_94705727')) {function content_556b28a7363144_94705727($_smarty_tpl) {?><!-- page-landing.tpl -->

<!-- Splash ================================================================ -->
<section class='splash'>

    <a href='#' class='learn-prompt' data-link-handler='learn'>< Learn More About the Swig.</a>

    <h1 class='active one'>Welcome<span>.</span></h1>
    <h1 class='two'>Stop<span>.</span></h1>
    <h1 class='three'>Think<span>.</span></h1>
    <h1 class='four'>Ask<span>.</span></h1>
    <h1 class='five'>Design<span>.</span></h1>
    <h1 class='six'>Iterate<span>.</span></h1>
    <h1 class='seven'>Solve<span>.</span></h1>
    <h1 class='eight'><img src='<?php echo $_smarty_tpl->tpl_vars['stylesheet_directory']->value;?>
/assets/img/logo_swig.png'>Swig<span>.</span></h1>

    <a href='#article'>Read the most recent article below.</a>

</section>

<!-- Article =============================================================== -->
<a id='article'></a>

<section class='page'>

    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['landingpost']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['landingpost']['index']++;
?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['landingpost']['index']==1) {?>
        <?php break 1;?>
    <?php }?>

	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['post']->value->post_title;?>
</h1>
        <h6>Published on <?php echo $_smarty_tpl->tpl_vars['post']->value->display_date;?>
</h6>
        <?php echo $_smarty_tpl->tpl_vars['post']->value->post_content;?>

	</article>

    <section class='social'>
        <hr>
        <dl>
            <dt></dt>
            <dd><a href="https://twitter.com/intent/tweet?text=<?php echo $_smarty_tpl->tpl_vars['post']->value->post_title;?>
&amp;via=joshdrink&amp;url=<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"  data-counturl='<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
' target='_blank'><i class='fa fa-twitter'></i>#TweetItUp</a></dd>
            <dd><a href='https://www.linkedin.com/shareArticle?mini=true&amp;title=<?php echo $_smarty_tpl->tpl_vars['post']->value->post_title;?>
&amp;url=<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
' target='_blank'><i class='fa fa-linkedin'></i>Spread the Word</a></dd>
        </dl>
        <h3>Think Out Loud.</h3>
    </section>

    <?php } ?>

</section>
<?php }} ?>
