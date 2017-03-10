<?php
/**
 * Template part for displaying page content in speakers single page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package event-term
 */
$et_speakers_options = get_post_meta( get_the_ID(), '_et_custom_speakers_options', true );
$et_speakers_designation = $et_speakers_options['et_speakers_designation'];
$et_speakers_facebook = $et_speakers_options['et_speakers_facebook'];
$et_speakers_twitter = $et_speakers_options['et_speakers_twitter'];
$et_speakers_in = $et_speakers_options['et_speakers_in'];
$et_speakers_gplus = $et_speakers_options['et_speakers_gplus'];
$et_speakers_igram = $et_speakers_options['et_speakers_igram'];
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('speakers-single'); ?>>
            <div class="entry-content">
                <?php if(has_post_thumbnail()): ?>
                <div class="col-md-5">
                    <div class="speaker-thumb">
                        <?php the_post_thumbnail() ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-md-7">
                    <div class="speaker-content">
                        <h3><?php the_title(); ?></h3>
                        <p class="designation"><?php echo esc_html($et_speakers_designation) ?></p>
                        <?php the_content() ?>
                        <ul class="social-media">
                            <li><a class="facebook" href="<?php echo (!empty($et_speakers_facebook)) ? $et_speakers_facebook : '#' ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="<?php echo (!empty($et_speakers_twitter)) ? $et_speakers_twitter : '#' ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="linkedin" href="<?php echo (!empty($et_speakers_in)) ? $et_speakers_in : '#' ?>"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="google" href="<?php echo (!empty($et_speakers_gplus)) ? $et_speakers_gplus : '#' ?>"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="behance" href="<?php echo (!empty($et_speakers_igram)) ? $et_speakers_igram : '#' ?>"><i class="fa fa-camera"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- .entry-content -->
    </article><!-- #post-## -->
