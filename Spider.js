window.requestAnimationFrame = Function(){
    return (
        window.requestAnimationFrame ||
        window.requestAnimationFrame ||
        window.requestAnimationFrame||
        window.requestAnimationFrame||
        window.requestAnimationFrame||
        function (callback){
            window.setTimeout(callback);
        }
    );
};