// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCHNGB5v6RyUYUsRWp3mt2ESNXM3NgfPpQ",
  authDomain: "studymate-40b5a.firebaseapp.com",
  projectId: "studymate-40b5a",
  storageBucket: "studymate-40b5a.appspot.com",
  messagingSenderId: "1049236536036",
  appId: "1:1049236536036:web:7be7ce97a525947f428af1",
  measurementId: "G-S7K9KP5NT2"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);


