function onload(){

    var navigation_bar = document.getElementById("navbar");


        function changeBodyBg(color){
        document.body.style.background = red;
    }

    var menu_button = document.createElement("a");
    menu_button.innerHTML="page 1";
    menu_button.href = "navbar.html";
    var menu_button_list = document.createElement("li")
    menu_button_list.appendChild(menu_button);
    navigation_bar.appendChild(menu_button_list);

    var menu_button = document.createElement("a");
    menu_button.innerHTML="page 2";
    menu_button.href = "";
    var menu_button_list = document.createElement("li")
    menu_button_list.appendChild(menu_button);
    navigation_bar.appendChild(menu_button_list);

    var menu_button = document.createElement("a");
    menu_button.innerHTML="page 3";
    menu_button.href = "";
    var menu_button_list = document.createElement("li")
    menu_button_list.appendChild(menu_button);
    navigation_bar.appendChild(menu_button_list);

    var menu_button = document.createElement("a");
    menu_button.innerHTML="page 4";
    menu_button.href = "";
    var menu_button_list = document.createElement("li")
    menu_button_list.appendChild(menu_button);
    navigation_bar.appendChild(menu_button_list);





}