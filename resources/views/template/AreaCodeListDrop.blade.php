<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 4/8/2016
 * Time: 7:29 PM
 */
?>
<div class="4u 12u$(xsmall)">
    <div class="select-wrapper">
        <select name="AreaCode" id="AreaCode">
            <option value="">- Area Code -</option>
@foreach($area_code as $areacode)
    <option value="{{$areacode->AreaCode}}">{{$areacode->AreaCode}}</option>
    @endforeach
    </select>
    </div>
    </div>