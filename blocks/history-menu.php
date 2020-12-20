<script src="jquery-3.2.1.min.js"></script> <!-- Подключение jQuery -->
<script>
	function openNav() {
	  // document.getElementById("mySidenav").style.width = "250px";
	  $(".sidenav").css("width", "250px");
	}
	
	function closeNav() {
	  // document.getElementById("mySidenav").style.width = "0";
	  $(".sidenav").css("width", "0");
	}
</script>
<div class="sidenav"> <!-- Само меню -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="https://vk.com/andyfox_cac">Андрей</a>
  <a href="#">Иди</a>
  <a href="#">Нахуй</a>
  <a href="#">Пидор</a>
</div>