	console.log('here');
	//split via perspective or rotate? allrotate and allPers
// var allRotate = document.querySelectorAll('.scene');

// var allRotate = document.querySelectorAll('.scanim');

var allRotate = document.querySelectorAll('.scanim:not(.perspectiveAnim)');
var allPerspectiveAnim = document.querySelectorAll('.perspectiveAnim');

var isMob = window.innerWidth < 600;
console.log(isMob);

var isEditor = (typeof sliderXRot !== 'undefined');
console.log("editor " + isEditor);

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

function updateCoordinates(x, y)
{
    inputx = x;
    inputy = y;
    animateOnMove();
}

// Event listeners for touch events
document.addEventListener('touchmove', function(e) {
    if (isAnimating && e.touches.length === 1) { // Ensure only one touch
        updateCoordinates(e.touches[0].clientX, e.touches[0].clientY);
    }
}, { passive: true });

document.addEventListener('touchstart', function(e) {
    if (e.touches.length === 1) { // Ensure only one touch
        isAnimating = true;
        updateCoordinates(e.touches[0].clientX, e.touches[0].clientY);
    }
}, { passive: true });

document.addEventListener('touchend', function(e) {
    isAnimating = false;
});

// Optional: Add touchcancel to handle cases where the touch is interrupted
document.addEventListener('touchcancel', function(e) {
    isAnimating = false;
});


//TODO: each div object has their own x y zAnimMax
function animateOnMove()
{
  let xPercent = inputx/window.innerWidth;
  let yPercent = 1- (inputy/window.innerHeight);


  //keyframe animation linked to mousemove
  if (typeof allObjects !== 'undefined' && Array.isArray(allObjects) && keyframeMouseLinked)
  {
    allObjects.forEach(bothObj => {
      // Check if the object has more than 0 keyframes
      let object = bothObj[0];//just pc one?, need for each again
      if (object.keyframes && object.keyframes.length > 0) {

        //use current position of object as second keyframe
        let keyframe1;
        let keyframe2;

        if(keyframeMouseInvert)
        {
          keyframe1 = object.keyframes[1];
          keyframe2 = object.keyframes[0];
        }
        else
        {
          keyframe1 = object.keyframes[0];
          keyframe2 = object.keyframes[1];
        }
        // Update the position of the object based on the xPercent
        // let test1 = object.keyframes[0].position[0] + (xPercent * (keyframe2.position[0] - object.keyframes[0].position[0]));
        // console.log(keyframe2.position);
        // allow choose of which percent,
        let linkedPercent;
        if(linkedAxisX)
        {
          linkedPercent = xPercent;
        }
        else
        {
          linkedPercent = yPercent;
        }

        if(linkedPercent)
        {

          let xDiff = keyframe2.position[0] - keyframe1.position[0];
          let yDiff = keyframe2.position[1] - keyframe1.position[1];
          let zDiff = keyframe2.position[2] - keyframe1.position[2];
          let xPosCalc = keyframe1.position[0] + (linkedPercent * xDiff);

          //links y position to y mouse too
          // let yPosCalc = keyframe1.position[1] + (yPercent * yDiff);
          let yPosCalc = keyframe1.position[1] + (linkedPercent * yDiff);
          let zPosCalc = keyframe1.position[2] + (linkedPercent * zDiff);
          object.position[0] = xPosCalc;
          object.position[1] = yPosCalc;
          object.position[2] = zPosCalc;

          let xRotDiff = keyframe2.rotation[0] - keyframe1.rotation[0];
          let yRotDiff = keyframe2.rotation[1] - keyframe1.rotation[1];
          let zRotDiff = keyframe2.rotation[2] - keyframe1.rotation[2];
          let xRotCalc = keyframe1.rotation[0] + (linkedPercent * xRotDiff);
          let yRotCalc = keyframe1.rotation[1] + (linkedPercent * yRotDiff);
          let zRotCalc = keyframe1.rotation[2] + (linkedPercent * zRotDiff);
          object.rotation[0] = xRotCalc;
          object.rotation[1] = yRotCalc;
          object.rotation[2] = zRotCalc;


          //TODO: only do this if element is not div/scene
          let opacityDiff = keyframe2.opacity - keyframe1.opacity;
          // let opacityCalc = 1 - Math.pow(1 - linkedPercent, 3) * opacityDiff;
          // console.log('opacityDiff:' +opacityDiff);
          let opacityCalc = keyframe1.opacity + (linkedPercent * opacityDiff);
          object.opacity = opacityCalc;


          object.refresh(true);
        }
      }
    });
  }

  //PerspectiveAnim

  //need persXAnim as a variable/added to each scanim div

  allPerspectiveAnim.forEach((mainRotate) =>
  {
      var persYAnim = Number(mainRotate.getAttribute('data-persy-anim'));
      var persXAnim = Number(mainRotate.getAttribute('data-persx-anim'));
      let xPerspective = (xPercent-0.5)*persXAnim +50;
      let yPerspective = (yPercent-0.5)*persYAnim +50;
      mainRotate.style.perspectiveOrigin = xPerspective+'% '+yPerspective+'%';
  });

  // degX = 0;
  // degY = 0;
  // degZ = 0;

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

      // if (window.DeviceMotionEvent != undefined) {
      // 	window.ondevicemotion = function(e) {
      // 		xPercent = (e.accelerationIncludingGravity.x - 4)/5;
      // 		yPercent = (e.accelerationIncludingGravity.y + 5)/10;
      //
      //     const degX = (yPercent - 0.5) * xAnimMax;
      //     const degY = (xPercent - 0.5) * yAnimMax;
      //     const degZ = (xPercent - 0.5) * zAnimMax;
      //
      //     // Apply the transform
      //     mainRotate.style.transform = `rotateX(${degX}deg) rotateY(${degY}deg) rotateZ(0deg)`;
      //
      //   };
      // }
    }//end animate on move


    function handleOrientation(event)
    {
            const xRot = event.beta; //X In degree in the range [-180,180]
            const yRot = event.gamma; //Y In degree in the range [-90,90]

            const maxXRotate = 4;
            const maxYRotate = 6;

            // Normalize the values to range [0, 1]
            // const xPercent = (gamma + 90) / 180; // Range [0, 1]
            // const yPercent = (beta + 180) / 360; // Range [0, 1]

            const xPercent = Math.max(Math.min(((xRot - 30) / 15), 1),-1); // Range [0, 1]
            const yPercent = Math.max(Math.min((yRot / 40), 1), -1); // Range [0, 1]

            // console.log('b: '+beta + ' g:'+gamma);

            // Calculate degrees for rotation
            const degX = ((-xPercent) * maxXRotate);
            const degY = (yPercent) * maxYRotate;

            // const displayElement = document.getElementById('test2');
            // displayElement.innerHTML = `
            // <p>x: ${xPercent.toFixed(2)} degx: ${degX.toFixed(2)}</p>
            // <p>y: ${yPercent.toFixed(2)} degy: ${degY.toFixed(2)}</p>`;
            // // const degZ = (xPercent - 0.5) * zAnimMax;
            allRotate.forEach((mainRotate) =>
            {
            // Apply the transform
                mainRotate.style.transform = `rotateX(${degX}deg) rotateY(${degY}deg) rotateZ(0deg)`;
            // mainRotate.style.transform = `rotateX(${degX}deg) rotateY(${degY}deg) rotateZ(${degZ}deg)`;
            });
        }
        // screen.orientation.lock('portrait');
        // Add event listener for device orientation
        if(useAccelerometer)
        {
          window.addEventListener('deviceorientation', handleOrientation);
        }
