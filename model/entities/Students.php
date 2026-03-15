<?php 

    class Students {
        use ActiveRecordable, Deletable, Findable, Persistable;
        
        private int $id = 0;
        private String $first_name = "";
        private String $last_name = "";
        private String $birthday = "";
        private int $class_id = 0;
        private String $registered_at = "";
        private String $updated_at = "";

        public function getId() {
            return $this->id;
        }

        public function getFirst_name() {
            return $this->first_name;
        }

        public function getLast_name() {
            return $this->last_name;
        }

        public function getBirthday() {
            return $this->birthday;
        }

        public function getClass_id() {
            return $this->class_id;
        }

        public function getClass():Classes {
            return Classes::fetchFromDatabase($this->class_id);
        }

        public function getRegisteret_at() {
            return $this->registered_at;
        }

        public function getUpdatet_at() {
            return $this->updated_at;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setFirst_name($first_name) {
            $this->first_name = $first_name;
        }

        public function setLast_name($last_name) {
            $this->last_name = $last_name;
        }

        public function setBirtday($birthday) {
            $this->birthday = $birthday;
        }

        public function setClass_id($class_id) {
            $this->class_id = $class_id;
        }

        public function setRegisteret_at($registered_at) {
            $this->registered_at = $registered_at;
        }

        public function setUpdatet_at($updatet_at) {
            $this->updated_at = $updatet_at;
        }

        public static function getStudentInSpecificClass($class_id) {
            $sql = 'SELECT * FROM students WHERE class_id=?';

            $query = DatabaseConnect::getDatabase()->prepare($sql);
            $query->execute(array($class_id));
            $query->setFetchMode(PDO::FETCH_CLASS, 'Students');
            
            return $query->fetchAll();
        }
    }

?>