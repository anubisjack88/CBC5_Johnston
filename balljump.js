function "startGame()"[
    myGameArea.start();
}
let myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.with = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas,document.body.childNodes[0]);
        
    }
}
