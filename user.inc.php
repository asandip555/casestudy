<?php
include_once 'dbh.inc.php';

//$obj = new Controller();

class User extends Controller{

    function getUser($role, $username, $password){
      try{
        //$hashed_password = password_hash($password, PASSWORD_BCRYPT);
        //echo $hashed_password;
      $obj = new Controller();
      $stmt = $this->connect()->prepare("SELECT * FROM login_credentials WHERE role_id= ? AND username =? AND password= ?");
      
      $stmt->execute([$role, $username, $password]);
        
         if($stmt->rowCount()>0){
          //echo "hello";
              while ($row = $stmt->fetch()){
                //echo "hello";
                if (session_status() == PHP_SESSION_NONE) {
                session_start();
                }
                
                $_SESSION["id_abm"] = $row['id'];
                $_SESSION["role_id_abm"] = $role;
                $_SESSION["username_abm"] = $username;
                $_SESSION["password_abm"] = $password;
                $_SESSION['loggedin_time'] = time();
                echo $row['id'];
                echo $_SESSION["username_abm"];
                header("Location: dashboard.php");
                // echo '<script>
                //   window.location="dashboard.php";
                //       </script>';
                      return $row['id'];
              }
            }
            else {
              echo '<script>
                alert(“Wrong username or password”);
                    </script>';
            }
      }

      catch(PDOException $e){
        echo "Connection Failed: ".$e->getMessage();
      }

      }
      function getUsersRole($loggedin_id){
        try{
        echo "hello";
        $obj = new Controller();
        $stmt = $this->connect()->query("SELECT * FROM login_credentials WHERE id= ". $loggedin_id);
      //  $stmt->execute([$id, $uid]);

            if($stmt->rowCount()){
                while ($row = $stmt->fetch()){
                  echo $row['role_id'];
                  return $row['role_id'];
                }
            }
        }


        catch(PDOException $e){
          echo "Connection Failed: ".$e->getMessage();
        }

        }
    }
  //  $newobj = new User;
  //  $newobj->getUsers();

    // public function getUserWithCountCheck(){
    //     $id=1;
    //     $uid = "john"

    //     $stmt = $this->obj->prepare("SELECT * FROM login_credentials WHERE id= ? AND uid=? ");
    //     $stmt->execute([$id, $uid]);

    //     if($stmt->rowCount()){
    //         while ($row = $stmt->fetch()){
    //           retur $row['uid'];
    //         }
    //     }

    // }
 ?>
