<?php
class DB{
    public $connection;
    function __construct($host,$dname,$username,$password){
        $db="mysql:host=".$host.";dbname=".$dname."";
        $this->connection=new PDO($db,$username,$password) ;
    }
    // return all data from table
    function index($table, ...$columns){
        $query="SELECT  ";   
        $i=0;
        $array_size = count($columns);
        foreach($columns as $column)
        {
            $i++;
            if($i == $array_size)
            {
                $query .= $column." ";
                break;
            }
            $query .= $column.",";
        }
        $query .= "from ".$table;
        $sql = $this->connection->prepare($query);
        $res = $sql->execute();
        $rows = $sql->fetchAll();
        return $rows;
    }

    // return single data from table
    function select($table,$id, ...$columns){
        $query = "SELECT ";
        $i=0;
        $array_size = count($columns);
        foreach($columns as $column)
        {
            $i++;
            if($i == $array_size)
            {
                $query .= $column." ";
                break;
            }
            $query .= $column.",";
        }
        $query.= "from ".$table.' where  ';
        foreach($id as $key => $value)
        {
            $query .= $key.' = '.$value;
        }
        $sql= $this->connection->prepare($query);
        $result = $sql->execute();
        $rows = $sql->fetchAll();

        return $rows; 
    }

    // create new record
    function create($table,$columns,$values){
        $query = "INSERT into `$table` (" ;
        $i=0;
        $array_size = count($columns);
        foreach($columns as $column)
        {
            $i++;
            if($i == $array_size)
            {
                
                $query .= "`".$column."`) values (";
                break;
            }
            $query .= "`".$column."`,";
        }
        $i=0;
        $array_size = count($values);
        foreach($values as $value)
        {
            $i++;
            if($i == $array_size)
            {
                $query .= '"'.$value.'")'; 
                break;
            }
           $query .= '"'.$value.'",'; 
        }
       $sql = $this->connection->prepare($query);
       $result = $sql->execute();
       if($result == true)
       {
           return "item added successfully";
       }
       else{
           return "error happened while adding this item";
       }
        return $rows;
    }
    // update existing record
    function update($table,$columns,$condition){
        // UPDATE products set product_name = 'updated' where id = 1
        $query = "UPDATE `$table` set ";

        $i=0;
        $array_size = count($columns);
        foreach($columns as $column => $value)
        {
            $i++;
            if($i == $array_size)
            {
                $query.= $column. " = ' ".$value." ' where ";
                break;
            }
            $query.= $column. " = ' ".$value." ',";
        }

        foreach($condition as $key =>$value)
        {
            $query .= $key." = '".$value."'";
        }
        $sql = $this->connection->prepare($query);
        $result =  $sql->execute();
        if($result == true)
        {
            return "item updated succeffully";
        }
        else{
            return "error happened while updating";
        }
    }
    // delete existing record
    function delete($table,$id){
        $query ="DELETE FROM `$table` WHERE id = $id";
        $sql = $this->connection->prepare($query);
        $result = $sql->execute();
        if($result)
        {
            return "item deleted succeffully";
        }
        else{
            return "error happened while deleting";
        }
    }
    
}
?>