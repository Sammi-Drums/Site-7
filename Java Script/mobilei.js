const phnbtn = document.querySelector('.phnbtn');
let menuOpen = false;
phnbtn.addEventListener('click', () => {
    if(!phnbtn){
        phnbtn.classList.add('open');
        menuOpen = true;
    } else{
        phnbtn.classList.remove('open');
        menuOpen = false;
    }
});

