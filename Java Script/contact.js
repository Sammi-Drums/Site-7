const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateoInputs();
});
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
};
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /(([^<>()[\]\\.,;:\s@"]+(\."));
    return re.test(String(email).toLowerCase());
}

const validateoInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const password = password.value.trim();
    const password2 = password2.value.trim();

    if(usernameValue === ''){
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }
    if(emailValue === ''){
        setError(email, 'Email is required');
    }
};  




