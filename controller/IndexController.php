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

        public function showAllRoomsAction() {
            $this->addContext("room_list", Rooms::fetchAllFromDatabase());
        }

        public function showStudentsInClassAction() {
            $this->addContext("students_class_list", Students::getStudentInSpecificClass($_GET['class_id']));
        }

        public function removeStudentAction() {
            $student = Students::fetchFromDatabase($_GET['student_id']);
            $student->delete();
            redirect("index.php?action=showStudentsInClass&class_id=".$_GET['class_id']);
        }

        public function registerNewTeacherAction() {
            if(!empty($_POST)) {
                $teacher = new Teachers($_POST);

                $teacher->setRegisteret_at(date('Y-m-d H:i:s'));
                $teacher->setUpdatet_at(date('Y-m-d H:i:s'));

                $teacher->save();
                redirect("index.php?action=showAllTeachers");
            }
        }
    }

?>
