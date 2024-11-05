<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'configuration.php';
include ('models/question.php');

class QuestionC{

/********************************************Function afficher question*****************************************/
Function afficher_questions(){
    
   
    
	$sql="SELECT * FROM questions ORDER BY question_content";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
		die('Erreur: '.$e->getMessage());
	}   
}

//*****************************************Function récupérer question***********************************************
Function recuperer_question($id){

    $sql="SELECT * FROM questions WHERE question_id='$id' LIMIT 1" ;
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }

}

//*****************************************Function supprimer question***********************************************
function supprimer_question($id){
    $sql = "DELETE FROM questions WHERE question_id ='$id' ";
    $db = config::getConnexion();
    
    $query = $db->prepare($sql);
    try{
        $query->execute();
    }
    catch(Exception $e){
        die('Erreuer: '.$e->getMessage());
    }

}

//***********************************************Fuction ajouter_question**************************************
function ajouter_question($question){
    $sql = "INSERT INTO questions(question_content ,date_added, lesson_id) VALUES ( :question_content ,:date_added ,:lesson_id )";
    $db = config::getConnexion();
    try{
    $req = $db->prepare($sql);
        $req->execute([
            
            'question_content' => $question->getquestion_content(),
            'date_added' => $question->getdate_added(),
            'lesson_id' => $question->getlesson_id()
        ]);
     
        $_SESSION['update_question'] = "";
        header("Location: ../views/dash_instructor-chapter-add.php");
    }
    catch(Exception $e){
        die('Erreuer: '.$e->getMessage());
    }

}

function rechercher($recherche)
		{
			$sql="SELECT question_content FROM questions where question_content like $recherche% ";
			$db =config::getConnexion();
			try{
			 $list=$db->query($sql);
			 return $list;
			}
			  catch (Exception $e)
		 { die('Erreur:'.$e->getMessage());}
		}


/*
function modifier_question($question, $question_id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE questions SET 
                question_content= :question_content, 
               
            WHERE question_id= :question_id'
        );
        $query->execute([
            'question_content' => $question->getquestion_content(),
         
           
            
        ]);
    } catch (PDOException $e) {
        $e->getMessage();
    }
}*/











}//end class QuestionC



?>
