const shwpEl = document.querySelector('#shwp');
const pwordEl = document.querySelector("#pword");
const usernameEl = document.querySelector('#uname');
const loginbtnEl = document.querySelector('#login');

// Show Button Function
shwpEl.addEventListener('click', () => {
    if (pwordEl.type === "password") {
        pwordEl.type = "text";
        shwpEl.className = "shwbtn1"
    } else {
        pwordEl.type = "password";
        shwpEl.className = "shwbtn0"
    }
});

// Check null function
loginbtnEl.addEventListener('click', () => {
    if((usernameEl.value.length < 1 ) || (pwordEl.value.length < 1 )){
        alert('Please Enter Both Username and Password');
    }
});
