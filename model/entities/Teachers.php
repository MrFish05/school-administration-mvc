<?php 

    class Teachers {
        use ActiveRecordable, Deletable, Findable, Persistable;
        
        private int $id = 0;
        private String $first_name = "";
        private String $last_name = "";
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

        public function setRegisteret_at($registered_at) {
            $this->registered_at = $registered_at;
        }

        public function setUpdatet_at($updatet_at) {
            $this->updated_at = $updatet_at;
        }

        public function __toString() {
            return $this->getFirst_name() . ' ' . $this->getLast_name();
        }
    }

?>