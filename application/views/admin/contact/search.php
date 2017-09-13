<script>
$(function(){
  $("#txt_search_contact").keypress(function(){
    var key = event.keyCode;
    if(key == 13){
      $("#btn_search_contact").click();
    }
  })
});

</script>

            <div id='admin_contact'>
              <h3>聯絡我們管理</h3>
              <div class="form-group">
                <div class="input-group search-group">
                  <input type="text" class="form-control input-search" id="txt_search_contact" placeholder="請輸入關鍵字">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default image-preview-input" id="btn_search_contact">
                      <span class="glyphicon glyphicon-search"></span>
                    </button>
                  </span>
                </div>
              </div><br>
              <h4>查詢 「<?php echo $search?>」 的結果如下</h4><br>
              <table id='tb_admin_contact' class="table table-bordered">
                <tr>
                  <th class="tb_contact_title">留言主旨</th>
                  <th class="tb_contact_name">留言者</th>
                  <th class="tb_contact_time">留言時間</th>
                  <th class="tb_contact_btn">查看/刪除</th>
                </tr>
<?php foreach ($admin_contact as $contact): ?>
                <tr>
                  <td class="tb_contact_title"><?php echo $contact['guestTitle']?></td>
                  <td class="tb_contact_name"><?php echo $contact['guestName']?></td>
                  <td class="tb_contact_time"><?php echo $contact['contactTime']?></td>
                  <td class="tb_contact_btn">
                    <button type="button" class="btn btn-info btn-sm" onclick="window.location.href='/admin/contact/view/<?php echo $contact['guestID']?>'"><span class="glyphicon glyphicon-eye-open"></span> <span class="btn_admin">查看</span></button>
                    <button class="btn btn-danger btn-sm" data-toggle="confirmation_contact" data-title="確定要刪除嗎?" data-id="<?php echo $contact['guestID']?>" data-singleton="true">
                    <span class="glyphicon glyphicon-remove"></span> <span class="btn_admin">刪除</span>
                    </button>
                  </td>
                </tr>
<?php endforeach ?>
              </table>

              <div class="admin_page_link" align="center">
                <ul class="pagination">
<?php echo $link ?>
                </ul>
              </div>
              <div align="center">
                <button type="button" class="btn btn-primary" onclick="window.location.href='/admin/contact'">返回留言列表</button>
              </div>
            </div>
