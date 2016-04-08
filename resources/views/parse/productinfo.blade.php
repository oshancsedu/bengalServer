@for($i=0;$i<$len_basic_infos;$i++)
<?php
    $productBasicInfo[$i]["product_id"]=$basicProductInfos[$i]->product_id;
    $productBasicInfo[$i]["header"]=$basicProductInfos[$i]->product_name;
    $productBasicInfo[$i]["banner"]=$basicProductInfos[$i]->banner;
    $productBasicInfo[$i]["ingredient"]=$basicProductInfos[$i]->ingredient;
?>
@endfor
<?php
$data['product_common_info'] = $productBasicInfo;
?>

@for($i=0;$i<$len_detail_infos;$i++)
<?php
        
            $productDetailInfo[$i]["product_id"]    =$detailProductInfos[$i]->product_id;
            $productDetailInfo[$i]["product_name"]  =$detailProductInfos[$i]->product_name;
            $productDetailInfo[$i]["product_size"]  =$detailProductInfos[$i]->product_size;
            $productDetailInfo[$i]["container"] =$detailProductInfos[$i]->container;
            $productDetailInfo[$i]["quantity"]  =$detailProductInfos[$i]->quantity;
            $productDetailInfo[$i]["validity"]  =$detailProductInfos[$i]->validity;
            $productDetailInfo[$i]["mrp1Title"] =$detailProductInfos[$i]->mrp1_title;
            $productDetailInfo[$i]["mrp1"]      =$detailProductInfos[$i]->mrp1;
            $productDetailInfo[$i]["mrp2Title"] =$detailProductInfos[$i]->mrp2_title;
            $productDetailInfo[$i]["mrp2"]      =$detailProductInfos[$i]->mrp2;
            $productDetailInfo[$i]["header"]    =$detailProductInfos[$i]->header;
            $productDetailInfo[$i]["packing"]   =$detailProductInfos[$i]->packing;
            $productDetailInfo[$i]["sellingUnit"]   =$detailProductInfos[$i]->selling_unit;
            $productDetailInfo[$i]["costPerUnit"]   =$detailProductInfos[$i]->cost_per_unit;
            $productDetailInfo[$i]["images"]    =$detailProductInfos[$i]->images;
        
?>
@endfor

<?php
$data["product_detail_info"]=$productDetailInfo;
echo json_encode($data);
?>