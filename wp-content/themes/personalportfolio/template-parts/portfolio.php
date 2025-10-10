<?php
$terms = get_terms([
    'taxonomy' => 'project-category',
    'hide_empty' => false,
]);
?>

<section id="portfolio" class="portfolio_wrapper" aria-label="Portfolio Projects">
    <div class="container my-5 portfolio-section">
        <h2 class="text-center mb-4">Portfolio</h2>

        <!-- Tabs Navigation -->
        <ul class="nav nav-pills mb-4 portfolio-tabs justify-content-center" role="tablist">
            <?php foreach ($terms as $index => $term): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>" 
                            id="tab-<?php echo esc_attr($term->slug); ?>" 
                            data-term="<?php echo esc_attr($term->slug); ?>" 
                            role="tab" 
                            aria-controls="tabpane-<?php echo esc_attr($term->slug); ?>" 
                            aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                        <?php echo esc_html($term->name); ?>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Tab Content -->
        <div id="portfolio-content" class="tab-content">
            <p class="text-center py-5">Select a category to view projects.</p>
        </div>
    </div>
</section>