<?= view('includes/head'); ?>
<?= view('includes/fb'); ?>

<!-- pageWrapper -->
<div id="pageWrapper">
    <!-- pageHeader -->
    <?= view('includes/header-other') ?>
    <!-- searchPopup -->
    <main>
        <!-- abUsSec -->
        <section id="About" class="abUsSec pt-12 pt-md-15 pt-xl-19">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- header -->
                        <header class="header text-center mb-8 mb-md-10 mb-xl-14">
                            <h2 class="mb-5">
                                <strong class="text-uppercase d-block">Tabla de picar</strong>
                                <!-- <strong class="h6 font-weight-light mb-3 text-danger text-capitalize d-block fontRoboto">S/. 180.00</strong> -->
                            </h2>
                            <span class="bdrBtmImg d-block position-relative mx-auto"></span>
                        </header>
                    </div>
                </div>
                <div class="row mb-3 mb-sm-5 mb-lg-7 mb-xl-9">
                    <div class="col-12 col-lg-6 text-center my-auto">
                        <h2 class="text-uppercase d-block"><b>Características</b></h2>
                        <p>
                            Medidas: 50 x 33 x 2
                            <br>
                            Madera: Nogal
                        </p>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <img src="<?= base_url() ?>/public/assets/images/products/tabla-de-picar.jpg" alt="" width="100%">
                    </div>
                    <div class="col-12 text-center py-12">
                        <a href="<?=base_url()?>/#filter=.table" class="btn btn-danger text-uppercase rounded-pill fwSemibold" tabindex="-1">Regresar</a>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- footerAreaWrap -->
    <div class="footerAreaWrap">
        <!-- footerArea -->
        <?= view('includes/footer') ?>
    </div>
</div>
<?= view('includes/foot') ?>