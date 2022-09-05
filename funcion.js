
users();

function users(){

fetch('https://jsonplaceholder.typicode.com/users')
    .then( response => response.json() )
    .then( data => mostrarData(data) )
    
    .catch( error => console.log(error) )

const mostrarData = (data) => {
    console.log(data)
    let body = ""
    for (var i = 0; i < data.length; i++) {      
       body+=`<tr><td>${data[i].id}</td><td><div class="h5 mb-0 font-weight-bold text-gray-800"style="font-size: 11px;" onclick="nuevo('${data[i].id}');nuevo1('${data[i].name}'); nuevo2('${data[i].username}'); nuevo3('${data[i].email}')">${data[i].name}</td></tr>`
    }                                                                                                                       
    document.getElementById('data').innerHTML = body
   
 }
}
 
function nuevo(id) {

    $('#modal').modal('show')
    $('#idmp1').val(id)
    
}
function nuevo1(id) {

    $('#modal').modal('show')
    $('#name').val(id)
    
}
function nuevo2(id) {

    $('#modal').modal('show')
    $('#usename').val(id)
    
}
function nuevo3(id) {

    $('#modal').modal('show')
    $('#email').val(id)
    
}


// empieza la funciones de  boton de todos

function todos(){
var id = $('#idmp1').val()
location.href="todos.php?id="+id

$('#idmp2').val(id)
    

}
function posts(){
    var id=$('#idmp1').val()
    location.href="posts.php?id="+id
    
   
    $('#idmp2').val(id)
    
    }




