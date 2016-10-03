<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security
        // Set up the SQL statement for how it will be iterated
        $insert = "INSERT INTO users (name, location, date_established, area_in_acres, description)
                    VALUES (:name, :location, :date_established, :area_in_acres, :description";
        // prepare the statement in order to protect it for unwanted code
        $stmt = $dbc->prepare($insert);

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        // bindValue($parameter, $value, $data_type)
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_INT);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);

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
        $update = "UPDATE users SET name = :name, location = :location, date_established = :date_established, area_in_acres = :area_in_acres, description = :description WHERE id = :id";
        $stmt = $dbc->prepare($update); 

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $stmt->bindValue(':location', $this->attributes['location'], PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $this->attributes['date_established'], PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $this->attributes['area_in_acres'], PDO::PARAM_INT);
        $stmt->bindValue(':description', $this->attributes['description'], PDO::PARAM_STR);

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
        $stmt = $dbc->prepare($find);

        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();

        // @TODO: Store the result in a variable named $result
        // Fetches the next row form a result set
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
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
        $stmt = $dbc->prepare($all);
        $stmt->execute();
    }
}





