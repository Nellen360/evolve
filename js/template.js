$(function () {
    selectCurrentNavTab();
    initAllSlideShows();
});

function cloneObj(obj) {
    return JSON.parse(JSON.stringify(obj));
}

function onWindowResize() {
    initAllSlideShows();
}

function setIframeHeight(id) {
    var iframe = document.getElementById(id);
    iframe.style.height = getDocHeight(id) + "px";
}

function getDocHeight(id) {
    var ifrm = document.getElementById(id);
    var doc = ifrm.contentDocument ? ifrm.contentDocument :
        ifrm.contentWindow.document;
    doc = doc || document;

    var body = doc.body, html = doc.documentElement;
    var height = Math.max(body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight);
    return height;
}


function isOdd(num) {
    var result = true;
    if (num % 2 == 0) {
        result = false;
    } 
    return result;
}

function contains(outerString, innerString) {
    var result = false;
    return (outerString.indexOf(innerString) > -1);
}

function requestData(params,returnFunc) {
    var page = getCurrentPage();
    returnFunc = returnFunc || "retrunedServerRequest";
    
    $.ajax(
    {
        url: page,
        cache: false,
        data: params,
        type: 'POST',
        dataType:"json",
        success: function(data)
        {
             window[returnFunc](data);  
        }
    });         

}

function retrunedServerRequest(data) {
    //console.log(data);
}

function encodeHTMLTags(html) {
    if (typeof (html) == "string") {
        html = html.replace(/&/g, "&amp;"); /* must do &amp; first */
        html = html.replace(/"/g, "&quot;");
        html = html.replace(/'/g, "&#039;");
        html = html.replace(/</g, "&lt;");
        html = html.replace(/>/g, "&gt;");
    }
    return html;
}
function decodeHTMLTags(html) {
    if (typeof (html) == "string") {
        html = html.replace(/&gt;/ig, ">");
        html = html.replace(/&lt;/ig, "<");
        html = html.replace(/&#039;/g, "'");
        html = html.replace(/&quot;/ig, '"');
        html = html.replace(/&amp;/ig, '&'); /* must do &amp; last */
    }
    return html;
}


function getCurrentPage(){
    var path = window.location.pathname.split("/");
    page = path[path.length - 2];

    return page;
}

function selectCurrentNavTab() {
    var path = getCurrentPage();

    $('[data-link="' + page + '"]').addClass("selected");
}




function selectNavTab(page) {
    var tab = window.event.target || window.event.srcElement;

    if (tab.className == "caret") {
        tab = tab.parentElement;
    }

    var page = $(tab).data('link');
    if (page != undefined) {
        page = "../" + page;

    } else {
        page = "../";
    }
    window.location.href = page;

}
function xScroll(enable, element) {
    if (enable) {
        $(element).css('overflow-x', 'scroll');
    } else {
        $(element).css('overflow-x', 'hidden');
    }
}

function yScroll(enable, element) {
    if (enable) {
        $(element).css('overflow-y', 'scroll');
    } else {
        $(element).css('overflow-y', 'hidden');
    }
}


function getLength(array) {
    var length = array.length || Object.keys(array).length;
    
    return length;
}

function showDropDown(tab) {
    var dropDownContainer = document.createElement("DIV");
    dropDownContainer.className = "tabHoverMenu";

    var list = $(tab).data("list");

    for (var i = 0; i < list.length; i++) {

    }
}

function initAllSlideShows() {
    var slideShows = $(".contentSlider");
    console.log(slideShows);
    for (var i = 0; i < slideShows.length; i++) {
        var list = $(slideShows[i]).find(".slideList")[0];
        var listItems = ($(list).find("li").length > 0) ? $(list).find("li").length:1;
        var windowW = window.innerWidth;
        list.style.width = (windowW * listItems) + "px";

        $($(slideShows[i]).find(".leftSliderArrowContainer")[0]).hide();
        $($(slideShows[i]).find(".rightSliderArrowContainer")[0]).show();
    }
}

function navigateSlider() {
    var target = window.event.target || window.event.srcElement;
    var distance = window.innerWidth;
    var slideShow = document.getElementById($(target).closest(".contentSlider").attr('id'));
    var sliderCollection = $(slideShow).find(".sliderSlideCollection")[0];
    var scrollPos = $(sliderCollection).scrollLeft();
    
    if (target.className == "leftSliderArrowContainer" || target.parentElement.className == "leftSliderArrowContainer") {
        scrollPos = (scrollPos - distance);
    } else if (target.className == "rightSliderArrowContainer" || target.parentElement.className == "rightSliderArrowContainer") {
        scrollPos = (scrollPos + distance);
    }

    $(sliderCollection).animate({ scrollLeft: scrollPos + "px" });
    
    var scrollEnd = (sliderCollection.scrollWidth)-distance;

    var leftNav = $(slideShow).find(".leftSliderArrowContainer")[0];
    var rightNav = $(slideShow).find(".rightSliderArrowContainer")[0];

    if (scrollPos == scrollEnd) {
        $(leftNav).show();
        $(rightNav).hide();
    } else if (scrollPos == 0) {
        $(leftNav).hide();
        $(rightNav).show();
    } else {
        $(leftNav).show();
        $(rightNav).show();
    }
}

function getSlide() {
    var distance = window.innerWidth;
}

function setSlide(num) {

}

function createSliderNavDot(id) {

}



