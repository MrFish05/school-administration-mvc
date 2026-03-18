<?php 

    class Teaches {
        use ActiveRecordable, Deletable, Findable, Persistable;

        private int $id = 0;
        private int $teacher_id = 0;
        private int $class_id = 0;
        private String $registered_at = "";
        private String $updated_at = "";

        public function getId() {
            return $this->id;
        }

        public function getTeacher_id() {
            return $this->teacher_id;
        }

        public function getTeacher():Teachers {
            return Teachers::fetchFromDatabase($this->teacher_id);
        }

        public function getClass_id() {
            return $this->class_id;
        }

        public function getClass():Classes {
            return Classes::fetchFromDatabase($this->class_id);
        }

        public function getRegistered_at() {
            return $this->registered_at;
        }

        public function getUpdated_at() {
            return $this->updated_at;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setTeacher_id($teacher_id) {
            $this->teacher_id = $teacher_id;
        }

        public function setClass_id($class_id) {
            $this->class_id = $class_id;
        }

        public function setRegistered_at($registered_at) {
            $this->registered_at = $registered_at;
        }

        public function setUpdated_at($updated_at) {
            $this->updated_at = $updated_at;
        }
    }

?>