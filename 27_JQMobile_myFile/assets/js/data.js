
var ajax = function (url, params, callback) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState === 4 && this.readyState===200) {
                //ajaxLoad(false);
                callback(this.responseText);
            }
        };
        params = (params) ? '?' + params : '';
        xhr.open('GET', url + params, true);
        //ajaxLoad(true);
        xhr.send(null);
    };
      
ajax('getInfo.php', 0, viewResponse);    
var viewResponse = function (response) {
        document.getElementById('wrapper').innerText = response;
    };