<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="https://apis.google.com/js/platform.js"></script>
<meta name="google-signin-client_id" content="885698539192-l3450ojd7b35iu61cpri3quul8cr40s3.apps.googleusercontent.com">
<body>
<div class="g-signin2" data-onsuccess="onSignIn"></div>

<script>
		function onSignIn(googleUser) {
	  var profile = googleUser.getBasicProfile();
	  console.log('ID:' + profile.getId());
	  console.log('Name: ' + profile.getName());
	  console.log('Image URL:' + profile.getImageUrl());
	  console.log('Email: ' + profile.getEmail());
}

</script><a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>

</body>
</html>