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

                <div class="bottom right">
                    <h2 class="bottom-header">May 2 - 3</h2>
                    <h3 class="bottom-header">
                        Minneapolis Community<br>
                        &amp; Technical College
                    </h3>
                    <p class="mission">We are multidimensional designers and developers creating work
                        that embodies the breadth of our passion. Delight in the array of possibilities we
                        have to showcase.
                    </p>
                </div>
            </div>

        </section>


        <section class="homesec second portfolio">
            <h2 class="header-ltr">
                Portfolios
            </h2>

            <div class="content-container">
                <div class="bottom left">
                    <p>The MCTC 2017 design show bring to light the meaning of creativity. This event will allow each guest the opportunity to view a wide variety of projects forged with create passion.</p>
                    <p>Discover the works of 47 designers and developers dedicated to their craft; their creativity knows no bounds.</p>
                    <a href="/students" class="portfolio-btn">view portfolios</a>
                </div>
            </div>
        </section>

        <section class="homesec third">
            <h2 class="header-rtl">schedule</h2>
            <div class="content-container dates">
                <article class="content bottom right">
                    <div class="day">
                        <h4>Tuesday, May 2</h4>
                        <h5>10 AM - 8 PM</h5>
                        <ul>
                            <li>1 PM - Alumni Panel</li>
                            <li>5 PM - Keynote Speaker<br>
                                Tim Brunelle from BBDO Minneapolis
                            </li>
                            <li>5:30 PM - Opening Reception
                            </li>
                        </ul>
                    </div>
                    <div class="day">
                        <h4>Wednesday, May 3</h4>
                        <h5>10 AM - 7 PM</h5>
                        <ul>
                            <li>5 PM Keynote Speaker<br>
                                Michelle Schulp from Marktime Media
                            </li>
                        </ul>
                    </div>
                    <a href="/students" class="press-btn">more information</a>
                </article>
            </div>
        </section>
        <section class="homesec fourth">
            <div class="content-container">

                <div class="bottom left">
                    <h3 class="bottom-header">May 3 - 4<br>
                        Minneapolis Community <br>
                        &amp; Technical College
                    </h3>
                    <p>Where: 1501 Hennepin Ave<br>
                        Minneapolis, MN 55403<br>
                        Room L300 </p>
                    <p>Follow the signs at all main entrances of T Building and/or Whitney Hall.<br>
                        There are also directional signs at the parking entrances of every level of ramp and
                        follow the signs the whole way.

                    </p>
                </div>
            </div>
            <div id="map">

            </div>
        </section>
        <section class="sec-press">
            <h2>instagram</h2>

            <?php echo do_shortcode(' [instagram-feed cols=5 num=5 imageres=med showbutton=false width=75 widthunit=% showfollow=true] '); ?>

        </section>

        <?php get_footer(); ?>

