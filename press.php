<?php
/*  Template Name: Press Page  */
get_header(); ?>


    <section class="press">

        <h2 class="header-rtl">Guest Speakers</h2>
            <div class="speakers">
                <div class="profile">
                    <img class="size-medium wp-image-19"
                         src="<?php echo get_template_directory_uri() ?>/images/8093066_300x300.jpg"
                         alt=""/>
                </div>

                <div class="text">

                    <h5><strong>Tim Brunelle</strong></h5>
                    <h6>Tuesday, May 2nd<br>
                        5:00 PM</h6>

                    <p>
                        Tim Brunelle has been at the forefront of marketing innovation and storytelling since
                        1992. He's developed brand strategy, directed films, written and directed advertising
                        and design as well as user experience for marketers including 3M, PwC, Thrivent,
                        Skippy, Harley-Davidson, Goodyear, Porsche, Anheuser-Busch, Hormel/SPAM, Sears
                        and MetLife. Tim also spent eight years helping lead Volkswagen’s “Drivers wanted”
                        campaign in North America. His work has been awarded the One Show Interactive Best
                        of Show, several Gold Pencils; the Grand Clio, Cannes Grand Prix, the Grand Andy,
                        London International Advertising Awards Grand Prize for Websites, D&amp;AD Featured,
                        AICP Finalist and inclusion in three Communication Arts Interactive Annuals. At BBDO
                        MPLS, Tim acts as Creative Director for multiple Hormel brands, Andersen Windows
                        and 3M, as well as oversees the agency's growing social team. Tim lives with his wife
                        and three boys in Minneapolis.
                    </p>
                </div>
            </div>

            <div class="speakers">

                <div class="profile">
                    <img class="alignnone size-medium wp-image-18"
                         src="<?php echo get_template_directory_uri() ?>/images/michelle-schulp.jpeg"
                         alt=""/>
                </div>
                <div class="text">

                    <h5><strong>Michelle Schulp</strong></h5>
                    <h6>Wednesday, May 3rd<br>
                        5:00 PM</h6>

                    <p>
                        Michelle is an independent graphic designer and frontend developer in Minneapolis. Prior to
                        beginning her career, she studied Visual Communications, with minors in Psychology and Sociology. As
                        her work progressed, she also branched into front-end development and user experience design to
                        round out her skillset. This combination of disciplines led her to adopt a strategy-based approach
                        to design, focused on solving tangible problems and achieving real goals based on how people think.


                        She loves the open source community, and when she is not working on projects she
                        speaks/volunteers/organizes at events and workshops around the country. Her passions are
                        communication and empowerment, and she believes in the power of "Why?"
                    </p>
                </div>

            </div>
    </section>
    <section class="press">


        <h2 class="header-ltr">Alumni Panel</h2>


        <div class="alumni">
            <div class="content" id="panelists">
                <h5>May 2 @ 1:00 PM</h5>
                <ul id="panelists">

                    <li>
                        <h6>Laurel Johnson</h6>
                        Laurel is a front-end developer at Fjorge
                    </li>
                    <li>
                        <h6>Claire Campbell
                    </li>
                    <li>
                        <h6>Aaron Hurst</h6>
                        Co-owner of Conjure Shop, a freelance design &amp; marketing company
                    </li>
                    <li>
                        <h6>Jerrald (Jay) Spencer</h6>
                        Freelance, graphic designer U of M
                    </li>
                    <li>
                        <h6>Damien Kirchoff</h6>
                        Digital designer at Snap Agency
                    </li>
                    <li>
                        <h6>Rudy Fig (aka Sierra Riggs)</h6>
                        Freelance illustrator/designer Rudy Fig Fine Art and Design
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <section class="press">

        <h2 class="header-rtl">Connect</h2>

            <div id="press-twitter">
                <h5>TWITTER</h5>
                <?php echo do_shortcode( '[wp-social-media-slider]' ); ?>
                <div class="sbi_follow_btn">
                    <a href="http://twitter.com/mctcdesign2017" target="_blank">
                        <i class="fa fa-twitter"></i>
                        Follow on Twitter
                    </a>
                </div>
            </div>

            <div id="press-instagram">
                <h5>INSTAGRAM</h5>
                <?php echo do_shortcode(' [instagram-feed] '); ?>
                <div class="sbi_follow_btn">
                    <a href="http://instagram.com/mctcdesign2017" target="_blank">

                        <i class="fa fa-instagram"></i>
                        Follow on Instagram
                    </a>
                </div>
            </div>
    </section>

<?php get_footer(); ?>