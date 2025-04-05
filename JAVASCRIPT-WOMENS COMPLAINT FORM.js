const firebaseConfig = {
    apiKey: "AIzaSyBoNoQzyt0dQoGHWkyL-o6Q07OM7nsIn-w",
    authDomain: "women-empowerment-c3961.firebaseapp.com",
    databaseURL: "https://women-empowerment-c3961-default-rtdb.firebaseio.com",
    projectId: "women-empowerment-c3961",
    storageBucket: "women-empowerment-c3961.appspot.com",
    messagingSenderId: "1024096943752",
    appId: "1:1024096943752:web:4cd08021689b855809a93d",
    measurementId: "G-M2LY0ZR3GG",
  };
  
  // -----Initialize Firebase-----
  firebase.initializeApp(firebaseConfig);
  var db = firebase.firestore();
  
  // -----For sending posts to Firebase-----
  function submitPost() {
    var name = document.getElementById("name").value;
    var phone_no = document.getElementById("phone no.").value;
    var place = document.getElementById("place").value;
    var time = document.getElementById("time").value;
    var postContent = document.getElementById("postContent").value;
  
    db.collection("posts")
      .add({
        name: name,
        phone_no: phone_no,
        place: place,
        time: time,
        content: postContent,
        timestamp: firebase.firestore.FieldValue.serverTimestamp(),
      })
      .then(function (docRef) {
        console.log("Document written with ID: ", docRef.id);
        clearForm(); // Clear input after submission
        fetchPosts(); // Refresh the posts displayed
      })
      .catch(function (error) {
        console.error("Error adding document: ", error);
      });
  }
  
  // -----Clearing the form-----
  function clearForm() {
    document.getElementById("name").value = "";
    document.getElementById("phone no.").value = "";
    document.getElementById("place").value = "";
    document.getElementById("time").value = "";
    document.getElementById("postContent").value = "";
    document.getElementById("video").value = ""; // Clear the file input
  }
  
  // -----Dynamically creating branches for companies-----
  function populateBranches() {
    var emergencySelect = document.getElementById("branch");
  
    emergencySelect.innerHTML =
      '<option value="" selected disabled>Select Branch</option>';
  
    // Add options to branch dropdown
    branches.forEach(function (branch) {
      var option = document.createElement("option");
      option.text = branch;
      option.value = branch;
      branchSelect.add(option);
    });
  }
  document.getElementById("company").addEventListener("change", populateBranches);
  populateBranches();
  
  // -----For displaying posts dynamically on viewing page-----
  function fetchAndDisplayPosts() {
    var postsContainer = document.getElementById("posts");
  
    // Clear any existing posts
    postsContainer.innerHTML = "";
  
    // Fetch posts from Firestore
    db.collection("posts")
      .orderBy("timestamp", "desc")
      .get()
      .then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
          var post = doc.data();
          var postHTML = `
                <div class="post">
                  <div class="post-content">
                    <h2>${post.name} - ${post.year}</h2>
                    <p><strong>Company:</strong> ${post.phone_no}</p>
                    <p><strong>Branch:</strong> ${post.place}</p>
                    <p><strong>Experience:</strong> ${post.content}</p>
                  </div>
                </div>
            `;
          postsContainer.innerHTML += postHTML;
        });
      });
  }