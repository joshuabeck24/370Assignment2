<?php
	
	function toDisplayDate($date)
	{
		if($phpDate = strtotime($date))
		{return date('m/d/Y',$phpDate);}
	    else
	    {return "";}
	}
    function toMySQLDate($date)
    {
    	if($phpDate = strtotime($date))
    	{return date('Y-m-d',$phpDate);}
        else
	    {return "";}
    }

    function unquote()
    {
    	if(get_magic_quotes_gpc())
    	{
    		function stripcslashes_gpc(&$value)
    		{
    			$value = stripcslashes($value);
    		}
    		array_walk_recursive($_GET, 'stripcslashes_gpc');
    		array_walk_recursive($_POST, 'stripcslashes_gpc');
    		array_walk_recursive($_COOKIE, 'stripcslashes_gpc');
    		array_walk_recursive($_REQUEST, 'stripcslashes_gpc');
    	}
    }

?>