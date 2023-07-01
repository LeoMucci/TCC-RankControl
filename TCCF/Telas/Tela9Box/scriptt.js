const inputField = document.querySelector('.chosen-value');
const dropdown = document.querySelector('.value-list');
const dropdownArray = [...document.querySelectorAll('li')];
console.log(typeof dropdownArray)
dropdown.classList.add('open');
inputField.focus(); // Demo purposes only
let valueArray = [];
dropdownArray.forEach(item => {
    valueArray.push(item.textContent);
});

const closeDropdown = () => {
    dropdown.classList.remove('open');
}

inputField.addEventListener('input', () => {
    dropdown.classList.add('open');
    let inputValue = inputField.value.toLowerCase();
    let valueSubstring;
    if (inputValue.length > 0) {
        for (let j = 0; j < valueArray.length; j++) {
            if (!(inputValue.substring(0, inputValue.length) === valueArray[j].substring(0, inputValue.length).toLowerCase())) {
                dropdownArray[j].classList.add('closed');
            } else {
                dropdownArray[j].classList.remove('closed');
            }
        }
    } else {
        for (let i = 0; i < dropdownArray.length; i++) {
            dropdownArray[i].classList.remove('closed');
        }
    }
});

dropdownArray.forEach(item => {
    item.addEventListener('click', (evt) => {
        inputField.value = item.textContent;
        dropdownArray.forEach(dropdown => {
            dropdown.classList.add('closed');
        });
    });
})

inputField.addEventListener('focus', () => {
    inputField.placeholder = 'Digite para filtrar';
    dropdown.classList.add('open');
    dropdownArray.forEach(dropdown => {
        dropdown.classList.remove('closed');
    });
});

inputField.addEventListener('blur', () => {
    inputField.placeholder = 'Selecione o setor';
    dropdown.classList.remove('open');
});

document.addEventListener('click', (evt) => {
    const isDropdown = dropdown.contains(evt.target);
    const isInput = inputField.contains(evt.target);
    if (!isDropdown && !isInput) {
        dropdown.classList.remove('open');
    }
});

let label = document.querySelector(".nomes");
let label1 = document.querySelector(".nomes2");
let label2 = document.querySelector(".nomes3");
let label3 = document.querySelector(".nomes4");
let label4 = document.querySelector(".nomes5");
let label5 = document.querySelector(".nomes6");






const btn = document.querySelector("button");

      btn.addEventListener("click", function () {
        label.style.display = "block";
        label1.style.display = "block";
        label2.style.display = "block";
        label3.style.display = "block";
        label4.style.display = "block";
        label5.style.display = "block";
 });

 





// $('li').getElementById('rh').innerText(function(event) {
//     var x = document.getElementById("nomes");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }
// });


