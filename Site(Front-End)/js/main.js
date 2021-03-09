const drop = document.querySelector('.dropdown');
const dropIcon = document.querySelector('.drop-icon i');
const menu = document.querySelector('.drop-menu');

const iconSearch = document.querySelector('#icon-search');
const search = document.querySelector('#search');

const open = document.querySelectorAll('[data-open]');
const close = document.querySelectorAll('[data-close]');
const openArr = Array.prototype.slice.call(open);

const messageClose = document.querySelectorAll('.message .header .close');

const toggleMenu = document.querySelector('.toggle-menu');
const menuSM = document.querySelector('.menu-sm');
const closeMenu = document.querySelector('.close-menu-sm');

/* 
* DROP MENU
*/
if (drop) {
    drop.addEventListener('click',function(){
        menu.classList.toggle('drop-show');
    })
}


if (toggleMenu) {
    toggleMenu.addEventListener('click', () => {
        menuSM.classList.toggle('menu-sm-visible')
    })
}

if (closeMenu) {
    closeMenu.addEventListener('click', () => {
        menuSM.classList.remove('menu-sm-visible')
    })
}

/**
 * SEARCH
 */
if (iconSearch) {
    iconSearch.addEventListener('click',function(){
        search.classList.toggle('search-show');
        search.focus()
    }) 
}


/*
* Message close
*/

for(const el of messageClose){
    el.addEventListener('click', function () {
        this.parentElement.parentElement.style.display = 'none';
    })
}

/*
*Modal
*/

openArr.forEach(function(current, index, array) {
        
    current.addEventListener('click', function(){
        let modalId = array[index].dataset.open;
        document.getElementById(modalId).classList.add('is-visible')
    })
       
});

for(const el of close){
    el.addEventListener('click', function () {
        this.parentElement.parentElement.parentElement.classList.remove('is-visible')
    })
}

/**Remove elements */

document.addEventListener('click', e => {
    if(e.target == document.querySelector('.modal.is-visible')){
        document.querySelector(".modal.is-visible").classList.remove('is-visible')
    }
})

document.addEventListener('keyup', e => {
    if(e.key == "Escape" && document.querySelector('.modal.is-visible')){
        document.querySelector(".modal.is-visible").classList.remove('is-visible')
    }
})


document.addEventListener('click', e => {
    if(e.target != iconSearch){
        if(e.target != search){
            if (search) {
                search.classList.remove('search-show');
            }
        }
    }
})

document.addEventListener('click', e => {
    if (e.target != dropIcon) {
        if (e.target != drop) {
           if (menu) {
            menu.classList.remove('drop-show');
           }
        }
    }
})