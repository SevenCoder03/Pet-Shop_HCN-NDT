<?php
require_once(__DIR__."/../config/db.php");
require_once (__DIR__."/../entities/user.php");
class UserService {
    public static function insert($user) {
        $db = new Db();
    
        // Prepare the SQL statement
        $SQL = "INSERT INTO user (name, gender, username, email, password, phoneNumber, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->connect()->prepare($SQL);
    
        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        $name = $user->getName();
        $email = $user->getEmail();
        $pass = $user->getPassword();
        $phoneNumber = $user->getPhoneNumber();
        $uname = $user->getUsername();
        $address = $user->getAddress();
        $gender = $user->getGender();
    
        // Bind parameters
        $stmt->bind_param("sisssss", $name, $gender, $uname, $email, $pass, $phoneNumber, $address);
    
        // Execute the statement
        $result = $stmt->execute();
    
        // Close the statement
        $stmt->close();
    
        return $result;
    }

    public function delete($id) {
        $db = new Db();

        // Prepare the SQL statement
        $SQL = "DELETE FROM user WHERE id = ?";
        $stmt = $db->connect()->prepare($SQL);

        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        // Bind parameter
        $stmt->bind_param("i", $id); 

        // Execute the statement
        $result = $stmt->execute();

        // Close the statement
        $stmt->close();

        return $result;
    }

    public static function update($user) {
        $db = new Db();

        // Prepare the SQL statement
        $SQL = "UPDATE user SET name = ?, gender = ?, username = ?, email = ?, password = ?, phoneNumber = ?, address = ?, user_type = ? WHERE id = ?";
        $stmt = $db->connect()->prepare($SQL);

        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        $id = $user->getId();
        $name = $user->getName();
        $email = $user->getEmail();
        $pass = $user->getPassword();
        $phoneNumber = $user->getPhoneNumber();
        $userType = $user->getUser_type();
        $uname = $user->getUsername();
        $address = $user->getAddress();
        $gender = $user->getGender();

        // Bind parameters
        $stmt->bind_param("sissssssi", $name, $gender, $uname, $email, $pass, $phoneNumber, $address, $userType, $id);

        // Execute the statement
        $result = $stmt->execute();

        // Close the statement
        $stmt->close();

        return $result;
    }

    public static function selectByEmail($email) {
        $db = new Db();

        // Prepare the SQL statement
        $SQL = "SELECT * FROM user WHERE email = ?";
        $stmt = $db->connect()->prepare($SQL);

        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        // Bind parameter
        $stmt->bind_param("s", $email);

        // Execute the statement
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Fetch user data
        $userData = $result->fetch_assoc();

        // Close the statement
        $stmt->close();

        if ($userData) {
            $user = new User($userData['id'], $userData['name'],$userData['gender'], $userData['username'], $userData['email'], $userData['password'], $userData['phoneNumber'], $userData['address'], $userData['user_type']);
            return $user;
        } else {
            // User not found
            return null;
        }
    }

    public static function selectByUsername($username) {
        $db = new Db();

        // Prepare the SQL statement
        $SQL = "SELECT * FROM user WHERE username = ?";
        $stmt = $db->connect()->prepare($SQL);

        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        // Bind parameter
        $stmt->bind_param("s", $username);

        // Execute the statement
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Fetch user data
        $userData = $result->fetch_assoc();

        // Close the statement
        $stmt->close();

        if ($userData) {
            $user = new User($userData['id'], $userData['name'],$userData['gender'],  $userData['username'], $userData['email'], $userData['password'], $userData['phoneNumber'], $userData['address'], $userData['user_type']);
            return $user;
        } else {
            // User not found
            return null;
        }
    }

    public static function selectById($id) {
        $db = new Db();

        // Prepare the SQL statement
        $SQL = "SELECT * FROM user WHERE id = ?";
        $stmt = $db->connect()->prepare($SQL);

        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        // Bind parameter
        $stmt->bind_param("s", $id);

        // Execute the statement
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Fetch user data
        $userData = $result->fetch_assoc();

        // Close the statement
        $stmt->close();

        if ($userData) {
            $user = new User($userData['id'], $userData['name'],$userData['gender'],  $userData['username'], $userData['email'], $userData['password'], $userData['phoneNumber'], $userData['address'], $userData['user_type']);
            return $user;
        } else {
            // User not found
            return null;
        }
    }

    public static function selectAll() {
        $db = new Db();
    
        // Prepare the SQL statement
        $SQL = "SELECT * FROM user";
        $stmt = $db->connect()->prepare($SQL);
    
        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }
    
        // Execute the statement
        $stmt->execute();
    
        // Get the result set
        $result = $stmt->get_result();
    
        // Initialize an empty array to store users
        $users = [];
    
        // Fetch all user data
        while ($userData = $result->fetch_assoc()) {
            $user = new User(
                $userData['id'],
                $userData['name'],
                $userData['gender'],
                $userData['username'],
                $userData['email'],
                $userData['password'],
                $userData['phoneNumber'],
                $userData['address'],
                $userData['user_type']
            );
    
            // Add the user to the array
            $users[] = $user;
        }
    
        // Close the statement
        $stmt->close();
    
        return $users;
    }
    
}
?>