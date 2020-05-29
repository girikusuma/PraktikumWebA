var bilangan1;
var bilangan2;
var hasil;
var operator;
var operator_seleksi = false;
function tombol(angka) {
	var layar = document.getElementById("output").value;
    switch (layar){
        case "0" :
            layar = angka; 
        break;
        default:
            layar += angka;
    }
    document.getElementById("output").value = layar;
}

function reset() {
	document.getElementById("output").value = "0";
	bilangan1 = 0;
	bilangan2 = 0;
	operator_seleksi = false;
}

function koma() {
	var layar = document.getElementById("output").value;
	if (layar.includes(".") == false) {
		layar += ".";
	}
	document.getElementById("output").value = layar;	
}

function tombol_operator(o) {
	operator_seleksi = true;
	bilangan1 = parseFloat(document.getElementById("output").value);
	operator = o;
	document.getElementById("output").value = "0";
}

function hitung() {
	if (operator_seleksi == true) {
		bilangan2 = parseFloat(document.getElementById("output").value);
		switch(operator){
			case 1 :
				hasil = bilangan1 * bilangan2;
				document.getElementById("output").value = hasil;			
				break;
			case 2 :
				hasil = bilangan1 / bilangan2;
				document.getElementById("output").value = hasil;
				break;
			case 3 :
				hasil = bilangan1 - bilangan2;
				document.getElementById("output").value = hasil;
				break;
			case 4 :
				hasil = bilangan1 + bilangan2;
				document.getElementById("output").value = hasil;
				break;
		}
		operator_seleksi = false
		hasil = 0;
		bilangan1 = 0;
		bilangan2 = 0;
    }
}