const press = document.getElementById("about")
press.addEventListener("click", function(){
    const x = document.getElementsByClassName("footer")[0]
    if(x.style.display == "none"){
    x.style.display = "block"
    } else {
        x.style.display = "none"
    }
});

// const data = document.getElementById("form")
// data.addEventListener("click", function(){
// });

const warna = document.getElementById("btnWarna");
warna.addEventListener("click" , function onClick(event){
    var els = document.getElementsByClassName("content_list")
    for (var i = 0; i < els.length; i++) {
        els[i].style.color = "red";
    }
    document.getElementsByTagName("h2")[0].style.color = "red";
});

// function tambah() {
//     document.getElementsByClassName("bar-clossing").style.color = red;
// }

function Cursor() {
    document.getElementById("btnWarna").style.cursor = "pointer"
    document.getElementById("about").style.cursor = "pointer"
    document.getElementById("dark-mode").style.cursor = "pointer"
    document.getElementById("reload").style.cursor = "pointer"
}

// const refresh = document.getElementById("reload")
// refresh.addEventListener("click", function(){
//     // location.replace("index.php");
//     location.reload();
// })



// function Alert() {
//     const up = document.getElementsByName("submitForm")
//     up.addEventListener("click", function(){
//     alert("Form berhasil Di Upload")
//     })
// }