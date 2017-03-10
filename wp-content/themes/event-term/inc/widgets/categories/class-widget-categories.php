<?php

class Widget_Categories extends Event_Term_Widget
{
	public function __construct()
	{
            parent::__construct(
            'et_categories',
            esc_html__('Event Term :: Categories', 'event-term'),
            array('description' => 'Display categories with post count' )
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
            <ul class="catagory-list">
                <?php $categories = get_terms( 'category', 'orderby=name&hide_empty=true' ); 
                foreach ($categories as $categorie):
                    $categorie_link = get_term_link( $categorie, $categorie->slug );
                    ?>
                <li><a href="<?php echo esc_url($categorie_link) ?>"> <?php echo esc_html($categorie->name) ?></a> <span><?php echo esc_html($categorie->count) ?></span></li>
                <?php endforeach; ?>
            </ul>
        
             

<?php
        echo $args['after_widget'];
	}

    function get_options() {
        return array(
            array(
                'id'      => 'title',
                'type'    => 'text',
                'title'   => esc_html__('Title:', 'event-term'),
            ),                         
             
        );
    }
}