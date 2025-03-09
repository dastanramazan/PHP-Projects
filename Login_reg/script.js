const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signUp');

// Show sign in form and the you click on signup button and it changes to Register form

signUpButton.addEventListener('click', function () {
    signInForm.style.display = 'none';
    signUpForm.style.display = 'block';
}); 

signInButton.addEventListener('click', function () {
    signInForm.style.display = 'block';
    signUpForm.style.display = 'none';
} );