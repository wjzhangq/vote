<?php
class page_admin_index extends core_admin_page{
    function get($r){
        $r->render('admin/index.html');
    }
}
?>