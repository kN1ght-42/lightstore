<html lang="ru">

<head>
	<title>Доставка</title>
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
						<a href="#" class="bread__crumbs__link bread__crumbs__link--current">Доставка</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Page-headline -->
	<!-- Delivery -->
	<section class="delivery">
		<div class="container">
			<div class="delivery__title delivery__title-page__title">
				<div class="title">Доставка</div>
				<a href="#" class="subtitle__city" id="subtitleCityButton">в Санкт-Петербуге</a>
			</div>
			<div class="delivery__inner">
				<div class="delivery__pros">
					<div class="delivery__pros__item">
						<div class="title">
							Более 100 тыс <br />
							ПВЗ
						</div>
						<img src="./assets/images/defaultSwitcher/delivery/deliveryPros/deliveryPros1.png" alt="" />
					</div>
					<div class="delivery__pros__item">
						<div class="title">
							Курьерская доставка на <br />
							следующий день в город ЦФО
						</div>
						<img src="./assets/images/defaultSwitcher/delivery/deliveryPros/deliveryPros2.png" alt="" />
					</div>
					<div class="delivery__pros__item">
						<div class="title">
							Действуют постоянные <br />
							скидки на доставку
						</div>
						<img src="./assets/images/defaultSwitcher/delivery/deliveryPros/deliveryPros3.png" alt="" />
					</div>
				</div>
				<div class="delivery__inner__main">
					<div class="delivery__header">
						<div class="delivery__slider">
							<div class="delivery__slider__inner">
								<div class="delivery__slider__items">
									<div class="delivery__slider__item">
										<input type="radio" name="deliverySwitcher" id="storeDelivery" checked>
										<label for="storeDelivery">
											<img src="./assets/images/svg/logo.svg" alt="" class="delivery__slider__item__image delivery__slider__item__image--logo" />
											<div class="text">
												<div class="title">
													Доставка
													магазина
												</div>
												<div class="subtitle">
													Для Москвы и МО
												</div>
											</div>
										</label>

									</div>
									<div class="delivery__slider__item">
										<input type="radio" name="deliverySwitcher" id="yandexDelivery">
										<label for="yandexDelivery">

											<img src="./assets/images/delivery/deliveryYandex.png" alt="" class="delivery__slider__item__image" />
										</label>

									</div>
									<div class="delivery__slider__item">
										<input type="radio" name="deliverySwitcher" id="deliveryCdek">

										<label for="deliveryCdek">

											<img src="./assets/images/delivery/deliveryCdek.png" alt="" class="delivery__slider__item__image" />
										</label>
									</div>
									<div class="delivery__slider__item">
										<input type="radio" name="deliverySwitcher" id="deliveryDalil">

										<label for="deliveryDalil">

											<img src="./assets/images/delivery/deliveryDalil.png" alt="" class="delivery__slider__item__image" />
										</label>
									</div>
									<div class="delivery__slider__item">
										<input type="radio" name="deliverySwitcher" id="deliveryDpd">

										<label for="deliveryDpd">

											<img src="./assets/images/delivery/deliveryDPD.png" alt="" class="delivery__slider__item__image" />
										</label>
									</div>
								</div>
								<div class="delivery__slider__buttons">
									<button class="arrow__button prev">
										<svg class="arrow__button__svg">
											<use xlink:href="#arrow" />
										</svg>
									</button>
									<button class="arrow__button next">
										<svg class="arrow__button__svg">
											<use xlink:href="#arrow" />
										</svg>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="delivery__items">
						<div class="delivery__item storeDelivery delivery__item--active">
							<div class="delivery__item__select">
								<label for="manufacturer">Выберите
									производителя</label>
								<select name="manufacturer" id="manufacturer">
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
								</select>
							</div>
							<div class="delivery__item__inner delivery__inner--first">
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
									<div class="text">
										<div class="title">
											Доставка
										</div>
										<ul>
											<li>
												Доставка любого
												матраса и пледа
												фабрики
												Magniflex
												осуществляется -
												бесплатно в
												пределах МКАД
												+40 км.
											</li>
											<li>
												Доставка
												ортопедических
												оснований без
												матраса не
												осуществляется.
											</li>
											<li>
												Доставка на за
												МКАД от 41 км.
												-40 р./км.
											</li>
											<li>
												Наличными при
												получении.
											</li>
											<li>
												Оплата по счёту.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
									<div class="text">
										<div class="title">
											Подъём на этаж
										</div>
										<ul>
											<li>
												Подъем (если
												помещается в
												лифт)
												- бесплатно
											</li>
											<li>
												Подъем (в
												ручную) -
												50р./этаж
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
									<div class="text">
										<div class="title">
											Срок поставки
										</div>
										<ul>
											<li>
												При заказе до
												10:00 - товар
												доставляется в
												день заказа
												(если он на
												складе).
											</li>
											<li>
												При заказе до
												19:00 - доставка
												на следующий
												день.
											</li>
											<li>
												При заказе после
												19:00 - доставка
												происходит через
												день.
											</li>
											<li>
												Вы можете
												выбрать любой
												день доставки
												позже указанных.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
									<div class="text">
										<div class="title">
											Гарантия
										</div>
										<ul>
											<li>15 лет</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="delivery__item yandexDelivery">
							1
							<div class="delivery__item__select">
								<label for="manufacturer">Выберите
									производителя</label>
								<select name="manufacturer" id="manufacturer">
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
								</select>
							</div>
							<div class="delivery__item__inner delivery__inner--first">
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
									<div class="text">
										<div class="title">
											Доставка
										</div>
										<ul>
											<li>
												Доставка любого
												матраса и пледа
												фабрики
												Magniflex
												осуществляется -
												бесплатно в
												пределах МКАД
												+40 км.
											</li>
											<li>
												Доставка
												ортопедических
												оснований без
												матраса не
												осуществляется.
											</li>
											<li>
												Доставка на за
												МКАД от 41 км.
												-40 р./км.
											</li>
											<li>
												Наличными при
												получении.
											</li>
											<li>
												Оплата по счёту.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
									<div class="text">
										<div class="title">
											Подъём на этаж
										</div>
										<ul>
											<li>
												Подъем (если
												помещается в
												лифт)
												- бесплатно
											</li>
											<li>
												Подъем (в
												ручную) -
												50р./этаж
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
									<div class="text">
										<div class="title">
											Срок поставки
										</div>
										<ul>
											<li>
												При заказе до
												10:00 - товар
												доставляется в
												день заказа
												(если он на
												складе).
											</li>
											<li>
												При заказе до
												19:00 - доставка
												на следующий
												день.
											</li>
											<li>
												При заказе после
												19:00 - доставка
												происходит через
												день.
											</li>
											<li>
												Вы можете
												выбрать любой
												день доставки
												позже указанных.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
									<div class="text">
										<div class="title">
											Гарантия
										</div>
										<ul>
											<li>15 лет</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="delivery__item deliveryCdek">
							2
							<div class="delivery__item__select">
								<label for="manufacturer">Выберите
									производителя</label>
								<select name="manufacturer" id="manufacturer">
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
								</select>
							</div>
							<div class="delivery__item__inner delivery__inner--first">
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
									<div class="text">
										<div class="title">
											Доставка
										</div>
										<ul>
											<li>
												Доставка любого
												матраса и пледа
												фабрики
												Magniflex
												осуществляется -
												бесплатно в
												пределах МКАД
												+40 км.
											</li>
											<li>
												Доставка
												ортопедических
												оснований без
												матраса не
												осуществляется.
											</li>
											<li>
												Доставка на за
												МКАД от 41 км.
												-40 р./км.
											</li>
											<li>
												Наличными при
												получении.
											</li>
											<li>
												Оплата по счёту.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
									<div class="text">
										<div class="title">
											Подъём на этаж
										</div>
										<ul>
											<li>
												Подъем (если
												помещается в
												лифт)
												- бесплатно
											</li>
											<li>
												Подъем (в
												ручную) -
												50р./этаж
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
									<div class="text">
										<div class="title">
											Срок поставки
										</div>
										<ul>
											<li>
												При заказе до
												10:00 - товар
												доставляется в
												день заказа
												(если он на
												складе).
											</li>
											<li>
												При заказе до
												19:00 - доставка
												на следующий
												день.
											</li>
											<li>
												При заказе после
												19:00 - доставка
												происходит через
												день.
											</li>
											<li>
												Вы можете
												выбрать любой
												день доставки
												позже указанных.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
									<div class="text">
										<div class="title">
											Гарантия
										</div>
										<ul>
											<li>15 лет</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="delivery__item deliveryDalil">
							3
							<div class="delivery__item__select">
								<label for="manufacturer">Выберите
									производителя</label>
								<select name="manufacturer" id="manufacturer">
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
								</select>
							</div>
							<div class="delivery__item__inner delivery__inner--first">
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
									<div class="text">
										<div class="title">
											Доставка
										</div>
										<ul>
											<li>
												Доставка любого
												матраса и пледа
												фабрики
												Magniflex
												осуществляется -
												бесплатно в
												пределах МКАД
												+40 км.
											</li>
											<li>
												Доставка
												ортопедических
												оснований без
												матраса не
												осуществляется.
											</li>
											<li>
												Доставка на за
												МКАД от 41 км.
												-40 р./км.
											</li>
											<li>
												Наличными при
												получении.
											</li>
											<li>
												Оплата по счёту.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
									<div class="text">
										<div class="title">
											Подъём на этаж
										</div>
										<ul>
											<li>
												Подъем (если
												помещается в
												лифт)
												- бесплатно
											</li>
											<li>
												Подъем (в
												ручную) -
												50р./этаж
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
									<div class="text">
										<div class="title">
											Срок поставки
										</div>
										<ul>
											<li>
												При заказе до
												10:00 - товар
												доставляется в
												день заказа
												(если он на
												складе).
											</li>
											<li>
												При заказе до
												19:00 - доставка
												на следующий
												день.
											</li>
											<li>
												При заказе после
												19:00 - доставка
												происходит через
												день.
											</li>
											<li>
												Вы можете
												выбрать любой
												день доставки
												позже указанных.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
									<div class="text">
										<div class="title">
											Гарантия
										</div>
										<ul>
											<li>15 лет</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="delivery__item deliveryDpd">
							4
							<div class="delivery__item__select">
								<label for="manufacturer">Выберите
									производителя</label>
								<select name="manufacturer" id="manufacturer">
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
									<option>Magniflex</option>
								</select>
							</div>
							<div class="delivery__item__inner delivery__inner--first">
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
									<div class="text">
										<div class="title">
											Доставка
										</div>
										<ul>
											<li>
												Доставка любого
												матраса и пледа
												фабрики
												Magniflex
												осуществляется -
												бесплатно в
												пределах МКАД
												+40 км.
											</li>
											<li>
												Доставка
												ортопедических
												оснований без
												матраса не
												осуществляется.
											</li>
											<li>
												Доставка на за
												МКАД от 41 км.
												-40 р./км.
											</li>
											<li>
												Наличными при
												получении.
											</li>
											<li>
												Оплата по счёту.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
									<div class="text">
										<div class="title">
											Подъём на этаж
										</div>
										<ul>
											<li>
												Подъем (если
												помещается в
												лифт)
												- бесплатно
											</li>
											<li>
												Подъем (в
												ручную) -
												50р./этаж
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
									<div class="text">
										<div class="title">
											Срок поставки
										</div>
										<ul>
											<li>
												При заказе до
												10:00 - товар
												доставляется в
												день заказа
												(если он на
												складе).
											</li>
											<li>
												При заказе до
												19:00 - доставка
												на следующий
												день.
											</li>
											<li>
												При заказе после
												19:00 - доставка
												происходит через
												день.
											</li>
											<li>
												Вы можете
												выбрать любой
												день доставки
												позже указанных.
											</li>
										</ul>
									</div>
								</div>
								<div class="delivery__inner--first__item">
									<img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
									<div class="text">
										<div class="title">
											Гарантия
										</div>
										<ul>
											<li>15 лет</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Delivery -->
	<?php include './assets/includes/defaults/call-request.php'; ?>
	<?php include './assets/includes/defaults/delivery-suggestions.php'; ?>
	<?php include './assets/includes/defaults/our-advantages/our-advantages.php'; ?>
	<?php include './assets/includes/footer.php'; ?>
	<?php include './assets/includes/copyright.php'; ?>
	<?php include './assets/includes/scripts.php'; ?>
</body>

</html>