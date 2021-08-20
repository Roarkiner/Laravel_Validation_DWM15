document.querySelector("input[type='submit']").addEventListener('click', ()=>{
    var style = document.createElement('style');
    style.innerHTML = ":invalid:not(form){border-style: solid;border-color: red;}";
    document.head.appendChild(style);
});