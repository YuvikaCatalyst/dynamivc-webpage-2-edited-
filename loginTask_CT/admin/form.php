<?php
include('database1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
    <title>website</title>
</head>
<body>
<?php
    $sql = "SELECT * FROM websitedata";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    ?>

    <form action="#" method="post" enctype="multipart/form-data">
        select which type of logo you want.
<select id="logoTypeSelect">
    <option class="select logo" value="" <?php if ($row['logoType'] == 'select') echo 'selected'; ?>>select</option>
    <option class="logo_File logo" value="file" <?php if ($row['logoType'] == 'file') echo 'selected'; ?>>image</option>
    <option class="logo_Text logo" value="text" <?php if ($row['logoType'] == 'text') echo 'selected'; ?>>text</option>
</select><br>
    
    <input type="file" id="logoFile" class="logoFile" name="logoFile" >
    <label for="logoFile" class="logoFile first"><?php echo $row['logoFile']?></label><br>
    <input type="text" class="logoText" placeholder="enter text" value="<?php echo $row['logoText'] ?>"><br>

  navitem1 data:
    <input type="text" class="navItem1" placeholder="navItem1" value="<?php echo $row['navItem1'] ?>"><br>
    navitem2 data:
    <input type="text" class="navItem2" placeholder="navItem2" value="<?php echo $row['navItem2'] ?>"><br>
    navitem3 data:
    <input type="text" class="navItem3" placeholder="navItem3" value="<?php echo $row['navItem3'] ?>"><br>
    navitem4 data:
    <input type="text" class="navItem4" placeholder="navItem4" value="<?php echo $row['navItem4'] ?>"><br>
    navitem5 data:
    <input type="text" class="navItem5" placeholder="navItem5" value="<?php echo $row['navItem5'] ?>"><br>
    navitem6 data:
    <input type="text" class="navItem6" placeholder="navItem6" value="<?php echo $row['navItem6'] ?>"><br>
    navitem7 data:
    <input type="file" id="navItem7" class="navItem7" name="navItem7">
    <label for="navItem7"><?php echo $row['navItem7']?></label><br>
    navitem8 data:
    <input type="file" class="navItem8" name="navItem8">
    <label for="navItem8"><?php echo $row['navItem8']?></label><br>
    section1 heading1:
    <input type="text" class="section1heading1" placeholder="heading" value="<?php echo $row['section1heading1'] ?>"><br>
    section1 heading2:
    <input type="text" class="section1heading2" placeholder="heading" value="<?php echo $row['section1heading2'] ?>"><br>
    section1 para:
    <input type="text" class="section1para" placeholder="para" value="<?php echo $row['section1para'] ?>"><br>
 button1 text:
    <input type="text" class="anchor1" placeholder="enter text for button1" value="<?php echo $row['anchor1'] ?>"><br>
    button2 text:
    <input type="text" class="anchor2" placeholder="enter text for button2" value="<?php echo $row['anchor2'] ?>"><br>
    section1 img:
    <input type="file" name="section1img" id="section1img" class="section1img">
    <label for="section1img"><?php echo $row['section1img']?></label><br>
    enter text for section2 heading
    <input type="text" class="section2heading" placeholder="enter text for section2 heading" value="<?php echo $row['section2heading'] ?>"><br>
    enter text for section2 para
    <input type="text" class="section2para" placeholder="enter text for section2 para" value="<?php echo $row['section2para'] ?>"><br>
    button3 text:
    <input type="text" class="anchor3" placeholder="enter text for button3" value="<?php echo $row['anchor3'] ?>"><br>
    section2 image1:
    <input type="file" id="section2img1" class="section2img1" name="section2img1">
    <label for="section2img1"><?php echo $row['section2img1']?></label><br>
    section2 image heading1:
    <input type="text" class="section2img1heading" placeholder="section2img1heading" value="<?php echo $row['section2img1heading'] ?>"><br>
    section2 image text1:
    <input type="text" class="section2img1para" placeholder="section2img1para" value="<?php echo $row['section2img1para'] ?>"><br>
    section2 image2:
    <input type="file" id="section2img2" class="section2img2" name="section2img2">
    <label for="section2img2"><?php echo $row['section2img2']?></label><br>
    section2 image heading2:
    <input type="text" class="section2img2heading" placeholder="section2img2heading" value="<?php echo $row['section2img2heading'] ?>"><br>
    section2  image text
    <input type="text" class="section2img2para" placeholder="section2img1para" value="<?php echo $row['section2img2para'] ?>"><br>
    section2 image3:
    <input type="file" class="section2img3" id="section2img3" name="section2img3">
    <label for="section2img3"><?php echo $row['section2img3']?></label><br>
    section2 image heading3:
    <input type="text" class="section2img3heading" placeholder="section2img3heading" value="<?php echo $row['section2img3heading'] ?>"><br>
    section2 image text
    <input type="text" class="section2img3para" placeholder="section2img1para"  value="<?php echo $row['section2img3para'] ?>"><br>

    <a href="#" class="submit">submit</a><br>
    <a href="logout.php"><input type="button" value="logout">

</form>
</body>
</html>
