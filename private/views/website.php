<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loman Onderhoud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="<?php echo site_url('/images/icons/clean.svg') ?>" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
    <?php if ( $this->section( 'css' ) ): ?>
        <?php echo $this->section( 'css' ) ?>
    <?php endif; ?>
</head>

<body>
<?php if ( $this->section( 'navigation' ) ): ?>
    <?php echo $this->section( 'navigation' ) ?>
<?php else: ?>
    <?php echo $this->fetch( '_navigation' ) ?>
<?php endif ?>

<main>
    <section class="content">
        <?php echo $this->section( 'content' ) ?>
    </section>
</main>

<!-- Footer -->
<footer class="page-footer font-small pt-5 text-white" style="background-color: #3A3A3A;">

    <!-- Footer Links -->
    <div class="container text-center text-md-left" >

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-2 text-white">LOMAN GLASBEWASSING & ONDERHOUD</h5>
                <p>Benieuwd naar wat we voor jou kunnen betekenen? Twijfel dan niet en neem contact met ons op, dan kijken we samen wat een passende oplossing is.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-2 text-white">NAVIGATIE</h5>

                <ul class="list-unstyled">
                    <li>
                        - <a class="text-white effect" href="<?php echo url( 'home' ) ?>">Home</a>
                    </li>
                    <li>
                        - <a class="text-white effect" href="<?php echo url( 'diensten' ) ?>">Diensten</a>
                    </li>
                    <li>
                        - <a class="text-white effect" href="<?php echo url( 'contact' ) ?>">Contact</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-2 text-white">CONTACT</h5>

                <p>
                    <a class="effect" href="mailto:marvinloman1977@gmail.com">marvinloman1977@gmail.com</a>
                    <br>
                    +31 6 57895757
                    <br>
                    KvK: 68686072
                </p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <div class="footer-copyright text-center py-4 mt-5" style="background-color: #565656">
        <p class="my-0" style="color: #ACACAC;">Onderhoudsbedrijf Loman © 2020. Alle rechten voorbehouden. Website ontwikkeld door <a href="https://romerbormann.nl/" target="_blank" style="color: #DCDCDC;">Romer Bormann</a></p>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>