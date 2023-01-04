let show = document.querySelector('#show');
document.body.addEventListener('change', function (e) {
    let target = e.target;
    let display_msg;
    switch (target.id) {
        case '40':
            display_msg = 'SKOR 40';
            break;
        case '80':
            display_msg = 'SKOR 80';
            break;
        case '120':
            display_msg = 'SKOR 120';
            break;
        case '160':
            display_msg = 'SKOR 160';
            break;
        case 'none':
            display_msg = 'none';
            break;
    }
    show.textContent = display_msg;
});
