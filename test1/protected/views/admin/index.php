<!-- Alternative Content Box Start -->
<div class="contentcontainer">
    <div class="headings altheading">
        <h2>Lista de Usuarios</h2>
    </div>
    <div class="contentbox">
        <table width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
                <th><input name="" type="checkbox" value="" id="checkboxall" /></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Content Here</td>
                <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</td>
                <td>
                    <a href="#" title=""><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_edit.png" alt="Edit" /></a>
                    <a href="#" title=""><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_approve.png" alt="Approve" /></a>
                    <a href="#" title=""><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_unapprove.png" alt="Unapprove" /></a>
                    <a href="#" title=""><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_delete.png" alt="Delete" /></a>
                </td>
                <td><input type="checkbox" value="" name="checkall" /></td>
            </tr>
            </tbody>
    </table>
    <div class="extrabottom">
        <ul>
            <li><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_edit.png" alt="Edit" /> Edit</li>
            <li><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_approve.png" alt="Approve" /> Approve</li>
            <li><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_unapprove.png" alt="Unapprove" /> Unapprove</li>
            <li><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/icon_delete.png" alt="Delete" /> Remove</li>
        </ul>
        <div class="bulkactions">
            <select>
                <option>Select bulk action...</option>
            </select>
            <input type="submit" value="Apply" class="btn" />
        </div>
    </div>
    <ul class="pagination">
    <li class="text">Previous</li>
    <li class="page"><a href="#" title="">1</a></li>
    <li><a href="#" title="">2</a></li>
    <li><a href="#" title="">3</a></li>
    <li><a href="#" title="">4</a></li>
    <li class="text"><a href="#" title="">Next</a></li>
    </ul>
    <div style="clear: both;"></div>
</div>