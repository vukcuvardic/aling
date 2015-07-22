<?php include 'header.php'; ?> 

<!-- Main Content -->
<div class="container">
    <div class="content">
        <h1>Mode</h1>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Mode</li> 
        </ol>
        <div id="slideshow" class="slideshow-other slide carousel-fade" data-ride="carousel"  data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                <li data-target="#slideshow" data-slide-to="1"></li>
                <li data-target="#slideshow" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="dist/images/configurator/configurator-blank.png" alt="image-container" />
                    <div id="configurator-images">
                        <div class="configurator-element-wall" style="background-image: url('dist/images/configurator/zid-crvenkasti_1_configurator_image.jpg'); z-index: 10;">
                            <img src="dist/images/configurator/configurator-blank.png" alt="image-container" />
                        </div>
                        <div class="configurator-element" style="background-image: url('dist/images/configurator/maska-trio-grafit_1_configurator_image.png'); z-index: 20;">
                            <img src="dist/images/configurator/configurator-blank.png" alt="image-container" />
                        </div>
                        <div class="configurator-element" style="background-image: url('dist/images/configurator/taster-sivi-dimmer_1_configurator_image.png'); z-index: 30;">
                            <img src="dist/images/configurator/configurator-blank.png" alt="image-container">
                        </div>
                    </div>
                    <div id="configurator" class="hidden-xs hidden-sm">
                        <div class="configurator-inner">
                            <h2>Konfigurator</h2>
                            <div class="product-colors">
                                <div>
                                    <strong>Zid</strong>
                                    <a id="dropdownMenu1" data-toggle="dropdown" href="#">
                                        <img src="dist/images/colors/bela.png" width="20" height="20" alt="zelena" />
                                        <span>Bela</span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/zuta.png" width="20" height="20" alt="zelena" />
                                                <span>Žuta</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/bordo.png" width="20" height="20" alt="zelena" />
                                                <span>Bordo</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="product-colors">
                                <div>
                                    <strong>Materijal</strong>
                                    <ul class="nav nav-pills">
                                        <li role="presentation" class="active"><a href="#">Plastika</a></li>
                                        <li role="presentation"><a href="#">Metal</a></li>
                                        <li role="presentation"><a href="#">Drvo</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="product-colors">
                                <div>
                                    <strong>Maska</strong>
                                    <a href="single-product.php">
                                        <img src="dist/images/colors/zelena.png" width="20" height="20" alt="zelena" />
                                        <span>Zelena</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-colors">
                                <div>
                                    <strong>Blok</strong>
                                    <a id="dropdownMenu1" data-toggle="dropdown" href="#">
                                        <img src="dist/images/colors/crna.png" width="20" height="20" alt="crna" />
                                        <span>Crna</span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/zuta.png" width="20" height="20" alt="crna" />
                                                <span>Žuta</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/hrast.png" width="20" height="20" alt="crna" />
                                                <span>Hrast</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-colors">
                                <div>
                                    <strong>Prsten</strong>
                                    <a  id="dropdownMenu1" data-toggle="dropdown" href="#">
                                        <img src="dist/images/colors/bakarna.png" width="20" height="20" alt="crna" />
                                        <span>Bakarna</span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/mahagoni.png" width="20" height="20" alt="crna" />
                                                <span>Mahagoni</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/teget.png" width="20" height="20" alt="crna" />
                                                <span>Teget</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/zuta.png" width="20" height="20" alt="crna" />
                                                <span>Žuta</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/hrast.png" width="20" height="20" alt="crna" />
                                                <span>Hrast</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/zuta.png" width="20" height="20" alt="zelena" />
                                                <span>Žuta</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="dist/images/colors/bordo.png" width="20" height="20" alt="zelena" />
                                                <span>Bordo</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="visible-xs visible-sm configurator-modal-button" href="#" data-toggle="modal" data-target="#configurator-modal"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-tint"></span> Konfigurator</button></a>

                </div>
                <div class="item">
                    <img src="http://placehold.it/1920x800" alt="...">
                    <div class="carousel-caption">
                        <h2>MODE</h2>
                        <p><strong>Mode</strong> je drugaciji pristup izradi kucnih električnih instalacija sa modularnim elektroinstalacionim komponentama za ugradnju u zid koje se mogu po želji naknadno menjati ili premeštati u postojecem sklopu ukoliko se raspored pokaže kao neadekvatan.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1920x800" alt="...">
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
        <div class="panel">
            <p><strong>MODE</strong> je drugaciji pristup izradi kucnih električnih instalacija sa modularnim elektroinstalacionim komponentama za ugradnju u zid koje se mogu po želji naknadno menjati ili premeštati u postojecem sklopu ukoliko se raspored pokaže kao neadekvatan.</p>
        </div>
        <div class="thumbnails-container">
            <div class="row">
                <div class="tiles">
                    <div class="thumb">
                        <a href="single-product.php">
                            <div class="other-heading">
                                <h4>Priključnice</h4>
                            </div>
                            <img class="img-responsive" src="dist/images\products\mode\art_651_0_p01.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="tiles">
                    <div class="thumb">
                        <a href="#">
                            <div class="other-heading">
                                <h4>Instalacione sklopke</h4>
                            </div>
                            <img class="img-responsive" src="dist\images\products\mode\art_6542_0_p01.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="tiles">
                    <div class="thumb">
                        <a href="#">
                            <div class="other-heading">
                                <h4>Tasteri za sklopke<br>drugi red<br>treći</h4>
                            </div>
                            <img class="img-responsive" src="dist\images\products\mode\art_65422_0_p01.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="tiles">
                    <div class="thumb">
                        <a href="#">
                            <div class="other-heading">
                                <h4>Regulatori jačine svetlosti</h4>
                            </div>
                            <img class="img-responsive" src="dist\images\products\mode\art_667_0_p01.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="tiles">
                    <div class="thumb">
                        <a href="#">
                            <div class="other-heading">
                                <h4>Maske</h4>
                            </div>
                            <img class="img-responsive" src="dist\images\products\mode\art_6502_0_p01.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="tiles">
                    <div class="thumb">
                        <a href="#">
                            <div class="other-heading">
                                <h4>Prirubnice, kutije</h4>
                            </div>
                            <img class="img-responsive" src="dist\images\products\mode\art_711_p01.png" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div id="configurator-modal" class="modal fade" aria-hidden="true" style="display: none;">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Konfigurator</h4>
                </div>

                <div class="modal-body">
                    <h5>Zid</h5>
                    <div class="product-colors">
                        <div class="selected">
                            <a href="#">
                                <img src="dist/images/colors/crvena.png" width="20" height="20" alt="zelena" />
                                <span>Crvena</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-colors">
                        <div>
                            <a href="single-product.php">
                                <img src="dist/images/colors/zuta.png" width="20" height="20" alt="zuta" />
                                <span>Žuta</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-colors">
                        <div>
                            <a href="#">
                                <img src="dist/images/colors/crna.png" width="20" height="20" alt="zuta" />
                                <span>Crna</span>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <h5>Materijal</h5>
                    <div class="product-colors">
                           <div class="selected">
                            <a href="#">
                                <img src="dist/images/colors/bela.png" width="20" height="20" alt="bela" />
                                <span>Plastika</span>
                            </a>
                        </div>     
                    </div>
                    <div class="product-colors">
                           <div>
                            <a href="#">
                                <img src="dist/images/colors/mahagoni.png" width="20" height="20" alt="bela" />
                                <span>Drvo</span>
                            </a>
                        </div>     
                    </div>
                    <div class="product-colors">
                           <div>
                            <a href="#">
                                <img src="dist/images/colors/metalik-plava.png" width="20" height="20" alt="bela" />
                                <span>Metal</span>
                            </a>
                        </div>     
                    </div>
                    <div class="clearfix"></div>
                    <h5>Maska</h5>
                    <div class="product-colors">
                        <div>
                            <a href="#">
                                <img src="dist/images/colors/bela.png" width="20" height="20" alt="bela" />
                                <span>Bela</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-colors">
                        <div>
                            <a href="#">
                                <img src="dist/images/colors/zelena.png" width="20" height="20" alt="green" />
                                <span>Zelena</span>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <h5>Blok</h5>
                    <div class="product-colors">
                        <div>
                            <a href="#">
                                <img src="dist/images/colors/crna.png" width="20" height="20" alt="crna" />
                                <span>Crna</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-colors">
                        <div>
                            <a href="#">
                                <img src="dist/images/colors/bela.png" width="20" height="20" alt="bela" />
                                <span>Bela</span>
                            </a>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                        <button type="submit" class="btn btn-primary">Konfiguriši</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    </div>
</div>
<?php include 'footer.php'; ?> 