<?php
/**
* The main template file.
*
*/

get_header(); ?>

<div id="minHeight"></div>
<div id="outer">
    <div id="centrecontent">
        <div id="minHeight"></div>
        <div id="inner">
            <div id="centrecontent_in">
                <div id="centrecontent_holder">
                    <div class="col">
                        <div class="content">
                            <div id="wrapper">
                                <div id="main_inner">
                                    <div id="content">
                                        <div class="section_inner" >
                                            <ul>
                                                <?php
                                                    get_template_part( 'loop', 'index' );
                                                ?>
                                            </ul>
                                        </div>
                                        <br clear="all">
                                    </div> <!-- end #content -->
                                </div> <!-- end #main_inner -->
                            </div> <!-- end wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
