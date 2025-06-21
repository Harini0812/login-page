const signupbtn=document.getElementById('signupbutton');
const signinbtn=document.getElementById('signinbutton');
const signinform=document.getElementById('signin');
const signupform=document.getElementById('signup');
signupbtn.addEventListener('click',function(){
    signinform.style.display="none";
    signupform.style.display="block";
})
signinbtn.addEventListener('click',function(){
    signupform.style.display="none";
    signinform.style.display="block";
})