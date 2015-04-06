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
