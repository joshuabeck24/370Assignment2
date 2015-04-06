<?php
	
	function toDisplayDate($date)
	{
		if($phpDate = strtotime($date))
		{return date('m/d/Y',$phpDate);}
	    else
	    {
	    	return "";
	    }
	}


?>