<section>
    <?php $cost=0;
    $totalCarton=0;
    $totalPac=0;?>
    <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr align= "center">
                <td>Memo No</th>
                <td>User ID</th>
                <td>Area Name</th>
                <td>Area Code</th>
                <td>Distributor</th>
                <td>Product</th>
                <td>Size</th>
                <td>Cost</th>
                <td>Carton/ Boyam/ Tin</th>
                <td>Packet</th>
                <td>Comment</th>
                <td>Order Time</th>
                <td>Supply Date</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < $len; $i++)
                <tr align= "center">
                    <td>{{$memoInfo[$i]->TransActionID}}</td>
                    <td>{{$memoInfo[$i]->UserID}}</td>
                    <td>{{$memoInfo[$i]->AreaName}}</td>
                    <td>{{$memoInfo[$i]->AreaCode}}</td>
                    <td>{{$memoInfo[$i]->DistributorName}}</td>
                    <td>{{$memoInfo[$i]->ProductName}}</td>
                    <td>{{$memoInfo[$i]->ProductSize}}</td>
                    <td>{{$memoInfo[$i]->ProductCost}}</td>
                    <td>{{$memoInfo[$i]->Carton_Boyam_Tin}}</td>
                    <td>{{$memoInfo[$i]->Packet}}</td>
                    <td>{{$memoInfo[$i]->Comment}}</td>
                    <td>{{$memoInfo[$i]->OrderDate}}</td>
                    <td>{{$memoInfo[$i]->SupplyDate}}</td>

                    <?php $cost=$cost+$memoInfo[$i]->ProductCost;
                          $totalCarton=$totalCarton+$memoInfo[$i]->Carton_Boyam_Tin;
                          $totalPac=$totalPac+$memoInfo[$i]->Packet;
                    ?>
                </tr>
            @endfor
            <tr align= "center">
                <td colspan="6">Total</td>
                <td colspan="2">{{$cost}}</td>
                <td colspan="1">{{$totalCarton}}</td>
                <td colspan="1">{{$totalPac}}</td>
            </tr>
            </tbody>

        </table>
    </div>
</section>