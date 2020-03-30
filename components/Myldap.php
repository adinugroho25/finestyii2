<?php
namespace app\components;
use Yii;
use yii\base\Component;
use yii\helpers\Html;

class Myldap extends Component{
	public $err_msg = "";
	

	function connect($servername, $ldap_port)
	{
		$ds = @ldap_connect($servername,$ldap_port);  // must be a valid LDAP server!
		return $ds;
	}
	
	function bind($ds,$rdn,$pwd)
	{
		if (!$ds)
			return FALSE;
		$r = @ldap_bind($ds,$rdn,$pwd);
		return $r;
	}
	
	function close($ds)
	{
		@ldap_close($ds);
	}
	
	function set_error($err_str)
	{
		$this->err_msg = $err_str;
	}
	
	function clear_error()
	{
		$this->err_msg = '';
	}
	
	function get_last_error()
	{
		return $this->err_msg;
	}
	
	function authenticate($ds,$rdn,$pwd,$port='389')
	{
		$ldap_con = $this->connect($ds,$port);
		if ($ldap_con == FALSE)
		{
			return ldap_error($ldap_con);
		}
		$ldap_bind = $this->bind($ldap_con,$rdn,$pwd);
		if ($ldap_bind == FALSE)
		{
			return ldap_error($ldap_con);
		}
		$this->close($ldap_con);
		return "Login Success";
	}
	
	
}
?>