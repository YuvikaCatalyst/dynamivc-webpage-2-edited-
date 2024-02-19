
<?php
include('database1.php');
$allowedExtensions = array('gif', 'avif', 'jpg', 'png', 'jpeg','svg');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $logoType = $_POST['logoType'];
 /* $logoFile = $_FILES['logoFile'];*/
  $logoText = $_POST['logoText'];
  $navItem1 = $_POST['navItem1'];
  $navItem2 = $_POST['navItem2'];
  $navItem3 = $_POST['navItem3'];
  $navItem4 = $_POST['navItem4'];
  $navItem5 = $_POST['navItem5'];
  $navItem6 = $_POST['navItem6'];
 /* $navItem7 = $_FILES['navItem7'];
  $navItem8 = $_FILES['navItem8'];*/
  $anchor1 = $_POST['anchor1'];
  $anchor2 = $_POST['anchor2'];
  $section1heading1 = $_POST['section1heading1'];
  $section1heading2 = $_POST['section1heading2'];
  $section1para = $_POST['section1para'];
  $section2heading = $_POST['section2heading'];
  $section2para = $_POST['section2para'];
  $anchor3 = $_POST['anchor3'];
 /* $section2img1 = $_FILES['section2img1'];*/
  $section2img1heading = $_POST['section2img1heading'];
  $section2img1para = $_POST['section2img1para'];
  /*$section2img2 = $_FILES['section2img2'];*/
  $section2img2heading = $_POST['section2img2heading'];
  $section2img2para = $_POST['section2img2para'];
 /* $section2img3 = $_FILES['section2img3'];*/
  $section2img3heading = $_POST['section2img3heading'];
  $section2img3para = $_POST['section2img3para'];

  $logoFile = '';
  if (isset($_FILES['logoFile'])) {
      $logoFile = $_FILES['logoFile']['name'];
      $file_tmp1 = $_FILES['logoFile']['tmp_name'];
      $file_extension1 = strtolower(pathinfo($logoFile, PATHINFO_EXTENSION));

      if (!in_array($file_extension1, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp1, "assets/uploads/" . $logoFile);
  }

  $navItem7 = '';
  if (isset($_FILES['navItem7'])) {
      $navItem7 = $_FILES['navItem7']['name'];
      $file_tmp2 = $_FILES['navItem7']['tmp_name'];
      $file_extension2 = strtolower(pathinfo($navItem7, PATHINFO_EXTENSION));

      if (!in_array($file_extension2, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp2, "assets/uploads/" . $navItem7);
  }

  $navItem8 = '';
  if (isset($_FILES['navItem8'])) {
      $navItem8 = $_FILES['navItem8']['name'];
      $file_tmp3 = $_FILES['navItem8']['tmp_name'];
      $file_extension3 = strtolower(pathinfo($navItem8, PATHINFO_EXTENSION));

      if (!in_array($file_extension3, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp3, "assets/uploads/" . $navItem8);
  }

  $section2img1 = '';
  if (isset($_FILES['section2img1'])) {
      $section2img1 = $_FILES['section2img1']['name'];
      $file_tmp4 = $_FILES['section2img1']['tmp_name'];
      $file_extension4 = strtolower(pathinfo($section2img1, PATHINFO_EXTENSION));

      if (!in_array($file_extension4, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp4, "assets/uploads/" . $section2img1);
  }

  $section2img2 = '';
  if (isset($_FILES['section2img2'])) {
      $section2img2 = $_FILES['section2img2']['name'];
      $file_tmp5 = $_FILES['section2img2']['tmp_name'];
      $file_extension5 = strtolower(pathinfo($section2img2, PATHINFO_EXTENSION));

      if (!in_array($file_extension5, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp5, "assets/uploads/" . $section2img2);
  }

  $section2img3 = '';
  if (isset($_FILES['section2img3'])) {
      $section2img3 = $_FILES['section2img3']['name'];
      $file_tmp6 = $_FILES['section2img3']['tmp_name'];
      $file_extension6 = strtolower(pathinfo($section2img3, PATHINFO_EXTENSION));

      if (!in_array($file_extension6, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp6, "assets/uploads/" . $section2img3);
  }

  $section1img = '';
  if (isset($_FILES['section1img'])) {
      $section1img = $_FILES['section1img']['name'];
      $file_tmp7 = $_FILES['section1img']['tmp_name'];
      $file_extension7 = strtolower(pathinfo($section1img, PATHINFO_EXTENSION));

      if (!in_array($file_extension7, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp7, "assets/uploads/" . $section1img);
  }


$sql="SELECT * from websitedata";
$result = $conn->query($sql);

if($result->num_rows >0){
    $row = $result->fetch_assoc();
      
 /*  if(empty($logoFile) && empty($logoText) && empty($row['logoFile']) && empty($row['logoText'])){
   echo "kindly select image or text.";
   }
  else if(!empty($logoText)){
    echo "Condition 2";
   $sql="UPDATE websitedata SET logoType='$logoType',
      logoFile=' ',
      logoText='$logoText'";
      mysqli_query($conn, $sql);
      echo $logoText;
  }

  else if(!empty($logoFile) && empty($logoText)){
   $sql="UPDATE websitedata SET logoType='$logoType',
   logoFile='$logoFile',
   logoText=' '";
   mysqli_query($conn, $sql);
   echo $logoFile;

//echo "Condition 3";
}

   else if(!empty($row['logoFile']) && !empty($logoText)){
      $logoFile = $row['logoFile'];
      $sql="UPDATE websitedata SET logoType='$logoType',
      logoFile='$logoFile'
      ,logoText=''";
      mysqli_query($conn, $sql);
      echo $logoFile;

    //echo "Condition 4";

   }
   else if(!empty($row['logoFile'])){
   $logoFile = $row['logoFile'];
      $sql="UPDATE websitedata SET logoType='$logoType',
      logoFile='$logoFile'
      ,logoText=''";
      mysqli_query($conn, $sql);
      echo $logoFile;
    echo "Condition 57";

   }
 //  print_r();
 */

if(empty($logoFile) && empty($logoText) && empty($row['logoFile']) && empty($row['logoText'])){
    echo "kindly enter data";
}
else if(!empty($row['logoFile']) && empty($logoFile) && empty($logoText)){
    $logoFile = $row['logoFile'];
    $sql="UPDATE websitedata SET logoType='$logoType',
      logoFile='$logoFile'
      ,logoText=''";
      mysqli_query($conn, $sql);
      echo "empty row and file";
}
else if(!empty($logoFile)){
    $sql="UPDATE websitedata SET logoType='$logoType',
    logoFile='$logoFile'
    ,logoText=''";
    mysqli_query($conn, $sql);
    echo "empty text";
}
else if(!empty($logoText)){
    $sql="UPDATE websitedata SET logoType='$logoType',
    logoFile=''
    ,logoText='$logoText'";
    mysqli_query($conn, $sql);
    echo "empty file";
}

}
else{   
 $sql = "INSERT INTO websitedata (logoType, logoFile, logoText, navItem1, navItem2, navItem3, navItem4, navItem5, navItem6, navItem7, navItem8, anchor1, anchor2,section1heading1,section1heading2,section1para, section1img, section2heading, section2para, anchor3, section2img1, section2img1heading, section2img1para, section2img2, section2img2heading, section2img2para, section2img3, section2img3heading, section2img3para) 
  VALUES ('$logoType', '$logoFile', '$logoText', '$navItem1', '$navItem2', '$navItem3', '$navItem4', '$navItem5', '$navItem6', '$navItem7', '$navItem8', '$anchor1', '$anchor2','$section1heading1','$section1heading2','$section1para', '$section1img', '$section2heading', '$section2para', '$anchor3', '$section2img1', '$section2img1heading', '$section2img1para', '$section2img2', '$section2img2heading', '$section2img2para', '$section2img3', '$section2img3heading', '$section2img3para')";
  mysqli_query($conn, $sql);
  echo "inserted 3";
}

}
?>