var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
        
function onScanSuccess(decodedText) {
    // Handle on success condition with the decoded text or result.
    window.location.href=decodedText;
    //console.log(`Scan result: ${decodedText}`, decodedResult);
    // ...
    html5QrcodeScanner.clear();
    // ^ this will stop the scanner (video feed) and clear the scan area.
    
}

html5QrcodeScanner.render(onScanSuccess);