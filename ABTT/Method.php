<?php
	namespace ABTT;
	class Method{
		public function __construct()
		{
			if($_SERVER['REQUEST_METHOD'] == 'POST'
				&& ( isset($_POST['_method']) || isset($_POST['_METHOD']) ))
			{
				$method = strtoupper($_POST['_method']);
				if($method == 'PUT' || $method == 'DELETE')
				{
					$_SERVER['REQUEST_METHOD'] = $method;
				}
			}
		}
		
		public function post()
		{
			if(strtoupper(__FUNCTION__) == $_SERVER['REQUEST_METHOD'])
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function get()
		{
			if(strtoupper(__FUNCTION__) == $_SERVER['REQUEST_METHOD'])
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function put()
		{
			if(strtoupper(__FUNCTION__) == $_SERVER['REQUEST_METHOD'])
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function delete()
		{
			if(strtoupper(__FUNCTION__) == $_SERVER['REQUEST_METHOD'])
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
	}