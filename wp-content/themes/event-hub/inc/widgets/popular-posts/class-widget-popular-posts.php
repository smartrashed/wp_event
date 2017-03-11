<?php

class Widget_Popular_Posts extends Event_Hub_Widget {

    public function __construct()
    {
        parent::__construct(
            'eh_popular_posts',
            esc_html__('Event hub :: Popular Posts', 'event-hub'),
            array('description' => 'Widgets to display popular posts' )
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
        $limit = '';
        if (! empty( $instance['limit'] ) ) {
            $limit .= $instance['limit'];
        } else {
            $limit .= '5';
        }
        $query_args = array( 
            'post_type'=>'posts',
            'posts_per_page' => $limit, 
            //'meta_key' => 'post_views_count', 
            'orderby' => 'meta_value_num', 
            //'ignore_sticky_posts' => true 
        );

        $the_query = new WP_Query( $query_args );
        if ( $the_query->have_posts() ) : ?>
                   
                <ul class="small-post-list">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                   <li <?php post_class('small-post-item') ?>>
                       <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>" class="post-thumb"><?php the_post_thumbnail('event-hub-small-thumb'); ?></a>
                        <?php endif; ?>
                        <span class="content">
                            <h2 class="title"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
                            <span class="meta">
                                <span class="date"><i class="fa fa-calendar"></i><?php the_time('M, d Y'); ?></span>                                
                            </span>
                        </span>
                   </li>
                
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            <?php else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'event-hub'); ?></p>
            <?php endif; ?>



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
                'id'      => 'limit',
                'type'    => 'number',
                'title'   => esc_html__('Limit Posts:', 'event-hub'),
                'default'   => '5'
            ),
             
        );
    }
}