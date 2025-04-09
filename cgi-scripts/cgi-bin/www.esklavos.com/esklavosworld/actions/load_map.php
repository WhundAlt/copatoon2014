<?PHP

	$map = $_REQUEST['mapa'];

	if ($map == 'quebrantar') {
		echo 'inicio=1&name=Quebrantar&description=La sombra de un Reino&chapters=1,2,3,4,5,6,7&ids=1,2,3,4,5,6,7,&names=La Bruja Caila,Bosque Antiguo,mercaderes,El Pantano Negro,guardianes reanimados,Las lanzas heladas,Cuevas de la montaña,&eventos=1,0,0,2,0,3,0,&descriptions=Llegaste a la isla de Quebrantar para mostrar unos documentos a tu viejo amigo Aldris. Pero las cosas habían cambiado.|El bosque está infestado de arañas.|Un grupo de mercaderes está en problemas. Tal vez puedas ayudarlos.|El capitán Farendar te espera en Tuormur para hablarte de asuntos muy importantes.|Los Mahantar son esqueletos guerreros reanimados por brujos Shapibi.|Farendar Valtania y tú caminaron cuesta arriba por las lanzas heladas, buscando  a los últimos soldados leales que se ocultaban en algún lugar de la montaña.|Las lanzas heladas tienen innumerables cuevas en su interior. Muchas de ellas pobladas por bestias desconocidas.|&links=caila-the-witch,ancient-forest,merchants-of-quebrantar,the-black-swamp,reanimated-keepers,the-frozen-spears,mountain-caves,&types=adventure,fight,adventure,adventure,fight,adventure,fight,&icons=town,fight,wagon,hut,fight,camp,fight,&loggedin=333';
	} else if ($map == 'caila-raven') {
		echo 'inicio=1&name=Caila Raven&description=Los primeros nacidos&chapters=&ids=&names=&eventos=&descriptions=&links=&types=&icons=&loggedin=3253';
	}