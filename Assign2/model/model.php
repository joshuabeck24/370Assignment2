<?php
	

function generalSearch($keyword)
    {
        try
        {
            $db = getDBconnection();
            $query = "select * from s_jgbeck_audionexusdb.music where artistName like :keyword or albumName like  :keyword or trackName like :keyword";       
            $statement = $db->prepare($query);
            $statement->bindValue(':keyword',"%$keyword%");
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results;   
        }
        catch(PDOExeption $e)
        {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
        
    }

    function getDBconnection()
    {
    	$dsn='mysql:host=localhost;dbname=s_jgbeck_audionexusdb';
    	$username = 'root';
    	$password = '1234';
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
    		$query = "select ID, artistName, albumName, trackName, releaseDate from s_jgbeck_audionexusdb.music order by artistName ";
    		$statement = $db->prepare($query);
    		$statement -> execute();
    		$results= $statement->fetchAll();
    		$statement->closeCursor();
    		return $results;
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
    function getOneMusicRecord($musicID)
    {
        try
        {
            $db = getDBconnection();
            $query = "select * from s_jgbeck_audionexusdb.music where ID = :musicID";
            $statement = $db->prepare($query);
            $statement->bindValue(':musicID',$musicID);
            $statement -> execute();
            $result= $statement->fetch();
            $statement->closeCursor();
            return $result;
        }
        catch(PDOExeption $e)
        {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
    }

    function insertMusic($albumName,$artistName,$filePath,$fileType,$isLocalBand,$rating,$releaseDate,$trackName)
    {
        //try
        //{
            $db = getDBconnection();
            $query = 'insert into s_jgbeck_audionexusdb.music (albumName, artistName,filePath,fileType,isLocalBand,rating,releaseDate,trackName)
                      values (:albumName, :artistName, :filePath,:fileType, :isLocalBand, :rating, :releaseDate, :trackName)';
            $statement = $db->prepare($query);
            $statement->bindValue(':albumName',$albumName);
            $statement->bindValue(':artistName',$artistName);
            $statement->bindValue(':filePath',$filePath);
            $statement->bindValue(':fileType',$fileType);
            $statement->bindValue(':isLocalBand',$isLocalBand);
            $statement->bindValue(':rating',$rating);
            $statement->bindValue(':releaseDate',$releaseDate);
            $statement->bindValue(':trackName',$trackName);
            $success = $statement->execute();
            $statement->closeCursor();
            if($success)
            {
                return $db->lastInsertId();//Get generated ID sent back to controller
            }
            else
            {
                logSQLError($statement->errorInfo());
            }

        /*}
        catch(PDOExeption $e)
        {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }*/
    }
    function logSQLError($errorInfo)
    {
        $errorMessage = $errorInfo[2];//sql error (we dont want to show)
        $errorMessage = 'There was an issue with the upload. Please retry.';//Tell them something went wrong instead
        include '../view/errorPage.php';
        //die(); Not needed
    }
	function saveMemberInfo($firstName, $lastName, $email) {
		$file = fopen('../DataFiles/members.csv', 'ab');
		fputcsv($file, 
			array($firstName, $lastName, $email));
		fclose($file);		
	}

    function searchLocalBand()
    {
        try
        {
            $db = getDBconnection();
            $query = "select * from s_jgbeck_audionexusdb.music where isLocalBand = 'Y' order by artistName";
            $statement = $db->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results;
        }
        catch(PDOExeption $e)
        {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
        
    }
?>
