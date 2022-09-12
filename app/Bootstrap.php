<?php

	class Bootstrap {

		private static $instance = null;

		private $arguments = [];
		private $mode = 'web';

		private function __construct(){
			self::$instance = $this;
		}

		public static function App($mode = 'web' , array $arguments = []) {

			self::$instance->arguments = $arguments;
			self::$instance->mode = $mode;



		}

		public static function Get() : Bootstrap{
			if ( !self::$instance ) {
				return new Bootstrap();
			}
			return self::$instance;
		}

	}

?>