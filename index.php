<?php
include $_SERVER['DOCUMENT_ROOT'].'/head.html';

if (isset($tp_type) == false) {
    $tp_type = "최신";
}
?>


<div class="w3-col l4">
    <div class="w3-card-2 w3-margin w3-margin-top">
        <img class=" w3-medium w3-small"
             src="https://avatars0.githubusercontent.com/u/14146566?v=3&s=460" style="width:100%">
        <div class="w3-container w3-white">
            &nbsp;
            <h4><b>강예찬</b></h4>
            <p>음.. 아직은 딱히 할말이 없네요.</p>
            <p>현재는 이것저것 다양하게 공부하고 있습니다.</p>
            <p>특히 서버에 관심이 많습니다.</p>
        </div>
    </div><!-- 개인 -->

    <hr>

    <div class="w3-card-2 w3-margin">
        <div class="w3-container w3-padding">
            <h4>My Career</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
            <li class="w3-padding-16  w3-hide-small">
                <span class="w3-large">한국게임과학고</span><br>
                <span>2015.03 - 2018.03</span>
            </li>
            <li class="w3-padding-16  w3-hide-small">
                <span class="w3-large">대학</span><br>
                <span>X</span>
            </li>
            <!--<li class="w3-padding-16  w3-hide-small">
                <span class="w3-large">C</span><br>
                <span>CCCC</span>
            </li>
            <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                <span class="w3-large">C</span><br>
                <span>DDDD</span>
            </li>-->
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
                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">#게임</span>
                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">#웹</span>
                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">#앱</span>
                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">#고수가_되고싶습니다</span>
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
                        <a class="nav-link active" href="?tp_type=최신">최신순</a>
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
        <form id="myboard" method = "POST" name="myboard" action="writePost.php">
            <div class="form-group">
                <h6 for="exampleTextarea"> &nbsp;&nbsp; 글 남기기..</h6>

                <!-- 작성 란 -->
                <div v-show="isWriting === true">
                    <textarea class="form-control" id="t_name" name="t_name" style="border:none; height:35px; resize:none;" placeholder="이름"></textarea>
                    <textarea class="form-control" id="t_title" name="t_title" style="border:none; height:35px; resize:none;" placeholder="제목"></textarea>
                    <textarea class="form-control" id="t_content" name="t_content" style="border:none; height:120px; resize:none;" placeholder="내용"></textarea>
                    <a v-on:click="wantWrite" class="btn btn-sm btn-danger pull-left" style="margin-left: 10px;">
                        닫기
                    </a>
                    <button class="btn btn-info pull-right" type="submit" style="margin-right: 10px;">완료 </button>
                </div>
                <br/>
                <div v-show="isWriting === false">
                    <a v-on:click="wantWrite" class="btn btn-default" style="margin-left: 10px;">
                        <img src="https://www.phplist.org/wp-content/uploads/2014/02/write-black.png" width="20"/> 작성
                    </a>
                </div>
            </div>
        </form>
        <hr>
    </div> <!-- w3-card-4 글 작성 부분 -->
    
    <!-- 이 부분에 타임라인 카드가 생성됨 -->
    <!-- 이 부분에 타임라인 카드가 생성됨 -->
    <!-- 이 부분에 타임라인 카드가 생성됨 -->
    <!-- 이 부분에 타임라인 카드가 생성됨 -->
    <!-- 이 부분에 타임라인 카드가 생성됨 -->
    
    <hr>
</div><!-- 좌측 메뉴 -->


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
    
    var postIdx = 1000;
    
    function ajaxCall() {
        var anim = " animated bounceInRight ";
        if (isMobile.any()) anim = " ";

        var url = new URL(window.location);
        var tt = url.searchParams.get("tp_type");
        if (tt == null) tt = '최신';

        var form_data = {
            tp_type: tt,
            tp_idx: postIdx
        };

        $.ajax({
            type: "GET",
            url: "/getPost.php",
            data: form_data,
            success: function (response) {
                var obj = JSON.parse(response);
                $('#timeline_col').append("<div class='w3-card-4 w3-margin w3-white" + anim + "'>" + obj.card + "</div><hr>");
                postIdx = obj.idx;
            }
        });
    }
    
    // 스크롤 맨 마지막일때 호출됨
    $(document).ready(function () {
        ajaxCall();
        setTimeout(function() { ajaxCall(); }, 1500);
        setTimeout(function() { ajaxCall(); }, 3000);
        
        $(document).endlessScroll({
            inflowPixels: 300,
            callback: function () {
                ajaxCall();
            }
        });
    });
</script>
</body>
</html>