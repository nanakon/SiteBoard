<title>Welcome to SiteBoard</title>
</head>

<body>

<div>Welcome to SiteBoard</div>
<div>Your IP address is <?php echo $ip?></div>
<div>This IP already has its own SiteBoard and this is it</div>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status"></div>

</body>