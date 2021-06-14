<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
class parsImg{
    private $block = 6;
    //private $block = 7;
    private function Log($data, $title = ''){
        define('DEBUG_FILE_NAME', date('Y-m-d').'.log');
        if(!DEBUG_FILE_NAME){ return false; }
        $log = "\n------------------------\n";
        $log .= date("Y.m.d G:i:s")."\n";
        #$log .= $this->GetUser()."\n";
        $log .= (strlen($title) > 0 ? $title : 'DEBUG')."\n";
        $log .= print_r($data, 1);
        $log .= "\n------------------------\n";
        file_put_contents(__DIR__."/".DEBUG_FILE_NAME, $log, FILE_APPEND);
        #file_put_contents($_SERVER["DOCUMENT_ROOT"]."/ils_log/".DEBUG_FILE_NAME, $log, FILE_APPEND);
        return;
    }
    private function getType(){
        if($this->block == 7){
            $result = 'tp';
        } else {
            $result = 'item';
        }
        return $result;
    }
    private function response($itemName){
        $resp = file_get_contents('http://afinabags.developer.sopdu.me/pars_img.php?type='.$this->getType().'&item='.$itemName);
        echo '<pre>'; print_r($resp); '</pre>';
        $data = json_decode($resp, true);

        if($data['status']=='OK'){
            $result = $data["response"];
        } else {
            $result = 'ERROR';
        }
        return $result;
        /*
        return "ERROR";
        */
        /*
        $api_url = 'http://afinabags.developer.sopdu.me/pars_img.php?type='.$this->getType().'&item='.$itemName;
        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        $html = curl_exec($ch);
        curl_close($ch);
        echo '<pre>'; print_r($html); '</pre>';
        return "ERROR";
        */
    }
    private function updateItem($itemID, $previewPicture, $detailPicture){
        CModule::IncludeModule("iblock");
        $element = new CIBlockElement;
        $element->Update(
            $itemID,
            [
                "PREVIEW_PICTURE"   =>  CFile::MakeFileArray($previewPicture),
                "DETAIL_PICTURE"    =>  CFile::MakeFileArray($detailPicture)
            ]
        );
    }
    private function updateMorePhoto($itemID, $morePhoto){
        foreach ($morePhoto as $mP){
            $mPhoto[] = CFile::MakeFileArray($mP);
        }
        CIBlockElement::SetPropertyValueCode($itemID, 'MORE_PHOTO', $morePhoto);
    }
    private function getItem(){
        CModule::IncludeModule("iblock");
        $zapros = CIBlockElement::GetList(
            [],
            [
                "IBLOCK_ID" =>  $this->block
            ],
            false,
            false,
            ["ID", "NAME", "CODE"]
        );
        while ($row = $zapros->Fetch()){
            //echo '<pre>'; print_r($row); '</pre>';
            $response = $this->response($row["CODE"]);
            //echo '<pre>'; print_r($response); '</pre>';
            if($response != 'ERROR'){
                echo '<pre>'; print_r($response); '</pre>';
                $this->updateItem($row["ID"], $response["PREVIEW_PICTURE"], $response["DETAIL_PICTURE"]);
                $this->updateMorePhoto($row["ID"], $response["PROPERTY_MORE_PHOTO"]);
            }
        }
    }
    public function main(){
        $this->getItem();
    }
}
$parsImg = new parsImg();
$parsImg->main();
//parsImg::main();