<br><h2>Update MS Password</h2>
<div class="row uniform 50%">

    <div class="3u 12u$(xsmall)">
        <input type="text" name="ms_ID" id="ms_ID" value="" placeholder="MS ID"/>
    </div>

    <div class="3u 12u$(xsmall)">
        <input type="password" name="msPassword" id="msPassword" value="" placeholder="Password"/>
    </div>

    <div class='4u$ 12u$(xsmall)'>
        <ul class="actions">
            <li><a class="button special small" id="btupdateMSPassword">Update</a></li>
        </ul>
    </div>
</div>
<input type="hidden" name="_token" id="csrf_token" value="<?php echo csrf_token();?>">
<script type="text/javascript" src="js/updatePassword.js"></script>