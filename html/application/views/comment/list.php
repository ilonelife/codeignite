<?php echo $board_id?>
<table border=1> 
<?php
    foreach($result as $row)
    {
    ?>
    <tr>
        <td>작성자: <?php echo $row['name']?></td>
        <td>댓글내용 : <?php echo $row['content']?></td>
        <td><a href="javascript:comment_delete('<?php echo $row['_id']?>', '<?php echo $board_id?>');">X</a></td>
    </tr>
<?php }?>     
</table>
<form method="post" action="/index.php/form/comment_insert">
    <input type="hidden" name="board_id" value="<?php echo $board_id?>">
    <input type="text" name="content" >
    <input type="submit" value="댓글작성">
</form>

<script>
function comment_delete(str, board_id)
{
    if(confirm("진짜 삭제 하실래요?"))
    {
        location.href="/index.php/form/comment_delete?id="+str+"&board_id="+board_id;
    }
}
</script>
