  window.fbAsyncInit = function() {
    FB.init({
      appId      : '472876869568628',
      xfbml      : true,
      version    : 'v2.5'
    });

    if (typeof facebookInit == 'function') {
        facebookInit();
    }    
  }; 

  function facebookInit() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  } 

  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
      pass_user_data_to_PHP(response);
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }


  function pass_user_data_to_PHP(response) {
    var AjaxURL = 'index.php/AjaxController/handle_ajax/'; 
    var jsonString = JSON.stringify([response.name, response.id]);

        $.ajax({
          type: "POST",
          url: AjaxURL,
          data: {"ajax_data": jsonString},
          dataType: "text",
          cache: false,
            success: function(response) {
          window.console.log(response);
          //alert(jsonString);
        }
        });
   }
  
