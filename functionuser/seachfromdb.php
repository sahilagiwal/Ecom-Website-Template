<?php
include "../admin/functions/dbcon.php";
if(isset($_POST['searchval'])){
    $search=$_POST['searchval'];
   $sql="select * from product where name like '%$search%' limit 3";
    $result=$db->query($sql);
   if($result) {


       if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {
               $id=$row['id'];
               echo '  <a href="shop.php?cat=all#'.$id.'"><table class="table">
                         <thead>
                          <tbody>
                            
                            <tr>
                         
                              <td>' . $row["name"] . '</td>
                              <td> <img src=admin/upload/'.$row["image"].' height="80px"></td>
                              
                            </tr>
                            
                          </tbody>
                       </table></a>';
           }
       }
       else{
           echo 'no product found';
       }
   }
   else{
       echo $db->error;
   }
}
?>