document.addEventListener('mousemove', function(e) {
  var w = window.innerWidth;
  var cw = w/2;
  var h = window.innerHeight;
  var ch = h/2;
  
  document.documentElement.style.setProperty('--x-offset', (e.clientX-cw)/w);
  document.documentElement.style.setProperty('--y-offset', (e.clientY-ch)/h);
});