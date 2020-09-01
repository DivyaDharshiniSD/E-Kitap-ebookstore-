<html>
<head>
    <title>Google Authentication</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <center>

     <h1></h1>

     <!-- <button type="button" id="googlebtn" onclick="GoogleLogin();"></button> -->

 </center>
<script src="https://www.gstatic.com/firebasejs/6.0.1/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
  apiKey: "AIzaSyBwP64qrecBTom98BzoClha4zdL1YF4FKw",
  authDomain: "glogin-285008.firebaseapp.com",
  databaseURL: "https://glogin-285008.firebaseio.com",
  projectId: "glogin-285008",
  storageBucket: "glogin-285008.appspot.com",
  messagingSenderId: "488008889094",
  appId: "1:488008889094:web:54bcd8833611eaec2f2487",
  measurementId: "G-1L8S9C3BP5"
};
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script>

    //first of all create google provider object

    var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login

        window.location="print.php";
    }).catch(function (error) {
        var errorMessage=error.message;
        alert(errorMessage);
    });
</script>
<script src="google.js" type="text/javascript"></script>
</body>
</html>

