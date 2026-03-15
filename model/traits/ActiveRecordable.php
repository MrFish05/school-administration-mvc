<?php

    trait ActiveRecordable {
   
        public function __construct(array $data = []) {
            $this->setData($data);
        } 
    
        public function setData(array $data) {
            if ($data) {
                foreach ($data as $value => $i) {
                    $seterName = 'set' . ucfirst($value);
                    if (method_exists($this, $seterName)) {
                        $this->$seterName($i);
                    }
                }
            }
        }

        protected static ?string $table = null;
    
        protected static function investigateTable() {
            if (empty(DatabaseConnect::getDatabase())) {
                throw new Exception('Error: No database!');
            }
            
            $table = strtolower(static::class);
            
            if (!empty(self::$table)) {
                $table = self::$table; 
            }

            return $table;
        }
    
        public function toArray($with_id = true) {
            $attribute = get_object_vars($this);

            if ($with_id === false) {
                unset($attribute['id']);
            }

            return $attribute;
        }
     
    }

?>
