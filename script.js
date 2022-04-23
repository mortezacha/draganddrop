
function allowDrop(morteza) {
  morteza.preventDefault();
}

function drag(inp) {
  inp.dataTransfer.setData("morteza", inp.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("morteza");
  ev.target.appendChild(document.getElementById(data));
}
function myFunction(elementid){

  var box = document.getElementById(elementid);
  
  /* listen to the touchMove event,
  every time it fires, grab the location
  of touch and assign it to box */
  
  box.addEventListener('touchmove', function(e) {
    // grab the location of touch
    var touchLocation = e.targetTouches[0];
    
    // assign box new coordinates based on the touch.
    box.style.left = touchLocation.pageX + 'px';
    box.style.top = touchLocation.pageY + 'px';
  })
  
  /* record the position of the touch
  when released using touchend event.
  This will be the drop position. */
  
  box.addEventListener('touchend', function(e) {
    // current box position.
    var x = parseInt(box.style.left);
    var y = parseInt(box.style.top);
  })
  

// alert(elementid);
}