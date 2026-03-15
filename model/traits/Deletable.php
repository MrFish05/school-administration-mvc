<?php

    trait Deletable {

        public function delete() {
            $sql = vsprintf(
                'DELETE FROM %s WHERE id = ?',
                [self::investigateTable()]
            );

            $query = DatabaseConnect::getDatabase()->prepare($sql);
            $query->execute([$this->getId()]);

            $this->id = 0;
        }
    }

?>
