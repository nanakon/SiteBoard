<title>Testing Page</title>

</head>
<body>
<script>
//script z registracie na facebook
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '472876869568628',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php //toto je facebook like a share button ?>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

</body>