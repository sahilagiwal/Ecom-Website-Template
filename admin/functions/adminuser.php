<?php

class userclass
{

    public $name,$email,$id;
    function set_id($id) {
        include ("dbcon.php");

        $sql="SELECT * FROM admin where id='$id'";
        $result=$db->query($sql);
        $row = $result->fetch_assoc();
        $this->name=$row['name'];
        $this->email=$row['email'];
    }

    function getName(){

        return($this->name);
    }
    function getEmail(){

        return($this->email);
    }

}
class addproducts{
    public $name,$bc,$sc,$imageloc,$brand,$cat,$inv;
    function addProduct(){
        $name=$this->name;
        $sc=$this->sc;
        $bc=$this->bc;
        $imageloc=$this->imageloc;
        $brand=$this->brand;
        $cat=$this->cat;
        $inv=$this->inv;
        include ("dbcon.php");
        $sql="INSERT into product (name,sc,bc,image,category,brand,inventory) VALUES ('$name','$sc','$bc','$imageloc','$cat','$brand','$inv')";
        $result=$db->query($sql);
        if($result){
            return(true);
        }
        else{
           return( $db->error);
        }

    }
}

class editproduct{
    public $name,$bc,$sc,$imageloc,$brand,$cat,$inv,$id;
    function updateProduct(){

        $name=$this->name;
        $id=$this->id;
        $sc=$this->sc;
        $bc=$this->bc;
        $imageloc=$this->imageloc;
        $brand=$this->brand;
        $cat=$this->cat;
        $inv=$this->inv;
        include ("dbcon.php");
        $sql="UPDATE product SET name ='$name',sc='$sc',bc='$bc',image='$imageloc',category='$cat',brand='$brand',inventory='$inv' where id='$id'";
        $result=$db->query($sql);
        if($result){
            return(true);
        }
        else{
            return( $db->error);
        }

    }
}

