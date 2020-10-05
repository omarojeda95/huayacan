<?= view('includes/head'); ?>
<?= view('includes/fb'); ?>

<!-- pageWrapper -->
<div id="pageWrapper">
    <!-- pageHeader -->
    <?= view('includes/header') ?>
    <!-- searchPopup -->
    <main>
        <!-- bannerSec -->
        <section id="Home" class="bannerSec overflow-hidden">
            <!-- bannerSlide -->
            <div class="bannerSlide d-block">
                <!-- bannerWrap -->
                <div class="bannerWrap overlay d-flex position-relative overflow-hidden">
                    <div class="alignCenter w-100 d-flex align-items-center">
                        <div class="container pt-25 pb-14 pt-sm-33 pb-sm-20">
                            <div class="caption position-relative text-white">
                                <h1 class="h1 text-uppercase text-white mb-4">
                                    <strong class="d-block font-weight-bold mb-n1 mb-sm-2">La casa del</strong>
                                    <strong class="d-block font-weight-bold">Ahumador</strong>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <span class="bgImg bgCover position-absolute" style="background-image: url(<?= base_url() ?>/public/assets/images/slider001.jpg)"></span>
                </div>
            </div>
        </section>
        <!-- abUsSec -->
        <section id="About" class="abUsSec py-12 py-md-15 py-xl-19">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- header -->
                        <header class="header text-center mb-8 mb-md-10 mb-xl-14">
                            <h2 class="mb-5">
                                <strong class="h6 font-weight-light mb-3 text-danger text-capitalize d-block fontRoboto">Nosotros</strong>
                                <strong class="text-uppercase d-block">Fabricantes Ahumadores</strong>
                            </h2>
                            <span class="bdrBtmImg d-block position-relative mx-auto"></span>
                        </header>
                    </div>
                </div>
                <div class="row mb-3 mb-sm-5 mb-lg-7 mb-xl-9">
                    <div class="col-12 col-lg-10 offset-lg-1 text-center">
                        <p>Somos una empresa dedicada a la fabricación metálica en la ciudad de Lima - Perú. Somos varios profesionales del metal y esto se refleja en nuestros trabajos.</p>
                        <p>Nuestros ahumadores de acero se diferencian por su robustez y están pensados para utilizarlos con fuego de leña pero por supuesto también podrá utilizar carbón vegetal. Todas las partes del ahumador están unidas por fuertes soldaduras y no empleamos ningún tipo de tornillería. Los ahumadores Huayacan se envían listos para ser utilizados y por supuesto no requieren montaje. </p>
                        <p>Todos nuestros ahumadores de acero son personalizables para que se ajusten al uso que usted le va a dar. Usted podrá modificar el tipo de ruedas, poner contrapesos, bandejas exteriores, personalizar su quemador con distintas funciones, etc.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ourSec -->
        <!-- <aside id="Portfolio" class="customerService position-relative overlay d-flex">
            <div class="alignCenter w-100 d-flex align-items-center">
                <div class="container py-12">
                    <div class="row">
                        <div class="col-12 col-lg-8 offset-lg-2">
                            <blockquote class="cstmrHolder text-center text-white mx-xl-n6 fontPoppins mb-0">
                                <q class="d-block text-uppercase fwSemibold mb-1">In Our Works, We Take Attention to Every Details to Deliver the Best Service to Our Customers</q>
                                <cite class="author fontRoboto"><a href="javascript:void(0);">- Team Leader @PrexTheme</a></cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <span class="bgImg bgCover position-absolute" style="background-image: url(images/img02.jpg);"></span>
        </aside>
        <section class="pt-12 pt-md-15 pt-xl-19">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="header text-center mb-8 mb-md-10 mb-xl-14">
                            <h2 class="mb-5 mb-md-7">
                                <strong class="h6 font-weight-light mb-3 text-danger text-capitalize d-block fontRoboto">Productos</strong>
                                <strong class="text-uppercase d-block">Todos nuestro producto</strong>
                            </h2>
                            <span class="bdrBtmImg d-block position-relative mx-auto"></span>
                        </header>
                    </div>
                    <div class="col-12">
                        <ul class="filterNav filter-button-group list-unstyled fwSemibold fontPoppins text-uppercase mb-5 mb-xl-7 d-flex flex-wrap justify-content-center">
                            <li class="nav-item mb-2"><a class="filterBtn is-checked" data-filter="*" href="javascript:void(0);">todos</a></li>
                            <li class="nav-item mb-2"><a class="filterBtn" data-filter=".transition" href="javascript:void(0);">ahumadores</a></li>
                            <li class="nav-item mb-2"><a class="filterBtn" data-filter=".design" href="javascript:void(0);">tablas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gridFilterWrap d-flex flex-wrap">
                <div class="element-item overflow-hidden transition web" data-category="transition web">
                    <div class="d-block imgHolder w-100">
                        <a href="images/img09.jpg" data-fancybox="gallery" data-caption="Mockup Can Design"><img src="<?= base_url() ?>/public/assets/images/img09.jpg" class="img-fluid" alt="image description"></a>
                        <div class="overbgBTxt position-absolute">
                            <h3>
                                <strong class="fwSemibold px-3 d-inline-block h4 mb-0 d-block"><a href="javascript:void(0);">Mockup Can Design</a></strong>
                                <strong class="fontRoboto px-3 d-inline-block designType text-white">Design - Branding</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="element-item overflow-hidden overlay">
                    <div class="d-block imgHolder w-100">
                        <img src="<?= base_url() ?>/public/assets/images/img10.jpg" class="img-fluid" alt="image description">
                        <div class="overTxt position-absolute">
                            <h3>
                                <strong class="fwSemibold d-block h4 d-block mb-2"><a href="images/img10.jpg" data-fancybox="gallery" data-caption="Mockup Can Design">Mockup Can Design</a></strong>
                                <strong class="fontRoboto d-block designType text-white">Design - Branding</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="element-item overflow-hidden">
                    <div class="d-block imgHolder w-100">
                        <a href="images/img11.jpg" data-fancybox="gallery" data-caption="Mockup Can Design"><img src="<?= base_url() ?>/public/assets/images/img11.jpg" class="img-fluid" alt="image description"></a>
                        <div class="overbgBTxt position-absolute">
                            <h3>
                                <strong class="fwSemibold px-3 d-inline-block h4 mb-0 d-block"><a href="javascript:void(0);">Mockup Can Design</a></strong>
                                <strong class="fontRoboto px-3 d-inline-block designType text-white">Design - Branding</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="element-item overflow-hidden transition overlay design photo" data-category="transition design photo">
                    <div class="d-block imgHolder w-100">
                        <img src="<?= base_url() ?>/public/assets/images/img12.jpg" class="img-fluid" alt="image description">
                        <div class="overTxt position-absolute">
                            <h3>
                                <strong class="fwSemibold d-block h4 d-block mb-2"><a href="images/img12.jpg" data-fancybox="gallery" data-caption="Mockup Can Design">Mockup Can Design</a></strong>
                                <strong class="fontRoboto d-block designType text-white">Design - Branding</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="element-item overflow-hidden transition web" data-category="transition web">
                    <div class="d-block imgHolder w-100">
                        <a href="images/img13.jpg" data-fancybox="gallery" data-caption="Mockup Can Design"><img src="<?= base_url() ?>/public/assets/images/img13.jpg" class="img-fluid" alt="image description"></a>
                        <div class="overbgBTxt position-absolute">
                            <h3>
                                <strong class="fwSemibold px-3 d-inline-block h4 d-block mb-0"><a href="javascript:void(0);">Mockup Can Design</a></strong>
                                <strong class="fontRoboto px-3 d-inline-block designType text-white">Design - Branding</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="element-item overflow-hidden transition overlay design" data-category="transition design">
                    <div class="d-block imgHolder w-100">
                        <img src="<?= base_url() ?>/public/assets/images/img14.jpg" class="img-fluid" alt="image description">
                        <div class="overTxt position-absolute">
                            <h3>
                                <strong class="fwSemibold d-block h4 d-block mb-2"><a href="images/img14.jpg" data-fancybox="gallery" data-caption="Mockup Can Design">Mockup Can Design</a></strong>
                                <strong class="fontRoboto d-block designType text-white">Design - Branding</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="element-item overflow-hidden transition photo" data-category="transition photo">
                    <div class="d-block imgHolder w-100">
                        <a href="images/img15.jpg" data-fancybox="gallery" data-caption="Mockup Can Design"><img src="<?= base_url() ?>/public/assets/images/img15.jpg" class="img-fluid" alt="image description"></a>
                        <div class="overbgBTxt position-absolute">
                            <h3>
                                <strong class="fwSemibold px-3 d-inline-block h4 d-block mb-0"><a href="javascript:void(0);">Mockup Can Design</a></strong>
                                <strong class="fontRoboto px-3 d-inline-block designType"> text-whiteDesign - Branding</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="element-item overflow-hidden overlay app web" data-category="app web">
                    <div class="d-block imgHolder w-100">
                        <img src="<?= base_url() ?>/public/assets/images/img16.jpg" class="img-fluid" alt="image description">
                        <div class="overTxt position-absolute">
                            <h3>
                                <strong class="fwSemibold d-block h4 d-block mb-2"><a href="images/img16.jpg" data-fancybox="gallery" data-caption="Mockup Can Design">Mockup Can Design</a></strong>
                                <strong class="fontRoboto d-block designType text-white">Design - Branding</strong>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Team -->
        <!-- <section id="Team" class="py-12 py-md-15 py-xl-19">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="header text-center mb-8 mb-md-10 mb-xl-14">
                            <h2 class="mb-5 mb-md-7">
                                <strong class="h6 font-weight-light mb-3 text-danger text-capitalize d-block fontRoboto">Productos</strong>
                                <strong class="text-uppercase d-block">Todos nuestos productos</strong>
                            </h2>
                            <span class="bdrBtmImg d-block position-relative mx-auto"></span>
                        </header>
                    </div>
                </div>
                <div class="row d-block">
                    <div class="teamSlider">
                        <div>
                            <div class="col-12">
                                <article class="teamBlock overlay position-relative overflow-hidden">
                                    <span class="imgWrap d-block w-100">
                                        <img src="<?= base_url() ?>/public/assets/images/img05.jpg" class="img-fluid" alt="image description">
                                    </span>
                                    <div class="position-absolute textDetail w-100 text-center">
                                        <h3 class="mb-4">
                                            <strong class="text-capitalize d-block name h3 mb-2"><a href="javascript:void(0);">mark smith</a></strong>
                                            <strong class="text-capitalize fontRoboto d-block font-weight-normal text-white desination">co founder</strong>
                                        </h3>
                                        <ul class="list-unstyled mb-0 d-flex justify-content-center socialNetworks">
                                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <article class="teamBlock overlay position-relative overflow-hidden">
                                    <span class="imgWrap d-block w-100">
                                        <img src="<?= base_url() ?>/public/assets/images/img06.jpg" class="img-fluid" alt="image description">
                                    </span>
                                    <div class="position-absolute textDetail w-100 text-center">
                                        <h3 class="mb-4">
                                            <strong class="text-capitalize d-block name h3 mb-2"><a href="javascript:void(0);">mark smith</a></strong>
                                            <strong class="text-capitalize fontRoboto d-block font-weight-normal text-white desination">co founder</strong>
                                        </h3>
                                        <ul class="list-unstyled mb-0 d-flex justify-content-center socialNetworks">
                                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <article class="teamBlock overlay position-relative overflow-hidden">
                                    <span class="imgWrap d-block w-100">
                                        <img src="<?= base_url() ?>/public/assets/images/img07.jpg" class="img-fluid" alt="image description">
                                    </span>
                                    <div class="position-absolute textDetail w-100 text-center">
                                        <h3 class="mb-4">
                                            <strong class="text-capitalize d-block name h3 mb-2"><a href="javascript:void(0);">mark smith</a></strong>
                                            <strong class="text-capitalize fontRoboto d-block font-weight-normal text-white desination">co founder</strong>
                                        </h3>
                                        <ul class="list-unstyled mb-0 d-flex justify-content-center socialNetworks">
                                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <article class="teamBlock overlay position-relative overflow-hidden">
                                    <span class="imgWrap d-block w-100">
                                        <img src="<?= base_url() ?>/public/assets/images/img06.jpg" class="img-fluid" alt="image description">
                                    </span>
                                    <div class="position-absolute textDetail w-100 text-center">
                                        <h3 class="mb-4">
                                            <strong class="text-capitalize d-block name h3 mb-2"><a href="javascript:void(0);">mark smith</a></strong>
                                            <strong class="text-capitalize fontRoboto d-block font-weight-normal text-white desination">co founder</strong>
                                        </h3>
                                        <ul class="list-unstyled mb-0 d-flex justify-content-center socialNetworks">
                                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-12 pt-md-15 pt-xl-19 pb-7 pb-xl-10 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="header text-center mb-8 mb-md-10 mb-xl-13">
                            <h2 class="mb-5 mb-md-7">
                                <strong class="h6 font-weight-light mb-3 text-danger text-capitalize d-block fontRoboto">Our skills</strong>
                                <strong class="text-uppercase d-block">awesome skills</strong>
                            </h2>
                            <span class="bdrBtmImg d-block position-relative mx-auto"></span>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <article class="skillProgress overflow-hidden mb-7 mb-lg-10">
                            <h4 class="mb-3 heading2 $font-weight-normal">
                                <strong class="d-inline-block text-uppercase">ui design</strong>
                                <strong class="d-inline-block float-right prsnt text-uppercase">90%</strong>
                            </h4>
                            <div class="progressBar d-block">
                                <div class="wow over fadeInLeft" style="width: 90%;" data-wow-delay="0.6s"></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6">
                        <article class="skillProgress overflow-hidden mb-7 mb-lg-10">
                            <h4 class="mb-3 heading2 $font-weight-normal">
                                <strong class="d-inline-block text-uppercase">art design</strong>
                                <strong class="d-inline-block float-right prsnt text-uppercase">99%</strong>
                            </h4>
                            <div class="progressBar d-block">
                                <div class="wow over fadeInLeft" style="width: 99%;" data-wow-delay="0.6s"></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6">
                        <article class="skillProgress overflow-hidden mb-7 mb-lg-10">
                            <h4 class="mb-3 heading2 $font-weight-normal">
                                <strong class="d-inline-block text-uppercase">app development</strong>
                                <strong class="d-inline-block float-right prsnt text-uppercase">85%</strong>
                            </h4>
                            <div class="progressBar d-block">
                                <div class="wow over fadeInLeft" style="width: 85%;" data-wow-delay="0.6s"></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6">
                        <article class="skillProgress overflow-hidden mb-7 mb-lg-10">
                            <h4 class="mb-3 heading2 $font-weight-normal">
                                <strong class="d-inline-block text-uppercase">social marketing</strong>
                                <strong class="d-inline-block float-right prsnt text-uppercase">70%</strong>
                            </h4>
                            <div class="progressBar d-block">
                                <div class="wow over fadeInLeft" style="width: 70%;" data-wow-delay="0.6s"></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6">
                        <article class="skillProgress overflow-hidden mb-7 mb-lg-10">
                            <h4 class="mb-3 heading2 $font-weight-normal">
                                <strong class="d-inline-block text-uppercase">corporate identity</strong>
                                <strong class="d-inline-block float-right prsnt text-uppercase">65%</strong>
                            </h4>
                            <div class="progressBar d-block">
                                <div class="wow over fadeInLeft" style="width: 65%;" data-wow-delay="0.6s"></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6">
                        <article class="skillProgress overflow-hidden mb-7 mb-lg-10">
                            <h4 class="mb-3 heading2 $font-weight-normal">
                                <strong class="d-inline-block text-uppercase">web development</strong>
                                <strong class="d-inline-block float-right prsnt text-uppercase">80%</strong>
                            </h4>
                            <div class="progressBar d-block">
                                <div class="wow over fadeInLeft" style="width: 80%;" data-wow-delay="0.6s"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- cHBlock -->
        <!-- <article class="cHBlock bg-danger py-8 py-md-10">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-sm-flex align-items-center text-center text-sm-left">
                        <h3 class="h3 fwSemibold text-white text-uppercase mb-3 mb-sm-0 flex-grow-1">The Most Featured Works Recommended to You to Explore It Today!</h3>
                        <a href="javascript:void(0);" class="btn flex-shrink-0 btn-white mx-auto rounded-pill text-uppercase font-weight-bold ml-sm-3 ml-md-5">contact us</a>
                    </div>
                </div>
            </div>
        </article> -->
        <!-- Testimonial -->
        <!-- <section id="Testimonial" class="py-12 py-md-15 py-xl-19">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="header text-center mb-8 mb-md-10 mb-xl-14">
                            <h2 class="mb-5 mb-md-7">
                                <strong class="h6 font-weight-light mb-3 text-danger text-capitalize d-block fontRoboto">testimonials</strong>
                                <strong class="text-uppercase d-block">our clients</strong>
                            </h2>
                            <span class="bdrBtmImg d-block position-relative mx-auto"></span>
                        </header>
                    </div>
                </div>
                <div class="row d-block">
                    <div class="clientSlider">
                        <div>
                            <div class="col-12">
                                <article class="clntBlock bg-light text-center px-3 px-sm-2 py-6 py-lg-8 py-xl-10 px-md-6">
                                    <span class="d-block imgHolder overflow-hidden rounded-circle mx-auto mb-2 mb-md-3">
                                        <img src="<?= base_url() ?>/public/assets/images/img17.png" class="img-fluid" alt="image description">
                                    </span>
                                    <h5 class="mb-3 mb-md-4">
                                        <strong class="fwSemibold d-block text-capitalize mb-md-1 author">
                                            <a href="javascript:void(0);">Mark Smith</a>
                                        </strong>
                                        <strong class="fontRoboto d-block desination font-weight-normal">Envato Inc.</strong>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elit dolor, eleifend in feugiat quis, lobortis ac libero. Nullam ut.</p>
                                    <ul class="list-unstyled ratingList mb-0 justify-content-center d-flex">
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <article class="clntBlock bg-light text-center px-3 px-sm-2 py-6 py-lg-8 py-xl-10 px-md-6">
                                    <span class="d-block imgHolder overflow-hidden rounded-circle mx-auto mb-2 mb-md-3">
                                        <img src="<?= base_url() ?>/public/assets/images/img18.png" class="img-fluid" alt="image description">
                                    </span>
                                    <h5 class="mb-3 mb-md-4">
                                        <strong class="fwSemibold d-block text-capitalize mb-md-1 author">
                                            <a href="javascript:void(0);">Vera Duncan</a>
                                        </strong>
                                        <strong class="fontRoboto d-block desination font-weight-normal">PayPal Inc.</strong>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elit dolor, eleifend in feugiat quis, lobortis ac libero. Nullam ut.</p>
                                    <ul class="list-unstyled ratingList mb-0 justify-content-center d-flex">
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <article class="clntBlock bg-light text-center px-3 px-sm-2 py-6 py-lg-8 py-xl-10 px-md-6">
                                    <span class="d-block imgHolder overflow-hidden rounded-circle mx-auto mb-2 mb-md-3">
                                        <img src="<?= base_url() ?>/public/assets/images/img19.png" class="img-fluid" alt="image description">
                                    </span>
                                    <h5 class="mb-3 mb-md-4">
                                        <strong class="fwSemibold d-block text-capitalize mb-md-1 author">
                                            <a href="javascript:void(0);">Bryce Vaughn</a>
                                        </strong>
                                        <strong class="fontRoboto d-block desination font-weight-normal">Google Inc.</strong>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elit dolor, eleifend in feugiat quis, lobortis ac libero. Nullam ut.</p>
                                    <ul class="list-unstyled ratingList mb-0 justify-content-center d-flex">
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <article class="clntBlock bg-light text-center px-3 px-sm-2 py-6 py-lg-8 py-xl-10 px-md-6">
                                    <span class="d-block imgHolder overflow-hidden rounded-circle mx-auto mb-2 mb-md-3">
                                        <img src="<?= base_url() ?>/public/assets/images/img18.png" class="img-fluid" alt="image description">
                                    </span>
                                    <h5 class="mb-3 mb-md-4">
                                        <strong class="fwSemibold d-block text-capitalize mb-md-1 author">
                                            <a href="javascript:void(0);">Vera Duncan</a>
                                        </strong>
                                        <strong class="fontRoboto d-block desination font-weight-normal">PayPal Inc.</strong>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elit dolor, eleifend in feugiat quis, lobortis ac libero. Nullam ut.</p>
                                    <ul class="list-unstyled ratingList mb-0 justify-content-center d-flex">
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                        <li><a href="javascript:void(0);" class="fas fa-star"></a></li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- twitHolder -->
        <!-- <section class="twitHolder overlay position-relative d-flex">
            <div class="alignCenter d-flex w-100 align-items-center">
                <div class="container py-12">
                    <div class="row">
                        <div class="col-12 col-lg-10 offset-lg-1 textHolder position-relative text-center text-white">
                            <span class="fab mb-5 mb-md-7 mb-xl-10 text-white fa-twitter ico"></span>
                            <h6 class="h4 text-white mb-3 mb-md-3">
                                <strong class="fwSemibold d-block mb-2">RT <span class="text-danger">@SeanBlanda:</span> The kind folks at <span class="text-danger"> @envato </span> interviewed me about the content and editorial we're </strong>
                                <strong class="fwSemibold d-block">building at <span class="text-danger"> @InVisionApp </span> https://t.co/bpF3dU</strong>
                            </h6>
                            <cite class="twitteBy fontRoboto">@Envato</cite>
                        </div>
                    </div>
                </div>
            </div>
            <span class="bgImg bgCover position-absolute" style="background-image: url(images/img41.jpg);"></span>
        </section> -->
        <!-- Contact -->
        <!-- <section id="Contact" class="py-12 py-md-15 py-xl-19">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="header text-center mb-8 mb-md-10 mb-xl-14">
                            <h2 class="mb-5 mb-md-7">
                                <strong class="h6 font-weight-light mb-3 text-danger text-capitalize d-block fontRoboto">contact us</strong>
                                <strong class="text-uppercase d-block">get in touch</strong>
                            </h2>
                            <span class="bdrBtmImg d-block position-relative mx-auto"></span>
                        </header>
                    </div>
                    <div class="contactForm w-100">
                        <form id="contactForm" data-toggle="validator">
                            <div class="row">
                                <div class="col-12 col-xl-10 offset-xl-1 d-flex flex-wrap">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group m-0">
                                            <input id="name" type="text" class="form-control rounded-0 border-0" placeholder="Your Name" required data-error="NEW ERROR MESSAGE">
                                        </div>
                                        <div class="form-group m-0">
                                            <input id="email" type="email" class="form-control rounded-0 border-0" placeholder="Your Email *" required data-error="NEW ERROR MESSAGE">
                                        </div>
                                        <div class="form-group m-0">
                                            <input type="tel" id="tel" class="form-control rounded-0 border-0" placeholder="Your Phone *" required data-error="NEW ERROR MESSAGE">
                                        </div>
                                        <select>
                                            <option value="01">500 - 3.000 $</option>
                                            <option value="02">3000 - 6.000 $</option>
                                            <option value="03">500 - 3.000 $</option>
                                            <option value="04">3000 - 6.000 $</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <textarea name="message" id="message" class="form-control rounded-0 border-0" placeholder="Your Message *" required data-error="NEW ERROR MESSAGE"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div id="msgSubmit" class="form-message hidden"></div>
                                    </div>
                                    <div class="col-12 text-right mt-2">
                                        <button class="btn btn-danger text-uppercase rounded-pill font-weight-bold" type="submit" id="form-submit">send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- mapHolder -->
        <div class="mapHolder" id="Contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.339048842498!2d-77.01586358578817!3d-12.020163444677477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf5e56893457%3A0xcc85ab83c965de7c!2sCanto%20Grande%20556%2C%20Cercado%20de%20Lima%2015404!5e0!3m2!1ses!2spe!4v1600750490614!5m2!1ses!2spe" style="border:0;" allowfullscreen="">
            </iframe>
        </div>
    </main>
    <!-- footerAreaWrap -->
    <div class="footerAreaWrap">
        <!-- footerArea -->
        <?= view('includes/footer') ?>
    </div>
</div>
<?= view('includes/foot') ?>