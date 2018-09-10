<!DOCTYPE html>
<html lang="pt">

<?php include 'parts/head.php'; ?>

<body>

<?php include 'parts/nav.php'; ?>
<?php include 'parts/login.php'; ?>
<?php include 'parts/privacypolicy.php'; ?>

<div class="gridcontainer">

  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 446.4 126.1" style="enable-background:new 0 0 446.4 126.1;" xml:space="preserve">
  <g class="group">
       <polygon points="0.1,0.3 69.8,0.3 69.8,14.2 14,14.2 14,125.7 0.1,125.7 	"/>
       <polygon points="69.8,70 21,70 21,56 55.8,56 55.8,21.2 69.8,21.2 	"/>
  </g>
  <g class="group">
  	<polygon points="153.4,0.3 83.7,0.3 83.7,49.1 97.6,49.1 97.6,14.2 139.5,14.2 139.5,125.7 153.4,125.7 	"/>
  	<polygon points="83.7,56.1 132.5,56.1 132.5,70 97.6,70 97.6,125.7 83.7,125.7 	"/>
  </g>
  <g class="group">
  	<rect x="167.3" y="0.3" width="13.9" height="104.5"/>
  	<rect x="167.3" y="111.8" width="55.8" height="13.9"/>
  </g>
  <g class="group">
  	<polygon points="237,125.7 306.7,125.7 306.7,77 292.8,77 292.8,111.8 251,111.8 251,0.3 237,0.3 	"/>
  	<rect x="292.8" y="0.3" width="13.9" height="69.7"/>
  </g>
  <g id="_Group_2">
  	<path d="M320.6,0.3v125.5h60v-12.4L362.3,95c-1-1.1-0.9-2.9,0.2-3.9c1-0.9,2.6-0.9,3.6,0l14.5,14.5V88.8l-18.4-18.4
  		c-1.1-1-1.2-2.7-0.2-3.9c1-1.1,2.7-1.2,3.9-0.2c0.1,0.1,0.1,0.1,0.2,0.2l14.5,14.5V39.7l-18.4-18.4c-1-1.1-1-2.8,0.1-3.9
  		c1.1-1,2.7-1,3.8,0L380.6,32V8.5c0-1.5,1.2-2.7,2.7-2.7c1.5,0,2.7,1.2,2.7,2.7V32l14.5-14.5c1.1-1,2.8-1,3.9,0.1c1,1.1,1,2.7,0,3.8
  		l-18.4,18.3v41.4l14.5-14.5c1-1.1,2.7-1.2,3.9-0.2c1.1,1,1.2,2.7,0.2,3.9c-0.1,0.1-0.1,0.1-0.2,0.2l-18.4,18.4v16.8l14.5-14.5
  		c1.1-1.1,2.8-1.1,3.9,0c1.1,1.1,1.1,2.8,0,3.9l-18.4,18.4v12.4h60V0.3H320.6z"/>
  </g>
  </svg>


</div>

<script type="text/javascript">
function anim(){
	document.querySelectorAll('svg g').forEach((c,i)=>c.setAttribute('cy',50+Math.sin(performance.now()/1000+i)*25))
}
setInterval(anim,20)
</script>

</script>

<?php include 'parts/footer.php'; ?>

</body>
</html>
