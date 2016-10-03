<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model1.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security
        // Set up the SQL statement for how it will be iterated
        $insert = "INSERT INTO users (NAME, email, role_id)
                    VALUES (:name, :email, :role_id)";
        // prepare the statement in order to protect it for unwanted code
        $stmt = self::$dbc->prepare($insert);

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        // bindValue($parameter, $value, $data_type)
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':role_id', $role_id, PDO::PARAM_INT);
        // foreach ($this->attributes as $column => $value) {
        //     $stmt->bindValue(':' . $column, $value, PDO::PARAM_STR);
        // }

        // stmt executes the prepared statement by using execute()
        $stmt->execute();

        // @TODO: After the insert, add the id back to the attributes array so the object properly represents a DB record
        // lastInsertId - returns teh ID of the last inserted row or sequence value
        $this->attributes['id'] = self::$dbc->lastInsertId();
    }



    /** Update existing entry in the database */
    // basically the same as insert, only diff is it is a update and not new
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security
        $update = "UPDATE users SET NAME = :name, email = :email, role_id = :role_id WHERE id = :id";
        $stmt = self::$dbc->prepare($update); 

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        $stmt->bindValue(':name', $this->attributes['NAME'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->bindValue(':role_id', $this->attributes['role_id'], PDO::PARAM_INT);

        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $stmt->execute();
    }



    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $find = "SELECT * FROM users WHERE id = :id";
        $stmt = self::$dbc->prepare($find);

        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();

        // @TODO: Store the result in a variable named $result
        // Fetches the next row form a result set and sets it to an associative array
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        var_dump($result);

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            // makes a new instance of something the User class
            $instance = new static($result);
        }
        return $instance;
    }



    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the find method, return all the matching records
        $all = 'SELECT * FROM users';
        $stmt = self::$dbc->query($all);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($results) {
            // makes a new instance of something the User class
            $instance = new static($results);
        }
        return $instance;
    }

    public function delete() 
    {
        $query = 'DELETE FROM users WHERE id = :id';
        $stmt = self::$dbc->prepare($query);

        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $stmt->execute();
    }
}





