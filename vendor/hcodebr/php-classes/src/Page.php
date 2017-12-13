<?php 

namespace Hcode;

use Rain\Tpl;
use \Hcode\Model\Category;

class Page {

	private $tpl;
	private $options = [];
	private $defaults = [ "header"     => true,
		                  "footer"     => true,
		                  "categories" => [],
		                  "data"       => []
	                    ];

	public function __construct( $opts = array(), $tpl_dir = "/views/" )
	{
		
		$this->options = array_merge( $this->defaults, $opts );

		$categories = Category::listAll();
		$this->options[ "categories" ] = $categories;

		//var_dump( $this->options[ "categories" ][0] );
		//exit();

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

		if ( $this->options[ 'categories' ] ) $this->setData( $this->options[ 'categories' ][0] );

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