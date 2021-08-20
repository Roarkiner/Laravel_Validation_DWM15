var dark_background = document.querySelector('.background-dark');
var book_detail = document.querySelector('.drawer-detail');
var delete_buttons = document.querySelectorAll('.delete-button');

delete_buttons.forEach((delete_button) => {
    delete_button.addEventListener('mouseenter', (el)=>{
        el.target.setAttribute('src', '../assets/img/red_delete.svg');
    });
    
    delete_button.addEventListener('mouseout', (el)=>{
        el.target.setAttribute('src', '../assets/img/delete.svg');
    });
});

document.querySelectorAll('.drawer-td').forEach((title_td) => {
    title_td.addEventListener('click', (el) =>{
        el = el.target;
        changeDetailState();
        document.querySelector("#name-detail").innerHTML = el.innerHTML;
        document.querySelector("#birth-detail").innerHTML = el.dataset.birth;
        document.querySelector("#nationality-detail").innerHTML = el.dataset.nationality;
        document.querySelector("#wikipedia-detail").setAttribute("href", "https://fr.wikipedia.org/wiki/" + el.innerHTML.replace(' ', '_'));
        document.querySelector("#list-detail").setAttribute("value", el.dataset.id);
    });
});

document.querySelector('.background-dark').addEventListener('click', (el)=>{
    changeDetailState();
});

document.querySelector('#close-icon').addEventListener('click', (el)=>{
    changeDetailState();
})

function changeDetailState(){
    dark_background.classList.toggle('none');
    book_detail.classList.toggle('none');
}