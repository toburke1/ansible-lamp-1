d>
  <title>Ansible Application</title>
 </head>
 <body>
 <br />
 <br />
<?php Print "Hello, World! I am the web server {{ inventory_hostname }}"; ?>
<br />
<?php
echo  "List of Databases: <br />";
        {% for host in groups['db'] %}
                $link = mysqli_connect('db01.fale.io', '{{ hostvars[host].dbuser }}', '{{ hostvars[host].dbpass }}') or die(mysqli_connect_error($link));
        {% endfor %}
        $res = mysqli_query($link, "SHOW DATABASES;");
        while ($row = mysqli_fetch_assoc($res)) {
                echo $row['Database'] . "\n";
        }
?>
</body>
</html>

