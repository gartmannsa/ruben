<div id="errorbounce">
    <h1 id="fourofour">404</h1>
</div>

<script>
    cacheY = 0;
    cacheX = 0;
    elem = document.getElementById("errorbounce")
    window.onload = startMove()
    posX = 0;
    posY = 0;

    function startMove(){
        setInterval(function(){myMove()}, 3000)
    }

    function myMove() {
        transY = Math.random() * window.innerHeight
        transX = Math.random() * window.innerWidth
        doMove(transX, transY)
    }

    function doMove(moveX, moveY) {
        let changeX = moveX / 1000
        let changeY = moveY / 1000
        setInterval(function(moveX) {
            if(posX < moveX){
                posX += changeX
                elem.style.left = posX + "px"
            }

            if(posX > moveX){
                posX -= changeX
                elem.style.left = posX + "px"
            }

            if(posY < moveY){
                posY += changeY
                elem.style.top = posY + "px"
            }

            if(posY > moveY){
                posY -= changeY
                elem.style.top = posY + "px"
            }

            if(posX == moveX){
                myMove()
            }
        }, 5)

    }
</script>