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
        ten: "zoo",
        thoiLuong: 20,
        banner: "anh/netflix.jpg",
        trailer: "https://www.youtube.com/embed/nm1hA18q_Ws?si=pQlv9eGyCNBNMuUV",
    }
]
function xemTrailer(){
            //ẩn trailer đi
            document.getElementsByClassName("banner")[0].style = "display:none";
            //hiên thị trailer lên
            document.getElementsByClassName("banner")[1].style = "display:block";
        }