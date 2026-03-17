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

                $teacher->setRegistered_at(date('Y-m-d H:i:s'));
                $teacher->setUpdated_at(date('Y-m-d H:i:s'));

                $teacher->save();
                redirect("index.php?action=showAllTeachers");
            }
        }

        public function registerNewClassAction() {
            $this->addContext("room_list", Rooms::fetchAllFromDatabase());
            $this->addContext("teacher_list", Teachers::fetchAllFromDatabase());


            if(!empty($_POST)) {
                $class = new Classes($_POST);

                $class->setRegistered_at(date('Y-m-d H:i:s'));
                $class->setUpdated_at(date('Y-m-d H:i:s'));

                $class->save();
                redirect("index.php?action=showAllClasses");
            }
        }

        public function registerNewStudentAction() {
            $this->addContext("class_list", Classes::fetchAllFromDatabase());


            if(!empty($_POST)) {
                $student = new Students($_POST);

                $student->setRegistered_at(date('Y-m-d H:i:s'));
                $student->setUpdated_at(date('Y-m-d H:i:s'));

                $student->save();
                redirect("index.php?action=showAllStudents");
            }
        }

        public function registerNewRoomAction() {
            if(!empty($_POST)) {
                $room = new Rooms($_POST);

                $room->setRegistered_at(date('Y-m-d H:i:s'));
                $room->setUpdated_at(date('Y-m-d H:i:s'));

                $room->save();
                redirect("index.php?action=showAllRooms");
            }
        }

        public function showAllTaughtsAction() {
            $this->addContext("tought_list", Taughts::fetchAllFromDatabase());
        }
    }

?>
