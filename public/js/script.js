// copy menu for mobile
function copyMenu(){
    //copy inside .dpt-cat to .departments
    var dptCategory = document.querySelector('.dpt-cat');
    var dptPlace = document.querySelector('.departments');
    dptPlace.innerHTML = dptCategory.innerHTML;

    //copy inside nav to nav
    var mainNav = document.querySelector('.header-nav nav');
    var navPlace = document.querySelector('.off-canvas nav');
    navPlace.innerHTML = mainNav.innerHTML;

    //copy .header-top .wrapper to .thetop-nav
    var topNav = document.querySelector('.header-top .wrapper');
    var topPlace = document.querySelector('.off-canvas .thetop-nav');
    topPlace.innerHTML = topNav.innerHTML;
}
copyMenu();

//show mobile menu
const menuButton = document.querySelector('.trigger'),
      closeButton = document.querySelector('.t-close'),
      addClass = document.querySelector('.site');
menuButton.addEventListener('click', function(){
    addClass.classList.toggle('showmenu');
});
closeButton.addEventListener('click', function(){
    addClass.classList.remove('showmenu');
});

//show sub menu on mobile
const submenu = document.querySelectorAll('.has-child .icon-small');
submenu.forEach((menu) => menu.addEventListener('click', toggle));

function toggle(e){
    e.preventDefault();
    submenu.forEach((item) => item != this ? item.closest('.has-child').classList.remove('expand') : null)
    if(this.closest('.has-child'.classList != 'expand'));
    this.closest('.has-child').classList.toggle('expand');
}

//slider
const swiper = new Swiper('.swiper', {
    loop: true,

    pagination: {
      el: '.swiper-pagination',
    },
});

//show search
const searchButton = document.querySelector('.t-search'),
      tClose = document.querySelector('.search-close'),
      showClass = document.querySelector('.site');

searchButton.addEventListener('click', function(){
    showClass.classList.toggle('showsearch');
});
tClose.addEventListener('click', function(){
    showClass.classList.remove('showsearch');
});

//show dpt menu
const dptButton = document.querySelector('.dpt-cat .dpt-trigger'),
      dptClass = document.querySelector('.site');

dptButton.addEventListener('click', function(){
    dptClass.classList.toggle('showdpt');
})

// modify order qty
function increment() {
    var inputField = document.getElementById('detail-qty');
    var currentValue = parseInt(inputField.value, 10);

    // Increment the value, but not beyond a certain limit (in this case, infinity)
    inputField.value = currentValue + 1;
}

function decrement() {
    var inputField = document.getElementById('detail-qty');
    var currentValue = parseInt(inputField.value, 10);

    // Decrement the value, but not below 0
    if (currentValue > 1) {
        inputField.value = currentValue - 1;
    }
}

// cart
let table = document.getElementById('cart-table');
// Subtotal
for (let i = 1; i < table.rows.length; i++) {
    let price = parseFloat(table.rows[i].cells[1].innerHTML);
    let qty = parseFloat(table.rows[i].cells[2].innerHTML);
    table.rows[i].cells[3].innerHTML = "Rp" + price * qty;
}

// Total
let sum = 0;
for (let i = 1; i < table.rows.length; i++) {
    let price = parseFloat(table.rows[i].cells[1].innerHTML);
    let qty = parseFloat(table.rows[i].cells[2].innerHTML);
    let subtotal = price * qty;
    sum += subtotal;
}
console.log(sum);
document.getElementById('cart-total').innerHTML = "Rp" + sum;
document.getElementById('grand-total').innerHTML = "Rp" + sum;
document.getElementById('order-total').value = sum;