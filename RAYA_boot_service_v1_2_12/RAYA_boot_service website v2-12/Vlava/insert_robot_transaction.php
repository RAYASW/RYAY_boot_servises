<?php
include_once('DBClass.php');

class Insert_robot_transaction 
{

   function insert($App_id,$transactio_id) 
   {
    $DB = new DBClass();
    $DB->DBClass();
       $query="INSERT INTO `transaction_queue`( `Process_ID`, `Record_index`, `Status`) VALUES ('".$App_id."','".$transactio_id."','Pending')";
       echo $DB->query($query);
   }
}
//include_once('insert_robot_transaction.php')
//$test=new Insert_robot_transaction();
//$test->insert('1','1');

?>
