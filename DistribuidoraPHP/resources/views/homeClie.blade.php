<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/css/uikit.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet"/>

    <title>Gestão de controle de Hotel</title>
</head>

<body>
    <header>
        <nav class="uk-navbar-container">

            <div class="uk-container">

                <div uk-navbar>

                    <div class="uk-navbar-center">

                        <div class="uk-navbar-center-left">

                            <ul class="uk-navbar-nav">

                                <li class="uk-active">

                                    <a href="#">Active</a>

                                </li>

                                <li>
                                    <a href="#">Parent</a>

                                    <div class="uk-navbar-dropdown">

                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-active"><a href="#">Active</a></li>
                                            <li><a href="#">Item</a></li>
                                            <li><a href="#">Item</a></li>
                                        </ul>

                                    </div>

                                </li>

                            </ul>

                        </div>

                        <a class="uk-navbar-item uk-logo" href="#"><p style="color: brown;">BOI BRABO</p></a>

                        <div class="uk-navbar-center-right">

                            <ul class="uk-navbar-nav">
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </nav>

    </header>

    <main>
        <section>
        <div class="container my-5">
            <header class="mb-4">
            <h3>Bovinos</h3>
            </header>

            <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/1.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
                    <p class="card-text">$790.50</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="{{route('show-cadastrar-pedido')}}" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/2.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Canon camera 20x zoom, Black color EOS 2000</h5>
                    <p class="card-text">$320.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/3.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Xiaomi Redmi 8 Original Global Version 4GB</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/4.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Apple iPhone 12 Pro 6.1" RAM 6GB 512GB Unlocked</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/5.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Apple Watch Series 1 Sport Case 38mm Black</h5>
                    <p class="card-text">$790.50</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/6.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Gaming Headset 32db Blackbuilt in mic</h5>
                    <p class="card-text">$99.50</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">teste teste teste teste teste teste teste</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="" class="btn btn-primary shadow-0 me-1">Comprar</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
</main>

<footer>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit-icons.min.js"></script>

</body>

</html>