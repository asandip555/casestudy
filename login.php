<?php

/**                         store session data                         */

session_start();
$_SESSION['user']= array(
  'name' => 'admin',
  'year' => 2020

)
class Session extends Controller{
      public function StoreSession($session=null, $table='user'){
        if(Ethis->con != null){
          if($session != null){
            //get table columns
            $columns = implode(',', array_keys($session));
            $values = "'".implode("','", array_values($session))."'";

            $query_string = sprintf("INSERT INTO %s(%s)VALUES(%s)", $table, $columns, $values);
            //execute database query
             $result = $this->con->query($query_string);
             if($result){
               echo "Session database inserted successfully.";
             }
          }
        }

      }

}
?>
