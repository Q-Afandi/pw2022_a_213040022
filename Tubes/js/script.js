// ambil element yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// menambah event untuk keyword
keyword.addEventListener("keyup", function () {
  // object ajax
  var xhr = new XMLHttpRequest();

  // cek ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/ajaxproduct.php?keyword=" + keyword.value, true);
  xhr.send();
});
