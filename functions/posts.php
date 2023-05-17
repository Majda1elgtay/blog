<?
include '../functions/connect.php';

function getAllPosts()
{
    // 1-connexion vers la BD
    $conn = connect();
    // 2-creation de la requette 
    $requette = "SELECT * FROM posts";
    // 3-execution de la requette
    $resultat = $conn->query($requette);
    // 4-resultat de la requette
    $posts = $resultat->fetchAll();
    return $posts;
}