var allRotate = document.querySelectorAll('.scanim:not(.perspectiveAnim)');

var isMob = window.innerWidth < 600;
// console.log(isMob);

var isEditor = (typeof sliderXRot !== 'undefined');
// console.log("editor " + isEditor);

var isRotateAnim = true; //todo set this on the export string
var isAnimating = !isEditor;

const useAccelerometer = false;

var phoneRotate = document.querySelector('.phoneScene');
var allPhoneInnerRotate;
if(phoneRotate!=null) allPhoneInnerRotate = phoneRotate.querySelectorAll('.scene');

let degX = 0;
let degY = 0;
let degZ = 0;

let degXp = 0;
let degYp = 0;
let degZp = 0;

let phoneXMax = 13;
let phoneYMax = 5;
let phoneZMax = 0;

var inputx;
var inputy;

if(!isMob)
{
  document.onmousemove = function(e)
  {
    if(isAnimating)
    {
      inputx = e.clientX; // Gets Mouse X
      inputy = e.clientY; // Gets Mouse Y
      animateOnMove();
    }
  };
}

//TODO: each div object has their own x y zAnimMax
function animateOnMove()
{
  let xPercent = inputx/window.innerWidth;
  let yPercent = 1- (inputy/window.innerHeight);

  degX = (yPercent-0.5) * xAnimMax;
  degY = (xPercent-0.5) * yAnimMax;
  degZ = (xPercent-0.5) * zAnimMax;

  let pers = 50 - (xPercent-0.5) * 10;
  allRotate.forEach((mainRotate) =>
  {
    if(mainRotate.getAttribute('data-x-anim-max') !== null &&
     mainRotate.getAttribute('data-y-anim-max') !== null &&
    mainRotate.getAttribute('data-z-anim-max') !== null)
    {
      degX = (yPercent-0.5) * Number(mainRotate.getAttribute('data-x-anim-max'));
      degY = (xPercent-0.5) * Number(mainRotate.getAttribute('data-y-anim-max'));
      degZ = (xPercent-0.5) * Number(mainRotate.getAttribute('data-z-anim-max'));
    }
    else
    {
      degX = (yPercent-0.5) * xAnimMax;
      degY = (xPercent-0.5) * yAnimMax;
      degZ = (xPercent-0.5) * zAnimMax;
    }
    mainRotate.style.transform = `rotateX(${degX}deg) rotateY(${degY}deg) rotateZ(${degZ}deg)`;

  });
}//end animate on move
