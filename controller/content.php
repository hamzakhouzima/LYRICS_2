<?php
include '../model/db.php';
session_start();
    class SaveContent extends Connection{

        public function setMusic($artist,$album,$track,$lyrics){

            $sql = "INSERT INTO tracks(artist, album, track_title, lyrics) VALUES ('$artist','$album','$track','$lyrics')";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
             

        }

        public function getMusic(){
            $sql ="SELECT * FROM tracks ORDER BY artist ASC; ";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
            $rows = $stmt->fetchAll();
            return $rows;

        }

        public function deleteMusic($id){

            $sql = "DELETE  FROM tracks WHERE id= '$id' ";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();



        }

        public function updateMusic($id,$artist,$album,$track,$lyrics){
           
         try{

            $sql = "UPDATE tracks SET artist=:value1 , album=:value2, track_title=:value3 , lyrics=:value4  WHERE id=:value5 ";
            $stmt = $this->conn->prepare($sql);
            
            
            $stmt->bindParam(':value1', $artist);
            $stmt->bindParam(':value2',$album);
            $stmt->bindParam(':value3', $track);
            $stmt->bindParam(':value4', $lyrics);
            $stmt->bindParam(':value5', $id);

            $stmt -> execute();

         } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }

        }



        public function statistics(){
          
            $sql ="SELECT COUNT(*) FROM (SELECT artist, COUNT(*) FROM tracks GROUP BY artist HAVING COUNT(*) >= 1) as temp ";
            
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
            $rows = $stmt->fetchAll();
            foreach($rows as $row){ 
                 echo $row['COUNT(*)'];
                }
          


        }
        public function statTracks(){
            $sql ="SELECT COUNT(*) FROM tracks";
            
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
            $rows = $stmt->fetchAll();
            foreach($rows as $row){

                echo $row['COUNT(*)'];


            }

        }

        public function statAlbums(){
            
            $sql ="SELECT COUNT(*) FROM (SELECT album, COUNT(*) FROM tracks GROUP BY album HAVING COUNT(*) >= 1) as temp ";
            
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
            $rows = $stmt->fetchAll();
            foreach($rows as $row){ 
                 echo $row['COUNT(*)'];
                }
          


        }
        public function statAdmin(){
            
            $sql ="SELECT COUNT(*) FROM user";
            
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
            $rows = $stmt->fetchAll();
            foreach($rows as $row){ 
                 echo $row['COUNT(*)'];
                }

    }


    public function search($key){
       
                    
        $sql ="SELECT * FROM tracks WHERE artist LIKE :keyword OR album LIKE :keyword OR track_title LIKE :keyword";    
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':keyword', $key);
        $stmt -> execute();
        $rows = $stmt->fetchAll();
     
        return $rows ; 
    }




    }
$obj = new SaveContent();

$obj->getMusic();

    if(!empty($_POST['artist']) && !empty($_POST['album']) && !empty($_POST['track']) && !empty($_POST['lyrics'])){
        
        $artist = $_POST['artist'];
        $album = $_POST['album'];
        $track = $_POST['track'];
        $lyrics = $_POST['lyrics'];
            $obj -> setMusic($artist,$album,$track,$lyrics);
        }
        else{
        $_SESSION['form'] = 'complet the form'; //modal form validation must be done 
    }



    if(isset($_POST['delete'])){
        // if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $obj->deleteMusic($id);
        }

        
    if(!empty($_POST['u_artist']) && !empty($_POST['u_album']) && !empty($_POST['u_track']) && !empty($_POST['u_lyrics'])){
           
            $id = $_POST['u_id'];
            $u_artist = $_POST['u_artist'];
            $u_album = $_POST['u_album'];
            $u_track = $_POST['u_track'];
            $u_lyrics = $_POST['u_lyrics'];
            $obj -> updateMusic($id,$u_artist,$u_album,$u_track,$u_lyrics);



    }


    



?>