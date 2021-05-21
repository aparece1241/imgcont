<?php
    class User {
      
      private $conn;
      public static $table = 'users';

      public $first_name;
      public $last_name;
      public $username;
      public $email;
      public $password;
      public $application_info_id;
      public $created_at;
      public $deleted_at;
      public $updated_at;
      public $user_role;

      public function __construct($connection)
      {
         $this->conn = $connection;
      }

      // Get all data
      public static function all( $conn )
      {
         $query = "SELECT * FROM ".self::$table.";";
         $stmt = $conn->prepare($query);
         $stmt->execute();
         return $stmt; 
      }

      # start add new data methods
      public function save()
      {
         $user_data = [
            'first_name' => $this->first_name, 
            'last_name' =>  $this->last_name, 
            'username' =>   $this->username, 
            'email' =>      $this->email, 
            'password' =>   $this->password, 
            'application_info_id' => $this->application_info_id, 
            'user_role' =>  $this->user_role, 
            'created_at' => $this->created_at, 
            'updated_at' => $this->updated_at, 
         ];
         $query = "INSERT INTO ". $this->table . " (first_name, last_name, username, email, password,
                  application_info_id, user_role, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);";
         try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute( self::santizedData($user_data));
            return true;
         } catch ( PDOException $e ) {
            return false;
         }
      }

      public static function create($conn, $data, $table)
      {
          $query = "INSERT INTO $table (first_name, last_name, username, email, password,
                  application_info_id, user_role, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);";
      
          $stmt = $conn->prepare($query);
      
          try {
              $stmt->execute(self::santizedData($data));
              return true;
          } catch (PDOException $e) {
              return false;
          }
      }
      #end add new data methods

      // Snitize data
      private static function santizedData($data)
      {
         foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars(strip_tags($value));
         }
         return $data;
      }

    }