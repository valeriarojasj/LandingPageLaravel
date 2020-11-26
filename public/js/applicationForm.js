var campoProvincia=document.getElementById('province');
fetch('https://apis.datos.gob.ar/georef/api/provincias') 
.then(function(response){
  return response.json();
})
.then(function(provincias){
    console.log(provincias);
   
  for(provincia of provincias['provincias']){
     var option  = document.createElement('option');
     var optionText= document.createTextNode(provincia["nombre"]);
     option.value=provincia["nombre"];
     option.dataset.index =provincia["id"];
     option.append(optionText);
     campoProvincia.append(option);
 }
})
.catch(function (error){
  console.error(error);
});



campoProvincia.addEventListener('change',function(){
console.log(this.value);
var valueSelected=this.value;
var optionSelected = document.querySelector(`option[value='${valueSelected}']`);
console.log(optionSelected);
console.log(this);



var campoCiudad=document.getElementById('city');
fetch(`https://apis.datos.gob.ar/georef/api/localidades?provincia=${this.value}`) 
.then(function(response){
 return response.json();
 })
.then(function(localidades){
 console.log(localidades);

 
   
for(localidad of localidades['localidades']){
var option  = document.createElement('option');
var optionText= document.createTextNode(localidad["nombre"]);
 option.value=localidad["nombre"];
option.dataset.index =localidad["id"];
option.append(optionText);
campoCiudad.append(option);
}
})
.catch(function (error){
console.error(error);
 });
},false);

