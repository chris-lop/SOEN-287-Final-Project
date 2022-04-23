function readMessages() {
    var uploadFile = document.getElementById("uploadFile").files[0];
    var fileReader = new FileReader();
    fileReader.onload = function(fileLoadedEvent) {
        var temp = document.getElementById("displayWin");
        temp.value = fileLoadedEvent.target.result;
    };
    fileReader.readAsText(uploadFile, "UTF-8");
};

function submitSocial() {
    const social1 = document.getElementById('social1');
    const social2 = document.getElementById('social2');
    const social3 = document.getElementById('social3');

    let data =
        'Social Link 1: ' + social1.value + '\r\n'+
        'Social Link 2: ' + social2.value + '\r\n'+
        'Social Link 3: ' + social3.value;
    
    const blob = new Blob([data], { type: 'text/plain' });
    var url = window.URL.createObjectURL(blob);
    var a = document.createElement("a");
    a.download = "socialData.txt";
    a.href = window.URL.createObjectURL(blob);
    a.target = "blank";
    a.style.display = "none"
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
};

function submitContactMsg() {
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const message = document.getElementById('message');

    let data =
        'Name: ' + name.value + '\r\n'+
        'Email: ' + email.value + '\r\n'+
        'Phone: ' + phone.value + '\r\n'+
        'Message: ' + message.value;
    
    const blob = new Blob([data], { type: 'text/plain' });
    var url = window.URL.createObjectURL(blob);
    var a = document.createElement("a");
    a.download = "messageData.txt";
    a.href = window.URL.createObjectURL(blob);
    a.target = "blank";
    a.style.display = "none"
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);

    // document.querySelector('form').reset();
};

