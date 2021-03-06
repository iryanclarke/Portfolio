/**
 * main.js
 * ----------------------------------
 * Creates physical 3D platforms and handles character movement
 * and trap placement
 * Sends & receives mobile data from websockets
 * @threejs
 */


/*
* Global character and trap objects
*/

var fox,
    bear,
    skunk,
    rabbit,
    trapType = "bramble";


/*
* Global JavaScript functions
*/

window.moveFox = function(xPos, yPos){
  fox.position.x = xPos * 1.276 * 10 + 10;
  fox.position.y = yPos * 1.35 * 10 + 10;
  //console.log("Fox X: " + fox.position.x + " Fox Y: " + fox.position.y );
}

window.moveSkunk = function(xPos, yPos){
  skunk.position.x = xPos * 1.276 * 10 + 10;
  skunk.position.y = yPos * 1.35 * 10 + 10;
  //console.log("Skunk X: " + skunk.position.x + " Skunk Y: " + skunk.position.y );
}

$( document ).ready(function() {
  $( ".bramble" ).click(function() {
    $( ".trap" ).removeClass( "selected" );
    $( ".bramble" ).addClass( "selected" );
    trapType = "bramble";
  });

  $( ".button" ).click(function() {
    $( ".trap" ).removeClass( "selected" );
    $( ".button" ).addClass( "selected" );
    trapType = "button";
  });

  $( ".pinecone" ).click(function() {
    $( ".trap" ).removeClass( "selected" );
    $( ".pinecone" ).addClass( "selected" );
    trapType = "pinecone";
  });
});

window.onload = function () {

  //THREEJS RELATED VARIABLES
  var scene,
      camera,
      controls,
      fieldOfView,
      aspectRatio,
      nearPlane,
      farPlane,
      shadowLight,
      backLight,
      light,
      renderer,
      container,
      raycaster,
      render;

  //SCREEN VARIABLES
  var HEIGHT,
      WIDTH,
      windowHalfX,
      windowHalfY,
      mousePos = {x:0,y:0};

  var mouse = new THREE.Vector2(), INTERSECTED;

  var mapPlane;


  // Initialize three.js, screen space & mouse events
  function init(){
    scene = new Physijs.Scene({ fixedTimeStep: 1 / 120 });

    HEIGHT = window.innerHeight;
    WIDTH = window.innerWidth;
    aspectRatio = WIDTH / HEIGHT;
    fieldOfView = 60;
    nearPlane = 0.1;
    farPlane = 10000;
    camera = new THREE.OrthographicCamera(
      WIDTH / - 2, WIDTH / 2, HEIGHT / 2, HEIGHT / - 2, nearPlane, farPlane);
    camera.position.z = 50;
    camera.position.y = 14;
    camera.position.x = 190;
    renderer = new THREE.WebGLRenderer({alpha: true, antialias: true });
    renderer.setSize(WIDTH, HEIGHT);
    renderer.shadowMapEnabled = true;
    raycaster = new THREE.Raycaster();
    container = document.getElementById('world');
    container.appendChild(renderer.domElement);

    windowHalfX = WIDTH / 2;
    windowHalfY = HEIGHT / 2;

    // Event listeners
    window.addEventListener('resize', onWindowResize, false);
    document.addEventListener('mousedown', handleMouseDown, false);

    // Setting up camera controls & restrictions
    controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.target = new THREE.Vector3(200,10,-300);
    controls.minPolarAngle = -Math.PI / 2;
    controls.maxPolarAngle = Math.PI / 2;
    controls.noZoom = false;
    controls.noPan = false;
    controls.noRotate = true;
    controls.minZoom = 1;
		controls.maxZoom = 5;
    controls.enableDamping = true;
    controls.dampingFactor = 1;
  }

  // Recalculate width and height on window resize
  function onWindowResize() {
    HEIGHT = window.innerHeight;
    WIDTH = window.innerWidth;
    windowHalfX = WIDTH / 2;
    windowHalfY = HEIGHT / 2;
    renderer.setSize(WIDTH, HEIGHT);
    camera.aspect = WIDTH / HEIGHT;
    camera.updateProjectionMatrix();
    render();
  }


  function handleMouseDown(event) {
      var posX, posY;
      mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
  		mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;
      raycaster.setFromCamera( mouse, camera );
      var texture;

      // Do a raycast intersect to see if any object intersects it
      var intersects = raycaster.intersectObjects( scene.children );

  				if ( intersects.length > 0 ) {

  					if ( INTERSECTED != intersects[ 0 ].object ) {

    					INTERSECTED = intersects[ 0 ].object;

              // Only attempt trap place is block as an ID associated with it
              if(INTERSECTED.userData.id) {
    						//INTERSECTED.currentHex = INTERSECTED.material.emissive.getHex();
    						INTERSECTED.material.color.setHex( 0xe74c3c );
                texture = THREE.ImageUtils.loadTexture('/img/mobilia/skunk.png');
                console.log(INTERSECTED.userData.id);
                INTERSECTED.material.map = texture;
                posX = (INTERSECTED.position.x/10) - 1;
                posY = (INTERSECTED.position.y/10);
              }

  					}

  				} else {

  					//if ( INTERSECTED ) INTERSECTED.material.emissive.setHex( INTERSECTED.currentHex );

  					INTERSECTED = null;

  				}
      if(posX != null)
        placeTrap(posX, posY, trapType);
  }

  // Create scene lights
  function createLights() {
    light = new THREE.HemisphereLight(0xffffff, 0xffffff, .5);

    shadowLight = new THREE.DirectionalLight(0xffffff, .8);
    shadowLight.position.set(0.5, 1, 0.5);

    backLight = new THREE.DirectionalLight(0xffffff, .4);
    backLight.position.set(0.5, 1, -0.5);
    backLight.shadowDarkness = .1;
    //backLight.castShadow = true;

    scene.add(backLight);
    scene.add(light);
    scene.add(shadowLight);
  }


  // Generate the plain floor blocks
  function createFloor(){

    for(var i = 0; i < 40; i++){
      var box_geometry = new THREE.BoxGeometry( 10, 10, 10);
      var groundBlock, material = new THREE.MeshLambertMaterial({ color: 0xe0dacd});

      groundBlock = new THREE.Mesh(
        box_geometry,
        material
      );

      groundBlock.position.y = 0;
      groundBlock.position.x = 10 * i + 10;
      groundBlock.userData.id = 64 + i;
      scene.add( groundBlock );
    }

  }

  // Create the platforms loaded in from the platforms.json file
  function createPlatforms() {
    for(var i = 0; i < platforms.length; i++) {
        var obj = platforms[i];

        var box_geometry = new THREE.BoxGeometry( 10, 10, 10);
        var platformBlock, material = new THREE.MeshLambertMaterial({ color: obj.colour});

        platformBlock = new THREE.Mesh(
                box_geometry,
                material
              );

        platformBlock.position.y = obj.y_pos;
        platformBlock.position.x = obj.x_pos;
        platformBlock.userData.id = obj.id;
        scene.add( platformBlock );
    }
  }


  // Pull in the moving character heads
  function createCharacters(){
    var foxImg = new THREE.MeshBasicMaterial({
        map:THREE.ImageUtils.loadTexture('/img/mobilia/fox.png')
    });
    foxImg.needsUpdate = true;

    fox = new THREE.Mesh(new THREE.PlaneBufferGeometry(10, 10),foxImg);
    //fox.overdraw = true;
    scene.add(fox);

    var skunkImg = new THREE.MeshBasicMaterial({
        map:THREE.ImageUtils.loadTexture('/img/mobilia/skunk.png')
    });
    //skunkImg.map.needsUpdate = true;

    skunk = new THREE.Mesh(new THREE.PlaneBufferGeometry(10, 10),skunkImg);
    //skunk.overdraw = true;
    scene.add(skunk);
  }

  // Pull in the map background and place it behind the platforms
  function createMap(){
    var mapImg = new THREE.MeshBasicMaterial({
        map:THREE.ImageUtils.loadTexture('/img/mobilia/mapv2.png'),
        transparent: true,
        opacity: 0.5
    });
    //mapImg.map.needsUpdate = true;

    mapPlane = new THREE.Mesh(new THREE.PlaneBufferGeometry(400, 100),mapImg);
    mapPlane.overdraw = true;
    scene.add(mapPlane);
  }

  // Called once every frame
  function loop(){
    var tempHA = (mousePos.x-windowHalfX)/200;
    var tempVA = (mousePos.y - windowHalfY)/200;
    var userHAngle = Math.min(Math.max(tempHA, -Math.PI/3), Math.PI/3);
    var userVAngle = Math.min(Math.max(tempVA, -Math.PI/3), Math.PI/3);

    render();
    requestAnimationFrame(loop);
    mapPlane.position.x = 205;
    mapPlane.position.y = 55;
  }

  // Render the scene
  function render(){
    controls.update();
    raycaster.setFromCamera( mouse, camera );
    renderer.render(scene, camera);
  }


  init();
  createLights();
  createFloor();
  createPlatforms();
  createCharacters();
  createMap();
  loop();
}
