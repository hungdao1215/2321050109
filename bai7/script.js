let listFilm=[
    {
        id:1,
        name:"Mua do",
        banner:"350x495-muado.jpg",
        trailer:"https://youtu.be/BD6PoZJdt_M?si=zHn7KETld02mpabr"
    },
    {
        id:2,
        name:"Conan",
        banner:"conan.jpg",
        trailer:"https://youtu.be/dz5mN-iIC4g?si=fep4VeOvLYCpzPM5"
    },
    {
        id:3,
        name:"Người đẹp và quái vật",
        banner:"Người_đẹp_và_quái_vật_poster.jpg",
        trailer:"https://youtu.be/o6k1ChY8kDg?si=PfyPku9_jkoCEPfx"
    },
    {
        id:4,
        name:"Aquaman",
        banner:"aquaman.jpg",
        trailer:"https://youtu.be/WDkg3h8PCVU?si=EXI5PZn5WLdQTM2R"
    }
]
let keyFilm = 0;

function choseFilm(filmid) {
    for (let i = 0; i<listFilm.length; i++){
        if (listFilm[i].id==filmid) {
            document.getElementsByClassName('banner')[0].src=listFilm[i].banner;
            document.getElementsByClassName('tenbanner')[0].innerHTML=listFilm[i].name;
            keyFilm=i;
        }
    }
    document.getElementsByClassName('banner')[0].style="display:block;";
    document.getElementsByTagName('iframe')[0].style="display:none;";
}
function xemFilm() {
    document.getElementsByClassName('banner')[0].style="display:none;";
    document.getElementsByTagName('iframe')[0].style="display:block;";
    document.getElementsByTagName('iframe')[0].src=listFilm[keyFilm].trailer;
    // alert(listFilm[keyFilm].trailer);
}