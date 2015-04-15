<?php
  require_once '../model/model.php';
  require_once '../lib/funLibrary.php';
  
  if (isset($_POST['action'])){
      $action = $_POST['action'];
  }
  else if(isset($_GET['action'])){
      $action = $_GET['action'];
  }
  else{
      include '../view/index.php';
  }
      
  
  switch($action){
      case 'About' :
          include '../view/ANAbout.php';
          break;
      case 'Admin':
          include '../view/ANAdmin.php';
          break;
      case 'AddMusic':
           addSong();
           break;
      case 'EmailSend':
          include '../view/ANEmailsend.php';
          break;
      case 'FileManagement':
          include '../view/ANFileUpload.php';
          break;
      case 'IndividualRecord':
          displayOneRecord();
          break;
      case 'Ideas':
          include '../view/ANIdeas.php';
          break;
      case 'ListMusic':
           listMusic();
           break;
      case 'Music':
          include '../view/ANMusic.php';
          break;
      case 'Newsletter':
          include '../view/ANNewsletter.php';
          break;
      case 'ProcessAddEdit':
          processAddEdit();
          break;
      case 'ProcessRegisterMember':
      processRegisterMember();
          //include '../view/ANProcessRegisterMember.php';
          break;
      case 'SearchMusic':
           //include '../view/searchMusic.php';
      searchMusic();
           break;
      case 'SignIn':
          include '../view/ANSignup.php';
		      break;
      case 'UnderConstruction':
          include '../view/ANUnderConstruction.php';
          break;
      case 'Checksheet':
          include '../view/checksheet.php';
          break;
      case 'navinclude':
          include '../view/navinclude.php';
          break;
      case 'ProcessFileUpload':
          include '../view/processFileUpload.php';
           break;
      default:
          include('../view/index.php');
  }

function addSong()
{
  $mode = "add";
  $ArtistName = "";
  $TrackName = "";
  $AlbumName = "";
  $Rating = 0.0;
  $ReleaseDate = "";
  $IsLocalBand = "N";//Local To PA, default No
  $FilePath = "";//This will be programmatically grabbed
  $FileMimeType = "";//This will be programmatically grabbed

  include '../view/editMusic.php';//Form called edit but also used for add
}
function editSong()
{
  $mode = "edit";
}

function displayOneRecord()
{
  $musicID = $_GET['ID'];
  if(!isset($musicID))
  {
    $errorMessage = 'You Must Provide a ID to display';
    include'../view/errorPage.php';
  }
  else
  {
    $row = getOneMusicRecord($musicID);
    if($row == false)
    {
      $errorMessage = 'That ID was not found.';
      include '../view/errorPage.php';
    }
    else
    {
      include'../view/individualRecord.php';
    }
  }
}

function listMusic()
{
  $listType = $_GET['ListType'];
  if($listType == 'Local')
  {
    $results =searchLocalBand();
  }
  elseif($listType == 'GeneralSearch')
  {
    $results =generalSearch($_GET['Criteria']);
  }
  else
  {
    $results = getAllMusic();
  }
  //$results = getAllMusic();
  if(count($results)==0)
  {
    $errorMessage = "No Records Found";
    include '../view/errorPage.php';
  }
  else if (count($results) == 1) {
      $row = $results[0];
      include '../view/individualRecord.php';
    }
  else
  {
    include '../view/listForm.php';
  }
}

function processRegisterMember()
{
  $firstName = $_POST['FirstName'];
  $lastName = $_POST['LastName'];
  $email = $_POST['Email'];

  if (empty($firstName)) {
        echo "<h3>You must provide a first name to be registered.</h3>";
  } else {
    if (empty($lastName)) {
            $msg = "You must your last name to join!";
    } else if (empty ($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg = "You must provide a valid email address to register.";
    } else {
            saveMemberInfo($firstName, $lastName, $email);
            $msg = "Congratulations, $firstName! You're all signed up.";
            $memberArray = getMembers();

    }
    //echo "<h3>$msg</h3>"; 
    include '../view/ANProcessRegisterMember.php';


    }
}

function processAddEdit()
{
  print_r($_POST);
  print_r($_FILES['userfile']['type']);
  //print($_FILES['userfile']);
  //print($FilePath);
  //print($FileMimeType);
  $ArtistName = $_POST['Artist'];
  $TrackName = $_POST['Song'];
  $AlbumName = $_POST['Album'];
  $Rating = $_POST['Rating'];//Cant not be a numeric float due to bootstrap rating system
  $ReleaseDate = $_POST['ReleaseDate'];
  if(isset($_POST['IsLocal']))
  {
     $IsLocalBand = "Y";
  }
  else
  {$IsLocalBand = "N";}
  
  //Validation
  $errorLog = "";//
  if(empty($ArtistName) || strlen($ArtistName) > 50)
  {
    $errorLog .= "\\n* Artitst Name is required and must not be longer than 50 Characters.";
  }
  if(empty($AlbumName) || strlen($AlbumName) > 50)
  {
    $errorLog .= "\\n* Album Name is required and must not be longer than 50 Characters.";
  }
  if(empty($TrackName) || strlen($TrackName) > 50)
  {
    $errorLog .= "\\n* Song Name is required and must not be longer than 50 Characters.";
  }
  if(empty($ReleaseDate) || !strtotime($ReleaseDate))
  {
    $errorLog .= "\\n* Release Date is required and needs to be a valid date.";
  }
  //if there is no file then tell the user to select one 
  /* if($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE)
  {
    $errorLog .= "\\n* No Song File Has Been Selected For Upload. Please choose one and Retry.";
  }
  else if (($_FILES['userfile']['type']=="audio/mpeg") OR ($_FILES['userfile']['type']=="audio/wav") OR ($_FILES['userfile']['type']=="audio/mp4a-latm") )
  {//When Here a file has been uploaded AND it is of the correct type so process and add
    $musicDir = '../music/';
    $uploadedFile = $musicDir . $_FILES['userfile']['name']; 
    $FileMimeType = '"' . $_FILES['userfile']['type'] . '"';
    //do not do this move until we validate all fields
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
    $FilePath = '"' . $uploadedFile . '"';

    //echo'<p>Song Succesfully Uploaded</p>';
  }
  else
  {
    $errorLog .= "\\n* Sorry You Did not Upload A Correct File Type.";
    //include '../view/errorPage.php'; 
  } */
  if($errorLog != "")
  {
    include '../view/editMusic.php';
  }

  //$FilePath = "";//This will be programmatically grabbed
  //$FileMimeType = "";//This will be programmatically grabbed
  //processSongUpload();
}

function processSongUpload()
{
  //if there is no file then tell the user to select one
  if($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE)
  {
      //echo "<p>Please choose a file first and then try again...</p>";
    $errorMessage = "No Song File Has Been Selected For Upload. Please choose one and Retry";
    include '../view/errorPage.php';
  }
  else if (($_FILES['userfile']['type']=="audio/mpeg") OR ($_FILES['userfile']['type']=="audio/wav") OR ($_FILES['userfile']['type']=="audio/mp4a-latm") )
  {//When Here a file has been uploaded AND it is of the correct type so process and add
    $musicDir = '../music/';
    $uploadedFile = $musicDir . $_FILES['userfile']['name']; 
    //do not do this move until we validate all fields
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
    echo'<p>Song Succesfully Uploaded</p>';
  }
  else
  {
    $errorMessage = "Sorry You Did not Upload A Correct File Type.";
    include '../view/errorPage.php';
  }
}


/*
 //This function deals with processing images
                    function processImages()
                    {
                        //Define the directory
                        $imagesDir = "../HomepageImages/";
                        //Grab the name of the file and set up its path
                        $uploadedFile = $imagesDir . $_FILES['userfile']['name'];
                        //grab information needed to check if the image is correct size
                        $image_info = getimagesize($_FILES['userfile']['tmp_name']);
                        $image_width = $image_info[0];                                       
                        $image_height = $image_info[1]; 
                        //Check the width(matters more than height) if its wrong notify user
                        if($image_width <1297)
                        {
                            echo"<p>Sorry, that image is not wide enough(must be larger than 1297px width)</p>";
                        }
                        //else move the file into the directory and notify user of success
                        else
                        {
                            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
                            echo'<p>Image Succesfully Uploaded</p>';
                            
                            //Get the directory of the images
                            $current_dir = '../HomepageImages';
                            //Open it
                            $dir = opendir($current_dir);
                            //Read all files there and add them to an array
                            while(false !== ($file = readdir($dir))){
                                    //strip out the two entries of . and ..
                                    if($file != "." && $file != ".."){
                                            $imageArray[] = $file;//will be using this to print the directory
                                    }
                            }
                            //When done close the directory
                            closedir($dir);
                            echo '<div style="text-align:center"> <p>Current File Listing</p> ';
                            //For every file in the directory, print its name so user knows what is there
                            foreach ($imageArray as $image) 
                            {
                               print($image . "<br>");
                            }
                            echo '</div>';//Close the div from the first echo containg "Current File Listing"
                        }
                        
                    }

*/






function searchMusic() {
    $results = getAllMusic();
    if (count($results) == 0) {
      $errorMessage = "No Records Found";
      include '../view/errorPage.php';
    } else {
      include '../view/searchMusic.php';
    }   
  }
?>
