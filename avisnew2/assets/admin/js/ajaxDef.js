function callajaxAsParamData(url,data) 
      {
          var response="";
          $.ajax(
              {
                  url :url,
                  async:false,
                  type: "GET",
                  data:  data,
                  dataType:'json',
                  success: function (result) {
                      response = result;
                  }  
              });
          return response;
      }
      function callajaxAsStrData(url,data)
      {
          var response="";
          $.ajax(
              {
                  url :url,
                  async:false,
                  type: "GET",
                  data:  JSON.stringify(data),
                  dataType:'json',
                  success: function (result) {
                      response = result;
                  }
  
  
              });
          return response;
      }      
      
      function callajaxByUrlData(url,data)
      {
          var response="";
          $.ajax(
              {
                  url :url+'/'+ data,
                  async:false,
                  type: "GET",
                //   data:  JSON.stringify(data),
                  dataType:'json',
                  success: function (result) {
                      response = result;
                  }
  
              });
          return response;
      }

      function callajaxByUrlVarData(url,data)
      {
          var response="";
          $.ajax(
              {
                  url :url+'?id='+ data,
                  async:false,
                  type: "GET",
                //   data:  JSON.stringify(data),
                  dataType:'json',
                  success: function (result) {
                      response = result;
                  }
  
  
              });
          return response;
      }