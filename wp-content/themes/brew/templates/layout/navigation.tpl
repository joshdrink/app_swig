<!-- header.tpl -->

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
        <dd class='icon'><a href='/' class='home'><img src='{$stylesheet_directory}/assets/img/icon_swig.png'></a></dd>
    </dl>

    <section class='menu-content' data-link-target='learn'>
        <h1 class='heading-menu'>Learn<span>.</span></h1>
        <h3>About Yourself.</h3>
    </section>

    <section class='menu-content archive' data-link-target='think'>
        <h1 class='heading-menu'>Think<span>.</span></h1>

        {foreach from=$blog_posts item=post}

    	<a href='{$post->url}' class='post-preview'>
    		<h2>{$post->post_title}</h2>
            <h6>Published on {$post->display_date}</h6>
            <p>{$post->post_excerpt}</p>
    	</a>

        {/foreach}

        <a href='#' class='post-preview placeholder'></a>

        <a href='#' class='post-preview break'></a>

    </section>

    <section class='menu-content' data-link-target='follow'>
        <h1 class='heading-menu'>Follow<span>.</span></h1>
        <h3>For Future Insight.</h3>
    </section>

</nav>
