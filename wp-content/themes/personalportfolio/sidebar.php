<?php if ( is_single() ) : // Only show on single post pages ?>

<aside id="secondary" class="sidebar widget-area">

    <!-- Related Posts by Category -->
    <section class="widget widget_related_posts">
        <h2 class="widget-title">Related Posts</h2>
        <ul>
            <?php
            global $post;
            $categories = wp_get_post_categories($post->ID);
            if($categories){
                $args = array(
                    'category__in'   => $categories,
                    'post__not_in'   => array($post->ID), // Exclude current post
                    'posts_per_page' => 5
                );
                $related_posts = get_posts($args);
                if($related_posts){
                    foreach($related_posts as $rpost) : ?>
                        <li>
                            <a href="<?php echo get_permalink($rpost->ID); ?>">
                                <?php echo $rpost->post_title; ?>
                            </a>
                        </li>
                    <?php endforeach;
                } else {
                    echo '<li>No related posts found.</li>';
                }
                wp_reset_postdata();
            }
            ?>
        </ul>
    </section>

</aside>

<?php endif; ?>
