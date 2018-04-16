// panel right
function open_panel()
{
slideIt();
let form_right = document.getElementById("sidebar_right");
    form_right.setAttribute("id","sidebar_right1");
    form_right.setAttribute("onclick","close_panel()");
}

function slideIt()
{
	let slidingDiv = document.getElementById("slider_right");
	let stopPosition = 0;
	
	if (parseInt(slidingDiv.style.right) < stopPosition )
	{
		slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
		setTimeout(slideIt, 1);
	}
}
	
function close_panel(){
slideIn();
    form_right = document.getElementById("sidebar_right1");
    form_right.setAttribute("id","sidebar_right");
    form_right.setAttribute("onclick","open_panel()");
}

function slideIn()
{
	let slidingDiv = document.getElementById("slider_right");
	let stopPosition = -260;
	
	if (parseInt(slidingDiv.style.right) > stopPosition )
	{
		slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
		setTimeout(slideIn, 1);
	}
}

// panel left
function open_panel_left()
{
    slideItLeft();
    let form_left = document.getElementById("sidebar_left");
    form_left.setAttribute("id", "sidebar_left1");
    form_left.setAttribute("onclick", "close_panel_left()");
}
function slideItLeft()
{
    let slidingDiv = document.getElementById("slider_left");
    let stopPosition = 0;

    if (parseInt(slidingDiv.style.left) < stopPosition )
    {
        slidingDiv.style.left = parseInt(slidingDiv.style.left) + 2 + "px";
        setTimeout(slideItLeft, 1);
    }
}
function close_panel_left()
{
    slideInLeft();
    form_left = document.getElementById("sidebar_left1");
    form_left.setAttribute("id", "sidebar_left");
    form_left.setAttribute("onclick", "open_panel_left()");
}
function slideInLeft()
{
    let slidingDiv = document.getElementById("slider_left");
    let stopPosition = -160;

    if (parseInt(slidingDiv.style.left) > stopPosition )
    {
        slidingDiv.style.left = parseInt(slidingDiv.style.left) - 2 + "px";
        setTimeout(slideInLeft, 1);
    }
}