<?php include 'header.php'; ?> 

<!-- Main Content -->
<div class="container home">
    <!-- Slideshow -->
    <div id="slideshow" class="slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slideshow" data-slide-to="0" class="active"></li>
            <li data-target="#slideshow" data-slide-to="1"></li>
            <li data-target="#slideshow" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://placehold.it/1140x475" alt="...">
                <div class="carousel-caption">
                    <h2>Naslov 1</h2>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1140x475" alt="...">
                <div class="carousel-caption">
                    <h2>Naslov 2</h2>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1140x475" alt="...">
                <div class="carousel-caption">
                    <h2>Naslov 3</h2>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#slideshow" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#slideshow" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <div class="content">
        <!-- Top Proizvodi -->
        <div class="top-products">
            <h3>Serije proizvoda</h3>
            <div class="thumbnails-container">
                <div class="row tiles">
                    <div>    
                        <div class="thumb">
                            <a href="#">
                                <h4>MODE</h4>
                                <img class="img-responsive" src="http://placehold.it/330x206" alt="..." />
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="thumb">
                            <a href="#">
                                <h4>PRESTIGE</h4>
                                <img class="img-responsive" src="http://placehold.it/330x206" alt="..." />
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="thumb">
                            <a href="#">
                                <h4>POWER</h4>
                                <img class="img-responsive" src="http://placehold.it/330x206" alt="..." />
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="thumb">
                            <a href="#">
                                <h4>ARMOR</h4>
                                <img class="img-responsive" src="http://placehold.it/330x206" alt="..." />
                            </a>
                        </div>
                    </div>
                    <div>    
                        <div class="thumb">
                            <a href="#">
                                <h4>PRODUŽNI</h4>
                                <img class="img-responsive" src="http://placehold.it/330x206" alt="..." />
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="thumb">
                            <a href="#">
                                <h4>INSTALACIONI PRIBOR</h4>
                                <img class="img-responsive" src="http://placehold.it/330x206" alt="..." />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- News -->
        <h3>Novosti</h3>
        <div class="news">
            <div class="news-thumbnail">
                <a href="#">
                    <img class="img-responsive" src="dist\images\news\Image_1.png" alt="...">
                </a>
                <a href="#"><h4>Aling-Conel izvoznik godine</h4></a>
                <p class="date">Decembar 2010.</p>
                <p>Prestižna nagrada „Izvoznik godine“ za najbolji izvozni proizvod za 2010-tu godinu dodeljena je kompaniji Aling-Conel d.o.o. iz Gajdobre.</p>
                <a href="#" class="btn btn-default">Detaljnije</a>
            </div>
            <div class="news-thumbnail">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360X180" alt="...">
                </a>
                <a href="#"><h4>Ovo je naslov druge vesti</h4></a>
                <p class="date">Datum</p>
                <p>Kratki opis vesti u vidu 1-2 rečenice</p>
                <a href="#" class="btn btn-default">Detaljnije</a>
            </div>
            <div class="news-thumbnail">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360X180" alt="...">
                </a>
                <a href="#"><h4>Ovo je naslov treće vesti</h4></a>
                <p class="date">Datum</p>
                <p>Kratki opis vesti u vidu 1-2 rečenice</p>
                <a href="#" class="btn btn-default">Detaljnije</a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>