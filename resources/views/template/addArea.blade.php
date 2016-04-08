<h2>Add Area</h2>
<div class="row uniform 50%">
    <div class="3u 12u$">
        <div>
            <select name="rso_name" id="rso_name">
                <option value=""><p>- RSO Name -</p></option>
                @foreach($rsoNames as $rsoName)
                    <option value="{{$rsoName->RSO_Name}}"><p>{{$rsoName->RSO_Name}}</p></option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="3u 12u$(xsmall)">
        <input type="text" name="ms_id" id="ms_id" value="" placeholder="MS ID"/>
    </div>
    <div class="3u 12u$(xsmall)">
        <input type="text" name="area_name" id="area_name" value="" placeholder="Area Name"/>
    </div>
    <div class="3u 12u$(xsmall)">
        <input type="text" name="area_code" id="area_code" value="" placeholder="Area Code"/>
    </div>

    <div class="3u$ 12u$(xsmall)">
        <input type="text" name="distributor_name" id="distributor_name" value="" placeholder="Distributor Name"/>
    </div>

    <div class='4u$ 12u$(xsmall)'>
        <ul class="actions">
            <li><a class="button special small" id="btadd">ADD</a></li>
        </ul>
    </div>
</div>
<input type="hidden" name="_token" id="csrf_token" value="<?php echo csrf_token();?>">
<script type="text/javascript" src="js/addArea.js"></script>