<?php
$img1 = $library->fromImages('Drop');
$img2  = $library->fromImages('Business Internet');
$img3  = $library->fromImages('Cloud');

?>

<header id="myCarousel" class="carousel slide hidden-xs">


    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('<?= $img1; ?>');"></div>
            <div class="carousel-caption">
                <h2>Simple and relible</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('<?= $img2; ?>');"></div>
            <div class="carousel-caption">
                <h2>Business Oriented</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('<?= $img3; ?>');"></div>
            <div class="carousel-caption">
                <h2>Cloud Solution</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
<script>
    setTimeout(function(){
        $('.carousel').carousel({
           interval: 5000 //changes the speed
         })
    },5000);

</script>