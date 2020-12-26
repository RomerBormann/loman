<?php $this->layout('website');?>

<div class="header d-flex">
    <h1 class="text-white m-auto">CONTACT</h1>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <h1>WAT KUNNEN WE VOOR JOU BETEKENEN?</h1>
            <p class="mt-3">Wat kan u verwachten bij contact? <br>Klantvriendelijkheid, duidelijkheid, samen kijken naar een passende oplossing en een goede service!</p>
            <p style="color: #D96B52;"> 24/7 beschikbaar voor spoedgevallen!</p>
            <div class="d-flex">
                <img src="<?php echo site_url('/images/icons/phone-orange.svg') ?>" style="height: 16px;" class="my-auto" alt="phone icon">
                <p class="pl-2 my-auto"><a href="callto:+31 6 57895757" class="effect3"><b>+31 6 57895757</b></a></p>
            </div>
            <div class="d-flex mt-2">
                <img src="<?php echo site_url('/images/icons/email.svg') ?>" style="height: 20px;" class="my-auto" alt="email icon">
                <p class="pl-2 my-auto"><a href="mailto:marvinloman1977@gmail.com" class="effect3"><b>marvinloman1977@gmail.com</b></a></p>
            </div>
        </div>
        <div class="col-lg-7 mt-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner" style="height: 400px; width: 100%;">
                    <div class="carousel-item active h-100">
                        <img class="d-block w-100 h-100" style="object-fit: cover !important;" src="<?php echo site_url('/images/loman-1.png') ?>" alt="First slide">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100 h-100" style="object-fit: cover !important;" src="<?php echo site_url('/images/loman-2.png') ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100 h-100" style="object-fit: cover !important;" src="<?php echo site_url('/images/loman-3.jpeg') ?>" alt="Third slide">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100 h-100" style="object-fit: cover !important;" src="<?php echo site_url('/images/loman-4.jpeg') ?>" alt="Fourth slide">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100 h-100" style="object-fit: cover !important;" src="<?php echo site_url('/images/loman-5.jpg') ?>" alt="Fifth slide">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100 h-100" style="object-fit: cover !important;" src="<?php echo site_url('/images/loman-6.jpeg') ?>" alt="Sixth slide">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100 h-100" style="object-fit: cover !important;" src="<?php echo site_url('/images/loman-7.jpeg') ?>" alt="Seventh slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Terug</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Volgende</span>
                </a>
            </div>
        </div>
    </div>
</div>