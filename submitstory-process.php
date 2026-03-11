<?php
include 'db.php';

$name = $_POST['name'];
$course = $_POST['course'];
$company = $_POST['company'];
$story = $_POST['story'];

$photoName = "";
if (!empty($_FILES['photo']['name'])) {
  $targetDir = "uploads/";
  $originalName = basename($_FILES['photo']['name']);
  $photoName = time() . "_" . $originalName;
  $targetFile = $targetDir . $photoName;

  // Allowed image types
  $allowedTypes = [
    'image/jpeg',
    'image/png',
    'image/jpg',
    'image/webp',
    'image/bmp'
  ];

  $fileType = mime_content_type($_FILES['photo']['tmp_name']);

  if (in_array($fileType, $allowedTypes)) {
    $sourceImage = $_FILES['photo']['tmp_name'];
    $imageQuality = 70; // Compression quality (0–100)

    switch ($fileType) {
      case 'image/jpeg':
      case 'image/jpg':
        $image = imagecreatefromjpeg($sourceImage);
        imagejpeg($image, $targetFile, $imageQuality);
        break;
      case 'image/png':
        $image = imagecreatefrompng($sourceImage);
        imagejpeg($image, $targetFile, $imageQuality); // Convert PNG to JPEG
        break;
      case 'image/webp':
        $image = imagecreatefromwebp($sourceImage);
        imagejpeg($image, $targetFile, $imageQuality);
        break;
      case 'image/bmp':
        $image = imagecreatefrombmp($sourceImage);
        imagejpeg($image, $targetFile, $imageQuality);
        break;
      default:
        $photoName = ""; // Unsupported type
    }

    if (isset($image)) {
      imagedestroy($image); // Free memory
    }
  } else {
    $photoName = ""; // Unsupported file type
  }
}

$sql = "INSERT INTO GEEKINFO_STORIES (NAME, COURSE, COMPANY, STORY, PHOTO) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $course, $company, $story, $photoName);
$stmt->execute();

header("Location: geekachievers.php");
exit;
?>