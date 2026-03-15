<?php 

    class DatabaseConnect {
        private static $database = null;

        private function __construct(){}

        public static function getDatabase() {

            if (self::$database === null) {
                try {
                    self::$database = new PDO(
                        'mysql:host=localhost;port=8889;dbname=school_administration',
                        'root',
                        'root'
                    );

                    self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                } catch (PDOException $error) {
                    echo $error->getMessage();
                }
            }

            return self::$database;
        }
    }

?>