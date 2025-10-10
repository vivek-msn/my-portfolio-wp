<aside class="sidebar" aria-label="Blog Sidebar">
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    <?php else : ?>

        <!-- Default fallback content -->
        <section class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title h5">Featured Plugins</h2>
                <ul class="list-unstyled mb-0">
                    <li><a href="#">Duplicator</a></li>
                    <li><a href="#">WPForms</a></li>
                    <li><a href="#">SeedProd</a></li>
                </ul>
            </div>
        </section>

        <section class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title h5">Subscribe</h2>
                <p>Get weekly WordPress tips straight to your inbox.</p>
                <form>
                    <label for="subscribe-email" class="visually-hidden">Email address</label>
                    <input type="email" id="subscribe-email" class="form-control mb-2" placeholder="Your email" required>
                    <button class="btn btn-primary w-100">Subscribe</button>
                </form>
            </div>
        </section>

    <?php endif; ?>
</aside>
