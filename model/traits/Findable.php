<?php

    trait Findable {

        public static function fetchAllFromDatabase() {
            $sql = vsprintf(
                'SELECT * FROM %s',
                [self::investigateTable()]
            );

            $query = DatabaseConnect::getDatabase()->query($sql);
            $query->setFetchMode(PDO::FETCH_CLASS, static::class);

            return $query->fetchAll();
        }
    
        public static function fetchFromDatabase($id) {
            $sql = vsprintf(
                'SELECT * FROM %s WHERE id = ?',
                [self::investigateTable()]
            );

            $query = DatabaseConnect::getDatabase()->prepare($sql);
            $query->execute([$id]);
            $query->setFetchMode(PDO::FETCH_CLASS, static::class);

            return $query->fetch();
        }
    
        public static function fetchSpecificValueFromDatabase($row, $value) { 
            $sql = vsprintf( 
                "SELECT * FROM %s WHERE $row LIKE ?", 
                [self::investigateTable()] 
            ); 

            $query = DatabaseConnect::getDatabase()->prepare($sql); 
            $query->execute([$value]); 
            $query->setFetchMode(PDO::FETCH_CLASS, static::class); 

            return $query->fetchAll(); 
        } 
    
    }

?>
