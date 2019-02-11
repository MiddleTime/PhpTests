<?php header("Content-Type: text/html;charset=utf-8"); ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

<html>
    <head>
        <title>{% pageTitle %}</title>
    </head>
    <body>
        <ul>
            {% if array as element %}
            <li>{% element %}</li>
            {% /if %}
        </ul>
    </body>
</html>