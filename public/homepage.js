// ngambil semua elemnt di hs wrapper
let instances = document.querySelectorAll(".hs__wrapper");
instances.forEach((instance) => {
    let arrows = instance.querySelectorAll(".arrow");
    let prevArrow = instance.querySelector('.arrow-prev');
    let nextArrow = instance.querySelector('.arrow-next');
    let box = instance.querySelector(".hs");

    let x = 0;
    let mx = 0;
    let maxScrollWidth = box.scrollWidth - (box.clientWidth / 2) - (box.offsetWidth / 2);


    arrows.forEach((arrow) => {
        arrow.addEventListener('click', function() {
            // cek arrow mana yang dipencet
            if (this.classList.contains("arrow-next")) {
                x = ((box.offsetWidth / 2)) + box.scrollLeft - 10;
                box.scrollTo({
                    left: x,
                    behavior: 'smooth'
                });
            } else {
                x = ((box.offsetWidth / 2)) - box.scrollLeft - 10;
                box.scrollTo({
                    left: -x,
                    behavior: 'smooth'
                });
            }
        });
    });

    // buat mouse scrolling
    box.addEventListener('mousemove', function(e) {
        let mx2 = e.pageX - this.offsetLeft;
        if (mx) {
            this.scrollLeft = this.sx + mx - mx2;
        }
    });

    box.addEventListener('mousedown', function(e) {
        this.sx = this.scrollLeft;
        mx = e.pageX - this.offsetLeft;
    });

    // buat tombol arrow
    box.addEventListener('scroll', function() {
        toggleArrows();
    });

    // reset posisi mouse
    document.addEventListener("mouseup", function() {
        mx = 0;
    });

    // buat disable arrow kanan kiri jika sudah max
    function toggleArrows() {
        if (box.scrollLeft > maxScrollWidth - 10) {
            // ini buat kanan
            nextArrow.classList.add('disabled');
        } else if (box.scrollLeft < 10) {
            // ini buat kiri
            prevArrow.classList.add('disabled');
        } else {
            // else disabled
            nextArrow.classList.remove('disabled');
            prevArrow.classList.remove('disabled');
        }
    }
});