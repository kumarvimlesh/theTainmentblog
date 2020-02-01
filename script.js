var firebaseConfig = {
    apiKey: "AIzaSyDCdY5a7AY54Fn16OVyH27duv7ACYAiLDM",
    authDomain: "thetainmentblog-9842c.firebaseapp.com",
    databaseURL: "https://thetainmentblog-9842c.firebaseio.com",
    projectId: "thetainmentblog-9842c",
    storageBucket: "thetainmentblog-9842c.appspot.com",
    messagingSenderId: "1035298526496",
    appId: "1:1035298526496:web:89ae95aac34b2cdee4b345",
    measurementId: "G-RCZ6RWCY0B"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  const dr = firestore.doc("Subscriber/test");
  console.log("Firebase loaded");
