<?php
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_MONETARY,"pt_BR", "ptb");

extract($_POST); 
extract($_GET);

class DBConnection extends PDO
{
    public function __construct()
    {
		try{
			$DBhost = "lebeau.hmnoc.net";
			$DBname = "atlaswar_banhodegato";
			$DBuser = "atlaswar_global";
			$DBpass = "m8tpIWD&h#V?";
			parent::__construct("mysql:host=".$DBhost.";dbname=".$DBname.";charset=utf8;",$DBuser, $DBpass);
			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $i)
		{
			echo 'Error: ' . $i->getMessage();
		}
	}
}

