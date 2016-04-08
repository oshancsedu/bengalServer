<section>
    <div class="table-wrapper">
        <?php $j=0;?>
        @for ($i = 0; $i < $len; $i=$j)
            <?php $flag='true'; ?>
            <h2>{{$prevName=$employeeInfo[$i]->RSO_Name}}</h2>
            <table class="alt">
                <thead>
                <tr align= "center">
                    <td>MS ID</th>
                    <td>Area Code</th>
                    <td>Area Name</th>
                    <td>Distributor Name</th>
                </tr>
                </thead>
                <tbody>
                <?php $user_type=Auth::user()->user_type; ?>

                @for ($j = $i; $flag=='true' && $j < $len; $j++)
                    @if($employeeInfo[$j]->RSO_Name!=$prevName)
                        <?php $j=$j-1; $flag='false';?>
                    @else
                        <tr align= "center">
                            <td id='{{$employeeInfo[$j]->MSID}}'><p>{{$employeeInfo[$j]->MSID}}</p></td>
                            <td
                                @if($user_type=="admin")
                                    class='editable' id='{{$employeeInfo[$j]->MSID}}'
                                @endif
                                ><p>{{$employeeInfo[$j]->AreaCode}}</p>

                                @if($user_type=="admin")
                                    <input type="text" column="AreaCode">
                                @endif
                            </td>
                            <td
                                @if($user_type=="admin")
                                    class='editable' id='{{$employeeInfo[$j]->MSID}}'
                                @endif
                                ><p>{{$employeeInfo[$j]->AreaName}}</p>
                                @if($user_type=="admin")
                                    <input type="text" column="AreaName"></td>
                                @endif
                            <td
                                @if($user_type=="admin")
                                    class='editable' id='{{$employeeInfo[$j]->MSID}}'
                                @endif
                                ><p>{{$employeeInfo[$j]->DistributorName}}</p>
                                @if($user_type=="admin")
                                    <input type="text" column="DistributorName">
                                @endif
                            </td>
                        </tr>
                    @endif
                @endfor
                </tbody>
            </table>
        @endfor

    </div>
</section>
<input type="hidden" name="_token" id="csrf_token" value="<?php echo csrf_token();?>">
<input type="hidden" name="table_name" id="table_name" value="rsoinfo">
<input type="hidden" name="id_col" id="id_col" value="MSID">
<script type="text/javascript" src="js/editTable.js"></script>