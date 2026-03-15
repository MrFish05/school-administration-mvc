<?php

    trait Persistable {

        public function save() {
            if ($this->getId() > 0) {
                $this->update();
            } else {
                $this->insert();
            }
        }

        protected function insert() {
            $attribute = $this->toArray(false);
            $key = array_keys($attribute);

            $spaceholder = array_map(function($value) {
                return ':' . $value;
            }, $key);
        
            $data = [
                self::investigateTable(),
                implode(', ', $key),
                implode(', ', $spaceholder)
            ];

            $sql = vsprintf(
                'INSERT INTO %s (%s) VALUES (%s)',
                $data
            );

        
            $query = DatabaseConnect::getDatabase()->prepare($sql);
            $query->execute($attribute);

            $this->id = DatabaseConnect::getDatabase()->lastInsertId();
        }

        protected function update() {
            $attribute = $this->toArray(false);
            $key = array_keys($attribute);

            $spaceholder = array_map(function($value) {
                return $value . ' = :' . $value;
            }, $key);

            $data = [
                self::investigateTable(),
                implode(', ', $spaceholder)
            ];
        
            $sql = vsprintf(
                'UPDATE %s SET %s WHERE id = :id',
                $data
            );

            $query = DatabaseConnect::getDatabase()->prepare($sql);
            $query->execute($this->toArray());
        }
    }

?>
