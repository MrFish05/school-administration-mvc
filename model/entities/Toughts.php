<?php 

    class Toughts {
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

        public function getClass_id() {
            return $this->class_id;
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

        public function setTeacher_id($teacher_id) {
            $this->teacher_id = $teacher_id;
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
    }

?>