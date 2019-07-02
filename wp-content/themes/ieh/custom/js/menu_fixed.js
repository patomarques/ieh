function watcherToFixedMenu() {
    var next_section     = document.getElementById('home-quem-somos');
    var menu_fixed       = document.getElementById('menu-home-content');
    var menu_fixed_col   = document.getElementById('menu-fixed-col');
    var page_content     = document.getElementById('page-content');
//    var contentSize      = page_content.offsetTop;

    //verify if menu element exists
    if(menu_fixed === null){
        return false;
    }

    //menu fixed automatic when scroll
    if(typeof(next_section) != 'undefined' && next_section != null){
        contentSize      = next_section.offsetTop;
        window.onload = function() { watcherToFixedMenu(contentSize) };
        window.onscroll = function() { watcherToFixedMenu(contentSize) };
    }

    if(typeof(page_content) != 'undefined' && page_content != null){
        contentSize      = page_content.offsetTop;
        window.onload = function() { watcherToFixedMenu(contentSize) };
        window.onscroll = function() { watcherToFixedMenu(contentSize) };
    }

    if (window.pageYOffset > (contentSize + 20)) {
        menu_fixed.classList.add("menu-fixed");
        menu_fixed_col.classList.add('col-lg-10');
        menu_fixed_col.classList.remove('col-lg-12');
    } else {
        menu_fixed.classList.remove("menu-fixed");
        menu_fixed_col.classList.remove('col-lg-10');
        menu_fixed_col.classList.add('col-lg-12');
    }
}

// executa um bloco de código ou funções, quando o scroll é feito na janela.
window.onscroll = function () {
    watcherToFixedMenu();
};
