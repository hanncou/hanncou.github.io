<section id="footer">
    <div id="footer-wrapper">
        <div id="social">
            <h2>Get in Touch</h2>
            <a href="mailto:hanncou@gmail.com?subject=Getting%20in%20Touch" aria-hidden="true">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.1 511.9"><defs>
                    <linearGradient id="PinkOrangeGradient">
                        <stop offset="5%"  stop-color="#F23C6A"/>
                        <stop offset="95%" stop-color="#F2693C"/>
                    </linearGradient>
                </defs><title>Email</title>
                <path fill="currentColor" d="M97.2,116.6c99.9,66.9,142.4,96.9,158.8,96.9h0c16.4,0,58.8-30,158.6-97.1,35.8-24.1,68.2-48.3,88.2-63.6a23.73,23.73,0,0,0,9.3-18.9v1.6A35.51,35.51,0,0,0,476.6,0H35.5A35.51,35.51,0,0,0,0,35.5v-1A23.73,23.73,0,0,0,9.3,53.4C29.4,68.8,61.6,92.8,97.2,116.6Z"/>
                <path fill="currentColor" d="M439.7,233.8c-84.8,57-144.9,104.7-183.6,104.7H256c-38.8,0-99-47.7-184.1-104.7-24.2-16.2-46.7-32.4-65.1-46A4.31,4.31,0,0,0,0,191.2V476.4a35.51,35.51,0,0,0,35.5,35.5H476.4a35.51,35.51,0,0,0,35.5-35.5V190.7a4.19,4.19,0,0,0-6.7-3.4C486.8,201,464.1,217.3,439.7,233.8Z"/>
                <path fill="url(#PinkOrangeGradient)" d="M502.8,52.6c-19.9,15.3-52.3,39.6-88.2,63.6-99.8,67-142.2,97.1-158.6,97.1h0c-16.4,0-58.9-30-158.8-96.9C61.7,92.6,29.4,68.6,9.3,53.2A23.73,23.73,0,0,1,0,34.3V84.5a23.73,23.73,0,0,0,9.3,18.9c20.1,15.4,52.3,39.4,87.9,63.2,99.9,66.9,142.4,96.9,158.8,96.9h0c16.4,0,58.8-30,158.6-97.1,35.8-24.1,68.2-48.3,88.2-63.6a23.73,23.73,0,0,0,9.3-18.9V33.7A23.73,23.73,0,0,1,502.8,52.6Z"/></svg>

                <span class="hidden">Email me!</span>
            </a>

            <a href="http://linkedin.com/in/hannah-countryman/">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.9 511.8"><defs>
                        <linearGradient id="PinkOrangeGradient">
                            <stop offset="5%"  stop-color="#F23C6A"/>
                            <stop offset="95%" stop-color="#F2693C"/>
                        </linearGradient>
                </defs><title>LinkedIn</title>
                <path fill="currentColor" d="M476.4,0H35.5A35.51,35.51,0,0,0,0,35.5V476.3a35.51,35.51,0,0,0,35.5,35.5H476.4a35.51,35.51,0,0,0,35.5-35.5V35.6A35.53,35.53,0,0,0,476.4,0Zm-320,423.3H81.7V182.7h74.7ZM119,149.9c-23.9,0-43.3-19.8-43.3-43.7a43.3,43.3,0,0,1,86.6,0C162.3,130.1,142.9,149.9,119,149.9ZM436.1,423.3H361.5V306.2c0-27.9-.6-63.7-38.8-63.7-38.8,0-44.8,30.3-44.8,61.7V423.3H203.3V182.7H275v32.8h1c10-18.9,34.3-38.8,70.7-38.8,75.6,0,89.5,49.8,89.5,114.4V423.3Z"/>
                <path fill="url(#PinkOrangeGradient)" d="M119.2,130.44A43.5,43.5,0,0,1,76.81,96.67a43.5,43.5,0,1,0,84.78,0A43.5,43.5,0,0,1,119.2,130.44Z"/>
                </svg>

                <span class="hidden">Connect with me!</span>
            </a>
        </div>
            
        <div id="credit">   
            <p>Site design and build by Hannah Countryman using Sketch and code.</p>
        </div>
    </div>
</section>
    
    
<!--Scripts-->
    
<!--JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
<!--Greeting-->
<script>
    
    var timeOfDay = new Date().getHours();
	var greeting;
    
	var morning = ("Good morning!");
	var afternoon = ("Good afternoon!");
	var evening = ("Good evening!");
    var other = ("Hello!");

	if (timeOfDay >= 0 && timeOfDay < 12) {
		greeting = morning; 

	} else if (timeOfDay >= 12 && timeOfDay < 17) {
		greeting = afternoon;

	} else if (timeOfDay >= 17 && timeOfDay < 24) {
		greeting = evening;
        
	} else {
        greeting = other;
    }
    
    document.getElementById("greeting").innerHTML = greeting;
    
</script>
    
<!--JQuery Easing-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.smooth-scroll.js"></script>
    
<!--Scrolling-->
<script>$('a.scroll').smoothScroll();</script>
   
    
    <!--Unfinished Scripts
    
<!--Nav Script- ->
<script>
window.onscroll = function() {navScroll()};

function navScroll() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.querySelector("nav").className = "nav-small";
    } else {
        document.querySelector("nav").className = "";
    }
}
</script>
    
<!--Project Color Script- ->
<script>

    var project = document.getElementById('project-container').getElementsByTagName('a');
    
    function projectColor() {
        
    }
    
    project.forEach(projectColor);
    
    
    
    
    for (var i = 0; i < a.length; i++) {
    var elem = project[i],
        color = colors[0];
    elem.style.color = color;
    colors.push(color);
    colors.shift();
}
    
</script>
    
    -->

    
</body>


</html>

