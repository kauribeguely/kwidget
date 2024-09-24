<?php
// namespace Elementor;

class Post_Grid_Widget extends \Elementor\Widget_Base {

		public function get_style_depends() {
			return [ 'blog-grid-style'];
		}

    // Widget name
    public function get_name() {
        return 'post_grid_widget';
    }

    // Widget title in the Elementor editor
    public function get_title() {
        return __( 'Post Grid', 'plugin-name' );
    }

    // Widget icon (optional)
    public function get_icon() {
        return 'eicon-post-list';
    }

    // Widget category
    public function get_categories() {
        return [ 'basic' ];
    }

    // Widget controls (optional)
    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'posts_count',
            [
                'label' => __( 'Number of Posts', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 5,
            ]
        );

        $this->end_controls_section();
    }

    // Widget rendering
    protected function render() {
        $settings = $this->get_settings_for_display();

        // Query to get posts
        $args = [
            'post_type' => 'post',
            'posts_per_page' => $settings['posts_count'],
        ];
        $query = new \WP_Query( $args );

        if ( $query->have_posts() ) {
            echo '<div class="post-grid-widget">';

            while ( $query->have_posts() ) {
                $query->the_post();
                $featured_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );  // Square image size
                $post_title = get_the_title();
                $post_link = get_permalink();
								// Use excerpt if available, otherwise fall back to trimmed content
								 $post_excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 20, '...' );  // Limit to 20 words

								// Render the post item
						    echo '<div class="post-item">';

						    // Post thumbnail
						    echo '  <div class="post-thumbnail">';
						    echo '    <a href="' . esc_url( $post_link ) . '">';
						    echo '      <img src="' . esc_url( $featured_image ) . '" alt="' . esc_attr( $post_title ) . '" />';
						    echo '    </a>';
						    echo '  </div>';

						    // Post content: title and excerpt
						    echo '  <div class="post-content">';
						    echo '    <h3><a href="' . esc_url( $post_link ) . '">' . esc_html( $post_title ) . '</a></h3>';
						    echo '    <p>' . esc_html( $post_excerpt ) . '</p>';
						    echo '  </div>';

						    echo '</div>';  // End of post-item
			        }

			        wp_reset_postdata();
			    }
			}
}
