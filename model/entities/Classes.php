<?php 

    class Classes {
        use ActiveRecordable, Deletable, Findable, Persistable;

        private int $id = 0;
        private String $name = "";
        private int $room_id = 0;
        private int $teacher_id = 0;
        private String $registered_at = "";
        private String $updated_at = "";

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }
        
        public function getRoom_id() {
            return $this->room_id;
        }

        public function getRoom() {
            return Rooms::fetchFromDatabase($this->room_id);
        }

        public function getTeacher_id() {
            return $this->teacher_id;
        }

        public function getTeacher():Teachers {
            return Teachers::fetchFromDatabase($this->teacher_id);
        }

        public function getRegistered_at() {
            return $this->registered_at;
        }

        public function getUpdatet_at() {
            return $this->updated_at;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setName($name) {
            $this->name = $name;
        }
        
        public function setRoom_id($room_id) {
            $this->room_id = $room_id;
        }

        public function setTeacher_id($teacher_id) {
            $this->teacher_id = $teacher_id;
        }

        public function setRegistered_at($registered_at) {
            $this->registered_at = $registered_at;
        }

        public function setUpdatet_at($updatet_at) {
            $this->updated_at = $updatet_at;
        }
    }

?>