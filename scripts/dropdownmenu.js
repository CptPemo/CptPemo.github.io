document.addEventListener("DOMContentLoaded", function() {
    const menuBtns = document.querySelectorAll('.menu-button');
    const dropdownMenus = document.querySelectorAll('.dropdown-menu1','.dropdown-menu2');

    menuBtns.forEach(function(menuBtn) {
        menuBtn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const dropdownMenu = document.getElementById(targetId);

            if (dropdownMenu) {
                dropdownMenus.forEach(function(menu) {
                    if (menu.id !== targetId && menu.classList.contains('show-menu')) {
                        menu.classList.remove('show-menu');
                    }
                });
                dropdownMenu.classList.toggle('show-menu');
            }
        });
    });
});

