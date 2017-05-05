exports.handler = (event, context, callback) => {

    console.log(event);

    var soap = require('soap');
    // Broken WSDL! Replace with correct one.
    var url = 'donner.wsdl';
    var args = {};
    soap.createClient(url, function(err, client) {
      if (err != null){
          callback(err, 'Error creating client');
      }      
      console.log(client.describe());
      client.FortuneCookie.FortuneCookieSoap.GetCookie(args, function(err, result) {
          console.log(result);
          callback(err, result);
      });
    });
   
};
