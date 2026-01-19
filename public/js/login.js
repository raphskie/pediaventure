// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/12.6.0/firebase-app.js";
import { getAuth, signInWithEmailAndPassword, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/12.6.0/firebase-auth.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyAXpgOe_fufEOGqtFaZsNNr-pnJmKU8C48",
    authDomain: "pediaventure-c9588.firebaseapp.com",
    projectId: "pediaventure-c9588",
    storageBucket: "pediaventure-c9588.firebasestorage.app",
    messagingSenderId: "777031331616",
    appId: "1:777031331616:web:ded8da496ef43c0ba53145"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

const submit = document.getElementById('submit');
if (submit) {
    submit.addEventListener('click', function (event) {
        event.preventDefault()

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        signInWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                // Signed up
                const user = userCredential.user;
                window.location.href = "administrator"; // Redirect to admin page upon successful login
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;
                alert(errorMessage)
            });

    })
}

// Listen for auth state changes to display user info
onAuthStateChanged(auth, (user) => {
    const userInfoDiv = document.getElementById('user-info');
    if (userInfoDiv) {
        if (user) {
            userInfoDiv.innerText = `Welcome, ${user.email}`;
            localStorage.setItem('admin_uid', user.uid);
        } else {
            userInfoDiv.innerText = 'Not logged in';
            localStorage.removeItem('admin_uid');
        }
    }
    const createdByInput = document.getElementById('created_by');
    if (createdByInput) {
        const uid = localStorage.getItem('admin_uid');
        if (uid) {
            createdByInput.value = uid;
        }
    }
    const classlistLink = document.getElementById('classlist-link');
    if (classlistLink) {
        const uid = localStorage.getItem('admin_uid');
        if (uid) {
            classlistLink.href = "/personal-information?uid=" + uid;
        }
    }
});
