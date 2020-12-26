<div class="upper-header py-3">
    <div class="container d-flex">
        <img src="<?php echo site_url('/images/icons/phone.svg') ?>" alt="phone icon">
        <p class="pl-2 my-auto">Bel of App ons: <a href="callto:+31 6 57895757" class="effect"><b>+31 6 57895757</b></a></p>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand text-center" href="<?php echo url( 'home' ) ?>">
            <b>LOMAN</b>
            <br>
            Glasbewassing & Onderhoud
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link effect" href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> id="active"<?php endif ?>>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link effect" href="<?php echo url( 'diensten' ) ?>"<?php if ( current_route_is( 'diensten' ) ): ?> id="active"<?php endif ?>>Diensten</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link effect button" href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> id="active"<?php endif ?>>Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
