<?php
class Database{
    private $link = '';
    private $results = array();
    public function connect()   {
        $myHost = 'localhost';
        $myLogin = 'root';
        $myPassword = '';
        $myDatabase = 'microinn';

        $this->link = mysqli_connect($myHost, $myLogin, $myPassword, $myDatabase) or die ('I cannot connect to the database because');
    }
    //public function disconnect()    {}

    public function select($cols, $tableName, $whereClause){ 
        $condition = '';
        if($whereClause<>""){
            $condition = " WHERE ".$whereClause;
        }
        $sqlQuery = "SELECT ".$cols." FROM ".$tableName." ".$condition;
        //echo($sqlQuery);
        $sqlResults = $this->link->query($sqlQuery);
        $numRows = mysqli_num_rows($sqlResults);
        if($numRows>0){
            while($rec = mysqli_fetch_array($sqlResults)){
                $this->results[] = $rec;
            }
        }
        return $this->results;
        //return $this->numRows;
    }// -- end select

    public function insert($tableName, $cols, $values){
        $sqlQuery = 'INSERT INTO '.$tableName.' ('.$cols.') VALUES ('.$values.')';
        $check = $this->link->query($sqlQuery);
        if($check){
            return true;
        }else{
            return false;
        }
    }// -- end insert
    
    public function delete($tableName,$primaryID,$recID){
        $sqlQuery = 'DELETE FROM '.$tableName.' WHERE '.$primaryID.'='.$recID;
        $check = $this->link->query($sqlQuery);
        if($check){
            return true;
        }else{
            return false;
        }
    } // -- end delete
    public function update($tableName, $values, $primaryID, $recID){
        $sqlQuery = 'UPDATE '.$tableName.' SET '.$values.' WHERE '.$primaryID.'='.$recID;
        $check = $this->link->query($sqlQuery);
        if($check){
            return true;
        }else{
            return false;
        }
    }// -- update function
}
?>