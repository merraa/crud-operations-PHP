<?php
    class Student{
        public $id;
        public $name;
        public $class;
        public $mark;

        public function _construct($id,$name,$class,$mark){
            $this->$id = $id;
            $this->$name = $name;
            $this->$class = $class;
            $this->$mark  = $mark;
        }

        public function insert($id,$name,$class,$mark){
            $conn = new mysqli('localhost','root','','student_db');

            //echo $this->$id;

            $stmt = "INSERT into students(id,name,class,mark) values('$id','$name','$class','$mark')";

            if($conn->query($stmt)){
                return "data successfuly inserted";
            }else{
                return "problem inserting data";
            }    
        }
        public function update($id,$name,$class,$mark){
            $this->$id = $id;
            $this->$name = $name;
            $this->$class = $class;
            $this->$mark  = $mark;

            $stmt = "UPDATE students SET name ='$name', class = '$class',mark ='$mark' WHERE id = $id";
            $conn = new mysqli('localhost','root','','student_db');

            if($conn->query($stmt)){
                return "data successfuly updated";
            }else{
                return "problem inserting data";
            }    
        }
        public function read(){
            $conn = new mysqli('localhost','root','','student_db');
            $stmt = "SELECT * from students";
            $result = $conn->query($stmt); 
            
            return $result;
        }
        public function delete($id){
            $conn = new mysqli('localhost','root','','student_db');
            $stmt = "DELETE from students WHERE id = $id";
            if($conn->query($stmt)){
                return "data deleted successfully";
            }else{
                return "problem deleting data";
            }
        }
    }
?>