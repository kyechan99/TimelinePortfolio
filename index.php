<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';

if (isset($tp_type) == false) {
    $tp_type = "최신"
}
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>Timeline Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000AAA">
    <script src="javascripts/vue.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/nanumgothiccoding.css">
    <link rel="stylesheet" href="stylesheets/animate.css">
    <link rel="stylesheet" href="stylesheets/board.css">
    <link rel="stylesheet" href="stylesheets/line.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body, h1, h2, h3, h4, h5 {
            font-family: 'Nanum Gothic Coding', serif;
        }
    </style>
</head>

<body class="w3-light-grey">

<nav class="navbar navbar-fixed-bottom ">
    <button class="btn btn-default pull-right pull-bottom top" style="    margin-top: 15px;">
        <img src="https://www.shareicon.net/download/2015/10/05/651432_arrows_512x512.png" width="20" height="20"/> 맨위로
    </button>
</nav><!-- 위로 버튼 -->
<!--
<a href="#layer2" class="btn-example">딤처리 팝업레이어 1sdf</a>-->

<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar_top">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- 모바일 화면에 메뉴 축소 판 -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">@kyechan99</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- Navbar 좌측 상단 -->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">타임라인 <span class="sr-only">(current)</span></a></li>
            </ul>

            <!-- 검색 창 -->
            <form class="navbar-form navbar-left">
                <div class="form-group has-feedback has-feedback-left">
                    <i class="glyphicon glyphicon-search form-control-feedback"></i>
                    <input type="text" class="form-control" placeholder="추천 검색어 : 미정">
                </div>
                <button type="submit" class="btn btn-default">검색</button>
            </form>

            <!-- Navbar 우측 상단 -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown" role="button"
                       aria-haspopup="true"
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-user"> 강예찬 </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="https://github.com/kyechan99/TimelinePortfolio">Repo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://github.com/kyechan99" class="top">GitHub</a></li>
                        <li><a href="https://open.kakao.com/o/sdHZXlf">Kakao</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
</nav><!-- navbar-inverse -->

<br/>
<br/>

<div class="w3-content" style="max-width:900px">
    <header class="w3-container w3-center w3-padding-32">
        <h1 class="w3-animate-top"><b>Timeline Portfolio</b></h1>
        <p class="w3-animate-fading">안녕하세요. <span class="w3-tag">강예찬</span> 입니다.</p>
    </header>

    <div class="w3-row">
        <div class="w3-col l4">
            <div class="w3-card-2 w3-margin w3-margin-top">
                <img class=" w3-hide-medium w3-hide-small"
                     src="https://avatars0.githubusercontent.com/u/14146566?v=3&s=460" style="width:100%">
                <div class="w3-container w3-white">
                    &nbsp;
                    <h4><b>강예찬</b></h4>
                    <p>겁나 잘나고 못하는게 없는, 그냥 천재</p>
                    <p>나라의 보물</p>
                </div>
            </div><!-- 개인 -->

            <hr>


            <div class="w3-card-2 w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Top Posts</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    <li class="w3-padding-16  w3-hide-small" onclick="location.href='/#';">
                        <img src="https://avatars0.githubusercontent.com/u/14146566?v=3&s=460" alt="Image"
                             class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">A</span><br>
                        <span>AAA</span>
                    </li>
                    <li class="w3-padding-16  w3-hide-small" onclick="location.href='/#;">
                        <img src="https://avatars0.githubusercontent.com/u/14146566?v=3&s=460" alt="Image"
                             class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">B</span><br>
                        <span>BBBB</span>
                    </li>
                    <li class="w3-padding-16  w3-hide-small" onclick="location.href='/#';">
                        <img src="https://avatars0.githubusercontent.com/u/14146566?v=3&s=460" alt="Image"
                             class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">C</span><br>
                        <span>CCCC</span>
                    </li>
                    <li class="w3-padding-16 w3-hide-medium w3-hide-small" onclick="location.href='/#';">
                        <img src="https://avatars0.githubusercontent.com/u/14146566?v=3&s=460" alt="Image"
                             class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">C</span><br>
                        <span>DDDD</span>
                    </li>
                </ul>
            </div><!-- Posts 창 -->

            <hr>

            <div class="w3-card-2 w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Tags</h4>
                </div>
                <div class="w3-container w3-white">
                    <p>
                        <span class="w3-tag w3-black w3-margin-bottom">#강예찬</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">#훈남</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">#존잘</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">#매력있어</span>
                    </p>
                </div>
            </div><!-- Tag 창 -->
        </div><!-- 우측 메뉴 -->

        <div class="w3-col l8 s12" id="timeline_col">

            <div class="card">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">최신순</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?tp_type=게임">게임</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?tp_type=앱">앱</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?tp_type=웹">웹</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?tp_type=기술">기술</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?tp_type=방문록">방문록</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- card -->

            <div class="w3-card-4 w3-margin w3-white">
                <hr>
                <form id="myboard" name="myboard" action="#">
                    <div class="form-group">
                        <h6 for="exampleTextarea"> &nbsp;&nbsp; 글 남기기..</h6>

                        <!-- 작성 란 -->
                        <div v-show="isWriting === true">
                                <textarea class="form-control" id="exampleTextarea"
                                          style="border:none; height:150px; resize:none;" placeholder="내용"></textarea>
                            <a v-on:click="wantWrite" class="btn btn-sm btn-danger pull-left"
                               style="margin-left: 10px;">
                                닫기
                            </a>
                            <button class="btn btn-info pull-right" type="submit" style="margin-right: 10px;">완료
                            </button>
                        </div>
                        <br/>
                        <div v-show="isWriting === false">
                            <a v-on:click="wantWrite" class="btn btn-default" style="margin-left: 10px;">
                                <img src="https://www.phplist.org/wp-content/uploads/2014/02/write-black.png"
                                     width="20"/> 작성
                            </a>
                        </div>
                    </div>
                </form>
                <hr>
            </div> <!-- w3-card-4 글 작성 부분 -->

            <hr>
            
            <div class='w3-card-4 w3-margin w3-white animated lightSpeedIn'>
                <hr class='style13'>
                <div class='w3-container'>
                    <h3><b>안녕하세요 !!</b></h3>
                    <h5><b>@익명</b>(님)이 작성, <span class='w3-opacity'>2017-09-30</span></h5>
                </div><!-- w3-container 포스트 상단 제목 부분 -->
                <div class='w3-container' id="wrapper">
                    <p>ㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ</p>
                    <div class='w3-row'>
                        <div class='w3-col m8 s12'>
                            <a href='/#'>
                                <button class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b>
                                </button>
                            </a>
                            <p></p>
                        </div>
                        <div class='w3-col m4 w3-hide-small'>
                            <p>
                                <span class='w3-padding-large w3-right'>
                                <b>Comments  </b>
                                <span class='w3-tag'>2</span>
                                </span>
                            </p>
                        </div>

                        <form action='/' method='post'>
                            <textarea class='form-control' style='border:none; resize:vertical;' placeholder='댓글 남기기'></textarea>
                            <input  type='button' class='btn btn-link btn-sm pull-right' value='완료'>
                        </form><!-- 댓글 폼 -->
                    </div>
                </div><!-- w3-container 포스트 하단 설명 부분 -->
            </div><!-- 포스트 w3-card-4 -->
            
            <hr>
            
            <div class='w3-card-4 w3-margin w3-white animated lightSpeedIn'>
                <img src='https://pexels.imgix.net/photos/7919/pexels-photo.jpg' alt='Nature' style='width:100%'>
                <hr class='style13'>
                <div class='w3-container'>
                    <h3><b>[공지사항] 학교 사이트 첫 개막</b></h3>
                    <h5>@강예찬(님)이 작성, <span class='w3-opacity'>2017-09-30</span></h5>
                </div><!-- w3-container 포스트 상단 제목 부분 -->
                <div class='w3-container' id="wrapper">
                    <p>학교 커뮤니티 사이트 - KGSH Community 의 첫 모습을 여러분께 보여 드립니다 !</p>
                    <div class='w3-row'>
                        <div class='w3-col m8 s12'>
                            <a href='/#'>
                                <button class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b>
                                </button>
                            </a>
                            <p></p>
                        </div>
                        <div class='w3-col m4 w3-hide-small'>
                            <p>
                                <span class='w3-padding-large w3-right'>
                                <b>Comments  </b>
                                <span class='w3-tag'>2</span>
                                </span>
                            </p>
                        </div>

                        <form action='/' method='post'>
                            <textarea class='form-control' style='border:none; resize:vertical;' placeholder='댓글 남기기'></textarea>
                            <input  type='button' class='btn btn-link btn-sm pull-right' value='완료'>
                        </form><!-- 댓글 폼 -->
                    </div>
                </div><!-- w3-container 포스트 하단 설명 부분 -->
            </div><!-- 포스트 w3-card-4 -->
            
            <hr>
        </div><!-- 좌측 메뉴 -->
    </div>
    <br>

    <!-- END w3-content -->
</div>

<script src="javascripts/board.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="javascripts/dot/jquery.dotdotdot.js"></script>
<script type="text/javascript">
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    $(document).ready(function () {
        $("#wrapper").dotdotdot({
            after: "a.readmore"
        });
    });

    // 스크롤 맨 위로 올리기
    $('.top').click(function () {
        $('html, body').animate({scrollTop: 0}, 400);
        return false;
    });

    // 스크롤 관리 스크립트
    (function ($) {
        $.fn.endlessScroll = function (options) {
            var defaults = {
                bottomPixels: 50,
                fireOnce: true,
                fireDelay: 150,
                loader: "<br />Loading...<br />",
                data: "",
                insertAfter: "div:last",
                resetCounter: function () {
                    return false;
                },
                callback: function () {
                    return true;
                },
                ceaseFire: function () {
                    return false;
                }
            };

            var options = $.extend({}, defaults, options);

            var firing = true;
            var fired = false;
            var fireSequence = 0;

            if (options.ceaseFire.apply(this) === true) {
                firing = false;
            }

            if (firing === true) {
                $(this).scroll(function () {
                    if (options.ceaseFire.apply(this) === true) {
                        firing = false;
                        return; // Scroll will still get called, but nothing will happen
                    }

                    if (this == document || this == window) {
                        var is_scrollable = $(document).height() - $(window).height() <= $(window).scrollTop() + options.bottomPixels;
                    } else {
                        // calculates the actual height of the scrolling container
                        var inner_wrap = $(".endless_scroll_inner_wrap", this);
                        if (inner_wrap.length == 0) {
                            inner_wrap = $(this).wrapInner("<div class=\"endless_scroll_inner_wrap\" />").find(".endless_scroll_inner_wrap");
                        }
                        var is_scrollable = inner_wrap.length > 0 &&
                            (inner_wrap.height() - $(this).height() <= $(this).scrollTop() + options.bottomPixels);
                    }

                    if (is_scrollable && (options.fireOnce == false || (options.fireOnce == true && fired != true))) {
                        if (options.resetCounter.apply(this) === true) fireSequence = 0;

                        fired = true;
                        fireSequence++;

                        $(options.insertAfter).after("<div id=\"endless_scroll_loader\">" + options.loader + "</div>");

                        data = typeof options.data == 'function' ? options.data.apply(this, [fireSequence]) : options.data;

                        if (data !== false) {
                            $(options.insertAfter).after("<div id=\"endless_scroll_data\">" + data + "</div>");
                            $("div#endless_scroll_data").hide().fadeIn();
                            $("div#endless_scroll_data").removeAttr("id");

                            options.callback.apply(this, [fireSequence]);

                            if (options.fireDelay !== false || options.fireDelay !== 0) {
                                $("body").after("<div id=\"endless_scroll_marker\"></div>");
                                // slight delay for preventing event firing twice
                                $("div#endless_scroll_marker").fadeTo(options.fireDelay, 1, function () {
                                    $(this).remove();
                                    fired = false;
                                });
                            }
                            else {
                                fired = false;
                            }
                        }

                        $("div#endless_scroll_loader").remove();
                    }
                });
            }
        };

    })(jQuery);

    // 스크롤 맨 마지막일때 호출됨
    $(document).ready(function () {
        $(document).endlessScroll({
            inflowPixels: 300,
            callback: function () {
                var anim = " animated bounceInRight ";
                if (isMobile.any())
                    anim = " ";
                var form_data = {
                    page: 0
                };
                $.ajax({
                    type: "GET",
                    url: "/board/list/0",
                    data: form_data,
                    success: function (response) {
                        alert(response);
                    }
                });
                var $img = $('#images li:nth-last-child(5)').clone();
                $('#timeline_col').append(
                    "<div class='w3-card-4 w3-margin w3-white" + anim + "'>" +
                    "<img src='https://pexels.imgix.net/photos/7919/pexels-photo.jpg' alt='Nature' style='width:100%'>" +
                    "<hr class='style15'>" +
                    "<div class='w3-container'>" +
                    "<h3><b>제목</b></h3>" +
                    "<h5><b>@</b>(님)이 작성, <span class='w3-opacity'>3분전에 작성</span></h5>" +
                    "</div>" +

                    "<div class='w3-container'>" +
                    "<p> 내용 </p>" +
                    "<div class='w3-row'>" +
                    "<div class='w3-col m8 s12'>" +
                    "<a href='/#'>" +
                    "<button class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b>" +
                    "</button>" +
                    "</a>" +
                    "<p>" +
                    "</p>" +
                    "</div>" +
                    "<div class='w3-col m4 w3-hide-small'>" +
                    "<p><span class='w3-padding-large w3-right'><b>Comments  </b> <span class='w3-tag'>2</span></span></p>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div><hr>"
                );
            }
        });
    });
</script>
</body>
</html>