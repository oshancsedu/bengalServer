<section>
    <div class="table-wrapper">
        <h2>Biscuit</h2>
        <?php $user_type=Auth::user()->user_type; ?>
        <table class="alt">
            <thead>
            <tr align= "center">
                <td>Product Name</th>
                <td>Size</th>
                <td>Container</th>
                <td>Quantity</th>
                <td>Validity</th>
                <td>MRP of Unit</th>
                <td>MRP</th>
                <td>MRP of Unit</th>
                <td>MRP</th>
                <td>Packing</th>
                <td>DPP Price</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < $lenB; $i++)
                <tr align= "center">
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->product_name}}</p>@if($user_type=="admin") <input type="text" column="product_name">@endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->product_size}}</p>@if($user_type=="admin") <input type="text" column="product_size"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->container}}</p>@if($user_type=="admin") <input type="text" column="container"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->quantity}}</p>@if($user_type=="admin") <input type="text" column="quantity"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->validity}}</p>@if($user_type=="admin") <input type="text" column="validity"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->mrp1_title}}</p>@if($user_type=="admin") <input type="text" column="mrp1_title"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->mrp1}}</p>@if($user_type=="admin") <input type="text" column="mrp1"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->mrp2_title}}</p>@if($user_type=="admin") <input type="text" column="mrp2_title"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->mrp2}}</p>@if($user_type=="admin") <input type="text" column="mrp2"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->packing}}</p>@if($user_type=="admin") <input type="text" column="packing"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$biscuitInfo[$i]->product_id}} @endif'><p>{{$biscuitInfo[$i]->cost_per_unit}}</p>@if($user_type=="admin") <input type="text" column="cost_per_unit"> @endif</td>
                </tr>
            @endfor
            </tbody>
        </table>


        <h2>Candy</h2>
        <table class="alt">
            <thead>
            <tr align= "center">
                <td>Product Name</th>
                <td>Size</th>
                <td>Container</th>
                <td>Quantity</th>
                <td>Validity</th>
                <td>MRP of Unit</th>
                <td>MRP</th>
                <td>MRP of Unit</th>
                <td>MRP</th>
                <td>Packing</th>
                <td>DPP Price</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < $lenC; $i++)
                <tr align= "center">
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->product_name}}</p>@if($user_type=="admin") <input type="text" column="product_name"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->product_size}}</p>@if($user_type=="admin") <input type="text" column="product_size"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->container}}</p>@if($user_type=="admin") <input type="text" column="container"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->quantity}}</p>@if($user_type=="admin") <input type="text" column="quantity"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->validity}}</p>@if($user_type=="admin") <input type="text" column="validity"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->mrp1_title}}</p>@if($user_type=="admin") <input type="text" column="mrp1_title"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->mrp1}}</p>@if($user_type=="admin") <input type="text" column="mrp1"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->mrp2_title}}</p>@if($user_type=="admin") <input type="text" column="mrp2_title"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->mrp2}}</p>@if($user_type=="admin") <input type="text" column="mrp2"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->packing}}</p>@if($user_type=="admin") <input type="text" column="packing"> @endif</td>
                    <td  @if($user_type=="admin") class='editable' id='{{$candyInfo[$i]->product_id}}' @endif><p>{{$candyInfo[$i]->cost_per_unit}}</p>@if($user_type=="admin") <input type="text" column="cost_per_unit"> @endif</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</section>
<input type="hidden" name="_token" id="csrf_token" value="<?php echo csrf_token();?>">
<input type="hidden" name="table_name" id="table_name" value="product_detail_info">
<input type="hidden" name="id_col" id="id_col" value="product_id">
<script type="text/javascript" src="js/editTable.js"></script>