<?php
echo('<div class="text-danger">');
if (count($errors) > 0) {
    echo('<ul>');
    foreach ($errors as $error) {
        echo('<li>' . $error . '</li>');
    }
    echo('</ul>');
}
echo('</div>');


