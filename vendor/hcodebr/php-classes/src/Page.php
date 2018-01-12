<?php 

namespace Hcode;

use Rain\Tpl;
use \Hcode\Model\Category;
use \Hcode\Model\Cart;
use \Hcode\Model\Product;

class Page {

	private $tpl;
	private $options = [];
	private $defaults = [ "header"        => true,
		                  "footer"        => true,
		                  "categories"    => [],
		                  "cart_values"   => [],
		                  "cart_products" => [],
		                  "famous_dishes" => [],
		                  "data"          => []
	                    ];

	public function __construct( $opts = array(), $tpl_dir = "/views/" )
	{
		
		$this->options = array_merge( $this->defaults, $opts );

		// Carregando as categorias que irão aparecer no menu do site.
		$categories = Category::listAllAvailableMenu();
		$this->options[ "categories" ] = Category::checkList( $categories );

		// Carregando os produtos famosos que irão aparecer no rodapé da página.
		$famous_dishes = Product::listAllFamousDishes();
		$this->options[ "famous_dishes" ] = Product::checkList( $famous_dishes );

		// Obtendo o carrinho do usuário.
		$cart = Cart::getFromSession();
		$this->options[ "cart_values" ]   = $cart->getValues();
		$this->options[ "cart_products" ] = Product::checkList( $cart->getProducts() );

		$config = array(
		    "base_url"  => null,
		    "tpl_dir"   => $_SERVER[ 'DOCUMENT_ROOT' ].$tpl_dir,
		    "cache_dir" => $_SERVER[ 'DOCUMENT_ROOT' ]."/views-cache/",
		    "debug"     => false
		);

		Tpl::configure( $config );

		$this->tpl = new Tpl();

		if ( isset( $this->options[ 'page' ] ) ) $this->tpl->assign( "page", $this->options[ 'page' ] ); 

		if ( $this->options[ 'data' ] ) $this->setData( $this->options[ 'data' ] );

		if ( $this->options[ 'categories' ] ) $this->tpl->assign( "categories", $this->options[ 'categories' ] ); 

		if ( $this->options[ 'famous_dishes' ] ) $this->tpl->assign( "famous_dishes", $this->options[ 'famous_dishes' ] ); 

		if ( $this->options[ 'cart_values' ] ) $this->tpl->assign( "cart_values", $this->options[ 'cart_values' ] ); 

		if ( $this->options[ 'cart_products' ] ) $this->tpl->assign( "cart_products", $this->options[ 'cart_products' ] ); 

		if ( $this->options[ 'header' ] === true ) $this->tpl->draw( "header", false );

	}

	public function __destruct()
	{

		if ( $this->options[ 'footer' ] === true ) $this->tpl->draw( "footer", false );

	}

	private function setData( $data = array() )
	{

		foreach( $data as $key => $val )
		{

			$this->tpl->assign( $key, $val );

		}

	}

	public function setTpl( $tplname, $data = array(), $returnHTML = false )
	{

		$this->setData( $data );

		return $this->tpl->draw( $tplname, $returnHTML );

	}

}

 ?>