var danhSachPhim = [
    {
        id: 1 ,
        ten: "chó",
        thoiLuong: 20,
        banner: "anh/chó.jpg",
        trailer: "https://www.youtube.com/embed/yrBDTtzVjSI?si=9eM9dv2gkTu5aNRW",
    },
    {
        id: 2 ,
        ten: "aqua",
        thoiLuong: 20,
        banner: "anh/aquaman.jpg",
        trailer: "https://www.youtube.com/embed/2wcj6SrX4zw?si=qSBMUUe7Lb76QuJe&amp;start=2",
    },
    {
        id: 3 ,
        ten: "muado",
        thoiLuong: 20,
        banner: "anh/640x396-muado.jpg",
        trailer: "https://www.youtube.com/embed/BD6PoZJdt_M?si=6UlHbyKatPIG6f8O&amp;start=2",
    },
    {
        id: 4 ,
        ten: "conan",
        thoiLuong: 20,
        banner: "anh/conan.jpg",
        trailer: "https://www.youtube.com/embed/dz5mN-iIC4g?si=KKAnaTPuA1_I9DqH&amp;start=2",
    },
]
function xemTrailer(index){
            //ẩn trailer đi
            document.getElementsByClassName("banner")[0].style = "display:none";
            //hiên thị trailer lên
            document.getElementsByClassName("banner")[1].style = "display:block";
        }
function chonPhim(id){
            for (let i = 0; i < danhSachPhim.length; i++){
                if(danhSachPhim[i].id == id){
                document.getElementsByClassName("banner")[0].innerHTML = danhSachPhim[i].banner;
                document.getElementsByTagName("iframe")[0].src = danhSachPhim[i].trailer;
                }
            }
        }