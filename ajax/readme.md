REQUEST OBJECT

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "script.php", true);
        .open = dial the following request...
        "GET" = request method
        "script.php" = url for sending the request
        true = is it async?

REQUEST METHODS

    GET - retrieve data
    POST - submit forms / sending/changing data

REQUEST HEADERS - [$_POST]

    setRequestHeader(header, value);
    example: xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

REQUEST WORKFLOW

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "form_process", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("first_name=Bob&last_name=Smith");

RESPONSES
    
    responseText or responseXML
    resonseText = text, HTML, JSON, etc..
    
    var text = xhr.responseText;
    var xml = xhr.responseXML0
    
    var target = document.getElementById("main");
    target.innerHTML = text;
    
 PARSE THE RESPONSE
 
    XML or JSON
    JSON is always a text response (string)
    var person = JSON.parse(response);


## States & Events
    readyStates
    0: Connection created but not opened 
    1: Connection opened
    2: Request sent, received by server
    3: Response in progress (partial data)
    4: Response complete (success or failure)
    
    onreadystatechange
    - used to store a JS function
    - called each time readyState changes
    - prevents having to constantly recheck value
    
    xhr.onreadystatechange =  function(){
        if(xhr.readyState == 4 && xhr.status == 200) {
            var target = document.getElementById("main");
            target.innerHTML = xhr.responseText;
            }
        }
        
 