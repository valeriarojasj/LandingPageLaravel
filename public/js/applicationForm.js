// Llamar al select de pais, provincia y ciudad
var campoPais=document.getElementById('country');
var campoProvincia=document.getElementById('province');
var campoCiudad=document.getElementById('city');
var btnFormulario = document.getElementById('btnFormulario');
var formulario = document.getElementById('formulario');

// fetch paises en español y agregarlos a las opciones de pais alfabéticamente:
fetch('https://restcountries.eu/rest/v2/all') 
.then(function(response){
  return response.json();
})
.then(function(paises){
  for(pais of paises){
    var optionCountry  = document.createElement('option');
    var optionCountryText= document.createTextNode(pais["translations"]["es"]);
    optionCountry.append(optionCountryText);
    campoPais.append(optionCountry);
  }
})
.catch(function (error){
  console.error(error);
});

// fetch provincias Argentinas:
fetch('https://apis.datos.gob.ar/georef/api/provincias?orden=id') 
.then(function(response){
  return response.json();
})
.then(function(provincias){
  for(provincia of provincias['provincias']){
    var optionProvince  = document.createElement('option');
    var optionProvinceText= document.createTextNode(provincia["nombre"]);
    optionProvince.value=provincia["nombre"];
    optionProvince.dataset.index =provincia["id"];
    optionProvince.append(optionProvinceText);
    campoProvincia.append(optionProvince);
 }
})
.catch(function (error){
  console.error(error);
});




// identificar el país seleccionado para determinar si es Argentina o no:
campoPais.addEventListener('change',function(){
  var CountrySelected=this.value;
  // si es Argentina cambiar display para que sea visible Provincia y ciudad, de lo contrario dejarlos ocultos.
  if(CountrySelected=="Argentina"){
    document.querySelector('.divProvince').style.display = "block";
    document.querySelector('.divCity').style.display = "block";
  }else{
    document.querySelector('.divProvince').style.display = "none";
    document.querySelector('.divCity').style.display = "none";
  }
});


//fetch provincias Argentinas:
campoProvincia.addEventListener('change',function(){
  var valueProvinciaSelected=this.value;
  function removeOptions(campoCiudad) {
    var i, L = campoCiudad.options.length - 1;
    for(i = L; i >= 1; i--) {
      campoCiudad.remove(i);
    }
  }
  // using the function:
  removeOptions(document.getElementById('city'));
  fetch(`https://apis.datos.gob.ar/georef/api/localidades?provincia=${valueProvinciaSelected}&orden=nombre&max=5000`) 
  .then(function(response){
    return response.json();
  })
  .then(function(localidades){ 
    for(localidad of localidades['localidades']){
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
