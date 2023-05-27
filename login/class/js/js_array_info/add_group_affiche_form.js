function add_group_affiche_form(_this){

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("id_div_global_style1").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "pages_on/add_group_affiche_form.html");
    xhttp.send();

}