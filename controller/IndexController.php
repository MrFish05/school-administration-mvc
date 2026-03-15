<?php

    class IndexController extends AbstractBase {
        public function showAllClassesAction() {
            $this->addContext("class_list", Classes::fetchAllFromDatabase());
        }
    }

?>
