<?php 

    class Rooms {
        use ActiveRecordable, Deletable, Findable, Persistable;

        private int $id = 0;
        private String $name = "";
        private String $registered_at = "";
        private String $updated_at = "";

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
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

        public function setRegistered_at($registered_at) {
            $this->registered_at = $registered_at;
        }

        public function setUpdatet_at($updatet_at) {
            $this->updated_at = $updatet_at;
        }

        public function __toString() {
            return $this->getName();
        }
    }

?>