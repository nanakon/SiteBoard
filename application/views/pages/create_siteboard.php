<title>Create a SiteBoard</title>
</head>

<body>
<div id="status"></div>

<div>Create a new SiteBoard</div>

<?php 

echo form_open();
echo form_input('siteboard_name', 'SiteBoard Name').'<br>';
echo form_submit('submit_create_siteboard_form', 'Create!').'<br>';

?>

</body>