<html>
<head>
	<title></title>
<script type="text/javascript">
function validation(){
  var validasiAngka = /^[0-9]+$/;
  var tahunLahir = document.getElementById("tahun");
  if (tahunLahir.value.match(validasiAngka)) {
      alert("Tahun kelahiran Anda adalah " + tahunLahir.value);
  } else {
      alert("Masukkan tahun kelahiran Anda!\nFormat wajib angka!");
      tahunLahir.value="";
      tahunLahir.focus();
      return false;
  }
}
</script>
</head>
<body>

Tahun Kelahiran:<br>
<input type="text" id="tahun">
<button onclick="validation()"> cek </button>

</body>
</html>