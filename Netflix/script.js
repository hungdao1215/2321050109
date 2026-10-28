var danhSachPhim = [
    {
        id: 1 ,
        ten: "chó",
        thoiLuong: 20,
        banner: "anh/chó.jpg",
        trailer: "https://www.youtube.com/embed/nm1hA18q_Ws?si=pQlv9eGyCNBNMuUV",
    },
    {
        id: 2 ,
        ten: "aqua",
        thoiLuong: 20,
        banner: "anh/aquaman.jpg",
        trailer: "https://www.youtube.com/embed/nm1hA18q_Ws?si=pQlv9eGyCNBNMuUV",
    },
    {
        id: 3 ,
        ten: "muado",
        thoiLuong: 20,
        banner: "anh/640x396-muado.jpg",
        trailer: "https://www.youtube.com/embed/nm1hA18q_Ws?si=pQlv9eGyCNBNMuUV",
    },
    {
        id: 4 ,
        ten: "conan",
        thoiLuong: 20,
        banner: "anh/conan.jpg",
        trailer: "https://www.youtube.com/embed/nm1hA18q_Ws?si=pQlv9eGyCNBNMuUV",
    },
]
function xemTrailer(index){
    var phim = danhSachPhim;
    var 
            //ẩn trailer đi
            document.getElementsByClassName("banner")[0].style = "display:none";
            //hiên thị trailer lên
            document.getElementsByClassName("banner")[1].style = "display:block";
        }