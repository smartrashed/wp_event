<?php
class Widget_About_Us extends Event_Hub_Widget {
	public function __construct()
	{
		parent::__construct(
            'eh_about_us',
            esc_html__('Event Hub :: About Us', 'event-hub'),
            array('description' => 'About us widget to display your logo content and social profiles.' )
        );
	}

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        ?>
        <div class="f-widget">
            <?php if( ! empty($instance['logo']) ) : ?>
                <img class="footer-logo" src="<?php echo wp_get_attachment_url($instance['logo']);?>" alt="<?php echo get_the_title($instance['logo']); ?>">
            <?php endif; ?>
            <?php if( ! empty($instance['content']) ) : ?>
                <div class="excerpt"><?php echo wp_kses_post($instance['content']); ?></div>
            <?php endif; ?>            
                                   
            <ul class="social-media">
                <?php if( ! empty($instance['fb_url']) ) : ?>
                <li>
                    <a href="<?php echo esc_url($instance['fb_url']); ?>" title="Faebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <?php endif; ?>                                        

                <?php if( ! empty($instance['twt_url']) ) : ?>
                <li>
                    <a href="<?php echo esc_url($instance['twt_url']); ?>" title="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <?php endif; ?>

                <?php if( ! empty($instance['rss_url']) ) : ?>
                <li>
                    <a href="<?php echo esc_url($instance['rss_url']); ?>" title="RSS">
                        <i class="fa fa-rss"></i>
                    </a>
                </li>
                <?php endif; ?>

                <?php if( ! empty($instance['pin_url']) ) : ?>
                <li>
                    <a href="<?php echo esc_url($instance['pin_url']); ?>" title="Pinterest">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
                <?php endif; ?>

                <?php if( ! empty($instance['dribble_url']) ) : ?>
                <li>
                    <a href="<?php echo esc_url($instance['dribble_url']); ?>" title="Dribble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </li>
                <?php endif; ?>

                <?php if( ! empty($instance['vimeo_url']) ) : ?>
                <li>
                    <a href="<?php echo esc_url($instance['vimeo_url']); ?>" title="Vimeo">
                        <i class="fa fa-vimeo"></i>
                    </a>
                </li>
                <?php endif; ?>

                <?php if( ! empty($instance['behance_url']) ) : ?>
                <li>
                    <a href="<?php echo esc_url($instance['behance_url']); ?>" title="Behance">
                        <i class="fa fa-behance"></i>
                    </a>
                </li>
                <?php endif; ?>

                <?php if( ! empty($instance['instagram_url']) ) : ?>
                <li>
                    <a href="<?php echo esc_url($instance['instagram_url']); ?>" title="Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <?php endif; ?>

            </ul>
        </div>
<?php
        echo $args['after_widget'];
	}

    function get_options() {
        return array(
            array(
                'id'      => 'title',
                'type'    => 'text',
                'title'   => esc_html__('Title:', 'event-hub'),
            ),
            array(
                'id'      => 'logo',
                'type'    => 'image',
                'title'   => esc_html__('Logo:', 'event-hub'),
            ),
            array(
                'id'      => 'content',
                'type'    => 'textarea',
                'title'   => esc_html__('Content:', 'event-hub'),
            ),
            array(
                'id'      => 'fb_url',
                'type'    => 'text',
                'title'   => esc_html__('Facebook Url:', 'event-hub'),
            ),
            array(
                'id'      => 'twt_url',
                'type'    => 'text',
                'title'   => esc_html__('Twitter Url:', 'event-hub'),
            ),
            array(
                'id'      => 'rss_url',
                'type'    => 'text',
                'title'   => esc_html__('RSS Url:', 'event-hub'),
            ),
            array(
                'id'      => 'pin_url',
                'type'    => 'text',
                'title'   => esc_html__('Pinterest Url:', 'event-hub'),
            ),
            array(
                'id'      => 'dribble_url',
                'type'    => 'text',
                'title'   => esc_html__('Dribble Url:', 'event-hub'),
            ),
            array(
                'id'      => 'vimeo_url',
                'type'    => 'text',
                'title'   => esc_html__('Vimeo Url:', 'event-hub'),
            ),
            array(
                'id'      => 'behance_url',
                'type'    => 'text',
                'title'   => esc_html__('Behance Url:', 'event-hub'),
            ),
            array(
                'id'      => 'instagram_url',
                'type'    => 'text',
                'title'   => esc_html__('Instagram Url:', 'event-hub'),
            ),
        );
    }
}