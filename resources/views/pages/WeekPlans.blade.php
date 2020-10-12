@extends('layouts.app')

@section('content')
<style>
.preview-list.grid.columns-7,
.preview-list.grid.columns-week {
    grid-template-columns: repeat(7, 1fr);
}

.preview-list.grid {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 4px;
    margin: 1rem 0;
}

.preview-list,
.entry .preview-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.preview-list.grid.columns-7>*:nth-child(7n+1),
.preview-list.grid.columns-week>*:nth-child(7n+1) {
    clear: left;
}

.preview-list.grid.columns-7>*:nth-child(4n+1),
.preview-list.grid.columns-week>*:nth-child(4n+1) {
    clear: none;
}

.preview-list.grid.columns-7>*:nth-child(4n+1),
.preview-list.grid.columns-week>*:nth-child(4n+1) {
    clear: left;
}

.preview-list.grid .preview-item {
    padding: 0;
}

.preview-list.grid.columns-7>*,
.preview-list.grid.columns-week>* {
    margin: 0;
    width: auto;
}

.preview-item.format-image,
.preview-item.format-image-simple,
.preview-item.format-news .news-image,
.preview-item.format-course .course-image {
    line-height: 0;
}

.preview-item,
.preview-item .news-image,
.preview-item .course-image {
    display: block;
    position: relative;
}

.preview-list.grid .preview-item .inner {
    position: relative;
}

.preview-list *,
.preview-item * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

img.lazy.initial,
img.lazy.loaded,
img.lazy.error,
img[srcset].lazy,
img[src].lazy {
    opacity: 1;
}

.preview-item .main-image {
    width: 100%;
}

img.lazy-fade-in {
    -webkit-transition: opacity 1s;
    transition: opacity 1s;
}

img.lazy {
    opacity: 0;
}

.preview-list *,
.preview-item * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

select,
img {
    height: auto;
    max-width: 100%;
}

img {
    border-style: none;
}

.preview-item .inner:hover .show-on-active,
.preview-item.hover .show-on-active,
.preview-item:focus .show-on-active,
.preview-item.active .show-on-active,
.preview-item.show-footer-always .footer,
.preview-item.show-header-always .header {
    filter: alpha(opacity=100);
    opacity: 1;
}

.preview-item .header,
.preview-item .footer {
    padding: 0.8em;
}

.preview-item .header {
    top: 0;
    width: 100%;
    padding-right: 4.2em;
}

.preview-item .header,
.preview-item .footer {
    display: block;
    position: absolute;
    padding: 8px;
    width: 100%;
}

.preview-item-edit,
.preview-item-rank,
.preview-item .header,
.preview-item .footer,
.preview-item-icons,
.preview-item .play-icon,
.preview-item .ddplus-icon,
.video-watched-msg,
.extra-images-container {
    display: block;
}

.preview-list *,
.preview-item * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.preview-item-tag {
    font-size: 1.5rem;
    margin-left: 0.1em;
}

.preview-item-tag {
    display: block;
    filter: alpha(opacity=50);
    opacity: 0.5;
    font-size: 1.5rem;
    line-height: 1;
    margin-left: 0;
}

.preview-list *,
.preview-item * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.preview-item.light .header {
    color: #333;
}

.preview-item .header,
.preview-item .footer,
.preview-item .header a,
.preview-item .footer a,
.preview-item .js-link.preview-item-js-link,
.preview-item>.js-link.preview-item-js-link:hover {
    color: #fff;
}

.preview-item.format-image,
.preview-item.format-image-simple,
.preview-item.format-news .news-image,
.preview-item.format-course .course-image {
    line-height: 0;
}

.preview-list,
.entry .preview-list {
    list-style: none;
    margin: 0;
    padding: 0;
}
.hr {
    border: 0 !important;
    border-bottom: 2px solid #f2f2f2 !important;
    padding-top: 1.444rem;
    margin: 0 0 2.778rem;
}
</style>

<div>
    <div class="container-fluid p-5">
        <div id="show_plan">
        </div>
        
    </div>
</div>
<script>
$.ajax({
    url: "{{ route('getAllPlans') }}",
    method: "GET",
    success: function(data) {
        $('#show_plan').html(data);
    }
});
</script>
@endsection