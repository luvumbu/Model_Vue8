<script>

var xmlhttp = new XMLHttpRequest();
var url = "http://localhost/Model_Vue6/login/blog/index.php/41c47dc664fb629f0b250339c9886e86133c232";

xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    var myArr = JSON.parse(this.responseText);
   console.log(myArr) ; 
    }
};

xmlhttp.open("GET", url, true);
xmlhttp.send();

</script>