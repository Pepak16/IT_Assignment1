<!DOCTYPE html>
<html>
<head>
    <title>Assignment 1 - Persha</title> 
</head>
    <body>
        <?php include 'top.php'; ?>

        <?php
            if(isset($_FILES['image'])){
                $errors= array();
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                
                if(empty($errors)==true) {
                //   $file = $file_tmp;
                //   $dest = fopen("ftp://pi:santana01p@25.1.147.8/itproject_photos/" . $file, "wb");
                //   $src = file_get_contents($file);
                //   fwrite($dest, $src, strlen($src));
                //   fclose($dest); 
                move_uploaded_file($file_tmp,"uploads/".$file_name);
                echo "Success";
                }else{
                print_r($errors);
                }
            }
            
        ?>

        <div id="content">
        <form action = "" method = "POST" enctype = "multipart/form-data">
            <input type = "file" name = "image" />
            <br>
            <br>
            <input type = "submit"/>
          
            <!-- <ul>
                <br><br>
                <li>Sent file: <?php echo $_FILES['image']['name'];  ?></li>
                <br><br>
                <li>File size: <?php echo $_FILES['image']['size'];  ?></li>
                <br><br>
                <li>File type: <?php echo $_FILES['image']['type'] ?></li>
                <br><br>
            </ul> -->
        </form>

        <br>
        <br>

        <?php 
            include 'bottom.php'; 

            $dirname = "uploads/";
            $images = glob($dirname."*.*");

            foreach($images as $im) {
                echo '<img style="align: center; height: 100px; width: auto;" src="'.$im.'" /><br />';
            }
        
        ?> 
        
    </div>
        
    
    </body>
</html>