<?php

/**
 * Autocreated via wordpress-Wrapper
 */

namespace Org_Heigl\WordPressWrapper;

/**
* @method int absint (mixed $maybeint) https://developer.wordpress.org/reference/functions/absint
* @method \WP_Error|null activate_plugin (string $plugin, string $redirect = '', bool $network_wide = false, bool $silent = false) https://developer.wordpress.org/reference/functions/activate_plugin
* @method bool|\WP_Error activate_plugins (string|array $plugins, string $redirect = '', bool $network_wide = false, bool $silent = false) https://developer.wordpress.org/reference/functions/activate_plugins
* @method void activate_sitewide_plugin () https://developer.wordpress.org/reference/functions/activate_sitewide_plugin
* @method string addslashes_gpc (string $gpc) https://developer.wordpress.org/reference/functions/addslashes_gpc
* @method bool add_action (string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1) https://developer.wordpress.org/reference/functions/add_action
* @method bool add_blog_option (int $id, string $option, mixed $value) https://developer.wordpress.org/reference/functions/add_blog_option
* @method bool add_clean_index (string $table, string $index) https://developer.wordpress.org/reference/functions/add_clean_index
* @method bool|string add_comments_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_comments_page
* @method int|bool add_comment_meta (int $comment_id, string $meta_key, mixed $meta_value, bool $unique = false) https://developer.wordpress.org/reference/functions/add_comment_meta
* @method void add_contextual_help (string $screen, string $help) https://developer.wordpress.org/reference/functions/add_contextual_help
* @method string add_cssclass (string $add, string $class) https://developer.wordpress.org/reference/functions/add_cssclass
* @method void add_custom_background ($wp_head_callback = '', $admin_head_callback = '', $admin_preview_callback = '') https://developer.wordpress.org/reference/functions/add_custom_background
* @method void add_custom_image_header ($wp_head_callback, $admin_head_callback, $admin_preview_callback = '') https://developer.wordpress.org/reference/functions/add_custom_image_header
* @method bool|string add_dashboard_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_dashboard_page
* @method void add_editor_style (array|string $stylesheet = 'editor-style.css') https://developer.wordpress.org/reference/functions/add_editor_style
* @method bool|\WP_Error|void add_existing_user_to_blog (array $details = false) https://developer.wordpress.org/reference/functions/add_existing_user_to_blog
* @method string add_feed (string $feedname, callable $function) https://developer.wordpress.org/reference/functions/add_feed
* @method bool add_filter (string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1) https://developer.wordpress.org/reference/functions/add_filter
* @method void add_image_size (string $name, int $width = 0, int $height = 0, bool|array $crop = false) https://developer.wordpress.org/reference/functions/add_image_size
* @method void add_link () https://developer.wordpress.org/reference/functions/add_link
* @method bool|string add_links_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_links_page
* @method array add_magic_quotes (array $array) https://developer.wordpress.org/reference/functions/add_magic_quotes
* @method bool|string add_management_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_management_page
* @method bool|string add_media_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_media_page
* @method array add_menu_classes (array $menu) https://developer.wordpress.org/reference/functions/add_menu_classes
* @method string add_menu_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = NULL) https://developer.wordpress.org/reference/functions/add_menu_page
* @method void add_metadata ($meta_type, $object_id, $meta_key, $meta_value, $unique = false) https://developer.wordpress.org/reference/functions/add_metadata
* @method void add_meta_box (string $id, string $title, callable $callback, string|array|\WP_Screen $screen = NULL, string $context = 'advanced', string $priority = 'default', array $callback_args = NULL) https://developer.wordpress.org/reference/functions/add_meta_box
* @method bool add_network_option (int $network_id, string $option, mixed $value) https://developer.wordpress.org/reference/functions/add_network_option
* @method void add_new_user_to_blog ($user_id, $password, $meta) https://developer.wordpress.org/reference/functions/add_new_user_to_blog
* @method string add_object_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '') https://developer.wordpress.org/reference/functions/add_object_page
* @method bool add_option (string $option, mixed $value = '', string $deprecated = '', string|bool $autoload = 'yes') https://developer.wordpress.org/reference/functions/add_option
* @method bool|string add_options_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_options_page
* @method void add_option_update_handler (string $option_group, string $option_name, callable $sanitize_callback = '') https://developer.wordpress.org/reference/functions/add_option_update_handler
* @method array add_option_whitelist (array $new_options, string|array $options = '') https://developer.wordpress.org/reference/functions/add_option_whitelist
* @method bool|string add_pages_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_pages_page
* @method void add_permastruct (string $name, string $struct, array $args = []) https://developer.wordpress.org/reference/functions/add_permastruct
* @method bool|string add_plugins_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_plugins_page
* @method bool|string add_posts_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_posts_page
* @method string add_query_arg () https://developer.wordpress.org/reference/functions/add_query_arg
* @method void add_rewrite_endpoint (string $name, int $places, string|bool $query_var = true) https://developer.wordpress.org/reference/functions/add_rewrite_endpoint
* @method void add_rewrite_rule (string $regex, string|array $query, string $after = 'bottom') https://developer.wordpress.org/reference/functions/add_rewrite_rule
* @method void add_rewrite_tag ($tag, $regex, $query = '') https://developer.wordpress.org/reference/functions/add_rewrite_tag
* @method \WP_Role|null add_role (string $role, string $display_name, array $capabilities = []) https://developer.wordpress.org/reference/functions/add_role
* @method void add_screen_option (string $option, mixed $args = []) https://developer.wordpress.org/reference/functions/add_screen_option
* @method void add_settings_error (string $setting, string $code, string $message, string $type = 'error') https://developer.wordpress.org/reference/functions/add_settings_error
* @method void add_settings_field (string $id, string $title, callable $callback, string $page, string $section = 'default', array $args = []) https://developer.wordpress.org/reference/functions/add_settings_field
* @method void add_settings_section (string $id, string $title, callable $callback, string $page) https://developer.wordpress.org/reference/functions/add_settings_section
* @method void add_shortcode (string $tag, callable $callback) https://developer.wordpress.org/reference/functions/add_shortcode
* @method bool add_site_option (string $option, mixed $value) https://developer.wordpress.org/reference/functions/add_site_option
* @method bool|string add_submenu_page (string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_submenu_page
* @method int|\WP_Error|bool add_term_meta (int $term_id, string $meta_key, mixed $meta_value, bool $unique = false) https://developer.wordpress.org/reference/functions/add_term_meta
* @method bool|string add_theme_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_theme_page
* @method void add_theme_support ($feature) https://developer.wordpress.org/reference/functions/add_theme_support
* @method void add_thickbox () https://developer.wordpress.org/reference/functions/add_thickbox
* @method void add_user () https://developer.wordpress.org/reference/functions/add_user
* @method bool|string add_users_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '') https://developer.wordpress.org/reference/functions/add_users_page
* @method int|bool add_user_meta (int $user_id, string $meta_key, mixed $meta_value, bool $unique = false) https://developer.wordpress.org/reference/functions/add_user_meta
* @method void add_user_to_blog ($blog_id, $user_id, $role) https://developer.wordpress.org/reference/functions/add_user_to_blog
* @method string add_utility_page (string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '') https://developer.wordpress.org/reference/functions/add_utility_page
* @method void adjacent_image_link (bool $prev = true, string|array $size = 'thumbnail', bool $text = false) https://developer.wordpress.org/reference/functions/adjacent_image_link
* @method void adjacent_posts_rel_link (string $title = '%title', bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/adjacent_posts_rel_link
* @method void adjacent_posts_rel_link_wp_head () https://developer.wordpress.org/reference/functions/adjacent_posts_rel_link_wp_head
* @method void adjacent_post_link (string $format, string $link, bool $in_same_term = false, array|string $excluded_terms = '', bool $previous = true, string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/adjacent_post_link
* @method void admin_color_scheme_picker (int $user_id) https://developer.wordpress.org/reference/functions/admin_color_scheme_picker
* @method string admin_created_user_email (string $text) https://developer.wordpress.org/reference/functions/admin_created_user_email
* @method string admin_url (string $path = '', string $scheme = 'admin') https://developer.wordpress.org/reference/functions/admin_url
* @method void allowed_http_request_hosts ($is_external, $host) https://developer.wordpress.org/reference/functions/allowed_http_request_hosts
* @method string allowed_tags () https://developer.wordpress.org/reference/functions/allowed_tags
* @method bool allow_subdirectory_install () https://developer.wordpress.org/reference/functions/allow_subdirectory_install
* @method bool allow_subdomain_install () https://developer.wordpress.org/reference/functions/allow_subdomain_install
* @method string antispambot (string $email_address, int $hex_encoding = 0) https://developer.wordpress.org/reference/functions/antispambot
* @method bool apache_mod_loaded (string $mod, bool $default = false) https://developer.wordpress.org/reference/functions/apache_mod_loaded
* @method mixed apply_filters (string $tag, mixed $value) https://developer.wordpress.org/reference/functions/apply_filters
* @method void apply_filters_deprecated (string $tag, array $args, string $version, string $replacement = false, string $message = NULL) https://developer.wordpress.org/reference/functions/apply_filters_deprecated
* @method mixed apply_filters_ref_array (string $tag, array $args) https://developer.wordpress.org/reference/functions/apply_filters_ref_array
* @method array array_replace_recursive (array $base = [], array $replacements = []) https://developer.wordpress.org/reference/functions/array_replace_recursive
* @method void atom_enclosure () https://developer.wordpress.org/reference/functions/atom_enclosure
* @method void atom_site_icon () https://developer.wordpress.org/reference/functions/atom_site_icon
* @method void attachment_id3_data_meta_box (\WP_Post $post) https://developer.wordpress.org/reference/functions/attachment_id3_data_meta_box
* @method void attachment_submitbox_metadata () https://developer.wordpress.org/reference/functions/attachment_submitbox_metadata
* @method void attachment_submit_meta_box (object $post) https://developer.wordpress.org/reference/functions/attachment_submit_meta_box
* @method int attachment_url_to_postid (string $url) https://developer.wordpress.org/reference/functions/attachment_url_to_postid
* @method string attribute_escape (string $text) https://developer.wordpress.org/reference/functions/attribute_escape
* @method bool author_can (int|\WP_Post $post, string $capability) https://developer.wordpress.org/reference/functions/author_can
* @method void auth_redirect () https://developer.wordpress.org/reference/functions/auth_redirect
* @method void automatic_feed_links (bool $add = true) https://developer.wordpress.org/reference/functions/automatic_feed_links
* @method array avoid_blog_page_permalink_collision (array $data, array $postarr) https://developer.wordpress.org/reference/functions/avoid_blog_page_permalink_collision
* @method void background_color () https://developer.wordpress.org/reference/functions/background_color
* @method void background_image () https://developer.wordpress.org/reference/functions/background_image
* @method string backslashit (string $string) https://developer.wordpress.org/reference/functions/backslashit
* @method string balanceTags (string $text, bool $force = false) https://developer.wordpress.org/reference/functions/balanceTags
* @method string before_last_bar (string $string) https://developer.wordpress.org/reference/functions/before_last_bar
* @method void bloginfo (string $show = '') https://developer.wordpress.org/reference/functions/bloginfo
* @method void bloginfo_rss (string $show = '') https://developer.wordpress.org/reference/functions/bloginfo_rss
* @method void body_class (string|array $class = '') https://developer.wordpress.org/reference/functions/body_class
* @method bool bool_from_yn (string $yn) https://developer.wordpress.org/reference/functions/bool_from_yn
* @method string build_query (array $data) https://developer.wordpress.org/reference/functions/build_query
* @method void cache_javascript_headers () https://developer.wordpress.org/reference/functions/cache_javascript_headers
* @method void cache_users (array $user_ids) https://developer.wordpress.org/reference/functions/cache_users
* @method float calendar_week_mod (int $num) https://developer.wordpress.org/reference/functions/calendar_week_mod
* @method void cancel_comment_reply_link (string $text = '') https://developer.wordpress.org/reference/functions/cancel_comment_reply_link
* @method bool can_edit_network (int $network_id) https://developer.wordpress.org/reference/functions/can_edit_network
* @method string capital_P_dangit (string $text) https://developer.wordpress.org/reference/functions/capital_P_dangit
* @method string category_description (int $category = 0) https://developer.wordpress.org/reference/functions/category_description
* @method void category_exists ($cat_name, $parent = NULL) https://developer.wordpress.org/reference/functions/category_exists
* @method bool cat_is_ancestor_of (int|object $cat1, int|object $cat2) https://developer.wordpress.org/reference/functions/cat_is_ancestor_of
* @method string checked (mixed $checked, mixed $current = true, bool $echo = true) https://developer.wordpress.org/reference/functions/checked
* @method bool|int check_admin_referer (int|string $action = -1, string $query_arg = '_wpnonce') https://developer.wordpress.org/reference/functions/check_admin_referer
* @method bool|int check_ajax_referer (int|string $action = -1, bool|string $query_arg = false, bool $die = true) https://developer.wordpress.org/reference/functions/check_ajax_referer
* @method bool check_column (string $table_name, string $col_name, string $col_type, bool $is_null = NULL, mixed $key = NULL, mixed $default = NULL, mixed $extra = NULL) https://developer.wordpress.org/reference/functions/check_column
* @method void check_comment ($author, $email, $url, $comment, $user_ip, $user_agent, $comment_type) https://developer.wordpress.org/reference/functions/check_comment
* @method void check_comment_flood_db () https://developer.wordpress.org/reference/functions/check_comment_flood_db
* @method bool check_import_new_users (string $permission) https://developer.wordpress.org/reference/functions/check_import_new_users
* @method \WP_User|\WP_Error check_password_reset_key (string $key, string $login) https://developer.wordpress.org/reference/functions/check_password_reset_key
* @method void check_theme_switched () https://developer.wordpress.org/reference/functions/check_theme_switched
* @method array check_upload_mimes (array $mimes) https://developer.wordpress.org/reference/functions/check_upload_mimes
* @method void check_upload_size ($file) https://developer.wordpress.org/reference/functions/check_upload_size
* @method void choose_primary_blog () https://developer.wordpress.org/reference/functions/choose_primary_blog
* @method void clean_blog_cache (\WP_Site|int $blog) https://developer.wordpress.org/reference/functions/clean_blog_cache
* @method void clean_bookmark_cache (int $bookmark_id) https://developer.wordpress.org/reference/functions/clean_bookmark_cache
* @method void clean_category_cache (int $id) https://developer.wordpress.org/reference/functions/clean_category_cache
* @method void clean_comment_cache (int|array $ids) https://developer.wordpress.org/reference/functions/clean_comment_cache
* @method void clean_network_cache (int|array $ids) https://developer.wordpress.org/reference/functions/clean_network_cache
* @method void clean_object_term_cache (int|array $object_ids, array|string $object_type) https://developer.wordpress.org/reference/functions/clean_object_term_cache
* @method void clean_page_cache (int $id) https://developer.wordpress.org/reference/functions/clean_page_cache
* @method string clean_pre (array|string $matches) https://developer.wordpress.org/reference/functions/clean_pre
* @method void clean_site_details_cache (int $site_id = 0) https://developer.wordpress.org/reference/functions/clean_site_details_cache
* @method void clean_taxonomy_cache (string $taxonomy) https://developer.wordpress.org/reference/functions/clean_taxonomy_cache
* @method void clean_term_cache (int|array $ids, string $taxonomy = '', bool $clean_taxonomy = true) https://developer.wordpress.org/reference/functions/clean_term_cache
* @method void clean_url ($url, $protocols = NULL, $context = 'display') https://developer.wordpress.org/reference/functions/clean_url
* @method void clean_user_cache (\WP_User|int $user) https://developer.wordpress.org/reference/functions/clean_user_cache
* @method void clear_global_post_cache (int $post_id) https://developer.wordpress.org/reference/functions/clear_global_post_cache
* @method void codepress_footer_js () https://developer.wordpress.org/reference/functions/codepress_footer_js
* @method void codepress_get_lang (string $filename) https://developer.wordpress.org/reference/functions/codepress_get_lang
* @method void comments_link (string $deprecated = '', string $deprecated_2 = '') https://developer.wordpress.org/reference/functions/comments_link
* @method \none comments_link_feed () https://developer.wordpress.org/reference/functions/comments_link_feed
* @method void comments_number (string $zero = false, string $one = false, string $more = false, string $deprecated = '') https://developer.wordpress.org/reference/functions/comments_number
* @method bool comments_open (int|\WP_Post $post_id = NULL) https://developer.wordpress.org/reference/functions/comments_open
* @method void comments_popup_link (string $zero = false, string $one = false, string $more = false, string $css_class = '', string $none = false) https://developer.wordpress.org/reference/functions/comments_popup_link
* @method void comments_popup_script () https://developer.wordpress.org/reference/functions/comments_popup_script
* @method string comments_rss () https://developer.wordpress.org/reference/functions/comments_rss
* @method void comments_rss_link (string $link_text = 'Comments RSS') https://developer.wordpress.org/reference/functions/comments_rss_link
* @method void comments_template ($file = '/comments.php', $separate_comments = false) https://developer.wordpress.org/reference/functions/comments_template
* @method void comment_author (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/comment_author
* @method void comment_author_email (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/comment_author_email
* @method void comment_author_email_link (string $linktext = '', string $before = '', string $after = '', int|\WP_Comment $comment = NULL) https://developer.wordpress.org/reference/functions/comment_author_email_link
* @method void comment_author_IP (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/comment_author_IP
* @method void comment_author_link (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/comment_author_link
* @method void comment_author_rss () https://developer.wordpress.org/reference/functions/comment_author_rss
* @method void comment_author_url (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/comment_author_url
* @method void comment_author_url_link (string $linktext = '', string $before = '', string $after = '', int|\WP_Comment $comment = 0) https://developer.wordpress.org/reference/functions/comment_author_url_link
* @method string comment_class (string|array $class = '', int|\WP_Comment $comment = NULL, int|\WP_Post $post_id = NULL, bool $echo = true) https://developer.wordpress.org/reference/functions/comment_class
* @method void comment_date (string $d = '', int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/comment_date
* @method void comment_excerpt (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/comment_excerpt
* @method void comment_exists ($comment_author, $comment_date, $timezone = 'blog') https://developer.wordpress.org/reference/functions/comment_exists
* @method void comment_footer_die (string $msg) https://developer.wordpress.org/reference/functions/comment_footer_die
* @method void comment_form ($args = [], $post_id = NULL) https://developer.wordpress.org/reference/functions/comment_form
* @method void comment_form_title (string $noreplytext = false, string $replytext = false, string $linktoparent = true) https://developer.wordpress.org/reference/functions/comment_form_title
* @method void comment_guid (int|\WP_Comment $comment_id = NULL) https://developer.wordpress.org/reference/functions/comment_guid
* @method void comment_ID () https://developer.wordpress.org/reference/functions/comment_ID
* @method void comment_id_fields (int $id = 0) https://developer.wordpress.org/reference/functions/comment_id_fields
* @method void comment_link (int|\WP_Comment $comment = NULL) https://developer.wordpress.org/reference/functions/comment_link
* @method mixed comment_reply_link (array $args = [], int $comment = NULL, int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/comment_reply_link
* @method void comment_text (int|\WP_Comment $comment_ID = 0, array $args = []) https://developer.wordpress.org/reference/functions/comment_text
* @method void comment_text_rss () https://developer.wordpress.org/reference/functions/comment_text_rss
* @method void comment_time (string $d = '') https://developer.wordpress.org/reference/functions/comment_time
* @method void comment_type (string $commenttxt = false, string $trackbacktxt = false, string $pingbacktxt = false) https://developer.wordpress.org/reference/functions/comment_type
* @method void compression_test () https://developer.wordpress.org/reference/functions/compression_test
* @method void confirm_another_blog_signup ($domain, $path, $blog_title, $user_name, $user_email = '', $meta = [], $blog_id = 0) https://developer.wordpress.org/reference/functions/confirm_another_blog_signup
* @method void confirm_blog_signup ($domain, $path, $blog_title, $user_name = '', $user_email = '', $meta = []) https://developer.wordpress.org/reference/functions/confirm_blog_signup
* @method void confirm_delete_users (array $users) https://developer.wordpress.org/reference/functions/confirm_delete_users
* @method void confirm_user_signup (string $user_name, string $user_email) https://developer.wordpress.org/reference/functions/confirm_user_signup
* @method string content_url (string $path = '') https://developer.wordpress.org/reference/functions/content_url
* @method string convert_chars (string $content, string $deprecated = '') https://developer.wordpress.org/reference/functions/convert_chars
* @method string convert_invalid_entities (string $content) https://developer.wordpress.org/reference/functions/convert_invalid_entities
* @method string convert_smilies (string $text) https://developer.wordpress.org/reference/functions/convert_smilies
* @method \WP_Screen convert_to_screen (string $hook_name) https://developer.wordpress.org/reference/functions/convert_to_screen
* @method mixed copy_dir (string $from, string $to, array $skip_list = []) https://developer.wordpress.org/reference/functions/copy_dir
* @method string core_update_footer (string $msg = '') https://developer.wordpress.org/reference/functions/core_update_footer
* @method void core_upgrade_preamble () https://developer.wordpress.org/reference/functions/core_upgrade_preamble
* @method array count_many_users_posts (array $users, string|array $post_type = 'post', bool $public_only = false) https://developer.wordpress.org/reference/functions/count_many_users_posts
* @method array count_users (string $strategy = 'time', int|null $site_id = NULL) https://developer.wordpress.org/reference/functions/count_users
* @method string count_user_posts (int $userid, array|string $post_type = 'post', bool $public_only = false) https://developer.wordpress.org/reference/functions/count_user_posts
* @method string|int create_empty_blog (string $domain, string $path, string $weblog_title, int $site_id = 1) https://developer.wordpress.org/reference/functions/create_empty_blog
* @method void create_initial_rest_routes () https://developer.wordpress.org/reference/functions/create_initial_rest_routes
* @method void create_initial_taxonomies () https://developer.wordpress.org/reference/functions/create_initial_taxonomies
* @method int create_user (string $username, string $password, string $email) https://developer.wordpress.org/reference/functions/create_user
* @method string current_action () https://developer.wordpress.org/reference/functions/current_action
* @method string current_filter () https://developer.wordpress.org/reference/functions/current_filter
* @method \WP_Theme current_theme_info () https://developer.wordpress.org/reference/functions/current_theme_info
* @method bool current_theme_supports (string $feature) https://developer.wordpress.org/reference/functions/current_theme_supports
* @method int|string current_time (string $type, int|bool $gmt = 0) https://developer.wordpress.org/reference/functions/current_time
* @method bool current_user_can (string $capability) https://developer.wordpress.org/reference/functions/current_user_can
* @method bool current_user_can_for_blog (int $blog_id, string $capability) https://developer.wordpress.org/reference/functions/current_user_can_for_blog
* @method void customize_themes_print_templates () https://developer.wordpress.org/reference/functions/customize_themes_print_templates
* @method array dashboard_browser_nag_class (array $classes) https://developer.wordpress.org/reference/functions/dashboard_browser_nag_class
* @method string date_i18n (string $dateformatstring, bool|int $unixtimestamp = false, bool $gmt = false) https://developer.wordpress.org/reference/functions/date_i18n
* @method array dbDelta (string|array $queries = '', bool $execute = true) https://developer.wordpress.org/reference/functions/dbDelta
* @method void deactivate_plugins (string|array $plugins, bool $silent = false, mixed $network_wide = NULL) https://developer.wordpress.org/reference/functions/deactivate_plugins
* @method void deactivate_sitewide_plugin ($plugin = false) https://developer.wordpress.org/reference/functions/deactivate_sitewide_plugin
* @method void dead_db () https://developer.wordpress.org/reference/functions/dead_db
* @method void debug_fclose (mixed $fp) https://developer.wordpress.org/reference/functions/debug_fclose
* @method bool debug_fopen (string $filename, string $mode) https://developer.wordpress.org/reference/functions/debug_fopen
* @method void debug_fwrite (mixed $fp, string $string) https://developer.wordpress.org/reference/functions/debug_fwrite
* @method void default_password_nag () https://developer.wordpress.org/reference/functions/default_password_nag
* @method void default_password_nag_edit_user (int $user_ID, object $old_data) https://developer.wordpress.org/reference/functions/default_password_nag_edit_user
* @method void default_password_nag_handler (bool $errors = false) https://developer.wordpress.org/reference/functions/default_password_nag_handler
* @method int default_topic_count_scale (int $count) https://developer.wordpress.org/reference/functions/default_topic_count_scale
* @method int default_topic_count_text (int $count) https://developer.wordpress.org/reference/functions/default_topic_count_text
* @method void delete_all_user_settings () https://developer.wordpress.org/reference/functions/delete_all_user_settings
* @method bool delete_blog_option (int $id, string $option) https://developer.wordpress.org/reference/functions/delete_blog_option
* @method bool delete_comment_meta (int $comment_id, string $meta_key, mixed $meta_value = '') https://developer.wordpress.org/reference/functions/delete_comment_meta
* @method void delete_expired_transients (bool $force_db = false) https://developer.wordpress.org/reference/functions/delete_expired_transients
* @method void delete_get_calendar_cache () https://developer.wordpress.org/reference/functions/delete_get_calendar_cache
* @method bool delete_metadata (string $meta_type, int $object_id, string $meta_key, mixed $meta_value = '', bool $delete_all = false) https://developer.wordpress.org/reference/functions/delete_metadata
* @method bool delete_metadata_by_mid (string $meta_type, int $meta_id) https://developer.wordpress.org/reference/functions/delete_metadata_by_mid
* @method bool delete_network_option (int $network_id, string $option) https://developer.wordpress.org/reference/functions/delete_network_option
* @method bool delete_option (string $option) https://developer.wordpress.org/reference/functions/delete_option
* @method bool|null|\WP_Error delete_plugins (array $plugins, string $deprecated = '') https://developer.wordpress.org/reference/functions/delete_plugins
* @method bool delete_site_option (string $option) https://developer.wordpress.org/reference/functions/delete_site_option
* @method bool delete_site_transient (string $transient) https://developer.wordpress.org/reference/functions/delete_site_transient
* @method bool delete_term_meta (int $term_id, string $meta_key, mixed $meta_value = '') https://developer.wordpress.org/reference/functions/delete_term_meta
* @method void delete_theme ($stylesheet, $redirect = '') https://developer.wordpress.org/reference/functions/delete_theme
* @method bool delete_transient (string $transient) https://developer.wordpress.org/reference/functions/delete_transient
* @method bool delete_usermeta (int $user_id, string $meta_key, mixed $meta_value = '') https://developer.wordpress.org/reference/functions/delete_usermeta
* @method void delete_users_add_js () https://developer.wordpress.org/reference/functions/delete_users_add_js
* @method bool delete_user_meta (int $user_id, string $meta_key, mixed $meta_value = '') https://developer.wordpress.org/reference/functions/delete_user_meta
* @method bool delete_user_option (int $user_id, string $option_name, bool $global = false) https://developer.wordpress.org/reference/functions/delete_user_option
* @method bool|null delete_user_setting (string $names) https://developer.wordpress.org/reference/functions/delete_user_setting
* @method string deslash (string $content) https://developer.wordpress.org/reference/functions/deslash
* @method int did_action (string $tag) https://developer.wordpress.org/reference/functions/did_action
* @method string disabled (mixed $disabled, mixed $current = true, bool $echo = true) https://developer.wordpress.org/reference/functions/disabled
* @method bool|string discover_pingback_server_uri (string $url, int $deprecated = '') https://developer.wordpress.org/reference/functions/discover_pingback_server_uri
* @method void dismissed_updates () https://developer.wordpress.org/reference/functions/dismissed_updates
* @method bool dismiss_core_update (object $update) https://developer.wordpress.org/reference/functions/dismiss_core_update
* @method void display_header (string $body_classes = '') https://developer.wordpress.org/reference/functions/display_header
* @method bool display_header_text () https://developer.wordpress.org/reference/functions/display_header_text
* @method void display_plugins_table () https://developer.wordpress.org/reference/functions/display_plugins_table
* @method void display_setup_form (string|null $error = NULL) https://developer.wordpress.org/reference/functions/display_setup_form
* @method void display_space_usage () https://developer.wordpress.org/reference/functions/display_space_usage
* @method void display_theme (object $theme) https://developer.wordpress.org/reference/functions/display_theme
* @method void display_themes () https://developer.wordpress.org/reference/functions/display_themes
* @method void documentation_link () https://developer.wordpress.org/reference/functions/documentation_link
* @method bool doing_action (string|null $action = NULL) https://developer.wordpress.org/reference/functions/doing_action
* @method bool doing_filter (null|string $filter = NULL) https://developer.wordpress.org/reference/functions/doing_filter
* @method int|null domain_exists (string $domain, string $path, int $network_id = 1) https://developer.wordpress.org/reference/functions/domain_exists
* @method mixed download_url (string $url, int $timeout = 300) https://developer.wordpress.org/reference/functions/download_url
* @method int do_accordion_sections (string|object $screen, string $context, mixed $object) https://developer.wordpress.org/reference/functions/do_accordion_sections
* @method void do_action (string $tag, $arg = '') https://developer.wordpress.org/reference/functions/do_action
* @method void do_action_deprecated (string $tag, array $args, string $version, string $replacement = false, string $message = NULL) https://developer.wordpress.org/reference/functions/do_action_deprecated
* @method void do_action_ref_array (string $tag, array $args) https://developer.wordpress.org/reference/functions/do_action_ref_array
* @method void do_activate_header () https://developer.wordpress.org/reference/functions/do_activate_header
* @method void do_all_pings () https://developer.wordpress.org/reference/functions/do_all_pings
* @method void do_core_upgrade (bool $reinstall = false) https://developer.wordpress.org/reference/functions/do_core_upgrade
* @method void do_dismiss_core_update () https://developer.wordpress.org/reference/functions/do_dismiss_core_update
* @method void do_enclose (string $content, int $post_ID) https://developer.wordpress.org/reference/functions/do_enclose
* @method void do_feed () https://developer.wordpress.org/reference/functions/do_feed
* @method void do_feed_atom (bool $for_comments) https://developer.wordpress.org/reference/functions/do_feed_atom
* @method void do_feed_rdf () https://developer.wordpress.org/reference/functions/do_feed_rdf
* @method void do_feed_rss () https://developer.wordpress.org/reference/functions/do_feed_rss
* @method void do_feed_rss2 (bool $for_comments) https://developer.wordpress.org/reference/functions/do_feed_rss2
* @method int do_meta_boxes (string|\WP_Screen $screen, string $context, mixed $object) https://developer.wordpress.org/reference/functions/do_meta_boxes
* @method void do_robots () https://developer.wordpress.org/reference/functions/do_robots
* @method void do_settings_fields (string $page, string $section) https://developer.wordpress.org/reference/functions/do_settings_fields
* @method void do_settings_sections (string $page) https://developer.wordpress.org/reference/functions/do_settings_sections
* @method string do_shortcode (string $content, bool $ignore_html = false) https://developer.wordpress.org/reference/functions/do_shortcode
* @method string do_shortcodes_in_html_tags (string $content, bool $ignore_html, array $tagnames) https://developer.wordpress.org/reference/functions/do_shortcodes_in_html_tags
* @method string|bool do_shortcode_tag (array $m) https://developer.wordpress.org/reference/functions/do_shortcode_tag
* @method void do_signup_header () https://developer.wordpress.org/reference/functions/do_signup_header
* @method void do_trackbacks (int|\WP_Post $post_id) https://developer.wordpress.org/reference/functions/do_trackbacks
* @method void do_undismiss_core_update () https://developer.wordpress.org/reference/functions/do_undismiss_core_update
* @method void dropdown_categories (int $default = 0, int $parent = 0, array $popular_ids = []) https://developer.wordpress.org/reference/functions/dropdown_categories
* @method string dropdown_cats (int $optionall = 1, string $all = 'All', string $orderby = 'ID', string $order = 'asc', int $show_last_update = 0, int $show_count = 0, int $hide_empty = 1, bool $optionnone = false, int $selected = 0, int $exclude = 0) https://developer.wordpress.org/reference/functions/dropdown_cats
* @method void dropdown_link_categories (int $default = 0) https://developer.wordpress.org/reference/functions/dropdown_link_categories
* @method bool drop_index (string $table, string $index) https://developer.wordpress.org/reference/functions/drop_index
* @method bool dynamic_sidebar (int|string $index = 1) https://developer.wordpress.org/reference/functions/dynamic_sidebar
* @method void edit_bookmark_link (string $link = '', string $before = '', string $after = '', int $bookmark = NULL) https://developer.wordpress.org/reference/functions/edit_bookmark_link
* @method void edit_comment () https://developer.wordpress.org/reference/functions/edit_comment
* @method void edit_comment_link (string $text = NULL, string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/edit_comment_link
* @method void edit_form_image_editor (\WP_Post $post) https://developer.wordpress.org/reference/functions/edit_form_image_editor
* @method int|\WP_Error edit_link (int $link_id = 0) https://developer.wordpress.org/reference/functions/edit_link
* @method void edit_post_link (string $text = NULL, string $before = '', string $after = '', int|\WP_Post $id = 0, string $class = 'post-edit-link') https://developer.wordpress.org/reference/functions/edit_post_link
* @method void edit_tag_link (string $link = '', string $before = '', string $after = '', \WP_Term $tag = NULL) https://developer.wordpress.org/reference/functions/edit_tag_link
* @method string|void edit_term_link (string $link = '', string $before = '', string $after = '', object $term = NULL, bool $echo = true) https://developer.wordpress.org/reference/functions/edit_term_link
* @method int|\WP_Error edit_user (int $user_id = 0) https://developer.wordpress.org/reference/functions/edit_user
* @method int|bool email_exists (string $email) https://developer.wordpress.org/reference/functions/email_exists
* @method void endElement (mixed $parser, string $tagName) https://developer.wordpress.org/reference/functions/endElement
* @method void enqueue_comment_hotkeys_js () https://developer.wordpress.org/reference/functions/enqueue_comment_hotkeys_js
* @method void enqueue_embed_scripts () https://developer.wordpress.org/reference/functions/enqueue_embed_scripts
* @method string ent2ncr (string $text) https://developer.wordpress.org/reference/functions/ent2ncr
* @method string esc_attr (string $text) https://developer.wordpress.org/reference/functions/esc_attr
* @method void esc_attr_e (string $text, string $domain = 'default') https://developer.wordpress.org/reference/functions/esc_attr_e
* @method string esc_attr_x (string $text, string $context, string $domain = 'default') https://developer.wordpress.org/reference/functions/esc_attr_x
* @method string esc_attr__ (string $text, string $domain = 'default') https://developer.wordpress.org/reference/functions/esc_attr__
* @method string esc_html (string $text) https://developer.wordpress.org/reference/functions/esc_html
* @method void esc_html_e (string $text, string $domain = 'default') https://developer.wordpress.org/reference/functions/esc_html_e
* @method string esc_html_x (string $text, string $context, string $domain = 'default') https://developer.wordpress.org/reference/functions/esc_html_x
* @method string esc_html__ (string $text, string $domain = 'default') https://developer.wordpress.org/reference/functions/esc_html__
* @method void esc_js ($text) https://developer.wordpress.org/reference/functions/esc_js
* @method string|array esc_sql (string|array $data) https://developer.wordpress.org/reference/functions/esc_sql
* @method string esc_textarea (string $text) https://developer.wordpress.org/reference/functions/esc_textarea
* @method void esc_url ($url, $protocols = NULL, $_context = 'display') https://developer.wordpress.org/reference/functions/esc_url
* @method string esc_url_raw (string $url, array $protocols = NULL) https://developer.wordpress.org/reference/functions/esc_url_raw
* @method void export_add_js () https://developer.wordpress.org/reference/functions/export_add_js
* @method void export_date_options (string $post_type = 'post') https://developer.wordpress.org/reference/functions/export_date_options
* @method void export_wp (array $args = []) https://developer.wordpress.org/reference/functions/export_wp
* @method array extract_from_markers (string $filename, string $marker) https://developer.wordpress.org/reference/functions/extract_from_markers
* @method void favorite_actions () https://developer.wordpress.org/reference/functions/favorite_actions
* @method void feed_content_type (string $type = '') https://developer.wordpress.org/reference/functions/feed_content_type
* @method void feed_links (array $args = []) https://developer.wordpress.org/reference/functions/feed_links
* @method void feed_links_extra (array $args = []) https://developer.wordpress.org/reference/functions/feed_links_extra
* @method \WP_Error|\SimplePie fetch_feed (mixed $url) https://developer.wordpress.org/reference/functions/fetch_feed
* @method bool|\MagpieRSS fetch_rss (string $url) https://developer.wordpress.org/reference/functions/fetch_rss
* @method bool file_is_displayable_image (string $path) https://developer.wordpress.org/reference/functions/file_is_displayable_image
* @method bool file_is_valid_image (string $path) https://developer.wordpress.org/reference/functions/file_is_valid_image
* @method mixed filter_default_option (mixed $default, string $option, bool $passed_default) https://developer.wordpress.org/reference/functions/filter_default_option
* @method string filter_SSL (string $url) https://developer.wordpress.org/reference/functions/filter_SSL
* @method array|bool find_core_auto_update () https://developer.wordpress.org/reference/functions/find_core_auto_update
* @method object|bool find_core_update (string $version, string $locale) https://developer.wordpress.org/reference/functions/find_core_update
* @method void find_posts_div (string $found_action = '') https://developer.wordpress.org/reference/functions/find_posts_div
* @method int fix_import_form_size (int $size) https://developer.wordpress.org/reference/functions/fix_import_form_size
* @method void fix_phpmailer_messageid (\PHPMailer $phpmailer) https://developer.wordpress.org/reference/functions/fix_phpmailer_messageid
* @method string floated_admin_avatar (string $name) https://developer.wordpress.org/reference/functions/floated_admin_avatar
* @method void flush_rewrite_rules (bool $hard = true) https://developer.wordpress.org/reference/functions/flush_rewrite_rules
* @method string force_balance_tags (string $text) https://developer.wordpress.org/reference/functions/force_balance_tags
* @method bool force_ssl_admin (string|bool $force = NULL) https://developer.wordpress.org/reference/functions/force_ssl_admin
* @method bool force_ssl_content (bool $force = '') https://developer.wordpress.org/reference/functions/force_ssl_content
* @method bool force_ssl_login (string|bool $force = NULL) https://developer.wordpress.org/reference/functions/force_ssl_login
* @method string format_code_lang (string $code = '') https://developer.wordpress.org/reference/functions/format_code_lang
* @method void format_for_editor ($text, $default_editor = NULL) https://developer.wordpress.org/reference/functions/format_for_editor
* @method void format_to_edit ($content, $rich_text = false) https://developer.wordpress.org/reference/functions/format_to_edit
* @method string format_to_post (string $content) https://developer.wordpress.org/reference/functions/format_to_post
* @method void form_option (string $option) https://developer.wordpress.org/reference/functions/form_option
* @method string funky_javascript_callback (array $matches) https://developer.wordpress.org/reference/functions/funky_javascript_callback
* @method string funky_javascript_fix (string $text) https://developer.wordpress.org/reference/functions/funky_javascript_fix
* @method string gallery_shortcode (array $attr) https://developer.wordpress.org/reference/functions/gallery_shortcode
* @method bool gd_edit_image_support (string $mime_type) https://developer.wordpress.org/reference/functions/gd_edit_image_support
* @method void generate_random_password (int $len = 8) https://developer.wordpress.org/reference/functions/generate_random_password
* @method int generic_ping (int $post_id = 0) https://developer.wordpress.org/reference/functions/generic_ping
* @method void get_404_template () https://developer.wordpress.org/reference/functions/get_404_template
* @method \WP_Site|void get_active_blog_for_user (int $user_id) https://developer.wordpress.org/reference/functions/get_active_blog_for_user
* @method null|string|\WP_Post get_adjacent_post (bool $in_same_term = false, array|string $excluded_terms = '', bool $previous = true, string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/get_adjacent_post
* @method string get_adjacent_post_link (string $format, string $link, bool $in_same_term = false, array|string $excluded_terms = '', bool $previous = true, string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/get_adjacent_post_link
* @method string|void get_adjacent_post_rel_link (string $title = '%title', bool $in_same_term = false, array|string $excluded_terms = '', bool $previous = true, string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/get_adjacent_post_rel_link
* @method void get_admin_page_parent ($parent = '') https://developer.wordpress.org/reference/functions/get_admin_page_parent
* @method void get_admin_page_title () https://developer.wordpress.org/reference/functions/get_admin_page_title
* @method string get_admin_url (int $blog_id = NULL, string $path = '', string $scheme = 'admin') https://developer.wordpress.org/reference/functions/get_admin_url
* @method array|bool get_admin_users_for_domain (string $domain = '', string $path = '') https://developer.wordpress.org/reference/functions/get_admin_users_for_domain
* @method array get_alloptions () https://developer.wordpress.org/reference/functions/get_alloptions
* @method \stdClass get_alloptions_110 () https://developer.wordpress.org/reference/functions/get_alloptions_110
* @method array get_allowed_http_origins () https://developer.wordpress.org/reference/functions/get_allowed_http_origins
* @method array get_allowed_mime_types (int|\WP_User $user = NULL) https://developer.wordpress.org/reference/functions/get_allowed_mime_types
* @method array get_allowed_themes () https://developer.wordpress.org/reference/functions/get_allowed_themes
* @method object get_all_category_ids () https://developer.wordpress.org/reference/functions/get_all_category_ids
* @method array get_all_user_settings () https://developer.wordpress.org/reference/functions/get_all_user_settings
* @method array get_ancestors (int $object_id = 0, string $object_type = '', string $resource_type = '') https://developer.wordpress.org/reference/functions/get_ancestors
* @method int|array get_approved_comments (int $post_id, array $args = []) https://developer.wordpress.org/reference/functions/get_approved_comments
* @method string|null get_archives (string $type = '', string $limit = '', string $format = 'html', string $before = '', string $after = '', bool $show_post_count = false) https://developer.wordpress.org/reference/functions/get_archives
* @method string get_archives_link (string $url, string $text, string $format = 'html', string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/get_archives_link
* @method void get_archive_template () https://developer.wordpress.org/reference/functions/get_archive_template
* @method array get_attached_media (string $type, int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/get_attached_media
* @method array get_attachment_fields_to_edit (\WP_Post $post, array $errors = NULL) https://developer.wordpress.org/reference/functions/get_attachment_fields_to_edit
* @method bool|string get_attachment_icon (int $id = 0, bool $fullsize = false, array $max_dims = false) https://developer.wordpress.org/reference/functions/get_attachment_icon
* @method array get_attachment_icon_src (int $id = 0, bool $fullsize = false) https://developer.wordpress.org/reference/functions/get_attachment_icon_src
* @method bool|string get_attachment_innerHTML (int $id = 0, bool $fullsize = false, array $max_dims = false) https://developer.wordpress.org/reference/functions/get_attachment_innerHTML
* @method string get_attachment_link (int|object $post = NULL, bool $leavename = false) https://developer.wordpress.org/reference/functions/get_attachment_link
* @method array get_attachment_taxonomies (int|array|object $attachment, string $output = 'names') https://developer.wordpress.org/reference/functions/get_attachment_taxonomies
* @method void get_attachment_template () https://developer.wordpress.org/reference/functions/get_attachment_template
* @method string get_author_feed_link (int $author_id, string $feed = '') https://developer.wordpress.org/reference/functions/get_author_feed_link
* @method string|null get_author_link (bool $echo, int $author_id, string $author_nicename = '') https://developer.wordpress.org/reference/functions/get_author_link
* @method string get_author_name (int $auth_id = false) https://developer.wordpress.org/reference/functions/get_author_name
* @method string get_author_posts_url (int $author_id, string $author_nicename = '') https://developer.wordpress.org/reference/functions/get_author_posts_url
* @method string get_author_rss_link (bool $echo = false, int $author_id = 1) https://developer.wordpress.org/reference/functions/get_author_rss_link
* @method void get_author_template () https://developer.wordpress.org/reference/functions/get_author_template
* @method array get_author_user_ids () https://developer.wordpress.org/reference/functions/get_author_user_ids
* @method int get_autotoggle (int $id = 0) https://developer.wordpress.org/reference/functions/get_autotoggle
* @method void get_available_languages ($dir = NULL) https://developer.wordpress.org/reference/functions/get_available_languages
* @method bool|string get_avatar (mixed $id_or_email, int $size = 96, string $default = '', string $alt = '', array $args = NULL) https://developer.wordpress.org/reference/functions/get_avatar
* @method array get_avatar_data (mixed $id_or_email, array $args = NULL) https://developer.wordpress.org/reference/functions/get_avatar_data
* @method bool|string get_avatar_url (mixed $id_or_email, array $args = NULL) https://developer.wordpress.org/reference/functions/get_avatar_url
* @method string get_background_color () https://developer.wordpress.org/reference/functions/get_background_color
* @method string get_background_image () https://developer.wordpress.org/reference/functions/get_background_image
* @method string get_blogaddress_by_domain (string $domain, string $path) https://developer.wordpress.org/reference/functions/get_blogaddress_by_domain
* @method string get_blogaddress_by_id (int $blog_id) https://developer.wordpress.org/reference/functions/get_blogaddress_by_id
* @method string get_blogaddress_by_name (string $blogname) https://developer.wordpress.org/reference/functions/get_blogaddress_by_name
* @method void get_bloginfo ($show = '', $filter = 'raw') https://developer.wordpress.org/reference/functions/get_bloginfo
* @method void get_bloginfo_rss ($show = '') https://developer.wordpress.org/reference/functions/get_bloginfo_rss
* @method array get_blogs_of_user (int $user_id, bool $all = false) https://developer.wordpress.org/reference/functions/get_blogs_of_user
* @method int get_blog_count (int|null $network_id = NULL) https://developer.wordpress.org/reference/functions/get_blog_count
* @method \WP_Site|bool get_blog_details (int|string|array $fields = NULL, bool $get_all = true) https://developer.wordpress.org/reference/functions/get_blog_details
* @method int get_blog_id_from_url (string $domain, string $path = '/') https://developer.wordpress.org/reference/functions/get_blog_id_from_url
* @method void get_blog_list (int $start = 0, int $num = 10, string $deprecated = '') https://developer.wordpress.org/reference/functions/get_blog_list
* @method mixed get_blog_option (int $id, string $option, mixed $default = false) https://developer.wordpress.org/reference/functions/get_blog_option
* @method string get_blog_permalink (int $blog_id, int $post_id) https://developer.wordpress.org/reference/functions/get_blog_permalink
* @method \WP_Post|null get_blog_post (int $blog_id, int $post_id) https://developer.wordpress.org/reference/functions/get_blog_post
* @method bool|string|null get_blog_status (int $id, string $pref) https://developer.wordpress.org/reference/functions/get_blog_status
* @method array get_body_class (string|array $class = '') https://developer.wordpress.org/reference/functions/get_body_class
* @method void get_bookmark ($bookmark, $output = NULL, $filter = 'raw') https://developer.wordpress.org/reference/functions/get_bookmark
* @method array get_bookmarks (string|array $args = '') https://developer.wordpress.org/reference/functions/get_bookmarks
* @method string|\WP_Error get_bookmark_field (string $field, int $bookmark, string $context = 'display') https://developer.wordpress.org/reference/functions/get_bookmark_field
* @method null|array get_boundary_post (bool $in_same_term = false, array|string $excluded_terms = '', bool $start = true, string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/get_boundary_post
* @method string get_boundary_post_rel_link (string $title = '%title', bool $in_same_cat = false, string $excluded_categories = '', bool $start = true) https://developer.wordpress.org/reference/functions/get_boundary_post_rel_link
* @method array get_broken_themes () https://developer.wordpress.org/reference/functions/get_broken_themes
* @method string|void get_calendar (bool $initial = true, bool $echo = true) https://developer.wordpress.org/reference/functions/get_calendar
* @method string get_cancel_comment_reply_link (string $text = '') https://developer.wordpress.org/reference/functions/get_cancel_comment_reply_link
* @method void get_categories ($args = '') https://developer.wordpress.org/reference/functions/get_categories
* @method object|array|\WP_Error|null get_category (int|object $category, string $output = NULL, string $filter = 'raw') https://developer.wordpress.org/reference/functions/get_category
* @method \WP_Term|array|\WP_Error|null get_category_by_path (string $category_path, bool $full_match = true, string $output = NULL) https://developer.wordpress.org/reference/functions/get_category_by_path
* @method object get_category_by_slug (string $slug) https://developer.wordpress.org/reference/functions/get_category_by_slug
* @method string get_category_children (int $id, string $before = '/', string $after = '', array $visited = []) https://developer.wordpress.org/reference/functions/get_category_children
* @method string get_category_feed_link (int $cat_id, string $feed = '') https://developer.wordpress.org/reference/functions/get_category_feed_link
* @method void get_category_link ($category) https://developer.wordpress.org/reference/functions/get_category_link
* @method string|\WP_Error get_category_parents (int $id, bool $link = false, string $separator = '/', bool $nicename = false, array $deprecated = []) https://developer.wordpress.org/reference/functions/get_category_parents
* @method string get_category_rss_link (bool $echo = false, int $cat_ID = 1) https://developer.wordpress.org/reference/functions/get_category_rss_link
* @method void get_category_template () https://developer.wordpress.org/reference/functions/get_category_template
* @method object get_category_to_edit (int $id) https://developer.wordpress.org/reference/functions/get_category_to_edit
* @method string get_catname (int $cat_ID) https://developer.wordpress.org/reference/functions/get_catname
* @method int get_cat_ID (string $cat_name) https://developer.wordpress.org/reference/functions/get_cat_ID
* @method string get_cat_name (int $cat_id) https://developer.wordpress.org/reference/functions/get_cat_name
* @method string get_clean_basedomain () https://developer.wordpress.org/reference/functions/get_clean_basedomain
* @method mixed get_cli_args (string $param, bool $required = false) https://developer.wordpress.org/reference/functions/get_cli_args
* @method void get_column_headers ($screen) https://developer.wordpress.org/reference/functions/get_column_headers
* @method \WP_Comment|array|null get_comment (\WP_Comment|string|int $comment = NULL, string $output = NULL) https://developer.wordpress.org/reference/functions/get_comment
* @method array get_commentdata (int $comment_ID, int $no_cache = 0, bool $include_unapproved = false) https://developer.wordpress.org/reference/functions/get_commentdata
* @method int|array get_comments (string|array $args = '') https://developer.wordpress.org/reference/functions/get_comments
* @method string get_comments_link (int|\WP_Post $post_id = 0) https://developer.wordpress.org/reference/functions/get_comments_link
* @method string|int get_comments_number (int|\WP_Post $post_id = 0) https://developer.wordpress.org/reference/functions/get_comments_number
* @method void get_comments_number_text (string $zero = false, string $one = false, string $more = false) https://developer.wordpress.org/reference/functions/get_comments_number_text
* @method string get_comments_pagenum_link (int $pagenum = 1, int $max_page = 0) https://developer.wordpress.org/reference/functions/get_comments_pagenum_link
* @method string get_comments_popup_template () https://developer.wordpress.org/reference/functions/get_comments_popup_template
* @method void get_comment_author ($comment_ID = 0) https://developer.wordpress.org/reference/functions/get_comment_author
* @method string get_comment_author_email (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/get_comment_author_email
* @method void get_comment_author_email_link ($linktext = '', $before = '', $after = '', $comment = NULL) https://developer.wordpress.org/reference/functions/get_comment_author_email_link
* @method string get_comment_author_IP (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/get_comment_author_IP
* @method string get_comment_author_link (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/get_comment_author_link
* @method string get_comment_author_rss () https://developer.wordpress.org/reference/functions/get_comment_author_rss
* @method string get_comment_author_url (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/get_comment_author_url
* @method string get_comment_author_url_link (string $linktext = '', string $before = '', string $after = '', int|\WP_Comment $comment = 0) https://developer.wordpress.org/reference/functions/get_comment_author_url_link
* @method array get_comment_class (string|array $class = '', int|\WP_Comment $comment_id = NULL, int|\WP_Post $post_id = NULL) https://developer.wordpress.org/reference/functions/get_comment_class
* @method array get_comment_count (int $post_id = 0) https://developer.wordpress.org/reference/functions/get_comment_count
* @method string get_comment_date (string $d = '', int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/get_comment_date
* @method string get_comment_excerpt (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/get_comment_excerpt
* @method bool|string get_comment_guid (int|\WP_Comment $comment_id = NULL) https://developer.wordpress.org/reference/functions/get_comment_guid
* @method int get_comment_ID () https://developer.wordpress.org/reference/functions/get_comment_ID
* @method string get_comment_id_fields (int $id = 0) https://developer.wordpress.org/reference/functions/get_comment_id_fields
* @method string get_comment_link (\WP_Comment|int|null $comment = NULL, array $args = []) https://developer.wordpress.org/reference/functions/get_comment_link
* @method mixed get_comment_meta (int $comment_id, string $key = '', bool $single = false) https://developer.wordpress.org/reference/functions/get_comment_meta
* @method int get_comment_pages_count (array $comments = NULL, int $per_page = NULL, bool $threaded = NULL) https://developer.wordpress.org/reference/functions/get_comment_pages_count
* @method void|bool|string get_comment_reply_link (array $args = [], int|\WP_Comment $comment = NULL, int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_comment_reply_link
* @method array get_comment_statuses () https://developer.wordpress.org/reference/functions/get_comment_statuses
* @method string get_comment_text (int|\WP_Comment $comment_ID = 0, array $args = []) https://developer.wordpress.org/reference/functions/get_comment_text
* @method string get_comment_time (string $d = '', bool $gmt = false, bool $translate = true) https://developer.wordpress.org/reference/functions/get_comment_time
* @method \WP_Comment|bool get_comment_to_edit (int $id) https://developer.wordpress.org/reference/functions/get_comment_to_edit
* @method string get_comment_type (int|\WP_Comment $comment_ID = 0) https://developer.wordpress.org/reference/functions/get_comment_type
* @method array get_compat_media_markup (int $attachment_id, array $args = NULL) https://developer.wordpress.org/reference/functions/get_compat_media_markup
* @method bool|array get_core_checksums (string $version, string $locale) https://developer.wordpress.org/reference/functions/get_core_checksums
* @method array|bool get_core_updates (array $options = []) https://developer.wordpress.org/reference/functions/get_core_updates
* @method bool|\WP_User get_currentuserinfo () https://developer.wordpress.org/reference/functions/get_currentuserinfo
* @method int get_current_blog_id () https://developer.wordpress.org/reference/functions/get_current_blog_id
* @method int get_current_network_id () https://developer.wordpress.org/reference/functions/get_current_network_id
* @method \WP_Screen|null get_current_screen () https://developer.wordpress.org/reference/functions/get_current_screen
* @method \WP_Network get_current_site () https://developer.wordpress.org/reference/functions/get_current_site
* @method object get_current_site_name (object $current_site) https://developer.wordpress.org/reference/functions/get_current_site_name
* @method string get_current_theme () https://developer.wordpress.org/reference/functions/get_current_theme
* @method int get_current_user_id () https://developer.wordpress.org/reference/functions/get_current_user_id
* @method object get_custom_header () https://developer.wordpress.org/reference/functions/get_custom_header
* @method string get_custom_header_markup () https://developer.wordpress.org/reference/functions/get_custom_header_markup
* @method string get_custom_logo (int $blog_id = 0) https://developer.wordpress.org/reference/functions/get_custom_logo
* @method void get_dashboard_blog () https://developer.wordpress.org/reference/functions/get_dashboard_blog
* @method string get_dashboard_url (int $user_id = 0, string $path = '', string $scheme = 'admin') https://developer.wordpress.org/reference/functions/get_dashboard_url
* @method string get_date_from_gmt (string $string, string $format = 'Y-m-d H:i:s') https://developer.wordpress.org/reference/functions/get_date_from_gmt
* @method void get_date_template () https://developer.wordpress.org/reference/functions/get_date_template
* @method string get_day_link (bool|int $year, bool|int $month, bool|int $day) https://developer.wordpress.org/reference/functions/get_day_link
* @method string get_default_comment_status (string $post_type = 'post', string $comment_type = 'comment') https://developer.wordpress.org/reference/functions/get_default_comment_status
* @method void get_default_feed () https://developer.wordpress.org/reference/functions/get_default_feed
* @method \stdClass get_default_link_to_edit () https://developer.wordpress.org/reference/functions/get_default_link_to_edit
* @method \WP_Post get_default_page_to_edit () https://developer.wordpress.org/reference/functions/get_default_page_to_edit
* @method string|void get_delete_post_link (int|\WP_Post $id = 0, string $deprecated = '', bool $force_delete = false) https://developer.wordpress.org/reference/functions/get_delete_post_link
* @method int get_dirsize (string $directory) https://developer.wordpress.org/reference/functions/get_dirsize
* @method array get_dropins () https://developer.wordpress.org/reference/functions/get_dropins
* @method array|bool get_editable_authors (int $user_id) https://developer.wordpress.org/reference/functions/get_editable_authors
* @method array get_editable_roles () https://developer.wordpress.org/reference/functions/get_editable_roles
* @method array get_editable_user_ids (int $user_id, bool $exclude_zeros = true, $post_type = 'post') https://developer.wordpress.org/reference/functions/get_editable_user_ids
* @method array get_editor_stylesheets () https://developer.wordpress.org/reference/functions/get_editor_stylesheets
* @method string|void get_edit_bookmark_link (int|\stdClass $link = 0) https://developer.wordpress.org/reference/functions/get_edit_bookmark_link
* @method string|void get_edit_comment_link (int|\WP_Comment $comment_id = 0) https://developer.wordpress.org/reference/functions/get_edit_comment_link
* @method string|null get_edit_post_link (int|\WP_Post $id = 0, string $context = 'display') https://developer.wordpress.org/reference/functions/get_edit_post_link
* @method string get_edit_profile_url (int $user_id = 0, string $scheme = 'admin') https://developer.wordpress.org/reference/functions/get_edit_profile_url
* @method string get_edit_tag_link (int $tag_id, string $taxonomy = 'post_tag') https://developer.wordpress.org/reference/functions/get_edit_tag_link
* @method string|null get_edit_term_link (int $term_id, string $taxonomy = '', string $object_type = '') https://developer.wordpress.org/reference/functions/get_edit_term_link
* @method string get_edit_user_link (int $user_id = NULL) https://developer.wordpress.org/reference/functions/get_edit_user_link
* @method void get_embed_template () https://developer.wordpress.org/reference/functions/get_embed_template
* @method string get_feed_link (string $feed = '') https://developer.wordpress.org/reference/functions/get_feed_link
* @method void get_file ($path) https://developer.wordpress.org/reference/functions/get_file
* @method void get_filesystem_method ($args = [], $context = '', $allow_relaxed_file_ownership = false) https://developer.wordpress.org/reference/functions/get_filesystem_method
* @method void get_file_data ($file, $default_headers, $context = '') https://developer.wordpress.org/reference/functions/get_file_data
* @method string get_file_description (string $file) https://developer.wordpress.org/reference/functions/get_file_description
* @method void get_footer (string $name = NULL) https://developer.wordpress.org/reference/functions/get_footer
* @method void get_front_page_template () https://developer.wordpress.org/reference/functions/get_front_page_template
* @method string get_gmt_from_date (string $string, string $format = 'Y-m-d H:i:s') https://developer.wordpress.org/reference/functions/get_gmt_from_date
* @method void get_header ($name = NULL) https://developer.wordpress.org/reference/functions/get_header
* @method string|bool get_header_image () https://developer.wordpress.org/reference/functions/get_header_image
* @method string get_header_image_tag (array $attr = []) https://developer.wordpress.org/reference/functions/get_header_image_tag
* @method string get_header_textcolor () https://developer.wordpress.org/reference/functions/get_header_textcolor
* @method array get_header_video_settings () https://developer.wordpress.org/reference/functions/get_header_video_settings
* @method string|bool get_header_video_url () https://developer.wordpress.org/reference/functions/get_header_video_url
* @method array get_hidden_columns (string|\WP_Screen $screen) https://developer.wordpress.org/reference/functions/get_hidden_columns
* @method array get_hidden_meta_boxes (string|\WP_Screen $screen) https://developer.wordpress.org/reference/functions/get_hidden_meta_boxes
* @method string get_home_path () https://developer.wordpress.org/reference/functions/get_home_path
* @method void get_home_template () https://developer.wordpress.org/reference/functions/get_home_template
* @method string get_home_url (int $blog_id = NULL, string $path = '', string|null $scheme = NULL) https://developer.wordpress.org/reference/functions/get_home_url
* @method string get_html_split_regex () https://developer.wordpress.org/reference/functions/get_html_split_regex
* @method string get_http_origin () https://developer.wordpress.org/reference/functions/get_http_origin
* @method int|null get_id_from_blogname (string $slug) https://developer.wordpress.org/reference/functions/get_id_from_blogname
* @method string get_image_send_to_editor (int $id, string $caption, string $title, string $align, string $url = '', bool|string $rel = false, string|array $size = 'medium', string $alt = '') https://developer.wordpress.org/reference/functions/get_image_send_to_editor
* @method void get_image_tag ($id, $alt, $title, $align, $size = 'medium') https://developer.wordpress.org/reference/functions/get_image_tag
* @method void get_importers () https://developer.wordpress.org/reference/functions/get_importers
* @method string get_index_rel_link () https://developer.wordpress.org/reference/functions/get_index_rel_link
* @method void get_index_template () https://developer.wordpress.org/reference/functions/get_index_template
* @method void get_inline_data (\WP_Post $post) https://developer.wordpress.org/reference/functions/get_inline_data
* @method array get_intermediate_image_sizes () https://developer.wordpress.org/reference/functions/get_intermediate_image_sizes
* @method void get_language_attributes (string $doctype = 'html') https://developer.wordpress.org/reference/functions/get_language_attributes
* @method string|bool get_lastcommentmodified (string $timezone = 'server') https://developer.wordpress.org/reference/functions/get_lastcommentmodified
* @method array get_last_updated (mixed $deprecated = '', int $start = 0, int $quantity = 40) https://developer.wordpress.org/reference/functions/get_last_updated
* @method object|array get_link (int $bookmark_id, string $output = NULL, string $filter = 'raw') https://developer.wordpress.org/reference/functions/get_link
* @method string get_linkcatname (int $id = 0) https://developer.wordpress.org/reference/functions/get_linkcatname
* @method array get_linkobjects (int $category = 0, string $orderby = 'name', int $limit = 0) https://developer.wordpress.org/reference/functions/get_linkobjects
* @method array get_linkobjectsbyname (string $cat_name = 'noname', string $orderby = 'name', int $limit = -1) https://developer.wordpress.org/reference/functions/get_linkobjectsbyname
* @method mixed get_linkrating (object $link) https://developer.wordpress.org/reference/functions/get_linkrating
* @method null|string get_links (int $category = -1, string $before = '', string $after = '<br />', string $between = ' ', bool $show_images = true, string $orderby = 'name', bool $show_description = true, bool $show_rating = false, int $limit = -1, int $show_updated = 1, bool $echo = true) https://developer.wordpress.org/reference/functions/get_links
* @method void get_linksbyname (string $cat_name = 'noname', string $before = '', string $after = '<br />', string $between = ' ', bool $show_images = true, string $orderby = 'id', bool $show_description = true, bool $show_rating = false, int $limit = -1, int $show_updated = 0) https://developer.wordpress.org/reference/functions/get_linksbyname
* @method void get_linksbyname_withrating (string $cat_name = 'noname', string $before = '', string $after = '<br />', string $between = ' ', bool $show_images = true, string $orderby = 'id', bool $show_description = true, int $limit = -1, int $show_updated = 0) https://developer.wordpress.org/reference/functions/get_linksbyname_withrating
* @method void get_links_list (string $order = 'name') https://developer.wordpress.org/reference/functions/get_links_list
* @method void get_links_withrating (int $category = -1, string $before = '', string $after = '<br />', string $between = ' ', bool $show_images = true, string $orderby = 'id', bool $show_description = true, int $limit = -1, int $show_updated = 0) https://developer.wordpress.org/reference/functions/get_links_withrating
* @method object get_link_to_edit (int|\stdClass $link) https://developer.wordpress.org/reference/functions/get_link_to_edit
* @method void get_locale () https://developer.wordpress.org/reference/functions/get_locale
* @method void get_locale_stylesheet_uri () https://developer.wordpress.org/reference/functions/get_locale_stylesheet_uri
* @method int get_main_network_id () https://developer.wordpress.org/reference/functions/get_main_network_id
* @method int get_main_site_id (int $network_id = NULL) https://developer.wordpress.org/reference/functions/get_main_site_id
* @method array get_media_embedded_in_content (string $content, array $types = NULL) https://developer.wordpress.org/reference/functions/get_media_embedded_in_content
* @method string get_media_item (int $attachment_id, string|array $args = NULL) https://developer.wordpress.org/reference/functions/get_media_item
* @method string get_media_items (int $post_id, array $errors) https://developer.wordpress.org/reference/functions/get_media_items
* @method mixed get_metadata (string $meta_type, int $object_id, string $meta_key = '', bool $single = false) https://developer.wordpress.org/reference/functions/get_metadata
* @method object|bool get_metadata_by_mid (string $meta_type, int $meta_id) https://developer.wordpress.org/reference/functions/get_metadata_by_mid
* @method array get_meta_sql (array $meta_query, string $type, string $primary_table, string $primary_id_column, object $context = NULL) https://developer.wordpress.org/reference/functions/get_meta_sql
* @method string get_month_link (bool|int $year, bool|int $month) https://developer.wordpress.org/reference/functions/get_month_link
* @method array get_most_active_blogs (int $num = 10, bool $display = true) https://developer.wordpress.org/reference/functions/get_most_active_blogs
* @method array get_most_recent_post_of_user (int $user_id) https://developer.wordpress.org/reference/functions/get_most_recent_post_of_user
* @method array get_mu_plugins () https://developer.wordpress.org/reference/functions/get_mu_plugins
* @method array get_nav_menu_locations () https://developer.wordpress.org/reference/functions/get_nav_menu_locations
* @method \WP_Network|null get_network (\WP_Network|int|null $network = NULL) https://developer.wordpress.org/reference/functions/get_network
* @method array|int get_networks (string|array $args = []) https://developer.wordpress.org/reference/functions/get_networks
* @method \WP_Network|bool get_network_by_path (string $domain, string $path, int|null $segments = NULL) https://developer.wordpress.org/reference/functions/get_network_by_path
* @method mixed get_network_option (int $network_id, string $option, mixed $default = false) https://developer.wordpress.org/reference/functions/get_network_option
* @method string|void get_next_comments_link (string $label = '', int $max_page = 0) https://developer.wordpress.org/reference/functions/get_next_comments_link
* @method null|string|\WP_Post get_next_post (bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/get_next_post
* @method string|void get_next_posts_link (string $label = NULL, int $max_page = 0) https://developer.wordpress.org/reference/functions/get_next_posts_link
* @method string|void get_next_posts_page_link (int $max_page = 0) https://developer.wordpress.org/reference/functions/get_next_posts_page_link
* @method string get_next_post_link (string $format = '%link &raquo;', string $link = '%title', bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/get_next_post_link
* @method void get_nonauthor_user_ids () https://developer.wordpress.org/reference/functions/get_nonauthor_user_ids
* @method int get_num_queries () https://developer.wordpress.org/reference/functions/get_num_queries
* @method \WP_Error|array get_objects_in_term (int|array $term_ids, string|array $taxonomies, array|string $args = []) https://developer.wordpress.org/reference/functions/get_objects_in_term
* @method array get_object_taxonomies (array|string|\WP_Post $object, string $output = 'names') https://developer.wordpress.org/reference/functions/get_object_taxonomies
* @method bool|array|\WP_Error get_object_term_cache (int $id, string $taxonomy) https://developer.wordpress.org/reference/functions/get_object_term_cache
* @method string get_oembed_endpoint_url (string $permalink = '', string $format = 'json') https://developer.wordpress.org/reference/functions/get_oembed_endpoint_url
* @method array|bool get_oembed_response_data (\WP_Post|int $post, int $width) https://developer.wordpress.org/reference/functions/get_oembed_response_data
* @method array get_oembed_response_data_rich (array $data, \WP_Post $post, int $width, int $height) https://developer.wordpress.org/reference/functions/get_oembed_response_data_rich
* @method void get_option ($option, $default = false) https://developer.wordpress.org/reference/functions/get_option
* @method array get_others_drafts (int $user_id) https://developer.wordpress.org/reference/functions/get_others_drafts
* @method array get_others_pending (int $user_id) https://developer.wordpress.org/reference/functions/get_others_pending
* @method array get_others_unpublished_posts (int $user_id, string $type = 'any') https://developer.wordpress.org/reference/functions/get_others_unpublished_posts
* @method string get_paged_template () https://developer.wordpress.org/reference/functions/get_paged_template
* @method string get_pagenum_link (int $pagenum = 1, bool $escape = true) https://developer.wordpress.org/reference/functions/get_pagenum_link
* @method string get_page_link (int|\WP_Post $post = false, bool $leavename = false, bool $sample = false) https://developer.wordpress.org/reference/functions/get_page_link
* @method int|null get_page_of_comment (int $comment_ID, array $args = []) https://developer.wordpress.org/reference/functions/get_page_of_comment
* @method void get_page_template () https://developer.wordpress.org/reference/functions/get_page_template
* @method array get_page_templates (\WP_Post|null $post = NULL, string $post_type = 'page') https://developer.wordpress.org/reference/functions/get_page_templates
* @method string|bool get_page_template_slug (int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_page_template_slug
* @method string get_parent_post_rel_link (string $title = '%title') https://developer.wordpress.org/reference/functions/get_parent_post_rel_link
* @method string get_parent_theme_file_path (string $file = '') https://developer.wordpress.org/reference/functions/get_parent_theme_file_path
* @method string get_parent_theme_file_uri (string $file = '') https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri
* @method string|\WP_Error get_password_reset_key (\WP_User $user) https://developer.wordpress.org/reference/functions/get_password_reset_key
* @method int|array get_pending_comments_num (int|array $post_id) https://developer.wordpress.org/reference/functions/get_pending_comments_num
* @method string|bool get_permalink (int|\WP_Post $post = 0, bool $leavename = false) https://developer.wordpress.org/reference/functions/get_permalink
* @method array get_plugins (string $plugin_folder = '') https://developer.wordpress.org/reference/functions/get_plugins
* @method void get_plugin_data ($plugin_file, $markup = true, $translate = true) https://developer.wordpress.org/reference/functions/get_plugin_data
* @method array get_plugin_files (string $plugin) https://developer.wordpress.org/reference/functions/get_plugin_files
* @method string|null get_plugin_page_hook (string $plugin_page, string $parent_page) https://developer.wordpress.org/reference/functions/get_plugin_page_hook
* @method void get_plugin_page_hookname (string $plugin_page, string $parent_page) https://developer.wordpress.org/reference/functions/get_plugin_page_hookname
* @method array get_plugin_updates () https://developer.wordpress.org/reference/functions/get_plugin_updates
* @method void get_postdata ($postid) https://developer.wordpress.org/reference/functions/get_postdata
* @method string get_posts_nav_link (string|array $args = []) https://developer.wordpress.org/reference/functions/get_posts_nav_link
* @method void get_post_class ($class = '', $post_id = NULL) https://developer.wordpress.org/reference/functions/get_post_class
* @method string get_post_comments_feed_link (int $post_id = 0, string $feed = '') https://developer.wordpress.org/reference/functions/get_post_comments_feed_link
* @method string|bool get_post_embed_html (int $width, int $height, int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_post_embed_html
* @method string|bool get_post_embed_url (int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_post_embed_url
* @method void get_post_format ($post = NULL) https://developer.wordpress.org/reference/functions/get_post_format
* @method string|\WP_Error|bool get_post_format_link (string $format) https://developer.wordpress.org/reference/functions/get_post_format_link
* @method array get_post_format_slugs () https://developer.wordpress.org/reference/functions/get_post_format_slugs
* @method string get_post_format_string (string $slug) https://developer.wordpress.org/reference/functions/get_post_format_string
* @method array get_post_format_strings () https://developer.wordpress.org/reference/functions/get_post_format_strings
* @method array get_post_galleries (int|\WP_Post $post, bool $html = true) https://developer.wordpress.org/reference/functions/get_post_galleries
* @method array get_post_galleries_images (int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/get_post_galleries_images
* @method string|array get_post_gallery (int|\WP_Post $post = 0, bool $html = true) https://developer.wordpress.org/reference/functions/get_post_gallery
* @method array get_post_gallery_images (int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/get_post_gallery_images
* @method string|int|bool get_post_modified_time (string $d = 'U', bool $gmt = false, int|\WP_Post $post = NULL, bool $translate = false) https://developer.wordpress.org/reference/functions/get_post_modified_time
* @method string|\WP_Error get_post_permalink (int|\WP_Post $id = 0, bool $leavename = false, bool $sample = false) https://developer.wordpress.org/reference/functions/get_post_permalink
* @method bool|null|string get_post_reply_link (array $args = [], int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_post_reply_link
* @method array get_post_taxonomies (int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/get_post_taxonomies
* @method string|int get_post_thumbnail_id (int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_post_thumbnail_id
* @method string|int|bool get_post_time (string $d = 'U', bool $gmt = false, int|\WP_Post $post = NULL, bool $translate = false) https://developer.wordpress.org/reference/functions/get_post_time
* @method object get_post_to_edit (int $id) https://developer.wordpress.org/reference/functions/get_post_to_edit
* @method string|bool get_post_type_archive_feed_link (string $post_type, string $feed = '') https://developer.wordpress.org/reference/functions/get_post_type_archive_feed_link
* @method string|bool get_post_type_archive_link (string $post_type) https://developer.wordpress.org/reference/functions/get_post_type_archive_link
* @method void get_post_type_archive_template () https://developer.wordpress.org/reference/functions/get_post_type_archive_template
* @method void get_preferred_from_update_core () https://developer.wordpress.org/reference/functions/get_preferred_from_update_core
* @method string|null get_preview_post_link (int|\WP_Post $post = NULL, array $query_args = [], string $preview_link = '') https://developer.wordpress.org/reference/functions/get_preview_post_link
* @method string|void get_previous_comments_link (string $label = '') https://developer.wordpress.org/reference/functions/get_previous_comments_link
* @method null|string|\WP_Post get_previous_post (bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/get_previous_post
* @method string|void get_previous_posts_link (string $label = NULL) https://developer.wordpress.org/reference/functions/get_previous_posts_link
* @method string|void get_previous_posts_page_link () https://developer.wordpress.org/reference/functions/get_previous_posts_page_link
* @method string get_previous_post_link (string $format = '&laquo; %link', string $link = '%title', bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/get_previous_post_link
* @method string get_privacy_policy_url () https://developer.wordpress.org/reference/functions/get_privacy_policy_url
* @method string get_profile (string $field, bool|int $user = false) https://developer.wordpress.org/reference/functions/get_profile
* @method object get_queried_object () https://developer.wordpress.org/reference/functions/get_queried_object
* @method int get_queried_object_id () https://developer.wordpress.org/reference/functions/get_queried_object_id
* @method void get_query_template ($type, $templates = []) https://developer.wordpress.org/reference/functions/get_query_template
* @method void get_query_var ($var, $default = '') https://developer.wordpress.org/reference/functions/get_query_var
* @method string get_random_header_image () https://developer.wordpress.org/reference/functions/get_random_header_image
* @method string get_raw_theme_root (string $stylesheet_or_template, bool $skip_cache = false) https://developer.wordpress.org/reference/functions/get_raw_theme_root
* @method string get_real_file_to_edit (string $file) https://developer.wordpress.org/reference/functions/get_real_file_to_edit
* @method mixed get_registered_metadata (string $object_type, int $object_id, string $meta_key = '') https://developer.wordpress.org/reference/functions/get_registered_metadata
* @method array get_registered_meta_keys (string $object_type) https://developer.wordpress.org/reference/functions/get_registered_meta_keys
* @method array get_registered_nav_menus () https://developer.wordpress.org/reference/functions/get_registered_nav_menus
* @method array get_registered_settings () https://developer.wordpress.org/reference/functions/get_registered_settings
* @method string get_rest_url (int $blog_id = NULL, string $path = '/', string $scheme = 'rest') https://developer.wordpress.org/reference/functions/get_rest_url
* @method \WP_Role|null get_role (string $role) https://developer.wordpress.org/reference/functions/get_role
* @method bool get_rss (string $url, int $num_items = 5) https://developer.wordpress.org/reference/functions/get_rss
* @method string get_screen_icon () https://developer.wordpress.org/reference/functions/get_screen_icon
* @method string get_search_comments_feed_link (string $search_query = '', string $feed = '') https://developer.wordpress.org/reference/functions/get_search_comments_feed_link
* @method string get_search_feed_link (string $search_query = '', string $feed = '') https://developer.wordpress.org/reference/functions/get_search_feed_link
* @method void get_search_form ($echo = true) https://developer.wordpress.org/reference/functions/get_search_form
* @method string get_search_link (string $query = '') https://developer.wordpress.org/reference/functions/get_search_link
* @method string get_search_query (bool $escaped = true) https://developer.wordpress.org/reference/functions/get_search_query
* @method void get_search_template () https://developer.wordpress.org/reference/functions/get_search_template
* @method string get_settings (string $option) https://developer.wordpress.org/reference/functions/get_settings
* @method void get_settings_errors ($setting = '', $sanitize = false) https://developer.wordpress.org/reference/functions/get_settings_errors
* @method string get_shortcode_atts_regex () https://developer.wordpress.org/reference/functions/get_shortcode_atts_regex
* @method string get_shortcode_regex (array $tagnames = NULL) https://developer.wordpress.org/reference/functions/get_shortcode_regex
* @method void get_shortcut_link () https://developer.wordpress.org/reference/functions/get_shortcut_link
* @method void get_sidebar (string $name = NULL) https://developer.wordpress.org/reference/functions/get_sidebar
* @method void get_single_template () https://developer.wordpress.org/reference/functions/get_single_template
* @method void get_singular_template () https://developer.wordpress.org/reference/functions/get_singular_template
* @method \WP_Site|null get_site (\WP_Site|int|null $site = NULL) https://developer.wordpress.org/reference/functions/get_site
* @method array|int get_sites (string|array $args = []) https://developer.wordpress.org/reference/functions/get_sites
* @method void get_sitestats () https://developer.wordpress.org/reference/functions/get_sitestats
* @method void get_site_allowed_themes () https://developer.wordpress.org/reference/functions/get_site_allowed_themes
* @method \WP_Site|bool get_site_by_path (string $domain, string $path, int|null $segments = NULL) https://developer.wordpress.org/reference/functions/get_site_by_path
* @method string get_site_icon_url (int $size = 512, string $url = '', int $blog_id = 0) https://developer.wordpress.org/reference/functions/get_site_icon_url
* @method mixed get_site_option (string $option, mixed $default = false, bool $deprecated = true) https://developer.wordpress.org/reference/functions/get_site_option
* @method string get_site_screen_help_sidebar_content () https://developer.wordpress.org/reference/functions/get_site_screen_help_sidebar_content
* @method array get_site_screen_help_tab_args () https://developer.wordpress.org/reference/functions/get_site_screen_help_tab_args
* @method mixed get_site_transient (string $transient) https://developer.wordpress.org/reference/functions/get_site_transient
* @method string get_site_url (int $blog_id = NULL, string $path = '', string $scheme = NULL) https://developer.wordpress.org/reference/functions/get_site_url
* @method int get_space_allowed () https://developer.wordpress.org/reference/functions/get_space_allowed
* @method int get_space_used () https://developer.wordpress.org/reference/functions/get_space_used
* @method string get_status_header_desc (int $code) https://developer.wordpress.org/reference/functions/get_status_header_desc
* @method string get_stylesheet () https://developer.wordpress.org/reference/functions/get_stylesheet
* @method string get_stylesheet_directory () https://developer.wordpress.org/reference/functions/get_stylesheet_directory
* @method string get_stylesheet_directory_uri () https://developer.wordpress.org/reference/functions/get_stylesheet_directory_uri
* @method string get_stylesheet_uri () https://developer.wordpress.org/reference/functions/get_stylesheet_uri
* @method array get_subdirectory_reserved_names () https://developer.wordpress.org/reference/functions/get_subdirectory_reserved_names
* @method string get_submit_button (string $text = '', string $type = 'primary large', string $name = 'submit', bool $wrap = true, array|string $other_attributes = '') https://developer.wordpress.org/reference/functions/get_submit_button
* @method array get_super_admins () https://developer.wordpress.org/reference/functions/get_super_admins
* @method \WP_Term|array|\WP_Error|null get_tag (int|\WP_Term|object $tag, string $output = NULL, string $filter = 'raw') https://developer.wordpress.org/reference/functions/get_tag
* @method array get_tags (string|array $args = '') https://developer.wordpress.org/reference/functions/get_tags
* @method string|bool|\WP_Error get_tags_to_edit (int $post_id, string $taxonomy = 'post_tag') https://developer.wordpress.org/reference/functions/get_tags_to_edit
* @method string get_tag_feed_link (int $tag_id, string $feed = '') https://developer.wordpress.org/reference/functions/get_tag_feed_link
* @method string get_tag_link (int|object $tag) https://developer.wordpress.org/reference/functions/get_tag_link
* @method string get_tag_regex (string $tag) https://developer.wordpress.org/reference/functions/get_tag_regex
* @method void get_tag_template () https://developer.wordpress.org/reference/functions/get_tag_template
* @method array get_taxonomies (array $args = [], string $output = 'names', string $operator = 'and') https://developer.wordpress.org/reference/functions/get_taxonomies
* @method array get_taxonomies_for_attachments (string $output = 'names') https://developer.wordpress.org/reference/functions/get_taxonomies_for_attachments
* @method \WP_Taxonomy|bool get_taxonomy (string $taxonomy) https://developer.wordpress.org/reference/functions/get_taxonomy
* @method object get_taxonomy_labels (\WP_Taxonomy $tax) https://developer.wordpress.org/reference/functions/get_taxonomy_labels
* @method void get_taxonomy_template () https://developer.wordpress.org/reference/functions/get_taxonomy_template
* @method array get_tax_sql (array $tax_query, string $primary_table, string $primary_id_column) https://developer.wordpress.org/reference/functions/get_tax_sql
* @method string get_template () https://developer.wordpress.org/reference/functions/get_template
* @method string get_template_directory () https://developer.wordpress.org/reference/functions/get_template_directory
* @method string get_template_directory_uri () https://developer.wordpress.org/reference/functions/get_template_directory_uri
* @method void get_template_part (string $slug, string $name = NULL) https://developer.wordpress.org/reference/functions/get_template_part
* @method string get_temp_dir () https://developer.wordpress.org/reference/functions/get_temp_dir
* @method void get_term ($term, $taxonomy = '', $output = NULL, $filter = 'raw') https://developer.wordpress.org/reference/functions/get_term
* @method void get_terms ($args = [], $deprecated = '') https://developer.wordpress.org/reference/functions/get_terms
* @method string|bool|\WP_Error get_terms_to_edit (int $post_id, string $taxonomy = 'post_tag') https://developer.wordpress.org/reference/functions/get_terms_to_edit
* @method \WP_Term|array|bool get_term_by (string $field, string|int $value, string $taxonomy = '', string $output = NULL, string $filter = 'raw') https://developer.wordpress.org/reference/functions/get_term_by
* @method array|\WP_Error get_term_children (int $term_id, string $taxonomy) https://developer.wordpress.org/reference/functions/get_term_children
* @method string|bool get_term_feed_link (int $term_id, string $taxonomy = 'category', string $feed = '') https://developer.wordpress.org/reference/functions/get_term_feed_link
* @method string|int|null|\WP_Error get_term_field (string $field, int|\WP_Term $term, string $taxonomy = '', string $context = 'display') https://developer.wordpress.org/reference/functions/get_term_field
* @method string|\WP_Error get_term_link (object|int|string $term, string $taxonomy = '') https://developer.wordpress.org/reference/functions/get_term_link
* @method mixed get_term_meta (int $term_id, string $key = '', bool $single = false) https://developer.wordpress.org/reference/functions/get_term_meta
* @method string|\WP_Error get_term_parents_list (int $term_id, string $taxonomy, string|array $args = []) https://developer.wordpress.org/reference/functions/get_term_parents_list
* @method string|int|null|\WP_Error get_term_to_edit (int|object $id, string $taxonomy) https://developer.wordpress.org/reference/functions/get_term_to_edit
* @method array|null get_theme (string $theme) https://developer.wordpress.org/reference/functions/get_theme
* @method array get_themes () https://developer.wordpress.org/reference/functions/get_themes
* @method array get_theme_data (string $theme_file) https://developer.wordpress.org/reference/functions/get_theme_data
* @method array get_theme_feature_list (bool $api = true) https://developer.wordpress.org/reference/functions/get_theme_feature_list
* @method string get_theme_file_path (string $file = '') https://developer.wordpress.org/reference/functions/get_theme_file_path
* @method string get_theme_file_uri (string $file = '') https://developer.wordpress.org/reference/functions/get_theme_file_uri
* @method string get_theme_mod (string $name, bool|string $default = false) https://developer.wordpress.org/reference/functions/get_theme_mod
* @method array|void get_theme_mods () https://developer.wordpress.org/reference/functions/get_theme_mods
* @method string get_theme_root (string $stylesheet_or_template = false) https://developer.wordpress.org/reference/functions/get_theme_root
* @method array|string get_theme_roots () https://developer.wordpress.org/reference/functions/get_theme_roots
* @method string get_theme_root_uri (string $stylesheet_or_template = false, string $theme_root = false) https://developer.wordpress.org/reference/functions/get_theme_root_uri
* @method array get_theme_starter_content () https://developer.wordpress.org/reference/functions/get_theme_starter_content
* @method mixed get_theme_support (string $feature) https://developer.wordpress.org/reference/functions/get_theme_support
* @method array get_theme_updates () https://developer.wordpress.org/reference/functions/get_theme_updates
* @method bool|string get_theme_update_available (\WP_Theme $theme) https://developer.wordpress.org/reference/functions/get_theme_update_available
* @method string get_the_archive_description () https://developer.wordpress.org/reference/functions/get_the_archive_description
* @method string get_the_archive_title () https://developer.wordpress.org/reference/functions/get_the_archive_title
* @method string get_the_attachment_link (int $id = 0, bool $fullsize = false, array $max_dims = false, bool $permalink = false) https://developer.wordpress.org/reference/functions/get_the_attachment_link
* @method void get_the_author ($deprecated = '') https://developer.wordpress.org/reference/functions/get_the_author
* @method string get_the_author_aim () https://developer.wordpress.org/reference/functions/get_the_author_aim
* @method string get_the_author_description () https://developer.wordpress.org/reference/functions/get_the_author_description
* @method string get_the_author_email () https://developer.wordpress.org/reference/functions/get_the_author_email
* @method string get_the_author_firstname () https://developer.wordpress.org/reference/functions/get_the_author_firstname
* @method string get_the_author_icq () https://developer.wordpress.org/reference/functions/get_the_author_icq
* @method string|int get_the_author_ID () https://developer.wordpress.org/reference/functions/get_the_author_ID
* @method string get_the_author_lastname () https://developer.wordpress.org/reference/functions/get_the_author_lastname
* @method string|null get_the_author_link () https://developer.wordpress.org/reference/functions/get_the_author_link
* @method string get_the_author_login () https://developer.wordpress.org/reference/functions/get_the_author_login
* @method string get_the_author_meta (string $field = '', int $user_id = false) https://developer.wordpress.org/reference/functions/get_the_author_meta
* @method string get_the_author_msn () https://developer.wordpress.org/reference/functions/get_the_author_msn
* @method string get_the_author_nickname () https://developer.wordpress.org/reference/functions/get_the_author_nickname
* @method int get_the_author_posts () https://developer.wordpress.org/reference/functions/get_the_author_posts
* @method string get_the_author_posts_link () https://developer.wordpress.org/reference/functions/get_the_author_posts_link
* @method string get_the_author_url () https://developer.wordpress.org/reference/functions/get_the_author_url
* @method string get_the_author_yim () https://developer.wordpress.org/reference/functions/get_the_author_yim
* @method array get_the_category (int $id = false) https://developer.wordpress.org/reference/functions/get_the_category
* @method string|\WP_Error get_the_category_by_ID (int $cat_ID) https://developer.wordpress.org/reference/functions/get_the_category_by_ID
* @method string get_the_category_list (string $separator = '', string $parents = '', int $post_id = false) https://developer.wordpress.org/reference/functions/get_the_category_list
* @method string get_the_category_rss (string $type = NULL) https://developer.wordpress.org/reference/functions/get_the_category_rss
* @method string get_the_comments_navigation (array $args = []) https://developer.wordpress.org/reference/functions/get_the_comments_navigation
* @method string get_the_comments_pagination (array $args = []) https://developer.wordpress.org/reference/functions/get_the_comments_pagination
* @method string get_the_content (string $more_link_text = NULL, bool $strip_teaser = false) https://developer.wordpress.org/reference/functions/get_the_content
* @method string get_the_content_feed (string $feed_type = NULL) https://developer.wordpress.org/reference/functions/get_the_content_feed
* @method void get_the_date ($d = '', $post = NULL) https://developer.wordpress.org/reference/functions/get_the_date
* @method string get_the_excerpt (int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_the_excerpt
* @method void get_the_generator ($type = '') https://developer.wordpress.org/reference/functions/get_the_generator
* @method string get_the_guid (int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/get_the_guid
* @method int|bool get_the_ID () https://developer.wordpress.org/reference/functions/get_the_ID
* @method string|void get_the_modified_author () https://developer.wordpress.org/reference/functions/get_the_modified_author
* @method bool|string get_the_modified_date (string $d = '', int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_the_modified_date
* @method bool|string get_the_modified_time (string $d = '', int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_the_modified_time
* @method string get_the_password_form (int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/get_the_password_form
* @method string|bool get_the_permalink (int|\WP_Post $post = 0, bool $leavename = false) https://developer.wordpress.org/reference/functions/get_the_permalink
* @method string get_the_posts_navigation (array $args = []) https://developer.wordpress.org/reference/functions/get_the_posts_navigation
* @method string get_the_posts_pagination (array $args = []) https://developer.wordpress.org/reference/functions/get_the_posts_pagination
* @method string get_the_post_navigation (array $args = []) https://developer.wordpress.org/reference/functions/get_the_post_navigation
* @method string get_the_post_thumbnail (int|\WP_Post $post = NULL, string|array $size = 'post-thumbnail', string|array $attr = '') https://developer.wordpress.org/reference/functions/get_the_post_thumbnail
* @method string get_the_post_thumbnail_caption (int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_the_post_thumbnail_caption
* @method string|bool get_the_post_thumbnail_url (int|\WP_Post $post = NULL, string|array $size = 'post-thumbnail') https://developer.wordpress.org/reference/functions/get_the_post_thumbnail_url
* @method string get_the_post_type_description () https://developer.wordpress.org/reference/functions/get_the_post_type_description
* @method string get_the_privacy_policy_link (string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/get_the_privacy_policy_link
* @method array|bool|\WP_Error get_the_tags (int $id = 0) https://developer.wordpress.org/reference/functions/get_the_tags
* @method string|bool|\WP_Error get_the_tag_list (string $before = '', string $sep = '', string $after = '', int $id = 0) https://developer.wordpress.org/reference/functions/get_the_tag_list
* @method array get_the_taxonomies (int|\WP_Post $post = 0, array $args = []) https://developer.wordpress.org/reference/functions/get_the_taxonomies
* @method array|bool|\WP_Error get_the_terms (int|object $post, string $taxonomy) https://developer.wordpress.org/reference/functions/get_the_terms
* @method string|bool|\WP_Error get_the_term_list (int $id, string $taxonomy, string $before = '', string $sep = '', string $after = '') https://developer.wordpress.org/reference/functions/get_the_term_list
* @method string|int|bool get_the_time (string $d = '', int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/get_the_time
* @method string get_the_title (int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/get_the_title
* @method string get_the_title_rss () https://developer.wordpress.org/reference/functions/get_the_title_rss
* @method string get_trackback_url () https://developer.wordpress.org/reference/functions/get_trackback_url
* @method mixed get_transient (string $transient) https://developer.wordpress.org/reference/functions/get_transient
* @method \Translations|\NOOP_Translations get_translations_for_domain (string $domain) https://developer.wordpress.org/reference/functions/get_translations_for_domain
* @method array get_udims (int $width, int $height) https://developer.wordpress.org/reference/functions/get_udims
* @method array get_uploaded_header_images () https://developer.wordpress.org/reference/functions/get_uploaded_header_images
* @method string get_upload_iframe_src (string $type = NULL, int $post_id = NULL, string $tab = NULL) https://developer.wordpress.org/reference/functions/get_upload_iframe_src
* @method int get_upload_space_available () https://developer.wordpress.org/reference/functions/get_upload_space_available
* @method string|bool get_url_in_content (string $content) https://developer.wordpress.org/reference/functions/get_url_in_content
* @method \WP_User|bool get_userdata (int $user_id) https://developer.wordpress.org/reference/functions/get_userdata
* @method bool|object get_userdatabylogin (string $user_login) https://developer.wordpress.org/reference/functions/get_userdatabylogin
* @method mixed get_usermeta (int $user_id, string $meta_key = '') https://developer.wordpress.org/reference/functions/get_usermeta
* @method int get_usernumposts (int $userid) https://developer.wordpress.org/reference/functions/get_usernumposts
* @method array get_users (array $args = []) https://developer.wordpress.org/reference/functions/get_users
* @method array get_users_drafts (int $user_id) https://developer.wordpress.org/reference/functions/get_users_drafts
* @method array get_users_of_blog (int $id = '') https://developer.wordpress.org/reference/functions/get_users_of_blog
* @method \WP_User|bool get_user_by (string $field, int|string $value) https://developer.wordpress.org/reference/functions/get_user_by
* @method bool|object get_user_by_email (string $email) https://developer.wordpress.org/reference/functions/get_user_by_email
* @method int get_user_count (int|null $network_id = NULL) https://developer.wordpress.org/reference/functions/get_user_count
* @method void get_user_details (string $username) https://developer.wordpress.org/reference/functions/get_user_details
* @method int get_user_id_from_string (string $string) https://developer.wordpress.org/reference/functions/get_user_id_from_string
* @method string get_user_locale (int|\WP_User $user_id = 0) https://developer.wordpress.org/reference/functions/get_user_locale
* @method mixed get_user_meta (int $user_id, string $key = '', bool $single = false) https://developer.wordpress.org/reference/functions/get_user_meta
* @method array get_user_metavalues (array $ids) https://developer.wordpress.org/reference/functions/get_user_metavalues
* @method mixed get_user_option (string $option, int $user = 0, string $deprecated = '') https://developer.wordpress.org/reference/functions/get_user_option
* @method mixed get_user_setting (string $name, string $default = false) https://developer.wordpress.org/reference/functions/get_user_setting
* @method \WP_User|bool get_user_to_edit (int $user_id) https://developer.wordpress.org/reference/functions/get_user_to_edit
* @method array get_weekstartend (string $mysqlstring, int|string $start_of_week = '') https://developer.wordpress.org/reference/functions/get_weekstartend
* @method string get_wp_title_rss (string $deprecated = '&#8211;') https://developer.wordpress.org/reference/functions/get_wp_title_rss
* @method string get_year_link (int|bool $year) https://developer.wordpress.org/reference/functions/get_year_link
* @method int global_terms (int $term_id, string $deprecated = '') https://developer.wordpress.org/reference/functions/global_terms
* @method bool global_terms_enabled () https://developer.wordpress.org/reference/functions/global_terms_enabled
* @method void got_mod_rewrite () https://developer.wordpress.org/reference/functions/got_mod_rewrite
* @method bool got_url_rewrite () https://developer.wordpress.org/reference/functions/got_url_rewrite
* @method void graceful_fail ($message) https://developer.wordpress.org/reference/functions/graceful_fail
* @method bool grant_super_admin (int $user_id) https://developer.wordpress.org/reference/functions/grant_super_admin
* @method void gzip_compression () https://developer.wordpress.org/reference/functions/gzip_compression
* @method bool hash_equals (string $a, string $b) https://developer.wordpress.org/reference/functions/hash_equals
* @method string|bool hash_hmac (string $algo, string $data, string $key, bool $raw_output = false) https://developer.wordpress.org/reference/functions/hash_hmac
* @method bool|int has_action (string $tag, callable|bool $function_to_check = false) https://developer.wordpress.org/reference/functions/has_action
* @method bool has_category (string|int|array $category = '', int|object $post = NULL) https://developer.wordpress.org/reference/functions/has_category
* @method bool has_custom_header () https://developer.wordpress.org/reference/functions/has_custom_header
* @method bool has_custom_logo (int $blog_id = 0) https://developer.wordpress.org/reference/functions/has_custom_logo
* @method bool has_excerpt (int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/has_excerpt
* @method bool|int has_filter (string $tag, callable|bool $function_to_check = false) https://developer.wordpress.org/reference/functions/has_filter
* @method bool has_header_image () https://developer.wordpress.org/reference/functions/has_header_image
* @method bool has_header_video () https://developer.wordpress.org/reference/functions/has_header_video
* @method bool has_image_size (string $name) https://developer.wordpress.org/reference/functions/has_image_size
* @method bool has_nav_menu (string $location) https://developer.wordpress.org/reference/functions/has_nav_menu
* @method bool has_post_format (string|array $format = [], object|int|null $post = NULL) https://developer.wordpress.org/reference/functions/has_post_format
* @method void has_post_thumbnail ($post = NULL) https://developer.wordpress.org/reference/functions/has_post_thumbnail
* @method bool has_shortcode (string $content, string $tag) https://developer.wordpress.org/reference/functions/has_shortcode
* @method bool has_site_icon (int $blog_id = 0) https://developer.wordpress.org/reference/functions/has_site_icon
* @method bool has_tag (string|int|array $tag = '', int|object $post = NULL) https://developer.wordpress.org/reference/functions/has_tag
* @method bool has_term (string|int|array $term = '', string $taxonomy = '', int|object $post = NULL) https://developer.wordpress.org/reference/functions/has_term
* @method array|bool has_term_meta (int $term_id) https://developer.wordpress.org/reference/functions/has_term_meta
* @method bool have_comments () https://developer.wordpress.org/reference/functions/have_comments
* @method bool have_posts () https://developer.wordpress.org/reference/functions/have_posts
* @method void header_image () https://developer.wordpress.org/reference/functions/header_image
* @method void header_textcolor () https://developer.wordpress.org/reference/functions/header_textcolor
* @method array heartbeat_autosave (array $response, array $data) https://developer.wordpress.org/reference/functions/heartbeat_autosave
* @method string home_url (string $path = '', string|null $scheme = NULL) https://developer.wordpress.org/reference/functions/home_url
* @method string htmlentities2 (string $myHTML) https://developer.wordpress.org/reference/functions/htmlentities2
* @method void html_type_rss () https://developer.wordpress.org/reference/functions/html_type_rss
* @method string human_time_diff (int $from, int $to = '') https://developer.wordpress.org/reference/functions/human_time_diff
* @method void iframe_footer () https://developer.wordpress.org/reference/functions/iframe_footer
* @method void iframe_header (string $title = '', bool $deprecated = false) https://developer.wordpress.org/reference/functions/iframe_header
* @method bool iis7_add_rewrite_rule (string $filename, string $rewrite_rule) https://developer.wordpress.org/reference/functions/iis7_add_rewrite_rule
* @method bool iis7_delete_rewrite_rule (string $filename) https://developer.wordpress.org/reference/functions/iis7_delete_rewrite_rule
* @method bool iis7_rewrite_rule_exists (string $filename) https://developer.wordpress.org/reference/functions/iis7_rewrite_rule_exists
* @method bool iis7_save_url_rewrite_rules () https://developer.wordpress.org/reference/functions/iis7_save_url_rewrite_rules
* @method bool iis7_supports_permalinks () https://developer.wordpress.org/reference/functions/iis7_supports_permalinks
* @method string image_add_caption (string $html, int $id, string $caption, string $title, string $align, string $url, string $size, string $alt = '') https://developer.wordpress.org/reference/functions/image_add_caption
* @method string image_align_input_fields (\WP_Post $post, string $checked = '') https://developer.wordpress.org/reference/functions/image_align_input_fields
* @method array image_attachment_fields_to_edit (array $form_fields, object $post) https://developer.wordpress.org/reference/functions/image_attachment_fields_to_edit
* @method void image_attachment_fields_to_save ($post, $attachment) https://developer.wordpress.org/reference/functions/image_attachment_fields_to_save
* @method void image_constrain_size_for_editor ($width, $height, $size = 'medium', $context = NULL) https://developer.wordpress.org/reference/functions/image_constrain_size_for_editor
* @method void image_downsize ($id, $size = 'medium') https://developer.wordpress.org/reference/functions/image_downsize
* @method \WP_Image_Editor image_edit_apply_changes (\WP_Image_Editor $image, array $changes) https://developer.wordpress.org/reference/functions/image_edit_apply_changes
* @method bool|array image_get_intermediate_size (int $post_id, array|string $size = 'thumbnail') https://developer.wordpress.org/reference/functions/image_get_intermediate_size
* @method string image_hwstring (int|string $width, int|string $height) https://developer.wordpress.org/reference/functions/image_hwstring
* @method string image_link_input_fields (\WP_Post $post, string $url_type = '') https://developer.wordpress.org/reference/functions/image_link_input_fields
* @method void image_make_intermediate_size ($file, $width, $height, $crop = false) https://developer.wordpress.org/reference/functions/image_make_intermediate_size
* @method string image_media_send_to_editor (string $html, int $attachment_id, array $attachment) https://developer.wordpress.org/reference/functions/image_media_send_to_editor
* @method mixed image_resize (string $file, int $max_w, int $max_h, bool $crop = false, string $suffix = NULL, string $dest_path = NULL, int $jpeg_quality = 90) https://developer.wordpress.org/reference/functions/image_resize
* @method bool|array image_resize_dimensions (int $orig_w, int $orig_h, int $dest_w, int $dest_h, bool|array $crop = false) https://developer.wordpress.org/reference/functions/image_resize_dimensions
* @method array image_size_input_fields (\WP_Post $post, bool|string $check = '') https://developer.wordpress.org/reference/functions/image_size_input_fields
* @method void img_caption_shortcode ($attr, $content = NULL) https://developer.wordpress.org/reference/functions/img_caption_shortcode
* @method string includes_url (string $path = '', string $scheme = NULL) https://developer.wordpress.org/reference/functions/includes_url
* @method void index_rel_link () https://developer.wordpress.org/reference/functions/index_rel_link
* @method void init () https://developer.wordpress.org/reference/functions/init
* @method int|bool insert_blog (string $domain, string $path, int $network_id) https://developer.wordpress.org/reference/functions/insert_blog
* @method bool insert_with_markers (string $filename, string $marker, array|string $insertion) https://developer.wordpress.org/reference/functions/insert_with_markers
* @method void install_blog (int $blog_id, string $blog_title = '') https://developer.wordpress.org/reference/functions/install_blog
* @method void install_blog_defaults (int $blog_id, int $user_id) https://developer.wordpress.org/reference/functions/install_blog_defaults
* @method void install_dashboard () https://developer.wordpress.org/reference/functions/install_dashboard
* @method void install_global_terms () https://developer.wordpress.org/reference/functions/install_global_terms
* @method void install_network () https://developer.wordpress.org/reference/functions/install_network
* @method void install_plugins_favorites_form () https://developer.wordpress.org/reference/functions/install_plugins_favorites_form
* @method void install_plugins_upload () https://developer.wordpress.org/reference/functions/install_plugins_upload
* @method void install_plugin_information () https://developer.wordpress.org/reference/functions/install_plugin_information
* @method array install_plugin_install_status (array|object $api, bool $loop = false) https://developer.wordpress.org/reference/functions/install_plugin_install_status
* @method array install_popular_tags (array $args = []) https://developer.wordpress.org/reference/functions/install_popular_tags
* @method void install_search_form (bool $deprecated = true) https://developer.wordpress.org/reference/functions/install_search_form
* @method void install_themes_dashboard () https://developer.wordpress.org/reference/functions/install_themes_dashboard
* @method array install_themes_feature_list () https://developer.wordpress.org/reference/functions/install_themes_feature_list
* @method void install_themes_upload () https://developer.wordpress.org/reference/functions/install_themes_upload
* @method void install_theme_information () https://developer.wordpress.org/reference/functions/install_theme_information
* @method void install_theme_search_form (bool $type_selector = true) https://developer.wordpress.org/reference/functions/install_theme_search_form
* @method bool in_category (int|string|array $category, int|object $post = NULL) https://developer.wordpress.org/reference/functions/in_category
* @method bool in_the_loop () https://developer.wordpress.org/reference/functions/in_the_loop
* @method int|float iso8601_timezone_to_offset (string $timezone) https://developer.wordpress.org/reference/functions/iso8601_timezone_to_offset
* @method string iso8601_to_datetime (string $date_string, string $timezone = 'user') https://developer.wordpress.org/reference/functions/iso8601_to_datetime
* @method bool is_404 () https://developer.wordpress.org/reference/functions/is_404
* @method bool is_active_sidebar (string|int $index) https://developer.wordpress.org/reference/functions/is_active_sidebar
* @method void is_active_widget ($callback = false, $widget_id = false, $id_base = false, $skip_inactive = true) https://developer.wordpress.org/reference/functions/is_active_widget
* @method bool is_admin () https://developer.wordpress.org/reference/functions/is_admin
* @method bool is_admin_bar_showing () https://developer.wordpress.org/reference/functions/is_admin_bar_showing
* @method string is_allowed_http_origin (null|string $origin = NULL) https://developer.wordpress.org/reference/functions/is_allowed_http_origin
* @method bool is_archive () https://developer.wordpress.org/reference/functions/is_archive
* @method string is_archived (int $id) https://developer.wordpress.org/reference/functions/is_archived
* @method bool is_attachment (int|string|array|object $attachment = '') https://developer.wordpress.org/reference/functions/is_attachment
* @method bool is_author (mixed $author = '') https://developer.wordpress.org/reference/functions/is_author
* @method bool is_blog_admin () https://developer.wordpress.org/reference/functions/is_blog_admin
* @method bool is_blog_installed () https://developer.wordpress.org/reference/functions/is_blog_installed
* @method bool is_blog_user (int $blog_id = 0) https://developer.wordpress.org/reference/functions/is_blog_user
* @method bool is_category (mixed $category = '') https://developer.wordpress.org/reference/functions/is_category
* @method bool is_child_theme () https://developer.wordpress.org/reference/functions/is_child_theme
* @method void is_client_error ($sc) https://developer.wordpress.org/reference/functions/is_client_error
* @method bool is_comments_popup () https://developer.wordpress.org/reference/functions/is_comments_popup
* @method bool is_comment_feed () https://developer.wordpress.org/reference/functions/is_comment_feed
* @method bool is_countable (mixed $var) https://developer.wordpress.org/reference/functions/is_countable
* @method bool is_customize_preview () https://developer.wordpress.org/reference/functions/is_customize_preview
* @method bool is_date () https://developer.wordpress.org/reference/functions/is_date
* @method bool is_day () https://developer.wordpress.org/reference/functions/is_day
* @method bool is_dynamic_sidebar () https://developer.wordpress.org/reference/functions/is_dynamic_sidebar
* @method string|bool is_email (string $email, bool $deprecated = false) https://developer.wordpress.org/reference/functions/is_email
* @method bool is_email_address_unsafe (string $user_email) https://developer.wordpress.org/reference/functions/is_email_address_unsafe
* @method bool is_embed () https://developer.wordpress.org/reference/functions/is_embed
* @method void is_error ($sc) https://developer.wordpress.org/reference/functions/is_error
* @method bool is_feed (string|array $feeds = '') https://developer.wordpress.org/reference/functions/is_feed
* @method bool is_front_page () https://developer.wordpress.org/reference/functions/is_front_page
* @method bool is_header_video_active () https://developer.wordpress.org/reference/functions/is_header_video_active
* @method bool is_home () https://developer.wordpress.org/reference/functions/is_home
* @method void is_info ($sc) https://developer.wordpress.org/reference/functions/is_info
* @method bool is_iterable (mixed $var) https://developer.wordpress.org/reference/functions/is_iterable
* @method bool is_lighttpd_before_150 () https://developer.wordpress.org/reference/functions/is_lighttpd_before_150
* @method bool is_locale_switched () https://developer.wordpress.org/reference/functions/is_locale_switched
* @method void is_main_blog () https://developer.wordpress.org/reference/functions/is_main_blog
* @method bool is_main_network (int $network_id = NULL) https://developer.wordpress.org/reference/functions/is_main_network
* @method bool is_main_query () https://developer.wordpress.org/reference/functions/is_main_query
* @method bool is_main_site (int $site_id = NULL, int $network_id = NULL) https://developer.wordpress.org/reference/functions/is_main_site
* @method bool is_month () https://developer.wordpress.org/reference/functions/is_month
* @method bool is_multisite () https://developer.wordpress.org/reference/functions/is_multisite
* @method bool is_multi_author () https://developer.wordpress.org/reference/functions/is_multi_author
* @method bool is_nav_menu (int|string|\WP_Term $menu) https://developer.wordpress.org/reference/functions/is_nav_menu
* @method bool is_nav_menu_item (int $menu_item_id = 0) https://developer.wordpress.org/reference/functions/is_nav_menu_item
* @method bool is_network_admin () https://developer.wordpress.org/reference/functions/is_network_admin
* @method bool is_network_only_plugin (string $plugin) https://developer.wordpress.org/reference/functions/is_network_only_plugin
* @method int is_new_day () https://developer.wordpress.org/reference/functions/is_new_day
* @method bool is_object_in_taxonomy (string $object_type, string $taxonomy) https://developer.wordpress.org/reference/functions/is_object_in_taxonomy
* @method bool|\WP_Error is_object_in_term (int $object_id, string $taxonomy, int|string|array $terms = NULL) https://developer.wordpress.org/reference/functions/is_object_in_term
* @method bool is_page (int|string|array $page = '') https://developer.wordpress.org/reference/functions/is_page
* @method bool is_paged () https://developer.wordpress.org/reference/functions/is_paged
* @method bool is_page_template (string|array $template = '') https://developer.wordpress.org/reference/functions/is_page_template
* @method bool is_plugin_active (string $plugin) https://developer.wordpress.org/reference/functions/is_plugin_active
* @method bool is_plugin_active_for_network (string $plugin) https://developer.wordpress.org/reference/functions/is_plugin_active_for_network
* @method bool is_plugin_inactive (string $plugin) https://developer.wordpress.org/reference/functions/is_plugin_inactive
* @method bool is_plugin_page () https://developer.wordpress.org/reference/functions/is_plugin_page
* @method bool is_post_type_archive (string|array $post_types = '') https://developer.wordpress.org/reference/functions/is_post_type_archive
* @method bool is_preview () https://developer.wordpress.org/reference/functions/is_preview
* @method bool is_protected_meta (string $meta_key, string|null $meta_type = NULL) https://developer.wordpress.org/reference/functions/is_protected_meta
* @method bool is_random_header_image (string $type = 'any') https://developer.wordpress.org/reference/functions/is_random_header_image
* @method void is_redirect ($sc) https://developer.wordpress.org/reference/functions/is_redirect
* @method bool is_registered_sidebar (string|int $sidebar_id) https://developer.wordpress.org/reference/functions/is_registered_sidebar
* @method bool is_robots () https://developer.wordpress.org/reference/functions/is_robots
* @method bool is_rtl () https://developer.wordpress.org/reference/functions/is_rtl
* @method bool is_search () https://developer.wordpress.org/reference/functions/is_search
* @method bool is_serialized (string $data, bool $strict = true) https://developer.wordpress.org/reference/functions/is_serialized
* @method bool is_serialized_string (string $data) https://developer.wordpress.org/reference/functions/is_serialized_string
* @method void is_server_error ($sc) https://developer.wordpress.org/reference/functions/is_server_error
* @method bool is_single (int|string|array $post = '') https://developer.wordpress.org/reference/functions/is_single
* @method bool is_singular (string|array $post_types = '') https://developer.wordpress.org/reference/functions/is_singular
* @method void is_site_admin (string $user_login = '') https://developer.wordpress.org/reference/functions/is_site_admin
* @method bool is_ssl () https://developer.wordpress.org/reference/functions/is_ssl
* @method void is_subdomain_install () https://developer.wordpress.org/reference/functions/is_subdomain_install
* @method void is_success ($sc) https://developer.wordpress.org/reference/functions/is_success
* @method bool is_super_admin (int $user_id = false) https://developer.wordpress.org/reference/functions/is_super_admin
* @method bool is_tag (mixed $tag = '') https://developer.wordpress.org/reference/functions/is_tag
* @method bool is_tax (string|array $taxonomy = '', int|string|array $term = '') https://developer.wordpress.org/reference/functions/is_tax
* @method bool is_taxonomy (string $taxonomy) https://developer.wordpress.org/reference/functions/is_taxonomy
* @method bool is_taxonomy_hierarchical (string $taxonomy) https://developer.wordpress.org/reference/functions/is_taxonomy_hierarchical
* @method mixed is_term (int|string $term, string $taxonomy = '', int $parent = 0) https://developer.wordpress.org/reference/functions/is_term
* @method bool is_textdomain_loaded (string $domain) https://developer.wordpress.org/reference/functions/is_textdomain_loaded
* @method bool is_time () https://developer.wordpress.org/reference/functions/is_time
* @method bool is_trackback () https://developer.wordpress.org/reference/functions/is_trackback
* @method bool is_uninstallable_plugin (string $plugin) https://developer.wordpress.org/reference/functions/is_uninstallable_plugin
* @method bool is_upload_space_available () https://developer.wordpress.org/reference/functions/is_upload_space_available
* @method bool is_user_admin () https://developer.wordpress.org/reference/functions/is_user_admin
* @method bool is_user_logged_in () https://developer.wordpress.org/reference/functions/is_user_logged_in
* @method bool is_user_member_of_blog (int $user_id = 0, int $blog_id = 0) https://developer.wordpress.org/reference/functions/is_user_member_of_blog
* @method bool is_user_option_local (string $key, int $user_id = 0, int $blog_id = 0) https://developer.wordpress.org/reference/functions/is_user_option_local
* @method bool is_user_spammy (string|\WP_User $user = NULL) https://developer.wordpress.org/reference/functions/is_user_spammy
* @method void is_wpmu_sitewide_plugin ($file) https://developer.wordpress.org/reference/functions/is_wpmu_sitewide_plugin
* @method bool is_wp_error (mixed $thing) https://developer.wordpress.org/reference/functions/is_wp_error
* @method bool is_year () https://developer.wordpress.org/reference/functions/is_year
* @method object|array json_decode (string $string, bool $assoc_array = false) https://developer.wordpress.org/reference/functions/json_decode
* @method void json_encode ($string) https://developer.wordpress.org/reference/functions/json_encode
* @method bool|string json_last_error_msg () https://developer.wordpress.org/reference/functions/json_last_error_msg
* @method void js_escape ($text) https://developer.wordpress.org/reference/functions/js_escape
* @method void kses_init () https://developer.wordpress.org/reference/functions/kses_init
* @method void kses_init_filters () https://developer.wordpress.org/reference/functions/kses_init_filters
* @method void kses_remove_filters () https://developer.wordpress.org/reference/functions/kses_remove_filters
* @method void language_attributes (string $doctype = 'html') https://developer.wordpress.org/reference/functions/language_attributes
* @method string like_escape (string $text) https://developer.wordpress.org/reference/functions/like_escape
* @method string links_add_base_url (string $content, string $base, array $attrs = ['src', 'href']) https://developer.wordpress.org/reference/functions/links_add_base_url
* @method string links_add_target (string $content, string $target = '_blank', array $tags = ['a']) https://developer.wordpress.org/reference/functions/links_add_target
* @method void links_popup_script (string $text = 'Links', int $width = 400, int $height = 400, string $file = 'links.all.php', bool $count = true) https://developer.wordpress.org/reference/functions/links_popup_script
* @method void link_advanced_meta_box (object $link) https://developer.wordpress.org/reference/functions/link_advanced_meta_box
* @method void link_categories_meta_box (object $link) https://developer.wordpress.org/reference/functions/link_categories_meta_box
* @method string link_pages (string $before = '<br />', string $after = '<br />', string $next_or_number = 'number', string $nextpagelink = 'next page', string $previouspagelink = 'previous page', string $pagelink = '%', string $more_file = '') https://developer.wordpress.org/reference/functions/link_pages
* @method void link_submit_meta_box (object $link) https://developer.wordpress.org/reference/functions/link_submit_meta_box
* @method void link_target_meta_box (object $link) https://developer.wordpress.org/reference/functions/link_target_meta_box
* @method void link_xfn_meta_box (object $link) https://developer.wordpress.org/reference/functions/link_xfn_meta_box
* @method null|string list_authors (bool $optioncount = false, bool $exclude_admin = true, bool $show_fullname = false, bool $hide_empty = true, string $feed = '', string $feed_image = '') https://developer.wordpress.org/reference/functions/list_authors
* @method bool|null list_cats (int $optionall = 1, string $all = 'All', string $sort_column = 'ID', string $sort_order = 'asc', string $file = '', bool $list = true, int $optiondates = 0, int $optioncount = 0, int $hide_empty = 1, int $use_desc_for_title = 1, bool $children = false, int $child_of = 0, int $categories = 0, int $recurse = 0, string $feed = '', string $feed_image = '', string $exclude = '', bool $hierarchical = false) https://developer.wordpress.org/reference/functions/list_cats
* @method void list_core_update (object $update) https://developer.wordpress.org/reference/functions/list_core_update
* @method bool|array list_files (string $folder = '', int $levels = 100, array $exclusions = []) https://developer.wordpress.org/reference/functions/list_files
* @method void list_meta (array $meta) https://developer.wordpress.org/reference/functions/list_meta
* @method void list_plugin_updates () https://developer.wordpress.org/reference/functions/list_plugin_updates
* @method void list_theme_updates () https://developer.wordpress.org/reference/functions/list_theme_updates
* @method void list_translation_updates () https://developer.wordpress.org/reference/functions/list_translation_updates
* @method bool load_child_theme_textdomain (string $domain, string $path = false) https://developer.wordpress.org/reference/functions/load_child_theme_textdomain
* @method bool load_default_textdomain (string $locale = NULL) https://developer.wordpress.org/reference/functions/load_default_textdomain
* @method resource|bool load_image_to_edit (string $attachment_id, string $mime_type, string $size = 'full') https://developer.wordpress.org/reference/functions/load_image_to_edit
* @method bool load_muplugin_textdomain (string $domain, string $mu_plugin_rel_path = '') https://developer.wordpress.org/reference/functions/load_muplugin_textdomain
* @method bool load_plugin_textdomain (string $domain, string $deprecated = false, string $plugin_rel_path = false) https://developer.wordpress.org/reference/functions/load_plugin_textdomain
* @method void load_template (string $_template_file, bool $require_once = true) https://developer.wordpress.org/reference/functions/load_template
* @method bool load_textdomain (string $domain, string $mofile) https://developer.wordpress.org/reference/functions/load_textdomain
* @method bool load_theme_textdomain (string $domain, string $path = false) https://developer.wordpress.org/reference/functions/load_theme_textdomain
* @method void locale_stylesheet () https://developer.wordpress.org/reference/functions/locale_stylesheet
* @method string locate_template (string|array $template_names, bool $load = false, bool $require_once = true) https://developer.wordpress.org/reference/functions/locate_template
* @method void login_footer (string $input_id = '') https://developer.wordpress.org/reference/functions/login_footer
* @method void login_header (string $title = 'Log In', string $message = '', \WP_Error $wp_error = '') https://developer.wordpress.org/reference/functions/login_header
* @method void logIO (string $io, string $msg) https://developer.wordpress.org/reference/functions/logIO
* @method string lowercase_octets (array $matches) https://developer.wordpress.org/reference/functions/lowercase_octets
* @method bool|void maintenance_nag () https://developer.wordpress.org/reference/functions/maintenance_nag
* @method string make_clickable (string $text) https://developer.wordpress.org/reference/functions/make_clickable
* @method void make_db_current (string $tables = 'all') https://developer.wordpress.org/reference/functions/make_db_current
* @method void make_db_current_silent (string $tables = 'all') https://developer.wordpress.org/reference/functions/make_db_current_silent
* @method bool|string make_site_theme () https://developer.wordpress.org/reference/functions/make_site_theme
* @method bool|void make_site_theme_from_default (string $theme_name, string $template) https://developer.wordpress.org/reference/functions/make_site_theme_from_default
* @method bool make_site_theme_from_oldschool (string $theme_name, string $template) https://developer.wordpress.org/reference/functions/make_site_theme_from_oldschool
* @method string make_url_footnote (string $content) https://developer.wordpress.org/reference/functions/make_url_footnote
* @method mixed map_deep (mixed $value, callable $callback) https://developer.wordpress.org/reference/functions/map_deep
* @method void map_meta_cap ($cap, $user_id) https://developer.wordpress.org/reference/functions/map_meta_cap
* @method bool maybe_add_column (string $table_name, string $column_name, string $create_ddl) https://developer.wordpress.org/reference/functions/maybe_add_column
* @method void maybe_add_existing_user_to_blog () https://developer.wordpress.org/reference/functions/maybe_add_existing_user_to_blog
* @method bool maybe_convert_table_to_utf8mb4 (string $table) https://developer.wordpress.org/reference/functions/maybe_convert_table_to_utf8mb4
* @method bool maybe_create_table (string $table_name, string $create_ddl) https://developer.wordpress.org/reference/functions/maybe_create_table
* @method void maybe_disable_automattic_widgets () https://developer.wordpress.org/reference/functions/maybe_disable_automattic_widgets
* @method void maybe_disable_link_manager () https://developer.wordpress.org/reference/functions/maybe_disable_link_manager
* @method bool maybe_drop_column (string $table_name, string $column_name, string $drop_ddl) https://developer.wordpress.org/reference/functions/maybe_drop_column
* @method string maybe_hash_hex_color (string $color) https://developer.wordpress.org/reference/functions/maybe_hash_hex_color
* @method void maybe_redirect_404 () https://developer.wordpress.org/reference/functions/maybe_redirect_404
* @method mixed maybe_serialize (string|array|object $data) https://developer.wordpress.org/reference/functions/maybe_serialize
* @method mixed maybe_unserialize (string $original) https://developer.wordpress.org/reference/functions/maybe_unserialize
* @method void mbstring_binary_safe_encoding (bool $reset = false) https://developer.wordpress.org/reference/functions/mbstring_binary_safe_encoding
* @method int mb_strlen (string $str, string|null $encoding = NULL) https://developer.wordpress.org/reference/functions/mb_strlen
* @method string mb_substr (string $str, int $start, int|null $length = NULL, string|null $encoding = NULL) https://developer.wordpress.org/reference/functions/mb_substr
* @method void media_buttons (string $editor_id = 'content') https://developer.wordpress.org/reference/functions/media_buttons
* @method int|object media_handle_sideload (array $file_array, int $post_id, string $desc = NULL, array $post_data = []) https://developer.wordpress.org/reference/functions/media_handle_sideload
* @method int|\WP_Error media_handle_upload (string $file_id, int $post_id, array $post_data = [], array $overrides = [false]) https://developer.wordpress.org/reference/functions/media_handle_upload
* @method array media_post_single_attachment_fields_to_edit (array $form_fields, \WP_Post $post) https://developer.wordpress.org/reference/functions/media_post_single_attachment_fields_to_edit
* @method void media_send_to_editor (string $html) https://developer.wordpress.org/reference/functions/media_send_to_editor
* @method string|\WP_Error media_sideload_image (string $file, int $post_id, string $desc = NULL, string $return = 'html') https://developer.wordpress.org/reference/functions/media_sideload_image
* @method array media_single_attachment_fields_to_edit (array $form_fields, \WP_Post $post) https://developer.wordpress.org/reference/functions/media_single_attachment_fields_to_edit
* @method null|string media_upload_audio () https://developer.wordpress.org/reference/functions/media_upload_audio
* @method null|string media_upload_file () https://developer.wordpress.org/reference/functions/media_upload_file
* @method void media_upload_flash_bypass () https://developer.wordpress.org/reference/functions/media_upload_flash_bypass
* @method void media_upload_form (array $errors = NULL) https://developer.wordpress.org/reference/functions/media_upload_form
* @method mixed media_upload_form_handler () https://developer.wordpress.org/reference/functions/media_upload_form_handler
* @method string|null media_upload_gallery () https://developer.wordpress.org/reference/functions/media_upload_gallery
* @method void media_upload_gallery_form (array $errors) https://developer.wordpress.org/reference/functions/media_upload_gallery_form
* @method void media_upload_header () https://developer.wordpress.org/reference/functions/media_upload_header
* @method void media_upload_html_bypass () https://developer.wordpress.org/reference/functions/media_upload_html_bypass
* @method null|string media_upload_image () https://developer.wordpress.org/reference/functions/media_upload_image
* @method string|null media_upload_library () https://developer.wordpress.org/reference/functions/media_upload_library
* @method void media_upload_library_form (array $errors) https://developer.wordpress.org/reference/functions/media_upload_library_form
* @method void media_upload_max_image_resize () https://developer.wordpress.org/reference/functions/media_upload_max_image_resize
* @method void media_upload_tabs () https://developer.wordpress.org/reference/functions/media_upload_tabs
* @method void media_upload_text_after () https://developer.wordpress.org/reference/functions/media_upload_text_after
* @method void media_upload_type_form (string $type = 'file', object $errors = NULL, int $id = NULL) https://developer.wordpress.org/reference/functions/media_upload_type_form
* @method void media_upload_type_url_form (string $type = NULL, object $errors = NULL, int $id = NULL) https://developer.wordpress.org/reference/functions/media_upload_type_url_form
* @method null|string media_upload_video () https://developer.wordpress.org/reference/functions/media_upload_video
* @method string menu_page_url (string $menu_slug, bool $echo = true) https://developer.wordpress.org/reference/functions/menu_page_url
* @method bool metadata_exists (string $meta_type, int $object_id, string $meta_key) https://developer.wordpress.org/reference/functions/metadata_exists
* @method void meta_box_prefs (\WP_Screen $screen) https://developer.wordpress.org/reference/functions/meta_box_prefs
* @method void meta_form (\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/meta_form
* @method void ms_allowed_http_request_hosts ($is_external, $host) https://developer.wordpress.org/reference/functions/ms_allowed_http_request_hosts
* @method void ms_cookie_constants () https://developer.wordpress.org/reference/functions/ms_cookie_constants
* @method void ms_deprecated_blogs_file () https://developer.wordpress.org/reference/functions/ms_deprecated_blogs_file
* @method void ms_file_constants () https://developer.wordpress.org/reference/functions/ms_file_constants
* @method bool ms_is_switched () https://developer.wordpress.org/reference/functions/ms_is_switched
* @method bool|string ms_load_current_site_and_network (string $domain, string $path, bool $subdomain = false) https://developer.wordpress.org/reference/functions/ms_load_current_site_and_network
* @method void ms_not_installed (string $domain, string $path) https://developer.wordpress.org/reference/functions/ms_not_installed
* @method bool|string ms_site_check () https://developer.wordpress.org/reference/functions/ms_site_check
* @method void ms_subdomain_constants () https://developer.wordpress.org/reference/functions/ms_subdomain_constants
* @method void ms_upload_constants () https://developer.wordpress.org/reference/functions/ms_upload_constants
* @method void multisite_over_quota_message () https://developer.wordpress.org/reference/functions/multisite_over_quota_message
* @method void mu_dropdown_languages (array $lang_files = [], string $current = '') https://developer.wordpress.org/reference/functions/mu_dropdown_languages
* @method void mu_options ($options) https://developer.wordpress.org/reference/functions/mu_options
* @method string|int|bool mysql2date (string $format, string $date, bool $translate = true) https://developer.wordpress.org/reference/functions/mysql2date
* @method string mysql_to_rfc3339 (string $date_string) https://developer.wordpress.org/reference/functions/mysql_to_rfc3339
* @method string network_admin_url (string $path = '', string $scheme = 'admin') https://developer.wordpress.org/reference/functions/network_admin_url
* @method void network_domain_check () https://developer.wordpress.org/reference/functions/network_domain_check
* @method void network_edit_site_nav ($args = []) https://developer.wordpress.org/reference/functions/network_edit_site_nav
* @method string network_home_url (string $path = '', string $scheme = NULL) https://developer.wordpress.org/reference/functions/network_home_url
* @method void network_settings_add_js () https://developer.wordpress.org/reference/functions/network_settings_add_js
* @method string network_site_url (string $path = '', string $scheme = NULL) https://developer.wordpress.org/reference/functions/network_site_url
* @method void network_step1 (\WP_Error $errors = false) https://developer.wordpress.org/reference/functions/network_step1
* @method void network_step2 (\WP_Error $errors = false) https://developer.wordpress.org/reference/functions/network_step2
* @method void newblog_notify_siteadmin ($blog_id, $deprecated = '') https://developer.wordpress.org/reference/functions/newblog_notify_siteadmin
* @method void newuser_notify_siteadmin ($user_id) https://developer.wordpress.org/reference/functions/newuser_notify_siteadmin
* @method void new_user_email_admin_notice () https://developer.wordpress.org/reference/functions/new_user_email_admin_notice
* @method void next_comments_link (string $label = '', int $max_page = 0) https://developer.wordpress.org/reference/functions/next_comments_link
* @method void next_image_link (string|array $size = 'thumbnail', string $text = false) https://developer.wordpress.org/reference/functions/next_image_link
* @method void next_post (string $format = '%', string $next = 'next post: ', string $title = 'yes', string $in_same_cat = 'no', int $limitnext = 1, string $excluded_categories = '') https://developer.wordpress.org/reference/functions/next_post
* @method string|void next_posts (int $max_page = 0, bool $echo = true) https://developer.wordpress.org/reference/functions/next_posts
* @method void next_posts_link (string $label = NULL, int $max_page = 0) https://developer.wordpress.org/reference/functions/next_posts_link
* @method void next_post_link (string $format = '%link &raquo;', string $link = '%title', bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/next_post_link
* @method void next_post_rel_link (string $title = '%title', bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/next_post_rel_link
* @method int next_widget_id_number (string $id_base) https://developer.wordpress.org/reference/functions/next_widget_id_number
* @method void nocache_headers () https://developer.wordpress.org/reference/functions/nocache_headers
* @method void noindex () https://developer.wordpress.org/reference/functions/noindex
* @method string normalize_whitespace (string $str) https://developer.wordpress.org/reference/functions/normalize_whitespace
* @method string number_format_i18n (float $number, int $decimals = 0) https://developer.wordpress.org/reference/functions/number_format_i18n
* @method void options_discussion_add_js () https://developer.wordpress.org/reference/functions/options_discussion_add_js
* @method void options_general_add_js () https://developer.wordpress.org/reference/functions/options_general_add_js
* @method void options_permalink_add_js () https://developer.wordpress.org/reference/functions/options_permalink_add_js
* @method void options_reading_add_js () https://developer.wordpress.org/reference/functions/options_reading_add_js
* @method void options_reading_blog_charset () https://developer.wordpress.org/reference/functions/options_reading_blog_charset
* @method void option_update_filter ($options) https://developer.wordpress.org/reference/functions/option_update_filter
* @method void page_attributes_meta_box (object $post) https://developer.wordpress.org/reference/functions/page_attributes_meta_box
* @method void page_template_dropdown (string $default = '', string $post_type = 'page') https://developer.wordpress.org/reference/functions/page_template_dropdown
* @method string|void paginate_comments_links (string|array $args = []) https://developer.wordpress.org/reference/functions/paginate_comments_links
* @method array|string|void paginate_links (string|array $args = '') https://developer.wordpress.org/reference/functions/paginate_links
* @method null|bool parent_dropdown (int $default = 0, int $parent = 0, int $level = 0, int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/parent_dropdown
* @method void parent_post_rel_link (string $title = '%title') https://developer.wordpress.org/reference/functions/parent_post_rel_link
* @method void parse_w3cdtf ($date_str) https://developer.wordpress.org/reference/functions/parse_w3cdtf
* @method bool path_is_absolute (string $path) https://developer.wordpress.org/reference/functions/path_is_absolute
* @method string path_join (string $base, string $path) https://developer.wordpress.org/reference/functions/path_join
* @method void PclZipUtilCopyBlock ($p_src, $p_dest, $p_size, $p_mode = 0) https://developer.wordpress.org/reference/functions/PclZipUtilCopyBlock
* @method void PclZipUtilOptionText ($p_option) https://developer.wordpress.org/reference/functions/PclZipUtilOptionText
* @method void PclZipUtilPathInclusion ($p_dir, $p_path) https://developer.wordpress.org/reference/functions/PclZipUtilPathInclusion
* @method void PclZipUtilPathReduction ($p_dir) https://developer.wordpress.org/reference/functions/PclZipUtilPathReduction
* @method void PclZipUtilRename ($p_src, $p_dest) https://developer.wordpress.org/reference/functions/PclZipUtilRename
* @method void PclZipUtilTranslateWinPath ($p_path, $p_remove_disk_letter = true) https://developer.wordpress.org/reference/functions/PclZipUtilTranslateWinPath
* @method void permalink_anchor (string $mode = 'id') https://developer.wordpress.org/reference/functions/permalink_anchor
* @method void permalink_link () https://developer.wordpress.org/reference/functions/permalink_link
* @method void permalink_single_rss (string $deprecated = '') https://developer.wordpress.org/reference/functions/permalink_single_rss
* @method void pingback (string $content, int|\WP_Post $post_id) https://developer.wordpress.org/reference/functions/pingback
* @method string pingback_ping_source_uri (string $source_uri) https://developer.wordpress.org/reference/functions/pingback_ping_source_uri
* @method bool pings_open (int|\WP_Post $post_id = NULL) https://developer.wordpress.org/reference/functions/pings_open
* @method void plugins_api ($action, $args = []) https://developer.wordpress.org/reference/functions/plugins_api
* @method string plugins_url (string $path = '', string $plugin = '') https://developer.wordpress.org/reference/functions/plugins_url
* @method string plugin_basename (string $file) https://developer.wordpress.org/reference/functions/plugin_basename
* @method string plugin_dir_path (string $file) https://developer.wordpress.org/reference/functions/plugin_dir_path
* @method string plugin_dir_url (string $file) https://developer.wordpress.org/reference/functions/plugin_dir_url
* @method void plugin_sandbox_scrape (string $plugin) https://developer.wordpress.org/reference/functions/plugin_sandbox_scrape
* @method bool|\WP_Error populate_network (int $network_id = 1, string $domain = '', string $email = '', string $site_name = '', string $path = '/', bool $subdomain_install = false) https://developer.wordpress.org/reference/functions/populate_network
* @method void populate_options () https://developer.wordpress.org/reference/functions/populate_options
* @method void populate_roles () https://developer.wordpress.org/reference/functions/populate_roles
* @method void populate_roles_160 () https://developer.wordpress.org/reference/functions/populate_roles_160
* @method void populate_roles_210 () https://developer.wordpress.org/reference/functions/populate_roles_210
* @method void populate_roles_230 () https://developer.wordpress.org/reference/functions/populate_roles_230
* @method void populate_roles_250 () https://developer.wordpress.org/reference/functions/populate_roles_250
* @method void populate_roles_260 () https://developer.wordpress.org/reference/functions/populate_roles_260
* @method void populate_roles_270 () https://developer.wordpress.org/reference/functions/populate_roles_270
* @method void populate_roles_280 () https://developer.wordpress.org/reference/functions/populate_roles_280
* @method void populate_roles_300 () https://developer.wordpress.org/reference/functions/populate_roles_300
* @method string popuplinks (string $text) https://developer.wordpress.org/reference/functions/popuplinks
* @method void posts_nav_link (string $sep = '', string $prelabel = '', string $nxtlabel = '') https://developer.wordpress.org/reference/functions/posts_nav_link
* @method void post_author_meta_box (object $post) https://developer.wordpress.org/reference/functions/post_author_meta_box
* @method void post_categories_meta_box (\WP_Post $post, array $box) https://developer.wordpress.org/reference/functions/post_categories_meta_box
* @method void post_class (string|array $class = '', int|\WP_Post $post_id = NULL) https://developer.wordpress.org/reference/functions/post_class
* @method void post_comments_feed_link (string $link_text = '', int $post_id = '', string $feed = '') https://developer.wordpress.org/reference/functions/post_comments_feed_link
* @method void post_comment_meta_box (object $post) https://developer.wordpress.org/reference/functions/post_comment_meta_box
* @method array post_comment_meta_box_thead (array $result) https://developer.wordpress.org/reference/functions/post_comment_meta_box_thead
* @method void post_comment_status_meta_box (object $post) https://developer.wordpress.org/reference/functions/post_comment_status_meta_box
* @method bool|string|array post_custom (string $key = '') https://developer.wordpress.org/reference/functions/post_custom
* @method void post_custom_meta_box (object $post) https://developer.wordpress.org/reference/functions/post_custom_meta_box
* @method void post_excerpt_meta_box (object $post) https://developer.wordpress.org/reference/functions/post_excerpt_meta_box
* @method void post_format_meta_box (\WP_Post $post, array $box) https://developer.wordpress.org/reference/functions/post_format_meta_box
* @method void post_form_autocomplete_off () https://developer.wordpress.org/reference/functions/post_form_autocomplete_off
* @method bool post_password_required (int|\WP_Post|null $post = NULL) https://developer.wordpress.org/reference/functions/post_password_required
* @method string|bool post_permalink (int|\WP_Post $post_id = 0) https://developer.wordpress.org/reference/functions/post_permalink
* @method string|bool|null post_reply_link (array $args = [], int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/post_reply_link
* @method void post_revisions_meta_box (object $post) https://developer.wordpress.org/reference/functions/post_revisions_meta_box
* @method void post_slug_meta_box (object $post) https://developer.wordpress.org/reference/functions/post_slug_meta_box
* @method void post_submit_meta_box (\WP_Post $post, array $args = []) https://developer.wordpress.org/reference/functions/post_submit_meta_box
* @method void post_tags_meta_box (\WP_Post $post, array $box) https://developer.wordpress.org/reference/functions/post_tags_meta_box
* @method void post_thumbnail_meta_box (\WP_Post $post) https://developer.wordpress.org/reference/functions/post_thumbnail_meta_box
* @method void post_trackback_meta_box (object $post) https://developer.wordpress.org/reference/functions/post_trackback_meta_box
* @method string|void post_type_archive_title (string $prefix = '', bool $display = true) https://developer.wordpress.org/reference/functions/post_type_archive_title
* @method string prepend_attachment (string $content) https://developer.wordpress.org/reference/functions/prepend_attachment
* @method array prep_atom_text_construct (string $data) https://developer.wordpress.org/reference/functions/prep_atom_text_construct
* @method void preview_theme () https://developer.wordpress.org/reference/functions/preview_theme
* @method string preview_theme_ob_filter (string $content) https://developer.wordpress.org/reference/functions/preview_theme_ob_filter
* @method string preview_theme_ob_filter_callback (array $matches) https://developer.wordpress.org/reference/functions/preview_theme_ob_filter_callback
* @method void previous_comments_link (string $label = '') https://developer.wordpress.org/reference/functions/previous_comments_link
* @method void previous_image_link (string|array $size = 'thumbnail', string $text = false) https://developer.wordpress.org/reference/functions/previous_image_link
* @method void previous_post (string $format = '%', string $previous = 'previous post: ', string $title = 'yes', string $in_same_cat = 'no', int $limitprev = 1, string $excluded_categories = '') https://developer.wordpress.org/reference/functions/previous_post
* @method string|void previous_posts (bool $echo = true) https://developer.wordpress.org/reference/functions/previous_posts
* @method void previous_posts_link (string $label = NULL) https://developer.wordpress.org/reference/functions/previous_posts_link
* @method void previous_post_link (string $format = '&laquo; %link', string $link = '%title', bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/previous_post_link
* @method void prev_post_rel_link (string $title = '%title', bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category') https://developer.wordpress.org/reference/functions/prev_post_rel_link
* @method void pre_schema_upgrade () https://developer.wordpress.org/reference/functions/pre_schema_upgrade
* @method array print_admin_styles () https://developer.wordpress.org/reference/functions/print_admin_styles
* @method void print_column_headers (string|\WP_Screen $screen, bool $with_id = true) https://developer.wordpress.org/reference/functions/print_column_headers
* @method void print_embed_comments_button () https://developer.wordpress.org/reference/functions/print_embed_comments_button
* @method void print_embed_scripts () https://developer.wordpress.org/reference/functions/print_embed_scripts
* @method void print_embed_sharing_button () https://developer.wordpress.org/reference/functions/print_embed_sharing_button
* @method void print_embed_sharing_dialog () https://developer.wordpress.org/reference/functions/print_embed_sharing_dialog
* @method void print_embed_styles () https://developer.wordpress.org/reference/functions/print_embed_styles
* @method void print_emoji_detection_script () https://developer.wordpress.org/reference/functions/print_emoji_detection_script
* @method void print_emoji_styles () https://developer.wordpress.org/reference/functions/print_emoji_styles
* @method array print_footer_scripts () https://developer.wordpress.org/reference/functions/print_footer_scripts
* @method array print_head_scripts () https://developer.wordpress.org/reference/functions/print_head_scripts
* @method array|void print_late_styles () https://developer.wordpress.org/reference/functions/print_late_styles
* @method mixed privacy_ping_filter (mixed $sites) https://developer.wordpress.org/reference/functions/privacy_ping_filter
* @method void query_posts ($query) https://developer.wordpress.org/reference/functions/query_posts
* @method int RandomCompat_intval (int|float $number, bool $fail_open = false) https://developer.wordpress.org/reference/functions/RandomCompat_intval
* @method int RandomCompat_strlen (string $binary_string) https://developer.wordpress.org/reference/functions/RandomCompat_strlen
* @method string RandomCompat_substr (string $binary_string, int $start, int $length = NULL) https://developer.wordpress.org/reference/functions/RandomCompat_substr
* @method string random_bytes (int $bytes) https://developer.wordpress.org/reference/functions/random_bytes
* @method int random_int (int $min, int $max) https://developer.wordpress.org/reference/functions/random_int
* @method mixed rawurlencode_deep (mixed $value) https://developer.wordpress.org/reference/functions/rawurlencode_deep
* @method string readonly (mixed $readonly, mixed $current = true, bool $echo = true) https://developer.wordpress.org/reference/functions/readonly
* @method int|bool recurse_dirsize (string $directory, string $exclude = NULL) https://developer.wordpress.org/reference/functions/recurse_dirsize
* @method void redirect_canonical ($requested_url = NULL, $do_redirect = true) https://developer.wordpress.org/reference/functions/redirect_canonical
* @method bool|string redirect_guess_404_permalink () https://developer.wordpress.org/reference/functions/redirect_guess_404_permalink
* @method array redirect_this_site (array|string $deprecated = '') https://developer.wordpress.org/reference/functions/redirect_this_site
* @method void refresh_blog_details (int $blog_id = 0) https://developer.wordpress.org/reference/functions/refresh_blog_details
* @method bool|int refresh_user_details (int $id) https://developer.wordpress.org/reference/functions/refresh_user_details
* @method bool registered_meta_key_exists (string $object_type, string $meta_key) https://developer.wordpress.org/reference/functions/registered_meta_key_exists
* @method void register_activation_hook (string $file, callable $function) https://developer.wordpress.org/reference/functions/register_activation_hook
* @method void register_admin_color_schemes () https://developer.wordpress.org/reference/functions/register_admin_color_schemes
* @method void register_column_headers ($screen, $columns) https://developer.wordpress.org/reference/functions/register_column_headers
* @method void register_deactivation_hook (string $file, callable $function) https://developer.wordpress.org/reference/functions/register_deactivation_hook
* @method void register_default_headers (array $headers) https://developer.wordpress.org/reference/functions/register_default_headers
* @method \WP_Error register_importer (string $id, string $name, string $description, callable $callback) https://developer.wordpress.org/reference/functions/register_importer
* @method void register_initial_settings () https://developer.wordpress.org/reference/functions/register_initial_settings
* @method bool register_meta (string $object_type, string $meta_key, array $args, string|array $deprecated = NULL) https://developer.wordpress.org/reference/functions/register_meta
* @method void register_nav_menu (string $location, string $description) https://developer.wordpress.org/reference/functions/register_nav_menu
* @method void register_nav_menus (array $locations = []) https://developer.wordpress.org/reference/functions/register_nav_menus
* @method int|\WP_Error register_new_user (string $user_login, string $user_email) https://developer.wordpress.org/reference/functions/register_new_user
* @method void register_rest_field (string|array $object_type, string $attribute, array $args = []) https://developer.wordpress.org/reference/functions/register_rest_field
* @method bool register_rest_route (string $namespace, string $route, array $args = [], bool $override = false) https://developer.wordpress.org/reference/functions/register_rest_route
* @method void register_setting (string $option_group, string $option_name, array $args = []) https://developer.wordpress.org/reference/functions/register_setting
* @method string register_sidebar (array|string $args = []) https://developer.wordpress.org/reference/functions/register_sidebar
* @method void register_sidebars (int $number = 1, array|string $args = []) https://developer.wordpress.org/reference/functions/register_sidebars
* @method void register_sidebar_widget (string|int $name, callable $output_callback, string $classname = '') https://developer.wordpress.org/reference/functions/register_sidebar_widget
* @method void register_taxonomy ($taxonomy, $object_type, $args = []) https://developer.wordpress.org/reference/functions/register_taxonomy
* @method bool register_taxonomy_for_object_type (string $taxonomy, string $object_type) https://developer.wordpress.org/reference/functions/register_taxonomy_for_object_type
* @method bool register_theme_directory (string $directory) https://developer.wordpress.org/reference/functions/register_theme_directory
* @method void register_uninstall_hook (string $file, callable $callback) https://developer.wordpress.org/reference/functions/register_uninstall_hook
* @method void register_widget (string|\WP_Widget $widget) https://developer.wordpress.org/reference/functions/register_widget
* @method void register_widget_control (int|string $name, callable $control_callback, int $width = '', int $height = '') https://developer.wordpress.org/reference/functions/register_widget_control
* @method void rel_canonical () https://developer.wordpress.org/reference/functions/rel_canonical
* @method string remove_accents (string $string) https://developer.wordpress.org/reference/functions/remove_accents
* @method bool remove_action (string $tag, callable $function_to_remove, int $priority = 10) https://developer.wordpress.org/reference/functions/remove_action
* @method bool remove_all_actions (string $tag, int|bool $priority = false) https://developer.wordpress.org/reference/functions/remove_all_actions
* @method bool remove_all_filters (string $tag, int|bool $priority = false) https://developer.wordpress.org/reference/functions/remove_all_filters
* @method void remove_all_shortcodes () https://developer.wordpress.org/reference/functions/remove_all_shortcodes
* @method null|bool remove_custom_background () https://developer.wordpress.org/reference/functions/remove_custom_background
* @method null|bool remove_custom_image_header () https://developer.wordpress.org/reference/functions/remove_custom_image_header
* @method bool remove_editor_styles () https://developer.wordpress.org/reference/functions/remove_editor_styles
* @method bool remove_filter (string $tag, callable $function_to_remove, int $priority = 10) https://developer.wordpress.org/reference/functions/remove_filter
* @method bool remove_image_size (string $name) https://developer.wordpress.org/reference/functions/remove_image_size
* @method array|bool remove_menu_page (string $menu_slug) https://developer.wordpress.org/reference/functions/remove_menu_page
* @method void remove_meta_box (string $id, string|array|\WP_Screen $screen, string $context) https://developer.wordpress.org/reference/functions/remove_meta_box
* @method void remove_option_update_handler (string $option_group, string $option_name, callable $sanitize_callback = '') https://developer.wordpress.org/reference/functions/remove_option_update_handler
* @method array remove_option_whitelist (array $del_options, string|array $options = '') https://developer.wordpress.org/reference/functions/remove_option_whitelist
* @method void remove_permastruct (string $name) https://developer.wordpress.org/reference/functions/remove_permastruct
* @method string remove_query_arg (string|array $key, bool|string $query = false) https://developer.wordpress.org/reference/functions/remove_query_arg
* @method void remove_rewrite_tag (string $tag) https://developer.wordpress.org/reference/functions/remove_rewrite_tag
* @method void remove_role (string $role) https://developer.wordpress.org/reference/functions/remove_role
* @method void remove_shortcode (string $tag) https://developer.wordpress.org/reference/functions/remove_shortcode
* @method array|bool remove_submenu_page (string $menu_slug, string $submenu_slug) https://developer.wordpress.org/reference/functions/remove_submenu_page
* @method void remove_theme_mod (string $name) https://developer.wordpress.org/reference/functions/remove_theme_mod
* @method void remove_theme_mods () https://developer.wordpress.org/reference/functions/remove_theme_mods
* @method bool|void remove_theme_support (string $feature) https://developer.wordpress.org/reference/functions/remove_theme_support
* @method void remove_user_from_blog ($user_id, $blog_id = '', $reassign = '') https://developer.wordpress.org/reference/functions/remove_user_from_blog
* @method void request_filesystem_credentials ($form_post, $type = '', $error = false, $context = '', $extra_fields = NULL, $allow_relaxed_file_ownership = false) https://developer.wordpress.org/reference/functions/request_filesystem_credentials
* @method bool require_if_theme_supports (string $feature, string $include) https://developer.wordpress.org/reference/functions/require_if_theme_supports
* @method void require_wp_db () https://developer.wordpress.org/reference/functions/require_wp_db
* @method void reset_mbstring_encoding () https://developer.wordpress.org/reference/functions/reset_mbstring_encoding
* @method void reset_password (\WP_User $user, string $new_pass) https://developer.wordpress.org/reference/functions/reset_password
* @method bool restore_current_blog () https://developer.wordpress.org/reference/functions/restore_current_blog
* @method string|bool restore_current_locale () https://developer.wordpress.org/reference/functions/restore_current_locale
* @method string|bool restore_previous_locale () https://developer.wordpress.org/reference/functions/restore_previous_locale
* @method void rest_api_default_filters () https://developer.wordpress.org/reference/functions/rest_api_default_filters
* @method void rest_api_init () https://developer.wordpress.org/reference/functions/rest_api_init
* @method void rest_api_loaded () https://developer.wordpress.org/reference/functions/rest_api_loaded
* @method void rest_api_register_rewrites () https://developer.wordpress.org/reference/functions/rest_api_register_rewrites
* @method int rest_authorization_required_code () https://developer.wordpress.org/reference/functions/rest_authorization_required_code
* @method \WP_Error|mixed|bool rest_cookie_check_errors (\WP_Error|mixed $result) https://developer.wordpress.org/reference/functions/rest_cookie_check_errors
* @method void rest_cookie_collect_status () https://developer.wordpress.org/reference/functions/rest_cookie_collect_status
* @method \WP_REST_Response rest_do_request (\WP_REST_Request|string $request) https://developer.wordpress.org/reference/functions/rest_do_request
* @method \WP_REST_Request rest_ensure_request (array|\WP_REST_Request $request) https://developer.wordpress.org/reference/functions/rest_ensure_request
* @method \WP_REST_Response|mixed rest_ensure_response (\WP_Error|\WP_HTTP_Response|mixed $response) https://developer.wordpress.org/reference/functions/rest_ensure_response
* @method \WP_REST_Response rest_filter_response_fields (\WP_REST_Response $response, \WP_REST_Server $server, \WP_REST_Request $request) https://developer.wordpress.org/reference/functions/rest_filter_response_fields
* @method array rest_get_avatar_sizes () https://developer.wordpress.org/reference/functions/rest_get_avatar_sizes
* @method array rest_get_avatar_urls (string $email) https://developer.wordpress.org/reference/functions/rest_get_avatar_urls
* @method array|null rest_get_date_with_gmt (string $date, bool $is_utc = false) https://developer.wordpress.org/reference/functions/rest_get_date_with_gmt
* @method \WP_REST_Server rest_get_server () https://developer.wordpress.org/reference/functions/rest_get_server
* @method string rest_get_url_prefix () https://developer.wordpress.org/reference/functions/rest_get_url_prefix
* @method void rest_handle_deprecated_argument (string $function, string $message, string $version) https://developer.wordpress.org/reference/functions/rest_handle_deprecated_argument
* @method void rest_handle_deprecated_function (string $function, string $replacement, string $version) https://developer.wordpress.org/reference/functions/rest_handle_deprecated_function
* @method \WP_REST_Response rest_handle_options_request (mixed $response, \WP_REST_Server $handler, \WP_REST_Request $request) https://developer.wordpress.org/reference/functions/rest_handle_options_request
* @method bool rest_is_boolean (bool|string $maybe_bool) https://developer.wordpress.org/reference/functions/rest_is_boolean
* @method string|bool rest_is_ip_address (string $ip) https://developer.wordpress.org/reference/functions/rest_is_ip_address
* @method void rest_output_link_header () https://developer.wordpress.org/reference/functions/rest_output_link_header
* @method void rest_output_link_wp_head () https://developer.wordpress.org/reference/functions/rest_output_link_wp_head
* @method void rest_output_rsd () https://developer.wordpress.org/reference/functions/rest_output_rsd
* @method int rest_parse_date (string $date, bool $force_utc = false) https://developer.wordpress.org/reference/functions/rest_parse_date
* @method mixed rest_parse_request_arg (mixed $value, \WP_REST_Request $request, string $param) https://developer.wordpress.org/reference/functions/rest_parse_request_arg
* @method bool rest_sanitize_boolean (bool|string|int $value) https://developer.wordpress.org/reference/functions/rest_sanitize_boolean
* @method mixed rest_sanitize_request_arg (mixed $value, \WP_REST_Request $request, string $param) https://developer.wordpress.org/reference/functions/rest_sanitize_request_arg
* @method bool|\WP_Error rest_sanitize_value_from_schema (mixed $value, array $args) https://developer.wordpress.org/reference/functions/rest_sanitize_value_from_schema
* @method \WP_REST_Response rest_send_allow_header (\WP_REST_Response $response, \WP_REST_Server $server, \WP_REST_Request $request) https://developer.wordpress.org/reference/functions/rest_send_allow_header
* @method mixed rest_send_cors_headers (mixed $value) https://developer.wordpress.org/reference/functions/rest_send_cors_headers
* @method string rest_url (string $path = '', string $scheme = 'json') https://developer.wordpress.org/reference/functions/rest_url
* @method \WP_Error|bool rest_validate_request_arg (mixed $value, \WP_REST_Request $request, string $param) https://developer.wordpress.org/reference/functions/rest_validate_request_arg
* @method bool|\WP_Error rest_validate_value_from_schema (mixed $value, array $args, string $param = '') https://developer.wordpress.org/reference/functions/rest_validate_value_from_schema
* @method bool|\WP_Error retrieve_password () https://developer.wordpress.org/reference/functions/retrieve_password
* @method array retrieve_widgets (string|bool $theme_changed = false) https://developer.wordpress.org/reference/functions/retrieve_widgets
* @method bool revoke_super_admin (int $user_id) https://developer.wordpress.org/reference/functions/revoke_super_admin
* @method void rewind_posts () https://developer.wordpress.org/reference/functions/rewind_posts
* @method bool rich_edit_exists () https://developer.wordpress.org/reference/functions/rich_edit_exists
* @method void rsd_link () https://developer.wordpress.org/reference/functions/rsd_link
* @method void rss2_site_icon () https://developer.wordpress.org/reference/functions/rss2_site_icon
* @method void rss_enclosure () https://developer.wordpress.org/reference/functions/rss_enclosure
* @method string safecss_filter_attr (string $css, string $deprecated = '') https://developer.wordpress.org/reference/functions/safecss_filter_attr
* @method \stdClass|array sanitize_bookmark (\stdClass|array $bookmark, string $context = 'display') https://developer.wordpress.org/reference/functions/sanitize_bookmark
* @method void sanitize_bookmark_field ($field, $value, $bookmark_id, $context) https://developer.wordpress.org/reference/functions/sanitize_bookmark_field
* @method object|array sanitize_category (object|array $category, string $context = 'display') https://developer.wordpress.org/reference/functions/sanitize_category
* @method mixed sanitize_category_field (string $field, mixed $value, int $cat_id, string $context) https://developer.wordpress.org/reference/functions/sanitize_category_field
* @method void sanitize_comment_cookies () https://developer.wordpress.org/reference/functions/sanitize_comment_cookies
* @method string sanitize_email (string $email) https://developer.wordpress.org/reference/functions/sanitize_email
* @method string sanitize_file_name (string $filename) https://developer.wordpress.org/reference/functions/sanitize_file_name
* @method string|void sanitize_hex_color (string $color) https://developer.wordpress.org/reference/functions/sanitize_hex_color
* @method string|null sanitize_hex_color_no_hash (string $color) https://developer.wordpress.org/reference/functions/sanitize_hex_color_no_hash
* @method string sanitize_html_class (string $class, string $fallback = '') https://developer.wordpress.org/reference/functions/sanitize_html_class
* @method string sanitize_key (string $key) https://developer.wordpress.org/reference/functions/sanitize_key
* @method mixed sanitize_meta (string $meta_key, mixed $meta_value, string $object_type) https://developer.wordpress.org/reference/functions/sanitize_meta
* @method string sanitize_mime_type (string $mime_type) https://developer.wordpress.org/reference/functions/sanitize_mime_type
* @method string sanitize_option (string $option, string $value) https://developer.wordpress.org/reference/functions/sanitize_option
* @method string|bool sanitize_sql_orderby (string $orderby) https://developer.wordpress.org/reference/functions/sanitize_sql_orderby
* @method array|object sanitize_term (array|object $term, string $taxonomy, string $context = 'display') https://developer.wordpress.org/reference/functions/sanitize_term
* @method mixed sanitize_term_field (string $field, string $value, int $term_id, string $taxonomy, string $context) https://developer.wordpress.org/reference/functions/sanitize_term_field
* @method string sanitize_textarea_field (string $str) https://developer.wordpress.org/reference/functions/sanitize_textarea_field
* @method string sanitize_text_field (string $str) https://developer.wordpress.org/reference/functions/sanitize_text_field
* @method string sanitize_title (string $title, string $fallback_title = '', string $context = 'save') https://developer.wordpress.org/reference/functions/sanitize_title
* @method string sanitize_title_for_query (string $title) https://developer.wordpress.org/reference/functions/sanitize_title_for_query
* @method string sanitize_title_with_dashes (string $title, string $raw_title = '', string $context = 'display') https://developer.wordpress.org/reference/functions/sanitize_title_with_dashes
* @method string sanitize_trackback_urls (string $to_ping) https://developer.wordpress.org/reference/functions/sanitize_trackback_urls
* @method string sanitize_url (string $url, array $protocols = NULL) https://developer.wordpress.org/reference/functions/sanitize_url
* @method void sanitize_user ($username, $strict = false) https://developer.wordpress.org/reference/functions/sanitize_user
* @method mixed sanitize_user_field (string $field, mixed $value, int $user_id, string $context) https://developer.wordpress.org/reference/functions/sanitize_user_field
* @method object|array sanitize_user_object (object|array $user, string $context = 'display') https://developer.wordpress.org/reference/functions/sanitize_user_object
* @method void saveDomDocument (\DOMDocument $doc, string $filename) https://developer.wordpress.org/reference/functions/saveDomDocument
* @method void save_mod_rewrite_rules () https://developer.wordpress.org/reference/functions/save_mod_rewrite_rules
* @method void screen_icon () https://developer.wordpress.org/reference/functions/screen_icon
* @method void screen_layout ($screen) https://developer.wordpress.org/reference/functions/screen_layout
* @method void screen_meta ($screen) https://developer.wordpress.org/reference/functions/screen_meta
* @method void screen_options ($screen) https://developer.wordpress.org/reference/functions/screen_options
* @method void script_concat_settings () https://developer.wordpress.org/reference/functions/script_concat_settings
* @method array|bool search_theme_directories (bool $force = false) https://developer.wordpress.org/reference/functions/search_theme_directories
* @method bool seems_utf8 (string $str) https://developer.wordpress.org/reference/functions/seems_utf8
* @method string selected (mixed $selected, mixed $current = true, bool $echo = true) https://developer.wordpress.org/reference/functions/selected
* @method string self_admin_url (string $path = '', string $scheme = 'admin') https://developer.wordpress.org/reference/functions/self_admin_url
* @method void self_link () https://developer.wordpress.org/reference/functions/self_link
* @method void send_confirmation_on_profile_email () https://developer.wordpress.org/reference/functions/send_confirmation_on_profile_email
* @method void send_frame_options_header () https://developer.wordpress.org/reference/functions/send_frame_options_header
* @method void send_nosniff_header () https://developer.wordpress.org/reference/functions/send_nosniff_header
* @method string|bool send_origin_headers () https://developer.wordpress.org/reference/functions/send_origin_headers
* @method array separate_comments (array $comments) https://developer.wordpress.org/reference/functions/separate_comments
* @method void settings_errors (string $setting = '', bool $sanitize = false, bool $hide_on_update = false) https://developer.wordpress.org/reference/functions/settings_errors
* @method void settings_fields (string $option_group) https://developer.wordpress.org/reference/functions/settings_fields
* @method void setup_config_display_header (string|array $body_classes = []) https://developer.wordpress.org/reference/functions/setup_config_display_header
* @method bool setup_postdata (\WP_Post|object|int $post) https://developer.wordpress.org/reference/functions/setup_postdata
* @method void setup_userdata (int $for_user_id = '') https://developer.wordpress.org/reference/functions/setup_userdata
* @method void set_current_screen (mixed $hook_name = '') https://developer.wordpress.org/reference/functions/set_current_screen
* @method \WP_User set_current_user (int|null $id, string $name = '') https://developer.wordpress.org/reference/functions/set_current_user
* @method array|\WP_Error|bool set_post_format (int|object $post, string $format) https://developer.wordpress.org/reference/functions/set_post_format
* @method void set_post_thumbnail_size (int $width = 0, int $height = 0, bool|array $crop = false) https://developer.wordpress.org/reference/functions/set_post_thumbnail_size
* @method void set_query_var (string $var, mixed $value) https://developer.wordpress.org/reference/functions/set_query_var
* @method void set_screen_options () https://developer.wordpress.org/reference/functions/set_screen_options
* @method bool set_site_transient (string $transient, mixed $value, int $expiration = 0) https://developer.wordpress.org/reference/functions/set_site_transient
* @method void set_theme_mod (string $name, mixed $value) https://developer.wordpress.org/reference/functions/set_theme_mod
* @method bool set_transient (string $transient, mixed $value, int $expiration = 0) https://developer.wordpress.org/reference/functions/set_transient
* @method string set_url_scheme (string $url, string|null $scheme = NULL) https://developer.wordpress.org/reference/functions/set_url_scheme
* @method bool|null set_user_setting (string $name, string $value) https://developer.wordpress.org/reference/functions/set_user_setting
* @method array shortcode_atts (array $pairs, array $atts, string $shortcode = '') https://developer.wordpress.org/reference/functions/shortcode_atts
* @method bool shortcode_exists (string $tag) https://developer.wordpress.org/reference/functions/shortcode_exists
* @method array|string shortcode_parse_atts (string $text) https://developer.wordpress.org/reference/functions/shortcode_parse_atts
* @method string shortcode_unautop (string $pee) https://developer.wordpress.org/reference/functions/shortcode_unautop
* @method void show_admin_bar ($show) https://developer.wordpress.org/reference/functions/show_admin_bar
* @method void show_blog_form (string $blogname = '', string $blog_title = '', \WP_Error|string $errors = '') https://developer.wordpress.org/reference/functions/show_blog_form
* @method void show_message (string|\WP_Error $message) https://developer.wordpress.org/reference/functions/show_message
* @method void show_user_form (string $user_name = '', string $user_email = '', \WP_Error|string $errors = '') https://developer.wordpress.org/reference/functions/show_user_form
* @method void shutdown_action_hook () https://developer.wordpress.org/reference/functions/shutdown_action_hook
* @method void signup_another_blog (string $blogname = '', string $blog_title = '', \WP_Error|string $errors = '') https://developer.wordpress.org/reference/functions/signup_another_blog
* @method void signup_blog (string $user_name = '', string $user_email = '', string $blogname = '', string $blog_title = '', \WP_Error|string $errors = '') https://developer.wordpress.org/reference/functions/signup_blog
* @method array signup_get_available_languages () https://developer.wordpress.org/reference/functions/signup_get_available_languages
* @method array signup_nonce_check (array $result) https://developer.wordpress.org/reference/functions/signup_nonce_check
* @method void signup_nonce_fields () https://developer.wordpress.org/reference/functions/signup_nonce_fields
* @method void signup_user (string $user_name = '', string $user_email = '', \WP_Error|string $errors = '') https://developer.wordpress.org/reference/functions/signup_user
* @method string|void single_cat_title (string $prefix = '', bool $display = true) https://developer.wordpress.org/reference/functions/single_cat_title
* @method string|void single_month_title (string $prefix = '', bool $display = true) https://developer.wordpress.org/reference/functions/single_month_title
* @method string|void single_post_title (string $prefix = '', bool $display = true) https://developer.wordpress.org/reference/functions/single_post_title
* @method string|void single_tag_title (string $prefix = '', bool $display = true) https://developer.wordpress.org/reference/functions/single_tag_title
* @method string|void single_term_title (string $prefix = '', bool $display = true) https://developer.wordpress.org/reference/functions/single_term_title
* @method bool site_admin_notice () https://developer.wordpress.org/reference/functions/site_admin_notice
* @method void site_icon_url (int $size = 512, string $url = '', int $blog_id = 0) https://developer.wordpress.org/reference/functions/site_icon_url
* @method string site_url (string $path = '', string $scheme = NULL) https://developer.wordpress.org/reference/functions/site_url
* @method string|bool size_format (int|string $bytes, int $decimals = 0) https://developer.wordpress.org/reference/functions/size_format
* @method void smilies_init () https://developer.wordpress.org/reference/functions/smilies_init
* @method int sort_menu (array $a, array $b) https://developer.wordpress.org/reference/functions/sort_menu
* @method void spawn_cron (int $gmt_time = 0) https://developer.wordpress.org/reference/functions/spawn_cron
* @method array spl_autoload_functions () https://developer.wordpress.org/reference/functions/spl_autoload_functions
* @method void spl_autoload_register (callable $autoload_function, bool $throw = true, bool $prepend = false) https://developer.wordpress.org/reference/functions/spl_autoload_register
* @method bool spl_autoload_unregister (callable $function) https://developer.wordpress.org/reference/functions/spl_autoload_unregister
* @method void startElement (mixed $parser, string $tagName, array $attrs) https://developer.wordpress.org/reference/functions/startElement
* @method void start_post_rel_link (string $title = '%title', bool $in_same_cat = false, string $excluded_categories = '') https://developer.wordpress.org/reference/functions/start_post_rel_link
* @method void start_wp () https://developer.wordpress.org/reference/functions/start_wp
* @method void status_header (int $code, string $description = '') https://developer.wordpress.org/reference/functions/status_header
* @method void sticky_class (int $post_id = NULL) https://developer.wordpress.org/reference/functions/sticky_class
* @method bool stream_preview_image (int $post_id) https://developer.wordpress.org/reference/functions/stream_preview_image
* @method void stripos ($haystack, $needle) https://developer.wordpress.org/reference/functions/stripos
* @method mixed stripslashes_deep (mixed $value) https://developer.wordpress.org/reference/functions/stripslashes_deep
* @method mixed stripslashes_from_strings_only (mixed $value) https://developer.wordpress.org/reference/functions/stripslashes_from_strings_only
* @method string strip_fragment_from_url (string $url) https://developer.wordpress.org/reference/functions/strip_fragment_from_url
* @method string strip_shortcodes (string $content) https://developer.wordpress.org/reference/functions/strip_shortcodes
* @method string|bool strip_shortcode_tag (array $m) https://developer.wordpress.org/reference/functions/strip_shortcode_tag
* @method void submit_button (string $text = NULL, string $type = 'primary', string $name = 'submit', bool $wrap = true, array|string $other_attributes = NULL) https://developer.wordpress.org/reference/functions/submit_button
* @method void switch_theme (string $stylesheet) https://developer.wordpress.org/reference/functions/switch_theme
* @method bool switch_to_blog (int $new_blog, bool $deprecated = NULL) https://developer.wordpress.org/reference/functions/switch_to_blog
* @method bool switch_to_locale (string $locale) https://developer.wordpress.org/reference/functions/switch_to_locale
* @method object|array sync_category_tag_slugs (object $term, string $taxonomy) https://developer.wordpress.org/reference/functions/sync_category_tag_slugs
* @method string tag_description (int $tag = 0) https://developer.wordpress.org/reference/functions/tag_description
* @method string tag_escape (string $tag_name) https://developer.wordpress.org/reference/functions/tag_escape
* @method mixed tag_exists (int|string $tag_name) https://developer.wordpress.org/reference/functions/tag_exists
* @method bool taxonomy_exists (string $taxonomy) https://developer.wordpress.org/reference/functions/taxonomy_exists
* @method string term_description (int $term = 0, null $deprecated = NULL) https://developer.wordpress.org/reference/functions/term_description
* @method mixed term_exists (int|string $term, string $taxonomy = '', int $parent = NULL) https://developer.wordpress.org/reference/functions/term_exists
* @method bool term_is_ancestor_of (int|object $term1, int|object $term2, string $taxonomy) https://developer.wordpress.org/reference/functions/term_is_ancestor_of
* @method void themes_api ($action, $args = []) https://developer.wordpress.org/reference/functions/themes_api
* @method void theme_update_available (\WP_Theme $theme) https://developer.wordpress.org/reference/functions/theme_update_available
* @method void the_archive_description (string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/the_archive_description
* @method void the_archive_title (string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/the_archive_title
* @method void the_attachment_link (int|\WP_Post $id = 0, bool $fullsize = false, bool $deprecated = false, bool $permalink = false) https://developer.wordpress.org/reference/functions/the_attachment_link
* @method void the_attachment_links (int|bool $id = false) https://developer.wordpress.org/reference/functions/the_attachment_links
* @method string|null the_author (string $deprecated = '', string $deprecated_echo = true) https://developer.wordpress.org/reference/functions/the_author
* @method void the_author_aim () https://developer.wordpress.org/reference/functions/the_author_aim
* @method void the_author_description () https://developer.wordpress.org/reference/functions/the_author_description
* @method void the_author_email () https://developer.wordpress.org/reference/functions/the_author_email
* @method void the_author_firstname () https://developer.wordpress.org/reference/functions/the_author_firstname
* @method void the_author_icq () https://developer.wordpress.org/reference/functions/the_author_icq
* @method void the_author_ID () https://developer.wordpress.org/reference/functions/the_author_ID
* @method void the_author_lastname () https://developer.wordpress.org/reference/functions/the_author_lastname
* @method void the_author_link () https://developer.wordpress.org/reference/functions/the_author_link
* @method void the_author_login () https://developer.wordpress.org/reference/functions/the_author_login
* @method void the_author_meta (string $field = '', int $user_id = false) https://developer.wordpress.org/reference/functions/the_author_meta
* @method void the_author_msn () https://developer.wordpress.org/reference/functions/the_author_msn
* @method void the_author_nickname () https://developer.wordpress.org/reference/functions/the_author_nickname
* @method void the_author_posts () https://developer.wordpress.org/reference/functions/the_author_posts
* @method void the_author_posts_link (string $deprecated = '') https://developer.wordpress.org/reference/functions/the_author_posts_link
* @method void the_author_url () https://developer.wordpress.org/reference/functions/the_author_url
* @method void the_author_yim () https://developer.wordpress.org/reference/functions/the_author_yim
* @method void the_category (string $separator = '', string $parents = '', int $post_id = false) https://developer.wordpress.org/reference/functions/the_category
* @method void the_category_head (string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/the_category_head
* @method int the_category_ID (bool $echo = true) https://developer.wordpress.org/reference/functions/the_category_ID
* @method void the_category_rss (string $type = NULL) https://developer.wordpress.org/reference/functions/the_category_rss
* @method object the_comment () https://developer.wordpress.org/reference/functions/the_comment
* @method void the_comments_navigation (array $args = []) https://developer.wordpress.org/reference/functions/the_comments_navigation
* @method void the_comments_pagination (array $args = []) https://developer.wordpress.org/reference/functions/the_comments_pagination
* @method void the_content (string $more_link_text = NULL, bool $strip_teaser = false) https://developer.wordpress.org/reference/functions/the_content
* @method void the_content_feed (string $feed_type = NULL) https://developer.wordpress.org/reference/functions/the_content_feed
* @method void the_content_rss (string $more_link_text = '(more...)', int $stripteaser = 0, string $more_file = '', int $cut = 0, int $encode_html = 0) https://developer.wordpress.org/reference/functions/the_content_rss
* @method void the_custom_header_markup () https://developer.wordpress.org/reference/functions/the_custom_header_markup
* @method void the_custom_logo (int $blog_id = 0) https://developer.wordpress.org/reference/functions/the_custom_logo
* @method string|void the_date (string $d = '', string $before = '', string $after = '', bool $echo = true) https://developer.wordpress.org/reference/functions/the_date
* @method void the_date_xml () https://developer.wordpress.org/reference/functions/the_date_xml
* @method void the_editor (string $content, string $id = 'content', string $prev_id = 'title', bool $media_buttons = true, int $tab_index = 2, bool $extended = true) https://developer.wordpress.org/reference/functions/the_editor
* @method void the_embed_site_title () https://developer.wordpress.org/reference/functions/the_embed_site_title
* @method void the_excerpt () https://developer.wordpress.org/reference/functions/the_excerpt
* @method void the_excerpt_embed () https://developer.wordpress.org/reference/functions/the_excerpt_embed
* @method void the_excerpt_rss () https://developer.wordpress.org/reference/functions/the_excerpt_rss
* @method void the_feed_link (string $anchor, string $feed = '') https://developer.wordpress.org/reference/functions/the_feed_link
* @method void the_generator ($type) https://developer.wordpress.org/reference/functions/the_generator
* @method void the_guid (int|\WP_Post $post = 0) https://developer.wordpress.org/reference/functions/the_guid
* @method void the_header_image_tag (array $attr = []) https://developer.wordpress.org/reference/functions/the_header_image_tag
* @method void the_header_video_url () https://developer.wordpress.org/reference/functions/the_header_video_url
* @method void the_ID () https://developer.wordpress.org/reference/functions/the_ID
* @method void the_media_upload_tabs () https://developer.wordpress.org/reference/functions/the_media_upload_tabs
* @method void the_meta () https://developer.wordpress.org/reference/functions/the_meta
* @method void the_modified_author () https://developer.wordpress.org/reference/functions/the_modified_author
* @method string|void the_modified_date (string $d = '', string $before = '', string $after = '', bool $echo = true) https://developer.wordpress.org/reference/functions/the_modified_date
* @method void the_modified_time (string $d = '') https://developer.wordpress.org/reference/functions/the_modified_time
* @method void the_permalink ($post = 0) https://developer.wordpress.org/reference/functions/the_permalink
* @method void the_permalink_rss () https://developer.wordpress.org/reference/functions/the_permalink_rss
* @method void the_post () https://developer.wordpress.org/reference/functions/the_post
* @method void the_posts_navigation (array $args = []) https://developer.wordpress.org/reference/functions/the_posts_navigation
* @method void the_posts_pagination (array $args = []) https://developer.wordpress.org/reference/functions/the_posts_pagination
* @method void the_post_navigation (array $args = []) https://developer.wordpress.org/reference/functions/the_post_navigation
* @method void the_post_password () https://developer.wordpress.org/reference/functions/the_post_password
* @method void the_post_thumbnail (string|array $size = 'post-thumbnail', string|array $attr = '') https://developer.wordpress.org/reference/functions/the_post_thumbnail
* @method void the_post_thumbnail_caption (int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/the_post_thumbnail_caption
* @method void the_post_thumbnail_url (string|array $size = 'post-thumbnail') https://developer.wordpress.org/reference/functions/the_post_thumbnail_url
* @method void the_privacy_policy_link (string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/the_privacy_policy_link
* @method void the_search_query () https://developer.wordpress.org/reference/functions/the_search_query
* @method void the_shortlink (string $text = '', string $title = '', string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/the_shortlink
* @method void the_tags (string $before = NULL, string $sep = ', ', string $after = '') https://developer.wordpress.org/reference/functions/the_tags
* @method void the_taxonomies (array $args = []) https://developer.wordpress.org/reference/functions/the_taxonomies
* @method bool|void the_terms (int $id, string $taxonomy, string $before = '', string $sep = ', ', string $after = '') https://developer.wordpress.org/reference/functions/the_terms
* @method void the_time (string $d = '') https://developer.wordpress.org/reference/functions/the_time
* @method string|void the_title (string $before = '', string $after = '', bool $echo = true) https://developer.wordpress.org/reference/functions/the_title
* @method string|void the_title_attribute (string|array $args = '') https://developer.wordpress.org/reference/functions/the_title_attribute
* @method void the_title_rss () https://developer.wordpress.org/reference/functions/the_title_rss
* @method void the_weekday () https://developer.wordpress.org/reference/functions/the_weekday
* @method void the_weekday_date (string $before = '', string $after = '') https://developer.wordpress.org/reference/functions/the_weekday_date
* @method void the_widget (string $widget, array $instance = [], array $args = []) https://developer.wordpress.org/reference/functions/the_widget
* @method bool timer_start () https://developer.wordpress.org/reference/functions/timer_start
* @method string timer_stop (int|bool $display = 0, int $precision = 3) https://developer.wordpress.org/reference/functions/timer_stop
* @method void tinymce_include () https://developer.wordpress.org/reference/functions/tinymce_include
* @method void touch_time (int|bool $edit = 1, int|bool $for_post = 1, int $tab_index = 0, int|bool $multi = 0) https://developer.wordpress.org/reference/functions/touch_time
* @method int|bool|void trackback (string $trackback_url, string $title, string $excerpt, int $ID) https://developer.wordpress.org/reference/functions/trackback
* @method void trackback_rdf (int $deprecated = '') https://developer.wordpress.org/reference/functions/trackback_rdf
* @method void trackback_response (mixed $error = 0, string $error_message = '') https://developer.wordpress.org/reference/functions/trackback_response
* @method void|string trackback_url (bool $deprecated_echo = true) https://developer.wordpress.org/reference/functions/trackback_url
* @method string trailingslashit (string $string) https://developer.wordpress.org/reference/functions/trailingslashit
* @method string translate (string $text, string $domain = 'default') https://developer.wordpress.org/reference/functions/translate
* @method string translate_level_to_role (int $level) https://developer.wordpress.org/reference/functions/translate_level_to_role
* @method string translate_nooped_plural (array $nooped_plural, int $count, string $domain = 'default') https://developer.wordpress.org/reference/functions/translate_nooped_plural
* @method string translate_smiley (array $matches) https://developer.wordpress.org/reference/functions/translate_smiley
* @method string translate_user_role (string $name) https://developer.wordpress.org/reference/functions/translate_user_role
* @method string translate_with_context (string $text, string $domain = 'default') https://developer.wordpress.org/reference/functions/translate_with_context
* @method string translate_with_gettext_context (string $text, string $context, string $domain = 'default') https://developer.wordpress.org/reference/functions/translate_with_gettext_context
* @method void translations_api ($type, $args = NULL) https://developer.wordpress.org/reference/functions/translations_api
* @method string type_url_form_audio () https://developer.wordpress.org/reference/functions/type_url_form_audio
* @method string type_url_form_file () https://developer.wordpress.org/reference/functions/type_url_form_file
* @method string type_url_form_image () https://developer.wordpress.org/reference/functions/type_url_form_image
* @method string type_url_form_video () https://developer.wordpress.org/reference/functions/type_url_form_video
* @method bool undismiss_core_update (string $version, string $locale) https://developer.wordpress.org/reference/functions/undismiss_core_update
* @method string unescape_invalid_shortcodes (string $content) https://developer.wordpress.org/reference/functions/unescape_invalid_shortcodes
* @method bool uninstall_plugin (string $plugin) https://developer.wordpress.org/reference/functions/uninstall_plugin
* @method bool unload_textdomain (string $domain) https://developer.wordpress.org/reference/functions/unload_textdomain
* @method bool|void unregister_default_headers (string|array $header) https://developer.wordpress.org/reference/functions/unregister_default_headers
* @method bool unregister_meta_key (string $object_type, string $meta_key) https://developer.wordpress.org/reference/functions/unregister_meta_key
* @method bool unregister_nav_menu (string $location) https://developer.wordpress.org/reference/functions/unregister_nav_menu
* @method void unregister_setting (string $option_group, string $option_name, callable $deprecated = '') https://developer.wordpress.org/reference/functions/unregister_setting
* @method void unregister_sidebar (string|int $sidebar_id) https://developer.wordpress.org/reference/functions/unregister_sidebar
* @method void unregister_sidebar_widget (int|string $id) https://developer.wordpress.org/reference/functions/unregister_sidebar_widget
* @method bool|\WP_Error unregister_taxonomy (string $taxonomy) https://developer.wordpress.org/reference/functions/unregister_taxonomy
* @method bool unregister_taxonomy_for_object_type (string $taxonomy, string $object_type) https://developer.wordpress.org/reference/functions/unregister_taxonomy_for_object_type
* @method void unregister_widget ($widget) https://developer.wordpress.org/reference/functions/unregister_widget
* @method void unregister_widget_control (int|string $id) https://developer.wordpress.org/reference/functions/unregister_widget_control
* @method string untrailingslashit (string $string) https://developer.wordpress.org/reference/functions/untrailingslashit
* @method mixed unzip_file (string $file, string $to) https://developer.wordpress.org/reference/functions/unzip_file
* @method string update_archived (int $id, string $archived) https://developer.wordpress.org/reference/functions/update_archived
* @method bool update_blog_details (int $blog_id, array $details = []) https://developer.wordpress.org/reference/functions/update_blog_details
* @method bool update_blog_option (int $id, string $option, mixed $value, mixed $deprecated = NULL) https://developer.wordpress.org/reference/functions/update_blog_option
* @method void update_blog_public (int $old_value, int $value) https://developer.wordpress.org/reference/functions/update_blog_public
* @method string|bool update_blog_status (int $blog_id, string $pref, string $value, null $deprecated = NULL) https://developer.wordpress.org/reference/functions/update_blog_status
* @method bool update_category_cache () https://developer.wordpress.org/reference/functions/update_category_cache
* @method void update_comment_cache (array $comments, bool $update_meta_cache = true) https://developer.wordpress.org/reference/functions/update_comment_cache
* @method int|bool update_comment_meta (int $comment_id, string $meta_key, mixed $meta_value, mixed $prev_value = '') https://developer.wordpress.org/reference/functions/update_comment_meta
* @method \WP_Error|null update_core (string $from, string $to) https://developer.wordpress.org/reference/functions/update_core
* @method array update_gallery_tab (array $tabs) https://developer.wordpress.org/reference/functions/update_gallery_tab
* @method void update_home_siteurl (string $old_value, string $value) https://developer.wordpress.org/reference/functions/update_home_siteurl
* @method int|bool update_metadata (string $meta_type, int $object_id, string $meta_key, mixed $meta_value, mixed $prev_value = '') https://developer.wordpress.org/reference/functions/update_metadata
* @method bool update_metadata_by_mid (string $meta_type, int $meta_id, string $meta_value, string $meta_key = false) https://developer.wordpress.org/reference/functions/update_metadata_by_mid
* @method array|bool update_meta_cache (string $meta_type, int|array $object_ids) https://developer.wordpress.org/reference/functions/update_meta_cache
* @method bool|void update_nag () https://developer.wordpress.org/reference/functions/update_nag
* @method void update_network_cache (array $networks) https://developer.wordpress.org/reference/functions/update_network_cache
* @method bool update_network_option (int $network_id, string $option, mixed $value) https://developer.wordpress.org/reference/functions/update_network_option
* @method void update_network_option_new_admin_email (string $old_value, string $value) https://developer.wordpress.org/reference/functions/update_network_option_new_admin_email
* @method void|bool update_object_term_cache (string|array $object_ids, array|string $object_type) https://developer.wordpress.org/reference/functions/update_object_term_cache
* @method bool update_option (string $option, mixed $value, string|bool $autoload = NULL) https://developer.wordpress.org/reference/functions/update_option
* @method void update_option_new_admin_email (string $old_value, string $value) https://developer.wordpress.org/reference/functions/update_option_new_admin_email
* @method void update_page_cache (array $pages) https://developer.wordpress.org/reference/functions/update_page_cache
* @method void update_posts_count (string $deprecated = '') https://developer.wordpress.org/reference/functions/update_posts_count
* @method void update_post_thumbnail_cache (\WP_Query $wp_query = NULL) https://developer.wordpress.org/reference/functions/update_post_thumbnail_cache
* @method void update_recently_edited (string $file) https://developer.wordpress.org/reference/functions/update_recently_edited
* @method void update_right_now_message () https://developer.wordpress.org/reference/functions/update_right_now_message
* @method void update_site_cache (array $sites) https://developer.wordpress.org/reference/functions/update_site_cache
* @method bool update_site_option (string $option, mixed $value) https://developer.wordpress.org/reference/functions/update_site_option
* @method array|bool update_termmeta_cache (array $term_ids) https://developer.wordpress.org/reference/functions/update_termmeta_cache
* @method void update_term_cache (array $terms, string $taxonomy = '') https://developer.wordpress.org/reference/functions/update_term_cache
* @method int|\WP_Error|bool update_term_meta (int $term_id, string $meta_key, mixed $meta_value, mixed $prev_value = '') https://developer.wordpress.org/reference/functions/update_term_meta
* @method bool update_usermeta (int $user_id, string $meta_key, mixed $meta_value) https://developer.wordpress.org/reference/functions/update_usermeta
* @method bool|null update_user_caches (\WP_User $user) https://developer.wordpress.org/reference/functions/update_user_caches
* @method int|bool update_user_meta (int $user_id, string $meta_key, mixed $meta_value, mixed $prev_value = '') https://developer.wordpress.org/reference/functions/update_user_meta
* @method int|bool update_user_option (int $user_id, string $option_name, mixed $newvalue, bool $global = false) https://developer.wordpress.org/reference/functions/update_user_option
* @method int update_user_status (int $id, string $pref, int $value, null $deprecated = NULL) https://developer.wordpress.org/reference/functions/update_user_status
* @method void upgrade_100 () https://developer.wordpress.org/reference/functions/upgrade_100
* @method void upgrade_101 () https://developer.wordpress.org/reference/functions/upgrade_101
* @method void upgrade_110 () https://developer.wordpress.org/reference/functions/upgrade_110
* @method void upgrade_130 () https://developer.wordpress.org/reference/functions/upgrade_130
* @method void upgrade_160 () https://developer.wordpress.org/reference/functions/upgrade_160
* @method void upgrade_210 () https://developer.wordpress.org/reference/functions/upgrade_210
* @method void upgrade_230 () https://developer.wordpress.org/reference/functions/upgrade_230
* @method void upgrade_230_old_tables () https://developer.wordpress.org/reference/functions/upgrade_230_old_tables
* @method void upgrade_230_options_table () https://developer.wordpress.org/reference/functions/upgrade_230_options_table
* @method void upgrade_250 () https://developer.wordpress.org/reference/functions/upgrade_250
* @method void upgrade_252 () https://developer.wordpress.org/reference/functions/upgrade_252
* @method void upgrade_260 () https://developer.wordpress.org/reference/functions/upgrade_260
* @method void upgrade_270 () https://developer.wordpress.org/reference/functions/upgrade_270
* @method void upgrade_280 () https://developer.wordpress.org/reference/functions/upgrade_280
* @method void upgrade_290 () https://developer.wordpress.org/reference/functions/upgrade_290
* @method void upgrade_300 () https://developer.wordpress.org/reference/functions/upgrade_300
* @method void upgrade_330 () https://developer.wordpress.org/reference/functions/upgrade_330
* @method void upgrade_340 () https://developer.wordpress.org/reference/functions/upgrade_340
* @method void upgrade_350 () https://developer.wordpress.org/reference/functions/upgrade_350
* @method void upgrade_370 () https://developer.wordpress.org/reference/functions/upgrade_370
* @method void upgrade_372 () https://developer.wordpress.org/reference/functions/upgrade_372
* @method void upgrade_380 () https://developer.wordpress.org/reference/functions/upgrade_380
* @method void upgrade_400 () https://developer.wordpress.org/reference/functions/upgrade_400
* @method void upgrade_420 () https://developer.wordpress.org/reference/functions/upgrade_420
* @method void upgrade_430 () https://developer.wordpress.org/reference/functions/upgrade_430
* @method void upgrade_430_fix_comments () https://developer.wordpress.org/reference/functions/upgrade_430_fix_comments
* @method void upgrade_431 () https://developer.wordpress.org/reference/functions/upgrade_431
* @method void upgrade_440 () https://developer.wordpress.org/reference/functions/upgrade_440
* @method void upgrade_450 () https://developer.wordpress.org/reference/functions/upgrade_450
* @method void upgrade_460 () https://developer.wordpress.org/reference/functions/upgrade_460
* @method void upgrade_all () https://developer.wordpress.org/reference/functions/upgrade_all
* @method void upgrade_network () https://developer.wordpress.org/reference/functions/upgrade_network
* @method void upgrade_old_slugs () https://developer.wordpress.org/reference/functions/upgrade_old_slugs
* @method string|array upload_is_file_too_big (array $upload) https://developer.wordpress.org/reference/functions/upload_is_file_too_big
* @method bool upload_is_user_over_quota (bool $echo = true) https://developer.wordpress.org/reference/functions/upload_is_user_over_quota
* @method int upload_size_limit_filter (int $size) https://developer.wordpress.org/reference/functions/upload_size_limit_filter
* @method void upload_space_setting (int $id) https://developer.wordpress.org/reference/functions/upload_space_setting
* @method mixed urldecode_deep (mixed $value) https://developer.wordpress.org/reference/functions/urldecode_deep
* @method mixed urlencode_deep (mixed $value) https://developer.wordpress.org/reference/functions/urlencode_deep
* @method bool url_is_accessable_via_ssl (string $url) https://developer.wordpress.org/reference/functions/url_is_accessable_via_ssl
* @method string url_shorten (string $url, int $length = 35) https://developer.wordpress.org/reference/functions/url_shorten
* @method int url_to_postid (string $url) https://developer.wordpress.org/reference/functions/url_to_postid
* @method int|bool username_exists (string $username) https://developer.wordpress.org/reference/functions/username_exists
* @method bool users_can_register_signup_filter () https://developer.wordpress.org/reference/functions/users_can_register_signup_filter
* @method string user_admin_url (string $path = '', string $scheme = 'admin') https://developer.wordpress.org/reference/functions/user_admin_url
* @method bool user_can (int|\WP_User $user, string $capability) https://developer.wordpress.org/reference/functions/user_can
* @method void user_can_access_admin_page () https://developer.wordpress.org/reference/functions/user_can_access_admin_page
* @method bool user_can_create_draft (int $user_id, int $blog_id = 1, int $category_id = 'None') https://developer.wordpress.org/reference/functions/user_can_create_draft
* @method bool user_can_create_post (int $user_id, int $blog_id = 1, int $category_id = 'None') https://developer.wordpress.org/reference/functions/user_can_create_post
* @method bool user_can_delete_post (int $user_id, int $post_id, int $blog_id = 1) https://developer.wordpress.org/reference/functions/user_can_delete_post
* @method bool user_can_delete_post_comments (int $user_id, int $post_id, int $blog_id = 1) https://developer.wordpress.org/reference/functions/user_can_delete_post_comments
* @method bool user_can_edit_post (int $user_id, int $post_id, int $blog_id = 1) https://developer.wordpress.org/reference/functions/user_can_edit_post
* @method bool user_can_edit_post_comments (int $user_id, int $post_id, int $blog_id = 1) https://developer.wordpress.org/reference/functions/user_can_edit_post_comments
* @method bool user_can_edit_post_date (int $user_id, int $post_id, int $blog_id = 1) https://developer.wordpress.org/reference/functions/user_can_edit_post_date
* @method bool user_can_edit_user (int $user_id, int $other_user) https://developer.wordpress.org/reference/functions/user_can_edit_user
* @method bool user_can_richedit () https://developer.wordpress.org/reference/functions/user_can_richedit
* @method bool user_can_set_post_date (int $user_id, int $blog_id = 1, int $category_id = 'None') https://developer.wordpress.org/reference/functions/user_can_set_post_date
* @method bool user_pass_ok (string $user_login, string $user_pass) https://developer.wordpress.org/reference/functions/user_pass_ok
* @method void user_trailingslashit ($string, $type_of_url = '') https://developer.wordpress.org/reference/functions/user_trailingslashit
* @method void use_codepress () https://developer.wordpress.org/reference/functions/use_codepress
* @method void use_ssl_preference ($user) https://developer.wordpress.org/reference/functions/use_ssl_preference
* @method string utf8_uri_encode (string $utf8_string, int $length = 0) https://developer.wordpress.org/reference/functions/utf8_uri_encode
* @method array validate_active_plugins () https://developer.wordpress.org/reference/functions/validate_active_plugins
* @method null|bool validate_another_blog_signup () https://developer.wordpress.org/reference/functions/validate_another_blog_signup
* @method array validate_blog_form () https://developer.wordpress.org/reference/functions/validate_blog_form
* @method bool validate_blog_signup () https://developer.wordpress.org/reference/functions/validate_blog_signup
* @method void validate_current_theme () https://developer.wordpress.org/reference/functions/validate_current_theme
* @method string|bool validate_email (string $email, bool $check_domain = true) https://developer.wordpress.org/reference/functions/validate_email
* @method int validate_file (string $file, array $allowed_files = []) https://developer.wordpress.org/reference/functions/validate_file
* @method string|null validate_file_to_edit (string $file, array $allowed_files = []) https://developer.wordpress.org/reference/functions/validate_file_to_edit
* @method \WP_Error|int validate_plugin (string $plugin) https://developer.wordpress.org/reference/functions/validate_plugin
* @method bool validate_username (string $username) https://developer.wordpress.org/reference/functions/validate_username
* @method array validate_user_form () https://developer.wordpress.org/reference/functions/validate_user_form
* @method bool validate_user_signup () https://developer.wordpress.org/reference/functions/validate_user_signup
* @method bool valid_unicode (int $i) https://developer.wordpress.org/reference/functions/valid_unicode
* @method bool|object verify_file_md5 (string $filename, string $expected_md5) https://developer.wordpress.org/reference/functions/verify_file_md5
* @method string walk_category_dropdown_tree () https://developer.wordpress.org/reference/functions/walk_category_dropdown_tree
* @method string walk_category_tree () https://developer.wordpress.org/reference/functions/walk_category_tree
* @method string walk_nav_menu_tree (array $items, int $depth, \stdClass $r) https://developer.wordpress.org/reference/functions/walk_nav_menu_tree
* @method string walk_page_dropdown_tree () https://developer.wordpress.org/reference/functions/walk_page_dropdown_tree
* @method string walk_page_tree (array $pages, int $depth, int $current_page, array $r) https://developer.wordpress.org/reference/functions/walk_page_tree
* @method void weblog_ping (string $server = '', string $path = '') https://developer.wordpress.org/reference/functions/weblog_ping
* @method string welcome_user_msg_filter (string $text) https://developer.wordpress.org/reference/functions/welcome_user_msg_filter
* @method bool win_is_writable (string $path) https://developer.wordpress.org/reference/functions/win_is_writable
* @method void wlwmanifest_link () https://developer.wordpress.org/reference/functions/wlwmanifest_link
* @method void wp (string|array $query_vars = '') https://developer.wordpress.org/reference/functions/wp
* @method string wpautop (string $pee, bool $br = true) https://developer.wordpress.org/reference/functions/wpautop
* @method void wpmu_activate_signup ($key) https://developer.wordpress.org/reference/functions/wpmu_activate_signup
* @method void wpmu_activate_stylesheet () https://developer.wordpress.org/reference/functions/wpmu_activate_stylesheet
* @method void wpmu_admin_do_redirect (string $url = '') https://developer.wordpress.org/reference/functions/wpmu_admin_do_redirect
* @method string wpmu_admin_redirect_add_updated_param (string $url = '') https://developer.wordpress.org/reference/functions/wpmu_admin_redirect_add_updated_param
* @method void wpmu_checkAvailableSpace () https://developer.wordpress.org/reference/functions/wpmu_checkAvailableSpace
* @method void wpmu_create_blog ($domain, $path, $title, $user_id, $meta = [], $network_id = 1) https://developer.wordpress.org/reference/functions/wpmu_create_blog
* @method void wpmu_create_user ($user_name, $password, $email) https://developer.wordpress.org/reference/functions/wpmu_create_user
* @method object wpmu_current_site () https://developer.wordpress.org/reference/functions/wpmu_current_site
* @method void wpmu_delete_blog (int $blog_id, bool $drop = false) https://developer.wordpress.org/reference/functions/wpmu_delete_blog
* @method bool wpmu_delete_user (int $id) https://developer.wordpress.org/reference/functions/wpmu_delete_user
* @method void wpmu_get_blog_allowedthemes ($blog_id = 0) https://developer.wordpress.org/reference/functions/wpmu_get_blog_allowedthemes
* @method void wpmu_log_new_registrations (int $blog_id, int $user_id) https://developer.wordpress.org/reference/functions/wpmu_log_new_registrations
* @method void wpmu_menu () https://developer.wordpress.org/reference/functions/wpmu_menu
* @method void wpmu_signup_blog (string $domain, string $path, string $title, string $user, string $user_email, array $meta = []) https://developer.wordpress.org/reference/functions/wpmu_signup_blog
* @method void wpmu_signup_blog_notification ($domain, $path, $title, $user_login, $user_email, $key, $meta = []) https://developer.wordpress.org/reference/functions/wpmu_signup_blog_notification
* @method void wpmu_signup_stylesheet () https://developer.wordpress.org/reference/functions/wpmu_signup_stylesheet
* @method void wpmu_signup_user (string $user, string $user_email, array $meta = []) https://developer.wordpress.org/reference/functions/wpmu_signup_user
* @method void wpmu_signup_user_notification ($user_login, $user_email, $key, $meta = []) https://developer.wordpress.org/reference/functions/wpmu_signup_user_notification
* @method void wpmu_update_blogs_date () https://developer.wordpress.org/reference/functions/wpmu_update_blogs_date
* @method void wpmu_validate_blog_signup ($blogname, $blog_title, $user = '') https://developer.wordpress.org/reference/functions/wpmu_validate_blog_signup
* @method void wpmu_validate_user_signup ($user_name, $user_email) https://developer.wordpress.org/reference/functions/wpmu_validate_user_signup
* @method void wpmu_welcome_notification ($blog_id, $user_id, $password, $title, $meta = []) https://developer.wordpress.org/reference/functions/wpmu_welcome_notification
* @method void wpmu_welcome_user_notification ($user_id, $password, $meta = []) https://developer.wordpress.org/reference/functions/wpmu_welcome_user_notification
* @method void wptexturize ($text, $reset = false) https://developer.wordpress.org/reference/functions/wptexturize
* @method string wptexturize_primes (string $haystack, string $needle, string $prime, string $open_quote, string $close_quote) https://developer.wordpress.org/reference/functions/wptexturize_primes
* @method array wpview_media_sandbox_styles () https://developer.wordpress.org/reference/functions/wpview_media_sandbox_styles
* @method void wp_add_dashboard_widget (string $widget_id, string $widget_name, callable $callback, callable $control_callback = NULL, array $callback_args = NULL) https://developer.wordpress.org/reference/functions/wp_add_dashboard_widget
* @method void wp_add_id3_tag_data (array $metadata, array $data) https://developer.wordpress.org/reference/functions/wp_add_id3_tag_data
* @method bool wp_add_inline_script (string $handle, string $data, string $position = 'after') https://developer.wordpress.org/reference/functions/wp_add_inline_script
* @method bool wp_add_inline_style (string $handle, string $data) https://developer.wordpress.org/reference/functions/wp_add_inline_style
* @method array|\WP_Error wp_add_object_terms (int $object_id, string|int|array $terms, array|string $taxonomy) https://developer.wordpress.org/reference/functions/wp_add_object_terms
* @method void wp_add_privacy_policy_content (string $plugin_name, string $policy_text) https://developer.wordpress.org/reference/functions/wp_add_privacy_policy_content
* @method void wp_admin_bar_add_secondary_groups (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_add_secondary_groups
* @method void wp_admin_bar_appearance_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_appearance_menu
* @method void wp_admin_bar_comments_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_comments_menu
* @method void wp_admin_bar_customize_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_customize_menu
* @method void wp_admin_bar_dashboard_view_site_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_dashboard_view_site_menu
* @method void wp_admin_bar_edit_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_edit_menu
* @method void wp_admin_bar_header () https://developer.wordpress.org/reference/functions/wp_admin_bar_header
* @method void wp_admin_bar_my_account_item (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_my_account_item
* @method void wp_admin_bar_my_account_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_my_account_menu
* @method void wp_admin_bar_my_sites_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_my_sites_menu
* @method void wp_admin_bar_new_content_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_new_content_menu
* @method void wp_admin_bar_render () https://developer.wordpress.org/reference/functions/wp_admin_bar_render
* @method void wp_admin_bar_search_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_search_menu
* @method void wp_admin_bar_shortlink_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_shortlink_menu
* @method void wp_admin_bar_sidebar_toggle (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_sidebar_toggle
* @method void wp_admin_bar_site_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_site_menu
* @method void wp_admin_bar_updates_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_updates_menu
* @method void wp_admin_bar_wp_menu (\WP_Admin_Bar $wp_admin_bar) https://developer.wordpress.org/reference/functions/wp_admin_bar_wp_menu
* @method void wp_admin_canonical_url () https://developer.wordpress.org/reference/functions/wp_admin_canonical_url
* @method void wp_admin_css ($file = 'wp-admin', $force_echo = false) https://developer.wordpress.org/reference/functions/wp_admin_css
* @method void wp_admin_css_color (string $key, string $name, string $url, array $colors = [], array $icons = []) https://developer.wordpress.org/reference/functions/wp_admin_css_color
* @method void wp_admin_css_uri ($file = 'wp-admin') https://developer.wordpress.org/reference/functions/wp_admin_css_uri
* @method void wp_admin_headers () https://developer.wordpress.org/reference/functions/wp_admin_headers
* @method void wp_ajax_add_link_category (string $action) https://developer.wordpress.org/reference/functions/wp_ajax_add_link_category
* @method void wp_ajax_add_menu_item () https://developer.wordpress.org/reference/functions/wp_ajax_add_menu_item
* @method void wp_ajax_add_meta () https://developer.wordpress.org/reference/functions/wp_ajax_add_meta
* @method void wp_ajax_add_tag () https://developer.wordpress.org/reference/functions/wp_ajax_add_tag
* @method void wp_ajax_add_user (string $action) https://developer.wordpress.org/reference/functions/wp_ajax_add_user
* @method void wp_ajax_ajax_tag_search () https://developer.wordpress.org/reference/functions/wp_ajax_ajax_tag_search
* @method void wp_ajax_autocomplete_user () https://developer.wordpress.org/reference/functions/wp_ajax_autocomplete_user
* @method void wp_ajax_closed_postboxes () https://developer.wordpress.org/reference/functions/wp_ajax_closed_postboxes
* @method void wp_ajax_crop_image () https://developer.wordpress.org/reference/functions/wp_ajax_crop_image
* @method void wp_ajax_dashboard_widgets () https://developer.wordpress.org/reference/functions/wp_ajax_dashboard_widgets
* @method void wp_ajax_date_format () https://developer.wordpress.org/reference/functions/wp_ajax_date_format
* @method void wp_ajax_delete_comment () https://developer.wordpress.org/reference/functions/wp_ajax_delete_comment
* @method void wp_ajax_delete_inactive_widgets () https://developer.wordpress.org/reference/functions/wp_ajax_delete_inactive_widgets
* @method void wp_ajax_delete_link () https://developer.wordpress.org/reference/functions/wp_ajax_delete_link
* @method void wp_ajax_delete_meta () https://developer.wordpress.org/reference/functions/wp_ajax_delete_meta
* @method void wp_ajax_delete_page (string $action) https://developer.wordpress.org/reference/functions/wp_ajax_delete_page
* @method void wp_ajax_delete_plugin () https://developer.wordpress.org/reference/functions/wp_ajax_delete_plugin
* @method void wp_ajax_delete_post (string $action) https://developer.wordpress.org/reference/functions/wp_ajax_delete_post
* @method void wp_ajax_delete_tag () https://developer.wordpress.org/reference/functions/wp_ajax_delete_tag
* @method void wp_ajax_delete_theme () https://developer.wordpress.org/reference/functions/wp_ajax_delete_theme
* @method void wp_ajax_destroy_sessions () https://developer.wordpress.org/reference/functions/wp_ajax_destroy_sessions
* @method void wp_ajax_dim_comment () https://developer.wordpress.org/reference/functions/wp_ajax_dim_comment
* @method void wp_ajax_dismiss_wp_pointer () https://developer.wordpress.org/reference/functions/wp_ajax_dismiss_wp_pointer
* @method void wp_ajax_edit_comment () https://developer.wordpress.org/reference/functions/wp_ajax_edit_comment
* @method void wp_ajax_edit_theme_plugin_file () https://developer.wordpress.org/reference/functions/wp_ajax_edit_theme_plugin_file
* @method void wp_ajax_fetch_list () https://developer.wordpress.org/reference/functions/wp_ajax_fetch_list
* @method void wp_ajax_find_posts () https://developer.wordpress.org/reference/functions/wp_ajax_find_posts
* @method void wp_ajax_generate_password () https://developer.wordpress.org/reference/functions/wp_ajax_generate_password
* @method void wp_ajax_get_attachment () https://developer.wordpress.org/reference/functions/wp_ajax_get_attachment
* @method void wp_ajax_get_comments (string $action) https://developer.wordpress.org/reference/functions/wp_ajax_get_comments
* @method void wp_ajax_get_community_events () https://developer.wordpress.org/reference/functions/wp_ajax_get_community_events
* @method void wp_ajax_get_permalink () https://developer.wordpress.org/reference/functions/wp_ajax_get_permalink
* @method void wp_ajax_get_post_thumbnail_html () https://developer.wordpress.org/reference/functions/wp_ajax_get_post_thumbnail_html
* @method void wp_ajax_get_revision_diffs () https://developer.wordpress.org/reference/functions/wp_ajax_get_revision_diffs
* @method void wp_ajax_get_tagcloud () https://developer.wordpress.org/reference/functions/wp_ajax_get_tagcloud
* @method void wp_ajax_heartbeat () https://developer.wordpress.org/reference/functions/wp_ajax_heartbeat
* @method void wp_ajax_hidden_columns () https://developer.wordpress.org/reference/functions/wp_ajax_hidden_columns
* @method void wp_ajax_image_editor () https://developer.wordpress.org/reference/functions/wp_ajax_image_editor
* @method void wp_ajax_imgedit_preview () https://developer.wordpress.org/reference/functions/wp_ajax_imgedit_preview
* @method void wp_ajax_inline_save () https://developer.wordpress.org/reference/functions/wp_ajax_inline_save
* @method void wp_ajax_inline_save_tax () https://developer.wordpress.org/reference/functions/wp_ajax_inline_save_tax
* @method void wp_ajax_install_plugin () https://developer.wordpress.org/reference/functions/wp_ajax_install_plugin
* @method void wp_ajax_install_theme () https://developer.wordpress.org/reference/functions/wp_ajax_install_theme
* @method void wp_ajax_logged_in () https://developer.wordpress.org/reference/functions/wp_ajax_logged_in
* @method void wp_ajax_menu_get_metabox () https://developer.wordpress.org/reference/functions/wp_ajax_menu_get_metabox
* @method void wp_ajax_menu_locations_save () https://developer.wordpress.org/reference/functions/wp_ajax_menu_locations_save
* @method void wp_ajax_menu_quick_search () https://developer.wordpress.org/reference/functions/wp_ajax_menu_quick_search
* @method void wp_ajax_meta_box_order () https://developer.wordpress.org/reference/functions/wp_ajax_meta_box_order
* @method void wp_ajax_nopriv_heartbeat () https://developer.wordpress.org/reference/functions/wp_ajax_nopriv_heartbeat
* @method void wp_ajax_oembed_cache () https://developer.wordpress.org/reference/functions/wp_ajax_oembed_cache
* @method void wp_ajax_parse_embed () https://developer.wordpress.org/reference/functions/wp_ajax_parse_embed
* @method void wp_ajax_parse_media_shortcode () https://developer.wordpress.org/reference/functions/wp_ajax_parse_media_shortcode
* @method void wp_ajax_press_this_add_category () https://developer.wordpress.org/reference/functions/wp_ajax_press_this_add_category
* @method void wp_ajax_press_this_save_post () https://developer.wordpress.org/reference/functions/wp_ajax_press_this_save_post
* @method void wp_ajax_query_attachments () https://developer.wordpress.org/reference/functions/wp_ajax_query_attachments
* @method void wp_ajax_query_themes () https://developer.wordpress.org/reference/functions/wp_ajax_query_themes
* @method void wp_ajax_replyto_comment (string $action) https://developer.wordpress.org/reference/functions/wp_ajax_replyto_comment
* @method void wp_ajax_sample_permalink () https://developer.wordpress.org/reference/functions/wp_ajax_sample_permalink
* @method void wp_ajax_save_attachment () https://developer.wordpress.org/reference/functions/wp_ajax_save_attachment
* @method void wp_ajax_save_attachment_compat () https://developer.wordpress.org/reference/functions/wp_ajax_save_attachment_compat
* @method void wp_ajax_save_attachment_order () https://developer.wordpress.org/reference/functions/wp_ajax_save_attachment_order
* @method void wp_ajax_save_user_color_scheme () https://developer.wordpress.org/reference/functions/wp_ajax_save_user_color_scheme
* @method void wp_ajax_save_widget () https://developer.wordpress.org/reference/functions/wp_ajax_save_widget
* @method void wp_ajax_save_wporg_username () https://developer.wordpress.org/reference/functions/wp_ajax_save_wporg_username
* @method void wp_ajax_search_install_plugins () https://developer.wordpress.org/reference/functions/wp_ajax_search_install_plugins
* @method void wp_ajax_search_plugins () https://developer.wordpress.org/reference/functions/wp_ajax_search_plugins
* @method void wp_ajax_send_attachment_to_editor () https://developer.wordpress.org/reference/functions/wp_ajax_send_attachment_to_editor
* @method void wp_ajax_send_link_to_editor () https://developer.wordpress.org/reference/functions/wp_ajax_send_link_to_editor
* @method void wp_ajax_set_attachment_thumbnail () https://developer.wordpress.org/reference/functions/wp_ajax_set_attachment_thumbnail
* @method void wp_ajax_set_post_thumbnail () https://developer.wordpress.org/reference/functions/wp_ajax_set_post_thumbnail
* @method void wp_ajax_time_format () https://developer.wordpress.org/reference/functions/wp_ajax_time_format
* @method void wp_ajax_trash_post (string $action) https://developer.wordpress.org/reference/functions/wp_ajax_trash_post
* @method void wp_ajax_untrash_post (string $action) https://developer.wordpress.org/reference/functions/wp_ajax_untrash_post
* @method void wp_ajax_update_plugin () https://developer.wordpress.org/reference/functions/wp_ajax_update_plugin
* @method void wp_ajax_update_theme () https://developer.wordpress.org/reference/functions/wp_ajax_update_theme
* @method void wp_ajax_update_welcome_panel () https://developer.wordpress.org/reference/functions/wp_ajax_update_welcome_panel
* @method void wp_ajax_update_widget () https://developer.wordpress.org/reference/functions/wp_ajax_update_widget
* @method void wp_ajax_upload_attachment () https://developer.wordpress.org/reference/functions/wp_ajax_upload_attachment
* @method void wp_ajax_widgets_order () https://developer.wordpress.org/reference/functions/wp_ajax_widgets_order
* @method void wp_ajax_wp_compression_test () https://developer.wordpress.org/reference/functions/wp_ajax_wp_compression_test
* @method void wp_ajax_wp_fullscreen_save_post () https://developer.wordpress.org/reference/functions/wp_ajax_wp_fullscreen_save_post
* @method void wp_ajax_wp_link_ajax () https://developer.wordpress.org/reference/functions/wp_ajax_wp_link_ajax
* @method void wp_ajax_wp_privacy_erase_personal_data () https://developer.wordpress.org/reference/functions/wp_ajax_wp_privacy_erase_personal_data
* @method void wp_ajax_wp_privacy_export_personal_data () https://developer.wordpress.org/reference/functions/wp_ajax_wp_privacy_export_personal_data
* @method void wp_ajax_wp_remove_post_lock () https://developer.wordpress.org/reference/functions/wp_ajax_wp_remove_post_lock
* @method array wp_allowed_protocols () https://developer.wordpress.org/reference/functions/wp_allowed_protocols
* @method int|string|\WP_Error wp_allow_comment (array $commentdata, bool $avoid_die = false) https://developer.wordpress.org/reference/functions/wp_allow_comment
* @method array wp_array_slice_assoc (array $array, array $keys) https://developer.wordpress.org/reference/functions/wp_array_slice_assoc
* @method string|void wp_audio_shortcode (array $attr, string $content = '') https://developer.wordpress.org/reference/functions/wp_audio_shortcode
* @method \WP_User|\WP_Error wp_authenticate (string $username, string $password) https://developer.wordpress.org/reference/functions/wp_authenticate
* @method \WP_User|\WP_Error wp_authenticate_cookie (\WP_User|\WP_Error|null $user, string $username, string $password) https://developer.wordpress.org/reference/functions/wp_authenticate_cookie
* @method \WP_User|\WP_Error wp_authenticate_email_password (\WP_User|\WP_Error|null $user, string $email, string $password) https://developer.wordpress.org/reference/functions/wp_authenticate_email_password
* @method \WP_User|\WP_Error wp_authenticate_spam_check (\WP_User|\WP_Error|null $user) https://developer.wordpress.org/reference/functions/wp_authenticate_spam_check
* @method \WP_User|\WP_Error wp_authenticate_username_password (\WP_User|\WP_Error|null $user, string $username, string $password) https://developer.wordpress.org/reference/functions/wp_authenticate_username_password
* @method array wp_auth_check (array $response) https://developer.wordpress.org/reference/functions/wp_auth_check
* @method void wp_auth_check_html () https://developer.wordpress.org/reference/functions/wp_auth_check_html
* @method void wp_auth_check_load () https://developer.wordpress.org/reference/functions/wp_auth_check_load
* @method string wp_basename (string $path, string $suffix = '') https://developer.wordpress.org/reference/functions/wp_basename
* @method bool wp_blacklist_check (string $author, string $email, string $url, string $comment, string $user_ip, string $user_agent) https://developer.wordpress.org/reference/functions/wp_blacklist_check
* @method void wp_cache_add ($key, $data, $group = '', $expire = 0) https://developer.wordpress.org/reference/functions/wp_cache_add
* @method void wp_cache_add_global_groups (string|array $groups) https://developer.wordpress.org/reference/functions/wp_cache_add_global_groups
* @method void wp_cache_add_non_persistent_groups (string|array $groups) https://developer.wordpress.org/reference/functions/wp_cache_add_non_persistent_groups
* @method bool wp_cache_close () https://developer.wordpress.org/reference/functions/wp_cache_close
* @method bool|int wp_cache_decr (int|string $key, int $offset = 1, string $group = '') https://developer.wordpress.org/reference/functions/wp_cache_decr
* @method bool wp_cache_delete (int|string $key, string $group = '') https://developer.wordpress.org/reference/functions/wp_cache_delete
* @method bool wp_cache_flush () https://developer.wordpress.org/reference/functions/wp_cache_flush
* @method bool|mixed wp_cache_get (int|string $key, string $group = '', bool $force = false, bool $found = NULL) https://developer.wordpress.org/reference/functions/wp_cache_get
* @method string wp_cache_get_last_changed (string $group) https://developer.wordpress.org/reference/functions/wp_cache_get_last_changed
* @method bool|int wp_cache_incr (int|string $key, int $offset = 1, string $group = '') https://developer.wordpress.org/reference/functions/wp_cache_incr
* @method void wp_cache_init () https://developer.wordpress.org/reference/functions/wp_cache_init
* @method bool wp_cache_replace (int|string $key, mixed $data, string $group = '', int $expire = 0) https://developer.wordpress.org/reference/functions/wp_cache_replace
* @method void wp_cache_reset () https://developer.wordpress.org/reference/functions/wp_cache_reset
* @method bool wp_cache_set (int|string $key, mixed $data, string $group = '', int $expire = 0) https://developer.wordpress.org/reference/functions/wp_cache_set
* @method void wp_cache_switch_to_blog (int $blog_id) https://developer.wordpress.org/reference/functions/wp_cache_switch_to_blog
* @method string|bool wp_calculate_image_sizes (array|string $size, string $image_src = NULL, array $image_meta = NULL, int $attachment_id = 0) https://developer.wordpress.org/reference/functions/wp_calculate_image_sizes
* @method string|bool wp_calculate_image_srcset (array $size_array, string $image_src, array $image_meta, int $attachment_id = 0) https://developer.wordpress.org/reference/functions/wp_calculate_image_srcset
* @method bool wp_can_install_language_pack () https://developer.wordpress.org/reference/functions/wp_can_install_language_pack
* @method string wp_caption_input_textarea (\WP_Post $edit_post) https://developer.wordpress.org/reference/functions/wp_caption_input_textarea
* @method void wp_category_checklist (int $post_id = 0, int $descendants_and_self = 0, array $selected_cats = false, array $popular_cats = false, object $walker = NULL, bool $checked_ontop = true) https://developer.wordpress.org/reference/functions/wp_category_checklist
* @method bool wp_checkdate (int $month, int $day, int $year, string $source_date) https://developer.wordpress.org/reference/functions/wp_checkdate
* @method array|bool wp_check_browser_version () https://developer.wordpress.org/reference/functions/wp_check_browser_version
* @method \WP_Error|bool wp_check_comment_data_max_lengths (array $comment_data) https://developer.wordpress.org/reference/functions/wp_check_comment_data_max_lengths
* @method bool wp_check_comment_flood (bool $is_flood, string $ip, string $email, string $date, bool $avoid_die = false) https://developer.wordpress.org/reference/functions/wp_check_comment_flood
* @method array wp_check_filetype (string $filename, array $mimes = NULL) https://developer.wordpress.org/reference/functions/wp_check_filetype
* @method array wp_check_filetype_and_ext (string $file, string $filename, array $mimes = NULL) https://developer.wordpress.org/reference/functions/wp_check_filetype_and_ext
* @method string wp_check_invalid_utf8 (string $string, bool $strip = false) https://developer.wordpress.org/reference/functions/wp_check_invalid_utf8
* @method bool wp_check_jsonp_callback (string $callback) https://developer.wordpress.org/reference/functions/wp_check_jsonp_callback
* @method array wp_check_locked_posts (array $response, array $data, string $screen_id) https://developer.wordpress.org/reference/functions/wp_check_locked_posts
* @method void wp_check_mysql_version () https://developer.wordpress.org/reference/functions/wp_check_mysql_version
* @method bool wp_check_password (string $password, string $hash, string|int $user_id = '') https://developer.wordpress.org/reference/functions/wp_check_password
* @method void wp_check_php_mysql_versions () https://developer.wordpress.org/reference/functions/wp_check_php_mysql_versions
* @method void wp_check_term_hierarchy_for_loops ($parent, $term_id, $taxonomy) https://developer.wordpress.org/reference/functions/wp_check_term_hierarchy_for_loops
* @method void wp_clean_plugins_cache (bool $clear_update_cache = true) https://developer.wordpress.org/reference/functions/wp_clean_plugins_cache
* @method void wp_clean_themes_cache (bool $clear_update_cache = true) https://developer.wordpress.org/reference/functions/wp_clean_themes_cache
* @method void wp_clean_update_cache () https://developer.wordpress.org/reference/functions/wp_clean_update_cache
* @method void wp_clearcookie () https://developer.wordpress.org/reference/functions/wp_clearcookie
* @method void wp_clear_auth_cookie () https://developer.wordpress.org/reference/functions/wp_clear_auth_cookie
* @method void wp_clear_scheduled_hook (string $hook, array $args = []) https://developer.wordpress.org/reference/functions/wp_clear_scheduled_hook
* @method object wp_clone (object $object) https://developer.wordpress.org/reference/functions/wp_clone
* @method void wp_color_scheme_settings () https://developer.wordpress.org/reference/functions/wp_color_scheme_settings
* @method array wp_comments_personal_data_eraser (string $email_address, int $page = 1) https://developer.wordpress.org/reference/functions/wp_comments_personal_data_eraser
* @method array wp_comments_personal_data_exporter (string $email_address, int $page = 1) https://developer.wordpress.org/reference/functions/wp_comments_personal_data_exporter
* @method void wp_comment_form_unfiltered_html_nonce () https://developer.wordpress.org/reference/functions/wp_comment_form_unfiltered_html_nonce
* @method void wp_comment_reply (int $position = 1, bool $checkbox = false, string $mode = 'single', bool $table_row = true) https://developer.wordpress.org/reference/functions/wp_comment_reply
* @method void wp_comment_trashnotice () https://developer.wordpress.org/reference/functions/wp_comment_trashnotice
* @method array wp_constrain_dimensions (int $current_width, int $current_height, int $max_width = 0, int $max_height = 0) https://developer.wordpress.org/reference/functions/wp_constrain_dimensions
* @method string wp_convert_bytes_to_hr (int $bytes) https://developer.wordpress.org/reference/functions/wp_convert_bytes_to_hr
* @method int wp_convert_hr_to_bytes (string $value) https://developer.wordpress.org/reference/functions/wp_convert_hr_to_bytes
* @method array wp_convert_widget_settings (string $base_name, string $option_name, array $settings) https://developer.wordpress.org/reference/functions/wp_convert_widget_settings
* @method void wp_cookie_constants () https://developer.wordpress.org/reference/functions/wp_cookie_constants
* @method object|array wp_count_comments (int $post_id = 0) https://developer.wordpress.org/reference/functions/wp_count_comments
* @method array|int|\WP_Error wp_count_terms (string $taxonomy, array|string $args = []) https://developer.wordpress.org/reference/functions/wp_count_terms
* @method array wp_create_categories (array $categories, int $post_id = '') https://developer.wordpress.org/reference/functions/wp_create_categories
* @method int|\WP_Error wp_create_category (int|string $cat_name, int $parent = 0) https://developer.wordpress.org/reference/functions/wp_create_category
* @method int|\WP_Error wp_create_nav_menu (string $menu_name) https://developer.wordpress.org/reference/functions/wp_create_nav_menu
* @method string wp_create_nonce (string|int $action = -1) https://developer.wordpress.org/reference/functions/wp_create_nonce
* @method array|\WP_Error wp_create_tag (int|string $tag_name) https://developer.wordpress.org/reference/functions/wp_create_tag
* @method array|\WP_Error wp_create_term (int|string $tag_name, string $taxonomy = 'post_tag') https://developer.wordpress.org/reference/functions/wp_create_term
* @method string wp_create_thumbnail (mixed $file, int $max_side, mixed $deprecated = '') https://developer.wordpress.org/reference/functions/wp_create_thumbnail
* @method int|\WP_Error wp_create_user (string $username, string $password, string $email = '') https://developer.wordpress.org/reference/functions/wp_create_user
* @method int|\WP_Error wp_create_user_request (string $email_address = '', string $action_name = '', array $request_data = []) https://developer.wordpress.org/reference/functions/wp_create_user_request
* @method void wp_credits () https://developer.wordpress.org/reference/functions/wp_credits
* @method void wp_cron () https://developer.wordpress.org/reference/functions/wp_cron
* @method void wp_crop_image ($src, $src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs = false, $dst_file = false) https://developer.wordpress.org/reference/functions/wp_crop_image
* @method void wp_customize_support_script () https://developer.wordpress.org/reference/functions/wp_customize_support_script
* @method string wp_customize_url (string $stylesheet = NULL) https://developer.wordpress.org/reference/functions/wp_customize_url
* @method void wp_custom_css_cb () https://developer.wordpress.org/reference/functions/wp_custom_css_cb
* @method void wp_dashboard () https://developer.wordpress.org/reference/functions/wp_dashboard
* @method void wp_dashboard_browser_nag () https://developer.wordpress.org/reference/functions/wp_dashboard_browser_nag
* @method bool wp_dashboard_cached_rss_widget (string $widget_id, callable $callback, array $check_urls = []) https://developer.wordpress.org/reference/functions/wp_dashboard_cached_rss_widget
* @method void wp_dashboard_empty () https://developer.wordpress.org/reference/functions/wp_dashboard_empty
* @method void wp_dashboard_events_news () https://developer.wordpress.org/reference/functions/wp_dashboard_events_news
* @method void wp_dashboard_incoming_links () https://developer.wordpress.org/reference/functions/wp_dashboard_incoming_links
* @method void wp_dashboard_incoming_links_control () https://developer.wordpress.org/reference/functions/wp_dashboard_incoming_links_control
* @method void wp_dashboard_incoming_links_output () https://developer.wordpress.org/reference/functions/wp_dashboard_incoming_links_output
* @method void wp_dashboard_plugins () https://developer.wordpress.org/reference/functions/wp_dashboard_plugins
* @method void wp_dashboard_plugins_output (string $rss, array $args = []) https://developer.wordpress.org/reference/functions/wp_dashboard_plugins_output
* @method void wp_dashboard_primary () https://developer.wordpress.org/reference/functions/wp_dashboard_primary
* @method void wp_dashboard_primary_control () https://developer.wordpress.org/reference/functions/wp_dashboard_primary_control
* @method void wp_dashboard_primary_output (string $widget_id, array $feeds) https://developer.wordpress.org/reference/functions/wp_dashboard_primary_output
* @method void wp_dashboard_quick_press (string $error_msg = false) https://developer.wordpress.org/reference/functions/wp_dashboard_quick_press
* @method void wp_dashboard_quick_press_output () https://developer.wordpress.org/reference/functions/wp_dashboard_quick_press_output
* @method void wp_dashboard_quota () https://developer.wordpress.org/reference/functions/wp_dashboard_quota
* @method bool wp_dashboard_recent_comments (int $total_items = 5) https://developer.wordpress.org/reference/functions/wp_dashboard_recent_comments
* @method void wp_dashboard_recent_comments_control () https://developer.wordpress.org/reference/functions/wp_dashboard_recent_comments_control
* @method void wp_dashboard_recent_drafts (array $drafts = false) https://developer.wordpress.org/reference/functions/wp_dashboard_recent_drafts
* @method bool wp_dashboard_recent_posts (array $args) https://developer.wordpress.org/reference/functions/wp_dashboard_recent_posts
* @method void wp_dashboard_right_now () https://developer.wordpress.org/reference/functions/wp_dashboard_right_now
* @method void wp_dashboard_rss_control (string $widget_id, array $form_inputs = []) https://developer.wordpress.org/reference/functions/wp_dashboard_rss_control
* @method void wp_dashboard_rss_output (string $widget_id) https://developer.wordpress.org/reference/functions/wp_dashboard_rss_output
* @method void wp_dashboard_secondary () https://developer.wordpress.org/reference/functions/wp_dashboard_secondary
* @method void wp_dashboard_secondary_control () https://developer.wordpress.org/reference/functions/wp_dashboard_secondary_control
* @method void wp_dashboard_secondary_output () https://developer.wordpress.org/reference/functions/wp_dashboard_secondary_output
* @method void wp_dashboard_setup () https://developer.wordpress.org/reference/functions/wp_dashboard_setup
* @method void wp_dashboard_site_activity () https://developer.wordpress.org/reference/functions/wp_dashboard_site_activity
* @method void wp_dashboard_trigger_widget_control (int $widget_control_id = false) https://developer.wordpress.org/reference/functions/wp_dashboard_trigger_widget_control
* @method string|array wp_debug_backtrace_summary (string $ignore_class = NULL, int $skip_frames = 0, bool $pretty = true) https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary
* @method void wp_debug_mode () https://developer.wordpress.org/reference/functions/wp_debug_mode
* @method string wp_default_editor () https://developer.wordpress.org/reference/functions/wp_default_editor
* @method void wp_default_scripts (\WP_Scripts $scripts) https://developer.wordpress.org/reference/functions/wp_default_scripts
* @method void wp_default_styles (\WP_Styles $styles) https://developer.wordpress.org/reference/functions/wp_default_styles
* @method bool wp_defer_comment_counting (bool $defer = NULL) https://developer.wordpress.org/reference/functions/wp_defer_comment_counting
* @method bool wp_defer_term_counting (bool $defer = NULL) https://developer.wordpress.org/reference/functions/wp_defer_term_counting
* @method bool|int|\WP_Error wp_delete_category (int $cat_ID) https://developer.wordpress.org/reference/functions/wp_delete_category
* @method bool wp_delete_comment (int|\WP_Comment $comment_id, bool $force_delete = false) https://developer.wordpress.org/reference/functions/wp_delete_comment
* @method void wp_delete_file (string $file) https://developer.wordpress.org/reference/functions/wp_delete_file
* @method bool wp_delete_link (int $link_id) https://developer.wordpress.org/reference/functions/wp_delete_link
* @method bool|\WP_Error wp_delete_nav_menu (int|string|\WP_Term $menu) https://developer.wordpress.org/reference/functions/wp_delete_nav_menu
* @method void wp_delete_object_term_relationships (int $object_id, string|array $taxonomies) https://developer.wordpress.org/reference/functions/wp_delete_object_term_relationships
* @method array|bool|\WP_Post|\WP_Error|null wp_delete_post_revision (int|\WP_Post $revision_id) https://developer.wordpress.org/reference/functions/wp_delete_post_revision
* @method bool|int|\WP_Error wp_delete_term (int $term, string $taxonomy, array|string $args = []) https://developer.wordpress.org/reference/functions/wp_delete_term
* @method void wp_delete_user ($id, $reassign = NULL) https://developer.wordpress.org/reference/functions/wp_delete_user
* @method array wp_dependencies_unique_hosts () https://developer.wordpress.org/reference/functions/wp_dependencies_unique_hosts
* @method void wp_dequeue_script (string $handle) https://developer.wordpress.org/reference/functions/wp_dequeue_script
* @method void wp_dequeue_style (string $handle) https://developer.wordpress.org/reference/functions/wp_dequeue_style
* @method void wp_deregister_script (string $handle) https://developer.wordpress.org/reference/functions/wp_deregister_script
* @method void wp_deregister_style (string $handle) https://developer.wordpress.org/reference/functions/wp_deregister_style
* @method void wp_destroy_all_sessions () https://developer.wordpress.org/reference/functions/wp_destroy_all_sessions
* @method void wp_destroy_current_session () https://developer.wordpress.org/reference/functions/wp_destroy_current_session
* @method void wp_destroy_other_sessions () https://developer.wordpress.org/reference/functions/wp_destroy_other_sessions
* @method void wp_die (string|\WP_Error $message = '', string|int $title = '', string|array|int $args = []) https://developer.wordpress.org/reference/functions/wp_die
* @method array wp_doc_link_parse (string $content) https://developer.wordpress.org/reference/functions/wp_doc_link_parse
* @method bool wp_doing_ajax () https://developer.wordpress.org/reference/functions/wp_doing_ajax
* @method bool wp_doing_cron () https://developer.wordpress.org/reference/functions/wp_doing_cron
* @method string|bool wp_download_language_pack (string $download) https://developer.wordpress.org/reference/functions/wp_download_language_pack
* @method string wp_dropdown_categories (string|array $args = '') https://developer.wordpress.org/reference/functions/wp_dropdown_categories
* @method bool|null wp_dropdown_cats (int $currentcat = 0, int $currentparent = 0, int $parent = 0, int $level = 0, array $categories = 0) https://developer.wordpress.org/reference/functions/wp_dropdown_cats
* @method string wp_dropdown_languages (string|array $args = []) https://developer.wordpress.org/reference/functions/wp_dropdown_languages
* @method string wp_dropdown_pages (array|string $args = '') https://developer.wordpress.org/reference/functions/wp_dropdown_pages
* @method void wp_dropdown_roles (string $selected = '') https://developer.wordpress.org/reference/functions/wp_dropdown_roles
* @method string wp_dropdown_users (array|string $args = '') https://developer.wordpress.org/reference/functions/wp_dropdown_users
* @method void wp_editor (string $content, string $editor_id, array $settings = []) https://developer.wordpress.org/reference/functions/wp_editor
* @method bool|\WP_Error wp_edit_theme_plugin_file (array $args) https://developer.wordpress.org/reference/functions/wp_edit_theme_plugin_file
* @method void wp_embed_defaults ($url = '') https://developer.wordpress.org/reference/functions/wp_embed_defaults
* @method string wp_embed_excerpt_attachment (string $content) https://developer.wordpress.org/reference/functions/wp_embed_excerpt_attachment
* @method string wp_embed_excerpt_more (string $more_string) https://developer.wordpress.org/reference/functions/wp_embed_excerpt_more
* @method string wp_embed_handler_audio (array $matches, array $attr, string $url, array $rawattr) https://developer.wordpress.org/reference/functions/wp_embed_handler_audio
* @method string wp_embed_handler_googlevideo ($matches, $attr, $url, $rawattr) https://developer.wordpress.org/reference/functions/wp_embed_handler_googlevideo
* @method string wp_embed_handler_video (array $matches, array $attr, string $url, array $rawattr) https://developer.wordpress.org/reference/functions/wp_embed_handler_video
* @method string wp_embed_handler_youtube (array $matches, array $attr, string $url, array $rawattr) https://developer.wordpress.org/reference/functions/wp_embed_handler_youtube
* @method void wp_embed_register_handler ($id, $regex, $callback, $priority = 10) https://developer.wordpress.org/reference/functions/wp_embed_register_handler
* @method void wp_embed_unregister_handler (string $id, int $priority = 10) https://developer.wordpress.org/reference/functions/wp_embed_unregister_handler
* @method string wp_encode_emoji (string $content) https://developer.wordpress.org/reference/functions/wp_encode_emoji
* @method void wp_enqueue_code_editor (array $args) https://developer.wordpress.org/reference/functions/wp_enqueue_code_editor
* @method void wp_enqueue_editor () https://developer.wordpress.org/reference/functions/wp_enqueue_editor
* @method void wp_enqueue_media (array $args = []) https://developer.wordpress.org/reference/functions/wp_enqueue_media
* @method void wp_enqueue_script (string $handle, string $src = '', array $deps = [], string|bool|null $ver = false, bool $in_footer = false) https://developer.wordpress.org/reference/functions/wp_enqueue_script
* @method void wp_enqueue_scripts () https://developer.wordpress.org/reference/functions/wp_enqueue_scripts
* @method void wp_enqueue_style (string $handle, string $src = '', array $deps = [], string|bool|null $ver = false, string $media = 'all') https://developer.wordpress.org/reference/functions/wp_enqueue_style
* @method int wp_exif_date2ts (string $str) https://developer.wordpress.org/reference/functions/wp_exif_date2ts
* @method int|float wp_exif_frac2dec (string $str) https://developer.wordpress.org/reference/functions/wp_exif_frac2dec
* @method array wp_expand_dimensions (int $example_width, int $example_height, int $max_width, int $max_height) https://developer.wordpress.org/reference/functions/wp_expand_dimensions
* @method string wp_explain_nonce (string $action) https://developer.wordpress.org/reference/functions/wp_explain_nonce
* @method string|void wp_ext2type (string $ext) https://developer.wordpress.org/reference/functions/wp_ext2type
* @method array wp_extract_urls (string $content) https://developer.wordpress.org/reference/functions/wp_extract_urls
* @method void wp_favicon_request () https://developer.wordpress.org/reference/functions/wp_favicon_request
* @method void WP_Filesystem ($args = false, $context = false, $allow_relaxed_file_ownership = false) https://developer.wordpress.org/reference/functions/WP_Filesystem
* @method array wp_filter_comment (array $commentdata) https://developer.wordpress.org/reference/functions/wp_filter_comment
* @method string wp_filter_kses (string $data) https://developer.wordpress.org/reference/functions/wp_filter_kses
* @method string wp_filter_nohtml_kses (string $data) https://developer.wordpress.org/reference/functions/wp_filter_nohtml_kses
* @method array wp_filter_object_list (array $list, array $args = [], string $operator = 'and', bool|string $field = false) https://developer.wordpress.org/reference/functions/wp_filter_object_list
* @method string wp_filter_oembed_result (string $result, object $data, string $url) https://developer.wordpress.org/reference/functions/wp_filter_oembed_result
* @method string wp_filter_post_kses (string $data) https://developer.wordpress.org/reference/functions/wp_filter_post_kses
* @method null|string wp_filter_pre_oembed_result (null|string $result, string $url, array $args) https://developer.wordpress.org/reference/functions/wp_filter_pre_oembed_result
* @method void wp_finalize_scraping_edited_file_errors (string $scrape_key) https://developer.wordpress.org/reference/functions/wp_finalize_scraping_edited_file_errors
* @method array wp_find_hierarchy_loop (callable $callback, int $start, int $start_parent, array $callback_args = []) https://developer.wordpress.org/reference/functions/wp_find_hierarchy_loop
* @method mixed wp_find_hierarchy_loop_tortoise_hare (callable $callback, int $start, array $override = [], array $callback_args = [], bool $_return_loop = false) https://developer.wordpress.org/reference/functions/wp_find_hierarchy_loop_tortoise_hare
* @method void wp_fix_server_vars () https://developer.wordpress.org/reference/functions/wp_fix_server_vars
* @method void wp_footer () https://developer.wordpress.org/reference/functions/wp_footer
* @method void wp_functionality_constants () https://developer.wordpress.org/reference/functions/wp_functionality_constants
* @method mixed wp_generate_attachment_metadata (int $attachment_id, string $file) https://developer.wordpress.org/reference/functions/wp_generate_attachment_metadata
* @method string wp_generate_auth_cookie (int $user_id, int $expiration, string $scheme = 'auth', string $token = '') https://developer.wordpress.org/reference/functions/wp_generate_auth_cookie
* @method string wp_generate_password (int $length = 12, bool $special_chars = true, bool $extra_special_chars = false) https://developer.wordpress.org/reference/functions/wp_generate_password
* @method void wp_generate_tag_cloud ($tags, $args = '') https://developer.wordpress.org/reference/functions/wp_generate_tag_cloud
* @method string wp_generate_user_request_key (int $request_id) https://developer.wordpress.org/reference/functions/wp_generate_user_request_key
* @method string wp_generate_uuid4 () https://developer.wordpress.org/reference/functions/wp_generate_uuid4
* @method void wp_generator () https://developer.wordpress.org/reference/functions/wp_generator
* @method array wp_get_active_and_valid_plugins () https://developer.wordpress.org/reference/functions/wp_get_active_and_valid_plugins
* @method array wp_get_active_network_plugins () https://developer.wordpress.org/reference/functions/wp_get_active_network_plugins
* @method void wp_get_additional_image_sizes () https://developer.wordpress.org/reference/functions/wp_get_additional_image_sizes
* @method array wp_get_all_sessions () https://developer.wordpress.org/reference/functions/wp_get_all_sessions
* @method string|void wp_get_archives (string|array $args = '') https://developer.wordpress.org/reference/functions/wp_get_archives
* @method array wp_get_associated_nav_menu_items (int $object_id = 0, string $object_type = 'post_type', string $taxonomy = '') https://developer.wordpress.org/reference/functions/wp_get_associated_nav_menu_items
* @method array wp_get_attachment_id3_keys (\WP_Post $attachment, string $context = 'display') https://developer.wordpress.org/reference/functions/wp_get_attachment_id3_keys
* @method string wp_get_attachment_image (int $attachment_id, string|array $size = 'thumbnail', bool $icon = false, string|array $attr = '') https://developer.wordpress.org/reference/functions/wp_get_attachment_image
* @method string|bool wp_get_attachment_image_sizes (int $attachment_id, array|string $size = 'medium', array $image_meta = NULL) https://developer.wordpress.org/reference/functions/wp_get_attachment_image_sizes
* @method bool|array wp_get_attachment_image_src (int $attachment_id, string|array $size = 'thumbnail', bool $icon = false) https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src
* @method string|bool wp_get_attachment_image_srcset (int $attachment_id, array|string $size = 'medium', array $image_meta = NULL) https://developer.wordpress.org/reference/functions/wp_get_attachment_image_srcset
* @method string|bool wp_get_attachment_image_url (int $attachment_id, string|array $size = 'thumbnail', bool $icon = false) https://developer.wordpress.org/reference/functions/wp_get_attachment_image_url
* @method string wp_get_attachment_link (int|\WP_Post $id = 0, string|array $size = 'thumbnail', bool $permalink = false, bool $icon = false, string|bool $text = false, array|string $attr = '') https://developer.wordpress.org/reference/functions/wp_get_attachment_link
* @method array wp_get_audio_extensions () https://developer.wordpress.org/reference/functions/wp_get_audio_extensions
* @method array wp_get_available_translations () https://developer.wordpress.org/reference/functions/wp_get_available_translations
* @method string|bool wp_get_canonical_url (int|\WP_Post $post = NULL) https://developer.wordpress.org/reference/functions/wp_get_canonical_url
* @method array wp_get_comment_fields_max_lengths () https://developer.wordpress.org/reference/functions/wp_get_comment_fields_max_lengths
* @method bool|string wp_get_comment_status (int|\WP_Comment $comment_id) https://developer.wordpress.org/reference/functions/wp_get_comment_status
* @method bool wp_get_cookie_login () https://developer.wordpress.org/reference/functions/wp_get_cookie_login
* @method array wp_get_current_commenter () https://developer.wordpress.org/reference/functions/wp_get_current_commenter
* @method \WP_User wp_get_current_user () https://developer.wordpress.org/reference/functions/wp_get_current_user
* @method string wp_get_custom_css (string $stylesheet = '') https://developer.wordpress.org/reference/functions/wp_get_custom_css
* @method \WP_Post|null wp_get_custom_css_post (string $stylesheet = '') https://developer.wordpress.org/reference/functions/wp_get_custom_css_post
* @method string wp_get_db_schema (string $scope = 'all', int $blog_id = NULL) https://developer.wordpress.org/reference/functions/wp_get_db_schema
* @method string wp_get_document_title () https://developer.wordpress.org/reference/functions/wp_get_document_title
* @method array wp_get_ext_types () https://developer.wordpress.org/reference/functions/wp_get_ext_types
* @method bool|string wp_get_http (string $url, string|bool $file_path = false, int $red = 1) https://developer.wordpress.org/reference/functions/wp_get_http
* @method bool|string wp_get_http_headers (string $url, bool $deprecated = false) https://developer.wordpress.org/reference/functions/wp_get_http_headers
* @method \WP_Image_Editor|\WP_Error wp_get_image_editor (string $path, array $args = []) https://developer.wordpress.org/reference/functions/wp_get_image_editor
* @method string|bool wp_get_image_mime (string $file) https://developer.wordpress.org/reference/functions/wp_get_image_mime
* @method array wp_get_installed_translations (string $type) https://developer.wordpress.org/reference/functions/wp_get_installed_translations
* @method null|string wp_get_links (string $args = '') https://developer.wordpress.org/reference/functions/wp_get_links
* @method string|null wp_get_linksbyname (string $category, string $args = '') https://developer.wordpress.org/reference/functions/wp_get_linksbyname
* @method array wp_get_link_cats (int $link_id = 0) https://developer.wordpress.org/reference/functions/wp_get_link_cats
* @method int|bool wp_get_media_creation_timestamp (array $metadata) https://developer.wordpress.org/reference/functions/wp_get_media_creation_timestamp
* @method array wp_get_mime_types () https://developer.wordpress.org/reference/functions/wp_get_mime_types
* @method array wp_get_mu_plugins () https://developer.wordpress.org/reference/functions/wp_get_mu_plugins
* @method array wp_get_nav_menus (array $args = []) https://developer.wordpress.org/reference/functions/wp_get_nav_menus
* @method bool|array wp_get_nav_menu_items (int|string|\WP_Term $menu, array $args = []) https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items
* @method string wp_get_nav_menu_name (string $location) https://developer.wordpress.org/reference/functions/wp_get_nav_menu_name
* @method void wp_get_nav_menu_object ($menu) https://developer.wordpress.org/reference/functions/wp_get_nav_menu_object
* @method string|\WP_Error wp_get_nav_menu_to_edit (int $menu_id = 0) https://developer.wordpress.org/reference/functions/wp_get_nav_menu_to_edit
* @method \WP_Network|bool wp_get_network (object|int $network) https://developer.wordpress.org/reference/functions/wp_get_network
* @method array wp_get_nocache_headers () https://developer.wordpress.org/reference/functions/wp_get_nocache_headers
* @method array|\WP_Error wp_get_object_terms (int|array $object_ids, string|array $taxonomies, array|string $args = []) https://developer.wordpress.org/reference/functions/wp_get_object_terms
* @method string|bool wp_get_original_referer () https://developer.wordpress.org/reference/functions/wp_get_original_referer
* @method string wp_get_password_hint () https://developer.wordpress.org/reference/functions/wp_get_password_hint
* @method array wp_get_plugin_file_editable_extensions (string $plugin) https://developer.wordpress.org/reference/functions/wp_get_plugin_file_editable_extensions
* @method array wp_get_pomo_file_data (string $po_file) https://developer.wordpress.org/reference/functions/wp_get_pomo_file_data
* @method array wp_get_popular_importers () https://developer.wordpress.org/reference/functions/wp_get_popular_importers
* @method \WP_Post|bool wp_get_post_autosave (int $post_id, int $user_id = 0) https://developer.wordpress.org/reference/functions/wp_get_post_autosave
* @method array wp_get_post_cats (int $blogid = '1', int $post_ID = 0) https://developer.wordpress.org/reference/functions/wp_get_post_cats
* @method \WP_Post|array|null wp_get_post_revision (int|\WP_Post $post, string $output = NULL, string $filter = 'raw') https://developer.wordpress.org/reference/functions/wp_get_post_revision
* @method array wp_get_post_revisions (int|\WP_Post $post_id = 0, array|null $args = NULL) https://developer.wordpress.org/reference/functions/wp_get_post_revisions
* @method string|bool wp_get_raw_referer () https://developer.wordpress.org/reference/functions/wp_get_raw_referer
* @method bool|string wp_get_referer () https://developer.wordpress.org/reference/functions/wp_get_referer
* @method void wp_get_revision_ui_diff ($post, $compare_from, $compare_to) https://developer.wordpress.org/reference/functions/wp_get_revision_ui_diff
* @method string|bool wp_get_schedule (string $hook, array $args = []) https://developer.wordpress.org/reference/functions/wp_get_schedule
* @method void wp_get_schedules () https://developer.wordpress.org/reference/functions/wp_get_schedules
* @method void wp_get_server_protocol () https://developer.wordpress.org/reference/functions/wp_get_server_protocol
* @method string wp_get_session_token () https://developer.wordpress.org/reference/functions/wp_get_session_token
* @method void wp_get_shortlink ($id = 0, $context = 'post', $allow_slugs = true) https://developer.wordpress.org/reference/functions/wp_get_shortlink
* @method array wp_get_sidebars_widgets (bool $deprecated = true) https://developer.wordpress.org/reference/functions/wp_get_sidebars_widgets
* @method \WP_Post|null wp_get_single_post (int $postid = 0, string $mode = NULL) https://developer.wordpress.org/reference/functions/wp_get_single_post
* @method array wp_get_sites (array $args = []) https://developer.wordpress.org/reference/functions/wp_get_sites
* @method int|bool wp_get_split_term (int $old_term_id, string $taxonomy) https://developer.wordpress.org/reference/functions/wp_get_split_term
* @method array wp_get_split_terms (int $old_term_id) https://developer.wordpress.org/reference/functions/wp_get_split_terms
* @method int|bool wp_get_term_taxonomy_parent_id (int $term_id, string $taxonomy) https://developer.wordpress.org/reference/functions/wp_get_term_taxonomy_parent_id
* @method \WP_Theme wp_get_theme (string $stylesheet = NULL, string $theme_root = NULL) https://developer.wordpress.org/reference/functions/wp_get_theme
* @method void wp_get_themes ($args = []) https://developer.wordpress.org/reference/functions/wp_get_themes
* @method array wp_get_theme_file_editable_extensions (\WP_Theme $theme) https://developer.wordpress.org/reference/functions/wp_get_theme_file_editable_extensions
* @method array wp_get_translation_updates () https://developer.wordpress.org/reference/functions/wp_get_translation_updates
* @method array wp_get_update_data () https://developer.wordpress.org/reference/functions/wp_get_update_data
* @method array wp_get_upload_dir () https://developer.wordpress.org/reference/functions/wp_get_upload_dir
* @method array wp_get_users_with_no_role (int|null $site_id = NULL) https://developer.wordpress.org/reference/functions/wp_get_users_with_no_role
* @method array wp_get_user_contact_methods (\WP_User $user = NULL) https://developer.wordpress.org/reference/functions/wp_get_user_contact_methods
* @method \WP_User_Request|bool wp_get_user_request_data (int $request_id) https://developer.wordpress.org/reference/functions/wp_get_user_request_data
* @method array wp_get_video_extensions () https://developer.wordpress.org/reference/functions/wp_get_video_extensions
* @method array wp_get_widget_defaults () https://developer.wordpress.org/reference/functions/wp_get_widget_defaults
* @method string wp_guess_url () https://developer.wordpress.org/reference/functions/wp_guess_url
* @method \WP_Comment|\WP_Error wp_handle_comment_submission (array $comment_data) https://developer.wordpress.org/reference/functions/wp_handle_comment_submission
* @method void wp_handle_sideload ($file, $overrides = false, $time = NULL) https://developer.wordpress.org/reference/functions/wp_handle_sideload
* @method void wp_handle_upload ($file, $overrides = false, $time = NULL) https://developer.wordpress.org/reference/functions/wp_handle_upload
* @method void wp_handle_upload_error ($file, $message) https://developer.wordpress.org/reference/functions/wp_handle_upload_error
* @method string wp_hash (string $data, string $scheme = 'auth') https://developer.wordpress.org/reference/functions/wp_hash
* @method string wp_hash_password (string $password) https://developer.wordpress.org/reference/functions/wp_hash_password
* @method void wp_head () https://developer.wordpress.org/reference/functions/wp_head
* @method array wp_heartbeat_settings (array $settings) https://developer.wordpress.org/reference/functions/wp_heartbeat_settings
* @method array wp_heartbeat_set_suspension (array $settings) https://developer.wordpress.org/reference/functions/wp_heartbeat_set_suspension
* @method void wp_htmledit_pre ($output) https://developer.wordpress.org/reference/functions/wp_htmledit_pre
* @method string wp_html_excerpt (string $str, int $count, string $more = NULL) https://developer.wordpress.org/reference/functions/wp_html_excerpt
* @method array wp_html_split (string $input) https://developer.wordpress.org/reference/functions/wp_html_split
* @method bool wp_http_supports (array $capabilities = [], string $url = NULL) https://developer.wordpress.org/reference/functions/wp_http_supports
* @method bool|string wp_http_validate_url (string $url) https://developer.wordpress.org/reference/functions/wp_http_validate_url
* @method void wp_iframe (string|callable $content_func) https://developer.wordpress.org/reference/functions/wp_iframe
* @method resource wp_imagecreatetruecolor (int $width, int $height) https://developer.wordpress.org/reference/functions/wp_imagecreatetruecolor
* @method string wp_image_add_srcset_and_sizes (string $image, array $image_meta, int $attachment_id) https://developer.wordpress.org/reference/functions/wp_image_add_srcset_and_sizes
* @method void wp_image_editor ($post_id, $msg = false) https://developer.wordpress.org/reference/functions/wp_image_editor
* @method bool wp_image_editor_supports (string|array $args = []) https://developer.wordpress.org/reference/functions/wp_image_editor_supports
* @method bool wp_image_matches_ratio (int $source_width, int $source_height, int $target_width, int $target_height) https://developer.wordpress.org/reference/functions/wp_image_matches_ratio
* @method void wp_import_cleanup (string $id) https://developer.wordpress.org/reference/functions/wp_import_cleanup
* @method array wp_import_handle_upload () https://developer.wordpress.org/reference/functions/wp_import_handle_upload
* @method void wp_import_upload_form (string $action) https://developer.wordpress.org/reference/functions/wp_import_upload_form
* @method void wp_initial_constants () https://developer.wordpress.org/reference/functions/wp_initial_constants
* @method void wp_initial_nav_menu_meta_boxes () https://developer.wordpress.org/reference/functions/wp_initial_nav_menu_meta_boxes
* @method int|object wp_insert_category (array $catarr, bool $wp_error = false) https://developer.wordpress.org/reference/functions/wp_insert_category
* @method int|bool wp_insert_comment (array $commentdata) https://developer.wordpress.org/reference/functions/wp_insert_comment
* @method int|\WP_Error wp_insert_link (array $linkdata, bool $wp_error = false) https://developer.wordpress.org/reference/functions/wp_insert_link
* @method array|\WP_Error wp_insert_term (string $term, string $taxonomy, array|string $args = []) https://developer.wordpress.org/reference/functions/wp_insert_term
* @method int|\WP_Error wp_insert_user (array|object|\WP_User $userdata) https://developer.wordpress.org/reference/functions/wp_insert_user
* @method array wp_install (string $blog_title, string $user_name, string $user_email, bool $public, string $deprecated = '', string $user_password = '', string $language = '') https://developer.wordpress.org/reference/functions/wp_install
* @method bool wp_installing (bool $is_installing = NULL) https://developer.wordpress.org/reference/functions/wp_installing
* @method void wp_install_defaults (int $user_id) https://developer.wordpress.org/reference/functions/wp_install_defaults
* @method void wp_install_language_form (array $languages) https://developer.wordpress.org/reference/functions/wp_install_language_form
* @method bool wp_install_maybe_enable_pretty_permalinks () https://developer.wordpress.org/reference/functions/wp_install_maybe_enable_pretty_permalinks
* @method string wp_iso_descrambler (string $string) https://developer.wordpress.org/reference/functions/wp_iso_descrambler
* @method bool wp_is_file_mod_allowed (string $context) https://developer.wordpress.org/reference/functions/wp_is_file_mod_allowed
* @method bool wp_is_ini_value_changeable (string $setting) https://developer.wordpress.org/reference/functions/wp_is_ini_value_changeable
* @method void wp_is_large_network ($using = 'sites', $network_id = NULL) https://developer.wordpress.org/reference/functions/wp_is_large_network
* @method bool wp_is_mobile () https://developer.wordpress.org/reference/functions/wp_is_mobile
* @method bool wp_is_numeric_array (mixed $data) https://developer.wordpress.org/reference/functions/wp_is_numeric_array
* @method bool|int wp_is_post_autosave (int|\WP_Post $post) https://developer.wordpress.org/reference/functions/wp_is_post_autosave
* @method bool|int wp_is_post_revision (int|\WP_Post $post) https://developer.wordpress.org/reference/functions/wp_is_post_revision
* @method bool wp_is_stream (string $path) https://developer.wordpress.org/reference/functions/wp_is_stream
* @method bool wp_is_uuid (mixed $uuid, int $version = NULL) https://developer.wordpress.org/reference/functions/wp_is_uuid
* @method bool wp_is_writable (string $path) https://developer.wordpress.org/reference/functions/wp_is_writable
* @method string|bool wp_json_encode (mixed $data, int $options = 0, int $depth = 512) https://developer.wordpress.org/reference/functions/wp_json_encode
* @method void wp_just_in_time_script_localization () https://developer.wordpress.org/reference/functions/wp_just_in_time_script_localization
* @method string wp_kses (string $string, array $allowed_html, array $allowed_protocols = []) https://developer.wordpress.org/reference/functions/wp_kses
* @method array wp_kses_allowed_html (string|array $context = '') https://developer.wordpress.org/reference/functions/wp_kses_allowed_html
* @method array wp_kses_array_lc (array $inarray) https://developer.wordpress.org/reference/functions/wp_kses_array_lc
* @method string wp_kses_attr (string $element, string $attr, array $allowed_html, array $allowed_protocols) https://developer.wordpress.org/reference/functions/wp_kses_attr
* @method bool wp_kses_attr_check (string $name, string $value, string $whole, string $vless, string $element, array $allowed_html) https://developer.wordpress.org/reference/functions/wp_kses_attr_check
* @method array|bool wp_kses_attr_parse (string $element) https://developer.wordpress.org/reference/functions/wp_kses_attr_parse
* @method string wp_kses_bad_protocol (string $string, array $allowed_protocols) https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol
* @method string wp_kses_bad_protocol_once (string $string, string $allowed_protocols, $count = 1) https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once
* @method string wp_kses_bad_protocol_once2 (string $string, string $allowed_protocols) https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once2
* @method bool wp_kses_check_attr_val (string $value, string $vless, string $checkname, mixed $checkvalue) https://developer.wordpress.org/reference/functions/wp_kses_check_attr_val
* @method string wp_kses_data (string $data) https://developer.wordpress.org/reference/functions/wp_kses_data
* @method string wp_kses_decode_entities (string $string) https://developer.wordpress.org/reference/functions/wp_kses_decode_entities
* @method array wp_kses_hair (string $attr, array $allowed_protocols) https://developer.wordpress.org/reference/functions/wp_kses_hair
* @method array|bool wp_kses_hair_parse (string $attr) https://developer.wordpress.org/reference/functions/wp_kses_hair_parse
* @method void wp_kses_hook ($string, $allowed_html, $allowed_protocols) https://developer.wordpress.org/reference/functions/wp_kses_hook
* @method string wp_kses_html_error (string $string) https://developer.wordpress.org/reference/functions/wp_kses_html_error
* @method string wp_kses_js_entities (string $string) https://developer.wordpress.org/reference/functions/wp_kses_js_entities
* @method string wp_kses_named_entities (array $matches) https://developer.wordpress.org/reference/functions/wp_kses_named_entities
* @method string wp_kses_normalize_entities (string $string) https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities
* @method string wp_kses_normalize_entities2 (array $matches) https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities2
* @method string wp_kses_normalize_entities3 (array $matches) https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities3
* @method string wp_kses_no_null (string $string, array $options = NULL) https://developer.wordpress.org/reference/functions/wp_kses_no_null
* @method string wp_kses_one_attr (string $string, string $element) https://developer.wordpress.org/reference/functions/wp_kses_one_attr
* @method string wp_kses_post (string $data) https://developer.wordpress.org/reference/functions/wp_kses_post
* @method mixed wp_kses_post_deep (mixed $data) https://developer.wordpress.org/reference/functions/wp_kses_post_deep
* @method string wp_kses_split (string $string, array $allowed_html, array $allowed_protocols) https://developer.wordpress.org/reference/functions/wp_kses_split
* @method string wp_kses_split2 (string $string, array $allowed_html, array $allowed_protocols) https://developer.wordpress.org/reference/functions/wp_kses_split2
* @method string wp_kses_stripslashes (string $string) https://developer.wordpress.org/reference/functions/wp_kses_stripslashes
* @method string wp_kses_version () https://developer.wordpress.org/reference/functions/wp_kses_version
* @method void wp_link_category_checklist (int $link_id = 0) https://developer.wordpress.org/reference/functions/wp_link_category_checklist
* @method void wp_link_manager_disabled_message () https://developer.wordpress.org/reference/functions/wp_link_manager_disabled_message
* @method string wp_link_pages (string|array $args = '') https://developer.wordpress.org/reference/functions/wp_link_pages
* @method string|void wp_list_authors (string|array $args = '') https://developer.wordpress.org/reference/functions/wp_list_authors
* @method string|void wp_list_bookmarks (string|array $args = '') https://developer.wordpress.org/reference/functions/wp_list_bookmarks
* @method bool|string wp_list_categories (string|array $args = '') https://developer.wordpress.org/reference/functions/wp_list_categories
* @method bool|null|string wp_list_cats (string|array $args = '') https://developer.wordpress.org/reference/functions/wp_list_cats
* @method void wp_list_comments ($args = [], $comments = NULL) https://developer.wordpress.org/reference/functions/wp_list_comments
* @method array wp_list_filter (array $list, array $args = [], string $operator = 'AND') https://developer.wordpress.org/reference/functions/wp_list_filter
* @method string|void wp_list_pages (array|string $args = '') https://developer.wordpress.org/reference/functions/wp_list_pages
* @method array wp_list_pluck (array $list, int|string $field, int|string $index_key = NULL) https://developer.wordpress.org/reference/functions/wp_list_pluck
* @method void wp_list_post_revisions (int|\WP_Post $post_id = 0, string $type = 'all') https://developer.wordpress.org/reference/functions/wp_list_post_revisions
* @method array wp_list_sort (array $list, string|array $orderby = [], string $order = 'ASC', bool $preserve_keys = false) https://developer.wordpress.org/reference/functions/wp_list_sort
* @method void wp_list_widgets () https://developer.wordpress.org/reference/functions/wp_list_widgets
* @method void wp_list_widget_controls (string $sidebar, string $sidebar_name = '') https://developer.wordpress.org/reference/functions/wp_list_widget_controls
* @method array wp_list_widget_controls_dynamic_sidebar (array $params) https://developer.wordpress.org/reference/functions/wp_list_widget_controls_dynamic_sidebar
* @method array wp_load_alloptions () https://developer.wordpress.org/reference/functions/wp_load_alloptions
* @method void wp_load_core_site_options (int $network_id = NULL) https://developer.wordpress.org/reference/functions/wp_load_core_site_options
* @method resource wp_load_image (string $file) https://developer.wordpress.org/reference/functions/wp_load_image
* @method void wp_load_press_this () https://developer.wordpress.org/reference/functions/wp_load_press_this
* @method void wp_load_translations_early () https://developer.wordpress.org/reference/functions/wp_load_translations_early
* @method void wp_localize_community_events () https://developer.wordpress.org/reference/functions/wp_localize_community_events
* @method void wp_localize_jquery_ui_datepicker () https://developer.wordpress.org/reference/functions/wp_localize_jquery_ui_datepicker
* @method bool wp_localize_script (string $handle, string $object_name, array $l10n) https://developer.wordpress.org/reference/functions/wp_localize_script
* @method bool wp_login (string $username, string $password, string $deprecated = '') https://developer.wordpress.org/reference/functions/wp_login
* @method string|void wp_loginout (string $redirect = '', bool $echo = true) https://developer.wordpress.org/reference/functions/wp_loginout
* @method string|void wp_login_form (array $args = []) https://developer.wordpress.org/reference/functions/wp_login_form
* @method string wp_login_url (string $redirect = '', bool $force_reauth = false) https://developer.wordpress.org/reference/functions/wp_login_url
* @method void wp_login_viewport_meta () https://developer.wordpress.org/reference/functions/wp_login_viewport_meta
* @method void wp_logout () https://developer.wordpress.org/reference/functions/wp_logout
* @method string wp_logout_url (string $redirect = '') https://developer.wordpress.org/reference/functions/wp_logout_url
* @method string wp_lostpassword_url (string $redirect = '') https://developer.wordpress.org/reference/functions/wp_lostpassword_url
* @method void wp_magic_quotes () https://developer.wordpress.org/reference/functions/wp_magic_quotes
* @method void wp_mail ($to, $subject, $message, $headers = '', $attachments = []) https://developer.wordpress.org/reference/functions/wp_mail
* @method void wp_maintenance () https://developer.wordpress.org/reference/functions/wp_maintenance
* @method string wp_make_content_images_responsive (string $content) https://developer.wordpress.org/reference/functions/wp_make_content_images_responsive
* @method string wp_make_link_relative (string $link) https://developer.wordpress.org/reference/functions/wp_make_link_relative
* @method array wp_make_plugin_file_tree (string $plugin_editable_files) https://developer.wordpress.org/reference/functions/wp_make_plugin_file_tree
* @method array wp_make_theme_file_tree (array $allowed_files) https://developer.wordpress.org/reference/functions/wp_make_theme_file_tree
* @method array wp_map_nav_menu_locations (array $new_nav_menu_locations, array $old_nav_menu_locations) https://developer.wordpress.org/reference/functions/wp_map_nav_menu_locations
* @method array wp_map_sidebars_widgets (array $existing_sidebars_widgets) https://developer.wordpress.org/reference/functions/wp_map_sidebars_widgets
* @method int wp_max_upload_size () https://developer.wordpress.org/reference/functions/wp_max_upload_size
* @method void wp_maybe_auto_update () https://developer.wordpress.org/reference/functions/wp_maybe_auto_update
* @method string wp_maybe_decline_date (string $date) https://developer.wordpress.org/reference/functions/wp_maybe_decline_date
* @method void wp_maybe_generate_attachment_metadata (\WP_Post $attachment) https://developer.wordpress.org/reference/functions/wp_maybe_generate_attachment_metadata
* @method array wp_maybe_grant_install_languages_cap (array $allcaps) https://developer.wordpress.org/reference/functions/wp_maybe_grant_install_languages_cap
* @method void wp_maybe_load_embeds () https://developer.wordpress.org/reference/functions/wp_maybe_load_embeds
* @method void wp_maybe_load_widgets () https://developer.wordpress.org/reference/functions/wp_maybe_load_widgets
* @method void wp_maybe_update_network_site_counts ($network_id = NULL) https://developer.wordpress.org/reference/functions/wp_maybe_update_network_site_counts
* @method void wp_maybe_update_network_user_counts ($network_id = NULL) https://developer.wordpress.org/reference/functions/wp_maybe_update_network_user_counts
* @method string wp_mediaelement_fallback (string $url) https://developer.wordpress.org/reference/functions/wp_mediaelement_fallback
* @method void wp_media_attach_action (int $parent_id, string $action = 'attach') https://developer.wordpress.org/reference/functions/wp_media_attach_action
* @method string wp_media_insert_url_form (string $default_view = 'image') https://developer.wordpress.org/reference/functions/wp_media_insert_url_form
* @method array wp_media_personal_data_exporter (string $email_address, int $page = 1) https://developer.wordpress.org/reference/functions/wp_media_personal_data_exporter
* @method null|string wp_media_upload_handler () https://developer.wordpress.org/reference/functions/wp_media_upload_handler
* @method void wp_meta () https://developer.wordpress.org/reference/functions/wp_meta
* @method \WP_Metadata_Lazyloader wp_metadata_lazyloader () https://developer.wordpress.org/reference/functions/wp_metadata_lazyloader
* @method bool wp_mkdir_p (string $target) https://developer.wordpress.org/reference/functions/wp_mkdir_p
* @method string|bool|void wp_nav_menu (array $args = []) https://developer.wordpress.org/reference/functions/wp_nav_menu
* @method string wp_nav_menu_disabled_check (int|string $nav_menu_selected_id) https://developer.wordpress.org/reference/functions/wp_nav_menu_disabled_check
* @method void wp_nav_menu_item_link_meta_box () https://developer.wordpress.org/reference/functions/wp_nav_menu_item_link_meta_box
* @method void wp_nav_menu_item_post_type_meta_box (string $object, array $box) https://developer.wordpress.org/reference/functions/wp_nav_menu_item_post_type_meta_box
* @method void wp_nav_menu_item_taxonomy_meta_box (string $object, array $box) https://developer.wordpress.org/reference/functions/wp_nav_menu_item_taxonomy_meta_box
* @method void wp_nav_menu_locations_meta_box () https://developer.wordpress.org/reference/functions/wp_nav_menu_locations_meta_box
* @method array wp_nav_menu_manage_columns () https://developer.wordpress.org/reference/functions/wp_nav_menu_manage_columns
* @method string wp_nav_menu_max_depth (string $classes) https://developer.wordpress.org/reference/functions/wp_nav_menu_max_depth
* @method void wp_nav_menu_post_type_meta_boxes () https://developer.wordpress.org/reference/functions/wp_nav_menu_post_type_meta_boxes
* @method void wp_nav_menu_setup () https://developer.wordpress.org/reference/functions/wp_nav_menu_setup
* @method void wp_nav_menu_taxonomy_meta_boxes () https://developer.wordpress.org/reference/functions/wp_nav_menu_taxonomy_meta_boxes
* @method array wp_nav_menu_update_menu_items (int|string $nav_menu_selected_id, string $nav_menu_selected_title) https://developer.wordpress.org/reference/functions/wp_nav_menu_update_menu_items
* @method void wp_network_admin_email_change_notification (string $option_name, string $new_email, string $old_email, int $network_id) https://developer.wordpress.org/reference/functions/wp_network_admin_email_change_notification
* @method void wp_network_dashboard_right_now () https://developer.wordpress.org/reference/functions/wp_network_dashboard_right_now
* @method void wp_new_blog_notification (string $blog_title, string $blog_url, int $user_id, string $password) https://developer.wordpress.org/reference/functions/wp_new_blog_notification
* @method void wp_new_comment ($commentdata, $avoid_die = false) https://developer.wordpress.org/reference/functions/wp_new_comment
* @method bool wp_new_comment_notify_moderator (int $comment_ID) https://developer.wordpress.org/reference/functions/wp_new_comment_notify_moderator
* @method void wp_new_comment_notify_postauthor ($comment_ID) https://developer.wordpress.org/reference/functions/wp_new_comment_notify_postauthor
* @method void wp_new_user_notification (int $user_id, null $deprecated = NULL, string $notify = '') https://developer.wordpress.org/reference/functions/wp_new_user_notification
* @method bool|int wp_next_scheduled (string $hook, array $args = []) https://developer.wordpress.org/reference/functions/wp_next_scheduled
* @method void wp_nonce_ays (string $action) https://developer.wordpress.org/reference/functions/wp_nonce_ays
* @method string wp_nonce_field (int|string $action = -1, string $name = '_wpnonce', bool $referer = true, bool $echo = true) https://developer.wordpress.org/reference/functions/wp_nonce_field
* @method float wp_nonce_tick () https://developer.wordpress.org/reference/functions/wp_nonce_tick
* @method string wp_nonce_url (string $actionurl, int|string $action = -1, string $name = '_wpnonce') https://developer.wordpress.org/reference/functions/wp_nonce_url
* @method string wp_normalize_path (string $path) https://developer.wordpress.org/reference/functions/wp_normalize_path
* @method void wp_notify_moderator ($comment_id) https://developer.wordpress.org/reference/functions/wp_notify_moderator
* @method bool wp_notify_postauthor (int|\WP_Comment $comment_id, string $deprecated = NULL) https://developer.wordpress.org/reference/functions/wp_notify_postauthor
* @method void wp_not_installed () https://developer.wordpress.org/reference/functions/wp_not_installed
* @method void wp_no_robots () https://developer.wordpress.org/reference/functions/wp_no_robots
* @method void wp_ob_end_flush_all () https://developer.wordpress.org/reference/functions/wp_ob_end_flush_all
* @method void wp_oembed_add_discovery_links () https://developer.wordpress.org/reference/functions/wp_oembed_add_discovery_links
* @method void wp_oembed_add_host_js () https://developer.wordpress.org/reference/functions/wp_oembed_add_host_js
* @method void wp_oembed_add_provider (string $format, string $provider, bool $regex = false) https://developer.wordpress.org/reference/functions/wp_oembed_add_provider
* @method string wp_oembed_ensure_format (string $format) https://developer.wordpress.org/reference/functions/wp_oembed_ensure_format
* @method bool|string wp_oembed_get (string $url, array $args = '') https://developer.wordpress.org/reference/functions/wp_oembed_get
* @method void wp_oembed_register_route () https://developer.wordpress.org/reference/functions/wp_oembed_register_route
* @method bool wp_oembed_remove_provider (string $format) https://developer.wordpress.org/reference/functions/wp_oembed_remove_provider
* @method void wp_old_slug_redirect () https://developer.wordpress.org/reference/functions/wp_old_slug_redirect
* @method string wp_original_referer_field (bool $echo = true, string $jump_back_to = 'current') https://developer.wordpress.org/reference/functions/wp_original_referer_field
* @method string|void wp_page_menu (array|string $args = []) https://developer.wordpress.org/reference/functions/wp_page_menu
* @method void wp_page_reload_on_back_button_js () https://developer.wordpress.org/reference/functions/wp_page_reload_on_back_button_js
* @method array wp_parse_args (string|array|object $args, array $defaults = '') https://developer.wordpress.org/reference/functions/wp_parse_args
* @method array|bool wp_parse_auth_cookie (string $cookie = '', string $scheme = '') https://developer.wordpress.org/reference/functions/wp_parse_auth_cookie
* @method array wp_parse_id_list (array|string $list) https://developer.wordpress.org/reference/functions/wp_parse_id_list
* @method array wp_parse_slug_list (array|string $list) https://developer.wordpress.org/reference/functions/wp_parse_slug_list
* @method void wp_parse_str (string $string, array $array) https://developer.wordpress.org/reference/functions/wp_parse_str
* @method mixed wp_parse_url (string $url, int $component = -1) https://developer.wordpress.org/reference/functions/wp_parse_url
* @method void wp_password_change_notification (\WP_User $user) https://developer.wordpress.org/reference/functions/wp_password_change_notification
* @method void wp_playlist_scripts (string $type) https://developer.wordpress.org/reference/functions/wp_playlist_scripts
* @method string wp_playlist_shortcode (array $attr) https://developer.wordpress.org/reference/functions/wp_playlist_shortcode
* @method void wp_plugin_directory_constants () https://developer.wordpress.org/reference/functions/wp_plugin_directory_constants
* @method bool|void wp_plugin_update_row (string $file, array $plugin_data) https://developer.wordpress.org/reference/functions/wp_plugin_update_row
* @method void wp_plugin_update_rows () https://developer.wordpress.org/reference/functions/wp_plugin_update_rows
* @method void wp_plupload_default_settings () https://developer.wordpress.org/reference/functions/wp_plupload_default_settings
* @method array wp_popular_terms_checklist (string $taxonomy, int $default = 0, int $number = 10, bool $echo = true) https://developer.wordpress.org/reference/functions/wp_popular_terms_checklist
* @method void wp_post_preview_js () https://developer.wordpress.org/reference/functions/wp_post_preview_js
* @method string|bool wp_post_revision_title (int|object $revision, bool $link = true) https://developer.wordpress.org/reference/functions/wp_post_revision_title
* @method string|bool wp_post_revision_title_expanded (int|object $revision, bool $link = true) https://developer.wordpress.org/reference/functions/wp_post_revision_title_expanded
* @method void wp_preload_dialogs () https://developer.wordpress.org/reference/functions/wp_preload_dialogs
* @method array|void wp_prepare_attachment_for_js (mixed $attachment) https://developer.wordpress.org/reference/functions/wp_prepare_attachment_for_js
* @method array wp_prepare_revisions_for_js (object|int $post, int $selected_revision_id, int $from = NULL) https://developer.wordpress.org/reference/functions/wp_prepare_revisions_for_js
* @method array wp_prepare_themes_for_js (array $themes = NULL) https://developer.wordpress.org/reference/functions/wp_prepare_themes_for_js
* @method string wp_pre_kses_less_than (string $text) https://developer.wordpress.org/reference/functions/wp_pre_kses_less_than
* @method string wp_pre_kses_less_than_callback (array $matches) https://developer.wordpress.org/reference/functions/wp_pre_kses_less_than_callback
* @method void wp_print_admin_notice_templates () https://developer.wordpress.org/reference/functions/wp_print_admin_notice_templates
* @method void wp_print_community_events_markup () https://developer.wordpress.org/reference/functions/wp_print_community_events_markup
* @method void wp_print_community_events_templates () https://developer.wordpress.org/reference/functions/wp_print_community_events_templates
* @method void wp_print_editor_js () https://developer.wordpress.org/reference/functions/wp_print_editor_js
* @method void wp_print_file_editor_templates () https://developer.wordpress.org/reference/functions/wp_print_file_editor_templates
* @method void wp_print_footer_scripts () https://developer.wordpress.org/reference/functions/wp_print_footer_scripts
* @method array wp_print_head_scripts () https://developer.wordpress.org/reference/functions/wp_print_head_scripts
* @method void wp_print_media_templates () https://developer.wordpress.org/reference/functions/wp_print_media_templates
* @method void wp_print_plugin_file_tree (array|string $tree, string $label = '', int $level = 2, int $size = 1, int $index = 1) https://developer.wordpress.org/reference/functions/wp_print_plugin_file_tree
* @method void wp_print_request_filesystem_credentials_modal () https://developer.wordpress.org/reference/functions/wp_print_request_filesystem_credentials_modal
* @method void wp_print_revision_templates () https://developer.wordpress.org/reference/functions/wp_print_revision_templates
* @method void wp_print_scripts ($handles = false) https://developer.wordpress.org/reference/functions/wp_print_scripts
* @method array wp_print_styles (string|bool|array $handles = false) https://developer.wordpress.org/reference/functions/wp_print_styles
* @method void wp_print_theme_file_tree (array|string $tree, int $level = 2, int $size = 1, int $index = 1) https://developer.wordpress.org/reference/functions/wp_print_theme_file_tree
* @method void wp_print_update_row_templates () https://developer.wordpress.org/reference/functions/wp_print_update_row_templates
* @method string wp_privacy_anonymize_data (string $type, string $data = '') https://developer.wordpress.org/reference/functions/wp_privacy_anonymize_data
* @method string wp_privacy_anonymize_ip (string $ip_addr, bool $ipv6_fallback = false) https://developer.wordpress.org/reference/functions/wp_privacy_anonymize_ip
* @method void wp_privacy_delete_old_export_files () https://developer.wordpress.org/reference/functions/wp_privacy_delete_old_export_files
* @method string wp_privacy_exports_dir () https://developer.wordpress.org/reference/functions/wp_privacy_exports_dir
* @method string wp_privacy_exports_url () https://developer.wordpress.org/reference/functions/wp_privacy_exports_url
* @method void wp_privacy_generate_personal_data_export_file (int $request_id) https://developer.wordpress.org/reference/functions/wp_privacy_generate_personal_data_export_file
* @method string wp_privacy_generate_personal_data_export_group_html (array $group_data) https://developer.wordpress.org/reference/functions/wp_privacy_generate_personal_data_export_group_html
* @method array wp_privacy_process_personal_data_erasure_page (array $response, int $eraser_index, string $email_address, int $page, int $request_id) https://developer.wordpress.org/reference/functions/wp_privacy_process_personal_data_erasure_page
* @method array wp_privacy_process_personal_data_export_page (array $response, int $exporter_index, string $email_address, int $page, int $request_id, bool $send_as_email, string $exporter_key) https://developer.wordpress.org/reference/functions/wp_privacy_process_personal_data_export_page
* @method bool|\WP_Error wp_privacy_send_personal_data_export_email (int $request_id) https://developer.wordpress.org/reference/functions/wp_privacy_send_personal_data_export_email
* @method void wp_protect_special_option (string $option) https://developer.wordpress.org/reference/functions/wp_protect_special_option
* @method array wp_prototype_before_jquery (array $js_array) https://developer.wordpress.org/reference/functions/wp_prototype_before_jquery
* @method void wp_queue_comments_for_comment_meta_lazyload (array $comments) https://developer.wordpress.org/reference/functions/wp_queue_comments_for_comment_meta_lazyload
* @method void wp_quicktags () https://developer.wordpress.org/reference/functions/wp_quicktags
* @method void wp_raise_memory_limit ($context = 'admin') https://developer.wordpress.org/reference/functions/wp_raise_memory_limit
* @method int wp_rand (int $min = 0, int $max = 0) https://developer.wordpress.org/reference/functions/wp_rand
* @method array|bool wp_read_audio_metadata (string $file) https://developer.wordpress.org/reference/functions/wp_read_audio_metadata
* @method bool|array wp_read_image_metadata (string $file) https://developer.wordpress.org/reference/functions/wp_read_image_metadata
* @method array|bool wp_read_video_metadata (string $file) https://developer.wordpress.org/reference/functions/wp_read_video_metadata
* @method void wp_redirect ($location, $status = 302) https://developer.wordpress.org/reference/functions/wp_redirect
* @method void wp_redirect_admin_locations () https://developer.wordpress.org/reference/functions/wp_redirect_admin_locations
* @method string wp_referer_field (bool $echo = true) https://developer.wordpress.org/reference/functions/wp_referer_field
* @method array wp_refresh_post_lock (array $response, array $data, string $screen_id) https://developer.wordpress.org/reference/functions/wp_refresh_post_lock
* @method array wp_refresh_post_nonces (array $response, array $data, string $screen_id) https://developer.wordpress.org/reference/functions/wp_refresh_post_nonces
* @method string|void wp_register (string $before = '<li>', string $after = '</li>', bool $echo = true) https://developer.wordpress.org/reference/functions/wp_register
* @method array wp_register_comment_personal_data_eraser (array $erasers) https://developer.wordpress.org/reference/functions/wp_register_comment_personal_data_eraser
* @method array wp_register_comment_personal_data_exporter (array $exporters) https://developer.wordpress.org/reference/functions/wp_register_comment_personal_data_exporter
* @method array wp_register_media_personal_data_exporter (array $exporters) https://developer.wordpress.org/reference/functions/wp_register_media_personal_data_exporter
* @method bool wp_register_plugin_realpath (string $file) https://developer.wordpress.org/reference/functions/wp_register_plugin_realpath
* @method bool wp_register_script (string $handle, string $src, array $deps = [], string|bool|null $ver = false, bool $in_footer = false) https://developer.wordpress.org/reference/functions/wp_register_script
* @method void wp_register_sidebar_widget (int|string $id, string $name, callable $output_callback, array $options = []) https://developer.wordpress.org/reference/functions/wp_register_sidebar_widget
* @method bool wp_register_style (string $handle, string $src, array $deps = [], string|bool|null $ver = false, string $media = 'all') https://developer.wordpress.org/reference/functions/wp_register_style
* @method array wp_register_user_personal_data_exporter (array $exporters) https://developer.wordpress.org/reference/functions/wp_register_user_personal_data_exporter
* @method void wp_register_widget_control (int|string $id, string $name, callable $control_callback, array $options = []) https://developer.wordpress.org/reference/functions/wp_register_widget_control
* @method string wp_registration_url () https://developer.wordpress.org/reference/functions/wp_registration_url
* @method string wp_rel_nofollow (string $text) https://developer.wordpress.org/reference/functions/wp_rel_nofollow
* @method string wp_rel_nofollow_callback (array $matches) https://developer.wordpress.org/reference/functions/wp_rel_nofollow_callback
* @method bool|string wp_remote_fopen (string $uri) https://developer.wordpress.org/reference/functions/wp_remote_fopen
* @method \WP_Error|array wp_remote_get (string $url, array $args = []) https://developer.wordpress.org/reference/functions/wp_remote_get
* @method \WP_Error|array wp_remote_head (string $url, array $args = []) https://developer.wordpress.org/reference/functions/wp_remote_head
* @method \WP_Error|array wp_remote_post (string $url, array $args = []) https://developer.wordpress.org/reference/functions/wp_remote_post
* @method \WP_Error|array wp_remote_request (string $url, array $args = []) https://developer.wordpress.org/reference/functions/wp_remote_request
* @method string wp_remote_retrieve_body (array $response) https://developer.wordpress.org/reference/functions/wp_remote_retrieve_body
* @method \WP_Http_Cookie|string wp_remote_retrieve_cookie (array $response, string $name) https://developer.wordpress.org/reference/functions/wp_remote_retrieve_cookie
* @method array wp_remote_retrieve_cookies (array $response) https://developer.wordpress.org/reference/functions/wp_remote_retrieve_cookies
* @method string wp_remote_retrieve_cookie_value (array $response, string $name) https://developer.wordpress.org/reference/functions/wp_remote_retrieve_cookie_value
* @method string wp_remote_retrieve_header (array $response, string $header) https://developer.wordpress.org/reference/functions/wp_remote_retrieve_header
* @method array|\Requests_Utility_CaseInsensitiveDictionary wp_remote_retrieve_headers (array $response) https://developer.wordpress.org/reference/functions/wp_remote_retrieve_headers
* @method int|string wp_remote_retrieve_response_code (array $response) https://developer.wordpress.org/reference/functions/wp_remote_retrieve_response_code
* @method string wp_remote_retrieve_response_message (array $response) https://developer.wordpress.org/reference/functions/wp_remote_retrieve_response_message
* @method array wp_removable_query_args () https://developer.wordpress.org/reference/functions/wp_removable_query_args
* @method bool|\WP_Error wp_remove_object_terms (int $object_id, string|int|array $terms, array|string $taxonomy) https://developer.wordpress.org/reference/functions/wp_remove_object_terms
* @method string wp_replace_in_html_tags (string $haystack, array $replace_pairs) https://developer.wordpress.org/reference/functions/wp_replace_in_html_tags
* @method bool|void wp_reschedule_event (int $timestamp, string $recurrence, string $hook, array $args = []) https://developer.wordpress.org/reference/functions/wp_reschedule_event
* @method void wp_reset_postdata () https://developer.wordpress.org/reference/functions/wp_reset_postdata
* @method void wp_reset_query () https://developer.wordpress.org/reference/functions/wp_reset_query
* @method void wp_reset_vars (array $vars) https://developer.wordpress.org/reference/functions/wp_reset_vars
* @method array wp_resolve_numeric_slug_conflicts (array $query_vars = []) https://developer.wordpress.org/reference/functions/wp_resolve_numeric_slug_conflicts
* @method void wp_resource_hints () https://developer.wordpress.org/reference/functions/wp_resource_hints
* @method \stdClass wp_restore_image (int $post_id) https://developer.wordpress.org/reference/functions/wp_restore_image
* @method int|bool|null wp_restore_post_revision (int|\WP_Post $revision_id, array $fields = NULL) https://developer.wordpress.org/reference/functions/wp_restore_post_revision
* @method bool wp_revisions_enabled (\WP_Post $post) https://developer.wordpress.org/reference/functions/wp_revisions_enabled
* @method int wp_revisions_to_keep (\WP_Post $post) https://developer.wordpress.org/reference/functions/wp_revisions_to_keep
* @method void wp_revoke_user (int $id) https://developer.wordpress.org/reference/functions/wp_revoke_user
* @method void wp_richedit_pre ($text) https://developer.wordpress.org/reference/functions/wp_richedit_pre
* @method \WP_Roles wp_roles () https://developer.wordpress.org/reference/functions/wp_roles
* @method void wp_rss (string $url, int $num_items = -1) https://developer.wordpress.org/reference/functions/wp_rss
* @method void wp_safe_redirect (string $location, int $status = 302) https://developer.wordpress.org/reference/functions/wp_safe_redirect
* @method \WP_Error|array wp_safe_remote_get (string $url, array $args = []) https://developer.wordpress.org/reference/functions/wp_safe_remote_get
* @method \WP_Error|array wp_safe_remote_head (string $url, array $args = []) https://developer.wordpress.org/reference/functions/wp_safe_remote_head
* @method \WP_Error|array wp_safe_remote_post (string $url, array $args = []) https://developer.wordpress.org/reference/functions/wp_safe_remote_post
* @method \WP_Error|array wp_safe_remote_request (string $url, array $args = []) https://developer.wordpress.org/reference/functions/wp_safe_remote_request
* @method string wp_salt (string $scheme = 'auth') https://developer.wordpress.org/reference/functions/wp_salt
* @method string wp_sanitize_redirect (string $location) https://developer.wordpress.org/reference/functions/wp_sanitize_redirect
* @method \stdClass wp_save_image (int $post_id) https://developer.wordpress.org/reference/functions/wp_save_image
* @method bool wp_save_image_file (string $filename, \WP_Image_Editor $image, string $mime_type, int $post_id) https://developer.wordpress.org/reference/functions/wp_save_image_file
* @method array wp_save_nav_menu_items (int $menu_id = 0, array $menu_data = []) https://developer.wordpress.org/reference/functions/wp_save_nav_menu_items
* @method int|\WP_Error|void wp_save_post_revision (int $post_id) https://developer.wordpress.org/reference/functions/wp_save_post_revision
* @method void wp_scheduled_delete () https://developer.wordpress.org/reference/functions/wp_scheduled_delete
* @method void wp_schedule_delete_old_privacy_export_files () https://developer.wordpress.org/reference/functions/wp_schedule_delete_old_privacy_export_files
* @method void wp_schedule_event ($timestamp, $recurrence, $hook, $args = []) https://developer.wordpress.org/reference/functions/wp_schedule_event
* @method void wp_schedule_single_event ($timestamp, $hook, $args = []) https://developer.wordpress.org/reference/functions/wp_schedule_single_event
* @method void wp_schedule_update_checks () https://developer.wordpress.org/reference/functions/wp_schedule_update_checks
* @method void wp_schedule_update_network_counts () https://developer.wordpress.org/reference/functions/wp_schedule_update_network_counts
* @method void wp_scripts () https://developer.wordpress.org/reference/functions/wp_scripts
* @method bool wp_script_add_data (string $handle, string $key, mixed $value) https://developer.wordpress.org/reference/functions/wp_script_add_data
* @method bool wp_script_is (string $handle, string $list = 'enqueued') https://developer.wordpress.org/reference/functions/wp_script_is
* @method void wp_send_json (mixed $response, int $status_code = NULL) https://developer.wordpress.org/reference/functions/wp_send_json
* @method void wp_send_json_error (mixed $data = NULL, int $status_code = NULL) https://developer.wordpress.org/reference/functions/wp_send_json_error
* @method void wp_send_json_success (mixed $data = NULL, int $status_code = NULL) https://developer.wordpress.org/reference/functions/wp_send_json_success
* @method void wp_send_new_user_notifications (int $user_id, string $notify = 'both') https://developer.wordpress.org/reference/functions/wp_send_new_user_notifications
* @method \WP_Error|bool wp_send_user_request (string $request_id) https://developer.wordpress.org/reference/functions/wp_send_user_request
* @method void wp_setcookie (string $username, string $password = '', bool $already_md5 = false, string $home = '', string $siteurl = '', bool $remember = false) https://developer.wordpress.org/reference/functions/wp_setcookie
* @method object wp_setup_nav_menu_item (object $menu_item) https://developer.wordpress.org/reference/functions/wp_setup_nav_menu_item
* @method bool|null wp_set_all_user_settings (array $user_settings) https://developer.wordpress.org/reference/functions/wp_set_all_user_settings
* @method void wp_set_auth_cookie (int $user_id, bool $remember = false, mixed $secure = '', string $token = '') https://developer.wordpress.org/reference/functions/wp_set_auth_cookie
* @method void wp_set_comment_cookies (\WP_Comment $comment, \WP_User $user, bool $cookies_consent = true) https://developer.wordpress.org/reference/functions/wp_set_comment_cookies
* @method void wp_set_comment_status ($comment_id, $comment_status, $wp_error = false) https://developer.wordpress.org/reference/functions/wp_set_comment_status
* @method \WP_User wp_set_current_user (int $id, string $name = '') https://developer.wordpress.org/reference/functions/wp_set_current_user
* @method void wp_set_internal_encoding () https://developer.wordpress.org/reference/functions/wp_set_internal_encoding
* @method void wp_set_lang_dir () https://developer.wordpress.org/reference/functions/wp_set_lang_dir
* @method void wp_set_link_cats (int $link_id = 0, array $link_categories = []) https://developer.wordpress.org/reference/functions/wp_set_link_cats
* @method array|\WP_Error wp_set_object_terms (int $object_id, string|int|array $terms, string $taxonomy, bool $append = false) https://developer.wordpress.org/reference/functions/wp_set_object_terms
* @method void wp_set_password (string $password, int $user_id) https://developer.wordpress.org/reference/functions/wp_set_password
* @method bool|mixed wp_set_post_cats (int $blogid = '1', int $post_ID = 0, array $post_categories = []) https://developer.wordpress.org/reference/functions/wp_set_post_cats
* @method void wp_set_sidebars_widgets (array $sidebars_widgets) https://developer.wordpress.org/reference/functions/wp_set_sidebars_widgets
* @method void wp_set_wpdb_vars () https://developer.wordpress.org/reference/functions/wp_set_wpdb_vars
* @method void wp_shake_js () https://developer.wordpress.org/reference/functions/wp_shake_js
* @method void wp_shortlink_header () https://developer.wordpress.org/reference/functions/wp_shortlink_header
* @method void wp_shortlink_wp_head () https://developer.wordpress.org/reference/functions/wp_shortlink_wp_head
* @method bool wp_should_upgrade_global_tables () https://developer.wordpress.org/reference/functions/wp_should_upgrade_global_tables
* @method array wp_shrink_dimensions (int $width, int $height, int $wmax = 128, int $hmax = 96) https://developer.wordpress.org/reference/functions/wp_shrink_dimensions
* @method string|void wp_sidebar_description (string $id) https://developer.wordpress.org/reference/functions/wp_sidebar_description
* @method void wp_signon ($credentials = [], $secure_cookie = '') https://developer.wordpress.org/reference/functions/wp_signon
* @method void wp_simplepie_autoload ($class) https://developer.wordpress.org/reference/functions/wp_simplepie_autoload
* @method void wp_site_admin_email_change_notification (string $old_email, string $new_email, string $option_name) https://developer.wordpress.org/reference/functions/wp_site_admin_email_change_notification
* @method void wp_site_icon () https://developer.wordpress.org/reference/functions/wp_site_icon
* @method string|array wp_slash (string|array $value) https://developer.wordpress.org/reference/functions/wp_slash
* @method string wp_spaces_regexp () https://developer.wordpress.org/reference/functions/wp_spaces_regexp
* @method bool wp_spam_comment (int|\WP_Comment $comment_id) https://developer.wordpress.org/reference/functions/wp_spam_comment
* @method string wp_specialchars (string $string, string $quote_style = NULL, bool|string $charset = false, bool $double_encode = false) https://developer.wordpress.org/reference/functions/wp_specialchars
* @method string wp_specialchars_decode (string $string, string|int $quote_style = NULL) https://developer.wordpress.org/reference/functions/wp_specialchars_decode
* @method string wp_sprintf (string $pattern) https://developer.wordpress.org/reference/functions/wp_sprintf
* @method string wp_sprintf_l (string $pattern, array $args) https://developer.wordpress.org/reference/functions/wp_sprintf_l
* @method void wp_ssl_constants () https://developer.wordpress.org/reference/functions/wp_ssl_constants
* @method void wp_start_object_cache () https://developer.wordpress.org/reference/functions/wp_start_object_cache
* @method void wp_start_scraping_edited_file_errors () https://developer.wordpress.org/reference/functions/wp_start_scraping_edited_file_errors
* @method string wp_star_rating (array $args = []) https://developer.wordpress.org/reference/functions/wp_star_rating
* @method string wp_staticize_emoji (string $text) https://developer.wordpress.org/reference/functions/wp_staticize_emoji
* @method array wp_staticize_emoji_for_email (array $mail) https://developer.wordpress.org/reference/functions/wp_staticize_emoji_for_email
* @method bool wp_stream_image (\WP_Image_Editor $image, string $mime_type, int $attachment_id) https://developer.wordpress.org/reference/functions/wp_stream_image
* @method string wp_strip_all_tags (string $string, bool $remove_breaks = false) https://developer.wordpress.org/reference/functions/wp_strip_all_tags
* @method void wp_styles () https://developer.wordpress.org/reference/functions/wp_styles
* @method bool wp_style_add_data (string $handle, string $key, mixed $value) https://developer.wordpress.org/reference/functions/wp_style_add_data
* @method bool wp_style_is (string $handle, string $list = 'enqueued') https://developer.wordpress.org/reference/functions/wp_style_is
* @method string|bool wp_style_loader_src (string $src, string $handle) https://developer.wordpress.org/reference/functions/wp_style_loader_src
* @method bool wp_suspend_cache_addition (bool $suspend = NULL) https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition
* @method bool wp_suspend_cache_invalidation (bool $suspend = true) https://developer.wordpress.org/reference/functions/wp_suspend_cache_invalidation
* @method void wp_switch_roles_and_user (int $new_site_id, int $old_site_id) https://developer.wordpress.org/reference/functions/wp_switch_roles_and_user
* @method void|array wp_tag_cloud (array|string|null $args = '') https://developer.wordpress.org/reference/functions/wp_tag_cloud
* @method void wp_templating_constants () https://developer.wordpress.org/reference/functions/wp_templating_constants
* @method string wp_tempnam (string $filename = '', string $dir = '') https://developer.wordpress.org/reference/functions/wp_tempnam
* @method void wp_terms_checklist (int $post_id = 0, array|string $args = []) https://developer.wordpress.org/reference/functions/wp_terms_checklist
* @method bool wp_term_is_shared (int $term_id) https://developer.wordpress.org/reference/functions/wp_term_is_shared
* @method string wp_text_diff (string $left_string, string $right_string, string|array $args = NULL) https://developer.wordpress.org/reference/functions/wp_text_diff
* @method bool|void wp_theme_update_row (string $theme_key, \WP_Theme $theme) https://developer.wordpress.org/reference/functions/wp_theme_update_row
* @method void wp_theme_update_rows () https://developer.wordpress.org/reference/functions/wp_theme_update_rows
* @method bool wp_throttle_comment_flood (bool $block, int $time_lastcomment, int $time_newcomment) https://developer.wordpress.org/reference/functions/wp_throttle_comment_flood
* @method string wp_timezone_choice (string $selected_zone, string $locale = NULL) https://developer.wordpress.org/reference/functions/wp_timezone_choice
* @method float|bool wp_timezone_override_offset () https://developer.wordpress.org/reference/functions/wp_timezone_override_offset
* @method bool wp_timezone_supported () https://developer.wordpress.org/reference/functions/wp_timezone_supported
* @method void wp_tiny_mce ($teeny = false, $settings = false) https://developer.wordpress.org/reference/functions/wp_tiny_mce
* @method string|null wp_title (string $sep = '&raquo;', bool $display = true, string $seplocation = '') https://developer.wordpress.org/reference/functions/wp_title
* @method void wp_title_rss (string $deprecated = '&#8211;') https://developer.wordpress.org/reference/functions/wp_title_rss
* @method void wp_transition_comment_status ($new_status, $old_status, $comment) https://developer.wordpress.org/reference/functions/wp_transition_comment_status
* @method bool wp_trash_comment (int|\WP_Comment $comment_id) https://developer.wordpress.org/reference/functions/wp_trash_comment
* @method void wp_trim_excerpt ($text = '') https://developer.wordpress.org/reference/functions/wp_trim_excerpt
* @method string wp_trim_words (string $text, int $num_words = 55, string $more = NULL) https://developer.wordpress.org/reference/functions/wp_trim_words
* @method void wp_underscore_audio_template () https://developer.wordpress.org/reference/functions/wp_underscore_audio_template
* @method void wp_underscore_playlist_templates () https://developer.wordpress.org/reference/functions/wp_underscore_playlist_templates
* @method void wp_underscore_video_template () https://developer.wordpress.org/reference/functions/wp_underscore_video_template
* @method string wp_unique_filename (string $dir, string $filename, callable $unique_filename_callback = NULL) https://developer.wordpress.org/reference/functions/wp_unique_filename
* @method string wp_unique_term_slug (string $slug, object $term) https://developer.wordpress.org/reference/functions/wp_unique_term_slug
* @method void wp_unregister_GLOBALS () https://developer.wordpress.org/reference/functions/wp_unregister_GLOBALS
* @method void wp_unregister_sidebar_widget (int|string $id) https://developer.wordpress.org/reference/functions/wp_unregister_sidebar_widget
* @method void wp_unregister_widget_control (int|string $id) https://developer.wordpress.org/reference/functions/wp_unregister_widget_control
* @method bool|void wp_unschedule_event (int $timestamp, string $hook, array $args = []) https://developer.wordpress.org/reference/functions/wp_unschedule_event
* @method void wp_unschedule_hook (string $hook) https://developer.wordpress.org/reference/functions/wp_unschedule_hook
* @method string|array wp_unslash (string|array $value) https://developer.wordpress.org/reference/functions/wp_unslash
* @method bool wp_unspam_comment (int|\WP_Comment $comment_id) https://developer.wordpress.org/reference/functions/wp_unspam_comment
* @method bool wp_untrash_comment (int|\WP_Comment $comment_id) https://developer.wordpress.org/reference/functions/wp_untrash_comment
* @method int|bool wp_update_category (array $catarr) https://developer.wordpress.org/reference/functions/wp_update_category
* @method int wp_update_comment (array $commentarr) https://developer.wordpress.org/reference/functions/wp_update_comment
* @method bool|void wp_update_comment_count (int|null $post_id, bool $do_deferred = false) https://developer.wordpress.org/reference/functions/wp_update_comment_count
* @method bool wp_update_comment_count_now (int $post_id) https://developer.wordpress.org/reference/functions/wp_update_comment_count_now
* @method void wp_update_core ($current, $feedback = '') https://developer.wordpress.org/reference/functions/wp_update_core
* @method \WP_Post|\WP_Error wp_update_custom_css_post (string $css, array $args = []) https://developer.wordpress.org/reference/functions/wp_update_custom_css_post
* @method int|\WP_Error wp_update_link (array $linkdata) https://developer.wordpress.org/reference/functions/wp_update_link
* @method int|\WP_Error wp_update_nav_menu_item (int $menu_id = 0, int $menu_item_db_id = 0, array $menu_item_data = []) https://developer.wordpress.org/reference/functions/wp_update_nav_menu_item
* @method int|\WP_Error wp_update_nav_menu_object (int $menu_id = 0, array $menu_data = []) https://developer.wordpress.org/reference/functions/wp_update_nav_menu_object
* @method void wp_update_network_counts (int|null $network_id = NULL) https://developer.wordpress.org/reference/functions/wp_update_network_counts
* @method void wp_update_network_site_counts (int|null $network_id = NULL) https://developer.wordpress.org/reference/functions/wp_update_network_site_counts
* @method void wp_update_network_user_counts (int|null $network_id = NULL) https://developer.wordpress.org/reference/functions/wp_update_network_user_counts
* @method void wp_update_plugin ($plugin, $feedback = '') https://developer.wordpress.org/reference/functions/wp_update_plugin
* @method void wp_update_plugins (array $extra_stats = []) https://developer.wordpress.org/reference/functions/wp_update_plugins
* @method array|\WP_Error wp_update_term (int $term_id, string $taxonomy, array|string $args = []) https://developer.wordpress.org/reference/functions/wp_update_term
* @method bool wp_update_term_count (int|array $terms, string $taxonomy, bool $do_deferred = false) https://developer.wordpress.org/reference/functions/wp_update_term_count
* @method bool wp_update_term_count_now (array $terms, string $taxonomy) https://developer.wordpress.org/reference/functions/wp_update_term_count_now
* @method void wp_update_theme ($theme, $feedback = '') https://developer.wordpress.org/reference/functions/wp_update_theme
* @method void wp_update_themes (array $extra_stats = []) https://developer.wordpress.org/reference/functions/wp_update_themes
* @method int|\WP_Error wp_update_user (object|\WP_User $userdata) https://developer.wordpress.org/reference/functions/wp_update_user
* @method void wp_upgrade () https://developer.wordpress.org/reference/functions/wp_upgrade
* @method array wp_upload_bits (string $name, null|string $deprecated, mixed $bits, string $time = NULL) https://developer.wordpress.org/reference/functions/wp_upload_bits
* @method array wp_upload_dir (string $time = NULL, bool $create_dir = true, bool $refresh_cache = false) https://developer.wordpress.org/reference/functions/wp_upload_dir
* @method array wp_user_personal_data_exporter (string $email_address) https://developer.wordpress.org/reference/functions/wp_user_personal_data_exporter
* @method string wp_user_request_action_description (string $action_name) https://developer.wordpress.org/reference/functions/wp_user_request_action_description
* @method void wp_user_settings () https://developer.wordpress.org/reference/functions/wp_user_settings
* @method bool wp_using_ext_object_cache (bool $using = NULL) https://developer.wordpress.org/reference/functions/wp_using_ext_object_cache
* @method bool|int wp_validate_auth_cookie (string $cookie = '', string $scheme = '') https://developer.wordpress.org/reference/functions/wp_validate_auth_cookie
* @method bool wp_validate_boolean (mixed $var) https://developer.wordpress.org/reference/functions/wp_validate_boolean
* @method void wp_validate_logged_in_cookie ($user_id) https://developer.wordpress.org/reference/functions/wp_validate_logged_in_cookie
* @method string wp_validate_redirect (string $location, string $default = '') https://developer.wordpress.org/reference/functions/wp_validate_redirect
* @method bool|\WP_Error wp_validate_user_request_key (string $request_id, string $key) https://developer.wordpress.org/reference/functions/wp_validate_user_request_key
* @method bool|int wp_verify_nonce (string $nonce, string|int $action = -1) https://developer.wordpress.org/reference/functions/wp_verify_nonce
* @method void wp_version_check ($extra_stats = [], $force_check = false) https://developer.wordpress.org/reference/functions/wp_version_check
* @method string|void wp_video_shortcode (array $attr, string $content = '') https://developer.wordpress.org/reference/functions/wp_video_shortcode
* @method void wp_welcome_panel () https://developer.wordpress.org/reference/functions/wp_welcome_panel
* @method string wp_widgets_access_body_class (string $classes) https://developer.wordpress.org/reference/functions/wp_widgets_access_body_class
* @method void wp_widgets_add_menu () https://developer.wordpress.org/reference/functions/wp_widgets_add_menu
* @method void wp_widgets_init () https://developer.wordpress.org/reference/functions/wp_widgets_init
* @method array wp_widget_control (array $sidebar_args) https://developer.wordpress.org/reference/functions/wp_widget_control
* @method string|void wp_widget_description (int|string $id) https://developer.wordpress.org/reference/functions/wp_widget_description
* @method void wp_widget_rss_form (array|string $args, array $inputs = NULL) https://developer.wordpress.org/reference/functions/wp_widget_rss_form
* @method void wp_widget_rss_output (string|array|object $rss, array $args = []) https://developer.wordpress.org/reference/functions/wp_widget_rss_output
* @method array wp_widget_rss_process (array $widget_rss, bool $check_feed = true) https://developer.wordpress.org/reference/functions/wp_widget_rss_process
* @method void wxr_authors_list (array $post_ids = NULL) https://developer.wordpress.org/reference/functions/wxr_authors_list
* @method void wxr_category_description (object $category) https://developer.wordpress.org/reference/functions/wxr_category_description
* @method void wxr_cat_name (object $category) https://developer.wordpress.org/reference/functions/wxr_cat_name
* @method string wxr_cdata (string $str) https://developer.wordpress.org/reference/functions/wxr_cdata
* @method bool wxr_filter_postmeta (bool $return_me, string $meta_key) https://developer.wordpress.org/reference/functions/wxr_filter_postmeta
* @method void wxr_nav_menu_terms () https://developer.wordpress.org/reference/functions/wxr_nav_menu_terms
* @method void wxr_post_taxonomy () https://developer.wordpress.org/reference/functions/wxr_post_taxonomy
* @method string wxr_site_url () https://developer.wordpress.org/reference/functions/wxr_site_url
* @method void wxr_tag_description (object $tag) https://developer.wordpress.org/reference/functions/wxr_tag_description
* @method void wxr_tag_name (object $tag) https://developer.wordpress.org/reference/functions/wxr_tag_name
* @method void wxr_term_description (object $term) https://developer.wordpress.org/reference/functions/wxr_term_description
* @method void wxr_term_meta (\WP_Term $term) https://developer.wordpress.org/reference/functions/wxr_term_meta
* @method void wxr_term_name (object $term) https://developer.wordpress.org/reference/functions/wxr_term_name
* @method void xfn_check (string $class, string $value = '', mixed $deprecated = '') https://developer.wordpress.org/reference/functions/xfn_check
* @method string|array xmlrpc_getpostcategory (string $content) https://developer.wordpress.org/reference/functions/xmlrpc_getpostcategory
* @method string xmlrpc_getposttitle (string $content) https://developer.wordpress.org/reference/functions/xmlrpc_getposttitle
* @method \IXR_Error xmlrpc_pingback_error (\IXR_Error $ixr_error) https://developer.wordpress.org/reference/functions/xmlrpc_pingback_error
* @method string xmlrpc_removepostdata (string $content) https://developer.wordpress.org/reference/functions/xmlrpc_removepostdata
* @method string zeroise (int $number, int $threshold) https://developer.wordpress.org/reference/functions/zeroise
 */
class WordPress
{
    public function __call($name, $parameters) {
        return $name(...$parameters);
    }
}
