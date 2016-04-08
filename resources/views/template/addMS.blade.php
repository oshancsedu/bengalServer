<br><h2>Add MS</h2>
<div class="row uniform 50%">

    <div class="3u 12u$">
        <div>
            <select name="rsoName" id="rsoName">
                <option value=""><p>- RSO Name -</p></option>
                @foreach($rsoNames as $rsoName)
                    <option value="{{$rsoName->RSO_Name}}"><p>{{$rsoName->RSO_Name}}</p></option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="3u 12u$(xsmall)">
        <input type="text" name="msID" id="msID" value="" placeholder="MS ID"/>
    </div>

    <div class="3u 12u$(xsmall)">
        <input type="password" name="password" id="password" value="" placeholder="Password"/>
    </div>

    <div class='4u$ 12u$(xsmall)'>
        <ul class="actions">
            <li><a class="button special small" id="btaddMS">ADD MS</a></li>
        </ul>
    </div>
</div>
<input type="hidden" name="_token" id="csrf_token" value="<?php echo csrf_token();?>">
<script type="text/javascript" src="js/addMS.js"></script>