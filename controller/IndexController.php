<?php

    class IndexController extends AbstractBase {
        public function showAllClassesAction() {
            $this->addContext("class_list", Classes::fetchAllFromDatabase());
        }

        public function showAllTeachersAction() {
            $this->addContext("teacher_list", Teachers::fetchAllFromDatabase());
        }

        public function showAllStudentsAction() {
            $this->addContext("student_list", Students::fetchAllFromDatabase());
        }
    }

?>
