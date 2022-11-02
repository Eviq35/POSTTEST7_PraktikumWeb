var element = document.body;

function ubahWarna(){
    alert('MODE BERUBAH');
    element.classList.toggle("gelap");
    if(element.classList.contains("gelap")){
        localStorage.setItem("tema", "gelap");
    } else {
        localStorage.setItem("tema", "terang");
    }
    
}

var tema = localStorage.getItem("tema");
if(tema == "gelap"){
    element.classList.add("gelap");
}


const button = document.getElementById('tombol');
button.addEventListener("click", function showinfo(){
    const x = document.getElementById('mode');
    if(x.style.display == "none"){
        x.style.display = "block";
    }else{
        x.style.display = "none";
    }
});

const tombol = document.getElementById('tmb-info');
tombol.addEventListener("click", function showinfo(){
    const x = document.getElementById('info');
    if(x.style.display == "none"){
        x.style.display = "block";
    }else{
        x.style.display = "none";
    }
});

