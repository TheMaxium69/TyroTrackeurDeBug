<?php include "db.php";



if(  isset($_GET['postId'])  ){

    $postId = $_GET['postId'];

    $maRequeteArticleUnique = "SELECT * FROM bug WHERE id=$postId";

    $leResultatDeMaRequeteArticleUnique = mysqli_query($maConnection, $maRequeteArticleUnique);
}else{    //effectuer une requete SQL pour récupérer TOUS les posts

    $maRequete = "SELECT * FROM bug";

    $leResultatDeMaRequete = mysqli_query($maConnection, $maRequete);


}

?>

