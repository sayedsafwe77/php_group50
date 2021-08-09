<?php

/** Task Info
 * Name : [DB] Class
 * Author : Mahros
 * Date : 2-8-2021
 * ThanksTo : Eng.Sayed Safwet
 */

final class DB
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $connection = "";
    public function __construct($server = "localhost", $username = "root", $password = "")
    {
        @$connection = new mysqli($server, $username, $password) or die("Couldn't connect");
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->connection = $connection;
        if ($connection->connect_error) {
            die("ERROR  Connecting At : " . date("h:m:s"));
        } else {
            echo "<pre>";
            print_r("Server Connected At : " . date("h:m:s"));
            echo "</pre>";
        }
    }
    public function createDB($DBname)
    {
        $sql = "CREATE DATABASE IF NOT EXISTS $DBname;";
        if ($this->connection->query($sql) === true) {
            echo "<pre>";
            print_r("Database Created Successfully At : " . date("h:m:s")) ;
            echo "</pre>";

        } else {
            echo "<pre>";
            print_r("Error Creating Database : " . $this->connection->error); 
            echo "</pre>";
        }
    }
    public function deleteDB($DBname)
    {
        $sql = "DROP DATABASE IF EXISTS $DBname;";
        if ($this->connection->query($sql) === true) {
            echo "<pre>";
            print_r("Database Deleted Successfully At : " . date("h:m:s"));
            echo "</pre>";
        } else {
            echo "<pre>";
            print_r("Error Deleting Database : " . $this->connection->error);
            echo "</pre>";
        }
    }
    public function createTB($DBname, $TBname, ...$rows)
    {
        $createTBCode = "ID INT(10) AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY";
        foreach ($rows as $value) {
            $createTBCode .= "," . "\n" . $value;
        }
        $sql = "CREATE TABLE IF NOT EXISTS `$DBname` . `$TBname` (
            $createTBCode
        )";
        if ($this->connection->query($sql) === true) {
            echo "<pre>";
            print_r( "Table Created Successfully At : " . date("h:m:s"));
            echo "</pre>";
        } else {
            echo "<pre>";
            print_r( "Error Creating Table : " . $this->connection->error);
            echo "</pre>";
        }
    }
    public function deleteTB($DBname, $TBname)
    {
        $sql = "DROP TABLE IF EXISTS `$DBname` . `$TBname`";
        if ($this->connection->query($sql) === true) {
            echo "<pre>";
            print_r("Table Deleted Successfully At : " . date("h:m:s"));
            echo "</pre>";
        } else {
            echo "<pre>";
            print_r( "Error Deleting Table : " . $this->connection->error);
            echo "</pre>";
        }
    }
    // $DBname, $TBname, $columns = array(), $values = array()
    public function insertRecord($DBname, $TBname, $columns = array(), $values = array())
    {
        $sql = "SELECT * FROM `mahros`.`new`";
        $result = $this->connection->query($sql);
        $rows = mysqli_num_rows($result); // Important
        echo "<pre>";
        print_r($rows);
        echo "</pre>";
        // data
        // if ($result->num_rows > 0) {
        //     while ($row = $result->fetch_assoc()) {
        //         printf("ID: %s, Row1: %s, Row2: %s, Row3: %d <br />",
        //             $row["ID"],
        //             $row["row1"],
        //             $row["row2"],
        //             $row["row3"]);
        //     }
        // } else {
        //     printf('No record found.<br />');
        // }
        // mysqli_free_result($result);
        $AColumns = "`ID`";
        foreach ($columns as $value) {
            $AColumns .= "," . "`" . $value . "`";
        }
        // echo "<pre>";
        // print_r($AColumns);
        // echo "</pre>";
        $rows++;
        $AValues = "'$rows'";
        foreach ($values as $value) {
            $AValues .= "," . "'" . $value . "'";
        }
        // echo "<pre>";
        // echo $AValues;
        // echo "</pre>";
        $sql = "INSERT INTO `$DBname` . `$TBname`($AColumns) VALUES ($AValues);";
        // echo "<pre>";
        // echo $sql;
        // echo "</pre>";
        // Set Query
        if ($this->connection->query($sql) == true) {
            echo "<pre>";
            print_r( "Data Inserted Successfully At : " . date("h:m:s"));
            echo "</pre>";
        } else {
            echo "<pre>";
            print_r("Error Inserting Data Into $TBname : " . $this->connection->error);
            echo "</pre>";
        }
    }
    // Get Data
    public function selectTB($DBname, $TBname, $method, $where)
    {
        $sql = "SELECT $method FROM `$DBname`.`$TBname` WHERE $where";
        echo "<pre>";
        print_r($sql);
        echo "</pre>";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0 == true) {
            echo "<pre>";
            print_r("Data Selected Successfully At : " . date("h:m:s")) ;
            echo "</pre>";
            $rows = mysqli_num_rows($result); // Important
            echo "<pre>";
            print_r("Length Of Rows : " . $rows);
            echo "</pre>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<pre>";
                    print_r($row);
                    echo "</pre>";
                }
            } else {
                echo "<pre>";
                print_r("No Record Found At : " . date("h:m:s"));
                echo "</pre>";
            }
            mysqli_free_result($result);
        } else {
            echo "<pre>";
            print("Error Selecting Data From $TBname : " . $this->connection->error);
            echo "</pre>";
        }
    }
    // Update Data
    public function updateTB($DBname, $TBname, $SET = "ID = '1'", $where)
    {
        $sql = "UPDATE `$DBname` . `$TBname` SET $SET WHERE $where";
        echo "<pre>";
        print_r($sql);
        echo "</pre>";
        if ($this->connection->query($sql) === true) {
            echo "<pre>";
            print_r("Table Updated Successfully At : " . date("h:m:s"));
            echo "</pre>";
        } else {
            echo "<pre>";
            print_r("Error Updating Table : " . $this->connection->error);
            echo "</pre>";
        }
    }
    // Delete Record
    public function deleteRecord($DBname, $TBname, $expression, $where = "1")
    {
        $sql = "DELETE $expression FROM `$DBname` . `$TBname` WHERE $where";
        // echo "<pre>";
        // print_r($sql);
        // echo "</pre>";
        if ($this->connection->query($sql) === true) {
            echo "<pre>";
            print_r("Record's Deleted Successfully At : " . date("h:m:s")) ;
            echo "</pre>";
        } else {
            echo "<pre>";
            print_r("Error Deleting Record's : " . $this->connection->error);
            echo "</pre>";
        }
    }

}

// Results
echo "<pre>";
// $Database = new DB();
// $Database->createDB("mahros");
// $Database->deleteDB("mahros");
// $Database->createTB("mahros", "new", "row1 VARCHAR(10)");
// $Database->deleteTB("mahros", "new");
// $Database->insertRecord("mahros", "new", ["row1"], ["row1"]);
// $Database->deleteRecord("mahros", "new","", "1");
// $Database->updateTB("mahros", "new", "row1 = 'mahros'", "1");
// $Database->selectTB("mahros", "new", "*", "1");
echo "</pre>";

echo "<br>======<br>";
echo "PHP File";
echo "<br>======<br>";
