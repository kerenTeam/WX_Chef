<?php  //defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-12 10:31:05
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-04-14 23:21:35
 */
define("TOKEN", "Chef");

$wechatObj = new Valid();
if (!isset($_GET['echostr'])) {
    $wechatObj->responseMsg();
}else{
    $wechatObj->valid();
}

class Valid
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


    public function responseMsg(){
        //get post data, May be due to the different environments
        $postStr = isset($GLOBALS["HTTP_RAW_POST_DATA"]) && !empty($GLOBALS["HTTP_RAW_POST_DATA"]) ? $GLOBALS["HTTP_RAW_POST_DATA"] : "";
        if(!empty($postStr)){
            libxml_disable_entity_loader(true);
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $this->AddLog(TRUE,$postObj);


            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $MsgType = $postObj->MsgType;


            if($MsgType == 'event'){//执行事件相应
                $Event = $postObj->Event;
                switch ($Event) {
                    case 'subscribe'://关注
                        $contentStr = "你好，欢迎关注大厨到家！";
                        break;
                    case 'unsubscribe'://取消关注
                        break;
                    case 'SCAN'://扫描
                        break;
                    case 'LOCATION'://地址
                        break;
                    case 'CLICK'://点击时间
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
                                                //文字消息；
                                                $contentStr = "联系我们：
                                                                        您在途悦商城和时间银行的使用中遇到任何问题或有任何疑问，
                                                                        欢迎随时致电联系我们：028-86283456
                                                                        在线时间10：30am-18：30pm
                                                                        如果未及时接听您的电话，您可在后台留言，看到留言后我们会第一时间与您联系";
                                                break;
                                            default:
                                                $contentStr[] = array("Title" =>"默认联系途悦回复", 
                                                                      "Description" =>"您正在使用的是途悦测试接口", 
                                                                      "PicUrl" =>"http://www.bestingmedia.com/img/contact/img.png", 
                                                                      "Url" =>"weixin://www.bestingmedia.com");
                                                break;
                                        }
                        break;
                    case 'VIEW'://跳转
                        echo "<script>alert('欢迎来到新世界');</script>";
                        header("Location: http:www.google.com"); exit;
                        break;
                    case 'card_pass_check'://卡券审核通过
                        $contentStr[] = "卡券审核通过";
                        break;
                    case 'card_not_pass_check'://卡券审核失败
                        $contentStr[] = "卡券审核失败";
                        break;
                    case 'user_get_card'://用户领取卡券
                        $contentStr[] = "用户领取卡券";
                        break;
                    case 'user_del_card'://用户删除卡券
                        $contentStr[] = "用户删除卡券";
                        break;
                    case 'user_view_card'://用户浏览会员卡
                        $contentStr[] = "用户浏览会员卡";
                        break;
                    case 'user_consume_card'://用户核销卡券
                        $contentStr[] = "用户核销卡券";
                        break;
                    case 'kf_create_session'://创建会话
                        $contentStr[] = "创建会话";
                        break;
                    case 'kf_close_session'://关闭会话
                        $contentStr[] = "关闭会话";
                        break;
                    case 'kf_switch_session'://转接会话
                        $contentStr[] = "转接会话";
                        break;
                    default:
                        break;
                }
                if (is_array($contentStr)){
                    $resultStr = $this->transmitNews($object, $contentStr);
                }else{
                    $resultStr = $this->transmitText($object, $contentStr);
                }
                return $resultStr;
            }else{
                switch ($MsgType) {
                    case 'text'://文本格式
                        
                        $Feedback = mysql_query("SELECT *  FROM wd_keyreply WHERE `keyword` LIKE '%$keyword%' OR NAME LIKE '%$keyword%'  AND state = '1' AND difference = 'keyReply' LIMIT 1");
                        while ($jay = mysql_fetch_array($Feedback)) {
                            $contentStr['Title'] = $jay['name'];
                            $contentStr['Description'] = mb_substr($jay['keycode'],0,100,'utf-8');
                            $contentStr['PicUrl'] = SELFURL.$jay['Picurl'];
                            $contentStr['Url'] = $jay['linkurl'];   }
                        //如果没有查询到数据
                        if (is_array($contentStr)) {
                            $contentStr[] = "很抱歉没有搜索到相关信息，您可以登录<a href='http://www.baidu.com/'> baidu </a>或电话 028-12345678 来查询相关信息" ;}

                        break;
                    case 'image'://图片格式
                        $contentStr[] = " Your messge is image ";
                        break;
                    case 'voice'://声音
                        $contentStr[] = " Your messge is voice ";
                        break;
                    case 'video'://视频
                        $contentStr[] = " Your messge is video ";
                        break;
                    case 'shortvideo'://小视频
                        $contentStr[] = " Your messge is shortvideo ";
                        break;
                    case 'location'://上传地理位置
                        $contentStr[] = " Your messge is location ";
                        break;
                    case 'link'://链接相应
                        $contentStr[] = " Your messge is link ";
                        break;
                    default:
                        break;
                }
                if (is_array($contentStr)){
                    $resultStr = $this->transmitNews($object, $contentStr);
                }else{
                    $resultStr = $this->transmitText($object, $contentStr);
                }
                return $resultStr;
            }
        }
        else{
            echo "暂时没有任何信息！";
            exit;
        }
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