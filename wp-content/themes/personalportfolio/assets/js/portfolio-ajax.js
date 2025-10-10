// File: assets/js/portfolio-ajax.js
jQuery(document).ready(function ($) {
    let cache = {};

    $(".portfolio-tabs button").on("click", function () {
        var termSlug = $(this).data("term");
        var container = $("#portfolio-content");

        // Toggle active class and aria-selected
        $(".portfolio-tabs button").removeClass("active").attr("aria-selected", "false");
        $(this).addClass("active").attr("aria-selected", "true");

        // Load from cache if available
        if (cache[termSlug]) {
            container.html(cache[termSlug]);
            return;
        }

        container.html('<p class="text-center py-5">Loading projects...</p>');

        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST",
            data: {
                action: "load_portfolio_projects",
                term: termSlug
            },
            success: function (response) {
                container.html(response);
                cache[termSlug] = response;
            },
            error: function () {
                container.html('<p>Error loading projects. <button class="retry-btn btn btn-sm btn-primary mt-2">Try Again</button></p>');
                $(".retry-btn").on("click", function () {
                    $(".portfolio-tabs button.active").trigger("click");
                });
            }
        });
    });

    // Trigger click on first tab by default
    $(".portfolio-tabs button.active").trigger("click");
});
