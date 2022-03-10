<?php
class Board_model extends CI_Model {

    public function __construct()
    {
        $this->load->database(); 
    }

    public function list_total($search)
    {
        $data = $this->db->query('
        select 
                count(*) as cnt 
        from 
                ci_board 
        where 
                status = 0 and 
                title like "%'.$search.'%"
        ');
        return $data->row();
    }

    public function list_select($now_page, $search)
    {
        if($now_page == '')
            $now_page = 0;

        $data = $this->db->query('
        select 
            _id,
            title,
            (select email from ci_member where _id = ci_board.member_id) as name 
        from 
            ci_board as ci_board
        where 
            status = 0 and
            title like "%'.$search.'%"
        order by _id desc
        limit '.$now_page.',10
        ');
        
        $result = $data->result_array();
        return $result;
    }

    public function view_select($id){

        $data = $this->db->query("
        select 
            _id,
            title,
            content,
            (select email from ci_member where _id = ci_board.member_id ) as name
        from 
            ci_board as ci_board
        where  
            _id = ".$id."
        ");

        return $data->row();

    }

    public function board_insert($title, $content) {
        $this->db->query("
        INSERT INTO 
                ci_board(title, content)
        values 
                ('".$title."', '".$content."');
        ");
    }

    public function board_update($id, $title, $content) {
        $this->db->query("
        UPDATE 
                ci_board
        SET 
                title = '".$title."', content = '".$content."'
        WHERE 
                _id = ".$id."
        ");
    }

    public function board_delete($id) {
        $this->db->query("
        UPDATE 
                ci_board
        SET 
                status = 1
        WHERE 
                _id = ".$id."
        ");
    }

    public function comment_list($board_id){

        $data = $this->db->query(" 
        select 
                _id,
                content,
                (select email from ci_member where _id = ci_comment.member_id) as name 
        from 
                ci_comment as ci_comment
        where
                board_id = ".$board_id."
                AND
                status = 0
        ");
        
        $result = $data->result_array();
        return $result;
    }


    public function comment_delete($id) {
        $this->db->query("
        UPDATE 
                ci_comment
        SET 
                status = 1
        WHERE 
                _id = ".$id."
        ");
    }


    public function comment_insert($content, $board_id) {
        $this->db->query("
        INSERT INTO 
                ci_comment(content, board_id)
        values 
                ('".$content."', ".$board_id.");
        ");
    }


 

    public function member_insert($email, $password) {

        $result = $this->db->query("
        SELECT 
                email
        FROM 
                ci_member
        WHERE
                email = '".$email."'
        ");

        $row = $result->row();
        var_dump($row);
      
        if ($row != '') {
                echo "이미 있는 아이디입니다";
        }
        else {
                $this->db->query("
                INSERT INTO 
                        ci_member(email, passwd)
                values 
                        ('".$email."', '".$password."');
                ");
                echo "회원가입 성공!!!";
        }
    }
}