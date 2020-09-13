<?php
class users{
    public $name;
    public $email;
    public $gender;
    public $address;
    public $phone_no;
    public $event;
    public $time;

    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
        
    }
    public function insertuserdetail($obj){
        $sql="INSERT INTO registeration (name,email,gender,address,phone_no,event,time) VALUES('$obj->name','$obj->email','$obj->gender','$obj->address','$obj->tel','$obj->event','$obj->time');";
            $result=mysqli_query($this->conn,$sql);
            if($result==TRUE)
            {
                $msg=["Successfully Registered for Event!!"];
            }
            else
            {
                $msg=["Error occurred while submitting information. Please try again later."];
            }
            
            return json_encode($msg);
    }
    public function getuserdetails(){
        $sql="SELECT * FROM registeration;";
        $result=mysqli_query($this->conn,$sql);
        $arr=array();
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $arr[]=$row;
            }
        }
        return json_encode($arr);      
    }

}
?>