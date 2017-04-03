<?php
/**
 * Template Name: Home Page
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package boundless
 */

get_header(); ?>
    <style>
        .home .site-branding {
            position: relative;
        }

        .home .site-branding:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgb(88, 89, 91);
            z-index: -1000;

        }
    </style>
    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">
            <section class="homesec first">
                <h2 class="header-ltr">
                    we are boundless
                </h2>

                <div class="content-container">

                    <div class="left">
                        <h3 class="bottom-header">May 3 - 4<br>
                            Minneapolis Community <br>
                            &amp; Technical College
                        </h3>
                        <p>Where: 1501 Hennepin Ave<br>
                            Minneapolis, MN 55403<br>
                            Room L300 </p>
                        <p>Follow the signs at all main entrances of T Building and/or Whitney Hall (include map).
                            There are also directional signs at the parking entrances of every level of ramp and
                            follow the signs the whole way.

                        </p>
                    </div>
                    <div class="right">
                        <p class="mission">We are multidimensional designers and developers creating work
                            that embodies the breadth of our passion. Delight in the array of possibilities we
                            have to showcase.
                        </p>
                    </div>
                </div>
                <!--                <div class="angle-behind">-->
                <!---->
                <!--                </div>-->
                <!--                <div id="first" class="angle welcome">-->
                <!--                    <h2 class="header-wrap">-->
                <!--                    <span>we are boundless-->
                <!--                    </span>-->
                <!--                    </h2>-->
                <!--                    <div class="angle-inner">-->
                <!--                        <article class="content">-->
                <!--                            <div data-lining>-->
                <!--                                <p>Mission Statement: “We are multidimensional designers and developers creating work-->
                <!--                                    that embodies the breadth of our passion. Delight in the array of possibilities we-->
                <!--                                    have to showcase.”-->
                <!--                                </p>-->
                <!---->
                <!--                                <p>The Show: Come delight in the work of 47 web and graphic designers at the 2017 web-->
                <!--                                    and graphic design portfolio show, Boundless! This event allows each guest the-->
                <!--                                    opportunity to view a wide variety of projects forged from creative passion — and-->
                <!--                                    many late nights — and meet the artists behind the work.</p>-->
                <!---->
                <!--                            </div>-->
                <!--                        </article><!-- .content -->
                <!--                    </div><!-- .angle-inner -->
                <!--                    <blockquote>-->
                <!--                        <h3 class="bottom-header">May 3 - 4<br>-->
                <!--                            <p>Minneapolis Community <br>&amp; Technical College</p>-->
                <!--                            <small>Where: 1501 Hennepin Ave, Minneapolis, room L300 <br>-->
                <!--                                (Follow the signs at all main entrances of T Building and/or Whitney Hall (include map).-->
                <!--                                There are also directional signs at the parking entrances of every level of ramp and-->
                <!--                                follow the signs the whole way.)-->
                <!--                            </small>-->
                <!--                        </h3>-->
                <!--                    </blockquote>-->
                <!--                </div><!-- .angle -->
            </section>


            <section class="homesec second portfolio">
                <h2 class="header-wrap left">
                    <span>
                        we are boundless
                    </span>
                </h2>


                <p>Come delight in the work of 47 web and graphic designers at the 2017 web
                    and graphic design portfolio show, Boundless! This event allows each guest the
                    opportunity to view a wide variety of projects forged from creative passion — and
                    many late nights — and meet the artists behind the work.</p>
                <a href="/students" class="portfolio-btn">view student work</a>

            </section>

            <section class="homesec third content">
                <h2 class="header-rtl">schedule</h2>

                <article class="content">
                    <h4>Tuesday, May 2</h4>
                    <h5>10 AM - 8 PM</h5>
                    <ul>
                        <li>1 PM - Alumni Panel<br>
                            <a href="">View list of alumni</a>
                        </li>
                        <li>5 PM - Keynote Speaker<br>
                            Tim Brunelle from BBDO Minneapolis
                        </li>
                        <li>5:30 PM - Opening Reception
                        </li>
                    </ul>

                    <h4>Wednesday, May 3</h4>
                    <h5>10 AM - 7 PM</h5>
                    <ul>
                        <li>5 PM Keynote Speaker<br>
                            Michelle Schulp from Marktime Media
                        </li>
                    </ul>

            </section>
            <section class="homesec fourth">

                <div id="map">

                </div>
                <!--                <div id="third" class="angle location">-->
                <!--                    <h2 class="location-wrap">we are boundless</h2>-->
                <!--                    <div class="angle-inner">-->
                <!--                        <article class="content">-->
                <!--                            <div data-lining>-->
                <!--                                <p>Alumni Panel:-->
                <!--                                    May 2-->
                <!--                                    1pm: Alumni panel-->
                <!--                                    Laurel Johnson: Laurel is a front-end developer at Fjorge-->
                <!--                                    Claire Campbell: ??-->
                <!--                                    Aaron Hurst: Co-owner of Conjure Shop, a design &amp; marketing company (free-lance)-->
                <!--                                    Jerrald (Jay) Spencer: Freelance, graphic designer U of M-->
                <!--                                    Damien Kirchoff: Digital designer at Snap Agency-->
                <!--                                    Rudy Fig (aka Sierra Riggs): Freelance illustrator/designer Rudy Fig Fine Art and-->
                <!--                                    Design</p>-->
                <!---->
                <!--                            </div>-->
                <!--                        </article><!-- .content -->
                <!--                    </div><!-- .angle-inner -->
                <!--                    <blockquote>-->
                <!--                        <h3 class="bottom-header">May 3 - May 4<br>-->
                <!--                            <small>Schedule:-->
                <!--                                May 2nd show runs from 10AM-8PM-->
                <!--                                Keynote Speaker: Tim Brunelle (BBDO Minneapolis) 5:00 PM Opening Reception: starting at-->
                <!--                                5:30 PM-->
                <!--                                May 3rd show runs from 10AM-7PM-->
                <!--                                Keynote Speaker: Michelle Schulp (Marktime Media) May 3rd at 5:00 PM-->
                <!--                            </small>-->
                <!--                        </h3>-->
                <!--                    </blockquote>-->
                <!--                </div><!-- .angle -->
            </section>

            <section class="sec-press">
                <h2>press</h2>

                <?php echo do_shortcode(' [instagram-feed cols=5 num=5 imageres=med showbutton=false width=75 widthunit=% showfollow=true] '); ?>

            </section>

<?php get_footer(); ?>
