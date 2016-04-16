<?php  //defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-12 10:31:05
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-04-16 11:15:49
 */

$wechatObj = new IndexValid();
if (!isset($_GET['echostr'])) {
    $wechatObj->responseMsg();
}else{
    $wechatObj->valid();
}

class IndexValid
{
    //验证签名
    public function valid()
    {
        $echoStr = $_GET["echostr"];
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if($tmpStr == $signature){
            echo $echoStr;
            exit;
        }
    }


    public function responseMsg()
    {
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        if (!empty($postStr)){

            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $RX_TYPE = trim($postObj->MsgType);
            $this->AddLog(TRUE,$postObj);

            switch ($RX_TYPE)
            {
                case "text":
                    $resultStr = $this->receiveText($postObj);
                    break;
                case "image":
                    $resultStr = $this->receiveImage($postObj);
                    break;
                case "location":
                    $resultStr = $this->receiveLocation($postObj);
                    break;
                case "voice":
                    $resultStr = $this->receiveVoice($postObj);
                    break;
                case "video":
                    $resultStr = $this->receiveVideo($postObj);
                    break;
                case "link":
                    $resultStr = $this->receiveLink($postObj);
                    break;
                case "event":
                    $resultStr = $this->receiveEvent($postObj);
                    break;
                default:
                    $resultStr = "unknow msg type: ".$RX_TYPE;
                    break;
            }
            echo $resultStr;
        }else {
            echo "";
            exit;
        }
    }

    private function receiveEvent($object)
    {
        $contentStr = "";
        switch ($object->Event)
        {
            case "subscribe":
                $contentStr = "欢迎关注".$this->bytes_to_emoji(0x1F1E8).$this->bytes_to_emoji(0x1F1F3);
                break;
            case "unsubscribe":
                $contentStr = "";
                break;

            case "CLICK":
                switch ($object->EventKey)
                {
                        case "company":
                            $contentStr[] = array("Title" =>"联系大厨到家", 
                                                  "Description" =>"联系我们：
                                                               您在途悦商城和时间银行的使用中遇到任何问题或有任何疑问，
                                                               欢迎随时致电联系我们：028-86283456
                                                               在线时间10：30am-18：30pm
                                                               如果未及时接听您的电话，您可在后台留言，看到留言后我们会第一时间与您联系", 
                                                  "PicUrl" =>"http://www.bestingmedia.com/img/contact/img.png", 
                                                  "Url" =>"http://www.bestingmedia.com/contactus.php");
                            //文字消息
                            /*$contentStr = "联系我们：
                                           您在途悦商城和时间银行的使用中遇到任何问题或有任何疑问，
                                           欢迎随时致电联系我们：028-86283456
                                           在线时间10：30am-18：30pm
                                           如果未及时接听您的电话，您可在后台留言，看到留言后我们会第一时间与您联系";
                            */
                        break;
                        default:
                           $contentStr[] = array("Title" =>"你点击了: ".$object->EventKey, 
                                               "Description" =>"您正在使用的是测试接口", 
                                               "PicUrl" =>"http://www.bestingmedia.com/img/contact/img.png", 
                                               "Url" =>"weixin://www.bestingmedia.com");
                        break;
                }
            break;
            default:
                $contentStr = "receive a new event: ".$object->Event;
            break;
        }
                if (is_array($contentStr)){
                    $resultStr = $this->transmitNews($object, $contentStr);
                }else{
                    $resultStr = $this->transmitText($object, $contentStr);
                }
                return $resultStr;

                // $resultStr = $this->transmitText($object, $contentStr);
                // return $resultStr;
    }



    private function transmitText($object, $content, $funcFlag = 0)
    {
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[text]]></MsgType>
                    <Content><![CDATA[%s]]></Content>
                    <FuncFlag>%d</FuncFlag>
                    </xml>";
        $resultStr = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content, $funcFlag);
        return $resultStr;
    }

    private function transmitNews($object, $arr_item, $funcFlag = 0)
    {
        //首条标题28字，其他标题39字
        if(!is_array($arr_item))
            return;

        $itemTpl = "<item>
                        <Title><![CDATA[%s]]></Title>
                        <Description><![CDATA[%s]]></Description>
                        <PicUrl><![CDATA[%s]]></PicUrl>
                        <Url><![CDATA[%s]]></Url>
                    </item>";
        $item_str = "";
        foreach ($arr_item as $item)
            $item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['PicUrl'], $item['Url']);

        $newsTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[news]]></MsgType>
                    <Content><![CDATA[]]></Content>
                    <ArticleCount>%s</ArticleCount>
                    <Articles>
                    $item_str</Articles>
                    <FuncFlag>%s</FuncFlag>
                    </xml>";
        $resultStr = sprintf($newsTpl, $object->FromUserName, $object->ToUserName, time(), count($arr_item), $funcFlag);
        return $resultStr;
    }

    private function receiveText($object)
    {
        $funcFlag = 0;
        $contentStr = "你发送的是文本，内容为：".$object->Content;
        $resultStr = $this->transmitText($object, $contentStr, $funcFlag);
        return $resultStr;
    }

    private function receiveImage($object)
    {
        $funcFlag = 0;
        $contentStr = "你发送的是图片，地址为：".$object->PicUrl;
        $resultStr = $this->transmitText($object, $contentStr, $funcFlag);
        return $resultStr;
    }

    private function receiveLocation($object)
    {
        $funcFlag = 0;
        $contentStr = "你发送的是位置，纬度为：".$object->Location_X."；经度为：".$object->Location_Y."；缩放级别为：".$object->Scale."；位置为：".$object->Label;
        $resultStr = $this->transmitText($object, $contentStr, $funcFlag);
        return $resultStr;
    }

    private function receiveVoice($object)
    {
        $funcFlag = 0;
        $contentStr = "你发送的是语音，媒体ID为：".$object->MediaId;
        $resultStr = $this->transmitText($object, $contentStr, $funcFlag);
        return $resultStr;
    }

    private function receiveVideo($object)
    {
        $funcFlag = 0;
        $contentStr = "你发送的是视频，媒体ID为：".$object->MediaId;
        $resultStr = $this->transmitText($object, $contentStr, $funcFlag);
        return $resultStr;
    }

    private function receiveLink($object)
    {
        $funcFlag = 0;
        $contentStr = "你发送的是链接，标题为：".$object->Title."；内容为：".$object->Description."；链接地址为：".$object->Url;
        $resultStr = $this->transmitText($object, $contentStr, $funcFlag);
        return $resultStr;
    }

    //字节转Emoji表情
    function bytes_to_emoji($cp)
    {
        if ($cp > 0x10000){       # 4 bytes
            return chr(0xF0 | (($cp & 0x1C0000) >> 18)).chr(0x80 | (($cp & 0x3F000) >> 12)).chr(0x80 | (($cp & 0xFC0) >> 6)).chr(0x80 | ($cp & 0x3F));
        }else if ($cp > 0x800){   # 3 bytes
            return chr(0xE0 | (($cp & 0xF000) >> 12)).chr(0x80 | (($cp & 0xFC0) >> 6)).chr(0x80 | ($cp & 0x3F));
        }else if ($cp > 0x80){    # 2 bytes
            return chr(0xC0 | (($cp & 0x7C0) >> 6)).chr(0x80 | ($cp & 0x3F));
        }else{                    # 1 byte
            return chr($cp);
        }
    }
    
    //日志LOG
    public function AddLog($errcode , $errmsg){
        $this->returnAy = array();
        $this->returnAy['errcode'] = $errcode;
        $this->returnAy['errmsg'] = $errmsg;
        $this->returnAy['errtime'] = date("Y-m-d H:i:s",time());
        $logfile = fopen("logfile_".date("Ymd",time()).".txt", "a+");
        $txt = json_encode($this->returnAy)."\n";
        fwrite($logfile, $txt);
        fclose($logfile);
        //return $this->returnAy;
    }
}    