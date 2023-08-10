( function( $ ) {


    jQuery("#hamburger").click(function () {
		jQuery("body").toggleClass( "menu-active" );
		jQuery(this).toggleClass( "close" );

	 });



}( jQuery ) );






jQuery(document).ready(function() {
		var i = 0;
		jQuery( ".count" ).each(function() {
			var idCounter = "counter"+ ++i;
			var cifra1 = jQuery(this).text(); // Cifra ingresada back
			var primerCaracter = cifra1.charAt(0); // Primer carÃ¡cter de la cifra
			var ultimoCaracter = cifra1.charAt(cifra1.length-1);  // Ãšlitmo carÃ¡cter de la cifra
			var cifraClean = cifra1.replace(/[^0-9]/g,''); // Cifra sanitizada (solo nÃºmeros)
			var CifraConPunto = cifra1.replace(/,/g, '.'); // Cifra con coma pasada a puntos
			var StrAfterComa = cifra1.substr(cifra1.indexOf(",") + 1); // string despues de la coma
			var StrAfterComaClean = StrAfterComa.replace(/[^0-9]/g,''); // string sanitizado despues de la coma
			var decimalPlaces = StrAfterComaClean.replace(/ /g,'').length // nÃºmero de digitos despuÃ©s de la coma

			//Si el primer caracter es numÃ©rico pasa a ser prefijo :
			if(jQuery.isNumeric(primerCaracter)){
					var prefix = "";
			}else {
					var prefix = primerCaracter;
			}

			//Si el Ãºltimo caracter es numÃ©rico pasa a ser sufijo :
			if(jQuery.isNumeric(ultimoCaracter)){
					var sufix = "";
			}else {
					var sufix = ultimoCaracter;
			}

			//Si la cifra contiene una coma :
			if (cifra1.indexOf(',') !== -1){
					var separator = "";
					var numeroDecimales = decimalPlaces;
					var decimal = ","
					var CifraFinal = CifraConPunto
					// tiene ,
			}else {
					var separator = ".";
					var numeroDecimales = "";
					var decimal = "";
					var CifraFinal = cifraClean
			}

			// counter, cifrainicial, cifrafinal, numerodecimales, duraciÃ³n
			var c = new CountUp(this,0,CifraFinal,numeroDecimales,0,{
					separator: separator,
					decimal: decimal,
					prefix: prefix,
					suffix: sufix

			});

			jQuery(this).one('inview', function(event, isInView) {
				if (isInView) {
					c.start();
				}//endif
			});

		});
	})
