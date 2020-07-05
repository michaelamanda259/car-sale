	
if(isset($_POST["submit"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO vehicles(vehicle_img_dir) VALUES ('$file')";  
      if(mysqli_query($conn, $query))  
      {  
      	echo "done";
          // echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }

?>



$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysql_query($insert_image)



        <!--up;oad files-->
        <section>
             <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="submit" id="submit" value="submit" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
               <!--  <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr> -->  
                <!-- ?php  
                $query = "SELECT * FROM seller";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="1000" width="1000" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?> -->  
                <!-- </table>   -->

        </section>