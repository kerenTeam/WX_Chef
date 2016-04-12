<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-12 10:43:05
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-04-12 11:38:42
 */

define("TOKEN", "IBM Group");

$wechatObj = new WeChatIndex();
if (!isset($_GET['echostr'])) {
    $wechatObj->responseMsg();
}else{
    $wechatObj->valid();
}
class WeChatIndex extends WxApi
{
    public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    public function responseMsg()
    {
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        if (!empty($postStr)){
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $RX_TYPE = trim($postObj->MsgType);
            $this->EchoLog(TRUE,$postObj);

            switch ($RX_TYPE)
            {
                case "text"://文本格式
                    $resultStr = $this->receiveText($postObj);
                    break;
                case "event":
                    $resultStr = $this->receiveEvent($postObj);
                    break;
                case 'image'://图片格式
                    break;
                case 'voice'://声音
                    break;
                case 'video'://视频
                    break;
                case 'shortvideo'://小视频
                    break;
                case 'location'://上传地理位置
                    break;
                case 'link'://链接相应
                    break;
                default:
                    break;
            }
            echo $resultStr;
        }else {
            echo "";
            exit;
        }
    }

    private function receiveText($object)
    {   
        //extract post data
        if (!empty($postStr)){
                
                $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $type = $postObj->MsgType;
                $event = $postObj->Event;
                $keyword = trim($postObj->Content);
                $time = time();
                $textTpl = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            <FuncFlag>0</FuncFlag>
                            </xml>"; 
                //加载图文模版
                $picTpl = "<xml>
                                 <ToUserName><![CDATA[%s]]></ToUserName>
                                 <FromUserName><![CDATA[%s]]></FromUserName>
                                 <CreateTime>%s</CreateTime>
                                 <MsgType><![CDATA[%s]]></MsgType>
                                 <ArticleCount>1</ArticleCount>
                                 <Articles>
                                 <item>
                                 <Title><![CDATA[%s]]></Title> 
                                 <Description><![CDATA[%s]]></Description>
                                 <PicUrl><![CDATA[%s]]></PicUrl>
                                 <Url><![CDATA[%s]]></Url>
                                 </item>
                                 </Articles>
                                 <FuncFlag>1</FuncFlag>
                            </xml> ";
                if($type == "event" && $event == "subscribe")
                {   
                    include_once './config.php';
                    $dbjoinReply = $pdo->query("SELECT *  FROM wd_keyreply where difference = 'joinReply' and state = '1' LIMIT 1");
                    $joinReply = $dbjoinReply->fetch(PDO::FETCH_ASSOC);
                    $title =  $joinReply["name"];
                    $desription =  $joinReply["keycode"];
                    $image =  SELFURL.$joinReply["Picurl"];
                    $isimg = $joinReply["Picurl"];
                    $turl = $joinReply["linkurl"];
                    if (empty($isimg))
                    {  //如果不是图文就发送文本
                        $msgType = "text";
                        $resultStrjoin = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $desription);
                        echo $resultStrjoin;
                    } else {
                        $msgType = "news";   //类型
                        $resultStrjoin = sprintf($picTpl, $fromUsername, $toUsername, $time, $msgType, $title,$desription,$image,$turl);
                        echo $resultStrjoin;
                    }

                }else{
                        include_once './config.php';
                        $Feedback = mysql_query("SELECT *  FROM wd_keyreply WHERE `keyword` LIKE '%$keyword%' OR NAME LIKE '%$keyword%'  AND state = '1' AND difference = 'keyReply' LIMIT 1");
                        while ($jay = mysql_fetch_array($Feedback)) {
                            $titleback = $jay['name'];
                            $imageback = SELFURL.$jay['Picurl'];
                            $databack  = $jay['addtime'];
                            $contentnews = mb_substr($jay['keycode'],0,100,'utf-8');
                            $contenttext = $jay['keycode'];
                            $turlback = $jay['linkurl'];
                            $ispicurl = $jay['Picurl']; }  //描述
                            if (empty($titleback)) {
                                $msgType = "text";
                                $contentStr = "很抱歉没有搜索到相关信息，您可以登录<a href='http://www.bestingmedia.com/'> 百喜听官网 </a>或电话 028-86283456 来查询相关信息" ;
                                //$contentStr = empty($id);
                                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                                echo $resultStr;
                            } else {
                               if (empty($ispicurl)) //如果不是图文就发送文本
                                {  
                                $msgType = "text";
                                $resultStrjoinDEF = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contenttext);
                                echo $resultStrjoinDEF;
                                } else {
                                $msgType = "news"; //类型
                                $resultStrnewsABC = sprintf($picTpl, $fromUsername, $toUsername, $time, $msgType, $titleback,$contentnews."...",$imageback,$turlback);
                                echo $resultStrnewsABC;
                                }             
                            }
                            
                            
                            
                     }
                       
         
        }else {
            echo "";
            exit;
        }
    }
        // $funcFlag = 0;
        // $contentStr = "你发送的内容为：".$object->Content;
        // $resultStr = $this->transmitText($object, $contentStr, $funcFlag);
        // return $resultStr;
    
    
    private function receiveEvent($object)
    {
        $contentStr = "";
        switch ($object->Event)
        {
            case "subscribe"://关注
                $contentStr = "你好，欢迎关注途悦！";
            case "unsubscribe"://取消关注
                break;
            case "CLICK"://点击
                        switch ($object->EventKey)
                        {
                            case "company":
                                $contentStr[] = array("Title" =>"联系途悦", 
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
                case 'SCAN'://扫描
                    break;
                case 'LOCATION'://地址
                    break;
                case 'VIEW'://跳转
                    break;
                case 'card_pass_check'://卡券审核通过
                    break;
                case 'card_not_pass_check'://卡券审核失败
                    break;
                case 'user_get_card'://用户领取卡券
                    break;
                case 'user_del_card'://用户删除卡券
                    break;
                case 'user_view_card'://用户浏览会员卡
                    break;
                case 'user_consume_card'://用户核销卡券
                    break;
                case 'kf_create_session'://创建会话
                    break;
                case 'kf_close_session'://关闭会话
                    break;
                case 'kf_switch_session'://转接会话
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
    public function EchoLog($errcode , $errmsg){
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
?>
