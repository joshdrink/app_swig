<!-- page-landing.tpl -->

<!-- Progress ====================================================== -->
<div class='progress'>
    <div class='value'></div>
</div>

<!-- Article =============================================================== -->
<section class='page'>

    <article>
        <a href='/'>< Landing</a>
		<h1>{$title}</h1>
        <h6>Published on {$date}</h6>
        {$content}
	</article>

    <section class='social'>
        <hr>
        <dl>
            <dt></dt>
            <dd><a href="https://twitter.com/intent/tweet?text={$title}&amp;via=joshdrink&amp;url={$url|urlencode}"  data-counturl='{$url}' target='_blank'><i class='fa fa-twitter'></i>#TweetItUp</a></dd>
            <dd><a href='https://www.linkedin.com/shareArticle?mini=true&amp;title={$title}&amp;url={$url|urlencode}' target='_blank'><i class='fa fa-linkedin'></i>Spread the Word</a></dd>
            <dd><a href='http://www.facebook.com/sharer.php?u={$url|urlencode}' target='_blank'><i class='fa fa-facebook'></i>Earn Some Likes</a></dd>
        </dl>
        <h3>Think Out Loud.</h3>
    </section>

</section>
