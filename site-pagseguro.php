<?php
	
	use \Hcode\Page;
	use \Hcode\Model\User;
	use \Hcode\Model\Order;
	use \Hcode\PagSeguro\Config;
	use \Hcode\PagSeguro\Transporter;
	use \Hcode\PagSeguro\Document;
	use \Hcode\PagSeguro\Phone;
	use \Hcode\PagSeguro\Address;
	use \Hcode\PagSeguro\Sender;
	use \Hcode\PagSeguro\Shipping;
	use \Hcode\PagSeguro\CreditCard;
	use \Hcode\PagSeguro\Item;
	use \Hcode\PagSeguro\Payment;
	use \Hcode\PagSeguro\Bank;	
	use \Hcode\PagSeguro\CreditCard\Holder;
	use \Hcode\PagSeguro\CreditCard\Installment;

	$app->post( '/payment/notification', function() {

		Transporter::getNotification( $_POST[ 'notificationCode' ], $_POST[ 'notificationType' ] );

	});

	$app->get( '/payment/success/debit', function() {
	
		User::verifyLogin( false );

		$order = new Order;
		$order->getFromSession();
		$order->get( (int)$order->getidorder() );

		$page = new Page();
		$page->setTpl( 'payment-success-debit', [
			'order' => $order->getValues()
		] );

	});

	$app->get( '/payment/success/boleto', function() {
	
		User::verifyLogin( false );

		$order = new Order;
		$order->getFromSession();
		$order->get( (int)$order->getidorder() );

		$page = new Page();
		$page->setTpl( 'payment-success-boleto', [
			'order' => $order->getValues()
		] );

	});

	$app->get( '/payment/success', function() {
	
		User::verifyLogin( false );

		$order = new Order;
		$order->getFromSession();

		$page = new Page();
		$page->setTpl( 'payment-success', [
			'order' => $order->getValues()
		] );

	});

	# Rota para o pagamento do pagseguro com débito.
	$app->post( '/payment/debit', function() {

		User::verifyLogin( false );

		$order = new Order();
		$order->getFromSession();

		// Recarregando as informações do pedido.
		$order->get( (int)$order->getidorder() );

		$address = $order->getAddress();

		$cart = $order->getCart();

		$cpf = new Document( Document::CPF, $_POST[ 'cpf' ] );

		$phone = new Phone( $_POST[ 'ddd' ], $_POST[ 'phone' ] );

		$shippingAddress = new Address( 
			$address->getdesaddress(), 
			$address->getdesnumber(), 
			$address->getdescomplement(),
			$address->getdesdistrict(), 
			$address->getdeszipcode(), 
			$address->getdescity(), 
			$address->getdesstate(), 
			$address->getdescountry()
		);

		$birthDate = new DateTime( $_POST[ 'birth' ] );

		$sender = new Sender( 
			$order->getdesperson(), 
			$cpf, 
			$birthDate, 
			$phone, 
			$order->getdesemail(),
			$_POST[ 'hash' ] );

		$shipping = new Shipping( $shippingAddress, Shipping::PAC, (float)$cart->getvlfreight() );

		$payment = new Payment( $order->getidorder(), $sender, $shipping );

		foreach ( $cart->getProducts() as $product ) {
			
			$item = new Item(
				(int)$product[ 'idproduct' ],
				$product[ 'desproduct' ],
				(float)$product[ 'vlprice' ],
				(int)$product[ 'nrqtd' ]
			);

			$payment->addItem( $item );

		}

		$bank = new Bank( $_POST[ 'bank' ] );

		$payment->setBank( $bank );

		Transporter::sendTransaction( $payment );

		echo json_encode( [ 'success' => true ] );

	});

	# Rota para o pagamento do pagseguro com boletos.
	$app->post( '/payment/boleto', function() {

		User::verifyLogin( false );

		$order = new Order();
		$order->getFromSession();

		// Recarregando as informações do pedido.
		$order->get( (int)$order->getidorder() );

		$address = $order->getAddress();

		$cart = $order->getCart();

		$cpf = new Document( Document::CPF, $_POST[ 'cpf' ] );

		$phone = new Phone( $_POST[ 'ddd' ], $_POST[ 'phone' ] );

		$shippingAddress = new Address( 
			$address->getdesaddress(), 
			$address->getdesnumber(), 
			$address->getdescomplement(),
			$address->getdesdistrict(), 
			$address->getdeszipcode(), 
			$address->getdescity(), 
			$address->getdesstate(), 
			$address->getdescountry()
		);

		$birthDate = new DateTime( $_POST[ 'birth' ] );

		$sender = new Sender( 
			$order->getdesperson(), 
			$cpf, 
			$birthDate, 
			$phone, 
			$order->getdesemail(),
			$_POST[ 'hash' ] );

		$shipping = new Shipping( $shippingAddress, Shipping::PAC, (float)$cart->getvlfreight() );

		$payment = new Payment( $order->getidorder(), $sender, $shipping );

		foreach ( $cart->getProducts() as $product ) {
			
			$item = new Item(
				(int)$product[ 'idproduct' ],
				$product[ 'desproduct' ],
				(float)$product[ 'vlprice' ],
				(int)$product[ 'nrqtd' ]
			);

			$payment->addItem( $item );

		}

		$payment->setBoleto();

		Transporter::sendTransaction( $payment );

		echo json_encode( [ 'success' => true ] );

	});

	# Rota para o pagamento do pagseguro com cartão de crédito.
	$app->post( '/payment/credit', function() {

		User::verifyLogin( false );

		$order = new Order();
		$order->getFromSession();

		// Recarregando as informações do pedido.
		$order->get( (int)$order->getidorder() );

		$address = $order->getAddress();

		$cart = $order->getCart();

		$cpf = new Document( Document::CPF, $_POST[ 'cpf' ] );

		$phone = new Phone( $_POST[ 'ddd' ], $_POST[ 'phone' ] );

		$shippingAddress = new Address( 
			$address->getdesaddress(), 
			$address->getdesnumber(), 
			$address->getdescomplement(),
			$address->getdesdistrict(), 
			$address->getdeszipcode(), 
			$address->getdescity(), 
			$address->getdesstate(), 
			$address->getdescountry()
		);

		$birthDate = new DateTime( $_POST[ 'birth' ] );

		$sender = new Sender( 
			$order->getdesperson(), 
			$cpf, 
			$birthDate, 
			$phone, 
			$order->getdesemail(),
			$_POST[ 'hash' ] );

		$holder = new Holder( $order->getdesperson(), $cpf, $birthDate, $phone );

		$shipping = new Shipping( $shippingAddress, Shipping::PAC, (float)$cart->getvlfreight() );

		$installment = new Installment( (int)$_POST[ "installments_qtd" ], (float)$_POST[ "installments_value" ] );

		$billingAddress = new Address(
			$address->getdesaddress(), 
			$address->getdesnumber(), 
			$address->getdescomplement(),
			$address->getdesdistrict(), 
			$address->getdeszipcode(), 
			$address->getdescity(), 
			$address->getdesstate(), 
			$address->getdescountry()
		);

		$creditCard = new CreditCard( $_POST[ 'token' ], $installment, $holder, $billingAddress );

		$payment = new Payment( $order->getidorder(), $sender, $shipping );

		foreach ( $cart->getProducts() as $product ) {
			
			$item = new Item(
				(int)$product[ 'idproduct' ],
				$product[ 'desproduct' ],
				(float)$product[ 'vlprice' ],
				(int)$product[ 'nrqtd' ]
			);

			$payment->addItem( $item );

		}

		$payment->setCreditCard( $creditCard );

		Transporter::sendTransaction( $payment );

		echo json_encode( [ 'success' => true ] );

		//$dom = $payment->getDOMDocument();
		//$test = $payment->getDOMElement();
		//$testNode = $dom->importNode( $test, true );
		//$dom->appendChild( $testNode );
		//echo $dom->saveXml();

	});

	# Rota para o leiaute de pagamento.
	$app->get( '/payment', function() {

		User::verifyLogin( false );

		$order = new Order();
		$order->getFromSession();

		$years = [];

		for ( $y = date( 'Y' ); $y < date( 'Y') + 14; $y++ )
		{

			array_push( $years, $y );

		}

		$page = new Page();

		$page->setTpl( "payment", [
			"order"     => $order->getValues(),
			"msgError"  => Order::getError(),
			"years"     => $years,
			"pagseguro" => [
				"urlJS" => Config::getUrlJS(),
				"id"    => Transporter::createSession(),
				"maxInstallmentNoInterest" => Config::MAX_INSTALLMENT_NO_INTEREST,
				"maxInstallment"           => Config::MAX_INSTALLMENT
			]
		]);

	} );

	// Rota para obter uma sessão com o pagseguro. Apenas para testes.
	/*$app->get( '/payment/pagseguro', function() {

		$client = new Client();

		// Obtendo uma sessão com o PagSeguro.
		$res = $client->request( 'POST', Config::getUrlSessions() . "?" . http_build_query( Config::getAuthentication() ), [ 'verify' => false ] );
		
		echo $res->getBody()->getContents();

	} );*/

?>