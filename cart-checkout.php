<? include("head.php");?>

<body class="page-cart page-white">

<div class="container">
	<? include("header.php");?>

	<main class="">
		<div class="main-content height-viewport">

			<form class="main-content-inner uk-flex uk-flex-column uk-form" action="" method="post">


				<!--<ul class="checkout-tab uk-tab uk-flex-item-none uk-grid uk-grid-width-medium-1-3 uk-margin-large-bottom" >
				    <li class="uk-active"><a href="">КОНТАКТНЫЕ ДАННЫЕ</a></li>
				    <li><a href="">АДРЕС ДОСТАВКИ</a></li>
				    <li><a href="">ОПЛАТА</a></li>
				</ul>-->

				<ul id="checkout-tabs" class="checkout-list "> <!-- uk-switcher uk-flex-item-1 -->
					<li class="uk-margin-bottom">
						<h3>КОНТАКТНЫЕ ДАННЫЕ</h3>
						<div class="checkout-contacts uk-grid uk-grid-width-medium-1-3 uk-form-stacked">
							<div class="">
						        <label class="uk-form-label" for="name">Ваше имя и фамилия</label>
						        <div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="name" id="name" required oninvalid="setCustomValidity('Укажите свое имя')"></div>
						    </div>
							<div class="">
						        <label class="uk-form-label" for="email">Email</label>
						        <div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="email" id="email" required oninvalid="setCustomValidity('Укажите свой email')"></div>
						    </div>
							<div class="">
						        <label class="uk-form-label" for="phone">Номер телефона</label>
						        <div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="phone" id="phone" required oninvalid="setCustomValidity('Номер телефона')"></div>
						    </div>
						</div>
				    </li>
					<li class="uk-margin-bottom">
						<h3>АДРЕС ДОСТАВКИ</h3>
						<div class="checkout-delivery">
							<ul class="delivery-options uk-tab uk-flex-item-none uk-flex uk-grid-width-medium-1-2 uk-margin-large-bottom" data-uk-tab="{connect:'#checkout-delivery'}" data-uk-check-display data-uk-grid-match={target:"a.delivery-option"}>
								<li class=" uk-active">
									<a class="delivery-option" href="">
										<h3>САМОВЫВОЗ ИЗ ПУНКТА ВЫДАЧИ</h3>
										<p class="delivery-option-description">В рабочие часы центра исполнения заказов, с возможностью дополнительных сервисов</p>
									</a>
								</li>
								<li class="">
									<a class="delivery-option" href="">
										<h3>ЗАКАЗАТЬ ДОСТАВКУ</h3>
										<p class="delivery-option-description">Доставка в удобное для вас место и время. <br>Оплата наличными или банковской картой прямо на месте</p>
									</a>
								</li>
							</ul>
							<ul id="checkout-delivery" class="uk-switcher uk-flex-item-1">
								<li>
									<div class="checkout-contacts uk-grid uk-grid-width-medium-1-3 uk-form-stacked">
										<div class="">
											<label class="uk-form-label" for="name">Страна</label>
											<div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="country" id="country" required oninvalid="setCustomValidity('Выберите страну')"></div>
										</div>
										<div class="">
											<label class="uk-form-label" for="email">Регион</label>
											<div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="region" id="region" required oninvalid="setCustomValidity('Регион')"></div>
										</div>
										<div class="">
											<label class="uk-form-label" for="phone">Город</label>
											<div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="city" id="city" required oninvalid="setCustomValidity('Город')"></div>
										</div>
										<!--Тут список пунктов выдачи сдэк-->
									</div>

								</li>
								<li>
									<div class="checkout-contacts uk-grid uk-grid-width-medium-1-3 uk-form-stacked">
										<div class="">
											<label class="uk-form-label" for="name">Город</label>
											<div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="country" id="country" required oninvalid="setCustomValidity('Выберите страну')"></div>
										</div>
										<div class="">
											<label class="uk-form-label" for="email">Индекс</label>
											<div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="region" id="region" required oninvalid="setCustomValidity('Регион')"></div>
										</div>
										<div class="">
											<label class="uk-form-label" for="phone">Адрес</label>
											<div class="uk-form-controls"><input class="uk-width-1-1" type="text" name="city" id="city" required oninvalid="setCustomValidity('Город')"></div>
										</div>
									</div>
								</li>
							</ul>

						</div>
				    </li>
					<li>
						<h3>ОПЛАТА</h3>
						<div class="checkout-payment">
							<ul class="payment-options uk-tab uk-flex-item-none uk-flex uk-grid-width-medium-1-2 uk-margin-large-bottom" data-uk-tab data-uk-check-display data-uk-grid-match={target:"a.payment-option"}>
								<li class=" uk-active">
									<a class="payment-option" href="">
										<div class="payment-option-image">
											<img src="images/Yandex_RU_Reg.svg" alt="">
										</div>
										<p class="payment-option-description">Банковские карты, электронные деньги, интернет-банки, наличные и другие способы оплаты на Яндексе</p>
									</a>
								</li>
								<li class="">
									<a class="payment-option" href="">
										<div class="payment-option-image">
											<img src="images/payment-offline.svg" alt="">
										</div>
										<p class="payment-option-description">Вы можете оплатить свой заказ наличными или картой курьеру.<br />Или оплатить покупку в пункте выдачи.</p>
									</a>
								</li>
							</ul>
						</div>
				    </li>
				</ul>


				<div class="cart-total uk-flex-item-none">
					<div class="cart-total-wrap">
						<div class="cart-total-title uk-h3">ТОВАРОВ НА СУММУ</div>
						<div class="cart-total-value">8880 Р</div>
					</div>
					<div class="cart-total-wrap">
						<div class="cart-total-title uk-h3">ДОСТАВКА</div>
						<div class="cart-total-value">8880 Р</div>
					</div>
					<div class="cart-total-wrap">
						<div class="cart-total-title uk-h3">ИТОГОВАЯ СУММА</div>
						<div class="cart-total-value">8880 Р</div>
					</div>
					<div class="cart-total-button"><button type="submit" class="cart-checkout-button uk-button uk-button-primary">Далее</button></div>
				</div>

			</form>
		</div>

	</main>



</div>

<? include("footer.php"); ?>
