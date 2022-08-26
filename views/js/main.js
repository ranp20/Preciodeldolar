$(() => {
	let cTopBar_m = document.querySelector("#h-m_list-opts"), cMobile_m = document.querySelector(".c_Htop__c__ch__cOptions__mMobile__m"),	btnOpen_mobile = document.querySelector("#btn_Navmobile"), btnClose_mobile = document.querySelector("#btn-sidebarl-close");
	// ------------ ABRIR EL SIDEBARLEFT - MOBILE LANDINGPAGE
	btnOpen_mobile.addEventListener("click", function(){cTopBar_m.classList.toggle("show");});
	// ------------ CERRAR EL SIDEBARLEFT - MOBILE LANDINGPAGE
	cTopBar_m.addEventListener("click", (e) => {if(e.target === cTopBar_m){	cTopBar_m.classList.remove("show");}});
	btnClose_mobile.addEventListener("click", (e) => {cTopBar_m.classList.remove("show");});
	// ------------ CERRAR EL SIDEBAR CUANDO SE SELECCIONA UN ELEMENTO
	cMobile_m.addEventListener("click", (e) => {if(e.target.matches('a')){cTopBar_m.classList.remove('show');}else{return false;}});
	// ------------ ITEM SELECCIONADO DEL MENÚ MOBILE
	var url = window.location.pathname;
	var filename = url.substring(url.lastIndexOf('/')+1);
	if(filename == ""){
		// $(".c_Htop__c__ch__cOptions__mDesk__m__i a").add($(".c_Htop__c__ch__cOptions__mMobile__m__i a")).removeClass("active");
		$(".c_Htop__c__ch__cOptions__mDesk__m__i a").eq(0).add($(".c_Htop__c__ch__cOptions__mMobile__m__i a").eq(0)).addClass("active");
	}else{
		$(".c_Htop__c__ch__cOptions__mDesk__m__i a").removeClass("active");
		$('.c_Htop__c__ch__cOptions__mDesk__m__i a[href="' + filename + '"]').addClass("active");
	}
});