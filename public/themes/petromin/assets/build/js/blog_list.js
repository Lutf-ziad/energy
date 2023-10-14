jQuery(($) => {
    const main_wrapper = $('.newsroom-section'),
        loader_wrapper = $('.list-load-wrapper'),
        filter_wrapper = $('#blog-filters'),
        result_wrapper = $('#blog-list'),
        blogpage = $('#blogpage'),
        nav_wrapper = $('.newsroom-toolbar'),
        limit = main_wrapper.find('[name="limit"]').val();
    current_lang = main_wrapper.find("[name='current_lang']").val(),
        exclude_categories = main_wrapper.find('[name="exclude_cat"]').val();

    let page = main_wrapper.find('[name="page"]').val(),
        is_loading = false;

    const loadBlogPosts = () => {
        if (is_loading) return;

        
        var action_ = 'get_blog_post';
        if (blogpage.length > 0) {
            action_ ='get_custom_post_type_posts';
            var post_type = 'blog'; // Custom post type name       
        }

        const data = {
            action: action_,
            post_type: 'blog', // Custom post type name
            page: page,
            limit: limit,
            year: filter_wrapper.find("[name='year']").val(),
            month: filter_wrapper.find("[name='month']").val(),
            category: filter_wrapper.find("[name='category']").val(),
            post_search: filter_wrapper.find("[name='post_search']").val(),
            sort_order: nav_wrapper.find("[name='sort_order']").val(),
            category__not_in: exclude_categories,
            current_lang: current_lang
        };

        $.ajax({
            url: globals.wp_admin_url,
            type: 'POST',
            dataType: 'json',
            data: data,
            beforeSend: () => {
                nav_wrapper.find('.item-count .cnt').html('');
                result_wrapper.html('');
                is_loading = true;
                loader_wrapper.addClass('loading');
            },
            complete: () => {
                is_loading = false;
                loader_wrapper.removeClass('loading');
                console.log(filter_wrapper.find("[name='category']").val());
            },
            success: (res) => {
                console.log(res);
                if (blogpage.length > 0) {
                    console.log(filter_wrapper.find("[name='category']").val());
                    console.log(res);
                    result_wrapper.html(res.blog_posts[0].blog_posts);
                    nav_wrapper.find('.item-count .cnt').html('<span>' + res.total + '</span>');
                }else{
                    result_wrapper.html(res.blog_posts);
                    nav_wrapper.find('.item-count .cnt').html('<span>' + res.total + '</span>');
                }

                if (!res.has_more) {
                    loader_wrapper.find('.load-more').addClass('d-none');
                    loader_wrapper.removeClass('loading');
                } else {
                    loader_wrapper.find('.load-more').removeClass('d-none');
                    loader_wrapper.addClass('loading');
                }
            },
            error: () => {
                loader_wrapper.removeClass('loading');
            },
        });
    };

    // Load Blog Post list on page load
    loadBlogPosts();

    // Handle filters change
    filter_wrapper.find('input, select').on('change', (e) => {
        e.preventDefault();
        page = 1;
        loadBlogPosts();
    });

    //Handle sorting change
    nav_wrapper.find('select').on('change', (e) => {
        e.preventDefault();
        page = 1;
        loadBlogPosts();
    });

    // Handle Search & Show Result Click
    filter_wrapper.on('click', '#custom-button', (e) => {
        e.preventDefault();
        page = 1;
        loadBlogPosts();
    });

    // Handle pagination changes.
    main_wrapper.on('click', '.custom-pagination a', (e) => {
        e.preventDefault();
        if (!$(e.currentTarget).hasClass('disabled')) {
            page = getParameterByName('pg', e.currentTarget.href);
            loadBlogPosts();
        }
    });

    $('form').submit(function (e) {
        e.preventDefault();
    });
});
