$(document).ready(function () {
    $.getJSON("getMakes.php", success = function(data)
               {
                var options = "";
                
                for(var i = 0; i < data.length; i++)
                {
                    options += "<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
                    }
                    
                    $("#slctMake") .append(options);
                    $("#slctMake").change();
                    
  });
        $("#slctMake").change(function()
               {
              
                $.getJSON("getModels.php?Make=" + $(this).val(), success = function(data)
                  {        
                var options = "";
                
                for(var i = 0; i < data.length; i++)
                {
                    options += "<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
                    }
                    $("#slctModel").html("");
                    $("#slctModel") .append(options);
                    });
                
                $("#slctModel").change(function()
               {
                $.getJSON("getYear.php?Model=" + $(this).val(), success = function(data)
                  {        
                var options = "";
                
                for(var i = 0; i < data.length; i++)
                {
                    options += "<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
                    }
                    $("#slctYear").html("");
                    $("#slctYear") .append(options);
                   
                
                $("#slctModel").change(function()
               {
                $.getJSON("getColor.php?Model=" + $(this).val(), success = function(data)
                  {        
                var options = "";
                
                for(var i = 0; i < data.length; i++)
                {
                    options += "<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
                    }
                    $("#slctColor").html("");
                    $("#slctColor") .append(options);
                   
                 $("#slctModel, #slctYear").change(function()
               {
                $.getJSON("getPrice.php?Year="+ $("#slctYear").val() + "&Model=" + $("#slctModel").val(), success = function(data)
                  {        
                var options = "";
                
                for(var i = 0; i < data.length; i++)
                {
                    options += "<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
                    }
                    $("#slctPrice").html("");
                    $("#slctPrice").append(options);
                    });
                })
                  });
                 });
                });
                });
                });
    });