const nav = document.getElementById("responsive_nav"),
    hamburger = document.getElementById("hamburger_nav");

function countdown() {
    const e = new Date("2022-07-8 21:00:00").getTime() - new Date().getTime(),
        n = Math.floor(e / 864e5),
        t = Math.floor((e % 864e5) / 36e5),
        o = Math.floor((e % 36e5) / 6e4),
        m = Math.floor((e % 6e4) / 1e3);
    e > 0 ?
        ((document.getElementById("pday").innerHTML = n), (document.getElementById("phour").innerHTML = t), (document.getElementById("pminute").innerHTML = o), (document.getElementById("psecond").innerHTML = m)) :
        ((document.getElementById("pday").innerHTML = 0), (document.getElementById("phour").innerHTML = 0), (document.getElementById("pminute").innerHTML = 0), (document.getElementById("psecond").innerHTML = 0));
}
hamburger.addEventListener("click", () => {
    nav.classList.toggle("open"),
        setTimeout(() => {
            hamburger.children[0].classList.toggle("_navac"), hamburger.children[1].classList.toggle("_navac");
        }, 0);
});
