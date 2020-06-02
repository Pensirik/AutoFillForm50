<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pensiri kusalaporn</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

</head>
<body>
            <div class="container text-center">
               <div>
               <a href="index.php" class="btn btn-success">กรอกฟร์อมใหม่อีกครั้ง</a>
               <a href="/completed/<?php echo $_GET['link'];?>" class="btn btn-info">ดาวน์โหลด PDF</a>
               </div>
                <div class="clearfix mb-5"></div>
               <iframe src="/completed/<?php echo $_GET['link'];?>" width="100%" height="900px">
    </iframe>    
            </div>
                      
</body>
</html>

