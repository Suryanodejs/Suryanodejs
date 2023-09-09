<?php
public function active($id)
{
  $result =  $this->db->update('course_tbl',['status'=> '1'],array('id'=>$id));
  $this->session->flashdata('msg','Data Deleted Successfully');
  redirect('services-list');


}

public function deactive($id)
{

  $result =  $this->db->update('course_tbl',['status'=> '0'],array('id'=>$id));
  $this->session->flashdata('msg','Data Deleted Successfully');
  redirect('services-list');
}

?>
<html>
     <td>
                                            <?php if($value->status == '0'){ ?>

                                            <a href="<?php echo base_url('user-active/'.$value->id);?>"
                                                class="btn btn-success user_status">Active</a>


                                            <?php }else{ ?>

                                            <a href="<?php echo base_url('user-deactive/'.$value->id);?>"
                                                class="btn btn-primary user_status">Deactive</a>

                                            <?php } ?>
                                        </td>
</html>
