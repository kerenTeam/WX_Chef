<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="format-detection" content="telephone=no,email=no" />
    <link href="../skin/css/base.css" rel="stylesheet" type="text/css"/>
    <link href="../skin/css/home.css" rel="stylesheet" type="text/css"/>
    <script>
        document.getElementsByTagName("html")[0].style.fontSize = document.documentElement.clientWidth / 3.2 + "px";
    </script>
    <title>菜篮子</title>
</head>
<body>

<div id="main-container">
    <div id="search-bar">
        <img src="./res/logo.png">
        <p class="title-name">菜妹子</p>
        <button class="search-button">请输入菜名搜索</button>
    </div>
    <div id="search-page">
        <div class="title-bar">
            <p class="back-home">&lt;&nbsp;返回</p>
            <input class="search-input" type="text" spellcheck="false" maxlength="13" placeholder="请输入菜品名称、品牌">
            <div class="clear-btn-rect">
                <img class="clear-btn" src="./res/clear.png">
            </div>
            <div class="btn-search">搜索</div>
        </div>
        <div id="search-res-wrapper"></div>
    </div>
    <div id="title-menu" class="clear-fix"></div>
    <div id="sec-menu-container" class="clear-fix"></div>
    <div id="spec-item-container" class="clear-fix"></div>
    <div id="login-tip-container">
        <p class="no-login">您尚未登录菜妹子，立刻<span>登录/注册</span></p>
        <p class="has-login">用户<span></span>,您已登录菜妹子!</p>
    </div>
    <div id="shopping-cart-container"  class="clear-fix">
        <img src="./res/shopping-cart.png">
        <p class="cate-count">品类数: <span>0</span></p>
        <p class="total-pay">总价:<span class="value">0.00</span>元</p>
        <div class="button-pay">下一步</div>
        <p class="pay-tip">当日订单不满100元,无法配送!</p>
    </div>
</div>

<script type="text/template" id="search-res-tmpl">
    <%if(items.length>0){%>
    <ul>
        <%_.each(items, function(vo){%>
        <li pro-id="<%=vo.id%>">
            <div class="left-des-wrapper">
                <p class="item-name"><%=vo.name%></p>
                <p class="item-des"><%=vo.description%></p>
                <p class="item-price"><span class="price_value"><%=vo.today_price_value%></span>元/<%=vo.spec_desc%><span class="spec_value"><%=vo.spec_value%></span><%=vo.spec_unit%>装</p>
                <p class="item-spec"><%=vo.price_desc%></p>
            </div>
            <div class="right-des-wrapper">
                <div class="img-wrapper">
                    <img class="item-pic" src="<%=(server_base+vo.logo)%>">
                </div>
                <div class="button-wrapper">
                    <img class="img-left" src="./res/reduce.png">
                    <p class="selected-count">0</p>
                    <img class="img-right" src="res/add.png">
                </div>
                <p class="selected-info">已选<span class="sel_count">0</span><span><%=vo.spec_desc%></span><span>&nbsp;共</span><span class="sel_value">0</span><span><%=vo.spec_unit%></span></p>
            </div>
        </li>
        <%});%>
    </ul>
    <%}else{%>
    <p class="no-search-result">暂无搜索结果</p>
    <%}%>
</script>
<script type="text/template" id="search-empty-tmpl">
    <div id="search-empty-wrapper">
        <p class="empty-title">历史搜索</p>
        <div class="empty-record">
            <ul>
                <%_.each(recordSet, function(item){%>
                <li><%=item%></li>
                <%});%>
            </ul>
        </div>
        <div class="clear-btn-wrapper">
            <p class="empty-clear-btn">清空历史记录</p>
        </div>
    </div>
</script>

<script type="text/template" id="sec-menu-tmpl">
    <div class="category-content">
        <ul>
            <%_.each(secMenu, function(vo){%>
            <li cate-id="<%=vo.id%>"><p><%=vo.name%></p></li>
            <%});%>
        </ul>
    </div>
</script>

<script type="text/template" id="spec-item-tmpl">
    <div class="spec-content clear-fix">
        <ul class="clear-fix">
            <%_.each(itemSpec, function(vo){%>
            <li pro-id="<%=vo.id%>">
                <div class="left-des-wrapper">
                    <p class="item-name"><%=vo.name%></p>
                    <p class="item-des"><%=vo.description%></p>
                    <p class="item-price"><span class="price_value"><%=vo.today_price_value%></span>元/<%=vo.spec_desc%><span class="spec_value"><%=vo.spec_value%></span><%=vo.spec_unit%>装</p>
                    <p class="item-spec"><%=vo.price_desc%></p>
                </div>
                <div class="right-des-wrapper">
                    <div class="img-wrapper">
                        <img class="item-pic" src="<%=(server_base+vo.logo)%>">
                    </div>
                    <div class="button-wrapper">
                        <img class="img-left" src="./res/reduce.png">
                        <p class="selected-count">0</p>
                        <img class="img-right" src="res/add.png">
                    </div>
                    <p class="selected-info">已选<span class="sel_count">0</span><span><%=vo.spec_desc%></span><span>&nbsp;共</span><span class="sel_value">0</span><span><%=vo.spec_unit%></span></p>
                </div>
            </li>
            <%});%>
        </ul>
    </div>
</script>

</body>

<script type="text/javascript" src="../skin/js/libs/require.js"></script>
<script type="text/javascript" src="../skin/js/require-config.js"></script>
<script type="text/javascript" src="../skin/js/home.js"></script>
</html>