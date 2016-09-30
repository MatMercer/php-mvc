<h1>Messages board...?</h1>
<p>Here are the messages stored dynamically in a database.</p>
<p>
<?php
foreach($data as $msg) {
    echo '<hr>';
    echo '<b>Message Title: </b>' . $msg->title;
    echo '<br><b>Author: </b>' . $msg->author;
    echo '<br><b>Post Date: </b>' . $msg->post_date;
    echo '<br><b>Content: </b>' . $msg->content;
}
?>
</p>