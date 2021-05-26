@php $theme_body_font = isset($theme_body_font) ? $theme_body_font : 'Poppins' @endphp
@php $theme_title_font = isset($theme_title_font) ? $theme_title_font : 'Playfair Display' @endphp
<style>
    body,
    small,
    .sub-menu-container .menu-item > .menu-link,
    .wp-caption,
    .fbox-center.fbox-italic p,
    .skills li .progress-percent .counter,
    .nav-tree ul ul a,
    .font-body,
    .entry-link span,
    .entry blockquote p,
    .more-link,
    .comment-content .comment-author span,
    .comment-content .comment-author span a,
    .button.button-desc span,
    .testi-content p,
    .team-title span,
    .before-heading,
    .wedding-head .first-name span,
    .wedding-head .last-name span { font-family: '{{ $theme_body_font }}', sans-serif !important; }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    #logo a,
    .menu-link,
    .mega-menu-style-2 .mega-menu-title > .menu-link,
    .top-search-form input,
    .entry-link,
    .entry.entry-date-section span,
    .button.button-desc,
    .fbox-content h3,
    .tab-nav-lg li a,
    .counter,
    label,
    .widget-filter-links li a,
    .nav-tree li a,
    .wedding-head,
    .font-primary { font-family: '{{ $theme_body_font }}', sans-serif !important; }

    .font-secondary {
        font-family: '{{ $theme_title_font }}', cursive !important;
        font-weight: 900!important;
    }
</style>
