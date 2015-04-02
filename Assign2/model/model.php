<?php
	
    function getDBconnection()
    {
    	$dsn='mysql:host=localhost;dbname=s_jgbeck_audionexusdb';
    	$username = 'root';
    	$password = '';
    	try
    	{
    		$db= new PDO($dsn,$username,$password);
    	}
    	catch(PDOExeption $e)
    	{
            $errorMessage= $e->getMessage();
            include '../view/errorPage.php';
            die;
    	}
    	return $db;
    }
    function getAllMusic()
    {
    	try
    	{
    		$db = getDBconnection();
    		$query = "select artistName, albumName, trackName, releaseDate froms_jgbeck_audionexusdb.music order by artistName ";
    		$statement = $db->prepare($query);
    		$statement -> execute();
    		$results= $statement->fetchAll();
    		$statement->closeCursor();
    		return $results
    	}
    	catch(PDOExeption $e)
    	{
    		$errorMessage = $e->getMessage();
    		include '../view/errorPage.php';
    		die;
    	}
    }
	function generalSearch($keyword)
	{
		try
		{
			$db = getDBconnection();
		$query = "SELECT *
		          FROM Music
				  WHERE artistName LIKE :keyword OR
				       albumName LIKE  :keyword OR
				       trackName LIKE :keyword";
		$statement = $db->prepare($query);
		$statement->BindValue(':keyword',"$keyword");
		$statement->execute();
		$results = $statement->$fetchAll();
		$statement->closeCursor();
		return $results	
			
		}
		catch(PDOExeption $e)
		{
    		$errorMessage = $e->getMessage();
    		include '../view/errorPage.php';
    		die;
    	}
		
	}
	function searchGoodRating($keyword)
	{
		try
		{
		$db = getDBconnection();
		$query = "SELECT 
		          FROM Music
				  WHERE rating > 4.0 
				  order by artistName";
		$statement = $db->prepare($query);
		$statement->BindValue(':keyword',"$keyword");
		$statement->execute();
		$results = $statement->$fetchAll();
		$statement->closeCursor();
		return $results	
			
		}
		catch(PDOExeption $e)
		{
    		$errorMessage = $e->getMessage();
    		include '../view/errorPage.php';
    		die;
    	}
		
	}
	function searchLocalBand($keyword)
	{
		try
		{
		$db = getDBconnection();
		$query = "SELECT 
		          FROM Music
				  WHERE isLocal = 'Y'
				  order by artistName";
		$statement = $db->prepare($query);
		$statement->BindValue(':keyword',"$keyword");
		$statement->execute();
		$results = $statement->$fetchAll();
		$statement->closeCursor();
		return $results	
			
		}
		catch(PDOExeption $e)
		{
    		$errorMessage = $e->getMessage();
    		include '../view/errorPage.php';
    		die;
    	}
		
	}
	
	function getMembers() {
		$file = fopen('../DataFiles/members.csv', 'rb');
			while (($data = fgetcsv($file)) !== FALSE) {
				$memberArray[] = array($data[0], $data[1], $data[2]);
			}
		fclose($file);		
		return $memberArray;
	}
	function saveMemberInfo($firstName, $lastName, $email) {
		$file = fopen('../DataFiles/members.csv', 'ab');
		fputcsv($file, 
			array($firstName, $lastName, $email));
		fclose($file);		
	}
?>
