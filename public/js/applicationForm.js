var campoProvincia=document.getElementById('province');
fetch('https://apis.datos.gob.ar/georef/api/provincias') 
.then(function(response){
  return response.json();
})
.then(function(provincias){
   
  for(provincia of provincias['provincias']){
     var optionProvincia  = document.createElement('option');
     var optionProvinciaText= document.createTextNode(provincia["nombre"]);
     optionProvincia.value=provincia["nombre"];
     optionProvincia.dataset.index =provincia["id"];
     optionProvincia.append(optionProvinciaText);
     campoProvincia.append(optionProvincia);
 }
})
.catch(function (error){
  console.error(error);
});



campoProvincia.addEventListener('change',function(){


var valueProvinciaSelected=this.value;
var optionProvinciaSelected = document.querySelector(`option[value='${valueProvinciaSelected}']`);




var campoCiudad=document.getElementById('city');
console.log(campoCiudad);
console.log(campoCiudad.length);
function removeOptions(campoCiudad) {
  var i, L = campoCiudad.options.length - 1;
  for(i = L; i >= 1; i--) {
     campoCiudad.remove(i);
  }
}

// using the function:
removeOptions(document.getElementById('city'));




fetch(`https://apis.datos.gob.ar/georef/api/localidades?provincia=${valueProvinciaSelected}`) 
.then(function(response){
 return response.json();
 })
.then(function(localidades){
 

 
   
for(localidad of localidades['localidades']){

var optionLocalidad  = document.createElement('option');
var optionLocalidadText= document.createTextNode(localidad["nombre"]);
 optionLocalidad.value=localidad["nombre"];
optionLocalidad.dataset.index =localidad["id"];
optionLocalidad.append(optionLocalidadText);
campoCiudad.append(optionLocalidad);
}
})
.catch(function (error){
console.error(error);
 });
},false);

