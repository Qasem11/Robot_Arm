const range = document.querySelectorAll("input");
const value = document.querySelectorAll("span");
const data = document.querySelector('#showData');

range.forEach(e => {
    e.addEventListener("change", () => {
        let controlNumber = e.getAttribute("name").slice(-1);
        value[controlNumber - 1].innerText = e.value;
    })
});

data.addEventListener("click", () => {
    
})
