<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "datas";
 
    // object properties
    public $name;
    public $src;
    public $description;
    public $target;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){
 
        // select all query
        // $query = "SELECT
        //             c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
        //         FROM
        //             " . $this->table_name . " p
        //             LEFT JOIN
        //                 categories c
        //                     ON p.category_id = c.id
        //         ORDER BY
        //             p.created DESC";
        $query = "SELECT * FROM $this->table_name";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }
}