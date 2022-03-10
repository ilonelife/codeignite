회원정보 수정
<form method="post" action="/index.php/member/modity">
<input type="hidden" name="id" value="<?php echo $result->_id?>"><br/>
    이메일 : <input type="text" name="email" value="<?php echo $result->email?>"><br />
    비밀번호 : <input type="password"  name="old_password" value=""> <br />
    새비밀번호 : <input type="password" name="new_password" value=""> <br />
    <input type="submit" value="회원정보 수정">
</form>

