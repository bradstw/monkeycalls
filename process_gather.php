<?php

// now greet the caller
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello.</Say>
    <Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play>
</Response>