@extends('layouts.app')

@section('content')
<style>
/*! CSS Used from: https://fluentthemes.com/wp/knowledge/wp-content/cache/min/1/2bb47372f22a699473c6f5552b365de0.css */
div,
span,
h2,
h3,
h6,
p,
pre,
a,
code,
img,
strong,
i,
ol,
ul,
li,
form,
label,
table,
tbody,
tr,
td,
article,
aside {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

article,
aside {
    display: block;
}

ol,
ul,
li {
    list-style: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

p {
    margin: 0 0 20px 0;
    line-height: 22px;
}

* {
    outline: none;
}

input[type='submit'] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    cursor: pointer;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
}

::-moz-selection {
    color: #fff;
    text-shadow: none;
}

::selection {
    color: #fff;
    text-shadow: none;
}

pre {
    background: #F5F5F5;
    color: #888;
    padding: 10px;
    margin: 0;
    border: 1px solid #E9E9E9;
    word-break: break-all;
    word-wrap: break-word;
    white-space: pre-line;
    overflow: hidden;
    line-height: 24px;
}

input,
.button,
input[type="submit"],
label,
.widget ul li,
textarea {
    font-family: "Open Sans", "Droid Arabic Kufi", Arial, sans-serif;
}

.widget ul li h6 {
    font-size: 14px;
    line-height: 20px;
}

.button,
input[type="submit"] {
    display: inline-block;
    margin: 5px 5px 5px 0;
    border: none;
    cursor: pointer;
    text-shadow: none !important;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    font-size: 15px;
    font-weight: 700;
}

input[type="submit"] {
    font-size: 14px;
}

.button.small,
input[type="submit"] {
    padding: 7px 15px;
}

input[type="text"],
textarea {
    padding: 12px 12px;
    outline: none;
    font-size: 13px;
    font-weight: 600;
    margin: 0;
    width: 200px;
    max-width: 100%;
    display: block;
    margin-bottom: 20px;
    color: #2f3239;
    border: 1px solid #dedede;
    -moz-transition: border .25s linear, color .25s linear, background-color .25s linear;
    -webkit-transition: border .25s linear, color .25s linear, background-color .25s linear;
    -o-transition: border .25s linear, color .25s linear, background-color .25s linear;
    transition: border .25s linear, color .25s linear, background-color .25s linear;
    background: #fff;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
}

textarea {
    min-height: 60px;
}

label {
    cursor: pointer;
    display: block;
}

.button.small,
input[type="submit"] {
    font-size: 14px;
}

.margin_0 {
    margin: 0 !important;
}

.button.dark_button.color,
.button.color:hover,
input[type="submit"]:hover {
    background: #2f3239;
}

input[type="submit"] {
    background: #f1f1f1;
}

a,
li a:hover,
input[type="submit"] {
    color: #2f3239;
}

#commentform input[type="submit"] {
    color: #fff !important;
}

p a:hover {
    color: #212121;
}

h2,
h3,
h6 {
    font-family: "Merriweather", "Open Sans", "Droid Arabic Kufi", Arial, sans-serif;
    font-weight: 700;
    text-transform: none;
    margin-top: 0;
    margin-bottom: 18px;
}

h3 a,
h6 a {
    font-weight: inherit;
}

h2 {
    font-size: 24px;
    line-height: 28px;
}

h3 {
    font-size: 18px;
    line-height: 24px;
}

h6 {
    font-size: 13px;
    line-height: 18px;
}

strong {
    font-weight: 700;
}

strong {
    font-weight: 700;
}

table {
    margin: 0 0 30px 0;
    text-align: left;
    border: 1px solid #dbdbdb;
    width: 100%;
}

tr:nth-child(odd) {
    background: #FFF;
}

td {
    padding: 10px;
    vertical-align: middle;
    border: 1px solid #e2e2e2;
}

tr:hover {
    background: #fafafa;
}

a,
.button,
input[type="submit"],
.related-posts li a i,
.single-question.question h2 {
    -webkit-transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
    -moz-transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
    -ms-transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
    -o-transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
    transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
}

.sidebar li a {
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

a {
    text-decoration: none;
}

img {
    max-width: 100%;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    vertical-align: middle;
    height: auto;
}

.last {
    margin-right: 0 !important;
    clear: right;
}

[class^="icon-"] {
    font-family: FontAwesome;
    font-weight: 400;
    font-style: normal;
    text-decoration: inherit;
    -webkit-font-smoothing: antialiased;
    *margin-right: .3em;
}

[class^="icon-"]:before {
    text-decoration: inherit;
    display: inline-block;
    speak: none;
}

a [class^="icon-"],
a [class^="icon-"]:before {
    display: inline-block;
}

[class^="icon-"] {
    display: inline-block;
    width: auto;
    height: auto;
    line-height: normal;
    vertical-align: baseline;
    background-image: none;
    background-position: 0 0;
    background-repeat: repeat;
    margin-top: 0;
}

.icon-time:before {
    content: "\f017";
}

.icon-flag:before {
    content: "\f024";
}

.icon-question-sign:before {
    content: "\f059";
}

.icon-arrow-up:before {
    content: "\f062";
}

.icon-eye-open:before {
    content: "\f06e";
}

.icon-thumbs-up:before {
    content: "\f087";
}

.icon-thumbs-down:before {
    content: "\f088";
}

.icon-angle-left:before {
    content: "\f100";
}

.icon-angle-right:before {
    content: "\f101";
}

.icon-angle-left:before {
    content: "\f104";
}

.icon-angle-right:before {
    content: "\f105";
}

body .with-sidebar-container .col-md-8 {
    overflow-x: auto;
}

::-webkit-input-placeholder {
    color: #2f3239;
}

:-moz-placeholder {
    color: #2f3239;
    opacity: 1;
}

::-moz-placeholder {
    color: #2f3239;
    opacity: 1;
}

:-ms-input-placeholder {
    color: #2f3239;
}

.container.main-content {
    position: relative;
    z-index: 991;
}

.page-content {
    border: none;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 20px;
}

.widget .related-posts {
    padding: 0 !important;
    border: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.page-content .boxedtitle,
.main-content .boxedtitle {
    margin-bottom: 20px;
    padding-left: 20px;
    border-bottom: 0;
}

.page-content p {
    font-size: 13px;
    font-weight: 400;
}

.main-content .boxedtitle {
    margin-left: 0;
    margin-right: 0;
}

.main-content .page-content .boxedtitle.page-title {
    margin: -20px -20px 20px;
}

.main-content .page-content .boxedtitle.page-title {
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    background: transparent;
    position: relative;
    margin-bottom: 10px !important;
}

.main-content .page-content .boxedtitle.page-title h2 {
    padding: 20px 0 10px;
    margin: 0 20px 20px 0;
    border-bottom: 1px solid #eee;
    font-size: 18px;
    font-weight: 700;
}

.boxedtitle.page-title h2 {
    font-size: 16px;
    font-weight: 700;
}

.main-content .boxedtitle h2 {
    padding-top: 10px;
    padding-bottom: 10px;
}

.page-content {
    overflow: hidden;
}

.comment-respond {
    background: #FFF;
}

.report_c {
    margin-right: 10px;
}

.question {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin-bottom: 30px;
    padding: 20px;
    border-bottom: 1px solid #dedede;
    background: #FFF;
    position: relative;
}

.question-inner {
    position: relative;
    margin-left: 101px;
}

.single-question {
    padding: 0 0 20px 0;
    margin-bottom: 10px;
}

.single-question .question-inner {
    margin-left: 0;
    padding: 0 20px;
}

.question-type-main {
    font-size: 12px;
    margin: 0;
    display: inline-block;
    padding: 8px 10px;
    position: absolute;
    top: 0;
    right: 67px;
    height: 32px;
    line-height: 15px;
}

.question-type-main i {
    margin-right: 5px;
}

.single-question.question h2 {
    margin-left: 20px;
}

.question h2 {
    margin: 0 0 30px 101px;
    color: #474D5D;
    overflow: hidden;
    font-size: 22px;
    font-weight: 700;
    padding-right: 161px;
}

.question-vote-result {
    float: left;
    font-size: 13px;
    color: #2f3239;
}

.single-question-vote-up,
.single-question-vote-down {
    background-color: #eee;
    color: #666;
    -webkit-transition: all 0.6s linear;
    transition: all 0.6s linear;
    float: right;
    font-size: 13px;
    height: 20px;
    width: 20px;
    line-height: 20px;
    text-align: center;
    margin-right: 5px;
}

.single-question-vote-up:hover {
    background-color: #338338;
}

.single-question-vote-down:hover {
    background-color: #990707;
}

.question-date,
.question-view,
.question-tags {
    margin: 0 20px 5px 0;
    float: left;
    display: block;
    text-transform: uppercase;
}

.question-view {
    margin-right: 0;
}

.question-date i,
.question-view i {
    margin-right: 5px;
}

.question-tags {
    margin-bottom: 0;
}

.question-tags {
    text-transform: capitalize;
    font-size: 12px;
    display: inline-block;
    float: left;
}

.question-report {
    float: right;
    font-size: 12px;
    background-color: #fff;
    padding: 6px 10px;
    position: absolute;
    top: 20px;
    right: 20px;
    height: 28px;
    line-height: 15px;
    border: 1px solid #cee0ed;
}

.infocenter-question-reporting {
    margin-top: 20px;
    display: none;
}

.comment-body .infocenter-question-reporting {
    margin-bottom: 20px;
}

.single-question .infocenter-question-reporting {
    margin-top: 0;
    margin-bottom: 20px;
}

.infocenter-question-reporting textarea {
    width: 100%;
    margin: 20px 0;
    height: 150px;
}

.infocenter-question-reporting h3 {
    margin-bottom: 10px;
    font-size: 14px;
}

.infocenter-question-reporting a {
    margin: 0;
}

.infocenter-question-reporting a:last-child {
    margin-left: 10px;
}

.question-desc {
    margin-bottom: 20px;
    padding-bottom: 30px;
    line-height: 22px;
    font-size: 13px;
    color: #848991;
}

.question-date,
.question-view {
    font-size: 13px;
    color: #777;
}

.question-tags {
    float: right;
    margin-right: 0;
}

.single-question .question-tags {
    float: left;
}

.question-tags a {
    font-size: 12px;
}

.question-tags a:hover {
    color: #2f3239;
}

.question-date,
.question-view {
    float: left;
}

.question-date i,
.question-view i {
    color: #777;
}

.single-question .question-desc {
    color: #2f3239;
}

.loader_2,
.loader_3 {
    background: url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/images/loading.gif) no-repeat center center;
    height: 20px;
    width: 20px;
    margin: 10px auto;
    display: none;
}

.single-question-vote li.loader_3 {
    display: none;
    margin: 0 5px 0;
}

.pagination {
    overflow: hidden;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    float: right;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 30px;
}

.pagination {
    color: #2f3239;
}

.post-next-prev {
    margin: 30px 0;
}

.post-next-prev p {
    margin-bottom: 0;
}

.post-next-prev .prev-post {
    float: left;
}

.post-next-prev .next-post {
    float: right;
}

.post-next-prev .prev-post a {
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
}

.related-posts li {
    margin-bottom: 10px;
}

.related-posts li i {
    margin: 0 5px 5px 0;
    color: #2f3239;
}

.related-posts li:last-child {
    margin-bottom: 50px;
}

.related-posts li a {
    color: #2f3239;
    font-weight: 100;
}

.related-item {
    overflow: hidden;
}

.related-item h3 {
    padding-top: 2px;
    font-size: 14px !important;
    margin-bottom: 0;
    font-weight: 700;
}

#commentlist {
    margin-bottom: 30px;
    padding-bottom: 0;
    border-bottom: 0;
}

.commentlist>li:first-child {
    margin-top: -20px;
}

.comment-body {
    padding: 20px;
}

.commentlist {
    list-style: none;
    margin: 0;
}

.comment {
    margin: 0 -15px;
    background-clip: padding-box;
    background-color: #fff;
    box-shadow: 0 0 8px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02);
    margin-bottom: 50px;
    padding: 20px;
    clear: both;
}

.comment-reply {
    float: right;
    font-size: 13px;
    margin-top: 9px;
}

.comment-reply:hover {
    color: #2f3239 !important;
}

.comment-reply i {
    margin-right: 5px;
}

.commentlist li p {
    margin-bottom: 0;
    color: #848991;
    font-weight: 400;
}

.commentlist li ul {
    list-style: none;
}

.commentlist li .avatar-img {
    float: left;
    display: block;
    overflow: hidden;
    width: 71px;
    height: 71px;
    position: relative;
    margin-right: 10px;
    padding: 2px;
    border: 1px solid #dedede;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 4%;
}

.commentlist li .avatar-img img {
    display: block;
    float: left;
    width: 65px;
    height: 65px;
    overflow: hidden;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 4%;
}

.commentlist li .comment-text {
    overflow: hidden;
    position: relative;
}

.commentlist li .author {
    margin-top: 5px;
    margin-bottom: 10px;
}

.comment-author {
    margin-top: 5px;
    font-size: 14px;
    font-weight: 700;
}

.comment-author a {
    color: #2f3239;
}

.comment-vote {
    float: left;
    margin-top: 9px;
    margin-right: 0;
}

.comment-vote li {
    float: left;
    display: block;
}

.comment .question-vote-result {
    margin-top: 10px;
    margin-right: 20px;
}

.commentlist li .comment-meta {
    float: left;
    margin-top: 4px;
    overflow: hidden;
}

.commentlist li .author span {
    display: block;
    color: #2f3239;
}

.commentlist li .date {
    font-size: 13px;
    margin-top: 5px;
    float: left;
    margin-right: 10px;
    color: #a1a1a1;
}

.commentlist li .date i {
    color: #999;
    margin-right: 5px;
}

#respond {
    width: 100%;
    margin-bottom: 30px;
}

#respond-inputs p {
    width: 32%;
    margin-right: 2%;
    float: left;
    margin-bottom: 10px;
}

#respond-inputs p.last {
    margin: 0;
}

#respond input {
    display: block;
    width: 100%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
}

#respond textarea {
    display: block;
    width: 100%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-submit {
    overflow: hidden;
    margin-top: 10px !important;
    margin-bottom: 0 !important;
}

.form-submit input[type="submit"] {
    font-size: 15px;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}

#respond input#submit {
    float: left;
    font-weight: 400;
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 14px 25px;
    border-radius: 1px;
    background: #222;
    font-family: 'Merriweather', serif;
}

@media only screen and (min-width:606px) {
    #respond input#submit {
        width: 40%;
    }
}

#respond label {
    color: #2f3239;
    display: block;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 5px;
}

#respond label.required span {
    margin-left: 3px;
    color: red;
}

.widget {
    background-color: #fff;
    box-shadow: 0 1px 2px #ccc;
    overflow: hidden;
    margin-bottom: 50px;
    position: relative;
    color: #2f3239;
    padding: 20px;
}

.widget:last-child {
    margin-bottom: 0;
}

.widget h3.widget_title {
    margin: -20px 0 20px;
    font-size: 15px;
    font-weight: 400;
    padding: 20px 0 10px;
    border-bottom: 2px solid #dedede;
    position: relative;
}

.sidebar li {
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid #ecedee;
}

.sidebar li:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.widget a {
    color: #555;
}

.widget ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.widget ul li {
    position: relative;
    font-size: 14px;
    overflow: hidden;
    padding-bottom: 10px;
}

.widget ul li:last-child {
    padding-bottom: 0;
    margin-bottom: 0;
}

.widget_highest_points ul li {
    padding-bottom: 15px;
}

.widget_highest_points li h6 {
    margin: 5px 0;
    font-weight: 700;
}

.widget_highest_points li h6 a:hover {
    color: #2f3239 !important;
}

.widget_highest_points li h6 a {
    color: #191919 !important;
    font-weight: 100;
}

.author-img {
    float: left;
    display: block;
    overflow: hidden;
    width: 71px;
    height: 71px;
    position: relative;
    margin-right: 20px;
    padding: 2px;
    border: 1px solid #dedede;
    -moz-border-radius: 4%;
    -webkit-border-radius: 4%;
    border-radius: 4%;
}

.author-img a:hover {
    padding-left: 0 !important;
}

.questions-div {
    overflow: hidden;
}

.author-img img {
    display: block;
    float: left;
    width: 65px;
    height: 65px;
    overflow: hidden;
    -moz-border-radius: 4%;
    -webkit-border-radius: 4%;
    border-radius: 4%;
}

.widget_highest_points a:before {
    position: absolute;
    width: 65px;
    height: 65px;
    top: 2px;
    z-index: 99;
    display: block;
    font-family: "FontAwesome";
    text-align: center;
    line-height: 65px;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

.widget_highest_points .author-img a:hover:before {
    content: "\f0fe";
    opacity: .9;
    filter: alpha(opacity=90);
}

.tagcloud a {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e2e2e2;
    display: inline-block;
    float: left;
    font-family: "Open Sans", sans-serif;
    font-size: 13px;
    font-weight: 500;
    line-height: 38px;
    margin: 0 10px 8px 0;
    padding: 0 17px;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
    o-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    color: #000 !important;
}

.tagcloud a:hover {
    color: #be161e !important;
}

.widget_comments li h6 {
    overflow: hidden;
}

.ask_error {
    margin-bottom: 10px;
    color: #ff2700;
}

.page-right-sidebar .row>.with-sidebar-container>.col-md-8 {
    float: left;
}

.with-sidebar-container {
    position: relative;
}

.boxedtitle {
    margin-bottom: 30px !important;
    border-bottom: 2px solid #E8E7E7;
}

.boxedtitle h2 {
    color: #474D5D;
    padding-bottom: 10px;
    margin: 0;
    text-transform: capitalize;
}

.no_vote_more {
    color: red;
}

.fileinputs {
    position: relative;
    float: left;
    margin-bottom: 20px;
    width: 82%;
}

#commentform .fileinputs {
    width: 100%;
}

#commentform .fileinputs input[type="file"] {
    height: 43px;
}

.fakefile {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
}

.fakefile button {
    cursor: pointer;
    background-color: #f3f3f3;
    border: 1px solid #dedede;
    padding: 10px;
    position: relative;
    width: 100%;
    text-align: left;
    font-size: 13px !important;
    padding: 12px 15px !important;
    height: 53px;
    font-weight: 700;
}

.fileinputs span {
    padding: 7px 8px;
    font-size: 11px;
    font-style: normal;
    position: absolute;
    top: 7px;
    right: 7px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
}

.fileinputs:hover span {
    background-color: #212121;
}

.fileinputs span i {
    margin-right: 5px;
    color: #2f3239;
}

.advertising {
    text-align: center;
    margin-bottom: 30px;
}

.question-report {
    color: #FFF !important;
}

.button:hover {
    color: #be161e;
}

.button,
.widget_highest_points a:before,
.main-content .boxedtitle h2,
.question-type-main,
.fileinputs:hover span i,
.fileinputs span,
.single-question-vote-up:hover,
.single-question-vote-down:hover,
input[type="submit"],
input[type="submit"]:hover {
    color: #FFF;
}

@media only screen and (min-width:767px) and (max-width:960px) {
    .sidebar {
        margin-top: 30px;
        width: 100%;
    }
}

@media (min-width:768px) and (max-width:991px) {
    .page-right-sidebar .row>.with-sidebar-container>.col-md-8 {
        float: none;
    }

    .sidebar {
        position: static !important;
    }

    .sidebar {
        margin-top: 30px;
        width: 100%;
    }
}

@media (max-width:767px) {
    .page-right-sidebar .row>.with-sidebar-container>.col-md-8 {
        float: none;
    }

    .sidebar {
        position: static !important;
    }
}

@media only screen and (min-width:452px) and (max-width:767px) {
    .page-right-sidebar .row>.with-sidebar-container>.col-md-8 {
        float: none;
    }

    .sidebar {
        position: static !important;
    }

    .sidebar {
        margin-top: 30px !important;
        width: 100%;
    }

    .widget:last-child {
        margin-bottom: 30px;
    }

    .sidebar .widget:last-child {
        margin-bottom: 0;
    }

    .post-next-prev p {
        font-size: 14px;
    }

    #respond-inputs p {
        width: 100%;
        margin-right: 0;
    }

    #respond-inputs p.last {
        margin-bottom: 20px;
    }

    .fileinputs {
        width: 100%;
    }

    .fileinputs {
        margin-top: 5px;
    }

    .question-type-normal .question-type-main {
        left: 121px;
        right: inherit;
    }

    .question-type-normal .question-report {
        left: 213px;
        right: inherit;
    }

    .question-type-normal.question h2 {
        padding-right: 0;
        padding-top: 53px;
    }

    .single-question.question-type-normal .question-type-main {
        left: 20px;
        right: inherit;
    }

    .single-question.question-type-normal .question-report {
        left: 112px;
        right: inherit;
    }

    .question-date,
    .question-view {
        margin-bottom: 10px;
    }

    .question-tags {
        display: block;
        float: none;
        margin-bottom: 10px;
    }
}

@media only screen and (max-width:479px) {
    .page-right-sidebar .row>.with-sidebar-container>.col-md-8 {
        float: none;
    }

    .sidebar {
        position: static !important;
    }

    h2 {
        font-size: 20px;
    }

    h3 {
        font-size: 18px;
    }

    h6 {
        font-size: 12px;
    }

    .sidebar {
        margin-top: 30px !important;
        width: 100%;
    }

    .widget:last-child {
        margin-bottom: 20px;
    }

    .sidebar .widget:last-child {
        margin-bottom: 0;
    }

    .post-next-prev {
        text-align: center;
    }

    .post-next-prev p {
        font-size: 14px;
        float: none !important;
    }

    #respond-inputs p {
        width: 100%;
        margin-right: 0;
    }

    #respond input#submit {
        width: 100%;
    }

    #respond-inputs p.last {
        margin-bottom: 20px;
    }

    .commentlist li .avatar-img {
        float: none;
    }

    .commentlist li .author {
        margin-bottom: 10px;
    }

    .commentlist li .comment-meta {
        float: none;
        margin-bottom: 10px;
    }

    .post-next-prev .prev-post a {
        display: block;
        margin-bottom: 5px;
    }

    .comment-reply,
    .commentlist li .date {
        float: none;
    }

    .commentlist li .date {
        margin-top: 10px;
    }

    .fileinputs {
        width: 100%;
    }

    .question-type-normal .question-type-main {
        left: 121px;
        right: inherit;
    }

    .question-type-normal .question-report {
        left: 121px;
        right: inherit;
        top: 58px;
    }

    .question-type-normal.question h2 {
        padding-right: 0;
        padding-top: 86px;
        margin-top: 0;
    }

    .single-question.question-type-normal .question-type-main {
        left: 20px;
        right: inherit;
    }

    .single-question.question-type-normal .question-report {
        left: 112px;
        right: inherit;
    }

    .single-question.question-type-normal .question-report {
        top: 20px;
    }

    .question h2 {
        margin-top: 121px;
    }

    .question h2,
    .question-inner {
        margin-left: 0;
    }

    .post-next-prev {
        margin-bottom: 0;
    }

    .question-tags {
        display: block;
        float: none;
        width: 100%;
    }

    .question-date,
    .question-view,
    .question-tags {
        width: 100%;
        margin-bottom: 10px !important;
    }

    .single-question.question h2 {
        margin: 38px 20px 10px;
        padding: 0;
    }

    .comment-vote {
        margin-top: 5px;
    }

    .comment .question-vote-result {
        margin-top: 15px;
    }
}

@media only screen and (max-width:605px) {
    #respond input#submit {
        width: 100% !important;
    }
}

::-moz-selection {
    background: #be161e;
}

::selection {
    background: #be161e;
}

.tagcloud a:hover {
    color: #be161e;
}

.button.color,
.widget_highest_points .author-img a:hover:before,
.button.dark_button.color:hover,
.page-content .boxedtitle,
.main-content .boxedtitle,
.question-type-main,
.question-report:hover,
.fileinputs span,
input[type="submit"] {
    background-color: #be161e;
}

p a,
li a,
a:hover,
.widget a:hover,
.question-tags a,
.comment-author a:hover,
.comment-reply:hover,
.related-posts li a:hover,
.related-posts li a:hover i,
.widget h3.widget_title,
.widget_highest_points li h6 a,
.question-tags,
input[type="text"],
textarea,
.main-content .page-content .boxedtitle.page-title h2,
.fakefile button,
.comment-reply {
    color: #be161e;
}

input[type="text"]:focus,
textarea:focus {
    border-color: #be161e;
}

.sidebar h3.widget_title {
    padding: 16px !important;
    font-size: 15px;
    font-weight: 400;
    color: #191919 !important;
    text-transform: capitalize;
    border-left: 2px solid #be161e;
    border-right: 2px solid #be161e;
    margin-left: -20px !important;
    margin-right: -20px !important;
    border-bottom: 1px solid #f3f3f3 !important;
}

.boxedtitle.page-title h2 {
    color: #191919 !important;
    font-size: 20px;
    font-weight: normal !important;
    padding: 13px 18px;
    text-transform: capitalize;
}

#commentlist {
    margin-bottom: 30px;
    padding-bottom: 0;
    border-bottom: 0;
}

#respond {
    float: left;
}

.single-question .question-tags a {
    border-radius: 0 10px 10px 10px;
    font-size: 13px;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    text-transform: lowercase;
    background-color: #CEE0ED;
    color: #000;
    margin-left: 2px;
}


.single-question #respond input#submit {
    width: 100% !important;
}

.question-template-default .single-question .question-type-main {
    display: none;
}

.question-type-main {
    background: #CEE0ED;
    font-size: 16px;
    line-height: 16px;
    font-weight: 700;
}

.question-vote-result {
    font-size: 16px;
    line-height: 16px;
    font-weight: 700;
}

.single-question .report_q {
    float: right;
    font-size: 12px;
    background-color: #000;
    padding: 8px 10px;
    position: absolute;
    top: 0;
    right: -1px;
    height: 32px;
    line-height: 15px;
    border: none;
}

.pagination {
    float: none;
}

.question-desc,
.question-desc p {
    color: #777;
    font-size: 15px;
    line-height: 26px;
    margin-bottom: 15px;
}

.question-desc {
    padding-bottom: 10px;
}

.question-inner {
    margin-bottom: 30px;
}

.single-question .question h2 {
    margin: 0 0 2px 165px;
}

.question h2 {
    margin: 0 0 30px 165px;
}

@media (min-width:768px) {
    .question-inner {
        margin-left: 165px;
    }

    .single-question .question h2 {
        margin: 0 0 2px 165px;
    }

    .question h2 {
        margin: 0 0 30px 165px;
    }
}

@media (max-width:767px) {
    .question-inner {
        margin-left: 0;
    }

    .single-question .question h2 {
        margin: 0 0 2px 0;
    }

    .question h2 {
        margin: 0 0 30px 0;
    }

    .commentlist li .avatar-img {
        display: none;
    }
}

.commentlist li .avatar-img {
    margin-right: 40px;
    border: 0 solid;
}

.commentlist li .author,
.comment-author {
    margin-top: 0;
}

.commentlist li .author,
.comment-text .text {
    margin-left: 30px;
}

.comment-text .text a {
    color: #999;
    font-size: 15px;
    line-height: 26px;
}

.comment-text .text a:hover {
    color: #BE161E;
}

.commentlist li .comment-text {
    border-left: 1px solid #e5eaef;
}

@media only screen and (max-width:767px) {
    .question-type-normal .question-type-main {
        left: auto;
        right: 0;
    }

    .question-type-normal .question-report {
        left: auto;
        right: 0;
        top: 65px;
    }

    .question-vote-result {
        font-size: 12px;
    }

    .comment .question-vote-result {
        margin-top: 4px;
    }

    .commentlist li .comment-meta {
        float: left;
    }

    .comment-reply i {
        display: none;
    }
}

table td {
    padding-left: 10px;
}

.infocenter-question-reporting a.cancel:hover {
    color: #fff !important;
}

.single-question .question-inner {
    padding: 0;
}

.single-question.question h2 {
    margin-left: 0;
}

.comment-respond.page-content,
#commentlist {
    padding: 0;
}

#respond .boxedtitle.page-title {
    padding-top: 0 !important;
}

.single-question #commentlist {
    padding: 0;
}

@media (max-width:767px) {

    .question-report.report_q,
    .question-type-main {
        display: none !important;
    }

    .question-type-normal.question h2 {
        padding-top: 0;
    }
}

@media only screen and (max-width:479px) {
    .single-question.question h2 {
        margin-top: 0;
    }
}

.single-question .question-date,
.single-question .question-view {
    margin-bottom: 20px;
}

.single-question .comment-body {
    padding: 0;
}

.single-question .comment-vote {
    float: right;
    margin-top: 10px;
}

.single-question .question-vote-result {
    float: right;
    margin-top: 7px;
    font-size: 14px;
    font-weight: 700;
}

.single-question .single-question-vote-up,
.single-question .single-question-vote-down {
    background-color: #fff;
    color: #666;
    -webkit-transition: all 0.6s linear;
    transition: all 0.6s linear;
    float: right;
    font-size: 13px;
    line-height: 1.5;
    text-align: center;
    margin-right: 5px;
    border: 1px solid #ccc;
    border-radius: 2px;
    padding: 3px 10px;
    width: auto;
    height: auto;
}

.single-question .single-question-vote-up:hover,
.single-question .single-question-vote-down:hover {
    background-color: #000;
}

.fnone {
    float: none !important;
}

.single-question .commentlist li .comment-meta {
    margin-top: 0;
}

.single-question .comment .question-vote-result {
    margin-top: 0;
    margin-right: 0;
}

.single-question .commentlist li .author span {
    display: inline-block;
    color: #a1a1a1;
}

.single-question .commentlist li .date {
    font-weight: 500;
}

.single-question .comment-reply {
    margin-top: 0;
}

.main-content p {
    font-size: 14px;
    line-height: 1.6em;
}

.comment-text .text .single-question-vote a {
    color: #666;
    font-size: 13px;
    line-height: 1.5;
}

.comment-text .text .single-question-vote a:hover {
    color: #fff;
}

.single-question .comment-text .no_vote_more {
    padding-left: 30px;
    padding-top: 10px;
}

.single-question .main-content .question-desc p {
    color: #777;
    font-size: 15px;
    line-height: 26px;
    margin-bottom: 15px;
}

.single-question .question-desc {
    padding-bottom: 1px;
}

.commentlist {
    color: #777 !important;
}

.single-question .commentlist>li:first-child {
    margin-top: 0;
}

.single-question .comment {
    margin: 0 0 50px 0;
    border-left: 2px solid #e5eaef;
    border-right: 2px solid #e5eaef;
}

article.single-question {
    margin-bottom: 50px;
}

.single-question .main-content .comment-respond.page-content .boxedtitle.page-title {
    padding-top: 0;
    padding-bottom: 0;
    margin-top: 0;
    border-top: 0 solid;
}

.single-question .main-content .comment-respond.page-content .boxedtitle.page-title h2 {
    border-bottom: 0 solid;
    padding-top: 0;
    margin-bottom: 0;
}

.single-question #commentlist {
    margin-bottom: 10px;
}

.comment-author a {
    text-transform: capitalize;
}

.single-question-vote-up,
.single-question-vote-down {
    float: left;
}

.sidebar .icon-angle-right {
    display: none;
}

.sidebar .widget ul li a,
.sidebar .widget .widget_highest_points.widget_comments ul li a {
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    font-weight: 500;
    text-transform: capitalize;
    color: #191919;
}

.sidebar .widget ul li a:hover,
.sidebar .widget .widget_highest_points.widget_comments ul li a:hover {
    color: #BE161E;
}

.sidebar .widget .widget_highest_points ul li a {
    font-family: 'Merriweather', serif;
}

.sidebar .author-img {
    padding: 5px 0;
    border: 0 solid;
}

.widget_highest_points a:before {
    top: 7px;
    background: transparent;
}

.widget_highest_points .author-img a:hover:before {
    background: transparent;
}

#respond .boxedtitle.page-title {
    padding-bottom: 15px !important;
}

.questions-widget .related-posts li a:before {
    content: "\f0f6";
    display: inline-block;
    font-family: "FontAwesome";
    font-weight: 400;
    font-size: 16px;
    margin: 0 10px 0 0;
}

.sidebar .widget ul li a,
.sidebar .widget .widget_highest_points.widget_comments ul li a {
    line-height: 18px !important;
    font-size: 13px !important;
}

@media only screen and (min-width:606px) {
    #respond input#submit {
        width: 60%;
    }
}

.clearfix {
    clear: both;
}

.related-posts li a {
    word-break: break-all;
}

article,
aside {
    display: block;
}

a {
    background-color: transparent;
}

a:active,
a:hover {
    outline: 0;
}

strong {
    font-weight: 700;
}

img {
    border: 0;
}

pre {
    overflow: auto;
}

code,
pre {
    font-family: monospace, monospace;
    font-size: 1em;
}

button,
input,
textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}

button {
    overflow: visible;
}

button {
    text-transform: none;
}

button,
input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
    padding: 0;
    border: 0;
}

input {
    line-height: normal;
}

textarea {
    overflow: auto;
}

table {
    border-spacing: 0;
    border-collapse: collapse;
}

td {
    padding: 0;
}

@media print {

    *,
    *:before,
    *:after {
        color: #000 !important;
        text-shadow: none !important;
        background: transparent !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: " ("attr(href) ")";
    }

    a[href^="#"]:after,
    a[href^="javascript:"]:after {
        content: "";
    }

    pre {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

input,
button,
textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

a {
    color: #337ab7;
    text-decoration: none;
}

a:hover,
a:focus {
    color: #23527c;
    text-decoration: underline;
}

a:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}

img {
    vertical-align: middle;
}

h2,
h3,
h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}

h2,
h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}

h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}

h2 {
    font-size: 30px;
}

h3 {
    font-size: 24px;
}

h6 {
    font-size: 12px;
}

p {
    margin: 0 0 10px;
}

.small {
    font-size: 85%;
}

ul,
ol {
    margin-top: 0;
    margin-bottom: 10px;
}

ol ul {
    margin-bottom: 0;
}

code,
pre {
    font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}

code {
    padding: 2px 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 4px;
}

pre {
    display: block;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width:768px) {
    .container {
        width: 750px;
    }
}

@media (min-width:992px) {
    .container {
        width: 970px;
    }
}

@media (min-width:1200px) {
    .container {
        width: 1170px;
    }
}

.row {
    margin-right: -15px;
    margin-left: -15px;
}

.col-md-4,
.col-md-8 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width:992px) {

    .col-md-4,
    .col-md-8 {
        float: left;
    }

    .col-md-8 {
        width: 66.66666667%;
    }

    .col-md-4 {
        width: 33.33333333%;
    }
}

table {
    background-color: transparent;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}

input[type="file"] {
    display: block;
}

input[type="file"]:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}

.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}

.clearfix:before,
.clearfix:after,
.container:before,
.container:after,
.row:before,
.row:after {
    display: table;
    content: " ";
}

.clearfix:after,
.container:after,
.row:after {
    clear: both;
}

a {
    color: #be161e;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -ms-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
    cursor: pointer;
}

a:hover,
a:focus {
    text-decoration: none;
    o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    color: #be161e;
}

img {
    max-width: 100%;
}

a,
div,
ul,
li {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-tap-highlight-color: transparent;
    -moz-outline-: none;
}

ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

a:focus {
    outline: none;
    text-decoration: none;
}

.pagination {
    border-radius: 0;
    margin: 0;
}

h2,
h3,
h6 {
    position: relative;
    font-family: 'Merriweather', serif;
    font-weight: 400;
    margin: 0;
    background: none;
    line-height: 1.6em;
}

h2 {
    font-size: 24px;
}

h3 {
    font-size: 20px;
}

h6 {
    font-size: 12px;
}

p {
    line-height: 1.6em;
    font-size: 14px;
}

.page-title {
    border-bottom: 1px solid #dedde1;
    border-top: 1px solid #dedde1;
    display: block;
    padding: 35px 0;
    position: relative;
}

.timeline-content {
    float: left;
    padding: 15px 20px;
    width: 100%;
}

.thread-reply h2 {
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
    margin-bottom: 15px;
}

.syntaxhighlighter .line {
    white-space: pre-wrap;
}

label {
    color: #191919;
}

.syntaxhighlighter div,
.syntaxhighlighter code,
.syntaxhighlighter table,
.syntaxhighlighter table td,
.syntaxhighlighter table tr,
.syntaxhighlighter table tbody {
    -moz-border-radius: 0 0 0 0 !important;
    -webkit-border-radius: 0 0 0 0 !important;
    background: none !important;
    border: 0 !important;
    bottom: auto !important;
    float: none !important;
    height: auto !important;
    left: auto !important;
    line-height: 1.1em !important;
    margin: 0 !important;
    outline: 0 !important;
    overflow: visible !important;
    padding: 0 !important;
    position: static !important;
    right: auto !important;
    text-align: left !important;
    top: auto !important;
    vertical-align: baseline !important;
    width: auto !important;
    box-sizing: content-box !important;
    font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important;
    font-weight: normal !important;
    font-style: normal !important;
    font-size: 1em !important;
    min-height: inherit !important;
    min-height: auto !important;
}

.syntaxhighlighter {
    width: 100% !important;
    margin: 2em 0 2em 0 !important;
    position: relative !important;
    overflow: auto !important;
    font-size: 1em !important;
    padding: 1px !important;
}

.syntaxhighlighter table {
    width: 100% !important;
}

.syntaxhighlighter table td.code {
    width: 100% !important;
}

.syntaxhighlighter table td.code .container {
    position: relative !important;
}

.syntaxhighlighter table td.gutter .line {
    text-align: right !important;
    padding: 0 .5em 0 1em !important;
}

.syntaxhighlighter table td.code .line {
    padding: 0 1em !important;
}

.syntaxhighlighter {
    background-color: white !important;
}

.syntaxhighlighter .line.alt1 {
    background-color: white !important;
}

.syntaxhighlighter .line.alt2 {
    background-color: white !important;
}

.syntaxhighlighter .gutter {
    color: #afafaf !important;
}

.syntaxhighlighter .gutter .line {
    border-right: 3px solid #6ce26c !important;
}

.syntaxhighlighter .plain {
    color: black !important;
}

.syntaxhighlighter .string {
    color: blue !important;
}

.syntaxhighlighter .keyword {
    color: #006699 !important;
}

.syntaxhighlighter .keyword {
    font-weight: bold !important;
}

.icon-flag {
    font-family: 'et-line';
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    display: inline-block;
}

.icon-flag:before {
    content: "\e024";
}

/*! CSS Used from: Embedded */
.syntaxhighlighter {
    width: 100% !important;
    margin: 1em 0 1em 0 !important;
    position: relative !important;
    overflow: auto !important;
    font-size: 1em !important;
    padding: 1px !important;
    background-color: white !important;
}

code {
    background: none !important;
    line-height: 1.1em !important;
    padding: 0 !important;
    width: auto !important;
    font-family: \"Consolas\", \"Bitstream Vera Sans Mono\", \"Courier New\", Courier, monospace !important;
    font-size: 1em !important;
    min-height: auto !important;
}

/*! CSS Used fontfaces */
@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hmIqOjjg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hvIqOjjg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hnIqOjjg.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hoIqOjjg.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hkIqOjjg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hlIqOjjg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hrIqM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Udc1UAw.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0ddc1UAw.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Vdc1UAw.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0adc1UAw.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Wdc1UAw.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Xdc1UAw.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Zdc0.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhmIqOjjg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhvIqOjjg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhnIqOjjg.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhoIqOjjg.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhkIqOjjg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhlIqOjjg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhrIqM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Droid Arabic Kufi';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Droid Arabic Kufi'), local('DroidArabicKufi'), url(https://fonts.gstatic.com/s/droidarabickufi/v18/Jqz55SSYU-eQEShJr-lgfq7iVlT4aJ9Dayoxdg.woff2) format('woff2');
    unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC;
}

@font-face {
    font-family: 'Droid Arabic Kufi';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Droid Arabic Kufi Bold'), local('DroidArabicKufi-Bold'), url(https://fonts.gstatic.com/s/droidarabickufi/v18/Jqz85SSYU-eQEShJr-lgfq7iVlT4aJf9Tj8LVyx2Tg.woff2) format('woff2');
    unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff1jvzRPA.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff8jvzRPA.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff3jvzRPA.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff2jvzRPA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff4jvw.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZDf-LHrw.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZKf-LHrw.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZBf-LHrw.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZAf-LHrw.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZOf-I.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf1jvzRPA.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf8jvzRPA.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf3jvzRPA.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf2jvzRPA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf4jvw.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZVcf6lvg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZXMf6lvg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZV8f6lvg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZVsf6lvg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZWMf6.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-cSZMZ-Y.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-eCZMZ-Y.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-cyZMZ-Y.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-ciZMZ-Y.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-fCZM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZVcf6lvg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZXMf6lvg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZV8f6lvg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZVsf6lvg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZWMf6.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'FontAwesome';
    src: url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.eot?v=3.1.0);
    src: url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.eot#iefix&v=3.1.0') format('embedded-opentype'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.woff?v=3.1.0) format('woff'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.ttf?v=3.1.0) format('truetype'), url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.svg#fontawesomeregular?v=3.1.0') format('svg');
    font-weight: 400;
    font-style: normal;
}

@font-face {
    font-family: 'FontAwesome';
    src: url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.eot?v=4.7.0);
    src: url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.eot#iefix&v=4.7.0') format('embedded-opentype'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'), url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
    font-weight: 400;
    font-style: normal;
}

@font-face {
    font-family: 'et-line';
    src: url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/fonts/et-line.eot);
    src: url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/fonts/et-line.eot#iefix') format('embedded-opentype'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/fonts/et-line.woff2) format('woff2'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/fonts/et-line.woff) format('woff'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/fonts/et-line.ttf) format('truetype'), url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/fonts/et-line.svg#et-line') format('svg');
    font-weight: 400;
    font-style: normal;
}

/*! CSS Used from: https://fluentthemes.com/wp/knowledge/wp-content/cache/min/1/2bb47372f22a699473c6f5552b365de0.css */
div,
span,
h2,
h3,
a,
img,
i,
article {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

article {
    display: block;
}

* {
    outline: none;
}

::-moz-selection {
    color: #fff;
    text-shadow: none;
}

::selection {
    color: #fff;
    text-shadow: none;
}

.button,
textarea {
    font-family: "Open Sans", "Droid Arabic Kufi", Arial, sans-serif;
}

.button {
    display: inline-block;
    margin: 5px 5px 5px 0;
    border: none;
    cursor: pointer;
    text-shadow: none !important;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    font-size: 15px;
    font-weight: 700;
}

.button.small {
    padding: 7px 15px;
}

textarea {
    padding: 12px 12px;
    outline: none;
    font-size: 13px;
    font-weight: 600;
    margin: 0;
    width: 200px;
    max-width: 100%;
    display: block;
    margin-bottom: 20px;
    color: #2f3239;
    border: 1px solid #dedede;
    -moz-transition: border .25s linear, color .25s linear, background-color .25s linear;
    -webkit-transition: border .25s linear, color .25s linear, background-color .25s linear;
    -o-transition: border .25s linear, color .25s linear, background-color .25s linear;
    transition: border .25s linear, color .25s linear, background-color .25s linear;
    background: #fff;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
}

textarea {
    min-height: 60px;
}

.button.small {
    font-size: 14px;
}

.button.dark_button.color,
.button.color:hover {
    background: #2f3239;
}

a {
    color: #2f3239;
}

h2,
h3 {
    font-family: "Merriweather", "Open Sans", "Droid Arabic Kufi", Arial, sans-serif;
    font-weight: 700;
    text-transform: none;
    margin-top: 0;
    margin-bottom: 18px;
}

h2 a {
    font-weight: inherit;
}

h2 {
    font-size: 24px;
    line-height: 28px;
}

h3 {
    font-size: 18px;
    line-height: 24px;
}

a,
.button {
    -webkit-transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
    -moz-transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
    -ms-transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
    -o-transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
    transition: color 0.1s linear, border 0.1s linear, opacity 0.1s linear, background-color 0.1s linear;
}

a {
    text-decoration: none;
}

img {
    max-width: 100%;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    vertical-align: middle;
    height: auto;
}

[class^="icon-"] {
    font-family: FontAwesome;
    font-weight: 400;
    font-style: normal;
    text-decoration: inherit;
    -webkit-font-smoothing: antialiased;
    *margin-right: .3em;
}

[class^="icon-"]:before {
    text-decoration: inherit;
    display: inline-block;
    speak: none;
}

[class^="icon-"] {
    display: inline-block;
    width: auto;
    height: auto;
    line-height: normal;
    vertical-align: baseline;
    background-image: none;
    background-position: 0 0;
    background-repeat: repeat;
    margin-top: 0;
}

.icon-time:before {
    content: "\f017";
}

.icon-eye-open:before {
    content: "\f06e";
}

::-webkit-input-placeholder {
    color: #2f3239;
}

:-moz-placeholder {
    color: #2f3239;
    opacity: 1;
}

::-moz-placeholder {
    color: #2f3239;
    opacity: 1;
}

:-ms-input-placeholder {
    color: #2f3239;
}

.question {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin-bottom: 30px;
    padding: 20px;
    border-bottom: 1px solid #dedede;
    background: #FFF;
    position: relative;
}

.tab-inner .question:first-child {
    margin-top: 0;
}

.question-inner {
    position: relative;
    margin-left: 101px;
}

.question-author {
    position: absolute;
    top: 20px;
    left: 20px;
    float: left;
    text-align: center;
    width: 71px;
    overflow: hidden;
}

.question-author img {
    width: 83px;
    height: 83px;
    overflow: hidden;
    -moz-border-radius: 4%;
    -webkit-border-radius: 4%;
    border-radius: 4%;
}

.question-author-img {
    position: relative;
    display: block;
    padding: 2px;
    border: 1px solid #dedede;
    -moz-border-radius: 4%;
    -webkit-border-radius: 4%;
    border-radius: 4%;
    height: 71px;
}

.question-author-img span {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 99;
    display: block;
    line-height: 5px;
    overflow: hidden;
    -moz-transition: all 0.2s linear;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    -ms-transition: all 0.2s linear;
    transition: all 0.2s linear;
}

.question-author-img:hover span:before {
    content: "\f0fe";
    font-family: "FontAwesome";
}

.question-type-main {
    font-size: 12px;
    margin: 0;
    display: inline-block;
    padding: 8px 10px;
    position: absolute;
    top: 0;
    right: 67px;
    height: 32px;
    line-height: 15px;
}

.question-type-main.question-statistic {
    top: 20px;
}

.question h2 {
    margin: 0 0 30px 101px;
    color: #474D5D;
    overflow: hidden;
    font-size: 22px;
    font-weight: 700;
    padding-right: 161px;
}

.question h2 a {
    color: #535d56;
    font-size: 17px;
    font-weight: 600;
    line-height: 24px;
    text-decoration: none;
    transition: all 1s ease 0s;
}

.single-question-vote-result {
    float: left;
    font-size: 13px;
    color: #2f3239;
}

.single-question-vote-result {
    float: right;
}

.question-date,
.question-view,
.question-tags {
    margin: 0 20px 5px 0;
    float: left;
    display: block;
    text-transform: uppercase;
}

.question-view {
    margin-right: 0;
}

.question-date i,
.question-view i {
    margin-right: 5px;
}

.question-tags {
    margin-bottom: 0;
}

.question-tags {
    text-transform: capitalize;
    font-size: 12px;
    display: inline-block;
    float: left;
}

.question-report {
    float: right;
    font-size: 12px;
    background-color: #fff;
    padding: 6px 10px;
    position: absolute;
    top: 20px;
    right: 20px;
    height: 28px;
    line-height: 15px;
    border: 1px solid #cee0ed;
}

.infocenter-question-reporting {
    margin-top: 20px;
    display: none;
}

.infocenter-question-reporting textarea {
    width: 100%;
    margin: 20px 0;
    height: 150px;
}

.infocenter-question-reporting h3 {
    margin-bottom: 10px;
    font-size: 14px;
}

.infocenter-question-reporting a {
    margin: 0;
}

.infocenter-question-reporting a:last-child {
    margin-left: 10px;
}

.question-desc {
    margin-bottom: 20px;
    padding-bottom: 30px;
    line-height: 22px;
    font-size: 13px;
    color: #848991;
}

.question-date,
.question-view {
    font-size: 13px;
    color: #777;
}

.question-tags {
    float: right;
    margin-right: 0;
}

.question-tags a {
    font-size: 12px;
}

.question-tags a:hover {
    color: #2f3239;
}

.question-date,
.question-view {
    float: left;
}

.question-date i,
.question-view i {
    color: #777;
}

.loader_3 {
    background: url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/images/loading.gif) no-repeat center center;
    height: 20px;
    width: 20px;
    margin: 10px auto;
    display: none;
}

.question-report {
    color: #FFF !important;
}

.button:hover {
    color: #be161e;
}

.button,
.question-author-img:hover span:before,
.question-type-main {
    color: #FFF;
}

@media (min-width:768px) {
    .question-author {
        border-right: 2px solid #adadad;
        width: 90px;
        height: 50%;
        padding-right: 10px;
    }
}

@media only screen and (min-width:452px) and (max-width:767px) {
    .question-type-normal .question-type-main {
        left: 121px;
        right: inherit;
    }

    .question-type-normal .question-report {
        left: 213px;
        right: inherit;
    }

    .question-type-normal.question h2 {
        padding-right: 0;
        padding-top: 53px;
    }

    .question-date,
    .question-view {
        margin-bottom: 10px;
    }

    .question-tags {
        display: block;
        float: none;
        margin-bottom: 10px;
    }
}

@media only screen and (max-width:479px) {
    h2 {
        font-size: 20px;
    }

    h3 {
        font-size: 18px;
    }

    .question-type-normal .question-type-main {
        left: 121px;
        right: inherit;
    }

    .question-type-normal .question-report {
        left: 121px;
        right: inherit;
        top: 58px;
    }

    .question-type-normal.question h2 {
        padding-right: 0;
        padding-top: 86px;
        margin-top: 0;
    }

    .question h2 {
        margin-top: 121px;
    }

    .question h2,
    .question-inner {
        margin-left: 0;
    }

    .question-author {
        top: 20px;
        left: 20px;
    }

    .question-tags {
        display: block;
        float: none;
        width: 100%;
    }

    .question-date,
    .question-view,
    .question-tags {
        width: 100%;
        margin-bottom: 10px !important;
    }
}

::-moz-selection {
    background: #be161e;
}

::selection {
    background: #be161e;
}

.button.color,
.question-author-img:hover span,
.button.dark_button.color:hover,
.question-type-main,
.question-report:hover {
    background-color: #be161e;
}

a:hover,
.question h2 a:hover,
.question-tags a,
.question-tags,
textarea {
    color: #be161e;
}

textarea:focus {
    border-color: #be161e;
}

.q-meta {
    margin-top: -23px;
    padding-bottom: 40px;
}


.question-type-main {
    background: #CEE0ED;
    font-size: 16px;
    line-height: 16px;
    font-weight: 700;
}

.single-question-vote-result {
    font-size: 16px;
    line-height: 16px;
    font-weight: 700;
}

span.question-type-main.question-statistic {
    padding: 11px 16px;
    height: 40px;
}

span.question-report.question-statistic {
    padding: 11px 16px;
    height: 40px;
    background: #fff;
}

.question-desc {
    color: #777;
    font-size: 15px;
    line-height: 26px;
    margin-bottom: 15px;
}

.question-desc {
    padding-bottom: 10px;
}

.question-inner {
    margin-bottom: 30px;
}

.question-author-img {
    border: 0 solid;
    border-radius: 0;
}

.question-author {
    top: 30px;
}

.question h2 {
    margin: 0 0 30px 165px;
}

@media (min-width:768px) {
    .question-inner {
        margin-left: 165px;
    }

    .question h2 {
        margin: 0 0 30px 165px;
    }

    .question-author {
        width: 140px;
        padding-right: 50px;
    }
}

@media (max-width:767px) {
    .question-inner {
        margin-left: 0;
    }

    .question h2 {
        margin: 0 0 30px 0;
    }

    .question-author img {
        display: none;
    }
}

.question-author-img span {
    top: 45%;
    line-height: 12px;
}

.question-author-img:hover span {
    background-color: transparent !important;
}

.question-author img {
    width: 83px;
    height: 83px;
}

@media only screen and (max-width:767px) {
    .question-type-normal .question-type-main {
        left: auto;
        right: 0;
    }

    .question-type-normal .question-report {
        left: auto;
        right: 0;
        top: 65px;
    }

    .single-question-vote-result {
        font-size: 12px;
    }

    span.question-report.question-statistic {
        padding: 11px 15px;
    }
}

.infocenter-question-reporting a.cancel:hover {
    color: #fff !important;
}

@media (max-width:767px) {
    .question-type-main {
        display: none !important;
    }

    .question-type-normal.question h2 {
        padding-top: 0;
    }
}

.single-question-vote-result {
    float: left;
}

.clearfix {
    clear: both;
}

article {
    display: block;
}

a {
    background-color: transparent;
}

a:active,
a:hover {
    outline: 0;
}

img {
    border: 0;
}

textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}

textarea {
    overflow: auto;
}

@media print {

    *,
    *:before,
    *:after {
        color: #000 !important;
        text-shadow: none !important;
        background: transparent !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: " ("attr(href) ")";
    }

    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

a {
    color: #337ab7;
    text-decoration: none;
}

a:hover,
a:focus {
    color: #23527c;
    text-decoration: underline;
}

a:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}

img {
    vertical-align: middle;
}

h2,
h3 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}

h2,
h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}

h2 {
    font-size: 30px;
}

h3 {
    font-size: 24px;
}

.small {
    font-size: 85%;
}

.clearfix:before,
.clearfix:after {
    display: table;
    content: " ";
}

.clearfix:after {
    clear: both;
}

a {
    color: #be161e;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -ms-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
    cursor: pointer;
}

a:hover,
a:focus {
    text-decoration: none;
    o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    color: #be161e;
}

img {
    max-width: 100%;
}

a,
div {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-tap-highlight-color: transparent;
    -moz-outline-: none;
}

a:focus {
    outline: none;
    text-decoration: none;
}

h2,
h3 {
    position: relative;
    font-family: 'Merriweather', serif;
    font-weight: 400;
    margin: 0;
    background: none;
    line-height: 1.6em;
}

h2 {
    font-size: 24px;
}

h3 {
    font-size: 20px;
}

/*! CSS Used fontfaces */
@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hmIqOjjg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hvIqOjjg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hnIqOjjg.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hoIqOjjg.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hkIqOjjg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hlIqOjjg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hrIqM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Udc1UAw.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0ddc1UAw.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Vdc1UAw.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0adc1UAw.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Wdc1UAw.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Xdc1UAw.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Zdc0.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhmIqOjjg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhvIqOjjg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhnIqOjjg.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhoIqOjjg.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhkIqOjjg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhlIqOjjg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: italic;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhrIqM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Droid Arabic Kufi';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Droid Arabic Kufi'), local('DroidArabicKufi'), url(https://fonts.gstatic.com/s/droidarabickufi/v18/Jqz55SSYU-eQEShJr-lgfq7iVlT4aJ9Dayoxdg.woff2) format('woff2');
    unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC;
}

@font-face {
    font-family: 'Droid Arabic Kufi';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Droid Arabic Kufi Bold'), local('DroidArabicKufi-Bold'), url(https://fonts.gstatic.com/s/droidarabickufi/v18/Jqz85SSYU-eQEShJr-lgfq7iVlT4aJf9Tj8LVyx2Tg.woff2) format('woff2');
    unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff1jvzRPA.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff8jvzRPA.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff3jvzRPA.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff2jvzRPA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light Italic'), local('Merriweather-LightItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXff4jvw.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZDf-LHrw.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZKf-LHrw.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZBf-LHrw.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZAf-LHrw.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Italic'), local('Merriweather-Italic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eRZOf-I.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf1jvzRPA.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf8jvzRPA.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf3jvzRPA.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf2jvzRPA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold Italic'), local('Merriweather-BoldItalic'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf4jvw.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZVcf6lvg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZXMf6lvg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZV8f6lvg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZVsf6lvg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Merriweather Light'), local('Merriweather-Light'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZWMf6.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-cSZMZ-Y.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-eCZMZ-Y.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-cyZMZ-Y.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-ciZMZ-Y.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Merriweather Regular'), local('Merriweather-Regular'), url(https://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5-fCZM.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZVcf6lvg.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZXMf6lvg.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZV8f6lvg.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZVsf6lvg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

@font-face {
    font-family: 'Merriweather';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Merriweather Bold'), local('Merriweather-Bold'), url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNZWMf6.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
    font-family: 'FontAwesome';
    src: url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.eot?v=3.1.0);
    src: url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.eot#iefix&v=3.1.0') format('embedded-opentype'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.woff?v=3.1.0) format('woff'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.ttf?v=3.1.0) format('truetype'), url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome-old/font/fontawesome-webfont.svg#fontawesomeregular?v=3.1.0') format('svg');
    font-weight: 400;
    font-style: normal;
}

@font-face {
    font-family: 'FontAwesome';
    src: url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.eot?v=4.7.0);
    src: url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.eot#iefix&v=4.7.0') format('embedded-opentype'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'), url(https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'), url('https://fluentthemes.com/wp/knowledge/wp-content/themes/infocenter/css/font-awesome/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
    font-weight: 400;
    font-style: normal;
}
.question-tags a {
    border-radius: 0 10px 10px 10px;
    font-size: 13px;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    text-transform: lowercase;
    background-color: #4caf50;
    color: #f9f9f9;
    margin-left: 2px;

}
.shadow {
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
  -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
  box-shadow:         3px 3px 5px 6px #ccc;  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
}
.center{
    text-align: center;
    margin-top: 3rem;
    font-size: 10;
}
</style>
<div>
    <div class="container">
        <div class="center">
            <h1>Forum</h1>
        </div>
            
        
        <div class="row">
            <div class="col-lg-12">
                <div id="show_questions">

                </div>
            </div>
        </div>
        
    </div>
</div>
<script>
$.ajax({
    url: "{{ route('getAllQuestions') }}",
    method: "GET",
    dataType: "json",
    success: function(data) 
    {
        console.log(data);
        $('#show_questions').html(data);

    }
});
</script>
@endsection