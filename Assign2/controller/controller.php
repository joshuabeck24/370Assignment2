<?php
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
      case 'Ideas':
          include '../view/ANIdeas.php';
          break;
      case 'Music':
          include '../view/ANMusic.php';
          break;
      case 'Newsletter':
          include '../view/ANNewsletter.php';
          break;
      case 'ProcessRegisterMember':
          include '../view/ANProcessRegisterMember.php';
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
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

