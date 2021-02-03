function cargarPaises(id){
    
    var campoPais=document.getElementById('country-'+id);
    var campoProvincia=document.getElementById('province-'+id);
    var campoCiudad=document.getElementById('city-'+id);

    if(campoPais.dataset.country == 'Argentina'){
        showInputs(id);
    }
    //Cargar select paises
    for(pais of paises){
        var optionCountry  = document.createElement('option');
        if(pais["translations"]["es"]){
            var optionCountryText= document.createTextNode(pais["translations"]["es"]);
            optionCountry.append(optionCountryText);
            optionCountry.value = pais["translations"]["es"];
            optionCountry.selected = "selected";
            campoPais.append(optionCountry);
        }
    }
    //Cargar select provincias
    for(provincia of provincias['provincias']){
        var optionProvince  = document.createElement('option');
        var optionProvinceText= document.createTextNode(provincia["nombre"]);
        optionProvince.value=provincia["nombre"];
        optionProvince.dataset.index =provincia["id"];
        optionProvince.append(optionProvinceText);
        campoProvincia.append(optionProvince);
    }
    //cargar select ciudad
    if(campoProvincia.dataset.provincia){
            for(localidad of localidades['localidades']){
                var optionCity = document.createElement('option');
                var optionCityText= document.createTextNode(localidad["nombre"]);
                optionCity.value=localidad["nombre"];
                optionCity.dataset.index =localidad["id"];
                optionCity.append(optionCityText);
                campoCiudad.append(optionCity);
            }
    }

    campoPais.addEventListener('change',function(){
        var CountrySelected=this.value;
        // si es Argentina cambiar display para que sea visible Provincia y ciudad, de lo contrario dejarlos ocultos.
        if(CountrySelected=="Argentina"){
            showInputs(id);
        }else{
            hideInputs(id);
        }
    });


    campoProvincia.addEventListener('change',function(){
     
        var valueProvinciaSelected=this.options[this.selectedIndex].dataset.index;
        function removeOptions() {
            var i, L = campoCiudad.options.length - 1;
            for(i = L; i >= 1; i--) {
                campoCiudad.remove(i);
            }
        }
        // using the function:
        removeOptions();
    
        fetch(`https://apis.datos.gob.ar/georef/api/localidades?provincia=${valueProvinciaSelected}&orden=nombre&max=5000`) 
        .then(function(response){
            return response.json();
        })
        .then(function(localidadesLista){ 
            localidades = localidadesLista;
            for(localidad of localidadesLista['localidades']){
                var optionCity = document.createElement('option');
                var optionCityText= document.createTextNode(localidad["nombre"]);
                optionCity.value=localidad["nombre"];
                optionCity.dataset.index =localidad["id"];
                optionCity.append(optionCityText);
                campoCiudad.append(optionCity);
            }
        })
        .catch(function (error){
            console.error(error);
        });
    },false);
}



function showInputs(id){
    document.getElementById('divProvince-'+id).style.display = "block";
    document.getElementById('divCity-'+id).style.display = "block";
}
function hideInputs(id){
    document.getElementById('divProvince-'+id).style.display = "none";
    document.getElementById('divCity-'+id).style.display = "none";
}
var paises;
fetch('https://restcountries.eu/rest/v2/all') 
.then(function(response){
    return response.json();
})
.then(function(paisesLista){
    paises = paisesLista;
})
var provincias;
fetch('https://apis.datos.gob.ar/georef/api/provincias?orden=id') 
.then(function(response){
    return response.json();
})
.then(function(provinciasLista){
    provincias = provinciasLista;
    
})
.catch(function (error){
    console.error(error);
}); 
var localidades;


