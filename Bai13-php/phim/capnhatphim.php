<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        .i-text input{
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button{
            padding: 5px 0;
            width: 100%;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Cập nhật phim</h1>
        <form class="khoi" action="index.php?page_layout=capnhatphim&id=<?php echo $id; ?>" method="POST" encytype="multipart/form-data">
            <div class="i-text">
                <input type="text" name="ten_phim" id="" placeholder="Tên phim">
            </div>
            <div class="i-text">
                <input type="text" name="quoc_gia" id="" placeholder="Quốc gia">
            </div>
            <div class="i-text">
                <input type="number" name="dao_dien_id" id="" placeholder="Mã đạo diễn">
            </div>
            <div class="i-text">
                <input type="date" name="nam" id="" placeholder="Năm">
            </div>
            <div class="i-text">
                <input type="number" name="do_tuoi" id="" placeholder="Độ tuổi">
            </div>
            <div class="i-text">
                <input type="text" name="mo_ta" id="" placeholder="Mô tả">
            </div>
            <button>Cập nhật</button>
        </form>
<?php
if(    isset($_POST['ten_phim']) &&
       isset($_POST['quoc_gia']) &&
       isset($_POST['nam']) &&
       isset($_POST['do_tuoi']) &&
       isset($_POST['mo_ta']))
    {
        $tenPhim = $_POST['ten_phim'];
        $quocGia = $_POST['quoc_gia'];
        $daoDien = $_POST['dao_dien_id'];
        $nam = $_POST['nam'];
        $doTuoi = $_POST['do_tuoi'];
        $moTa = $_POST['mo_ta'];

        if(!empty($tenPhim) &&
           !empty($quocGia) &&
           !empty($daoDien) &&
           !empty($nam) &&
           !empty($doTuoi) &&
           !empty($moTa))
        {
            $sql = "UPDATE phim SET
                ten_phim = '$tenPhim',
                quoc_gia = '$quocGia',
                dao_dien_id = '$daoDien',
                nam = '$nam',
                do_tuoi = '$doTuoi',
                mo_ta = '$moTa',
                WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: index.php?page_layout=phim");    
                }
                else{
                    echo "Cập nhật phim thất bại";
                }
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
    }
?>
</body>
</html>
