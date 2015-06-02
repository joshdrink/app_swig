<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 01:43:23
         compiled from "C:\Users\Josh\Projects\Personal\app_swig\wp-content\themes\brew\templates\layout\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19260556b2ba80ea178-99851927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec75d28762d0248ec090f7326537cb740880281' => 
    array (
      0 => 'C:\\Users\\Josh\\Projects\\Personal\\app_swig\\wp-content\\themes\\brew\\templates\\layout\\navigation.tpl',
      1 => 1433209401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19260556b2ba80ea178-99851927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556b2ba8109246_23956688',
  'variables' => 
  array (
    'stylesheet_directory' => 0,
    'blog_posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b2ba8109246_23956688')) {function content_556b2ba8109246_23956688($_smarty_tpl) {?><!-- header.tpl -->

<!-- Navigation ============================================================ -->
<nav>

    <div class='glass-01'></div>
    <div class='glass-02'></div>
    <div class='glass-03'></div>

    <dl class='menu'>
        <dt></dt>
        <dd><a href='#' id='learn' data-link-handler='learn'>Learn<span>.</span></a></dd>
        <dd><a href='#' id='think' data-link-handler='think'>Think<span>.</span></a></dd>
        <dd><a href='#' id='follow' data-link-handler='follow'>Follow<span>.</span></a></dd>
        <dd class='icon'><a href='/' class='home'><img src='<?php echo $_smarty_tpl->tpl_vars['stylesheet_directory']->value;?>
/assets/img/icon_swig.png'></a></dd>
    </dl>

    <section class='menu-content' data-link-target='learn'>
        <h1 class='heading-menu'>Learn<span>.</span></h1>
        <h3>About Yourself.</h3>
    </section>

    <section class='menu-content archive' data-link-target='think'>

        <h1 class='heading-menu'>Think<span>.</span></h1>

        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    	<a href='<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
' class='post-preview'>
    		<h2><?php echo $_smarty_tpl->tpl_vars['post']->value->post_title;?>
</h2>
            <h6>Published on <?php echo $_smarty_tpl->tpl_vars['post']->value->display_date;?>
</h6>
            <p><?php echo $_smarty_tpl->tpl_vars['post']->value->post_excerpt;?>
</p>
    	</a>
        <?php } ?>

        <a href='#' class='post-preview placeholder'></a>

        <a href='#' class='post-preview break'></a>

    </section>

    <section class='menu-content form' data-link-target='follow'>

        <h1 class='heading-menu'>Follow<span>.</span></h1>

        <!-- Mailchimp Form ================================================ -->
        <div id="mc_embed_signup" class='follow-block'>

            <form action="//ink.us10.list-manage.com/subscribe/post?u=817b9240cae7f410d10e8cefb&amp;id=181ee7bdfe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                <div id="mc_embed_signup_scroll">

                    <h3>Subscribe<span>.</span></h3>

                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>

                    <div class="mc-field-group split">
                        <label for="mce-FNAME">First Name </label>
                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>

                    <div class="mc-field-group split">
                        <label for="mce-LNAME">Last Name </label>
                        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                    </div>

                    <div class="split break"></div>

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>

                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_817b9240cae7f410d10e8cefb_181ee7bdfe" tabindex="-1" value=""></div>

                    <div class="clear"><input type="submit" value="Subscribe." name="subscribe" id="mc-embedded-subscribe" class="button"></div>

                </div>

            </form>

        </div>

        <!-- Follow Blurb ================================================== -->
        <div class='follow-block'>
            <h3>Get in Touch<span>.</span></h3>
            <p>Curious about something you read here? Think you might want to discuss something further? You can use the form provided to follow along with updates as they're released. For a personal touch, I'm always available through <a href='http://twitter.com/joshdrink' target='_blank'>Twitter</a> and vow to do my absolute best to get back to you. If you're more interested in my professional (read: boring) background, you can always give me a shout through <a href='https://ca.linkedin.com/in/joshdrink' target='_blank'>LinkedIn</a> to shake things up.</p>
        </div>

        <!-- Break ========================================================= -->
        <div class='follow-block break'></div>

    </section>

</nav>
<?php }} ?>
