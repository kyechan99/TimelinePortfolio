<?php

$tp_type = $_GET['tp_type'];

if (isset($tp_type) == false) {
    $tp_type = "최신";
}

echo "<div class='w3-card-4 w3-margin w3-white" . " animated bounceInRight " . "'>" .
                            "<img src='https://pexels.imgix.net/photos/7919/pexels-photo.jpg' alt='Nature' style='width:100%'>" .
                            "<hr class='style15'>" .
                            "<div class='w3-container'>" .
                            "<h3><b>" . $tp_type . "</b></h3>" .
                            "<h5><b>@</b>(님)이 작성, <span class='w3-opacity'>3분전에 작성</span></h5>" .
                            "</div>" .

                            "<div class='w3-container'>" .
                            "<p> 내용 </p>" .
                            "<div class='w3-row'>" .
                            "<div class='w3-col m8 s12'>" .
                            "<a href='/#'>" .
                            "<button class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b>" .
                            "</button>" .
                            "</a>" .
                            "<p>" .
                            "</p>" .
                            "</div>" .
                            "<div class='w3-col m4 w3-hide-small'>" .
                            "<p><span class='w3-padding-large w3-right'><b>Comments  </b> <span class='w3-tag'>2</span></span></p>" .
                            "</div>" .
                            "</div>" .
                            "</div>" .
                            "</div><hr>";








?>