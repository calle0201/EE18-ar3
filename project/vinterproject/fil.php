<?php
/*
* PHP version 7
* @category   
* @author     Carl Edenflod <Carl.edenflodhoglund@elev.ga.ntig.se>
* @license    PHP CC
*/
include "./resurser/conn.php";

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vinterprojekt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
  <h1>sök på artist</h1>
  <p>efter du har tryckt en gång kommer korekta album till artisten upp</p>
  <form action="#" method="POST">
  <select name="artist" id="artist">
  <?php
  $artistId = filter_input(INPUT_POST, 'artist', FILTER_SANITIZE_STRING);
  $albumId = filter_input(INPUT_POST, 'album', FILTER_SANITIZE_STRING);
  
      $sql = "SELECT artist, id FROM artist";
      $result = $conn->query($sql);
      
      while ($rad = $result->fetch_assoc()) {
        echo "<option value=\"$rad[id]\"";  
        echo $artistId == "$rad[id]" ?  "selected" : "$artistId"; 
        echo ">$rad[artist]</option>";
    }


    ?>
</select>
<?php

  
  
 if ($artistId) {
  $artistAlbum = "SELECT artist, album  FROM album JOIN artist WHERE artist.id='$artistId' AND album.artist_id='$artistId'";
  $songAlbum = "SELECT artist, song, album, song_length  FROM album JOIN songs, artist WHERE artist.id='$artistId' AND songs.album_id='$albumId' AND album.album_id='$albumId'";
  if ($artistAlbum) {
  

    echo "<select name=\"album\" id=\"album\">";
    
    $sql = "SELECT album, album_id FROM album JOIN artist WHERE artist.id=$artistId AND album.artist_id=$artistId";
    $result = $conn->query($sql);
    
          while ($rad = $result->fetch_assoc()) {
            
            echo "<option value=\"$rad[album_id]\"";
            echo $albumId == "$rad[album_id]" ?  "selected" : "$albumId"; 
           echo ">$rad[album]</option>";
        }
        
    echo "</select>";
   
   

 } else {
   # code...
 }
 

}

?>
<button type="submit" value="submit">submit</button>
  </form>
  
   
   <?php 
  echo "<table class=\"table table-striped\">";  
   echo "<tr><th>artist</th><th>album</th></tr>";
   $resultalbum = $conn->query($artistAlbum);
    while ($rad = $resultalbum->fetch_assoc()) {
      
      echo "<tr><td>$rad[artist]</td><td>$rad[album]</td></tr>";
    }
    echo "</table>";

    if ($albumId) {

   echo "<table class=\"table table-striped\">";  
   echo "<tr><th>artist</th><th>album</th><th>song</th><th>song length</th></tr>";
   $resultatSong = $conn->query($songAlbum);
   
    while ($rad = $resultatSong->fetch_assoc()) {
      
      echo "<tr><td>$rad[artist]</td><td>$rad[album]</td><td>$rad[song]</td><td>$rad[song_length]</td></tr>";
    }
    
}
   
      ?>

</div>
</body>
</html>