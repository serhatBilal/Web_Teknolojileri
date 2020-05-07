function kontrol()
 {
	var ad = document.getElementById("ad").value;
	var soyad = document.getElementById("soyad").value;
	var email = document.getElementById("email").value;
	var at = email.indexOf("@");
    var nokta = email.lastIndexOf(".");
	var sifre = document.getElementById("sifre").value;
	var adres = document.getElementById("adres").value;
	var il = document.getElementById("il").value;
	var ogrenim = document.getElementById("ogrenim").selectedIndex;
	
	if(ad == null || ad == "")
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	} 

    else if(soyad == null || soyad == "")
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	}
	
	else if(email == null || email == "")
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	}
	
	else if(at < 1 || nokta < at + 2 || nokta + 2 >= email.length)
	{
		window.alert('Geçerli email adresi giriniz !!!');
        return false;
	}
	
	else if(sifre == null || sifre == "")
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	}
	
	else if(adres == null || adres == "")
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	}
	
	else if(il == null || il == "")
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	}
	
	var tiklanma1 = 0;
	for(var i = 0; i < document.getElementsByName('Cinsiyet').length; i++)
	{
		if(document.getElementsByName('Cinsiyet')[i].checked)
		{
			tiklanma1 = 1;
		}
	}
	if(tiklanma1 == 0)
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	}
	
	if(ogrenim == "")
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	}
	
	var tiklanma2 = 0;
	if(document.getElementsByName('Kosul')[0].checked)
	{
			tiklanma2 = 1;
	}
	if(tiklanma2 == 0)
	{
		window.alert('Boş alanları doldurunuz !!!');
		return false;
	}
 }