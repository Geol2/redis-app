<?php
echo $data.'<pre>';
echo "총 응답시간 : " . $run_time. " (sec)<pre>";
echo "네트워크 소요시간 : " .($run_time - $decode->spend_time)." (sec)<pre>";
?>
<table>
    <thead>
        <tr>
            <th>순위</th>
            <th>검색어</th>
            <th>검색횟수</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($decode->ranking as $key => $value) { ?>
            <tr>
                <td><?= $value['rank'] ?></td>
                <td><?= $value['keyword'] ?></td>
                <td><?= $value['score'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php
exit();