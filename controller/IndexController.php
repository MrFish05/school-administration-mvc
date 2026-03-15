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

        public function showStudentsInClassAction() {
            $this->addContext("students_class_list", Students::getStudentInSpecificClass($_GET['class_id']));
        }

        public function removeStudentAction() {
            $student = Students::fetchFromDatabase($_GET['student_id']);
            $student->delete();
            redirect("index.php?action=showStudentsInClass&class_id=".$_GET['class_id']);
        }
    }

?>
