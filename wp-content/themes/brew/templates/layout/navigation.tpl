<!-- header.tpl -->

<!-- Navigation ============================================================ -->
<nav>

    <div class='glass-01'></div>
    <div class='glass-02'></div>
    <div class='glass-03'></div>

    <a href='#' class='close'></a>

    <dl class='menu'>
        <dt></dt>
        <dd><a href='#' id='learn' data-link-handler='learn'>Learn<span>.</span></a></dd>
        <dd><a href='#' id='think' data-link-handler='think'>Think<span>.</span></a></dd>
        <dd><a href='#' id='follow' data-link-handler='follow'>Follow<span>.</span></a></dd>
        <dd class='icon'><a href='/' class='home'><img src='{$stylesheet_directory}/assets/img/icon_swig.png'></a></dd>
    </dl>

    <section class='menu-content learn' data-link-target='learn'>
        <h1 class='heading-menu'>Learn<span>.</span></h1>
        <div class='learn-block'>
            <h3>Question<span>.</span></h3>
            <p>When you're not afraid to question the world around you, learning is inevitable. I love that about life. Sometimes asking why is risky, unexpected, or even discouraged. I want you to ask anyway.</p>
            <p>The swig is a simple moment when you've made it through the day and you finally have the opportunity to relax with a cold beer. During the day you <strong>think</strong>, you <strong>ask</strong>, you <strong>build</strong>, you <strong>iterate</strong> and hopefully you have the incredible opportunity to <strong>solve</strong>. Being able to work through this process on a daily basis is an unbelievable opportunity that I cherish. That's why, at the end of the day, that swig reminds how damn lucky I am to call myself a designer.</p>
        </div>
        <div class='learn-block'>
            <h3>Grow<span>.</span></h3>
            <p>My name is <strong>Josh</strong> and this blog is a way for me to grow as a designer. I want it to act as an outlet for my learning, experimentation and questions. As a student, peer, or mentor, I hope that at least one idea that you read here might inspire you to pursue design with a new perspective. It's with this in mind that I continue to write on topics that inspire me. One day I hope I'm given the opportunity to learn about and solve problems that will fundamentally change the way human beings interact with their everyday surroundings.</p>
            <h6>I firmly believe that design can change the world<span>.</span></h6>
        </div>
        <div class='learn-block break'></div>
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
            <p>Curious about something you read here? Think you might want to discuss something further? If you're so inclined, check out my code on <a href='https://github.com/joshdrink' target='_blank'>Gitub</a>. For a personal touch, I'm always available through <a href='http://twitter.com/joshdrink' target='_blank'>Twitter</a> and vow to do my absolute best to get back to you. If you're more interested in my professional (read: boring) background, you can always give me a shout through <a href='https://ca.linkedin.com/in/joshdrink' target='_blank'>LinkedIn</a> to shake things up.</p>
        </div>

        <!-- Break ========================================================= -->
        <div class='follow-block break'></div>

    </section>

</nav>
