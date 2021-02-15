/*

Version:2.0;

*/

function init() { linksClickHandler(), animateProficiencySection(), startAnimate(700) }

function linksClickHandler() { const t = document.querySelectorAll("a"),
        e = document.querySelector(".about"); for (let n = 0; n < t.length; n++) t[n].addEventListener("click", function(t) { t.preventDefault(), this.classList.contains("scroll") && e.scrollIntoView({ behavior: "smooth", block: "start" }) }) }

function animateProficiencySection() { document.addEventListener("scroll", function(t) { startAnimate(document.documentElement.clientHeight / 2 - 200) }) }

function startAnimate(t) { const e = document.querySelector(".proficiency").getBoundingClientRect(),
        n = document.querySelectorAll(".proficiency__circle");
    e.top < t && Array.from(n).forEach(t => t.style.animation = "progress 1.5s ease-out forwards") } window.addEventListener("load", init);