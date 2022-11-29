document.querySelectorAll('.headerModal i, .bodyModal button').forEach(element => {
    element.addEventListener('click', ()=>{
        document.querySelector('.postModal').style.opacity = 0;
        setTimeout(() => {
            document.querySelector('.postModal').style.display = 'none';
        }, 300);
    });
});

document.querySelector('#bars').addEventListener('click', ()=>{
    document.querySelector('.menu-mobile').style.marginLeft = '0vw';
});

document.querySelector('.menu-mobile i').addEventListener('click', ()=>{
    document.querySelector('.menu-mobile').style.marginLeft = '115vw';;
});

document.querySelector('#formNews form').addEventListener('submit', (e)=>{
    e.preventDefault();
    let title = document.querySelector('#formNews form input[name="title"]').value;
    let subtitle = document.querySelector('#formNews form input[name="subtitle"]').value;
    let categories = document.querySelector('#formNews form select').value;
    let body = document.querySelector('#formNews form textarea').value;

    if(title && subtitle && categories && body){
        document.querySelector('#formNews form').submit();
    } else {
       document.querySelector('.postModal').style.display = 'flex';
       setTimeout(()=>{
            document.querySelector('.postModal').style.opacity = 1;
       }, 300)
    }
});
