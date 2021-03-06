
<link rel="stylesheet" href="css/pages_style/studio.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container dynamicTile">
<div class="row ">
    <a href="#"  id="twinTwitter" target="_blank">
    <div class="col-sm-2 col-xs-4">
        <div id="tile1" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="cursor: hand;">
                        <div class="item active">
                            <img src="http://handsontek.net/demoimages/tiles/twitter1.png" class="img-responsive"/>
                        </div>
                        <div class="item">
                            <img src="img/studio/twitter1.png" class="img-responsive"/>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    </a>
    <div class="col-sm-2 col-xs-4" id="twinPhone">
        <div id="tile2" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/studio/phone1.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="img/studio/phone2.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="img/studio/phone3.png" class="img-responsive"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-2 col-xs-4" id="twinInsta">
        <div id="tile3" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/studio/insta1.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="img/studio/insta2.png" class="img-responsive"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-2 col-xs-4" id="twinFb">
        <div id="tile4" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/studio/fb1.jpg" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="img/studio/fb2.png" class="img-responsive"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-2 col-xs-4" id="twinYoutube">
        <div id="tile5" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/studio/youtube1.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="img/studio/youtube2.png" class="img-responsive"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-2 col-xs-4" id="twinSkype">
        <div id="tile6" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/studio/skype.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="img/studio/skype2.png" class="img-responsive"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4 col-xs-8" id="twinAddress">
        <div id="tile7" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/studio/add1.jpg" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="img/studio/add2.jpg" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="img/studio/add3.jpg" class="img-responsive"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-2 col-xs-4">
        <div id="tile8" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://handsontek.net/demoimages/tiles/music.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="http://handsontek.net/demoimages/tiles/music2.png" class="img-responsive"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-2 col-xs-4">
        <div id="tile9" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://handsontek.net/demoimages/tiles/calendar.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                        <img src="http://handsontek.net/demoimages/tiles/calendar2.png" class="img-responsive"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-4 col-xs-8">
        <div id="tile10" class="tile">

            <div class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <h3 class="tilecaption"><i class="fa fa-child fa-4x"></i></h3>
                    </div>
                    <div class="item">
                        <h3 class="tilecaption">Customize your tiles</h3>
                    </div>
                    <div class="item">
                        <h3 class="tilecaption">Text, Icons, Images</h3>
                    </div>
                    <div class="item">
                        <h3 class="tilecaption">Combine them and create your metro style</h3>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>





<script>
    $( document ).ready(function() {
        $(".tile").height($("#tile1").width());
        $(".carousel").height($("#tile1").width());
        $(".item").height($("#tile1").width());

        $(window).resize(function() {
            if(this.resizeTO) clearTimeout(this.resizeTO);
            this.resizeTO = setTimeout(function() {
                $(this).trigger('resizeEnd');
            }, 10);
        });

        $(window).bind('resizeEnd', function() {
            $(".tile").height($("#tile1").width());
            $(".carousel").height($("#tile1").width());
            $(".item").height($("#tile1").width());
        });

    });


</script>