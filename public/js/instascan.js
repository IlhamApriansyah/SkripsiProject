
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        window.location.href=content;
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[1]);
        } else {
          console.error('Kamera tidak ditemukan.');
        }
      }).catch(function (e) {
        console.error(e);
      });