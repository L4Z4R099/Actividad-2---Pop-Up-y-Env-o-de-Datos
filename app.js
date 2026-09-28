var Alert = new CustomAlert();

function CustomAlert() {
  
    this.render = function() {
        let popUpBox = document.getElementById('popUpBox');
        popUpBox.style.display = "block";
    }
    
    this.ok = function() {
        document.getElementById('popUpBox').style.display = "none";
    }
}