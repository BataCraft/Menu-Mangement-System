const icon = document.getElementById('p_icon');
const list = document.getElementById('pd');
var count = 0;


   icon.addEventListener('click', ()=>{
    if(count == 1){
        list.style.right = '-100%';
        count = 0;
    }
    else{
        list.style.right = '10px';
        count = 1;
    }

   })