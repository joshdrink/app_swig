<!-- page-landing.tpl -->

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
    <h1 class='eight'><img src='{$stylesheet_directory}/assets/img/logo_swig.png'>Swig<span>.</span></h1>

    <a href='#article'>Read the most recent article below.</a>

</section>

<!-- Article =============================================================== -->
<a id='article'></a>

<section class='page'>

    {foreach from=$blog_posts item=post name='landingpost'}
    {if $smarty.foreach.landingpost.index == 1}
        {break}
    {/if}

	<article>
		<h1>{$post->post_title}</h1>
        <h6>Published on {$post->display_date}</h6>
        {$post->post_content}
	</article>

    <section class='social'>
        <hr>
        <dl>
            <dt></dt>
            <dd><a href="https://twitter.com/intent/tweet?text={$post->post_title}&amp;via=joshdrink&amp;url={$post->url|urlencode}"  data-counturl='{$post->url}' target='_blank'><i class='fa fa-twitter'></i>#TweetItUp</a></dd>
            <dd><a href='https://www.linkedin.com/shareArticle?mini=true&amp;title={$post->post_title}&amp;url={$post->url|urlencode}' target='_blank'><i class='fa fa-linkedin'></i>Spread the Word</a></dd>
            <dd><a href='http://www.facebook.com/sharer.php?u={$url|urlencode}' target='_blank'><i class='fa fa-facebook'></i>Earn Some Likes</a></dd>
        </dl>
        <h3>Think Out Loud.</h3>
    </section>

    {/foreach}

</section>
