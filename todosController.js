
    //users();
 
function users(id){
fetch('https://jsonplaceholder.typicode.com/users/'+id+'/todos')
    .then( response => response.json() )
    .then( data => mostrarData(data) )
    
    .catch( error => console.log(error) )

const mostrarData = (data) => {
    console.log(data)
    let body = ""
    for (var i = 0; i < data.length; i++) {      
       body+=`<tr><td>${data[i].id}</td><td>${data[i].title}</td><td>${data[i].completed}</td></tr>`
    }                                                                                                                       
    document.getElementById('data').innerHTML = body
   
 }
}


function tarea(){

    $('#modal-tarea').modal('show')
    
    
}



// envair datos con el metodo  post 
function guardar(id){


fetch('https://jsonplaceholder.typicode.com/users/'+id+'/todos', {
   method: 'POST',
   body: data
})
.then(function(response) {
   if(response.ok) {
       return response.text()
   } else {
       throw "Error en la llamada Ajax";
   }

})
.then(function(texto) {
   console.log(texto);
})
.catch(function(err) {
   console.log(err);
});
}