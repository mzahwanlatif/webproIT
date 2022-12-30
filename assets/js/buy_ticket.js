function namafungsi(){
	//lengkapi kodingan disini
	var jwb = confirm("ingin order ticket");
	
	if (jwb){
		var nama = prompt("name");
		var tgl = prompt("tanggal penerbangan?");
		document.getElementById("demo").innerHTML = "Selamat Datang <br>" + nama + ", " + tgl;
	}else{
		document.getElementById("demo").innerHTML = "terimakasih";
	}
	
}