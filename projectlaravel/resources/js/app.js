require('./bootstrap');

const login = document.getElementById("login")
const loginF = document.getElementById("loginForm");
const email = document.getElementById("email");
const pass = document.getElementById("pass");
const submit = document.getElementById("submit");
const subM = document.getElementById('submenu3')
const body = document.getElementById('body')
const subM3= document.getElementById('submenu3.1');
const animate= document.getElementById('pageAnimation');



// on load
windows.onload(
    animate.style.display = "none"
)


login.addEventListener('click', function(){
   
    if(loginF.style.display === "none"){
        loginF.style.display = "block";
        

        // console.log(loginF)


    }
    // else if (loginF.style.display == "block") {
    //     loginF.style.display = "block";

    // }
    else{
        loginF.style.display = "none";

    }
})
window.onclick = function(e){

     if(e.target == submit) {
        loginF.style.display = "block";
         }
     
    else if(
         e.target == email ){
            loginF.style.display = "block";
         }
         

    
    else if (e.target == pass) {
        loginF.style.display = "block";
         }
    else if (e.target !== login){
        loginF.style.display = "none";
     }
   

    else  {
        
    }
}

subM.addEventListener('mouseover',(e)=> {

 
 


     subM3.style.display = 'flex';
     subM.style.backgroundColor = 'purple';
     subM3.innerHTML =`
         <div class="row">
            <p class="m-3" >food essential</p>
                 
                     <li> food</li>
                    <li> vegitables</li>
                    <li> fruits</li>
                    <li>snacks</li>
                
            </div>
         <div class="row">
            <p class="m-3" >Health</p>
           <li> Handwash</li>
           <li> Face Masks and Shields</li>
           <li> Sanitizer and Disinfectant</li>
           <li> Disinfectant Wipes and Spray</li>
            <li>Ointment</li>
           <li> Sexual Wellness</li>
           <li> Health Equipments</li>
                 
                     
                
            </div>
     `
 
 
  
 
})
window.onmouseout = function() {


    subM3.style.display = 'none';
    subM.style.backgroundColor = '#004080';

}



