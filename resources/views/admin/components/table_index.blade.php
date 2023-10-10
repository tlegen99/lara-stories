<?php
$data = $data ?? null;
$title = $title ?? null;
?>

<div>
    @if($title && trim($title))
        <h2 class="h2">{{ $title }}</h2>
    @endif

    <a href="" class="btn btn-success mt-10"><span>Добавить</span></a>
    
    <table class="admin__table">
    
    </table>
</div>