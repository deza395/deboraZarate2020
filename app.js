const hamburger= document.querySelector(".hamburger"); //1
const navLinks=document.querySelector(".nav-links"); //1
const links=document.querySelectorAll(".nav-links li"); //1


hamburger.addEventListener('click',()=>{  //2
  navLinks.classList.toggle('open');
});






















 // explicacion paso a paso

 //1= creo mis variables por ejemplo l creo la variable const( cons es un tipo de  vaiable que no se puede moficiar ni pisar) y le digo que del documento me seleccione el elemento que tenga la clase hamgurugeer.
 // nota de color si lo quiero que me tome una clase tengo que poner '.nombreDeLaClase', y para id es '#nombreDelId' y hay millones de otras mas pero bue
 //2= Registra un evento a un objeto en específico. addEventListener es muy poderosa porque yo puedo tener poder de muchos comandos y de muchos eventos en mi codigo. en este caso le estoy diciendo que cuando en la variable amburger se haga click,  haga lo que le paso en la funcion en este cao le digo cuando hagas click altername la clase  nav links a open y con esa funcion nos va a leer el codigo que tenemos para css con la clase open.


 //algo interesante ()=>{ esa es una manera de escribir una funcion anonima.
