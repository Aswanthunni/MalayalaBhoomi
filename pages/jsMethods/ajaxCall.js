 var doAjax_params_default = {
     'url': null,
     'requestType': "POST",
     'contentType': 'application/x-www-form-urlencoded; charset=UTF-8',
     'dataType': 'json',
     'data': {},
 };
 
 
 function doAjax(doAjax_params) {
     var url = doAjax_params['url'];
     var requestType = doAjax_params['requestType'];
     var contentType = doAjax_params['contentType'];
     var dataType = doAjax_params['dataType'];
     var data = doAjax_params['data'];
     return $.ajax({
            type: requestType,
            url: url,
            data: data,
            cache : false
    });
 }