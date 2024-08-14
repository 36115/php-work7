<?php
    $name = $_POST['name'];
    $class = $_POST['class'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soravich-11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="post.php" method="GET" class="py-5 my-3">
        <h1 class="text-center">ผลลัพธ์ของคุณ</h1>
        <div class="mb-3">
            <label class="form-label">ชื่อ</label>
            <p><?php echo $name;?></p>
        </div>
        <div class="mb-3">
            <label class="form-label">ชั้น</label>
            <p><?php echo $class;?></p>
        </div>
        <div class="mb-3">
            <label class="form-label">เลขที่</label>
            <p><?php echo $number;?></p>
        </div>
        <div class="mb-3">
            <label class="form-label">เพศ</label>
            <p>
                <?php
                    if ($gender == 1) {
                        echo "ชาย";
                    }
                    if ($gender == 2) {
                        echo "หญิง";
                    }
                    if ($gender == 3) {
                        echo "อื่นๆ";
                    }
                
                ?>
            </p>
        </div>

        <button onclick="history.back()" class="btn btn-primary">กลับหน้าแรก</button>
        </form>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>