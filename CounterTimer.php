<?php
function countdown($seconds) {
    while ($seconds >= 0) {
        echo "$seconds\n";
        sleep(1);
        $seconds--;
    }
    echo "Time's up!\n";
}

countdown(5);
?>
