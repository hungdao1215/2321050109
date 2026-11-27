<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        .tr, th, td{
            border: 1px solid black; 
        }
        .btn-add{
            background-color: green;
            padding: 10px;
        }
        .capnhat{
            background-color:green;
            border-radius:5px;
        }
        .xoa{
            background-color:red;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <h1>Phim</h1>
    <div style="margin: 20px 0">
        <a class="btn-add" href="index.php?page_layout=themphim">Thêm phim</a>
    </div>
    <?php
        $sql = "SELECT p.id, p.ten_phim, p.quoc_gia, dd.ho_ten AS dao_dien,
                       p.nam, p.do_tuoi, p.mo_ta, tl.ten_the_loai, p.poster_url, p.trailer
                FROM phim p
                LEFT JOIN dao_dien dd ON p.dao_dien_id = dd.id
                LEFT JOIN phim_the_loai ptl ON p.id = ptl.phim_id
                LEFT JOIN the_loai tl ON tl.id = ptl.the_loai_id";
        $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên phim</th>
            <th>Quốc gia</th>
            <th>Đạo diễn</th>
            <th>Thể loại</th>
            <th>Năm</th>
            <th>Độ tuổi</th>
            <th>Mô tả</th>
            <th>Poster</th>
            <th>Trailer</th>
            <th>Chức năng</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
            {
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_phim'] ?></td>
            <td><?php echo $row['quoc_gia'] ?></td>
            <td><?php echo $row['dao_dien'] ?></td>
            <td><?php echo $row['ten_the_loai'] ?></td>
            <td><?php echo $row['nam'] ?></td>
            <td><?php echo $row['do_tuoi'] ?></td>
            <td><?php echo $row['mo_ta'] ?></td>
            <td><img src="<?php echo $row['poster_url'] ?>" alt="Poster <?php echo $row['ten_phim'] ?>" width="100"></td>
            <td><a href="<?php echo $row['trailer'] ?>" target="_blank"><?php echo $row['trailer'] ?></a></td>
            <td>
                <a class="capnhat" href= "index.php?page_layout=capnhatphim&id=<?php echo $row['id']?>" >Cập nhật</a>
                <a class ="xoa" href="index.php?page_layout=xoaphim&id=<?php echo $row['id']?>">Xóa</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
