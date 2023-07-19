<?php
    class crud{
        // private database object
        private $db;
        // constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db=$conn;
        }
        // function to insert a new record to the kumar database
        public function insertAttendees($uname,$email,$password,$gender,$avatar_path){
            try {
                // define sql statement to be executed
                $sql = "insert into sample(uname,email,password,gender,avatar_path) values(:uname,:email,:password,:gender,:avatar_path)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':uname',$uname);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':password',$password);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':avatar_path',$avatar_path);
                $stmt->execute();
                return true;
                
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function editAttendee($id,$uname,$email,$password,$gender){
            try{
                $sql = "update `sample` set `uname`=:uname,`email`=:email,`password`=:password,`gender`=:gender where sno=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":id",$id);
                $stmt->bindparam(':uname',$uname);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':password',$password);
                $stmt->bindparam(':gender',$gender);
                $stmt->execute();
                return true;    
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
        public function deleteAttendee($id){
            try {
                $sql = "delete from sample where sno=:id";
                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;   
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getAttendees(){
            $sql="SELECT * FROM `sample`";
            $result=$this->db->query($sql);
            return $result;            
        }
        public function getAttendeeDetails($id){
            $sql="select * from sample where sno=:id";
            $stmt=$this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result= $stmt->fetch();
            return $result;
        }
    }
?>