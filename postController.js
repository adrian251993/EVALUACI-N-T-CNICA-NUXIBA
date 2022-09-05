

function posts(id){

    
fetch('https://jsonplaceholder.typicode.com/users/'+id+'/posts')
    .then( response => response.json() )
    .then( data => mostrarData(data) )
    
    .catch( error => console.log(error) )

const mostrarData = (data) => {
    console.log(data)
    let body = ""
    for (var i = 0; i < data.length; i++) {      
       body+=`<tr><td>${data[i].id}</td><td>${data[i].title}</td><td>${data[i].body}</td></tr>`
    }                                                                                                                       
    document.getElementById('data').innerHTML = body
   
 }
}

function coment(id){

    
    fetch('https://jsonplaceholder.typicode.com/post/'+id+'/comments')
        .then( response => response.json() )
        .then( data2=> mostrarData(data2) )
        
        .catch( error => console.log(error) )
    
    const mostrarData = (data2) => {
        console.log(data2)
        let body = ""
        for (var i = 0; i < data2.length; i++) {      
           body+=`<tr><td>${data2[i].id}</td><td>${data2[i].name}</td><td>${data2[i].email}</td><td>${data2[i].body}</td></tr>`
        }                                                                                                                       
        document.getElementById('data2').innerHTML = body
       
     }
    }