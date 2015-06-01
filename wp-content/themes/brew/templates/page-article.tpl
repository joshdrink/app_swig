<!-- page-landing.tpl -->

<!-- Progress ====================================================== -->
<div class='progress'>
    <div class='value'></div>
</div>

<!-- Article =============================================================== -->
<section class='page'>

    <article>
		<h1>{the_title()}</h1>
        <h6>Published on {$display_date}</h6>
        {$content}
	</article>

    <section class='social'>
        <hr>
        <dl>
            <dt></dt>
            <dd><a href="https://twitter.com/intent/tweet?text={the_title()}&amp;via=joshdrink&amp;url={$url}"  data-counturl='{$url}' target='_blank'><i class='fa fa-twitter'></i>#TweetItUp</a></dd>
            <dd><a href='https://www.linkedin.com/shareArticle?mini=true&amp;title={the_title()}&amp;url={$url}' target='_blank'><i class='fa fa-linkedin'></i>Spread the Word</a></dd>
        </dl>
        <h3>Think Out Loud.</h3>
    </section>

</section>
