<?php
echo $data.'<pre>';
echo "총 응답시간 : " . $run_time. " (sec)<pre>";
echo "네트워크 소요시간 : " .($run_time - $decode->spend_time)." (sec)<pre>";
exit();