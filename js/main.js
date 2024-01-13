const togglrbtn = document.querySelector("#nev");
const divlist = document.querySelector(".nev");

togglrbtn.addEventListener("click", () => {
  if (divlist.style.display === "block") {
    divlist.style.display = "block";
  } else {
    divlist.style.display = "block";
  }
});

const toggle = document.querySelector("#nev1");
const divList = document.querySelector(".nev");
toggle.addEventListener("click", () => {
  if (divList.style.display === "none") {
    divList.style.display = "none";
  } else {
    divList.style.display = "none";
  }
});
