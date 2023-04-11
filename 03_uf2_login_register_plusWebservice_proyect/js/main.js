//Manipulation of the parameters and DOM

createAccount.style.display = "none";
passwordRecover.style.display = "none";


NoAccount.addEventListener('click', ()=> {
	createAccount.style.display = "block";
	signInAccount.style.display = "none";
	passwordRecover.style.display = "none";

});

yesAccount.addEventListener('click', ()=> {
	createAccount.style.display = "none";
	signInAccount.style.display = "block";
	passwordRecover.style.display = "none";
});


passwordForgotButton.addEventListener('click', ()=> {
	createAccount.style.display = "none";
	signInAccount.style.display = "none";
	passwordRecover.style.display = "block";
});
passwordForgotButtonReturn.addEventListener('click', ()=> {
	createAccount.style.display = "none";
	signInAccount.style.display = "block";
	passwordRecover.style.display = "none";
});


