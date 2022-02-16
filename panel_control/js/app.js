
/*const 
$resultados = document.querySelector("#resultados"),
$codigo_postal = document.querySelector("#codigo_postal");

$codigo_postal.addEventListener("click", () => {
const copomex = async() => {
    try{
       const codigopostal = $codigo_postal.value;
       const respuesta = await fetch("https://api.copomex.com/query/info_cp/"+codigopostal+"?type=simplified&token=pruebas");
     
        if(respuesta.status === 200){
            const datos = await respuesta.json()
            console.log(datos.response.asentamiento);
            console.log(datos.response.municipio);
            console.log(datos.response.ciudad); 
            console.log(datos.response.estado);
            console.log(datos.response.pais);
           
        } else if(respuesta.status === 401){
             console.log('La clave esta mal');
        } else if(respuesta.status === 404)
        {
             console.log('El codigo postal que buscas no existe');
        } else {
            console.log('Error');
        }
    
  } catch(error){
        console.log(error);
    }

}

copomex();
});*/
