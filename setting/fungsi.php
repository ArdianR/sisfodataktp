<?php
function selengkapnya($isi){
    $i = strpos($isi, '<hr />');
    if ($i !== false) {
        $i += strlen('<hr />');
        return substr($isi, 0, $i);
    }
    else return $isi;
}
?>
