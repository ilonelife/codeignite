
<form method="post" action="/index.php/form/board_update">
    <input type="hidden" name="id" value="<?php echo $result->_id?>"><br/>
    <input type="text" name="title" value="<?php echo $result->title?>"><br/>
    <textarea name = "content"><?php echo nl2br($result->content)?></textarea><br/>
    <input type="submit" value="글수정">
</form>
