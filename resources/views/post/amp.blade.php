<!doctype html>
<html amp lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="amp-experiments-opt-in" content="experiment-a,experiment-b">

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    <script async custom-element="amp-instagram" src="https://cdn.ampproject.org/v0/amp-instagram-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>
    <script async custom-element="amp-facebook" src="https://cdn.ampproject.org/v0/amp-facebook-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-next-page" src="https://cdn.ampproject.org/v0/amp-next-page-1.0.js"></script>

    <title>{{ $_meta['title'] }}</title>
    <link rel="canonical" href="{{ $_meta['canonical'] }}">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <style amp-boilerplate>body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }</style>
    <noscript>
        <style amp-boilerplate>body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }</style>
    </noscript>
    <style amp-custom>
        * {
            font-family: Helvetica, Arial;
        }

        amp-img,
        amp-video {
            margin-top: 1em;
            margin-bottom: 1em;
        }

        body {
            margin: 0;
        }

        a {
            color: #055192;
        }

        .article_heading {
            font-family: Arial, sans-serif;
            font-weight: 700;
            font-size: 24px;
            line-height: 1.25;
            margin: 0 0 15px;
            overflow-wrap: break-word;
        }

        .headerbar {
            height: 50px;
            position: relative;
            z-index: 999;
            top: 0;
            width: 100%;
            display: flex;
            align-items: center;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(270deg, #2951ed 0%, #4575ee 100%);
        }

        .site-name {
            flex: 1;
            padding-left: 5px;
        }

        .article_content {
            padding: 0 20px;
        }

        .article_content blockquote {
            border-left: 3px solid #3864EE;
            font-style: italic;
            margin-left: 0;
            padding: 0 0 0 15px;
        }

        .sharing {
            padding: 0 20px;
        }

        .sharing amp-social-share {
            width: 40px;
            height: 40px;
        }

        amp-social-share[type="vk"] {
            background-color: #5b88bd;
            background-image: url('data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDQuMzYgMzA0LjM2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDQuMzYgMzA0LjM2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGcgaWQ9IlhNTElEXzFfIj4KCTxwYXRoIGlkPSJYTUxJRF84MDdfIiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7IiBkPSJNMjYxLjk0NSwxNzUuNTc2YzEwLjA5Niw5Ljg1NywyMC43NTIsMTkuMTMxLDI5LjgwNywyOS45ODIgICBjNCw0LjgyMiw3Ljc4Nyw5Ljc5OCwxMC42ODQsMTUuMzk0YzQuMTA1LDcuOTU1LDAuMzg3LDE2LjcwOS02Ljc0NiwxNy4xODRsLTQ0LjM0LTAuMDJjLTExLjQzNiwwLjk0OS0yMC41NTktMy42NTUtMjguMjMtMTEuNDc0ICAgYy02LjEzOS02LjI1My0xMS44MjQtMTIuOTA4LTE3LjcyNy0xOS4zNzJjLTIuNDItMi42NDItNC45NTMtNS4xMjgtNy45NzktNy4wOTNjLTYuMDUzLTMuOTI5LTExLjMwNy0yLjcyNi0xNC43NjYsMy41ODcgICBjLTMuNTIzLDYuNDIxLTQuMzIyLDEzLjUzMS00LjY2OCwyMC42ODdjLTAuNDc1LDEwLjQ0MS0zLjYzMSwxMy4xODYtMTQuMTE5LDEzLjY2NGMtMjIuNDE0LDEuMDU3LTQzLjY4Ni0yLjMzNC02My40NDctMTMuNjQxICAgYy0xNy40MjItOS45NjgtMzAuOTMyLTI0LjA0LTQyLjY5MS0zOS45NzFDMzQuODI4LDE1My40ODIsMTcuMjk1LDExOS4zOTUsMS41MzcsODQuMzUzQy0yLjAxLDc2LjQ1OCwwLjU4NCw3Mi4yMiw5LjI5NSw3Mi4wNyAgIGMxNC40NjUtMC4yODEsMjguOTI4LTAuMjYxLDQzLjQxLTAuMDJjNS44NzksMC4wODYsOS43NzEsMy40NTgsMTIuMDQxLDkuMDEyYzcuODI2LDE5LjI0MywxNy40MDIsMzcuNTUxLDI5LjQyMiw1NC41MjEgICBjMy4yMDEsNC41MTgsNi40NjUsOS4wMzYsMTEuMTEzLDEyLjIxNmM1LjE0MiwzLjUyMSw5LjA1NywyLjM1NCwxMS40NzYtMy4zNzRjMS41MzUtMy42MzIsMi4yMDctNy41NDQsMi41NTMtMTEuNDM0ICAgYzEuMTQ2LTEzLjM4MywxLjI5Ny0yNi43NDMtMC43MTMtNDAuMDc5Yy0xLjIzNC04LjMyMy01LjkyMi0xMy43MTEtMTQuMjI3LTE1LjI4NmMtNC4yMzgtMC44MDMtMy42MDctMi4zOC0xLjU1NS00Ljc5OSAgIGMzLjU2NC00LjE3Miw2LjkxNi02Ljc2OSwxMy41OTgtNi43NjloNTAuMTExYzcuODg5LDEuNTU3LDkuNjQxLDUuMTAxLDEwLjcyMSwxMy4wMzlsMC4wNDMsNTUuNjYzICAgYy0wLjA4NiwzLjA3MywxLjUzNSwxMi4xOTIsNy4wNywxNC4yMjZjNC40MywxLjQ0OCw3LjM1LTIuMDk2LDEwLjAwOC00LjkwNWMxMS45OTgtMTIuNzM0LDIwLjU2MS0yNy43ODMsMjguMjExLTQzLjM2NiAgIGMzLjM5NS02Ljg1Miw2LjMxNC0xMy45NjgsOS4xNDMtMjEuMDc4YzIuMDk2LTUuMjc2LDUuMzg1LTcuODcyLDExLjMyOC03Ljc1N2w0OC4yMjksMC4wNDNjMS40MywwLDIuODc3LDAuMDIxLDQuMjYyLDAuMjU4ICAgYzguMTI3LDEuMzg1LDEwLjM1NCw0Ljg4MSw3Ljg0NCwxMi44MTdjLTMuOTU1LDEyLjQ1MS0xMS42NSwyMi44MjctMTkuMTc0LDMzLjI1MWMtOC4wNDMsMTEuMTI5LTE2LjY0NSwyMS44NzctMjQuNjIxLDMzLjA3MiAgIEMyNTIuMjYsMTYxLjU0NCwyNTIuODQyLDE2Ni42OTcsMjYxLjk0NSwxNzUuNTc2TDI2MS45NDUsMTc1LjU3NnogTTI2MS45NDUsMTc1LjU3NiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=');
            background-repeat: no-repeat;
            background-size: 80%;
            background-position: center;
        }

        amp-social-share[type="ok"] {
            background-color: #ee7808;
            background-image: url('data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDk1LjQ4MSA5NS40ODEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk1LjQ4MSA5NS40ODE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDMuMDQxLDY3LjI1NGMtNy40MDItMC43NzItMTQuMDc2LTIuNTk1LTE5Ljc5LTcuMDY0Yy0wLjcwOS0wLjU1Ni0xLjQ0MS0xLjA5Mi0yLjA4OC0xLjcxMyAgICBjLTIuNTAxLTIuNDAyLTIuNzUzLTUuMTUzLTAuNzc0LTcuOTg4YzEuNjkzLTIuNDI2LDQuNTM1LTMuMDc1LDcuNDg5LTEuNjgyYzAuNTcyLDAuMjcsMS4xMTcsMC42MDcsMS42MzksMC45NjkgICAgYzEwLjY0OSw3LjMxNywyNS4yNzgsNy41MTksMzUuOTY3LDAuMzI5YzEuMDU5LTAuODEyLDIuMTkxLTEuNDc0LDMuNTAzLTEuODEyYzIuNTUxLTAuNjU1LDQuOTMsMC4yODIsNi4yOTksMi41MTQgICAgYzEuNTY0LDIuNTQ5LDEuNTQ0LDUuMDM3LTAuMzgzLDcuMDE2Yy0yLjk1NiwzLjAzNC02LjUxMSw1LjIyOS0xMC40NjEsNi43NjFjLTMuNzM1LDEuNDQ4LTcuODI2LDIuMTc3LTExLjg3NSwyLjY2MSAgICBjMC42MTEsMC42NjUsMC44OTksMC45OTIsMS4yODEsMS4zNzZjNS40OTgsNS41MjQsMTEuMDIsMTEuMDI1LDE2LjUsMTYuNTY2YzEuODY3LDEuODg4LDIuMjU3LDQuMjI5LDEuMjI5LDYuNDI1ICAgIGMtMS4xMjQsMi40LTMuNjQsMy45NzktNi4xMDcsMy44MWMtMS41NjMtMC4xMDgtMi43ODItMC44ODYtMy44NjUtMS45NzdjLTQuMTQ5LTQuMTc1LTguMzc2LTguMjczLTEyLjQ0MS0xMi41MjcgICAgYy0xLjE4My0xLjIzNy0xLjc1Mi0xLjAwMy0yLjc5NiwwLjA3MWMtNC4xNzQsNC4yOTctOC40MTYsOC41MjgtMTIuNjgzLDEyLjczNWMtMS45MTYsMS44ODktNC4xOTYsMi4yMjktNi40MTgsMS4xNSAgICBjLTIuMzYyLTEuMTQ1LTMuODY1LTMuNTU2LTMuNzQ5LTUuOTc5YzAuMDgtMS42MzksMC44ODYtMi44OTEsMi4wMTEtNC4wMTRjNS40NDEtNS40MzMsMTAuODY3LTEwLjg4LDE2LjI5NS0xNi4zMjIgICAgQzQyLjE4Myw2OC4xOTcsNDIuNTE4LDY3LjgxMyw0My4wNDEsNjcuMjU0eiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxwYXRoIGQ9Ik00Ny41NSw0OC4zMjljLTEzLjIwNS0wLjA0NS0yNC4wMzMtMTAuOTkyLTIzLjk1Ni0yNC4yMThDMjMuNjcsMTAuNzM5LDM0LjUwNS0wLjAzNyw0Ny44NCwwICAgIGMxMy4zNjIsMC4wMzYsMjQuMDg3LDEwLjk2NywyNC4wMiwyNC40NzhDNzEuNzkyLDM3LjY3Nyw2MC44ODksNDguMzc1LDQ3LjU1LDQ4LjMyOXogTTU5LjU1MSwyNC4xNDMgICAgYy0wLjAyMy02LjU2Ny01LjI1My0xMS43OTUtMTEuODA3LTExLjgwMWMtNi42MDktMC4wMDctMTEuODg2LDUuMzE2LTExLjgzNSwxMS45NDNjMC4wNDksNi41NDIsNS4zMjQsMTEuNzMzLDExLjg5NiwxMS43MDkgICAgQzU0LjM1NywzNS45NzEsNTkuNTczLDMwLjcwOSw1OS41NTEsMjQuMTQzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=');
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
        }

        .ad {
            margin-top: 1em;
            margin-bottom: 1em;
            text-align: center;
            background-color: #f1f1f1;
        }

        .fullversion {
            display: block;
            margin: 20px 5px;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px 5px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
        }

        .horizontal-scrollable {
            display: flex;
            align-items: center;
            width: 90%;
            padding: 1rem 20px;
            overflow: auto;
            max-height: 50px;
        }

        .header-navigation_item a {
            text-decoration: none;
            font-weight: bold;
            color: #000;
            margin-right: 10px;
        }

        .article_tags {
            position: relative;
            margin: 15px 0;
            box-sizing: border-box;
            font-size: 13px;
        }

        .article_tags a {
            text-decoration: none;
            color: #4a4a4a;
        }

        .article_info {
            display: flex;
            align-items: baseline;
            margin-bottom: 20px;
        }

        .article_date {
            font-size: 13px;
            line-height: 1.23;
            color: #9b9b9b;
            margin-right: 20px;
        }

        .comments-bubble {
            font-family: Arial, sans-serif;
            font-weight: 700;
            display: inline-block;
            position: relative;
            height: 30px;
            line-height: 31px;
            box-sizing: border-box;
            padding: 0 10px;
            min-width: 30px;
            font-size: 19px;
            color: #fff;
            text-align: center;
            background: linear-gradient(270deg, #2951ed 0%, #4575ee 100%);
            cursor: pointer;
        }

        .comments-bubble:after {
            content: '';
            position: absolute;
            top: 100%;
            left: 0;
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px 10px 0 0;
            border-color: #4575ee transparent transparent;
        }

        /* avatar */
        .avatar{
            position:relative;
            display:inline-flex;
            align-items: flex-end;
            justify-content: center;
            width:1em;
            height:1em;
            font-size: 50px;
            border-radius:50%;
            background-color: #aaa;
        }

        .avatar_thumb{
            display:block;
            width:100%;
            height:100%;
            object-fit: cover;
            object-position: 50% 50%;
            border-radius: 50%;
            position: absolute;
            left: 0;
            top: 0;
        }

        .avatar-alt .avatar_icon{
            font-size: .8em;
            fill: transparent;
            stroke: var(--color-reverse);
            stroke-width: 1px;
        }

        .avatar-notice:after{
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            display: block;
            width: 8px;
            height: 8px;
            background-color: #FFE789;
            border-radius: 50%;
        }

        .avatar-big {
            font-size: 130px;
        }

        .avatar-change {
            display: block;
            margin: 0 auto 20px;
        }


        /*expertOpinion*/
        .expertOpinion {
            /*display:none;*/
            border: 2px solid #EBEBEB;
            margin: 20px 0;
            padding:30px 20px;
        }

        .expertOpinion_author {
            display:flex;
            align-items: center;
            margin-bottom:20px;
            text-decoration:none;
        }

        .expertOpinion_authorAvatar {
            position:relative;
            flex-shrink: 0;
            margin-right: 10px;
            width:50px;
            height:50px;
            border-radius:50%;
            overflow:hidden;
        }

        .expertOpinion_authorAvatar img {
            object-fit: cover;
        }

        .expertOpinion_authorAvatar .avatar_thumb{
            width:100%;
            height:100%;
            margin: 0;
        }

        .expertOpinion_authorName {
            display: block;
            font-size: 16px;
            line-height: 1.125;
            font-weight: bold;
            margin-top: -2px;
            margin-bottom: 3px;
            color: #000;
        }

        .expertOpinion_authorDesc{
            display:block;
            font-size:14px;
            line-height:1.125;
            color:#9B9B9B;
        }

        .expertOpinion_editor *{
            margin-left:0;
            margin-right:0;
        }

        .expertOpinion_editor *:last-child{
            margin-bottom:0;
        }

        .moreBox {
            display: flex;
            flex-direction: column;
            padding: 10px;
            font-size: 16px;
            line-height: 20px;
            color: #000000;
            background-color: #F4F4F4;
            border: 1px solid #7B94F0;
            border-radius: 8px;
            text-decoration: none;
        }

        .moreBox::before {
            content: 'Ещё:';
            margin-bottom: 5px;
            color: #4575ee;
        }

        .newsWidgetIframe{
            position:relative;
            padding:10px;
            border: 10px solid var(--color-primary);
            box-sizing: content-box;
        }

        .newsWidgetIframe_amp{
            height:100vh;
        }

        .newsWidgetIframe_more[overflow] {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 37px;
            display: flex;
            padding-bottom: 7px;
            align-items: flex-end;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(256,256,256,0), rgba(256,256,256,1) 40%, rgba(256,256,256,1) 100%);
            font-weight: bold;
            text-decoration: underline;
        }
    </style>

</head>

<body>
<amp-analytics type="googleanalytics">
    <script type="application/json">
        {
            "vars": {
                "account": "G-Y2TT978ZKF"
            },
            "triggers": {
                "trackPageview": {
                    "on": "visible",
                    "request": "pageview"
                }
            }
        }
    </script>
</amp-analytics>
<amp-analytics type="metrika">
    <script type="application/json">
        {
            "vars": {
                "counterId": "87696871"
            }
        }
    </script>
</amp-analytics>

<header class="headerbar" next-page-hide>
    <div class="site-name">Патрульный Петербурга</div>
</header>

<div class="horizontal-scrollable" next-page-hide>
    <div class="header-navigation_item">
        <a class="header-navigation_a" href="/tape" rel="”nofollow”">Новости</a>
    </div>
    <div class="header-navigation_item">
        <a class="header-navigation_a" href="/category/politics--44">Политика</a>
    </div>
    <div class="header-navigation_item">
        <a class="header-navigation_a" href="/category/economy--208">Экономика</a>
    </div>
    <div class="header-navigation_item">
        <a class="header-navigation_a" href="/category/crime--879">Криминал</a>
    </div>
    <div class="header-navigation_item">
        <a class="header-navigation_a" href="/category/incident--48">Происшествия</a>
    </div>
    <div class="header-navigation_item">
        <a class="header-navigation_a" href="/category/culture--49">Культура</a>
    </div>
    <div class="header-navigation_item">
        <a class="header-navigation_a" href="/category/society--45">Общество</a>
    </div>
</div>

<article>
    <div class="article_content">
        <!--Название категории-->
        <div class="article_tags">
            <a class="article-tag"
               href="{{ route('category.show',['id'=>$post->getMainCat()->id, 'slug'=>$post->getMainCat()->slug]) }}">{{ $post->getMainCat()->name }}</a>
        </div>
        <!--Заголовок-->
        <h1 class="article_heading">{{ $post->title }}</h1>
        <!--Дата выпуска кол-во комментов-->
        <div class="article_info">
            <div class="article_date">
                <div class="article-date">{{$post->getHumanDate()}} {{ $post->getHumanTime() }}</div>
            </div>
        </div>
        @if($post->id < 21908)
        @else
        <!--Основное изображение-->
        <amp-img width="{{ $post['main_image']['sizes']['full']['width'] }}" height="{{ $post['main_image']['sizes']['full']['height'] }}" layout="responsive" src="{{ $post->getMainImage() }}"  alt=""></amp-img>
        @endif
        <a href="{{ $_meta['canonical'] }}" class="fullversion">Читать в сайте</a>
    </div>
    <!--баннер-->
    <div class="article_content">
        <div class="entry-details" itemprop="articleBody">
            {!! $post->getContentWithCdnImages() !!}
        </div>
        <div class="amp-tags">
            @foreach($post->tags as $tag)
                <a href="/tag/{{ $tag['slug'] }}--{{ $tag['id'] }}"><span>#</span>{{ $tag['name'] }}</a>
            @endforeach
        </div>
    </div>
</article>


{{--<amp-next-page>--}}
{{--    <script type="application/json">--}}
{{--        [--}}
{{--            {--}}
{{--                "image":"https://gorodovoy.ru/k2/news/canvas/640x360/upload/upload/news/390388629781.jpg",--}}
{{--                "title": "Фото олигарха из «Универа» в молодости ужаснет любого: в этом мужчине не узнать отца Саши",--}}
{{--                "url": "https://gorodovoy.ru/news/foto-oligarha-iz-univera-v-molodosti-zastavit-vzdrognut-lyubogo-pronizyvaet-do-drozhi_id857370_a138_dp221110/amp"--}}
{{--            }--}}
{{--        ]--}}
{{--    </script>--}}
{{--</amp-next-page>--}}

</body>
</html>
