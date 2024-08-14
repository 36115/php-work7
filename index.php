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
        <form action="post.php" method="POST" class="py-5 my-3">
        <h1 class="text-center">แบบฟอร์ม</h1>
        <div class="mb-3">
            <label class="form-label">ชื่อ</label>
            <input type="text" class="form-control" name="name" value="นายสรวิชญ์ สิทธิบวรสกุล">
        </div>
        <div class="mb-3">
            <label class="form-label">ชั้น</label>
            <input type="text" class="form-control" name="class" value="ม.6/10">
        </div>
        <div class="mb-3">
            <label class="form-label">เลขที่</label>
            <input type="text" class="form-control" name="number" value="11">
        </div>
        <div class="mb-3">
            <label class="form-label">เพศ</label>
            <select class="form-select" name="gender">
                <option selected value="1">ชาย</option>
                <option value="2">หญิง</option>
                <option value="3">อื่นๆ</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
