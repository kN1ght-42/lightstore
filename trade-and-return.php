<html lang="en">

<head>
    <title>Обмен и возврат</title>
    <?php include './assets/includes/head.php'; ?>
</head>

<body>
    <?php include './assets/includes/feedback-modal-window.php'; ?>
    <?php include './assets/includes/order-modal-window.php'; ?>
    <?php include './assets/includes/header.php'; ?>
    <!-- Page-headline -->
    <section class="page-headline">
        <div class="container">
            <div class="page-headline__inner page-headline__inner--cart">
                <div class="page-headline__left">
                    <button class="back__link">
                        <svg class="back__link__svg">
                            <use xlink:href="#arrow" />
                        </svg>
                    </button>
                    <div class="bread__crumbs">
                        <a href="#" class="bread__crumbs__link">Главная</a>
                        <span>/</span>
                        <a href="#" class="bread__crumbs__link bread__crumbs__link--current">Обмен и возврат</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page-headline -->
    <!-- Trade-and-return -->
    <section class="trade-and-return">
        <div class="container">
            <div class="trade-and-return__inner">
                <div class="trade-and-return__title">Обмен и возврат</div>
                <div class="trade-and-return__text">
                    При покупке товара в интернет-магазине Магазин-Света.рф
                    права покупателей регламентируются “Законом о защите
                    прав потребителей” от 07.02.1992 № 2300-1 (ред. от
                    11.06.2021). Согласно Статье 26.1. товар, приобретенный
                    дистанционным способом (через интернет), подлежит
                    возврату в течении 7 дней с момента покупки, а обмену -
                    в течении 14 дней. Возврат денежных средств производится
                    в течении 10 (чаще раньше) дней после вывоза товара.
                </div>
            </div>
        </div>
    </section>
    <!-- /Trade-and-return -->
    <?php include './assets/includes/defaults/block-links.php'; ?>
    <?php include './assets/includes/defaults/call-request.php'; ?>
    <?php include './assets/includes/defaults/delivery-suggestions.php'; ?>
    <?php include './assets/includes/defaults/our-advantages/our-advantages.php'; ?>
    <?php include './assets/includes/footer.php'; ?>
    <?php include './assets/includes/copyright.php'; ?>
    <?php include './assets/includes/scripts.php'; ?>
</body>

</html>