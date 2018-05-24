


/*====================================
=            ON DOM READY            =
====================================*/
//$(function() {
   var coin, canvas, coinImage;
   //
   //
    document.addEventListener("DOMContentLoaded", function(event) {
        console.log("DOM fully loaded and parsed");
        
        document.getElementById("replace-text").innerHTML = "hello world!";
    
        coinImage = new Image();
        coinImage.src = "../sprites/coin-sprite-sheet.png";
        
        canvas = document.getElementById("coinAnimation");
       //
        canvas.width = 100;
        canvas.height = 100;
       
        coin = sprite({
            context: canvas.getContext("2d"),
            width: 100,
            height: 100,
            image: coinImage
        });
        
         //render coin
         coin.render();
        
        //coinImage.addEventListener("load", gameLoop);
    //});
    
});   
   
   
  
  

/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/

function sprite (options) {
				
   var that = {},
        frameIndex = 0,
        tickCount = 0,
        ticksPerFrame = 0,
        numberOfFrames = options.numberOfFrames || 1;

					
    that.context = options.context;
    that.width = options.width;
    that.height = options.height;
    that.image = options.image;

    
    that.render = function () {
            // Draw the animation
            that.context.drawImage(
               that.image,
               frameIndex * that.width / numberOfFrames,
               0,
               that.width / numberOfFrames,
               that.height,
               0,
               0,
               that.width / numberOfFrames,
               that.height);
        };
//
    that.loop = options.loop;
//    
      that.update = function () {
        tickCount += 1;
        if (tickCount > ticksPerFrame) {
        	tickCount = 0;
        	
        	  // If the current frame index is in range
            if (frameIndex < numberOfFrames - 1) {
                // Go to the next frame
                frameIndex += 1; 
                } else if (that.loop) {
                frameIndex = 0;
            }
        }
    }; 
//
    return that;
}
//
//
function gameLoop () {

  window.requestAnimationFrame(gameLoop);
  
  coin.update();
  coin.render();
}
//


